<?php



require '../vendor/autoload.php';


use Intervention\Image\ImageManagerStatic as Image;

Image::configure(array('driver' => 'imagick'));

$img = Image::make($_FILES["url"]["tmp_name"]);

$img->save('../big-imageBank/'.$_FILES["url"]["name"]);

$img->resize(320, 240);


$img->save('../mini-imageBank/'.$_FILES["url"]["name"]);

// $image=$_FILES["url"];
// $tmp=$image["tmp_name"];
// $name=$image["name"];
// $type=$image["type"];
// $filepath="../big-imageBank/".$name;
//
//
// move_uploaded_file($tmp,$filepath);



?>
