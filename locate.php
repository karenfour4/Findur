<?php
session_start();
if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{
?>

<!doctype html>
<html>
	<head>
		<title>Locate Page</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<p>Gabriel, this is for your google API stuff.
	</body>
</html>
<?php
}
 ?>
