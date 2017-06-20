<?php
  if(!defined("DB_SERVER"))
    define('DB_SERVER', 'localhost');
  if(!defined("DB_USERNAME"))
    define('DB_USERNAME', 'adrianmorente1617');
  if(!defined("DB_PASSWORD"))
    define('DB_PASSWORD', 'Nsnh1u');
  if(!defined("DB_DATABASE"))
    define('DB_DATABASE', 'adrianmorente1617');

  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
 ?>
