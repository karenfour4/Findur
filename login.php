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
		<title>Login</title>
		<meta charset="utf-8" />

	</head>
	<header>
			<img src = "images/logo.png" />
			<nav>
					<ul>
							<li><a href="index.php">Home</a></li>
							<?php if ($_SESSION['logged-in'] == true){
							?><li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="locate.php">Locate</a></li>
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

		<form method='post' action='process-login.php'>
			<h1>Login</h1>
			<fieldset>
			<input type="hidden" value="<?php echo($row["contactId"]); ?>" name="contactId"/>
			  <p>
					Email: <input type='email' name="email" placeholder="e.g. name@gmail.com" required/>
          Password:<input type='text' name="password" placeholder="enter your password" required/>
			  </P>
				</fieldset>
				<input type='submit'>
		</form>
	</body>
	<footer>
			By visiting <a href="locate.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a>.
	</footer>
</html>
