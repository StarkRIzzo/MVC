<?php
    class Pages {
        public function __construct() {
            //echo "It´s OK";
        }
        
        public function index() {
            
        }
        
        public function article($id) {
            print_r ($id);
        }
        
        public function refresh() {
            echo "Refresh";
        }
    }
?>