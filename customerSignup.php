<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$username=strval($_GET['username']);
$pass=strval($_GET['password']);
$mobile=strval($_GET['mobile']);
$email=strval($_GET['email']);
$address=strval($_GET['address']);
$age=strval($_GET['age']);
$gender=strval($_GET['gender']);
$name=strval($_GET['name']);
$id=strval($_GET['ID']);
$user_insert_query ="INSERT INTO customer (Name,Email,Age,Gender,Address,Mobile,Password,username)
VALUES ('$name', '$email', '$age','$gender','$address','$mobile','$pass','$username')";

// $user_insert_query ="INSERT INTO customer (ID,Name,Email,Age,Gender,Address,Mobile,Password,username)
// VALUES ('123','fasfas','asadas','213','M','ASD','ASDAS','123','201200')";

if (mysqli_query($db, $user_insert_query)) {
    echo "ok";
} else {
    echo "Error: " . mysqli_error($db);
}


//mysql_query("INSERT INTO subscribers (email, referral_id, user_id, ip_address)
//VALUES ('$user_email', '$user_refer', '$user_share', '{$_SERVER['REMOTE_ADDR']}')");
?>
