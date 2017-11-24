<?php
/**
 *
 */
class photoController
{
  public $db;
  public $validation;
  public $photo;
  function __construct()
  {
    $this->db=new db();
    $this->validation=new Validation();
    $this->photo= new photo();
  }
  public function upLoad($photo,$title,$description)
  {
    if ($_SESSION["logged"]) {
      if ($this->validation->photoType($photo["type"])) {

        use Intervention\Image\ImageManagerStatic as Image;

        Image::configure(array('driver' => 'imagick'));

        $img = Image::make($photo["tmp_name"]);

        $img->save('../big-imageBank/'.$photo["name"]);

        $img->resize(320, 240);


        $img->save('../mini-imageBank/'.$photo["name"]);
        $this->photo->newPhoto($photo["name"],$title,$description,$_SESSION["user_id"]);
        //model
        header("Location:index.php?action=home");
      }else {
        header("Location:index.php?action=uploadPage");
      }
    }else{
      $this->db->logout();
      //header("Location:index?action=login");
      header("Location:index");
    }
  }

}

 ?>
