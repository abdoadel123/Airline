<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$AirportCode=strval($_GET['AirCode']);
$AirportCountry=strval($_GET['AirCountry']);
$AirportCity=strval($_GET['AirCity']);

$user_insert_query ="INSERT INTO airport (Code,Country,City)
VALUES ('$AirportCode','$AirportCountry', '$AirportCity')";


if (mysqli_query($db, $user_insert_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}



?>
