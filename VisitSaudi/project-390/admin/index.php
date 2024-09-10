<?php
// Initialize the session
	session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
	if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
	  header("location: ../Login.php");
	  exit;
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
					
                      <div class="top-header-right menu-content">
					<ul class="user_menu">
						
					</ul>
				</div>
			
			</section>
			

			<section class="menu">
				<div class="menu-content">
					<ul id="menu">
						<li class="active"><a href="index.php">ADMIN PAGE</a></li>
						<li><a href="admin-page.php">activities</a></li>
						<li><a href="logout.php">logout</a></li>
						
					</ul>
				</div>
			</section>

		</header>

		<section class="page-header" id="home">
			<div class="opacity"></div>
			<div class="content">
				<div class="text">
					<h1>Welcome to control panel</h1>
						    <h1>Welcome  <?php echo $_SESSION["username"] ?></h1>

					
				</div>
			</div>
		</section>

	

		<div class="clear"></div>

		<section class="activity" id="activity">


		

		</section>

			

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