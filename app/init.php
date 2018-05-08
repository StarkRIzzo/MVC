<?php
    require_once 'config/config.php';
    
    //AUTOLOAD
    spl_autoload_register(function($className) {
        require_once 'libraries/' . $className . '.php';
    });
?>