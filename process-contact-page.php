<?php
session_start();

//receive values user submitted from form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$newsletter = $_POST['newsletter'];
$comment = $_POST['comment'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `contact` (`commentId`, `firstName`, `lastName`, `email`, `newsletter`,`comment`)
		VALUES (NULL, '$firstName', '$lastName', '$email', '$newsletter','$comment'
		); ");

$stmt->execute();
header("Location: thank-you.php");
?>
