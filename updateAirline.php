<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$OldCode = strval($_GET['Ocode']);
$Airlinecode=strval($_GET['LineCode']);
$Airlinename=strval($_GET['LineName']);

$user_update_query = "UPDATE airline SET AirLineCode = '$Airlinecode', AirLineName = '$Airlinename' WHERE AirLineCode = '$OldCode'";


if (mysqli_query($db, $user_update_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}



?>
