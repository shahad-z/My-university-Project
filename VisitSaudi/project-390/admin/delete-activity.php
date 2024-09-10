<?php

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

 //echo"ffffffff"; exit;
 if( isset($_GET['id']) && isset($_GET['logo']) ){
        $id=$_GET['id'];
        $image=$_GET['logo'];
		
        $filepath = "../pics/".$image;
        //echo ($filepath);
        if (file_exists($filepath)) {
            unlink($filepath);
        }
		
        $sql = "delete from item where id = '$id'";
        $result = $conn->query($sql);
		$conn->close();
		
       header('Location: admin-page.php#ok');
}


?>