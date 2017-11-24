<?php
/**
 *
 */
class userController
{
  public $db;
  public $validation;
  function __construct()
  {
    $this->db=new db();
    $this->validation=new Validation();
  }
  public function login($pseudo,$password) {

    if ($this->db->SignIn()) {

      if ($this->validation->adminIds($pseudo,$password)) {
        session_start();
        $_SESSION['error']="";
        header("location:index.php?action=admin");
      }else {
        session_start();
        $_SESSION['error']="";
        include "Views/home.php";
      }

    }else {

      session_start();
      $_SESSION['error']="invalid pseudo / password";
      include "Views/login.php";

    }

  }
    public function signUp($pseudo,$password)
    {
      if ($this->validation->ids($pseudo,$password)) {
        $this->db->signUp($pseudo,$password);
        include "Views/login.php";
      }else {
        include "Views/signup.php";
      }
    }

    public function admin()
    {
      if ($_SESSION["admin"]) {
        include "Views/admin.php";
      }else{
        $this->db->logout();
        include 'Views/login.php';
      }
    }

}


 ?>
