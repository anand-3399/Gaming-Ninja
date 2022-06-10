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
    <title>Adventure Games</title>
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
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: lime;
        }

        #p2 {
            font-family: Arial, Helvetica, sans-serif;
            color: palegreen;
            cursor: pointer;
            text-align: justify;
        }

        #div1 {
            display: inline-block;
            animation: marquee 10s linear infinite;
        }

        #p23 {
            font-family: Arial, Helvetica, sans-serif;
            color: palegreen;
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>

<body bgcolor="black">
    <header class="header">
        <div class="mid h-nav-resp">
            <br>
            <ul class="navbar v-class-resp">
                <div class="logo">
                    <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300" alt="LOGO">
                </div>
                <li><a href="index.php">Home Page</a></li>
                <li><a href="Action And Arcade.php">Action And Arcade</a></li>
                <li><a class="active" href="Page2.php">Adventure</a></li>
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
                <li><a href="AboutUs.php">About Us</a></li>
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
        <!-- leftt box for logo -->
        <font color="aqua" align="center">
            <h1>
                WELCOME TO ADVENTURE GAMES
            </h1>
        </font>

        <h2 id="p23" class="ptr">SOME OF OUR BEST ADVENTURE GAMES</h2><br><br>
        <h2>
            <center>
                <font color="gold">
                    <div style="overflow-x:auto;">
                        <table>
                            <tr id="p1">
                                <th class="btn">
                                    Assassin’s Creed IV
                                </th>
                                <th class="btn">
                                    Batman: Arkham Asylum
                                </th>
                                <th class="btn">
                                    Bayonetta 2
                                </th>
                                <th class="btn">
                                    BioShock
                                </th>
                                <th class="btn">
                                    Bloodborne
                                </th>
                            </tr>
                            <tr>
                                <th class="mit">
                                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/242050/capsule_616x353.jpg?t=1616174462" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn-ext.fanatical.com/production/product/1280x720/765dcec8-5ae1-4347-a242-a0a591f39035.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn.cgmagonline.com/wp-content/uploads/2018/02/bayonetta-bayonetta-2-nintendo-switch-review-the-witch-on-switch-3.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_Bioshock2Remastered_image1600w.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://www.earlygame.com/uploads/images/_1200x630_crop_center-center_82_none/Bloodborne-Endless-Nocturne-Release-Date-Leaked.jpg?mtime=1625845391" height="100" width="200">
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
                            <tr id="p2">
                                <td>
                                    <details>
                                        <font size="4">
                                            Assassin's Creed IV: Black Flag is an action-adventure video game developed
                                            by
                                            Ubisoft Montreal and published by Ubisoft. It is the sixth major installment
                                            in the Assassin's Creed series. Its historical timeframe precedes that of
                                            Assassin's Creed III (2012), though its modern-day sequences succeed III's
                                            own.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Batman: Arkham Asylum is a 2009 action-adventure game developed by
                                            Rocksteady
                                            Studios and published by Eidos Interactive in conjunction with Warner Bros.
                                            Interactive Entertainment. Based on the DC Comics superhero Batman and
                                            written
                                            by
                                            veteran Batman writer Paul Dini, Arkham Asylum was inspired by the
                                            long-running
                                            comic book mythos.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Bayonetta 2[a] is a 2014 action-adventure hack and slash video game
                                            developed by
                                            PlatinumGames and published by Nintendo for Wii U[6] and Nintendo Switch.
                                            It is the sequel to the 2009 game Bayonetta, and was directed by Yusuke
                                            Hashimoto
                                            and produced by Atsushi Inaba and Hitoshi Yamagami, under supervision by
                                            series
                                            creator Hideki Kamiya.
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
                                <td><a target="_blank" href="https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href=https://store.steampowered.com/app/35140/Batman_Arkham_Asylum_Game_of_the_Year_Edition/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/460790/Bayonetta/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12110/Grand_Theft_Auto_Vice_City/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12120/Grand_Theft_Auto_San_Andreas/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <a target="_blank" href="https://www.microsoft.com/en-in/p/assassins-creed-iv-black-flag/brkmhzx1rcf2">
                                        <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                                    </a>
            </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://www.microsoft.com/en-us/p/batman-return-to-arkham-arkham-asylum/bsj3twd7r47v">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://theamusetech.com/2021/03/16/bayonetta-2-android-ios-mobile-version-game-free-download/">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            </tr>
            </table>
            </div>
            <!--Newwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww-->

            <br><br>
            <center>
                <font color="gold">
                    <div style="overflow-x:auto;">
                        <table background="white">
                            <tr id="p1">
                                <th class="btn">
                                    Devil May Cry 5
                                </th>
                                <th class="btn">
                                    Doom (2017)
                                </th>
                                <th class="btn">
                                    Dying Light 2
                                </th>
                                <th class="btn">
                                    Far Cry 3
                                </th>
                                <th class="btn">
                                    God of War (2018)
                                </th>
                            </tr>
                            <tr>
                                <th class="mit">
                                    <img src="https://blog.playstation.com/tachyon/2020/09/Devil-May-Cry-5-Special-Edition-featured-image.jpg?fit=1024%2C720" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFoqd7GE250tKT7GXZ6G3ReGn0qOtwyT5ohC3Omh4zp9rjNMxbZdjtc_syjceARJt5JIk&usqp=CAU" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/large/public/field/image/2021/05/dying-light-2-hero-lead.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/220240/capsule_616x353.jpg?t=1602602935" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHeeVv23hpywBhm1txlm-Jp07-FyYpiGKnFg&usqp=CAU" height="100" width="200">
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
                            <tr id="p2">
                                <td>
                                    <details>
                                        <font size="4">
                                            Devil May Cry 5[a] is a 2019 action-adventure game developed and
                                            published by Capcom. It is the sixth installment overall and the fifth
                                            mainline installment in the Devil May Cry series. Capcom released it for
                                            Microsoft Windows, PlayStation 4, and Xbox One on 8 March 2019.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Doom is a 2016 first-person shooter game developed by id Software and
                                            published by Bethesda Softworks. It is the first major installment in the
                                            series since Doom 3 (2004).
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Dying Light 2 Stay Human is an open world first-person zombie apocalyptic-
                                            themed action role-playing game. Set 20 years after Dying Light, starring a
                                            new protagonist named Aiden Caldwell (voiced by Jonah Scott), who is
                                            equipped
                                            with various parkour skills.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Far Cry 3 is a 2012 first-person shooter developed by Ubisoft Montreal
                                            and published by Ubisoft. It is the third main installment in the Far
                                            Cry series. The game takes place on the fictional Rook Islands, a tropical
                                            archipelago which can be freely explored by players. Gameplay focuses on
                                            combat and exploration.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            God of War[a] is an action-adventure game developed by Santa Monica Studio
                                            and published by Sony Interactive Entertainment (SIE). Released worldwide
                                            on April 20, 2018, for the PlayStation 4 (PS4), it is the eighth installment
                                            in the God of War series, the eighth chronologically, and the sequel to
                                            2010's
                                            God of War III.
                                        </font>
                                    </details>
                                </td>
                            </tr>
                            <tr class="textDecoration">
                                <td><a target="_blank" href="https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href=https://store.steampowered.com/app/35140/Batman_Arkham_Asylum_Game_of_the_Year_Edition/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/460790/Bayonetta/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12110/Grand_Theft_Auto_Vice_City/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12120/Grand_Theft_Auto_San_Andreas/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <a target="_blank" href="https://www.microsoft.com/en-in/p/assassins-creed-iv-black-flag/brkmhzx1rcf2">
                                        <center>
                                            <img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                                    </a>
            </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://www.microsoft.com/en-us/p/batman-return-to-arkham-arkham-asylum/bsj3twd7r47v">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://theamusetech.com/2021/03/16/bayonetta-2-android-ios-mobile-version-game-free-download/">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            </tr>
            </table>
            </div>

            <!---Newwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww-->
            <br><br>
            <center>
                <font color="gold">
                    <div style="overflow-x:auto;">
                        <table background="white">
                            <tr id="p1">
                                <th class="btn">
                                    Lego Star Wars
                                </th>
                                <th class="btn">
                                    Marvel Spider-Man(2018)
                                </th>
                                <th class="btn">
                                    Max Payne
                                </th>
                                <th class="btn">
                                    Metal Gear Solid
                                </th>
                                <th class="btn">
                                    Metal Slug
                                </th>
                            </tr>
                            <tr>
                                <th class="mit">
                                    <img src="https://m.media-amazon.com/images/M/MV5BZGY5Yjc5ODItYzczMi00MjAyLTlhMTYtMGE4NDlhMTUyN2Y3XkEyXkFqcGdeQXVyNjc3OTE4Nzk@._V1_.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://i.ytimg.com/vi/Ttjgr6U0KEI/maxresdefault.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJlZzvMgv7C0c7BDhVW9A18GbUEEiPN_4gMfioPCoxCTUesBO7pFSwpHGWc_kC9TGmbw0&usqp=CAU" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://images.indianexpress.com/2015/09/mgsvv.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/1590760/capsule_616x353.jpg?t=1623764109" height="100" width="200">
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
                            <tr id="p2">
                                <td>
                                    <details>
                                        <font size="4">
                                            Lego Star Wars: The Complete Saga is a Lego-themed action-adventure
                                            video game based on the Lego Star Wars line of toys. It is a combination of
                                            the game Lego Star Wars: The Video Game and its sequel Lego Star Wars II: The
                                            Original
                                            Trilogy, which spans the first six episodes of the Star Wars saga.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Marvel's Spider-Man[a] is a 2018 action-adventure game developed by Insomniac
                                            Games
                                            and published by Sony Interactive Entertainment. Based on the Marvel Comics
                                            superhero
                                            Spider-Man, it is inspired by the long-running comic book lore series
                                            adaptations
                                            in other media.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Max Payne is a neo-noir third-person shooter video game series developed
                                            by Remedy Entertainment (Max Payne and Max Payne 2) and Rockstar Studios
                                            (Max Payne 3). The series is named after its protagonist, Max Payne, a New York
                                            City police detective turned vigilante after his family was murdered by drug
                                            dealers.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Metal Gear is a series of action-adventure
                                            video games created by Hideo Kojima and developed and published by Konami.
                                            The first game, Metal Gear, was released in 1987 for MSX home computers.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Metal Slug is a Japanese
                                            run and gun video game series originally created by Nazca Corporation before
                                            merging with SNK in 1996 after the completion of the first game in the series.
                                            Spin-off games include a third-person shooter to commemorate the 10th
                                            anniversary
                                            of the series and a tower defense game for the mobile platform.
                                        </font>
                                    </details>
                                </td>
                            </tr>
                            <tr class="textDecoration">
                                <td><a target="_blank" href="https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href=https://store.steampowered.com/app/35140/Batman_Arkham_Asylum_Game_of_the_Year_Edition/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/460790/Bayonetta/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12110/Grand_Theft_Auto_Vice_City/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12120/Grand_Theft_Auto_San_Andreas/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <a target="_blank" href="https://www.microsoft.com/en-in/p/assassins-creed-iv-black-flag/brkmhzx1rcf2">
                                        <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                                    </a>
            </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://www.microsoft.com/en-us/p/batman-return-to-arkham-arkham-asylum/bsj3twd7r47v">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://theamusetech.com/2021/03/16/bayonetta-2-android-ios-mobile-version-game-free-download/">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            </tr>
            </table>
            </div>
            <br><br>
            <!---Newwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww-->

            <center>
                <font color="gold">
                    <div style="overflow-x:auto;">
                        <table background="white">
                            <tr id="p1">
                                <th class="btn">
                                    Middle-Earth:<br> Shadow of War
                                </th>
                                <th class="btn">
                                    Monster Hunter World
                                </th>
                                <th class="btn">
                                    Resident Evil 2
                                </th>
                                <th class="btn">
                                    Resident Evil 4
                                </th>
                                <th class="btn">
                                    Saints Row The Third
                                </th>
                            </tr>
                            <tr>
                                <th class="mit">
                                    <img src="https://i.gadgets360cdn.com/large/shadow_of_war_cover_1507206622770.jpg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/582010/header.jpg?t=1623978557" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://fanatical.imgix.net/product/original/6623a6b1-5f22-4f59-ac72-e251761a2ddb.jpeg?auto=compress,format&w=400&fit=max" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://miro.medium.com/max/1400/1*xgwp7eWzWCigjMz9jLtAgA.jpeg" height="100" width="200">
                                </th>
                                <th class="mit">
                                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/978300/capsule_616x353.jpg?t=1621636724" height="100" width="200">
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
                            <tr id="p2">
                                <td>
                                    <details>
                                        <font size="4">
                                            Middle-earth: Shadow of War is an action role-playing video game developed
                                            by Monolith Productions and published by Warner Bros. Interactive Entertainment.
                                            It is the sequel to 2014's Middle-earth: Shadow of Mordor, and was released
                                            worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October
                                            10, 2017.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Monster Hunter: World[a] is an action role-playing game developed and published
                                            by
                                            Capcom and the fifth mainline installment in the Monster Hunter series. It was
                                            released
                                            worldwide for PlayStation 4 and Xbox One in January 2018, with a Microsoft
                                            Windows
                                            version following in August 2018.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Resident Evil 2[b] is a 1998 survival horror video game developed and published
                                            by Capcom for the PlayStation. The player controls Leon S. Kennedy and Claire
                                            Redfield, who must escape Raccoon City after its citizens are transformed
                                            into zombies by a biological weapon two months after the events of the
                                            original Resident Evil.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Resident Evil 4[a] is a survival horror third-person shooter video game
                                            developed by Capcom Production Studio 4[1] and published by Capcom. A major
                                            installment in the Resident Evil series, it was originally released for the
                                            GameCube in 2005. Players control U.S. government special agent Leon S. Kennedy
                                            who is sent on a mission to rescue the U.S. president's daughter Ashley Graham,
                                            who has been kidnapped by a cult.
                                        </font>
                                    </details>
                                </td>
                                <td>
                                    <details>
                                        <font size="4">
                                            Saints Row: The Third is a 2011 action-adventure game developed by Volition
                                            and published by THQ. It is the sequel to 2008's Saints Row 2 and the third
                                            installment in the Saints Row series. It was released on November 15, 2011
                                            for Microsoft Windows, PlayStation 3, and Xbox 360, and May 10, 2019 for
                                            the Nintendo Switch.
                                        </font>
                                    </details>
                                </td>
                            </tr>
                            <tr class="textDecoration">
                                <td><a target="_blank" href="https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href=https://store.steampowered.com/app/35140/Batman_Arkham_Asylum_Game_of_the_Year_Edition/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/460790/Bayonetta/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12110/Grand_Theft_Auto_Vice_City/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                                <td><a target="_blank" href="https://store.steampowered.com/app/12120/Grand_Theft_Auto_San_Andreas/">
                                        <!-- <font color="white"> -->
                                        Stream Online
                                        <!-- </font> -->
                                    </a>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <a target="_blank" href="https://www.microsoft.com/en-in/p/assassins-creed-iv-black-flag/brkmhzx1rcf2">
                                        <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                                    </a>
            </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://www.microsoft.com/en-us/p/batman-return-to-arkham-arkham-asylum/bsj3twd7r47v">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://theamusetech.com/2021/03/16/bayonetta-2-android-ios-mobile-version-game-free-download/">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            <td>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN&gl=US">
                    <center><img src="https://www.seekpng.com/png/full/60-604664_com-wp-1-picsart-background-cb-editing.png" height="50" width="170">
                </a>
                </center>
            </td>
            </tr>
            </table>
            </div>
        </h2>
        <br><br><br><br>
        <div class="footer-icons">
            <p class="sit">Terms & Conditions | Privacy &copy; 2022<br>

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://anand-3399.github.io/gaming-webpage/index.html"  target="_blank"><i class="fa fa-github"></i></a>

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