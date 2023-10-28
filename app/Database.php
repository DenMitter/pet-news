<?php
    namespace App;
    use PDO;
    use PDOException;

    class Database {
        private string $host = 'localhost';
        private string $username = 'root';
        private string $password = '';
        private string $database = 'datebase';
        public PDO $conn;
        
        public function __construct(){
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

       
    }
?>
