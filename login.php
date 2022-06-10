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
        $email      =  mysqli_real_escape_string($con, $_POST['email']);
        $password   =  mysqli_real_escape_string($con, $_POST['password']);

        $email_search = " select * from registration where email = '$email' ";
        $query = mysqli_query($con, $email_search);
        $emailcount = mysqli_num_rows($query);

        if ($emailcount) {

            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];
            $_SESSION['id'] = $email_pass['id'];
            $pass_decode = password_verify($password, $db_pass);

            if ($pass_decode) {
                echo "Login Succesfull";
                // header('location:home.php')
    ?>
                <script>
                    location.replace("Gaming Website/index.php");
                </script>
            <?php
            } else {
                echo "Password Incorrect\nPlease check your password";
            }
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
                    <input name="email" class="form-control" placeholder="Email address" type=" email" required>
                </div>
                <!--form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
                </div> <!-- form-group// -->

                <div class=" form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block" style="width: 100%;"> Login Now </button>
                </div>
                <!-- form-group//-->
                <p class="text-center">Not have a account? <a href="regis.php">Create Account Now!!!</a> </p>
                <p class="text-center">Forgot Passoword?? <a href="forgot3.php">CLick here to reset your password</a> </p>
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