<?php
// Initialize the session
	session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
	if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
	  header("location: ../login.php");
	  exit;
	}
	

// connect to dataBase
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "visitsaudi";
	$port = 3307;


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname ,$port
);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 
 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Visit Saudi | Manage Activites </title>
	<link rel="shortcut icon" href="pics/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<script type="text/javascript" src="./js/javascript.js"></script>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  background-color:white;
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
</head>

<body>

	<div class="container">

		<header class="site-header">
			<section class="top-header">
				<div class="logo"><img src="pics/logo.jpg" width ="300" height="150" alt=""></div>
				
				<div class="top-header-right menu-content">
					<ul class="user_menu">
						<li class="active"><a href="admin-page.php">ADMIN PAGE</a></li>
						<li><a href="add-activity.php">ADD ACTIVITY</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</div>
			</section>
			
		</header>

	

		<section class="activity" id="activity">
			<div class="activity-margin">
      <h1 >Items List</h1> 
		  <br><br>
     <table class="table table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
		   <th>description</th>
             <th>image</th>

            <th>location</th>
            <th>manage</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT  * FROM item ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                    <td>". $row['id'] . "</td>
                                    <td>". $row['name'] . "</td>
                                    <td>". $row['description']."</td>
                                    <td> <img style='width: 100px;' src='../pics/".$row['logo']."' /> </td>
                                    <td>". $row['location'] . "</td>
                                    <td> <a href='edit-activity.php?id=".$row['id']."'>Edit</a> |
                                         <a href='delete-activity.php?id=".$row['id']."&logo=".$row['logo']."' 
                                         onclick='return confirm(\"are you sure?\")'
                                         style='color: darkred;'>Delete</a>
                                    </td>
                              </tr>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
            ?>
        </tbody>
    </table>
</div>
				

			</div>

		</section>

		<div class="clear"></div>

		

	</div>
</body>

</html>