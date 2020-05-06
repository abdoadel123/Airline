<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$From=strval($_GET['from']);
$To=strval($_GET['to']);
$Flightnum=strval($_GET['Flightnumber']);
$Deptime=strval($_GET['DepTime']);
$Depdate=strval($_GET['DepDate']);
$Arrtime=strval($_GET['ArrTime']);
$Arrdate=strval($_GET['ArrDate']);
$Cost=strval($_GET['cost']);
$AdminID=strval($_GET['Adminid']);

$user_insert_query ="INSERT INTO flight (From_, To_, FlightNum, DepTime, DepDate, ArrTime, ArrDate, Cost, AdminID) 
VALUES ('$From', '$To', '$Flightnum', '$Deptime', '$Depdate', '$Arrtime', '$Arrdate', '$Cost', '$AdminID')";

if (mysqli_query($db, $user_insert_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}

?>

