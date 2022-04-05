<?php

include "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret bruger</title>
</head>
<body>

<?php

if (!isset($_POST['opret'])) {
        ?>


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
        opretBruger($_POST['navn'],$_POST['nummer'],$_POST['email'],$_POST['kort']);
    }
    

    ?>

</body>
</html>