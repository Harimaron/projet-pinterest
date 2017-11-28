<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="Assets/login.css" rel="stylesheet">
	<link href="Assets/header.css" rel="stylesheet">
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
	<script src="app.js">
	</script>
	<meta charset="ISO-8859-1">
</head>
<body>
	<!-- HEADER STARTS HERE -->
	<div class="header-wrapper">
		<a href="index.php?action=home">
		<div class="logo-header"><img alt="logo" src="https://i.imgur.com/awbs7PX.png"></div></a> <a href="index.php?action=uploadPage">
		<div class="upload-header"><img alt="logo" src="https://i.imgur.com/yKgtMFi.png"></div></a>
		<div class="search-header">
			<input name="search-header-bis" placeholder="" type="text">
		</div><a href="http://google.com">
		<div class="admin-header"><img alt="logo" src="https://i.imgur.com/PkGEZTB.png"></div></a> <a href="index.php?action=logout">
		<div class="logout-header"><img alt="logo" src="https://i.imgur.com/UJ1Y6RI.png"></div></a>
	</div><!-- HEADER ENDS HERE -->
	<div class="login-page">
		<div class="form">
<<<<<<< HEAD
			<form action="index.php?action=loginData" class="login-form" method="POST">
				<input placeholder="username" name="pseudo" type="text"> <input placeholder="password" name="password" type="password"> <button>login</button>
				<p class="message">Not registered? <a href="#">Create an account</a></p>
=======
			<form action="index.php?action=loginData" class="login-form">
				<input placeholder="username" type="text"> <input placeholder="password" type="password"> <button>login</button>
				<p class="message">Not registered? <a href="index.php?action=signup">Create an account</a></p>
>>>>>>> 9f972f7cadc5b73ff87d94968be3744421ceb60c
			</form>
		</div>
	</div>
	<div class="footer">
		<a href="https://github.com/Harimaron/projet-pinterest/blob/master/README.md" target="blank">Devterest © 2017 All rights reserved.</a>
	</div>
</body>
</html>
