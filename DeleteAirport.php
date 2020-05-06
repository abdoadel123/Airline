<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$Airportcode=strval($_GET['Code']);

$user_delete_query = "DELETE FROM airport WHERE Code = '$Airportcode'";

if (mysqli_query($db, $user_delete_query)) {
    echo "ok";
} else {
    echo "No" . mysqli_error($db);
}

?>
