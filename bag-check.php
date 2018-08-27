<?php

  session_start();
  $_SESSION = $_POST;


















// Skriva ut saker

// echo "Du har med";

var_dump($_SESSION);
foreach ($_SESSION as $key => $value) {
  // echo $key;
}
