<?php

$db_host = "localhost";
$db_name = "14686073_maciej";
$db_user = "14686073_maciej";
$db_pass = "polkij12";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

