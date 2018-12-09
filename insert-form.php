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
			<title>Findur : Add Patient</title>
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
			<h1>Add New Patient</h1>
		<form method='post' action='process-addPatient.php' enctype="multipart/form-data">
		<input type="hidden" value="<?php echo($row["patientId"]); ?>" name="patientId"/>
		Select image to upload:
		<input type="file" name="image"<p>

		<p>First Name: <input type='text' name='firstName'></p>
		<p>Last Name: <input type='text' name='lastName'></p>
		<p>Age: <input type='text' name='age'></p>
		<p>Height: <input type='text' name='height'></p>
		<p>Weight: <input type='text' name='weight'></p>
		<p>Eye Color: <input type='text' name='eyeColor'></p>
		<p>Hair Color: <input type='text' name='hairColor'></p>
		<p>Illnesses: <input type='text' name='illness'></p>
		<p>Doctor: <input type='text' name='doctorName'></p>
		<p>Doctor No: <input type='text' name='doctorPhone'></p>
		<p>Emergency Contact: <input type='text' name='emergencyContact'></p>
		<p>Emergency No: <input type='text' name='emergencyNo'></p>
		<input type='submit'/>
		</form>
<?php
}
?>
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
