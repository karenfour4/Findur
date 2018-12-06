<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `patient`");

$stmt->execute();
?>

<!doctype html>
<html>
	<head>
		<title>Dashboard</title>
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

		<form>
		<select name="patient" onchange="showPatient(this.value)">
		<option value="">Select a patient:</option>
		<option value="1">Ralph Somebody</option>
		<option value="2">Aileen Somebody</option>
		</select>
		</form>

		<br>
		<div id="txtHint"><b>Please use the dropdown to select the relevant patient under your care.</b></div>

		<div>
			<p><a href="#">+</a></p>
			<p><a id="patient911" href="">Locate Patient</a></p>
			<!-- <p><a id="patient911" href="">9-1-1</a></p> -->

		</div>

		<script src="js/main-locate.js"></script>
		<script src="js/findurMap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPpk0rmzNDhi1IlHizFNR5AtyHp6zDUG8&callback=initMap" async defer></script>
	</body>
</html>

<?php } ?>

<!-- FOOTER GOES HERE -->
<footer>
	   <p>By visiting <a href="index.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a></p>
	   <form method='post' action='process-newsletter.php'>
	   </form>
</footer>
