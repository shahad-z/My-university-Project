<?php

require_once 'DB.php';
require_once 'OrderDataObject.php';


class ProductDataObject {
    private $db;
	private $order_object;

    public function __construct() {
        $this->db = new DB();
		$this->order_object = new OrderDataObject();
    }

    public function addProduct($product_name, $product_description, $product_price, $product_discount, $product_img) {
        $product_name = $this->db->escapeString($product_name);
        $product_description = $this->db->escapeString($product_description);
        $product_img = $this->db->escapeString($product_img);

        $sql = "INSERT INTO products (product_name, product_description, product_price, product_discount, product_img) VALUES ('$product_name', '$product_description', $product_price, $product_discount, '$product_img')";
        $result = $this->db->query($sql);

        return $result;
    }

    public function updateProduct($product_id, $product_name, $product_description, $product_price, $product_discount, $product_img) {
        $product_name = $this->db->escapeString($product_name);
        $product_description = $this->db->escapeString($product_description);
        $product_img = $this->db->escapeString($product_img);

        $sql = "UPDATE products SET product_name = '$product_name', product_description = '$product_description', product_price = $product_price, product_discount = $product_discount, product_img = '$product_img' WHERE product_id = $product_id";
        $result = $this->db->query($sql);

        return $result;
    }

    public function deleteProduct($product_id) {

        $this->order_object->deleteOrderByProductId($product_id);


        $sql = "DELETE FROM products WHERE product_id = $product_id";
        $result = $this->db->query($sql);

        return $result;
    }

    public function getProductById($product_id) {
        $sql = "SELECT * FROM products WHERE product_id = $product_id";
        $result = $this->db->select($sql);

        if (count($result) == 1) {
            return $result[0];
        }

        return null;
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $result = $this->db->select($sql);

        return $result;
    }

    public function closeConnection() {
        $this->db->close();
    }
}

?>
