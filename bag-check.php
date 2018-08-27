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
        public function showBag(){
          foreach ($this->items as $key => $value) {
            echo $key . ", ";

          }
        }

    }

$saker = new CalculateBag();

echo "Du har med dig: ";
$saker->showBag();
