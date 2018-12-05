<?php
//receive values user submitted from form
// $image = $_POST['image'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$image = $_POST['image'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$eyeColor = $_POST['eyeColor'];
$hairColor = $_POST['hairColor'];
$illness = $_POST['illness'];
$doctorName = $_POST['doctorName'];
$doctorPhone = $_POST['doctorPhone'];
$emergencyContact = $_POST['emergencyContact'];
$emergencyNo = $_POST['emergencyNo'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `patient` (`patientId`, `firstName`, `lastName`, `image`,`age`,`height`,`weight`,`eyeColor`,`hairColor`,`illness`,`doctorName`,`doctorPhone`,`emergencyContact`,`emergencyNo`) VALUES (NULL, '$firstName', '$lastName','$image','$age','$height','$weight','$eyeColor','$hairColor','$illness','$doctorName','$doctorPhone','$emergencyContact','$emergencyNo'); ");

$stmt->execute();

header("Location: register-thanks.php");
?>
