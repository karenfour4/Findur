<?php
header("Location: register-thanks.php");

//receive values user submitted from form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `users` (`userId`, `firstName`, `lastName`, `phone`, `email`)
		VALUES (NULL, '$firstName', '$lastName', '$phone', '$email'
		); ");

$stmt->execute();

?>
