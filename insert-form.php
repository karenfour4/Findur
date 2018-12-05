<?php
session_start();
if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{
?>
		<form method='post' action='process-insert.php' enctype="multipart/form-data">
		<input type="hidden" value="<?php echo($row["patientId"]); ?>" name="patientId"/>
		Select image to upload:
		<input type="file" name="image"<p>

		<p>First Name: <input type='text' name='firstName'></p>
		<p>Last Name: <input type='text' name='lastName'></p>
		<p>Age: <input type='text' name='age'></p>
		<p>Height: <input type='text' name='height'></p>
		<p>Weight: <input type='text' name='weight'></p>
		<p>Eye Color: <input type='text' name='eyeColor'></p>
		<p>Hair Color: <input type='text' name='hairColor'></p>
		<p>Illnesses: <input type='text' name='illness'></p>
		<p>Doctor: <input type='text' name='doctorName'></p>
		<p>Doctor No: <input type='text' name='doctorPhone'></p>
		<p>Emergency Contact: <input type='text' name='emergencyContact'></p>
		<p>Emergency No: <input type='text' name='emergencyNo'></p>
		<input type='submit'/>
		</form>
<?php
}
?>
