<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$userId = $_GET['userId'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE userId = $userId");

$stmt->execute();

$row = $stmt->fetch();
?>

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
<h1>Account Settings</h1>
<form action="process-account.php" method="POST">
	<p>userId: <?php echo($row["userId"]); ?></p>
	<input type="hidden" value="<?php echo($row["userId"]); ?>" name="userId"/>
	<p>First Name: <input type='text' name='firstName' value="<?php echo($row["firstName"]); ?>"/></p>
	<p>Last Name: <input type='text' name='lastName' value="<?php echo($row["lastName"]); ?>"/></p>
	<p>Phone: <input type='text' name='phone' value="<?php echo($row["doctorPhone"]); ?>"/></p>
	<p>Email: <input type='text' name='email' value="<?php echo($row["email"]); ?>"/></p>
	<p>Password: <input type='text' name='password' value="<?php echo($row["password"]); ?>"/></p>
	<input type='submit'/>
</form>
<?php
}
 ?>
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
