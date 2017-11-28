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

	<a class="grid-item" href="#" title="titre">
		<figure>
		<img src="<?php echo "mini-imageBank/".$champImage['url']; ?>">
		<figcaption><?php echo $champImage['title']; ?></figcaption>
		</figure>
	</a>
<?php
} ?>

  <div class="grid-item">
   <a href="#">
     <figure>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
      <figcaption>Description</figcaption>
    </figure>
  </a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

  <div class="grid-item">
  	<a href="#">
  	<figure>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
     <figcaption>Description</figcaption>
	</figure>
	</a>
  </div>

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
