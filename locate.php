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
		<title>Locate Page</title>
		<meta charset="utf-8" />
	</head>
	<header>
			<img src = "images/logo.png" />
			<nav>
					<ul>
							<li><a href="index.php">Home</a></li>
							<?php if ($_SESSION['logged-in'] == true){
							?><li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="account-settings.php">Account Settings</a></li>
							<li><a href="insert-form.php">Add New Patient</a></li>
							<li><a href="locate.php">Locate Patient</a></li>
							<li><a href="logout.php">Logout</a></li><?php
					}else{?>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
					<?php } ?>
						<li><a href="contact.php">Contact Us</a></li>
							<?php if ($_SESSION['role'] == 2) { ?> <li><a href="dashboard.php">Dashboard</a></li> <?php } ?>
					</ul>
			</nav>
	</header>
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
</html>
<?php
}
 ?>

 <!-- FOOTER GOES HERE -->
 <footer>
 		<p>By visiting <a href="index.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a></p>
 		<form method='post' action='process-newsletter.php'>
 		</form>
 </footer>
