<?php

session_start();
include "./functions.php";

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
    <img src="./starkbilleder/jordbor.png" align="right" height="30%">

    <form action="" method="post">
        <label for="booking">Vælg dine datoer:</label>
        <input type="date" id="booking" name="booking">
        <input type="date" id="slut" name="slut">
        <input type="submit" name="datoer" value="vælg datoer">


    </form>

    <?php


    if (isset($_POST['datoer'])) {

        $_SESSION['start'] = $_POST['booking'];
        $_SESSION['slut'] = $_POST['slut'];

        hentProdukter($_SESSION['prod']);
    }

    if (isset($_GET['i'])) {
        bookingS($_SESSION['id'], $_GET['i'], $_SESSION['start'], $_SESSION['slut']);
        header("Location:./confirmation.php");
    }

    ?>


</body>

</html>