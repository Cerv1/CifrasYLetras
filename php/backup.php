<?php
  include("config-db.php");

  $tablas = array();
  $result = mysqli_query($db,'SHOW TABLES');
  while ($row = mysqli_fetch_row($result))
    $tablas[] = $row[0];

  // Salvar cada tabla
  $salida = '';
  foreach ($tablas as $tab) {
    $result = mysqli_query($db,'SELECT * FROM '.$tab);
    $num = mysqli_num_fields($result);
    $salida .= 'DROP TABLE '.$tab.';';
    $row2 = mysqli_fetch_row(mysqli_query($db,'SHOW CREATE TABLE '.$tab));
    $salida .= "\n\n".$row2[1].";\n\n"; // row2[0]=nombre de tabla
    while ($row = mysqli_fetch_row($result)) {
      $salida .= 'INSERT INTO '.$tab.' VALUES(';
      for ($j=0; $j<$num; $j++) {
        $row[$j] = addslashes($row[$j]);
        $row[$j] = preg_replace("/\n/","\\n",$row[$j]);
        if (isset($row[$j]))
          $salida .= '"'.$row[$j].'"';
        else
        $salida .= '""';
          if ($j < ($num-1)) $salida .= ',';
      }
      $salida .= ");\n";
    }
    $salida .= "\n\n\n";
  }

  mysqli_query($db,'SET FOREIGN_KEY_CHECKS=0');
  $error = '';
  $sql = file_get_contents($f);
  $queries = explode(';',$sql);
  foreach ($queries as $q) {
    if (!mysqli_query($db,$q))
      $error .= mysqli_error($db);
  }
  mysqli_query($db,'SET FOREIGN_KEY_CHECKS=1');

  $backup = var_export($salida, true);
  $backup[0]=" ";
  $backup[strlen($backup)-1]=" ";
  $backup = "SET FOREIGN_KEY_CHECKS=0;\n" . $backup . "\nSET FOREIGN_KEY_CHECKS=1;";
  file_put_contents('../db_backup/backup.sql', $backup);

?>
