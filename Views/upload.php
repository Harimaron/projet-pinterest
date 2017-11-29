	<link rel="stylesheet" href="Assets/upload.css">
	<link href="Assets/signup.css" rel="stylesheet">
	<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Assets/header.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/header.js"></script>
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">

<body class="uploadBody">
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
			<div class="space"></div>
<div class="formWrapper">
	<header class="uploadHeader"> <img src="Assets/images/logo.png" alt=""> <h2>Upload</h2> </header>
	<form action="index.php?action=updloadData" method="post" enctype="multipart/form-data">



		<div class="input-file-container">
			<input class="input-file" id="my-file" name="url" type="file">
			<label class="uploadLabel" tabindex="0" for="my-file" class="input-file-trigger">
				<img src="Assets/images/upload.png" alt="" /><br> Select a file...</label>
		</div>

		<label for="titre"></label>
		<input type="text" name="titre" id="up_title" placeholder="Titre"/><br/><br/>

		<label for="description"></label>
		<input type="text" name="description" id="up_description" placeholder="Descritpion"/>

	 	<input type="submit" value="Valider" id="up_button"/>

	</form>
</div>
  	<!-- FOOTER STARTS HERE -->
	  <div class="footer">
			<a href="https://github.com/Harimaron/projet-pinterest/blob/master/README.md" target="blank">Devterest © 2017 All rights reserved.</a>
	  </div>
		<!-- FOOTER ENDS HERE -->

</body>
