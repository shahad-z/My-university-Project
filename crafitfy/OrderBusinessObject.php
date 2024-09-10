<?php

require_once 'OrderDataObject.php';

class OrderBusinessObject {
    private $order_object;

    public function __construct() {
        $this->order_object = new OrderDataObject();
    }

    public function addOrder($product_id, $customer_id) {
        return $this->order_object->addOrder($product_id, $customer_id);
    }

    public function getOrdersByProductId($product_id) {
        return $this->order_object->getOrdersByProductId($product_id);
    }

    public function getOrdersByCustomerId($customer_id) {
        return $this->order_object->getOrdersByCustomerId($customer_id);
    }

    public function getOrderById($Order_id) {
        return $this->order_object->getOrderById($Order_id);
    }

    public function deleteOrder($Order_id) {
        return $this->order_object->deleteOrder($Order_id);
    }

    public function closeConnection() {
        $this->order_object->closeConnection();
    }
}

?>
