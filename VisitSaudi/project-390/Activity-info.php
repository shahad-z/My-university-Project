<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitsaudi";
$port = 3307;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname ,$port = 3307
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch activity information
$id = $_GET['id'];
if ($id == "") {
    header("location: index.php");
}

$sql = "SELECT * FROM item WHERE id=" . $id;
$result = $conn->query($sql);

$activity = null;

if ($result->num_rows > 0) {
    $activity = $result->fetch_assoc();
}
$reviewsQuery = "SELECT * FROM review WHERE item_id = " . $id; // Change 'reviews' and 'item_id' to match your actual table and column names
$reviewsResult = $conn->query($reviewsQuery);

// Initialize an empty array to store reviews
$reviews = array();
$totalRating = 0;


if ($reviewsResult->num_rows > 0) {
    while ($row = $reviewsResult->fetch_assoc()) {
        $reviews[] = $row;
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Visit Saudi | Activities information</title>
    <link rel="shortcut icon" href="pics/logo.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/javascript.js"></script>
</head>

<body id="up">

    <div class="container">

        <header class="site-header">
            <section class="top-header">
                <div class="logo"><img src="pics/logo.jpg" width="300" height="150" alt=""></div>
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
                        <li class="active"><a href="Activity-cat.php">Activities</a></li>
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
                    <h1><br><span>Activity Details</span></h1>
                </div>
            </div>
        </section>

        <section class="page-content" id="page-content">
            <div class="Activity-info">

                <div class="info">

                    <h3 class="title"><?= $activity['name'] ?></h3>
					  <br>
                    <?php if ($activity) { ?>

			         <img width="400" src="pics/<?= $activity['logo'] ?>" alt="Activity Image" /> 
                        <p><strong>Activity location: </strong><?= $activity['location'] ?></p>

                                
                        <p><strong>Description: </strong><?= $activity['description'] ?></p>
                    <?php } else { ?>
                        <p><strong>Activity not found</strong></p>
                    <?php } ?>
					            

           

               <div id="reviews">
			   <br>
            <h3>Comments</h3>
    <div class="reviews-list">
        <?php
        if ($reviews) {
            foreach ($reviews as $review) {  
			                   $totalRating += $review["rating"];

                echo '<article>';
                echo '<header>';
                echo '<div class="rating">';
                $rating = $review["rating"];
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $rating) {
                        echo '<span class="fa fa-star checked"></span>';
                    } else {
                        echo '<span class="fa fa-star"></span>';
                    }
                }
                echo '</div>';
                echo '<div class="user">' . $review["name"] . '</div>';
                echo '<time datetime="' . $review["date"] . '">' . date('l, jS F Y @H:i:s', strtotime($review["date"])) . '</time>';
                echo '</header>';
                echo '<div class="review">';
                echo '<p>' . $review["body"] . '</p>';
                echo '</div>';
                echo '</article>';
            }
        } else {
            echo "<p>No reviews available.</p>";
        }
		$averageRating = count($reviews) > 0 ? $totalRating / count($reviews) : 0;

        ?> 
	
        <p><strong>Total Rating: </strong><?= $averageRating ?></p>
    </div>
                            
                            
                </div>

               <div class="new-review">
        <h3>Write Your Review</h3>
        <div class="form">
            <form action="submit_review.php" method="post">
                <input type="text" name="name" id="name" placeholder="YOUR NAME" required />
                <input type="hidden" name="item_id" value="<?php echo $id; ?>" />
                <input type="number" name="rating" id="rating" min="1" max="5" placeholder="Rate [1-5]" required />
                <textarea id="body" name="body" placeholder="Write your comment here" required></textarea>
                <input class="button" type="submit" value="SEND" />
            </form>
        </div>
    </div>
</div>







            </div>

        </section>

        <div class="clear"></div>

        <section class="footer">
            <div class="margin">
                <div class="menu-footer">
                    <a href="index.php">Home</a>
                    <a href="http://www.twitter.com">twitter</a>
                    <a href="#up"> Go to the top page </a>
                </div>

                <div class="copyright">©
                    <script type="text/javascript">document.write(new Date().getFullYear());</script>. All Rights
                    Reserved <a href="index.php"> Visit Saudi</a>
                </div>
            </div>
        </section>

    </div>
</body>

</html>

