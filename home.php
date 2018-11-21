<!doctype html>
<html>
	<head>
		<title>User Dashboard</title>
		<meta charset="utf-8" />
	</head>

<!-- HEADER GOES HERE -->
<header>
		<img src = "images/logo.png" />
		<nav>
				<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<?php if ($_SESSION['logged-in'] == true){
						?><li><a href="logout.php">Logout</a></li><?php
				}else{?>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
				<?php } ?>
						<?php if ($_SESSION['role'] == 2) { ?> <li><a href="dashboard.php">Dashboard</a></li> <?php } ?>
				</ul>
		</nav>
</header>
<body>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hzJpwq7Pxlc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!-- Product Features -->
<h2>Product Feature 1</h2>
<h2>Product Feature 2</h2>
<h2>Product Feature 3</h2>
<a href="register.php">Sign Up</a>

<!-- Testimonials -->
<p>This is the coolest product ever! My grandma used to run away all the time and now she doesn't because of Findur. We will forever be grateful, thanks! We hope other families can feel as safe and secure as we do using Findur.</p>
<p>Isabelle D.</p>

<!-- Pricing -->
<h3>Pricing 1</h3>
<h3>Pricing 2</h3>
<h3>Pricing 3</h3>
<a href="register.php">Sign Up</a>
</body>
<!-- FOOTER GOES HERE -->
<footer>
		<p><a href="contact.php">Contact Us</a></p>
		<p><a href="login.php">Login</a></p>
		<p>By visiting <a href="index.php">Findur.com</a> you agree to our <a href="cookiepolicy.html" target="_blank">cookie policy</a></p>
		<form method='post' action='process-newsletter.php'>
			<p>Sign up for our newsletter</p>
			<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
		</form>
</footer>
