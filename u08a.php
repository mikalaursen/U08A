<?php

//Show errors I like this!!
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get pic data sent by GET
// isset() tests for data at the gateway, required on many servers
// Radio buttons pass values ($pic)
// Displays selected $pic page
if(isset($_GET["dessert"])) { $pic = $_GET["dessert"]; } else { $pic = ""; }

if($pic == "ice"){
    print '<img src="ice.jpg">';
}

if($pic == "tira"){
    print '<img src="tira.jpg">';
}

if($pic == "cake"){
    print '<img src="cake.jpg">';
}


?>
