<?php

session_start();

if (!isset($_SESSION['id'])&& ($_SESSION['id'] !== "1")) {
    echo "You are Logged Out";
?>
    <script>
        location.replace("index.php");
    </script>
<?php
} else {
    // echo "SuperUser";
}


?>
<?php

include '../dbcon.php';
$query1 = "select * from registration";
$query2 = "select * from feedback";
$results1 = mysqli_query($con, $query1);
$results2 = mysqli_query($con, $query2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMING NINJA</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png?compress=1&resize=400x300">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/SuperUser.css">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">


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
            color: aqua;
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
                <!-- <li><a id="LOGIN_ID_MAIN"> -->
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
                    if ($_SESSION['id'] == "1") {
                    ?>
                        <li><a class="active" id="Master_ID" href="SuperUser.php">Admin</a></li>
                <?php
                    }
                    // <?php
                }
                ?>

                </a></li>
                <li><a href="AboutUs.php">About Us</a></li>

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
                WELCOME ADMIN <?php
                                if (isset($_SESSION['username'])) {
                                    echo $_SESSION['username'];
                                }
                                ?>
            </h1>
        </font>


        <h2 id="g">Registration</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rows = mysqli_fetch_assoc($results1)) {
                    ?>
                        <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['username']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['mobile']; ?></td>
                        </tr>
                    <?php
                    }

                    ?>
                <tbody>
            </table>
        </div>

        <h2 id="g">Rate Us</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th class="id_email_mobile_rating">ID</th>
                        <th class="Name-1">Name</th>
                        <th class="id_email_mobile_rating">Email</th>
                        <th class="id_email_mobile_rating">Mobile</th>
                        <th class="date_gender">Date</th>
                        <th class="date_gender">Gender</th>
                        <th class="id_email_mobile_rating">Rating</th>
                        <th class="text">Text</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rows = mysqli_fetch_assoc($results2)) {
                    ?>
                        <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['number']; ?></td>
                            <td><?php echo $rows['date']; ?></td>
                            <td><?php echo $rows['gender']; ?></td>
                            <td><?php echo $rows['rating']; ?></td>
                            <td><?php echo $rows['text']; ?></td>
                        </tr>
                    <?php
                    }

                    ?>
                <tbody>
            </table>
        </div>





        <!-- <h2 id="p2" class="ptr">SOME OF OUR BEST GAMES</h2> -->
        <!-- </section> -->


        <div class="footer-icons">
            <p class="sit">Terms & Conditions | Privacy &copy; 2022<br>

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/anand-3399/gaming-webpage#readme" target="_blank"><i class="fa fa-github"></i></a>

        </div>
        </p>
        <br><br>

        <!-- https://databases-auth.000webhost.com/signon.php?sid=V0pLdEJydktSLzY3UzlmMldJNWs3dEx1Q2t1dWtaR3UrRTJJT3N5Z2F0ODBlcC8yWkFNd1B5b0toYW01WE5RVlIrVWZMVHIyY3FLSUh2U0IzUERHOHc9PQ== -->
        
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