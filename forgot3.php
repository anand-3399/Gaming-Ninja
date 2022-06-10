<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
//Alias the League Google OAuth2 provider class
use League\OAuth2\Client\Provider\Google;

require 'mail/vendor/autoload.php';
date_default_timezone_set('Etc/UTC');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMING NINJA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300">

    <link rel="stylesheet" href="Gaming Website/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <?php include 'styles.php' ?>
    <?php include 'links.php' ?>

</head>

<body>

    <?php

    include 'dbcon.php';
    if (isset($_POST['submit'])) {
        $email_u      =  mysqli_real_escape_string($con, $_POST['email']);

        $email_search = " select * from registration where email = '$email_u' ";
        $query = mysqli_query($con, $email_search);
        $emailcount = mysqli_num_rows($query);
        // $_SESSION['count'] = -1;

        if ($emailcount) {
            $_SESSION['count'] = $emailcount;
            $_SESSION['email_for_forget'] = $email_u;
            $_SESSION['Confidential_Code'] = rand(1005, 9000);
            $USER_CODE_CONFIDENTIAL = $_SESSION['Confidential_Code'];
            // Sending Email Part

            $email_pass = mysqli_fetch_assoc($query);
            $username_of_sender = $email_pass['username'];
            $to_email   = "$email_u";
            $subject    = "Forgot Password Code";

            $body       = '<div style="padding:16px;background-color: rgb(200, 200, 200);">
            <div style="text-align: center;font-size: 20px;color: chartreuse;">
                <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300" style="width:120px;border: 2px solid black;border-radius: 50%">
            </div>
            <h4 style="text-align: center;font-size: 30px;color: chartreuse; background-color: black;border-radius: 31px;margin: auto;width: auto;">Hi, ' . $username_of_sender . '</h4>
            <h4 style="color: black;text-align: left;font-size: 20px;">Thanks for being part with us. We are grateful to help you. </h4>
            <h5 style="color: red;font-size: 30px; margin: 0px;">' . $USER_CODE_CONFIDENTIAL . '</h5>  <h4 style="font-size: 15px;margin: auto;">is your OTP valid for 5 minutes.</h4>
            <h4 style="font-size: 12px;">
            Please do not share your code with anyone else. If this wasn\'t you please email us at 
            anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com</h4>
            
            <div class="footer-icons">
            <center>
            <p style="font-size: 12px;text-align: center;">Terms & Conditions | Privacy &copy; 2022</p>
                <div style="padding: 2px;">
                <a href="https://www.instagram.com/anand_3399/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/480px-Instagram_logo_2016.svg.png" alt="instagram" width="35px" height="35px" style="/*width: 5%*/;padding: 5px;"></a>

                <a href="https://facebook.com/anand360"><img src="https://pnggrid.com/wp-content/uploads/2021/07/Facebook-Logo-Square-768x768.png" alt="facebook" width="35px" height="35px" style="/*width: 5%*/;padding: 5px;"></a>

                <a href="https://www.linkedin.com/in/anandjaiswar02/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/600px-LinkedIn_logo_initials.png" alt="linkedin" width="35px" height="35px" style="/*width: 5%*/;padding: 5px;"></a>

                <a href="https://github.com/anand-3399"><img src="https://cdn3.iconfinder.com/data/icons/inficons/512/github.png" alt="github" width="35px" height="35px" style="/*width: 5%*/;padding: 5px;border-radius: 50%;"></a>

                <a href="https://twitter.com/anandjaiswar02"><img src="https://logos-world.net/wp-content/uploads/2020/04/Twitter-Logo.png" alt="twitter" width="55px" height="35px" style="/*width: 8%*/;padding: 5px 0px;"></a>
                </div>
            </center>
            </div>
        ';

            $headers    = "From: gamingninja.3399@gmail.com";

            /*

            if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to $to_email...";
            } else {
                echo "Email sending failed...";
            }
            */


            // require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
            // require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
            // require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';



            $mail = new PHPMailer();
            $mail->isSMTP();
            // $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
            $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
            $mail->Port = 465; // TLS only
            // $mail->SMTPSecure = 'tls'; // ssl is deprecated

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPAuth = true;
            $mail->AuthType = 'XOAUTH2';

            //Start Option 1: Use league/oauth2-client as OAuth2 token provider
            //Fill in authentication details here
            //Either the gmail account owner, or the user that gave consent

            $email = 'gamingninja.3399@gmail.com';
            $clientId = '588905532108-pr6bu169457hunncaqd50i8js50pn9ab.apps.googleusercontent.com';
            $clientSecret = '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';

            //Obtained by configuring and running get_oauth_token.php
            //after setting up an app in Google Developer Console.
            $refreshToken = '1//01RKdfKjNtsj3CgYIARAAGAESNwF-L9Ira4PUwt9NZHoDf-s4bX9EqAGy_Muq5SeImWF40FUqnCoq26DyFBoAcheOGptkXW_A9zU';

            $provider = new Google(
                [
                    'clientId' => $clientId,
                    'clientSecret' => $clientSecret,
                ]
            );
            $mail->setOAuth(
                new OAuth(
                    [
                        'provider' => $provider,
                        'clientId' => $clientId,
                        'clientSecret' => $clientSecret,
                        'refreshToken' => $refreshToken,
                        'userName' => $email,
                    ]
                )
            );


            // $mail->SMTPAuth = true;
            // $mail->Username = 'gamingninja.3399@gmail.com'; // email
            // $mail->Password = 'A3v%\/UFk2k}f^04'; // password



            $mail->setFrom('gamingninja.3399@gmail.com', 'Gaming Ninja PVT. LTD.'); // From email and name
            $mail->isHTML(true);

            $mail->addAddress("$email_u", "$username_of_sender"); // to email and name
            $mail->Subject = 'Forgot Password Code';
            $mail->Body = $body;

            // $mail->msgHTML("Hi, $username_of_sender, \n
            // Thanks for being part with us. We are grateful to help you.\n
            // $USER_CODE_CONFIDENTIAL  is your OTP valid for 5 minutes.\n
            // Please do not share your code with anyone else. If this wasn't you please email us at 
            // anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com");

            // $mail->msgHTML(file_get_contents("Contents.html")); 
            //Read an HTML message body from an external file, convert referenced images to embedded,
            $mail->AltBody = "Hi, $username_of_sender, \n
            Thanks for being part with us. We are grateful to help you.\n
            $USER_CODE_CONFIDENTIAL  is your OTP valid for 5 minutes.\n
            Please do not share your code with anyone else. If this wasn't you please email us at 
            anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com";
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

    ?>
            <script>
                location.replace("forgot2.php");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Email was not registered. Please Register Yourself");
            </script>
    <?php
        }
    }
    ?>


    <div class="card bg-dark" style="color: white;">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <p>
                <a href="Sign In With Google\index.php" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i> Login via Gmail</a> <a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i> Login via facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Enter your registered Email" type=" email" required>
                </div>
                <!--form-group// -->
                <!-- form-group// -->

                <div class=" form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block" style="width: 100%;"> Submit </button>
                </div>
                <!-- form-group//-->
                <p class="text-center">Not have a account? <a href="regis.php">Create Account Now!!!</a> </p>
                <p class="text-center">Back To <a href="Gaming Website\index.php">Home Page</a> </p>

            </form>
        </article>
        <div class="new">
            This page was created by Anand Jaiswar for educational purpose only.
            contact me at anandjaiswar02@gmail.com
        </div>
    </div> <!-- card.// -->
    </div>
</body>

</html>