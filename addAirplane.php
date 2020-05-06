<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$ReguNum=strval($_GET['regNum']);
$AirlineCode=strval($_GET['Airlinecode']);
$seats=strval($_GET['Seat']);

$user_insert_query ="INSERT INTO airplane (RegNum, AirLineCode, Seats) VALUES ('$ReguNum','$AirlineCode', '$seats')";


if (mysqli_query($db, $user_insert_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}

?>