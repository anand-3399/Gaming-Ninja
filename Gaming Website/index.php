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

        #g {
            text-align: center;
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
                <li><a class="active" href="#">Home Page</a></li>
                <li><a href="Action And Arcade.php">Action And Arcade</a></li>
                <li><a href="Page2.php">Adventure</a></li>
                <!-- <li><a id="LOGIN_ID_MAIN"> -->
                <?php

                if (!isset($_SESSION['username'])) {
                ?>
                    <li><a id="LOGIN_ID_MAIN" href="../login.php">Login</a></li>
                    <!-- <a href="../login.php"> -->
                <?php
                } else {
                ?>
                    <!-- <li><a id="LOGIN_ID_MAIN" href="../logout.php"> -->

                    <li><a id="LOGIN_ID_MAIN" onclick="CheckStatus()">Logout</a></li>
                    <?php
                    if (isset($_SESSION['id']) && $_SESSION['id'] == "1") {
                    ?>
                        <li><a id="Master_ID" href="SuperUser.php">Admin</a></li>
                <?php
                    }
                    // <?php
                }
                ?>

                </a></li>
                <li><a href="AboutUs.php">About Us</a></li>
                <!-- <li><a href="#">Sports Game</a></li> -->
                <!-- <li><a href="minec.html">About Us</a></li> -->
            </ul>
            <!-- <div class="rightNav v-class-resp">
                <input type="text" name="search" id="search">
                <button class="btnnavbar btn-sn">Search</button>
            </div> -->
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
        <font color="aqua" align="center">
            <h1>
                WELCOME TO THE GAMING NINJA <?php
                                            if (isset($_SESSION['username'])) {
                                                echo $_SESSION['username'];
                                            }
                                            ?>
            </h1>
        </font>


        <!-- <h2 id="p2" class="ptr">SOME OF OUR BEST GAMES</h2> -->
        <!-- </section> -->

        <center>
            <!-- <hr> -->
            <div class="thumbnail">
                <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300">
            </div>


            <h3>
                <font face="comic sans ms" color="aqua">Download the best PC Adventure, Sports, Brain, Action and Arcade
                    games from our website at great discounts.
            </h3>
            <h3> Use referral codes for extra discounts upto 20% on trending games.</h3>
            </font>
        </center>

        <div class="center">
            <!-- 1st sub section -->
            <div class="property-card">

                <div class="property-image">
                    <img src="https://digitalspyuk.cdnds.net/13/27/gaming-gta5-art-1.jpg" width="300" height="180">
                    <div class="property-image-title">
                        <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                    </div>
                </div>

                <div class="property-description">
                    <p class="h5"> GTA V </p>
                    <p style="font-size: 12px;">Vice City is a 2002 action-adventure game. It is the fourth main entry
                        in the Grand Theft Auto series</p>
                </div>
                <a href="#">
                    <div class="property-social-icons">
                        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                    </div>
                </a>
            </div>
            <!-- 2nd sub section  -->
            <div class="property-card">

                <div class="property-image">
                    <img src="https://www.dexerto.com/wp-content/uploads/2021/12/07/Assassins-Creed-Infinity-2022-Release-date-setting-free-to-play-platforms-more-FEATURED.jpg" width="300" height="180">
                    <div class="property-image-title">
                        <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                    </div>
                </div>

                <div class="property-description">
                    <p class="h5"> Assassin's Creed </p>
                    <p style="font-size: 12px;">Assassin's Creed IV: Black Flag is an action-adventure video game. It is
                        the sixth major installment in the Assassin's Creed series.</p>
                </div>
                <a href="#">
                    <div class="property-social-icons">
                        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                    </div>
                </a>
            </div>
            <!-- 3rd sub section  -->
            <div class="property-card">

                <div class="property-image">
                    <img src="https://www.pockettactics.com/wp-content/uploads/2021/04/best-roblox-games.jpg" width="300" height="180">
                    <div class="property-image-title">
                        <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                    </div>
                </div>

                <div class="property-description">
                    <p class="h5"> Roblox </p>
                    <p style="font-size: 12px;">Roblox is a global platform where people gather together every day to
                        create experiences with each other in user-generated 3D worlds.</p>
                </div>
                <a href="#">
                    <div class="property-social-icons">
                    </div>
                </a>
            </div>
        </div>

        <marquee scrollamount="10" behavior="alternate">
            <table cellspacing="20" class="marquee">
                <tr>
                    <td><img src="https://cdn-ext.fanatical.com/production/product/1280x720/765dcec8-5ae1-4347-a242-a0a591f39035.jpg" width="300" height="180"></td>
                    <td><img src="https://cdn.cgmagonline.com/wp-content/uploads/2018/02/bayonetta-bayonetta-2-nintendo-switch-review-the-witch-on-switch-3.jpg" width="300" height="180"></td>
                    <td><img src="https://static.onecms.io/wp-content/uploads/sites/6/2019/04/minecraft-2000.jpg" width="300" height="180"></td>
                    <td><img src="https://i.ytimg.com/vi/Ttjgr6U0KEI/maxresdefault.jpg" width="350" height="180"></td>
                    <td><img src="https://play-lh.googleusercontent.com/S22LEJaRBsc_M9hn9CrGHVm3gzPsW4q9vjEb-gC-QNAxu5EWf4LcBZRm-FRoGXGlRQ" width="350" height="180"></td>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfssjU4NCw4tz7RQ9tHttW6DwNoZcxtM9V1A&usqp=CAU" width="300" height="180"></td>
                    <td><img src="https://www.gamerroof.com/wp-content/uploads/2019/05/wwe-2k19.jpg" width="300" height="180"></td>
                    <td><img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-21/next-level/common/see-next-level/f21-game-cam-xl.png.adapt.320w.png" width="350" height="180"></td>
                </tr>
                <tr>
                    <td>
                        <h2 id="g">Batman: Arkham Asylum</h2>
                    </td>
                    <td>
                        <h2 id="g">Bayonetta 2</h2>
                    </td>
                    <td>
                        <h2 id="g">Minecraft</h2>
                    </td>
                    <td>
                        <h2 id="g">Marvel Spider-Man(2018)</h2>
                    </td>
                    <td>
                        <h2 id="g">Free Chess</h2>
                    </td>
                    <td>
                        <h2 id="g">Sudoku Free</h2>
                    </td>
                    <td>
                        <h2 id="g">WWE 2K19</h2>
                    </td>
                    <td>
                        <h2 id="g">FIFA 21</h2>
                    </td>
                </tr>
            </table>
        </marquee>
        <h2 id="p1" class="textDecoration">
            <a href="../RateUs/Rate.html">Rate Us</a>
        </h2>
        <br><br>
        <div class="footer-icons">
            <p class="sit">Terms & Conditions | Privacy &copy; 2022<br>

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/anand-3399/gaming-webpage#readme" target="_blank"><i class="fa fa-github"></i></a>

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
<!-- <button type="button">Click Me!!</button> -->