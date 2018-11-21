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
		<title>User Dashboard</title>
		<!-- ADD SELECT FORM FIELD HERE TO CHANGE PATIENT INFO -->
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
		<h1>User Dashboard</h1>

		<?php
			//show records (process results)
			while($row = $stmt->fetch()) {
				//echo($row["email"]); //or $row[0];
				?><div>
				<fieldset>
						Id: <?php echo($row["patientId"]);?>
						<span><a href="edit.php?id=<?php echo($row["patientId"]);?>">Update Information</a></span>
						<p><img src='images/<?php echo ($row["image"]); ?>'></p>
						<p>First Name: <?php echo($row["firstName"]); ?></p>
						<p>Last Name: <?php echo($row["lastName"]); ?></p>
						<p>Age: <?php echo($row["age"]); ?></p>
						<p>Height: <?php echo($row["height"]); ?></p>
						<p>Weight: <?php echo($row["weight"]); ?></p>
						<p>Eye Color: <?php echo($row["eyeColor"]); ?></p>
						<p>Hair Color: <?php echo($row["hairColor"]); ?></p>
						<p>Illnesses: <?php echo($row["illness"]); ?></p>
						<p>Doctor: <?php echo($row["doctorName"]); ?></p>
						<p>Doctor No: <?php echo($row["doctorPhone"]); ?></p>
						<p>Emergency Contact: <?php echo($row["emergencyContact"]); ?></p>
						<p>Emergency No: <?php echo($row["emergencyNo"]); ?></p>
				</fieldset>
				</div>
			<?php }
			?>
			
		<div>
			<p><a href="#">+</a></p>
			<p><a href="#">Locate Firstname</a></p>
			<p><a href="#">9-1-1</a></p>
		</div>
	</body>
</html>

<?php } ?>

<!-- FOOTER GOES HERE -->
<footer>
	   <p>By visiting <a href="index.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a></p>
	   <form method='post' action='process-newsletter.php'>
	   </form>
</footer>
