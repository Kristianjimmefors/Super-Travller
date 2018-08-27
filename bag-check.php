<?php

    session_start();
    $_SESSION = $_POST;
    
    // Se alla fel under development.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    class CalculateWeight{
        public $items = [];

        function __construct(){
            foreach ($_SESSION as $key => $value) {
                if ($key !== "submit") {
                    $items[$key] = $value;
                }
            }  
        }
        
    }
    
$saker = new CalculateWeight();