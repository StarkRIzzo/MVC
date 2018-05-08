<?php
    class Core {
        protected $controller = "pages";
        protected $method = "index";
        protected $parameters = [];
        
        public function __construct() {
            $url = $this->getUrl();
        }
        
        public function getUrl() {
            if(isset($_GET["url"])) {
                echo $_GET["url"];
            }
        }
    }
?>