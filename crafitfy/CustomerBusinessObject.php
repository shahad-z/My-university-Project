<?php

require_once 'CustomerDataObject.php';

class CustomerBusinessObject {
    private $customer_object;

    public function __construct() {
        $this->customer_object = new CustomerDataObject();
    }

    public function registerCustomer($first_name, $last_name, $email, $password) {
        return $this->customer_object->registerCustomer($first_name, $last_name, $email, $password);
    }

    public function loginCustomer($email, $password) {
        return $this->customer_object->loginCustomer($email, $password);
    }

    public function getCustomerById($customer_id) {
        return $this->customer_object->getCustomerById($customer_id);
    }

    public function updateCustomerProfile($customer_id, $first_name, $last_name, $email) {
        return $this->customer_object->updateCustomerProfile($customer_id, $first_name, $last_name, $email);
    }

    public function deleteCustomer($customer_id) {
        return $this->customer_object->deleteCustomer($customer_id);
    }

    public function getAllCustomers() {
        return $this->customer_object->getAllCustomers();
    }

    public function closeConnection() {
        $this->customer_object->closeConnection();
    }
}

?>
