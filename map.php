<?php

/* Connect to db and get lat and lng by patient id */
/* replace hardcoded lat and lng attributes in the map element */

/* just like pulling in firstName and lastName using PHP. */
/* Have a look at getPatient.php to see how to fetch information. */

$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>
<!doctype html>
<html>
	<head>
		<title>Locate Patient</title>
		<meta name="viewport" content="initial-scale=1.0" />
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css" media="all">

	</head>

<!-- HEADER GOES HERE -->
<header>
	<nav>
		<ul>
			<li class="LFloat"><a href="home.php"><img id="navLogo" src = "images/logo_invert.png" /></a></li>
			<li class="LFloat"><a href="home.php">Home</a></li>
			<li class="LFloat"><a href="map.html">Locate</a></li>
			<li class="LFloat"><a href="contact.php">Contact Us</a></li>
			<li class="LFloat"><a href="login.php">Login</a></li>
			<li class="LFloat"><a href="register.php">Register</a></li>
		</ul>
	</nav>
</header>
<body>
	<div class="bodyContent">
		<div id="map" lat="48.8587741" lng="2.2069771"></div>
		<input id="get_location" type="button" name="Get_location!" value="get_location" />
		<input id="Emergency_Btn" type="button" name="Emergency_Btn" value="911" />
	</div>

	<script src="js/findurMap.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPpk0rmzNDhi1IlHizFNR5AtyHp6zDUG8&callback=initMap" async defer></script>
</body>
<!-- FOOTER GOES HERE -->
<footer>
	<p><a href="contact.php">Contact Us</a></p>
	<p><a href="login.php">Login</a></p>
	<p>By visiting <a href="index.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a></p>
	<form method='post' action='process-newsletter.php'>
		<p>Sign up for our newsletter</p>
		<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
	</form>
</footer>
