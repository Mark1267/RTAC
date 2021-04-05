<?php

$host = 'localhost';
$user = 'u561911775_Stafen';
$pass = 'Stafen1234';
$db_name = 'u561911775_rockteraasset';

$conn = new mySQLi($host, $user, $pass, $db_name);

if($conn->connect_error){
    die('Database Connection Erorr: ' . $conn->connect_error );
}
?>