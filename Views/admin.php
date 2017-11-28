<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Assets/admin.css">
	<title>test</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>

<div class="grille_admin">

	<div class="grid">

	  <div class="grid-sizer"></div>

	<?php
	foreach ($data as $champImage) { ?>
		<a class="grid-item" href="#" title="titre">
			<figure>
			<img src="<?php echo "mini-imageBank/".$champImage['url']; ?>">
			<a href="">Delete</a><a href="">Edit</a>
			<figcaption><?php echo $champImage['title']; ?></figcaption>
			</figure>
		</a>
	<?php
	} ?>

<!-- pour le test -->
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
<!-- fin du test -->

	  </div>

	</div>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
<script src="https://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>

<script src="Javascript/home.js" type="text/javascript"></script>

</body>
</html>
