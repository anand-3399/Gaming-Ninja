<?php

$server = "localhost";
// $server = "https://databases.000webhost.com/";
$user = " ";
$password = " ";
$db = " ";


$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    echo "Not Connected ";
}
else{
    echo "Connection Succesfull ";
    }
?>