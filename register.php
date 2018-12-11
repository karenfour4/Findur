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
			<title>Findur : Home</title>
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
					<a href="about.php">ABOUT</a> |
					<?php if($_SESSION['logged-in']==true){?><a href="logout.php">LOGOUT</a> | <?php
					}else{
						?><a href="login.php">LOGIN</a> |
							<a href="register.php">REGISTER</a> | <?php
					}?>
					<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> | <?php }?>
					<a href="contact.php">CONTACT</a>
				</div>
		</header>

<!-- BODY GOES HERE -->
	  <body>
			<div class="main-container">
				<div class="main">
					<div class="content">
							<form method='post' action='process-register.php'>
								<h1>Register</h1>
									<fieldset id="fieldset">
										<input type="hidden" value="<?php echo($row["userId"]); ?>" name="userId"/>
											 First Name: <input type='text' placeholder="e.g. Peter" name="firstName" /><br />
											 Last Name: <input type='text' placeholder="e.g. Wellington" name="lastName" /><br />
											 Phone: <input type='text' placeholder="e.g. 9052325678" name="phone" /><br />
											 Email: <input type='email' name="email" placeholder="e.g. PeterW@gmail.com" required/><br />
											 Password:<input type='text' name="password" placeholder="Must contain a number" required/>
									</fieldset>
								<input id="submit" type='submit'>
							</form>
						</div>
					</div>
				</div>
		</body>

<!-- FOOTER GOES HERE -->
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
