<?php
require_once 'ProductBusinessObject.php';
require_once 'CustomerBusinessObject.php';


$product = new ProductBusinessObject();
$customer = new CustomerBusinessObject();


$product->addProduct("Handmade Necklace", "A beautiful handmade necklace", 499, 0.10, "assets/imgs/necklace.jpg");
$product->addProduct("Ceramic Vase", "A unique handmade ceramic vase", 600, 0.20, "assets/imgs/vase.jpg");
$product->addProduct("Wooden Cutting Board", "A high-quality handmade cutting board", 570, 0.18, "assets/imgs/cuttingboard.jpg");
$product->addProduct("Zinc Anchor Bucket", "The bucket is quite powerful, which will help you to organize things professionally. It is made of zinc, and the finishing is 100% of high-quality iron", 550, 0.25, "assets/imgs/bucket1.jpg");
$product->addProduct("Set of 3 Grey and White Ice Buckets", "Grey And White Iron Buckets.", 850, 0.3, "assets/imgs/bucket2.jpg");
$product->addProduct("Gold Tea Candle Lights", "Place this golden-colored brass plated tea light that burns on high-quality wax and prefers candlelight dinner with your dear and loved ones.", 750, 0.2, "assets/imgs/candle1.jpg");
$product->addProduct("Powder Coated Trunk Box", "This gorgeous iron trunk box with powder coating will add a lavish look and feel to your room, along with keeping it organized.", 850, 0.3, "assets/imgs/box1.jpg");
$product->addProduct("Modern Flower Vase", "The intricate texture of this white-colored soft stone modern flowerpot makes it stand out among other décor items.", 750, 0.2, "assets/imgs/vase2.jpg");



$customer->registerCustomer("customer1", "customer1", "customer1@gmail.com", "password1");
$customer->registerCustomer("customer2", "customer2", "customer2@gmail.com", "password2");

echo "Customers and Products added successfully.";
?>
