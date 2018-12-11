<?php ?>

<!doctype html>
<html>
	<head>
		<title>Thank You Page</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css" media="all">

	</head>
	<header>
			<div class="logo">
				<img src="images/logo.png" />
			</div>

			<div class="navbar">
				<a href="home.php">HOME</a> |
				<a href="about.php">ABOUT</a> |
				<?php if($_SESSION['logged-in']==true){?><a href="logout.php">LOGOUT</a> | <?php
				}else{
					?><a href="login.php">LOGIN</a> |
						<a href="register.php">REGISTER</a> <?php
				}?>
				<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> | <?php }?>
				<a href="contact.php">CONTACT</a>
			</div>
	</header>

	<body>
		<p>Thanks for your information.  You should receive a response within 24 hours.</p>
		<a href="dashboard.php">Go back to dashboard</a>
	</body>

	<div class="footer">
		<a href="contact.php">Contact Us</a>
		<a href="login.php">Login</a>
		<br />
		<a href="index.php">Findur.com</a><a href="#" target="_blank">cookie policy</a>
		<br />
		<form method='post' action='process-newsletter.php'>
			Sign up for our newsletter!
			<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
		</form>
	</div>
</html>

</html>
