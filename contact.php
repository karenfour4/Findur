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
		<title>Contact Us</title>
		<meta charset="utf-8" />

	</head>
	<!-- HEADER GOES HERE -->
	<header>
			<img src = "images/logo.png" />
			<nav>
					<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<?php if ($_SESSION['logged-in'] == true){
							?><li><a href="logout.php">Logout</a></li><?php
					}else{?>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
					<?php } ?>
							<?php if ($_SESSION['role'] == 2) { ?> <li><a href="dashboard.php">Dashboard</a></li> <?php } ?>
					</ul>
			</nav>
	</header>
	<body>

		<form method='post' action='process-contact.php'>
			<h1>Contact Us</h1>
			<fieldset>
			<input type="hidden" value="<?php echo($row["contactId"]); ?>" name="contactId"/>
			  <p>
					First Name: <input type='text' name="firstName" required/>
					Last Name: <input type='text' name="lastName" required/>
				</p>
				<p>
					Email: <input type='email' name="email" placeholder="e.g. name@gmail.com" required/>
			  </P>
				<p>
					Subscribe to our newsletter: <input type='checkbox' name="newsletter" />
				</P>
				<p>
					Comment: <br>
					<input type='textarea rows="10" cols="100" name="comment"'/>
				</P>
			</fieldset>
				<input type='submit'>
		</form>
	</body>
	<!-- Footer GOES HERE -->
	<footer>
			<p><a href="contact.php">Contact Us</a></p>
			<p><a href="login.php">Login</a></p>
			<p>By visiting <a href="index.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a></p>
			<form method='post' action='process-newsletter.php'>
				<p>Sign up for our newsletter</p>
				<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
			</form>
	</footer>
</html>
