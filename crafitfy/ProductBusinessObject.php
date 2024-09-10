<?php

require_once 'ProductDataObject.php';

class ProductBusinessObject {
    private $product_object;

    public function __construct() {
        $this->product_object = new ProductDataObject();
    }

    public function addProduct($product_name, $product_description, $product_price, $product_discount, $product_img) {
        return $this->product_object->addProduct($product_name, $product_description, $product_price, $product_discount, $product_img);
    }

    public function updateProduct($product_id, $product_name, $product_description, $product_price, $product_discount, $product_img) {
        return $this->product_object->updateProduct($product_id, $product_name, $product_description, $product_price, $product_discount, $product_img);
    }

    public function deleteProduct($product_id) {
        return $this->product_object->deleteProduct($product_id);
    }

    public function getProductById($product_id) {
        return $this->product_object->getProductById($product_id);
    }
	
	
    public function getProductByIdAfterDiscount($product_id) {
		$product = $this->product_object->getProductById($product_id);
		$product['price_after_discount'] = $product['product_price'] - ($product['product_price'] * $product['product_discount']);	
        return $product;
    }

    public function getAllProducts() {
        return $this->product_object->getAllProducts();
    }
 

	public function getAllProductsAfterDiscount() {
		$new_products = array();
		$k = 0;
		
		$products = $this->product_object->getAllProducts();
		foreach ($products as $product) {
			$product['price_after_discount'] = $product['product_price'] - ($product['product_price'] * $product['product_discount']);
			$new_products[$k] = $product;
			$k = $k + 1;
		}
        return $new_products;
    }
	

    public function closeConnection() {
        $this->product_object->closeConnection();
    }
}

?>
