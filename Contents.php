<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!isset(($_SESSION['count']))) {
?>
    <script>
        // location.replace("login.php");
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMING NINJA</title>
    <link rel="stylesheet" href="Gaming Website/css/style.css">
    <link rel="stylesheet" href="Gaming Website/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300">
    <style>
        #p2 {
            text-align: center;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: chartreuse;
        }

        .ptr {
            border: 3px solid #f1a409;
            /* text-align: center; */
            border-radius: 45px;
            width: auto;
            margin: 1% 1%;
            margin-top: 2%;
            margin-bottom: 2%;
            padding: 1% 2%;
            background-color: rgb(12, 17, 17);
            background-position: center;
            box-shadow: 5px 10px rgb(209 198 198);
            float: none;
        }
    </style>
</head>

<body>
    <p class="thumbnail" style="align-items: center; display:flex;
    justify-content:center">
        <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300" style="width:10%">
    </p>
    <p id="p2" class="ptr">
        Thanks for being part with us. We are grateful to help you.<br>
        5555  is your OTP valid for 5 minutes.<br>
        Please do not share your code with anyone else. <br>
        If this wasn't you please email us at 
        anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com
    </p>
</body>

</html>