<?php

require_once 'DB.php';

class OrderDataObject {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function addOrder($product_id, $customer_id) {
        $sql = "INSERT INTO orders (product_id, customer_id) VALUES ($product_id, $customer_id)";
        $result = $this->db->query($sql);

        return $result;
    }

    public function getOrdersByProductId($product_id) {
        $sql = "SELECT * FROM orders WHERE product_id = $product_id";
        $result = $this->db->select($sql);

        return $result;
    }

    public function getOrdersByCustomerId($customer_id) {
        $sql = "SELECT * FROM orders WHERE customer_id = $customer_id";
        $result = $this->db->select($sql);

        return $result;
    }

    public function getOrderById($Order_id) {
        $sql = "SELECT * FROM orders WHERE id = $Order_id";
        $result = $this->db->select($sql);

        if (count($result) == 1) {
            return $result[0];
        }

        return null;
    }

    public function deleteOrder($Order_id) {
        $sql = "DELETE FROM orders WHERE id = $Order_id";
        $result = $this->db->query($sql);

        return $result;
    }
	

    public function deleteOrderByProductId($product_id) {
        $sql = "DELETE FROM orders WHERE product_id = $product_id";
        $result = $this->db->query($sql);

        return $result;
    }

    public function closeConnection() {
        $this->db->close();
    }
}

?>
