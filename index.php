<?php
include "Views/header.php";
$action =$_GET["action"];

switch ($action) {
  case 'login':
    include 'Views/login.php';
    break;

  default:
    break;
}
?>
