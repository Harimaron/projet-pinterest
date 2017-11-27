<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Assets/home.css">
	<title></title>
</head>
<body>

	<main>
		<div class="grid">

<?php
//$data=[];
foreach ($data as $champImage) { ?>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="<?php echo "mini-imageBank/".$champImage['url']; ?>">
						<h1> <?php echo $champImage['title']; ?> </h1>
					</figure>
			</a>
<?php
} ?>
<!--
			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/700x500">
					</figure>
					<figcaption>Description</figcaption>
			</a>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/350x350">
					</figure>
					<figcaption>Description</figcaption>
			</a>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/350x440">
					</figure>
					<figcaption>Description</figcaption>
			</a>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/500x100">
					</figure>
					<figcaption>Description</figcaption>
			</a>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/400x250">
					</figure>
					<figcaption>Description</figcaption>
			</a>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/850x150">
					</figure>
					<figcaption>Description</figcaption>
			</a>

			<a class="grid-item" href="#" title="titre">
				  	<figure>
						<img src="http://placehold.it/350x440">
					</figure>
					<figcaption>Description</figcaption>
			</a>
 -->
		</div>
	</main>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script src="Javascript/home.js" type="text/javascript"></script>
<script src="Javascript/libraryHome.js" type="text/javascript"></script>

</body>
</html>
