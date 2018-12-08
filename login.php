<?php
session_start();

$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>
<!doctype html>
	<html>
		<head>
			<title>Findur : Login</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" type="text/css" href="css/main.css" media="all">
		</head>

<!-- HEADER GOES HERE -->
		<header>
			<div class="logo">
				<img src="images/logo.png" />
			</div>

			<div class="navbar">
				<a href="home.php">HOME</a> |
				<a href="contact.php">CONTACT</a> |
				<?php if($_SESSION['logged-in']==true){?><a href="logout.php">LOGOUT</a> | <?php
				}else{
					?><a href="login.php">LOGIN</a> |
						<a href="register.php">REGISTER</a> <?php
				}?>
				<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> <?php }?>
			</div>
		</header>

<!-- BODY GOES HERE -->

	  <body>
			<form method='post' action='process-login.php'>
				<h1>Login</h1>
				<fieldset>
				<input type="hidden" value="<?php echo($row["contactId"]); ?>" name="contactId"/>
				  <p>
						Email: <input type='email' name="email" placeholder="e.g. name@gmail.com" required/>
	          Password:<input type='text' name="password" placeholder="enter your password" required/>
				  </P>
					</fieldset>
					<input type='submit'>
			</form>
		</body>


<!-- FOOTER GOES HERE -->
		<div class="footer">
			<a href="contact.php">Contact Us</a>
			<a href="login.php">Login</a>
			<br />
			<a href="index.php">Findur.com</a><a href="cookiepolicy.html" target="_blank">cookie policy</a>
			<br />
			<form method='post' action='process-newsletter.php'>
				Sign up for our newsletter!
				<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
			</form>
		</div>
	</html>
