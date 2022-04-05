<?php
include "mysql.php";

$conn;

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
 
<img src="starkbilleder/startsid.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="Login side" title="Login side" href="./login.php" coords="127,339,259,543" shape="rect">
</map>


</body>
</html>

<?php

/*
$sql = "INSERT INTO customer (Name, Adress, Phone, Credit)
VALUES ('Soren Hej', 'Nyborgvej', '42805676','123456')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

*/


?>