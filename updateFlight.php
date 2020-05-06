<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$OldNum=strval($_GET['ONum']);
$From=strval($_GET['from']);
$To=strval($_GET['to']);
$Flightnum=strval($_GET['Flightnumber']);
$Deptime=strval($_GET['DepTime']);
$Depdate=strval($_GET['DepDate']);
$Arrtime=strval($_GET['ArrTime']);
$Arrdate=strval($_GET['ArrDate']);
$Cost=strval($_GET['cost']);
$AdminID=strval($_GET['Adminid']);

$user_update_query = "UPDATE flight SET From_ = '$From', To_ = '$To', FlightNum = '$Flightnum', DepTime = '$Deptime', DepDate = '$Depdate', ArrTime = '$Arrtime', ArrDate = '$Arrdate', Cost = '$Cost', AdminID = '$AdminID' 
WHERE FlightNum = '$OldNum'";


if (mysqli_query($db, $user_update_query)) {
    echo ("ok");
} else {
    echo ("No" . mysqli_error($db));
}



?>

