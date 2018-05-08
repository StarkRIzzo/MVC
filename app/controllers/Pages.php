<?php
    class Pages extends Controller{
        public function __construct() {
            //echo "It´s OK";
        }
        
        public function index() {
            $dates = [
                'title' => 'Welcome to StarkProyect'
            ];
            $this->view("pages/init", $dates);
        }
        
        public function article() {
            //$this->view("pages/article");
        }
        
        public function refresh() {
            
        }
    }
?>