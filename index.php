<?php
$action=$_GET['action'];


switch($action)
{
  case 'login':
  include "Views/login.php";
  break;
  case 'admin':
    include "Views/admin.php";
  break;
  case 'home':
    include "Views/home.php";
  break;
  case 'signup':
    include "Views/signup.php";
  break;
  case 'upload':
    include "Views/upload.php";
  break;
}

?>
