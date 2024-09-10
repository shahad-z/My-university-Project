<?php
require_once 'CustomerBusinessObject.php';

$customer = new CustomerBusinessObject();

session_start();
if (isset($_SESSION['customer_id'])) {
    $customer_id = $_SESSION['customer_id'];
    $customer_data = $customer->getCustomerById($customer_id);
} else {

    header('Location: customer_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <!-- Favicon -->
    <link href="assets/imgs/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

 
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-4">
        <h1>My Profile</h1>
        <div class="card">
            <div class="card-body">		
				    <p><i class="far fa-check-circle text-primary me-3"></i>First Name:</strong> <?php echo $customer_data['customer_fname']; ?></p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Last Name:</strong> <?php echo $customer_data['customer_lname']; ?></p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Email Address:</strong> <?php echo $customer_data['customer_email']; ?></p>

            </div>
        </div>
    </div>
</body>
</html>
