<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="hero" style="background-image: url('image/background.png');">
      <form method="post" action="login.php">
      <?php include('errors.php'); ?>
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <button type="submit" name="login_user">Log In</button>
        <div class="register">
          <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>

      </form>
      <div class="bubbles">
          <img src="image/bubble.png">
          <img src="image/bubble.png">
          <img src="image/bubble.png">
          <img src="image/bubble.png">
          <img src="image/bubble.png">
          <img src="image/bubble.png">
          <img src="image/bubble.png">
      </div>
    </div>
  </body>
</html>