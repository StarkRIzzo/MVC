<?php
    class Database {
        private $driver = DB_DRIVER;
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $database = DB_NAME;
        PRIVATE $charset = DB_CHARSET;
        
        private $connection;
        private $stmt;
        private $error;
        
        public function __construct() {
            $dsn = "$this->driver:host=$this->host;dbname=$this->database;charset=$this->charset;";
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this->connection = new PDO($dsn, $this->user, $this->password, $options);
                $this->connection->exec('SET NAMES UTF8');
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
        
        public function query($sql) {
            $this->stmt = $this->connection->prepare($sql);
        }
        
        public function bind($parameter, $value, $type = null) {
            if(is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                    break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                    break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                    break;
                    default:
                        $type = PDO::PARAM_STRING;
                }
            }
            $this->stmt->bindValue($parameter, $value, $type);
        }
        
        public function execute() {
            return $this->stmt->execute();
        }
        
        public function registers() {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function register() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        public function rowCount() {
            return $this->stmt->rowCount();
        }
    }
?>