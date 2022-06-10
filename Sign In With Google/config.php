<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google\Client();

$google_client->setAuthConfig('client_secret_588905532108-i00ub0it6gh08hndfd6g8g1fsseu82h1.apps.googleusercontent.com.json');



//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri(' ');

// $google_client->setRedirectUri('http://localhost/00webhost%20Gaming%20Ninja%20Website/Sign%20In%20With%20Google/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
