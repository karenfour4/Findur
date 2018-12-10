<?php

$dsn = "mysql:host=localhost;dbname=four_Findur;charset=utf8mb4";
$dbusername = "four_admin";
$dbpassword = "Rejane@2608";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$q = $_GET['q'];

$stmt1 = $pdo->prepare("SELECT * FROM `patient` WHERE patientId = '$q'");
$stmt2 = $pdo->prepare("SELECT patient.patientId, patient.firstName, patient.lastName, prescription.prescriptionId, prescription.drugName, prescription.dosage
     FROM ((`patient` INNER JOIN `prescriptionId-patientId` ON `patient`.`patientId` = `prescriptionId-patientId`.`patientId`)
     INNER JOIN `prescription` ON `prescription`.`prescriptionId` = `prescriptionId-patientId`.`prescriptionId`)
     WHERE `patient`.`patientId`= '$q'");

$stmt1->execute();
$stmt2->execute();
?>
<!DOCTYPE html>
<html>
     <head>
          <style>
          table {
               width: 100%;
               border-collapse: collapse;
               }

          table, td, th {
               border: 1px solid black;
               padding: 5px;
               }

          th {text-align: left;}
          </style>
     </head>
<body>

     <?php
     while($row = $stmt1->fetch()) {
          ?><div>

          Id: <?php echo($row["patientId"]);?>
          <span><a href="edit.php?patientId=<?php echo($row["patientId"]);?>">Edit</a></span>
          <!-- <p>Latitude: <?php echo($row["lat"]); ?></p>
          <p>Longitude: <?php echo($row["lng"]); ?></p> -->
          <p><img src='images/<?php echo ($row["image"]); ?>'></p>
          <p>First Name: <?php echo($row["firstName"]); ?></p>
          <p>Last Name: <?php echo($row["lastName"]); ?></p>
          <p>Age: <?php echo($row["age"]); ?></p>
          <p>Height: <?php echo($row["height"]); ?></p>
          <p>Weight: <?php echo($row["weight"]); ?></p>
          <p>Eye Color: <?php echo($row["eyeColor"]); ?></p>
          <p>Hair Color: <?php echo($row["hairColor"]); ?></p>
          <p>Illnesses: <?php echo($row["illness"]); ?></p>
          <p>Doctor: <?php echo($row["doctorName"]); ?></p>
          <p>Doctor No: <?php echo($row["doctorPhone"]); ?></p>
          <p>Emergency Contact: <?php echo($row["emergencyContact"]); ?></p>
          <p>Emergency No: <?php echo($row["emergencyNo"]); ?></p>
     </div>
<?php }
?>
<br>
<br>
     <?php
          while($row = $stmt2->fetch()) {
          ?><div>
          <input type="hidden" value="<?php echo($row["prescriptionId"]);?>
          <p>Drug Name: <?php echo($row["drugName"]); ?></p>
          <p>Dosage: <?php echo($row["dosage"]); ?></p>
          </div>
     <?php }
     ?>
