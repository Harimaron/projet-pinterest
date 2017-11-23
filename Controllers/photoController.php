<?php
/**
 *
 */
class photoController
{
  public $db;
  public $validation;

  function __construct(argument)
  {
    $this->db=new db();
    $this->validation=new Validation()
  }
  public function upLoad($photo)
  {
    if ($_SESSION["logged"]) {
      if ($this->validation->photoType($photo["type"])) {

      }
    }else{
      $this->db->logout();
      //header("Location:index?action=login");
      header("Location:index");
    }
  }

}

 ?>
