<?php
session_start();
if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{
?>

<!doctype html>
	<html>
		<head>
			<title>Findur : Locate</title>
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
			<h1>Locate Patient</h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23161.326990459074!2d-79.71408433930175!3d43.47800861978231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b5d28315b07cd%3A0xffcd239cf878470e!2sSheridan+College!5e0!3m2!1sen!2sca!4v1542818207264" width="500" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div>
				<p><a href="#">+</a></p>
				<p><a href="#">Locate Firstname</a></p>
				<p><a href="#">9-1-1</a></p>
			</div>

			<form>
			<select name="patient" onchange="showPatient(this.value)">
			<option value="">Select a patient:</option>
			<option value="1">Ralph Somebody</option>
			<option value="2">Aileen Somebody</option>
			</select>
			</form>
			<br>
			<div id="txtHint"><b>Patient info will be listed here.</b></div>
			<script src="js/main.js"></script>
		</body>
			<?php
			}
			 ?>

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
