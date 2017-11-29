<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Assets/home.css">
	<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Assets/header.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/header.js"></script>
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
	<title>test</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<!-- HEADER STARTS HERE -->
	<div id='cssmenu'>
<ul>
   <li><a href='index.php?action=home'>Home</a></li>
   <li class='active'><a href='index.php?action=uploadPage'>Upload</a>
   <li><a href='index.php?action=admin'>Admin</a></li>
   <li><a href='index.php?action=logout'>Logout</a></li>
</ul>
</div>
	<!-- HEADER ENDS HERE -->

<div class="grid">

  <div class="grid-sizer"></div>

<?php
foreach ($data as $champImage) { ?>

	<div class="grid-item" href="#" title="titre">
		<div>
		<img src="<?php echo "mini-imageBank/".$champImage['url']; ?>">
		<div>
			<?php echo $champImage['title']; ?>
		</div>
	</div>
		<a href="index.php?action=edit&id=<?php echo $champImage['photo_id'];?>">edit</a>
		<a href="index.php?action=deletePhoto&id=<?php echo $champImage['photo_id'];?>">delete</a>

	</div>
<?php
} ?>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
<script src="https://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>

<script src="Javascript/home.js" type="text/javascript"></script>
<div class="footer">
	<a href="https://github.com/Harimaron/projet-pinterest/blob/master/README.md" target="blank">Devterest © 2017 All rights reserved.</a>
</div>
</body>
</html>
