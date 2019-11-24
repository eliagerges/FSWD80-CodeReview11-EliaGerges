<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
$localhost = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cr11_elia_gerges_travelmatic"; 

$conn = new  mysqli($localhost, $username, $password, $dbname); 

if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} else {
}

?>