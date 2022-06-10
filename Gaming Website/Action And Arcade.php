<?php
session_start();
/*
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
function start_session($expire = 0) {
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
*/
// start_session(600) will start a session which will expire after 10 minutes (60*10 seconds)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action And Arcade</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon"
        href="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300">
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
            width: 95%;
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
            <img src="" alt="">
        </div> -->

        <div class="mid h-nav-resp">
            <br>
            <ul class="navbar v-class-resp">
                <div class="logo">
                    <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300"
                        alt="LOGO">
                </div>
                <li><a href="index.php">Home Page</a></li>
                <li><a class="active" href="Action And Arcade.php">Action And Arcade</a></li>
                <li><a href="Page2.php">Adventure</a></li>
                <!-- <li><a href="http://localhost/Login%20page/login.html" target="_blank">Logout</a></li> -->
                <!-- <li><a href="../logout.php">Logout</a></li> -->
                <?php
                
                if (!isset($_SESSION['username'])) {
                    ?>
                    <li><a id="LOGIN_ID_MAIN" href="../login.php">Login</a></li>
                    <!-- <a href="../login.php"> -->
                    <?php
                }else{
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
                <li><a href="AboutUs.php">About Us</a></li>

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
        <font color="aqua" align="center">
            <h1>
                WELCOME TO ACTION AND ARCADE GAMES
            </h1>
        </font>
        <marquee scrollamount="18" behavior="alternate" class="name" id="div1">
            &nbsp;&nbsp;<img src="https://pbs.twimg.com/profile_images/1288896608013373445/_x7ttidR_400x400.jpg" alt=""
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/warzone/common/social-share/social-share-zeus-s4-wz.jpg"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img src="https://upl.roob.la/2019/06/control.jpg" alt="" height="150" width="250">
            &nbsp;&nbsp;<img src="https://i.ytimg.com/vi/nyk1xKCVFZo/maxresdefault.jpg" alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://greatloveart.com/wp-content/uploads/2021/12/1080p-Battleground-India-Full-hd-wallpaper.jpg" alt=""
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://compass-ssl.xbox.com/assets/a4/2f/a42ff3fd-cba2-4abb-a15c-4065f76cb525.jpg?n=Mortal-Kombat-11_GLP-Page-Hero-0_1083x609_02.jpg"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img src="https://cdn.2kgames.com/web/wwe.2k.com/images/wwe-2k20/wwe2k20-meta-thumb.jpg" alt=""
                height="150" width="250">
            &nbsp;&nbsp;<img src="https://www.androidpolice.com/wp-content/uploads/2021/07/19/Warframe-Mobile-hero.jpg"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-fXnkJSYzNJf645RhcCaSGAkUSOsJ9PQuGA&usqp=CAU"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQckpOE1zZ10pVnBOzdveGLB_Mnks2uN54z9w&usqp=CAU"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_3V_Z1qx5crKd9I8Nsnp7bC8myKP7e7dQOL2ZY2jdboUs2ed-HGGI5blxHXRBi2l9H5k&usqp=CAU"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img src="https://wallpaperaccess.com/full/1077752.jpg" alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5deSPIVi6oX5xX2QolYoXJH8UIXVdXNA_yNzhk2HYxLFiuY_y8yRldub00xteiOwxDNQ&usqp=CAU"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img src="https://images.hdqwalls.com/wallpapers/4k-assassins-creed-valhalla-ps5-game-g6.jpg"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO3JE_iH_pAV1FShMENSAs8ILDZbxUCf0Ptbd_DPDwFO0CejIQ__at7I1Tp7Y0MDDF2pk&usqp=CAU"
                alt="" height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://cdn.cloudflare.steamstatic.com/steam/apps/242050/capsule_616x353.jpg?t=1616174462" alt=""
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://cdn-ext.fanatical.com/production/product/1280x720/765dcec8-5ae1-4347-a242-a0a591f39035.jpg"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://cdn.cgmagonline.com/wp-content/uploads/2018/02/bayonetta-bayonetta-2-nintendo-switch-review-the-witch-on-switch-3.jpg"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_Bioshock2Remastered_image1600w.jpg"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://www.earlygame.com/uploads/images/_1200x630_crop_center-center_82_none/Bloodborne-Endless-Nocturne-Release-Date-Leaked.jpg?mtime=1625845391"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://blog.playstation.com/tachyon/2020/09/Devil-May-Cry-5-Special-Edition-featured-image.jpg?fit=1024%2C720"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFoqd7GE250tKT7GXZ6G3ReGn0qOtwyT5ohC3Omh4zp9rjNMxbZdjtc_syjceARJt5JIk&usqp=CAU"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/large/public/field/image/2021/05/dying-light-2-hero-lead.jpg"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://cdn.cloudflare.steamstatic.com/steam/apps/220240/capsule_616x353.jpg?t=1602602935"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHeeVv23hpywBhm1txlm-Jp07-FyYpiGKnFg&usqp=CAU"
                height="150" width="250">
            &nbsp;&nbsp;<img
                src="https://m.media-amazon.com/images/M/MV5BZGY5Yjc5ODItYzczMi00MjAyLTlhMTYtMGE4NDlhMTUyN2Y3XkEyXkFqcGdeQXVyNjc3OTE4Nzk@._V1_.jpg"
                height="150" width="250">
            &nbsp;&nbsp;<img src="https://i.ytimg.com/vi/Ttjgr6U0KEI/maxresdefault.jpg" height="150" width="250">

        </marquee>
        <br><br>
        <h2 id="p2" class="ptr">SOME OF OUR BEST GAMES</h2>
        <!-- </section> -->
        <br><br>
        <h2>
            <center>
                <font color="gold">
                    <div style="overflow-x:auto;">
                        <table background="white">
                            <tr id="p3">
                                <th class="btn">
                                    Arcade Wresteling
                                </th>
                                <th class="btn">
                                    Call Of Duty
                                </th>
                                <th class="btn">
                                    &nbsp;&nbsp;Battleground India
                                </th>
                                <th class="btn">
                                    &nbsp;&nbsp;GTA:Vice City
                                </th>
                                <th class="btn">
                                    &nbsp;&nbsp;GTA:San Andreas
                                </th>
                            </tr>
                            <tr>
                                <th class="mit">
                                    <img src="https://pbs.twimg.com/profile_images/1288896608013373445/_x7ttidR_400x400.jpg"
                                        height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/warzone/common/social-share/social-share-zeus-s4-wz.jpg"
                                        height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://greatloveart.com/wp-content/uploads/2021/12/1080p-Battleground-India-Full-hd-wallpaper.jpg"
                                        height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://i.pinimg.com/originals/e5/9c/dd/e59cdd0e3122c4cd0ef7aef91c92729c.jpg"
                                        height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://i.ytimg.com/vi/nyk1xKCVFZo/maxresdefault.jpg" height="100"
                                        width="200">
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    INFORMATION:
                                </td>
                                <td>
                                    INFORMATION:
                                </td>
                                <td>
                                    INFORMATION:
                                </td>
                                <td>
                                    INFORMATION:
                                </td>
                                <td>
                                    INFORMATION:
                                </td>
                            </tr>
                            <tr id="p4">
                                <td>
                                    <details>
                                        <font size="4">
                                            Action Arcade Wrestling brings everything you love from 90's wrestling games
                                            with
                                            its own twist of chaos and fun. Choose from a roster of 30+ outrageous
                                            wrestlers
                                            executing their powerful attacks and superhero-like abilities in the most
                                            over-the-top wrestling game ever conceived.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Call of Duty is a first-person shooter video game franchise published by
                                            Activision.
                                            Starting out in 2003, it first focused on games set in World War II. Over
                                            time,
                                            the
                                            series has seen games set in the midst of the Cold War, futuristic worlds,
                                            and
                                            outer
                                            space.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Battlegrounds Mobile India (in short form BGMI, previously known as PUBG
                                            Mobile
                                            India) is an online multiplayer battle royale game developed and published
                                            by
                                            Krafton. The game is exclusively for the Indian users.The game was released
                                            on 2
                                            July 2021 for Android devices.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Grand Theft Auto: Vice City is a 2002 action-adventure game developed by
                                            Rockstar
                                            North and published by Rockstar Games. It is the fourth main entry in the
                                            Grand
                                            Theft Auto series, following 2001's Grand Theft Auto III. Set in 1986 within
                                            the
                                            fictional Vice City, based on Miami, the single-player story follows mobster
                                            Tommy
                                            Vercetti's rise to power after his release from prison and being caught up
                                            in an
                                            ambushed drug deal.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Grand Theft Auto: San Andreas is a 2004 action-adventure game developed by
                                            Rockstar
                                            North and published by Rockstar Games. It is the seventh game in the Grand
                                            Theft
                                            Auto series, following Grand Theft Auto: Vice City (2002). It was released
                                            in
                                            October 2004 for PlayStation 2, and in June 2005 for Microsoft Windows and
                                            Xbox.
                                        </font>
                                    </details>
                                </td>
                            </tr>
                            <tr class="textDecoration">
                                <td><a target="_blank" href="https://www.bgames.com/game/pro-wrestling-action/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/2620/Call_of_Duty/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="hi55656me.html">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank"
                                        href="https://store.steampowered.com/app/12110/Grand_Theft_Auto_Vice_City/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank"
                                        href="https://store.steampowered.com/app/12120/Grand_Theft_Auto_San_Andreas/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.dm.ssc.wrestling&hl=en_US&gl=US">
                                        <center><img
                                                src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                                                height="50" width="170">
                                    </a>
            </center>
            </td>
            <td>
                <a target="_blank"
                    href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img
                            src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                            height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://bit.ly/BGMI_AppStore">
                    <center><img
                            src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                            height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank"
                    href="https://play.google.com/store/apps/details?id=com.rockstargames.gtavc&hl=en_IN&gl=US">
                    <center><img
                            src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                            height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank"
                    href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img
                            src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                            height="50" width="170">
                </a>
                </center>
            </td>
            </tr>
            </table>
            </div>
            <br><br>
            <div style="overflow-x:auto;">
                <table>
                    <tr id="p3">
                        <td class="btn">
                            &nbsp;&nbsp;&nbsp;&nbsp;WWE2k20
                        </td>
                        <td class="btn">
                            Mortal Kombat 11
                        </td>
                        <td class="btn">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control
                        </td>
                    </tr>
                    <tr>
                        <th class="mit">
                            <img src="https://cdn.2kgames.com/web/wwe.2k.com/images/wwe-2k20/wwe2k20-meta-thumb.jpg"
                                height="100" width="200">
                        </th>
                        <th class="mit">
                            <img src="https://compass-ssl.xbox.com/assets/a4/2f/a42ff3fd-cba2-4abb-a15c-4065f76cb525.jpg?n=Mortal-Kombat-11_GLP-Page-Hero-0_1083x609_02.jpg"
                                height="100" width="200">
                        </th>
                        <th class="mit">
                            <img src="https://upl.roob.la/2019/06/control.jpg" height="100" width="200">
                        </th>
                    </tr>
                    <tr>
                        <td>
                            INFORMATION:
                        </td>
                        <td>
                            INFORMATION:
                        </td>
                        <td>
                            INFORMATION:
                        </td>
                    </tr>
                    <tr id="p4">
                        <td>
                            <details>
                                <font size="4">WWE 2K20 is a professional wrestling video game developed by Visual
                                    Concepts
                                    and
                                    published by 2K Sports. It was released worldwide on October 22, 2019 for Microsoft
                                    Windows,
                                    PlayStation 4, and Xbox One.It is the twenty-first game in the WWE game series and
                                    the
                                    seventh under the WWE 2K banner. The sequel to WWE 2K19, 2K20 is the first game in
                                    the
                                    series to not be developed by Yuke's, which developed every entry in the series
                                    since
                                    its
                                    inception in 2000.</font>
                            </details>
                        </td>
                        <td>
                            <details>
                                <font size="4">Mortal Kombat 11 is a fighting game developed by NetherRealm Studios and
                                    published by Warner Bros. Interactive Entertainment. Running on a heavily modified
                                    version
                                    of Unreal Engine 3, it is the eleventh main installment in the Mortal Kombat series
                                    and
                                    a
                                    sequel to 2015's Mortal Kombat X.</font>
                            </details>
                        </td>
                        <td>
                            <details>
                                <font size="4">Control is a 2019 action-adventure video game developed by Remedy
                                    Entertainment
                                    and published by 505 Games. The game revolves around the Federal Bureau of Control
                                    (FBC), a
                                    secret U.S. government agency tasked with containing and studying phenomena that
                                    violate
                                    the
                                    laws of reality. As Jesse Faden (Courtney Hope), the Bureau's new Director, the
                                    player
                                    explores the Oldest House – the FBC's paranormal headquarters – and utilize powerful
                                    abilities in order to defeat its enemies.</font>
                            </details>
                        </td>
                    </tr>
                    <tr class="textDecoration">
                        <td><a target="_blank" href="https://store.steampowered.com/app/1015500/WWE_2K20/">
                                <!-- <font color="white"> -->
                                Stream Online
                                <!-- </font> -->
                            </a>
                        </td>
                        <td><a target="_blank" href="https://store.steampowered.com/app/976310/Mortal_Kombat11/">
                                <!-- <font color="white"> -->
                                Stream Online
                                <!-- </font> -->
                            </a>
                        </td>
                        <td><a target="_blank"
                                href="https://store.steampowered.com/app/870780/Control_Ultimate_Edition/">
                                <!-- <font color="white"> -->
                                Stream Online
                                <!-- </font> -->
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><a target="_blank"
                                href="https://store.playstation.com/en-in/product/EP1001-CUSA15765_00-WWE2K20MAINSKU02">
                                <center><img
                                        src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                                        height="50" width="170">
                            </a>
                            </center>
                        </td>
                        <td><a target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.wb.goog.mkx&hl=en_IN&gl=US">
                                <center><img
                                        src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                                        height="50" width="170">
                            </a>
                            </center>
                        </td>
                        <td><a target="_blank" href="https://www.freegamesdl.net/control-pc-game-free-download/">
                                <center><img
                                        src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png"
                                        height="50" width="170">
                            </a>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
            </font>
            </center>
        </h2>
        <br><br>
        <h2 id="p1" class="textDecoration">
            <a href="https://kbhgames.com/tag/action" target="_blank">
                &nbsp;Click Here for More Games</a>
        </h2><br><br>
        <h3 align="center" class="exp">
            <a href="https://kbhgames.com/game/combat-5-combat-online" target="_blank">
                <font color="white">
                    Click here to play Combat 5 Online</font>
            </a><br><iframe src="https://kbhgames.com/game/combat-5-combat-online" title="" width="97%" height="500px"
                frameborder="0" name="iframetag"></iframe>
        </h3>
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
<!-- <button type="button">Click Me!!</button> -->