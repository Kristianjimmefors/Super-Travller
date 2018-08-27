<?php

    session_start();
    $_SESSION = $_POST;

    // Se alla fel under development.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    class CalculateBag{
        public $items = [];

        function __construct(){
            foreach ($_SESSION as $key => $value) {
                if ($key !== "submit") {
                    $this->items[$key] = $value;
                }
            }
        }
        public function calculateWheight(){
            if( array_sum($this->items) < 20 ){
                echo "<p>Väskan är inte för tung</p>";
                echo "väskan väger " . array_sum($this->items) . " kg";
            } else{
                echo "väskan väger för mycket";
            }
        }
    }

$saker = new CalculateBag();
echo $saker->calculateWheight();