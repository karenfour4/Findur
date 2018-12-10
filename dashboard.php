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
			<title>Findur : dashboard</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" type="text/css" href="css/main.css" media="all">
		</head>

<!-- HEADER GOES HERE -->
		<header>
				<div class="logo">
					<img src="images/logo.png" />
				</div>

				<div class="navbar">
					<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> | <?php }?>
					<?php if($_SESSION['logged-in']==true){?><a href="account-settings.php">ACCOUNT SETTINGS</a> | <a href="insert-form.php">ADD PATIENT</a> | <a href="dashboard.php">DASHBOARD</a> | <a href="logout.php">LOGOUT</a> |<?php
					}else{
						?><a href="login.php">LOGIN</a> |
							<a href="register.php">REGISTER</a> <?php
					}?>
				</div>
		</header>

<!-- BODY GOES HERE -->
		<body>
			<div class="main-container">
				<div class="main">
					<div class="content">
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
								<p><a href="insert-form.php">+</a></p>
								<p><a id="patient911" href="locatePatient.php">Locate Patient</a></p>
								<!-- <p><a id="patient911" href="">9-1-1</a></p> -->
							</div>
						</div>
					</div>
				</div>

			<script src="js/main-locate.js"></script>
			<script src="js/findurMap.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPpk0rmzNDhi1IlHizFNR5AtyHp6zDUG8&callback=initMap" async defer></script>
		</body>
	</html>

<?php } ?>

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
