<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$userId = $_SESSION['userId'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE userId = $userId");

$stmt->execute();

$row = $stmt->fetch();
?>
<!doctype html>
	<html>
		<head>
			<title>Findur : Edit Account</title>
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
<h1>Account Settings</h1>
<form action="process-account.php" method="POST">
	<p>userId: <?php echo($row["userId"]); ?></p>
	<input type="hidden" value="<?php echo($row["userId"]); ?>" name="userId"/>
	<p><img src='images/<?php echo ($row["profilePic"]); ?>' name="profilePic"></p>
	<p>First Name: <input type='text' name='firstName' value="<?php echo($row["firstName"]); ?>"/></p>
	<p>Last Name: <input type='text' name='lastName' value="<?php echo($row["lastName"]); ?>"/></p>
	<p>Phone: <input type='text' name='phone' value="<?php echo($row["phone"]); ?>"/></p>
	<p>Email: <input type='text' name='email' value="<?php echo($row["email"]); ?>"/></p>
	<p>Password: <input type='text' name='password' value="<?php echo($row["password"]); ?>"/></p>
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
	<a href="index.php">Findur.com</a><a href="#" target="_blank">cookie policy</a>
	<br />
	<form method='post' action='process-newsletter.php'>
		Sign up for our newsletter!
		<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
	</form>
</div>
</html>
