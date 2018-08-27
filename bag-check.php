<?php

    session_start();
    $_SESSION = $_POST;

    // Se alla fel under development.
    /*
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    */


    class CalculateBag{
        public $items = [];

        //tar bort submit ifrån $items arrayen
        function __construct(){
            foreach ($_SESSION as $key => $value) {
                if ($key !== "submit") {
                    $this->items[$key] = $value;
                }
            }
        }
        //kollar om väskan väger för mycket
        public function calculateWheight(){
            if( array_sum($this->items) < 20 ){
                echo "<p style = 'color: green;' >Väskan är inte för tung, det finns platts kvar</p>";
                echo "<p>Väskan väger <span style = 'color: green;'>" . array_sum($this->items) . " kg</span> av 20kg</p>";
            } else{
                echo "<p style = 'color: red;'>Väskan väger för mycket, något måste tas bort</p>";
                echo "<p>Väskan väger <span style = 'color: red;'>" . array_sum($this->items) . " kg</span> av 20kg</p>";
            }
        }
        //kollar vad som finns i väskan
        public function showBag(){
            $stuff;
          foreach ($this->items as $key => $value) {
             $stuff .= $key . ", ";
          }
          return $stuff;
        }

    }

$saker = new CalculateBag();
$saker->calculateWheight();
echo "<p>Du har med dig: " . $saker->showBag() . "</p>";

