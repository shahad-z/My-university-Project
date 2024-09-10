<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if not, redirect him to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login.php");
    exit;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "visitsaudi";
	$port = 3307;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname $port
);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    // File upload
    $target_dir = "../pics/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $image = time() . "." . $imageFileType;
    $filepath = "../pics/" . $image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $filepath);

    $description = $_POST['description'];

    // SQL statement to insert data into the database, including category ID
    $sql = "INSERT INTO item (name, logo, description, categoryID, location)
            VALUES ('$name', '$image', '$description', '$category_id', '$location')";

    if ($conn->query($sql) === TRUE) {
        $success_msg = "<p style='color: green;'>New activity added successfully.</p>";
    } else {
        $error_msg = "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Visit Saudi | Add Activities</title>
    <link rel="shortcut icon" href="pics/logo.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>
    <div class="container">
        <header class="site-header">
            <section class="top-header">
                <div class="logo"><img src="pics/logo.jpg" width="300" height="150" alt=""></div>

                <div class="top-header-right menu-content">
                    <ul class="user_menu">
                        <li><a href="admin-page.php">ADMIN PAGE</a></li>
                        <li class="active"><a href="add-activity.php">ADD ACTIVITY</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </section>

        </header>
        <section class="page-header" id="home">
            <div class="opacity"></div>
            <div class="content">
                <div class="text">
                    <h1><br><span>Add ACTIVITY</span></h1>
                </div>
            </div>
        </section>
        <section class="form_content" style="padding: 20px 0;">
            <div class="content">
                <h1>Add ACTIVITY</h1>
                <hr />
                <div class="form">
                    <form id="add_activity" action="add-activity.php" method="post" enctype="multipart/form-data">
                        <select class="text-field" name="category_id" id="category_id" required>
                            <option value="1">Western events</option>
                            <option value="2">Northern events</option>
                            <option value="3">Middle events</option>
                        </select>
                        <input type="text" name="name" id="name" placeholder="activity Name" required />
                        <input type="text" name="location" id="location" placeholder="activity Location" required />
                        <label class="field-label" for="image">Image</label>
                        <input type="file" name="image" id="image" />
                        <textarea id="description" name="description" placeholder="Description" required></textarea>
                        <input class="button" type="submit" value="Add activity" />
                    </form>
                </div>
            </div>
        </section>
        <div class="clear"></div>
        <section class="footer">
            <div class="margin">
                <div class
