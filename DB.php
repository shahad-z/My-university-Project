<?php

class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "craftifydb";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->conn->query($sql);
        return $result;
    }

    public function select($sql) {
        $result = $this->conn->query($sql);
        $data = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function escapeString($str) {
        return $this->conn->real_escape_string($str);
    }

    public function getLastInsertedId() {
        return $this->conn->insert_id;
    }

    public function close() {
        $this->conn->close();
    }
}

?>
