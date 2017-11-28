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


}
?>
<body>
  <form action="index.php?action=editData">

  <input type="text" name="title" value=<?php echo $edit['title']; ?>/>
  <input type="description" name="descritpion" value=<?php echo $edit['description']; ?>/>
  <input type="hidden" name="id" value=<?php echo $edit['photo_id'];  ?>
  <input type="submit" value="Edit"/>


  </form>
</body>
</html>
