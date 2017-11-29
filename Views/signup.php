<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link href="Assets/signup.css" rel="stylesheet">
	<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Assets/header.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/header.js"></script>
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
	<script src="app.js">
	</script>
	<meta charset="ISO-8859-1">
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
	</div><!-- HEADER ENDS HERE -->
	<div class="login-page">
		<div class="form">
			<form action="index.php?action=signupData" class="register-form" method="post">
				<input name="pseudo" placeholder="username" type="text"> <input name="password" placeholder="password" type="password">
				<input type="submit" value="signUp"/>
			</form>
				<p class="message">Already registered? <a href="index.php?action=login">Sign In</a></p>

		</div>
  </div>
  	<!-- FOOTER STARTS HERE -->
	<div class="footer">
		<a href="https://github.com/Harimaron/projet-pinterest/blob/master/README.md" target="blank">Devterest © 2017 All rights reserved.</a>
  </div>
    <!-- FOOTER ENDS HERE -->
</body>
</html>
