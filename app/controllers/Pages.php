<?php
    class Pages extends Controller{
        public function __construct() {
            //echo "It´s OK";
        }
        
        public function index() {
            $this->view("pages/init");
        }
        
        public function article($id) {
            print_r ($id);
        }
        
        public function refresh() {
            echo "Refresh";
        }
    }
?>