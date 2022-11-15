<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b3d9a1a10dbc72";
$password = "b3d3adf3";
$db = "heroku_f68a7618dec347c";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
