<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google\Client();

//Set the OAuth 2.0 Client ID
// $google_client->setClientId('588905532108-i00ub0it6gh08hndfd6g8g1fsseu82h1.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
// $google_client->setClientSecret('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');

$google_client->setAuthConfig('client_secret_58526655648905532108-i00ub0it6gh08hndfd6g8g1fsseu82h1.apps.googleusercontent.com.json');



//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('Enter your Redirect URI Here');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>