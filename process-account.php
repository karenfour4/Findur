<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$userId = $_POST['userId'];
$profilePic = $_POST['profilePic'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];


/*execute update*/
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `users` SET `profilePic` = '$profilePic', `firstName` = '$firstName', `lastName` = '$lastName', `phone` = '$phone',`email` = '$email',`password` = '$password' WHERE `userId`.`userId` = $userId;");

$stmt->execute();

header("Location: dashboard.php");
?>
<?php
} ?>
