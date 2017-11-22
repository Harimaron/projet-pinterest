<?php
include "Controllers/userController.php";
include 'Controllers/';
include 'Helper/Validation.php';
include 'Models/db.php';
include 'Models/photo.php';

$action="";
$userController=new userController();
extract($_POST);
extract($_GET);

switch($action)
{
  case 'login':
    $userController->login($pseudo,$password);
  break;
  case 'admin':
    $userController->admin();
  break;
  case 'home':
  break;
  case 'signup':
    //include 'Views/signup.php';
    $userController->signUp($pseudo,$password);
  break;
  case 'upload':
  break;
  default:
    include "Views/login.php";
  break;
}

?>
