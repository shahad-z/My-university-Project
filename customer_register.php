<?php
require_once 'CustomerDataObject.php';

$customer = new CustomerDataObject();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_fname = $_POST['customer_fname'];
    $customer_lname = $_POST['customer_lname'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];


        $result = $customer->registerCustomer($customer_fname, $customer_lname, $customer_email, $customer_password);
        if ($result) {

            header('Location: customer_login.php');
            exit;
        } else {
            $errors['registration'] = 'Failed to register customer.';
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Register</title>
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
   	<br>
	<center>
	<div class="container">
	        <h2>Customer Register</h2>	
	<br>
	
	<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
		<div class="bg-light rounded h-100 d-flex align-items-center p-5">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				<div class="row g-3">
					<div class="col-12 col-sm-12">
						<input type="text" class="form-control border-0" placeholder="First Name" style="height: 55px;" id="customer_fname" name="customer_fname" >
					</div>
					<br>
					<div class="col-12 col-sm-12">
						<input type="text" class="form-control border-0" placeholder="Last Name" style="height: 55px;" id="customer_lname" name="customer_lname" >
					</div>
					<br>
					<div class="col-12 col-sm-12">
						<input type="text" class="form-control border-0" placeholder="Email Address" style="height: 55px;" id="customer_email" name="customer_email" >
					</div>
					<br>
					<div class="col-12 col-sm-12">
						<input type="password" class="form-control border-0" placeholder="Password" style="height: 55px;"id="customer_password" name="customer_password">
						
					</div>
					<div class="col-12">
						<button class="btn btn-primary w-100 py-3" type="submit">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</center>
	
	</div>

</body>
</html>
