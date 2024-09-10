<?php
require_once 'ProductBusinessObject.php';

$product = new ProductBusinessObject();
$products = $product->getAllProductsAfterDiscount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta product_name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
        <h1>Products</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
					<h5 class="card-title"><?php echo $product['product_name']; ?></h5><br><br>
                        <img src="<?php echo $product['product_img']; ?>" class="card-img-top" alt="<?php echo $product['product_name'];?>" height="300">
                        <div class="card-body">
                        
                            <p class="card-text">
                                <strong>Details: </strong><?php echo $product['product_description']; ?>
                            </p>
                        <p class="card-text">
                            <strong>Price: </strong> SAR <?php echo $product['product_price']; ?>
						</p>
						<p class="card-text">
							<strong>Discount: </strong><?php echo $product['product_discount'] * 100; ?>%
						</p>                       
						
						<p class="card-text">
							<strong>Price After Discount: </strong> SAR <?php echo $product['price_after_discount']; ?>
						</p>				
							<center>
                            <a href="product_details.php?product_id=<?php echo $product['product_id']; ?>" class="btn btn-primary">Order Now</a>
							</center>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
