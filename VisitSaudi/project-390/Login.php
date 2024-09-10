<?php
// Initialize the session
	session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	  header("location: admin/index.php");
	  exit;
	}
 
// connect to dataBase
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
	 
// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = $password_err = "";
 
// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if(empty($username_err) && empty($password_err)) {
			// Prepare a select statement
			$sql = "SELECT * FROM admin WHERE  username = '$username' ";

			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$saved_password = $row['password'];

				if ($password === $saved_password) {
					// Store data in session variables
					$_SESSION["loggedin"] = true;
					$_SESSION["id"] = $id;
					$_SESSION["username"] = $username;

					// Redirect user to welcome page
					header("location: admin/index.php");
				} else {
					// Display an error message if password is not valid
					$password_err = "The password you entered was not valid.";
				}
			} else {
				$username_err = "No account found with that username.";
			}
		}

		// Close connection
		$conn->close();
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charest ="utf-8">
    <title>Visit Saudi | Login</title>
	<link rel="shortcut icon" href="pics/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<script type="text/javascript" src="./js/javascript.js"></script>
</head>
<body id="top">
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
						<li class="active"><a href="login.php">LOGIN</a></li>
					</ul>
				</div>
			</section>

			<section class="menu">
				<div class="menu-content">
					<ul id="menu">
						<li><a href="index.php">HOME</a></li>
						<li><a href="activity-cat.php">ACTIVITY</a></li>
						<li><a href="aboutUs2.php">ABOUT</a></li>
						<li ><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
			</section>

		</header>
	  
	  	
		<h2 class="title">Login</h2>

	    <form method="post" action="login.php">
			  <label> User Name:</label><br>
			  <input required type="text"  name="username" placeholder="Name"autocomplete="on" width ="10" height="20" required><br>
			   <p style="color:red;"><?php echo $username_err; ?></p>
	
			   <label>password:</label><br>
			  <input required type="password" name="password" placeholder="Enter Password" width ="10" height="20"><br>
			   <p style="color:red;"><?php echo $password_err; ?></p>
			<input class="button" type="submit" value="Login"/>

		             <input class="button" type="Reset" value="Reset"/>
			  
      </div>
      </div>
	  </form>

	<div class="clear"></div>

	

	</div>
	

 </body>
</html>