<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    session_start();



    if (!isset($_GET['i'])) {


    ?>


        <!-- Image Map Generated by http://www.image-map.net/ -->
        <img src="./starkbilleder/havemaskin.png" usemap="#image-map">

        <map name="image-map">
            <area target="" alt="jordbord" title="jordbord" href="?i=0" coords="192,160,363,369" shape="rect">
        </map>

        <?php }

    if (isset($_GET['i'])) {
       // $ii = $_GET['i'];

        switch ($_GET['i']) {
            case 0:
        ?>
                <!-- Image Map Generated by http://www.image-map.net/ -->
                <img src="./starkbilleder/jordbord.png" usemap="#image-map">

                <map name="image-map">
                    <area target="" alt="" title="" href="?i=1" coords="145,403,227,473" shape="rect">
                </map>


    <?php
                break;

            case 1:
                $_SESSION['prod'] = "Jordbor";
                header("Location:./booking.php");
                echo $_SESSION['prod'];
                break;
        }
    }

    echo $_GET['i'];






    ?>


</body>

</html>