<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Assets/header.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="Javascript/header.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <!-- header -->
<div id='cssmenu'>
<ul>
   <li><a href='index.php?action=home'>Home</a></li>
   <li class='active'><a href='index.php?action=uploadPage'>Upload</a>
   <li><a href='index.php?action=admin'>Admin</a></li>
   <li><a href='index.php?action=logout'>Logout</a></li>
</ul>
</div>
<!-- header -->
  <form action="index.php?action=editData" method="POST">

  <input type="text" name="title" value="<?php echo $edit['title']; ?>"/>
  <input type="description" name="description" value="<?php echo $edit['description']; ?>"/>
  <input type="hidden" name="id" value="<?php echo $edit['photo_id'];  ?>" />
  <input type="submit" value="Edit"/>


  </form>
</body>
</html>
