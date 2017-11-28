<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<?php
if( $_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
$photo=new photo();
$edit=$photo->getEditPhoto($id);

}
?>
<body>
  <form action="">

  <input type="text" name="title" value=<?php echo $edit['title']; ?>/>
  <input type="description" name="descritpion" value=<?php echo $edit['description']; ?>/>
  <input type="submit" value="Edit"/>


  </form>
</body>
</html>
