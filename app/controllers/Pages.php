<?php
    class Pages extends Controller{
        public function __construct() {
            
        }
        
        public function index() {
                 
            $dates = [
                'title' => 'Welcome to StarkProyect'
            ];
            $this->view("pages/init", $dates);
        }
    }
?>