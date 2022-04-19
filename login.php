<?php
include "./functions.php";

session_start()

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (!isset($_GET['i'])) { ?>

        <img src="./starkbilleder/login.png" usemap="#image-map">

        <map name="image-map">
           <!-- <area target="" alt="login" title="login" href="kategorier.php" coords="109,502,264,542" shape="rect"> -->
            <area target="" alt="opret bruger" title="opret bruger" href="?i=1" coords="60,577,323,625" shape="rect">
        </map>

    <?php
    } elseif ($_GET['i'] = 1) {
    ?>

    <img src="./starkbilleder/opret.png" align="right" height="20%">


        <form action="" method="post">
            <label for="navn">Navn: </label>
            <input type="text" name="navn">
            <br>
            <label for="nummer">Telefon nummer: </label>
            <input type="text" name="nummer">
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email">
            <br>
            <label for="kort">Kort nummer: </label>
            <input type="text" name="kort">
            <button type="submit" name="opret"> Opret </button>


        </form>

    <?php
    }

    if (isset($_POST['opret'])) {
        opretBruger($_POST['navn'], $_POST['nummer'], $_POST['email'], $_POST['kort']);
        header("Location:./kategorier.php");
    }


    ?>


</body>

</html>