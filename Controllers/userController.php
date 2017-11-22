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
        header("location:index.php?action=admin");
      }else {
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
        include "Views/login.php";
      }else {
        include "Views/signup.php";
      }
    }
    public function adminIds($pseudo,$password)
    {
      if ($this->validation->adminIds($pseudo,$password)) {

      }
    }
}


 ?>
