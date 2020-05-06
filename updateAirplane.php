<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$Oldreg = strval($_GET['oldRegNum']);
$regNum=strval($_GET['regNum']);
$AirlineCode=strval($_GET['Airlinecode']);
$Planeseats=strval($_GET['Seat']);

$user_update_query = "UPDATE airplane SET RegNum = '$regNum', AirLineCode = '$AirlineCode',Seats= '$Planeseats' WHERE RegNum = '$Oldreg'";


if (mysqli_query($db, $user_update_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}

?>
