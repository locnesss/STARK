<?php

function opretBruger($navn, $telefon, $email, $kort)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stark";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO `kunder`(`Navn`, `Telefon`, `Email`, `Kortnummer`) 
            VALUES ('$navn','$telefon','$email','$kort')";

    if ($conn->query($sql) === TRUE) {
        echo "Din profil er blevet oprettet";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
