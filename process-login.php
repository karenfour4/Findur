<?php
session_start();
//receive email and password
$email = $_POST['email'];
$password = $_POST['password'];

//check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	SELECT * FROM `users`
	WHERE `email` = '$email'
	AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to dashboard
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $row['email'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['userId'] = $row['userId'];

	if (($_SESSION['role'] == 2) || ($_SESSION['role'] == 3)){

	header("Location: home.php");

	}else{

	header("Location: dashboard.php");

	}
}else{
	header("Location: login.php");
}
?>
