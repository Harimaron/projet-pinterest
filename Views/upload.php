	<link rel="stylesheet" href="Assets/upload.css">

<body class="uploadBody">
<div class="formWrapper">
	<form action="index.php?action=updloadData" method="post" enctype="multipart/form-data">



		<div class="input-file-container">
			<input class="input-file" id="my-file" type="file">
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

</body>
