<!DOCTYPE html>
<html>

<head>
	<title>Saudi Visit | Activities Categories</title>
	<link rel="shortcut icon" href="pics/Logo2.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<script type="text/javascript" src="./js/javascript.js"></script>
</head>

<body id="up">

	<div class="container">

		<header class="site-header">
			<section class="top-header">
				<img src="pics/logo.jpg" width ="300" height="150" alt="">
				<div class="search">
					<form action="#" method="get">
						<input type="text" value="" id="search" name="search">
						<input type="submit" id="searchsubmit" value="Search">
					</form>
				</div>
				<div class="top-header-right menu-content">
					<ul class="user_menu">
						<li><a href="login.php">LOGIN</a></li>
					</ul>
				</div>
			</section>

			<section class="menu">
				<div class="menu-content">
					<ul id="menu">
						<li><a href="index.php">HOME</a></li>
						<li class="active"><a href="activity-cat.php">ACTIVITES</a></li>
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
					<h1><br><span>Activity Categories</span></h1>
				</div>
			</div>
		</section>

		<section class="Activity-categories" id="Activity-categories">
			<h2 class="title">Where the tourist places and new activities<br> can be found here</h2>
			<hr />

			<div class="col" onclick="window.location.href='activities.php'">
				<div class="circle circle-one" width= "50" height="30"></div>
				<h2>Western events</h2>
			</div>

			<div class="col" onclick="window.location.href='activities.php'">
				<div class="circle circle-two"></div>
				<h2>southern events</h2>
			</div>

			<div class="col" onclick="window.location.href='activities.php'">
				<div class="circle circle-three"></div>
				<h2>Middle events</h2>
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
					Reserved <a href="index.php"> Saudi Visit</a>
				</div>
			</div>
		</section>

	</div>
</body>

</html>