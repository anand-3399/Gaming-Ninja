<?php
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
    <?php include 'styles.php' ?>
    <?php include 'links.php' ?>
</head>

<body>

    <?php

    include 'dbcon.php';

    if (isset($_POST['submit'])) {
        $username   =  mysqli_real_escape_string($con, $_POST['username']);
        $email      =  mysqli_real_escape_string($con, $_POST['email']);
        $mobile     =  mysqli_real_escape_string($con, $_POST['mobile']);
        $password   =  mysqli_real_escape_string($con, $_POST['password']);
        $cpassword  =  mysqli_real_escape_string($con, $_POST['cpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($query);
        if ($emailcount > 0) {
            // echo "email already exists";
    ?>
            <script>
                alert("Email already exists");
            </script>
            <?php
        } else {
            if ($password === $cpassword) {

                $insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

                $iquery = mysqli_query($con, $insertquery);

                if (!$iquery) {
                    echo "Not Inserteddd";
                } else {
                    echo "Inserted Succesfull";
            ?>
                    <script>
                        location.replace("login.php");
                    </script>
                <?php
                    // header('location:login.php');
                }
            } else {
                // echo "password are not matching";
                ?>
                <script>
                    alert("password are not matching");
                </script>
    <?php
            }
        }
    }




    ?>

    <div class="card bg-dark" style="color: white;">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <p> <a href="Sign In With Google\index.php" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i> Login via Gmail</a>
                <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i> Login via facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="Full name" type="text" required>
                </div> <!-- form-group//-->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </ span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email" required>
                </div> <!-- form-group//-->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
                </div> <!-- form-group//-->
                <div class="form-group input-group">
                    <div class="input-group-prepend"> <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
                </div> <!-- form-group//-->
                <div class="form-group">
                    <button type="submit" name="submit" class="btn
                    btn-primary btn-block"> Create Account </button>
                </div><!-- form-group// -->
                <p class="text-center">Already Have an account? <a href="login.php">Log In</a> </p>
                <p class="text-center">Back To <a href="Gaming Website\index.php">Home Page</a> </p>
            </form>
        </article>
        <div class="new">
            This page was created by Anand Jaiswar for educational purpose only.
            contact me at anandjaiswar02@gmail.com
        </div>
    </div> <!-- card.// -->
    </div>
    </div>
    </div>
</body>

</html>