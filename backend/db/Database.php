<?php
    require once '../config/config.php';

    class Database {
        private $conn;

        public function _construct () {
            $this-> conn = new msqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if ($this->conn->connect_error) {
                die('Error de Conexion'.this->conn->connect_error);
            }
        }

        public function getConnection () {
            return $this->conn;
        }
    }
?>