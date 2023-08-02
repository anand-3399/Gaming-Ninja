<?php

$server = "localhost";
// $server = "https://databases.000webhost.com/";
$user = "root";
$password = "";
$db = "gaming ninja 2023";


$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    echo "Not Connected ";
}
else{
    // echo "Connection Succesfull ";
    }
?>