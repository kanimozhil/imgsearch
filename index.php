<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
  </head>
    <body>
        <div class="hero" style="background-image: url('image/background.png');">

          <nav style="padding:5px 15px;">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">image</label>
            <ul>
                <li style="margin:10px;"><a class="active" href="./search-engine/index.php">ISE</a></li>
                <li style="margin:10px;"><a href="register.html">img convert</a></li>
                <li style="margin:10px;"><a href="navbar.html"> hii </a></li>
                <li style="margin:10px;"><a href="#">NodeJS</a></li>

		            <button class="btn btn-danger" style="margin-top:5px;"><a href="index.php?logout='1'" style="text-decoration: none; color:white; ">logout</a></button>
            </ul>
          </nav>

          <div class="bubbles">
            <img src="image/bubble.png">
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