<!doctype html>
	<html>
		<head>
			<title>Findur : About</title>
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
					</div>
				</div>
				For people living with Alzheimer's disease and other dementias, wandering is a common behavior. As a result, they may not be able to find their way back home and become lost. For caregivers, who are often family members, wandering can lead to stress as well as safety concerns as a person with Alzheimer’s disease who is lost for more than 12 hours has a 50% chance of being injured or dying.
In fact, according to the Alzheimer’s Society of Canada six out of 10 or, 450,000 Canadians, living with Alzheimer’s or other forms of dementia will wander at least once.
This is where Find'ur fits in.

Find'ur is a wearable locating technology which is a small chip using a beacon and geolocation service (GPS) to track and locate older adults with dementia who have wandered and gotten lost.  The chip can be attached to any object like clothing items, glasses, or inside the heel of a shoe for example.

<h2>What is included with Findur!</h2>
The Find'ur application provides:<br>
<li>Find'ur chip</li>
<li>Registration to the service</li>
<li>Caregiver dashboard with a profile page for each person under their care. This includes personal health information (prescriptions and appointments).</li>
<li>Locate page with GPS co-ordinates and patient information autofilled for missing-person police report

<h2>How it works?</h2>
<li>Caregiver hits the 'locate' button to find a patient under their care who has wandered.</li>
<li>Chip activates geo-location service and send GPS co-ordinates to the server.</li>
<li>Find'ur retrieves information and displays the information within seconds.</li>
<li>Caregiver is able to send the GPS co-ordinates, personal description and critical information autofilled missing persons report to the police.

<blockquote>
<h2>Wandering by the numbers</h2>
<p>750,000 Canadians have Alzheimer’s disease and other dementias</p>

<p>6 in 10 people with dementia, or 450,000 Canadians, will wander at least once</p>

<p>1.4 million Canadians will have dementia by 2031 in the absence of a cure<br>
900,000 of them will wander</p>

<p>$1,500 estimated per hour cost of a missing person search for a dementia wanderer</p>

<p>$33 billion cost per year to Canadian economy in dementia-related medical expenses and lost earnings</p>

<p>$293 billion cost per year to Canadian economy by 2040 if nothing changes.</p>

<p>Sources: <br>
Alzheimer’s Association, <br>
Alzheimer Society of Canada</p>

</blockquote>

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
