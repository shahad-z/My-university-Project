<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitsaudi";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Visit Saudi | Home</title>
	
	<link rel="shortcut icon" href="pics/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<script type="text/javascript" src="./js/javascript.js"></script>
</head>

<body id="up">

	<div class="container">

		<header class="site-header">
			<section class="top-header">
				<div class="logo"><img src="pics/logo.jpg" width ="300" height="150" alt=""></div>
				<div class="search">
					<form action="#" method="get">
						<input type="text" value="" id="search" name="search">
						<input type="submit" id="searchsubmit" value="Search">
					</form>
				</div>
				<div class="top-header-right menu-content">
					<ul class="user_menu">
						<li><a href="Login.php">LOGIN</a></li>
					</ul>
				</div>
			</section>

			<section class="menu">
				<div class="menu-content">
					<ul id="menu">
						<li class="active"><a href="index.php">HOME</a></li>
						<li><a href="activity-cat.php">ACTIVITIES</a></li>
						<li><a href="aboutUs2.php">ABOUT</a></li>
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
			</section>

		</header>

		<section class="page-header" id="home">
			<div class="opacity"></div>
			<div class="content">
				<div class="text">
					<h1>Welcome to Visit Saudi</h1>
					<h1 style="line-height: 0.8;"><span>Where the tourist places and new activities <br> can be found
							 here </span></h1>
				</div>
			</div>
		</section>

	

		<div class="clear"></div>

		<section class="activity" id="activity">


			<div class="activity-margin">

				<h1>Recently Added Avtivities</h1>
				<hr />

				<ul class="grid">
					<li>
						<a href="Activity-info.php?id=11">
							<img src="pics/Alula.jpg" alt="activity 1" />
							<div class="text">
								<p>Alula</p>
							</div>
						</a>
					</li>
					<li>
						<a href="Activity-info.php?id=12">
							<img src="pics/Boulevard.jpg" alt="activity 2" />
							<div class="text">
								<p>Boulevard City</p>
							</div>
						</a>
					</li>
					<li>
						<a href="Activity-info.php?id=2">
							<img src="pics/souq-okaz.jpg" alt="activity 3" />
							<div class="text">
								<p>souq okaz</p>
							</div>
						</a>
					</li>
				</ul>


			</div>

		</section>

		<div class="clear"></div>

		<section class="form_content" id="contact">
			<img src="pics/Riyadh.jpg" />

			<div class="content">
				<h1>contact</h1>
				<hr />

				<div class="form">
					<form action="#" method="post" enctype="text/plain">
						<input name="your-name" id="your-name" placeholder="YOUR NAME" />
						<input name="your-email" id="your-email" placeholder="YOUR E-MAIL" />
						<textarea id="message" name="message" placeholder="MESSAGE"></textarea>
						<input class="button" type="submit" value="SEND" />
					</form>
				</div>
			</div>
		</section>

		<div class="clear"></div>

		<section class="footer">
			<div class="margin">
				<div class="menu-footer">
					<a href="index.php">Home</a>
					<a href="https://twitter.com/login">twitter</a>
					<a href ="#up"> Go to the top page </a>
				</div>
				<div class="copyright">©
					<script type="text/javascript">document.write(new Date().getFullYear());</script>. All Rights
					Reserved <a href="www.tu.edu.sa"> Saudi Visit </a>
					
				</div>
			</div>
		</section>

	</div>
</body>

</html>