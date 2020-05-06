<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$regNum=strval($_GET['reguNum']);

$user_delete_query = "DELETE FROM airplane WHERE RegNum = '$regNum'";

if (mysqli_query($db, $user_delete_query)) {
    echo "ok";
} else {
    echo "No";
}

?>
