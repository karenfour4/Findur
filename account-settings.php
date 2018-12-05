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
<h1>Account Settings</h1>
<form action="process-account.php" method="POST">
	<p>userId: <?php echo($row["userId"]); ?></p>
	<input type="hidden" value="<?php echo($row["userId"]); ?>" name="userId"/>
	<p><img src='images/<?php echo ($row["profilePic"]); ?>'></p>
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
