<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{
/* select data from one row in a database and display them in editable fields */

/* receive a record id*/
//myapp.com/edit.php?id=5
// $patientId = $_GET['patientId'];

$patientId = $_GET['patientId'];

/* query database and retrieve recotd info based on the id*/
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `patient` WHERE patientId = $patientId");

$stmt->execute();

$row = $stmt->fetch();
/* display data in editable fields of an update form*/
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
						<a href="register.php">REGISTER</a> <?php
				}?>
				<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> | <?php }?>
				<a href="contact.php">CONTACT</a>
			</div>
	</header>

<!-- BODY GOES HERE -->

		<body>
			<h1>Missing Persons Report</h1><br>
			<p><h2> Last Known GPS co-ordinates</h2></p>
			<form action="confirm-update.php" method="POST">

				<p>PatientId: <?php echo($row["patientId"]); ?></p>
				<input type="hidden" value="<?php echo($row["patientId"]); ?>" name="patientId"/>
				<p>Lat: <input type='text' name='lat' value="<?php echo($row["lat"]); ?>"/></p>
				<p>Lng: <input type='text' name='lng' value="<?php echo($row["lng"]); ?>"/></p>

				<p>First Name: <input type='text' name='firstName' value="<?php echo($row["firstName"]); ?>"/></p>
				<p>Last Name: <input type='text' name='lastName' value="<?php echo($row["lastName"]); ?>"/></p>
				<p>Image: <input type='text' name='image' value="<?php echo($row["image"]); ?>"/></p>
				<p>Age: <input type='text' name='age' value="<?php echo($row["age"]); ?>"/></p>
				<p>Height: <input type='text' name='height' value="<?php echo($row["height"]); ?>"/></p>
				<p>Weight: <input type='text' name='weight' value="<?php echo($row["weight"]); ?>"/></p>
				<p>Eye Color: <input type='text' name='eyeColor' value="<?php echo($row["eyeColor"]); ?>"/></p>
				<p>Hair Color: <input type='text' name='hairColor' value="<?php echo($row["hairColor"]); ?>"/></p>
				<p>Illnesses: <input type='textarea rows="10" cols="100"' name='illness' value="<?php echo($row["illness"]); ?>"/></p>
				<p>Doctor: <input type='text' name='doctorName' value="<?php echo($row["doctorName"]); ?>"/></p>
				<p>Doctor No: <input type='text' name='doctorPhone' value="<?php echo($row["doctorPhone"]); ?>"/></p>
				<p>Emergency Contact: <input type='text' name='emergencyContact' value="<?php echo($row["emergencyContact"]); ?>"/></p>
				<p>Emergency Phone: <input type='text' name='emergencyNo' value="<?php echo($row["emergencyNo"]); ?>"/></p>
				<input type='submit'/>
			</form>

			<div id = "map"></div>
			<?php
			}
			?>
			<script src="js/findurMap.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPpk0rmzNDhi1IlHizFNR5AtyHp6zDUG8&callback=initMap" async defer></script>
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
