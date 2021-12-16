<?php
// Never have HTML
// Never respond with any data
// Always and only take you somewhere else
// VALIDATION
if( ! isset($_POST['email']) ){
  header("Location: ../signup/signup2.php");
  exit();
}
if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
  header("Location: ../signup/signup2.php");
  exit();
}


// OK
header("Location: signup-ok.php");
exit();