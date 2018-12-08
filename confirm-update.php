<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$patientId = $_POST['patientId'];
$image = $_POST['image'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
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

/*execute update*/
$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `patient` SET `image` = '$image', `firstName` = '$firstName', `lastName` = '$lastName', `age` = '$age', `height` = '$height',
  `weight` = '$weight', `eyeColor` = '$eyeColor', `hairColor` = '$hairColor',`illness` = '$illness', `doctorName` = '$doctorName',
  `doctorPhone` = '$doctorPhone',`emergencyContact` = '$emergencyContact',`emergencyNo` = '$emergencyNo' WHERE `patient`.`patientId` = $patientId;");

$stmt->execute();

header("Location: dashboard.php");
?>
<?php
}
?>
