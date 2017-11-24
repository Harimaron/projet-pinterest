<?php
include "Controllers/userController.php";
include 'Controllers/photoController.php';
include 'Helper/Validation.php';
include 'Models/db.php';
include 'Models/photo.php';
require '../vendor/autoload.php';

$action="";
$userController=new userController();
$photoController= new photoController();
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
  case 'uploadPage':
  break;
  case 'updloadData':
    $photoController->upLoad($_FILES["url"],$_POST["titre"],$_POST["description"]);
    break;
  default:
    include "Views/login.php";
  break;
}

?>
