<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitsaudi";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port = 3307
);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$body = $_POST['body'];
$rating = $_POST['rating'];
$item_id = $_POST['item_id'];

$sql = "INSERT INTO `review` (`item_id`, `name`, `body`, `rating`, `date`) 
        VALUES ('$item_id', '$name', '$body', '$rating', NOW())";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: Activity-info.php?id=" . $item_id . "&msg=ok");
  die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

