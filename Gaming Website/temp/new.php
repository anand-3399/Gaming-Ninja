<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700");

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            padding: 24px;
            font-family: "Source Sans Pro", sans-serif;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        .container {
            max-width: 1000px;
            margin-right: auto;
            margin-left: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .table {
            width: 100%;
            border: 1px solid #EEEEEE;
        }

        .table-header {
            display: flex;
            width: 100%;
            background: #000;
            padding: 18px 0;
        }

        .table-row {
            display: flex;
            width: 100%;
            padding: 18px 0;
        }

        .table-row:nth-of-type(odd) {
            background: #EEEEEE;
        }

        .table-data,
        .header__item {
            flex: 1 1 20%;
            text-align: center;
        }

        .header__item {
            text-transform: uppercase;
        }

        .filter__link {
            color: white;
            text-decoration: none;
            position: relative;
            display: inline-block;
            padding-left: 24px;
            padding-right: 24px;
        }

        .filter__link::after {
            content: "";
            position: absolute;
            right: -18px;
            color: white;
            font-size: 12px;
            top: 50%;
            transform: translateY(-50%);
        }

        .filter__link.desc::after {
            content: "(desc)";
        }

        .filter__link.asc::after {
            content: "(asc)";
        }
    </style>
</head>

<body>
    <div class="table-content">
        <?php

        while ($rows = mysqli_fetch_assoc($results1)) {
        ?>
            <div class="table-row">
                <div class="table-data"><?php echo $rows['id']; ?></div>
                <div class="table-data"><?php echo $rows['username']; ?></div>
                <div class="table-data"><?php echo $rows['email']; ?></div>
                <div class="table-data"><?php echo $rows['mobile']; ?></div>
            </div>
        <?php
        }

        ?>
    </div>

    <div class="container" style="overflow-x:auto;">
            <div class="table" style="color: white;">
                <div class="table-header">
                    <div class="header__item"><a class="filter__link">ID</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Name</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Email</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Mobile</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Date</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Gender</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Rating</a></div>
                    <div class="header__item"><a class="filter__link filter__link--number">Text</a></div>

                </div>
                <div class="table-content">
                    <?php

                    while ($rows = mysqli_fetch_assoc($results2)) {
                    ?>
                        <div class="table-row">
                            <div class="table-data"> <?php echo $rows['id']; ?> </div>
                            <div class="table-data"><?php echo $rows['name']; ?> </div>
                            <div class="table-data"><?php echo $rows['email']; ?> </div>
                            <div class="table-data"><?php echo $rows['number']; ?> </div>
                            <div class="table-data"><?php echo $rows['date']; ?> </div>
                            <div class="table-data"><?php echo $rows['gender']; ?> </div>
                            <div class="table-data"><?php echo $rows['rating']; ?> </div>
                            <div class="table-data"><?php echo $rows['text']; ?> </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
</body>

</html>