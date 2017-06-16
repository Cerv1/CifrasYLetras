<?php

  function startSession(){
    session_start(["use_cookies" => "0",
                  "use_only_cookies" => "0",
                  "use_trans_sid" => "1"]);
  }

  function endSession(){
    //session must be started
    if(session_status()==PHP_SESSION_NONE)
      session_start();
    //erase session vars
    //like $_SESSION = array();
    session_unset();
    //obtaining parameters from the cookie from session
    $param = session_get_cookie_params();
    //erase cookie from session
    setcookie(session_name(), $_COOKIE[session_name()], time()-2592000,
              $param['path'], $param['domain'], $param['secure'],
              $param['httponly']);
    //destroy session
    session_destroy();
  }

?>
