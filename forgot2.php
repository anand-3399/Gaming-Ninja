<?php
session_start();

if (!isset(($_SESSION['count']))) {
?>
    <script>
        location.replace("login.php");
    </script>
<?php
}
// echo $_SESSION['count'];
// echo $_SESSION['email_for_forget'];
// echo $_SESSION['Confidential_Code'];
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
    <?php include 'styles.php' ?>
    <?php include 'links.php' ?>

</head>

<body>

    <?php

    include 'dbcon.php';
    if (isset($_POST['submit'])) {

        $email                  =         $_SESSION['email_for_forget'];
        $Confidential_Code      =  strval($_SESSION['Confidential_Code']);

        $verify     =  mysqli_real_escape_string($con, $_POST['verify']);
        $password   =  mysqli_real_escape_string($con, $_POST['password']);
        $cpassword  =  mysqli_real_escape_string($con, $_POST['cpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


        if (($verify ==  $_SESSION['Confidential_Code']) && ($password == $cpassword)) {

            $updatequery = "UPDATE registration SET password = '$pass', cpassword= '$cpass' WHERE email = '$email';";
            $iquery = mysqli_query($con, $updatequery);

            if ($iquery) {
                echo "Password Updated Succesfull";
                // header('location:home.php')
    ?>
                <script>
                    location.replace("login.php");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Password was not Updated");
                </script>
            <?php

            }
        } else {
            ?>
            <script>
                alert("Wrong Code or Password is not matching. Please enter right code or Match the password you entered");
            </script>
    <?php
        }
    }
    ?>


    <div class="card bg-dark" style="color: white;">
        <article class="card-body mx-auto" style="max-width: 400px;">

            <h4 class="card-title mt-3 text-center">Fill the details</h4>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-qrcode"></i> </span>
                    </div>
                    <input name="verify" class="form-control" placeholder="Enter Code" type="verify" required>
                </div>
                <!--form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Confirm password" type="password" name="cpassword" value="" required>
                </div> <!-- form-group// -->

                <div class=" form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block" style="width: 100%;"> Login Now </button>
                </div>
                <!-- form-group//-->
                <p class="text-center">Not have a account? <a href="regis.php">Create Account Now!!!</a> </p>

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