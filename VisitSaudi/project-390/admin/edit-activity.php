<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to the welcome page
if (!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)) {
    header("location: ../login.php");
    exit;
}

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitsaudi";
$port = 3307;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_msg = '';
$error_msg = '';
$id = $_GET['id'];
$name = "";
$logo = "";
$description = "";
$categoryID = "";
$location = "";

$sql = "SELECT * FROM item WHERE id = " . $id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $logo = $row['logo'];
        $description = $row['description'];
        $categoryID = $row['categoryID'];
        $location = $row['location'];
    }
}

$image = $logo;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES["image"]["name"] != "") {
        // Validate upload file
        $target_dir = "../pics/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Set image name
        $image = time() . "." . $imageFileType;
        $filepath = "../pics/" . $image;
        move_uploaded_file($_FILES["image"]["tmp_name"], $filepath);

        // Delete old image
        $old_image = $logo;
        $filepath = "../pics/" . $old_image;
        if (file_exists($filepath)) {
            unlink($filepath);
        }
    }

    $name = $_POST['name'];
    $description = $_POST['description'];
    $categoryID = $_POST['category_id'];
    // Assuming you have a location input field in your form:
    $location = $_POST['location'];

    $sql = "UPDATE item SET name='$name', logo='$image', description='$description', categoryID='$categoryID', location='$location' WHERE id=" . $id;

    if ($conn->query($sql) === TRUE) {
        $success_msg = "<span style='color: green;'>Record Updated successfully</span>";
    } else {
        $error_msg = "<span style='color: red;'>Something went wrong. Please try again later.</span>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Visit Saudi | Edit Activity</title>
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
                        <li ><a href="admin-page.php">ADMIN PAGE</a></li>
                        <li class="active"><a href="add-activity.php">EDIT ACTIVITY</a></li>
                        <li><a href="../index.php">LOGOUT</a></li>
                    </ul>
                </div>
            </section>
        </header>

        <section class="page-header" id="home">
            <div class="opacity"></div>
            <div class="content">
                <div class="text">
                    <h1><br><span>Edit ACTIVITY</span></h1>
                </div>
            </div>
        </section>

        <section class="form_content" style="padding: 20px 0;">
            <div class="content">
                <h1>Edit ACTIVITY</h1>
                <hr />

                <div class="form">
                    <form id="activity" action="edit-activity.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                        <p><?php if (!empty($success_msg)) echo $success_msg; ?></p>
                        <p><?php if (!empty($error_msg)) echo $error_msg; ?></p>

                        <select class="text-field" name="category_id" id="category_id" placeholder="Activity Category"
                            required>
                            <option value="[Select Activity Category]">Select Category</option>
                            <option value="Western events" <?php if ($categoryID === 'Western events') echo 'selected'; ?>>Western events
                            </option>
                            <option value="Northern events" <?php if ($categoryID === 'Northern events') echo 'selected'; ?>>Northern events
                            </option>
                            <option value="Middle events" <?php if ($categoryID === 'Middle events') echo 'selected'; ?>>Middle events
                            </option>
                        </select>

                        <input type="text" name="name" id="name" placeholder="Activity Name" value="<?php echo $name; ?>"
                            required />
                        <input type="text" name="location" id="location" placeholder="Activity Location"
                            value="<?php echo $location; ?>" required />

                        <label class="field-label" for="image">Image</label>
                        <input type="file" name="image" id="image" />

                        <textarea id="description" name="description" placeholder="Description" required><?php echo $description; ?></textarea>

                        <input class="button" type="submit" value="Update Activity" />
                    </form>
                </div>

            </div>
        </section>

        <div class="clear"></div>

        <section class="footer">
            <div class="margin">
                <div class="menu-footer">
                    <a href="index.php">Home</a>
                    <a href="http://www.twitter.com">Twitter</a>
                </div>
                <div class="copyright">©
                    <script type="text/javascript">document.write(new Date().getFullYear());</script>. All Rights
                    Reserved <a href="index.php">Visit Saudi</a>
                </div>
            </div>
        </section>

    </div>
</body>

</html>
