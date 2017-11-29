<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Assets/home.css">
  <link href="Assets/header.css" rel="stylesheet">
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
	<title>test</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<!-- HEADER STARTS HERE -->
	<div class="header-wrapper">
		<a href="index.php?action=home">
		<div class="logo-header"><img alt="logo" src="https://i.imgur.com/awbs7PX.png"></div></a> <a href="index.php?action=uploadPage">
		<div class="upload-header"><img alt="logo" src="https://i.imgur.com/yKgtMFi.png"></div></a>
		<div class="search-header">
			<input name="search-header-bis" placeholder="" type="text">
		</div><a href="index.php?action=admin">
		<div class="admin-header"><img alt="logo" src="https://i.imgur.com/PkGEZTB.png"></div></a> <a href="index.php?action=logout">
		<div class="logout-header"><img alt="logo" src="https://i.imgur.com/UJ1Y6RI.png"></div></a>
	</div><!-- HEADER ENDS HERE -->

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
