<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$Aircode=strval($_GET['LineCode']);
$Airname=strval($_GET['LineName']);

$user_insert_query ="INSERT INTO airline (AirLineCode, AirLineName) VALUES ('$Aircode','$Airname')";


if (mysqli_query($db, $user_insert_query)) {
    echo "ok";
} else {
    echo "No";
}



?>
