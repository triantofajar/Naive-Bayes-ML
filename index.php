<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="login/css/style.css">
</head>

<body>
  <body class="align">

  <div class="grid">

    <form action="proses_login.php" method="POST" class="form login">

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="username" placeholder="Username" name="username" required>
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" name="password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">
      </footer>

    </form>

  </div>

</body>
  
  
</body>
</html>
