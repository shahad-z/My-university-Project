<?php

require_once 'DB.php';

class CustomerDataObject {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function registerCustomer($customer_fname, $customer_lname, $customer_email, $customer_password) {
        $hashed_password = password_hash($customer_password, PASSWORD_DEFAULT);
        $customer_email = $this->db->escapeString($customer_email);

        $sql = "INSERT INTO customers (customer_fname, customer_lname, customer_email, customer_password) VALUES ('$customer_fname', '$customer_lname', '$customer_email', '$hashed_password')";
        $result = $this->db->query($sql);

        return $result;
    }

    public function loginCustomer($customer_email, $customer_password) {
        $customer_email = $this->db->escapeString($customer_email);

        $sql = "SELECT * FROM customers WHERE customer_email = '$customer_email'";
        $result = $this->db->select($sql);

        if (count($result) == 1) {
            $user = $result[0];
            if (password_verify($customer_password, $user['customer_password'])) {
                return $user;
            }
        }

        return null;
    }

    public function getCustomerById($customer_id) {
        $sql = "SELECT * FROM customers WHERE customer_id = $customer_id";
        $result = $this->db->select($sql);

        if (count($result) == 1) {
            return $result[0];
        }

        return null;
    }

    public function updateCustomerProfile($customer_id, $customer_fname, $customer_lname, $customer_email) {
        $customer_email = $this->db->escapeString($customer_email);

        $sql = "UPDATE customers SET customer_fname = '$customer_fname', customer_lname = '$customer_lname', customer_email = '$customer_email' WHERE customer_id = $customer_id";
        $result = $this->db->query($sql);

        return $result;
    }

    public function deleteCustomer($customer_id) {
        $sql = "DELETE FROM customers WHERE customer_id = $customer_id";
        $result = $this->db->query($sql);

        return $result;
    }

    public function getAllCustomers() {
        $sql = "SELECT * FROM customers";
        $result = $this->db->select($sql);

        return $result;
    }

    public function closeConnection() {
        $this->db->close();
    }
}

?>
