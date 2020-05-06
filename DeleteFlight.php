<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$FlightNum=strval($_GET['Num']);

$user_delete_query = "DELETE FROM flight WHERE FlightNum = '$FlightNum'";

if (mysqli_query($db, $user_delete_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}

?>
