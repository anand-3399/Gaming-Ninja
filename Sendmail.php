<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'gamingninja.3399@gmail.com'; // email
$mail->Password = ""; // password
$mail->setFrom('gamingninja.3399@gmail.com', 'Gaming Ninja PVT. LTD.'); // From email and name

$mail->addAddress("anandjaiswar2002@gmail.com", "Anand"); // to email and name
$mail->Subject = 'Forgot Password Code';
$mail->isHTML(true);
/*
$mail->msgPHP("Hi, Anand, \n
Thanks for being part with us. We are grateful to help you.\n
5555  is your OTP valid for 5 minutes.\n
Please do not share your code with anyone else. If this wasn't you please email us at 
anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com"); 
*/

// $mail->msgHTML(file_get_contents("Contents.php"));

$body = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMING NINJA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300">

    </style>
</head>

<body>
    <div class="footer-icons">
            <p class="sit">Terms & Conditions | Privacy &copy; 2022<br>

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/anand-3399/gaming-webpage#readme" target="_blank"><i class="fa fa-github"></i></a>

    </div>
</body>
</html>';
$mail->Body = $body;

//Read an HTML message body from an external file, convert referenced images to embedded,
// $mail->AltBody = "Hi, Anand, \n
// Thanks for being part with us. We are grateful to help you.\n
// 5555  is your OTP valid for 5 minutes.\n
// Please do not share your code with anyone else. If this wasn't you please email us at 
// anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com";
// If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
