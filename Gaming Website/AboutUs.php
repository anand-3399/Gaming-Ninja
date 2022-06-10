<?php
session_start();
?>
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
    <style>
        a:hover {
            color: aqua;
            text-decoration: none;
        }

        a:active {
            color: red;
            text-decoration: none;
        }

        #p1 {
            text-align: center;
            font-size: 25px;
            width: 50%;
            border: 5px;
            border-style: solid;
            margin: auto;
            border-color: chartreuse;
            border-radius: 25px;
            /* background-color:rgba(128, 128, 128, 0.37); */
        }

        #p2 {
            text-align: center;
            font-size: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: chartreuse;
        }

        #p3 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: lime;
        }

        #p4 {
            font-family: Arial, Helvetica, sans-serif;
            color: palegreen;
            text-align: justify;
            cursor: pointer;
        }

        #div1 {
            display: inline-block;
            animation: marquee 10s linear infinite;
        }
    </style>
</head>

<body bgcolor="black">
    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
    <header class="header">
        <!-- leftt box for logo -->
        <!-- <div class="left">
            <img src=""
                alt="">
        </div> -->

        <div class="mid h-nav-resp">
            <br>
            <ul class="navbar v-class-resp">
                <div class="logo">
                    <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300" alt="LOGO">
                </div>
                <li><a href="index.php">Home Page</a></li>
                <li><a href="Action And Arcade.php">Action And Arcade</a></li>
                <li><a href="Page2.php">Adventure</a></li>
                <!-- <li><a href="http://localhost/Login%20page/login.html" target="_blank">Logout</a></li> -->
                <!-- <li><a href="../logout.php">Logout</a></li> -->
                <?php

                if (!isset($_SESSION['username'])) {
                ?>
                    <li><a id="LOGIN_ID_MAIN" href="../login.php">Login</a></li>
                    <!-- <a href="../login.php"> -->
                <?php
                } else {
                ?>
                    <li><a id="LOGIN_ID_MAIN" onclick="CheckStatus()">Logout</a></li>
                <?php
                    if ($_SESSION['id']=="1"){
                        ?>
                        <li><a id="Master_ID" href="SuperUser.php">Admin</a></li>
                    <?php
                    }
                }
                ?>
                <li><a class="active" href="AboutUs.php">About Us</a></li>
                <!-- <li><a href="#">Sports Game</a></li> -->
                <!-- <li><a href="minec.html">About Us</a></li> -->
            </ul>
            <div class="rightNav v-class-resp">
                <div class="Search">
                    <div class="icon">
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Search" id="search">
                    </div>
                    <span class="clear" onclick="document.getElementById('search').value = ''"></span>
                </div>
            </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

        <!-- Section Startes here -->
        <!-- Anand Jaiswar -->
        <div class="card__collection clear-fix">
            <div class="cards cards--two">
                <img src="img/Anand.jpg" class="img-responsive" alt="Cards Image">
                <span class="cards--two__rect"></span>
                <span class="cards--two__tri"></span>
                <p>Anand Jaiswar</p>
                <ul class="cards__list">
                    <a href="https://facebook.com/anand360" target="_blank">
                        <li><i class="fa fa-facebook"></i></li>
                    </a>
                    <a href="https://www.instagram.com/anand_3399/" target="_blank">
                        <li><i class="fa fa-instagram"></i></li>
                    </a>
                    <a href="https://github.com/anand-3399" target="_blank">
                        <li><i class="fa fa-github"></i></li>
                    </a>
                    <a href="https://www.linkedin.com/in/anandjaiswar02/" target="_blank">
                        <li><i class="fa fa-linkedin"></i></li>
                    </a>
                </ul>
            </div>
            
            <!-- Samruddhi Gujar -->
            <div class="cards cards--three">
                <img src="img/Samruddhi.jpg" class="img-responsive" alt="">
                <span class="cards--three__rect-1">
                    <span class="shadow-1"></span>
                    <p>Samruddhi Gujar</p>
                </span>
                <span class="cards--three__rect-2">
                    <span class="shadow-2"></span>
                </span>
                <span class="cards--three__circle"></span>
                <ul class="cards--three__list">
                    <li><i class="fa fa-facebook"></i></li>
                    <a href="https://instagram.com/samruddhi_gujar1411_?utm_medium=copy_link" target="_blank">
                        <li><i class="fa fa-instagram"></i></li>
                    </a>
                    <li><i class="fa fa-linkedin"></i></li>
                </ul>
            </div>

            <!-- Aman Jaiswar -->
            <div class="cards cards--two">
                <img src="img/Aman.png" class="img-responsive" alt="Cards Image">
                <span class="cards--two__rect"></span>
                <span class="cards--two__tri"></span>
                <p>Aman Jaiswar</p>
                <ul class="cards__list">
                    <a href="https://github.com/amanjaiswar28" target="_blank">
                        <li><i class="fa fa-github"></i></li>
                    </a>
                    <li><i class="fa fa-facebook"></i></li>
                    <li><i class="fa fa-instagram"></i></li>
                    <a href="https://www.linkedin.com/in/aman-jaiswar-084ab8222/">
                        <li><i class="fa fa-linkedin"></i></li>
                    </a>
                </ul>
            </div>

            <!-- Rohit Gupta -->
            <div class="cards cards--three">
                <img src="img/Rohit.jpg" class="img-responsive" alt="">
                <span class="cards--three__rect-1">
                    <span class="shadow-1"></span>
                    <p>Rohit Gupta</p>
                </span>
                <span class="cards--three__rect-2">
                    <span class="shadow-2"></span>
                </span>
                <span class="cards--three__circle"></span>
                <ul class="cards--three__list">
                    <a href="https://www.facebook.com/profile.php?id=100031960980694" target="_blank">
                        <li><i class="fa fa-facebook"></i></li>
                    </a>
                    <a href="https://www.instagram.com/_rohit99_/" target="_blank">
                        <li><i class="fa fa-instagram"></i></li>
                    </a>
                    <li><i class="fa fa-linkedin"></i></li>
                </ul>
            </div>
        </div>
    
            <!-- Section Ens here -->

            <br><br>
            <div class="footer-icons">
                <p class="sit">Terms & Conditions | Privacy &copy; 2022<br>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="https://anand-3399.github.io/gaming-webpage/index.html" target="_blank"><i class="fa fa-github"></i></a>

            </div>
            </p>
            <br><br>
    </header>
    <script>
        function CheckStatus() {
            if (confirm("Do you really want to Logout?")) {
                window.location.replace("../logout.php");
            }
        }
    </script>
    <script src="js/resp.js"></script>
    <script src="js/scripting.js"></script>
</body>

</html>