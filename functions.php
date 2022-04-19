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
        $_SESSION['id'] = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


function hentProdukter($produkt)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stark";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM produkter WHERE ProduktNavn = '$produkt'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

?>
        <table style="width:20%">
            <tr>
                <th> Produkt ID </th>
                <th> Produktnavn </th>
                <th> Lokation </th>
                <th>Book</th>
            </tr>

            <?php

            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td> <?php echo $row["ProduktID"] ?> </td>
                    <td> <?php echo $row["ProduktNavn"] ?> </td>
                    <td> <?php echo $row["Lokation"] ?> </td>
                    <td> <a href="?i=<?php echo $row['ProduktID'] ?>"> Book </a> </td>
                </tr>


            <?php } ?>
        </table>

<?php



    } else {
        echo "0 results";
    }
    $conn->close();
}



function bookingS($brugerID, $produktID, $datoStart, $datoSlut)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stark";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO `ordrer`(`OrdrerID`, `ID`, `ProduktID`, `Dato`, `DatoSlut`) 
    VALUES ('','$brugerID','$produktID','$datoStart','$datoSlut')";

    if ($conn->query($sql) === TRUE) {
        echo "Din booking er blevet oprettet";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}



?>