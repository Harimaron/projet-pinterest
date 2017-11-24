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

        use Intervention\Image\ImageManagerStatic as Image;

        Image::configure(array('driver' => 'imagick'));

        $img = Image::make($photo["tmp_name"]);

        $img->save('../big-imageBank/'.$photo["name"]);

        $img->resize(320, 240);


        $img->save('../mini-imageBank/'.$photo["name"]);
        //model
        header("Location:index.php?action=home")
      }
    }else{
      $this->db->logout();
      //header("Location:index?action=login");
      header("Location:index");
    }
  }

}

 ?>
