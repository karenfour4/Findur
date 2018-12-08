<!doctype html>
	<html>
		<head>
			<title>Findur : Home</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" type="text/css" href="css/main.css" media="all">
		</head>

<!-- HEADER GOES HERE -->
		<header>
				<div class="logo">
					<img src="images/logo.png" />
				</div>

				<div class="navbar">
					<a href="home.php">HOME</a> |
					<a href="contact.php">CONTACT</a> |
					<?php if($_SESSION['logged-in']==true){?><a href="logout.php">LOGOUT</a> | <?php
					}else{
						?><a href="login.php">LOGIN</a> |
							<a href="register.php">REGISTER</a> <?php
					}?>
					<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> <?php }?>
				</div>
		</header>

<!-- BODY GOES HERE -->
		<body>
				<div class="main-container">
					<div class="main">
						<div class="about">
							<img src="images/caregiver.jpg" />
							<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/hzJpwq7Pxlc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							-->
						</div>

						<!-- Product Features -->
						<div class="row" id="features">
							<div class="feature">
								<h2>Product Feature 1</h2>
							</div>
							<div class="feature">
								<h2>Product Feature 2</h2>
							</div>
							<div class="feature">
								<h2>Product Feature 3</h2>
							</div>
						</div>

						<div class="row" id="register">
							<div class="register">
								<a href="register.php">Sign Up</a>
							</div>
						</div>

						<!-- Testimonials -->
						<div class="row" id="testimonials">
							<div class="testimonial">
								<p>This is the coolest product ever! My grandma used to run away all
								the time and now she doesn't because of Findur. We will forever be
								grateful, thanks! We hope other families can feel as safe and secure
								as we do using Findur.</p>
								<p>Isabelle D.</p>
							</div>
						</div>

						<!-- Pricing -->
						<div class="row" id="price">
							<div class="pricing">
								<h3>Pricing 1</h3>
							</div>
							<div class="pricing">
								<h3>Pricing 2</h3>
							</div>
							<div class="pricing">
								<h3>Pricing 3</h3>
							</div>
						</div>

						<div class="row" id="register">
							<div class="register">
								<a href="register.php">Sign Up</a>
							</div>
						</div>

					</div>
				</div>
		</body>


<!-- FOOTER GOES HERE -->
		<div class="footer">
			<a href="contact.php">Contact Us</a>
			<a href="login.php">Login</a>
			<br />
			<a href="index.php">Findur.com</a><a href="cookiepolicy.html" target="_blank">cookie policy</a>
			<br />
			<form method='post' action='process-newsletter.php'>
				Sign up for our newsletter!
				<input type='email' name="email" placeholder="e.g. name@gmail.com"><input type='submit'>
			</form>
		</div>
	</html>
