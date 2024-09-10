<?php
require_once 'ProductBusinessObject.php';
require_once 'OrderBusinessObject.php';
require_once 'CustomerBusinessObject.php';

$product_id = $_GET['product_id'];
$product = new ProductBusinessObject();
$product_data = $product->getProductByIdAfterDiscount($product_id);

$order = new OrderBusinessObject();
$customer = new CustomerBusinessObject();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    if (isset($_SESSION['customer_id'])) {
        $customer_id = $_SESSION['customer_id'];
        $result = $order->addOrder($product_id, $customer_id);
        if ($result) {

			header('Location: customer_orders.php');
        } else {

            echo "Failed to order the product.";
        }
    } else {

        header('Location: customer_login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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
    <div class="container">
	<br><br>
	<section class="current-orders">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $product_data['product_img']; ?>" class="img-fluid" alt="<?php echo $product_data['product_name']; ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo $product_data['product_name']; ?></h1>
                <p><strong>Details: </strong><?php echo $product_data['product_description']; ?></p>
                        <p class="card-text">
                            <strong>Price: </strong> SAR <?php echo $product_data['product_price']; ?>
						</p>
						<p class="card-text">
							<strong>Discount: </strong><?php echo $product_data['product_discount'] * 100; ?>%
						</p>                       
						
						<p class="card-text">
							<strong>Price After Discount: </strong> SAR <?php echo $product_data['price_after_discount']; ?>
						</p>					
				
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?product_id=' . $product_id; ?>">
                    <button type="submit" class="btn btn-primary">Order</button>
                </form>
            </div>
        </div>
   </section>
   </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
