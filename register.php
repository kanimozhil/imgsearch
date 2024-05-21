<?php include('server.php') ?>
<html>
  <head>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <title>login</title>

<body>

  <div class="hero" style="background-image: url('image/background.png');">

<form method="post" action="register.php">
  <h3>Register Here</h3>
  <?php include('errors.php'); ?>

  <label for="username">Username</label>
  <input type="text" placeholder="your name" name="username" id="username" value="<?php echo $username; ?>">

  <label for="email">Email</label>
  <input type="text" placeholder="email id" id="email" name="email" value="<?php echo $email; ?>">

  <label for="password">Password</label>
  <input type="password" placeholder="Password" id="password" name="password_1">

	<label>Confirm password</label>
	<input type="password" name="password_2">

  <button type="submit" name="reg_user">Register</button>
  <div class="register">
    <p> Already You Have? <a href="login.php">Login</a></p>
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