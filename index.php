<?php
	include("config.php");
?>

<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
			<link href="llustration-reindeer-head-simple-contour-260nw-1914044329-modified.png" rel="icon" type="image/png">
	    <title> Code Deer</title>
		<meta http-equiv="refresh" content="">
		<link href="index.css" rel="stylesheet">
	</head>
  <body>
	<div class="container">
 	<div class="header">
 		<h1>Login</h1>
 	</div>
 	<div class="main">
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="Username" name="">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password" placeholder="password" name="">
 			</span><br>
 				<button class="login">Sign in</button>
				<a href="register.php"><button class="register">Register</button></a><br>
        <a href="menu.html"><button class="guest">Sign in as guest</button></a>
 	</div>
 </div>
  <a href ="forgotpassword.php"><button class="forgotpassword">Forgot password?</button></a>
	</body>
</html>