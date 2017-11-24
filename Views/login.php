<html>
    <head>
        <title>Login</title>
            <link rel="stylesheet" href="Assets/login.css">
            <script src="app.js"></script>
            <meta charset="ISO-8859-1">
      </head>
      <body>
      <div class="login-page">
          <div class="form">
            <form class="login-form" action="index.php?action=loginData" method="POST">
              <input type="text" name="pseudo" placeholder="username"/>
              <input type="password" name="password" placeholder="password"/>
              <button>login</button>
              <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
          </div>
        </div>
      </body>
</html>
