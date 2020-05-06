<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$OldCode = strval($_GET['OCode']);
$Airportcode=strval($_GET['AirCode']);
$AirportCountry=strval($_GET['AirCountry']);
$AirportCity=strval($_GET['AirCity']);

$user_update_query = "UPDATE airport SET Code = '$Airportcode', Country = '$AirportCountry', City = '$AirportCity' WHERE Code = '$OldCode'";


if (mysqli_query($db, $user_update_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}



?>
