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

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>gaming</title>
    <link rel="icon" href="img/Gaming Ninja Logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
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




    <div class="body_bg">


        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"> <img src="img\Gaming Ninja Logo.png" alt="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <!-- check wheter its previously login or not -->

                                    <?php
                                    if (!isset($_SESSION['username'])) {
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">Login</a>
                                        </li>
                                    <?php
                                    } else {
                                    ?>
                                        <li class="nav-item">
                                            <a id="LOGIN_ID_MAIN" onclick="CheckStatus()" class="nav-link" href="logout.php">Logout</a>
                                        </li>
                                    <?php
                                    }
                                    ?>


                                    <li class="nav-item">
                                        <a class="nav-link" href="team.php">team</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="blog.php"> blog</a>
                                            <a class="dropdown-item" href="single-blog.php">Latest blog</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn_1 d-none d-sm-block">Install Now</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->



        <!-- ================ contact section start ================= -->
        <section class="contact-section section_padding">
            <div class="container">

                <div class="row credientials pt-5">
                    <div class="col-lg-5">
                        <h2 class="contact-title">Update your Credientials</h2>
                    </div>

                    <div class="col-lg-7">
                        <div class="col-lg-12">
                            <form class="form-contact contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row credientials">
                                    <div class="col-lg-4 googleButton" onclick="location.replace('Sign In With Google/index.php')">
                                        <div class="google-btn form-group">
                                            <div class="google-icon-wrapper">
                                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                                            </div>
                                            <p class="btn-text"><b>Sign in with Google</b></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 googleButton">
                                        <div class="google-btn form-group">
                                            <div class="google-icon-wrapper">
                                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/1200px-Microsoft_logo.svg.png" />
                                            </div>
                                            <p class="btn-text"><b>Sign in with Microsoft</b></p>
                                        </div>

                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input required class="form-control" name="verify" id="verify" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Code'" placeholder='Enter your Code'>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input required class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder='Enter Password'>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input required class="form-control" name="cpassword" id="cpassword" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" placeholder='Confirm Password'>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <button name="submit" type="submit" class="button-contactForm btn_1">Submit </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ================ contact section end ================= -->

        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <a href="index.php" class="footer_logo_iner"> <img src="img/Gaming Ninja Logo.png" alt="#"> </a>
                                <p>Connect with US
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <h4>Contact Info</h4>
                                <p>Address : Mumbai, India</p>
                                <p>Phone : +91 9699685491</p>
                                <p>Email : anandjaiswar02@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <h4>Important Link</h4>
                                <ul class="list-unstyled">
                                    <li><a href="">WHMCS-bridge</a></li>
                                    <li><a href="">Search Domain</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Shopping Cart</a></li>
                                    <li><a href="">Our Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <h4>Newsletter</h4>
                                <p>Know about the latest Game updates now.
                                </p>
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                                        <input required type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                        <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><i class="far fa-paper-plane"></i></button>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copygight_text">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="copyright_text">
                                <P>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved by
                                    Gaming Ninja| Made with
                                    <i class="ti-heart" aria-hidden="true"></i> by <a href="https://anand-3399.github.io/Portfolio/" target="_blank">Anand Arvind
                                        Jaiswar</a>

                                </P>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer_icon social_icon">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>