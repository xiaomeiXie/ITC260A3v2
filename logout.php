<?php
 session_start();

  
 $_SESSION['pass']=NUll;
  //session_destroy();   
  // function that Destroys Session 
  //header("Location: index.php");
  echo '<script type="text/javascript"> window.open("index.php","_self");</script>';
?>