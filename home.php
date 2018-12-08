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
					<a href="about.php">ABOUT</a> |
					<?php if($_SESSION['logged-in']==true){?><a href="logout.php">LOGOUT</a> | <?php
					}else{
						?><a href="login.php">LOGIN</a> |
							<a href="register.php">REGISTER</a> | <?php
					}?>
					<?php if($_SESSION['role']==2){?> | <a href="dashboard.php">DASHBOARD</a> | <?php }?>
					<a href="contact.php">CONTACT</a>
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

						<!-- Testimonials -->
						<div class="row" id="testimonials">
							<div class="testimonial">
								<img src="images/isabelle.png" />
								<p>"At last I've found a product that gives me peace of mind.
									 My mother has wandered and gotten lost at least once a
									 year--and now I can easily locate her through the app!"</p>
								<p id="signature">Isabelle D.</p>
							</div>
						</div>
						<!-- /Testimonials -->

						<!-- Product Features -->
						<div class="row" id="features">
							<div class="feature">
								<h2>What is Find'ur</h2>
								Find'ur is a wearable locating technology which is a small chip using a beacon and geolocation service (GPS) to track and locate older adults with dementia who have wandered and gotten lost.  The chip can be attached to any object like clothing items, glasses, or inside the heel of a shoe for example.
							</div>
							<div class="feature">
								<h2>What is included with Find'ur</h2>
								The Find'ur application provides:
								<li>Find'ur chip</li>
								<li>registration to the service</li>
								<li>caregiver dashboard with a profile page for each person under their care. This includes personal health information (prescriptions and appointments).</li>
								<li>Locate patient co-ordinates and autofill missing-person police report</li>

							</div>
							<div class="feature">
								<h2>How it works?</h2>
								<li>Caregiver hits the 'locate patient' button to find a person under their care who has wandered.</p>
								<li>Chip activates geo-location service and send GPS co-ordinates to the server.</p>
								<li>Find'ur retrieves information and displays the information within seconds.</p>
								<li>Caregiver is able to send the GPS co-ordinates, personal description and critical information through a pre-populated missing-persons report to the police.

							</div>
						</div>
						<!-- /Product Features -->

						<div class="row" id="register">
							<div class="register">
								<a href="register.php">Sign Up</a>
							</div>
						</div>

						<!-- Testimonials -->
						<div class="row" id="testimonials">
							<div class="testimonial">
								<p>"Not only can I immediately locate my loved one, but I can
									also send their location co-ordinates and their physical
									description (including a recent photo), critical medications
									automatically to the police with the click of a button."</p>
								<p id="signature">Neil O.</p>
							</div>
						</div>
						<!-- /Testimonials -->

						<!-- Testimonials -->
						<div class="row" id="testimonials">
							<div class="testimonial">
								<p>"I really like that I can find my loved one and manage their
									 personal health information (prescriptions and appointments)
									 all in the same app."</p>
								<p id="signature">Oliver H.</p>
							</div>
						</div>
						<!-- /Testimonials -->

						<!-- Pricing -->
						<div class="row" id="price">
							<div class="pricing">
								<h3>Trial Offer</h3>
								Trial 30 day free
							</div>
							<div class="pricing">
								<h3>Monthly Plan</h3>
								1 user account can manage up to 3 personal profiles = $60 per month
								Payment accepted upfront for 1 year (recurring debit orders)
							</div>
							<div class="pricing">
								<h3>Ad-hoc</h3>
								1 user account can manage up to 3 personal profiles = $60 per month
								Each additional personal profile = $15 each per month
								Payment accepted upfront for 1 year (recurring debit orders)
							</div>
						</div>
						<!-- /Pricing -->

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
