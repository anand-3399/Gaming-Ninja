<?php
// this example will start a session with an expire time given by the php configuration
// session_start();
start_session(15780000);


if (!isset($_SESSION['username'])) {
    // echo "You are Logged Out";
?>
    <script>
        // location.replace("../login.php");
    </script>
<?php
    // header('../login.php');
} else {
    // echo $_SESSION['id'];
}

// $expire = the time in seconds until a session have to expire
function start_session($expire = 0)
{
    if ($expire == 0) {
        $expire = ini_get("session.gc_maxlifetime");
    } else {
        ini_set("session.gc_maxlifetime", $expire);
    }
    if (empty($_COOKIE['PHPSESSID'])) {
        session_set_cookie_params($expire);
        session_start();
    } else {
        session_start();
        setcookie("PHPSESSID", session_id(), time() + $expire);
    }
}

// start_session(600) will start a session which will expire after 10 minutes (60*10 seconds)
?>


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gaming Ninja</title>
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
</head>

<body>
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
                                        <?php
                                        if (isset($_SESSION['id']) && ($_SESSION['id'] === "1")) {
                                        ?>

                                            <a class="nav-link" href="superuser.php">Admin</a>

                                        <?php
                                        }

                                        ?>
                                    </li>


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

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>Best Highlights
                                    of the Latest</h1>
                                <p>Get the latest Games and enjoy 3D animations with VR on your steps </p>
                                <a href="#" class="btn_1">Get Game Pass Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!--::client logo part end::-->
        <section class="client_logo">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_1.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_2.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_3.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_4.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_5.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_1.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::client logo part end::-->

        <!-- about_us part start-->
        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            <img src="img/about_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            <h2>Find out about us in history</h2>
                            <p> Enjoy Top Norch Games in just figertips. Relief all the stress and enjoy just one moment
                                in life. Watch tutorial on how to install games now! </p>
                            <a href="#" class="btn_1">Install Now</a>
                            <a href="#" class="btn_1">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about_us part end-->

        <!--::about_us part start::-->
        <section class="live_stareams padding_bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-2 offset-lg-2 offset-sm-1">
                        <div class="live_stareams_text">
                            <h2>Enjoy live <br> streams</h2>
                            <div class="btn_1">install now</div>
                        </div>
                    </div>
                    <div class="col-md-7 offset-sm-1">
                        <div class="live_stareams_slide owl-carousel">
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube" href="https://youtu.be/DPDSYP0q8R8">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::about_us part end::-->

        <!-- use sasu part end-->
        <section class="Latest_War">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2>Latest War Fight</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="Latest_War_text">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="single_war_text text-center">
                                        <img src="img/Gaming Ninja Logo.png" alt="">
                                        <h4>Open War chalange</h4>
                                        <p>1 Dec , 2022</p>
                                        <a href="#">view fight</a>
                                        <div class="war_text_item d-flex justify-content-around align-items-center">
                                            <img src="img/war_logo_1.png" alt="">
                                            <h2>190<span>vs</span>189</h2>
                                            <img src="img/war_logo_2.png" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn_2">Watch Tutorial</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="latest_war_list">
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <img src="img/war_logo_1.png" alt="">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src="img/war_logo_2.png" alt="">
                                    <div class="war_date">
                                        <a href="#">1 Dec 2022</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <img src="img/war_logo_1.png" alt="">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src="img/war_logo_2.png" alt="">
                                    <div class="war_date">
                                        <a href="#">2 Dec 2022</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <img src="img/war_logo_1.png" alt="">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src="img/war_logo_2.png" alt="">
                                    <div class="war_date">
                                        <a href="#">3 Dec 2022</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <img src="img/war_logo_1.png" alt="">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src="img/war_logo_2.png" alt="">
                                    <div class="war_date">
                                        <a href="#">4 Dec 2022</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Latest_War_text Latest_War_bg_1">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="single_war_text text-center">
                                        <img src="img/Gaming Ninja Logo.png" alt="">
                                        <h4>Open War chalange</h4>
                                        <p>1 Dec , 2022</p>
                                        <a href="#">view fight</a>
                                        <div class="war_text_item d-flex justify-content-around align-items-center">
                                            <img src="img/war_logo_1.png" alt="">
                                            <h2>190<span>vs</span>189</h2>
                                            <img src="img/war_logo_2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn_2">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!-- gallery_part part start-->
        <section class="gallery_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <h2>All Fighter</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallery_part_item">
                            <div class="grid">
                                <div class="grid-sizer"></div>
                                <a href="img/gallery/gallery_item_1.png" class="grid-item bg_img img-gal grid-item--height-1" style="background-image: url('img/gallery/gallery_item_1.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/gallery_item_2.png" class="grid-item bg_img img-gal" style="background-image: url('img/gallery/gallery_item_2.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/gallery_item_3.png" class="grid-item bg_img img-gal" style="background-image: url('img/gallery/gallery_item_3.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/gallery_item_5.png" class="grid-item bg_img img-gal grid-item--height-2" style="background-image: url('img/gallery/gallery_item_5.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/gallery_item_7.png" class="grid-item bg_img img-gal grid-item--height-2" style="background-image: url('img/gallery/gallery_item_7.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/gallery_item_6.png" class="grid-item bg_img img-gal grid-item--width-1" style="background-image: url('img/gallery/gallery_item_6.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/gallery_item_4.png" class="grid-item bg_img img-gal sm_weight  grid-item--height-1" style="background-image: url('img/gallery/gallery_item_4.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery_part part end-->

        <!-- use sasu part end-->
        <section class="upcomming_war">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2>Upcoming Fighter</h2>
                        </div>
                    </div>
                </div>
                <div class="upcomming_war_iner">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-10 col-sm-5 col-lg-3">
                            <div class="upcomming_war_counter text-center">
                                <h2>Dark Dragon</h2>
                                <h4>On 31st Dec 2023</h4>
                                <div id="timer" class="d-flex justify-content-between">
                                    <div id="days"></div>
                                    <div id="hours"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!-- pricing part start-->
        <section class="pricing_part padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_tittle text-center">
                            <h2>Pricing plans</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
                            <p>Regular Package</p>
                            <h3>Free</h3>
                            <ul>
                                <li>0.5GB Bandwidth</li>
                                <li>One Account</li>
                                <li>2GB Storage</li>
                            </ul>
                            <a href="#" class="btn_2">Choose Plane</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
                            <p>Silver Package</p>
                            <h3>$60.0/year</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>One Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href="#" class="btn_2">Choose Plane</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
                            <p>Gold Package</p>
                            <h3>$80.0/year</h3>
                            <ul>
                                <li>Unlimited Bandwidth</li>
                                <li>Two Account</li>
                                <li>50GB Storage</li>
                            </ul>
                            <a href="#" class="btn_2">Choose Plane</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing part end-->

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
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
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