<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$PID=strval($_GET['ID']);
$FlightNum=strval($_GET['FNum']);

$user_insert_query ="INSERT INTO passenger
VALUES ('$PID', '$FlightNum')";

if (mysqli_query($db, $user_insert_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}
?>