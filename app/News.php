<?php
    namespace App;
    use PDO;

    class News {
        private int $id;
        private string $title;
        private string $text;
        private Database $db;
        
        public function __construct() {
            $this->db = new Database();
        }

        public function createNews($title, $text) {
            $stmt = $this->db->conn->prepare("SELECT * FROM `news` WHERE 'title' = ? OR 'text' = ?");
            $stmt->execute([$title, $text]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result > 0) {
                return 0;
            } else {
                $stmt = $this->db->conn->prepare("INSERT INTO `news`(`title`, `text`) VALUES(?, ?)");
                $stmt->execute([$title, $text]);
                return $stmt->rowCount() > 0;
            }
        }
    }
?>