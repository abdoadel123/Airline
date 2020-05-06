<?php
$username=strval($_GET['username']); // key ,value aaray mn ket value 
$pass=strval($_GET['password']);
// echo $username;
// $username="20120";
// $pass="12345";
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$user_check_query = "SELECT * FROM admin WHERE ID='+$username'";

$result = mysqli_query($db, $user_check_query); // excute ll quary
$user = mysqli_fetch_assoc($result); // byra3g al result f array 
if ($user) { // if user exists
  if ($user['Password'] === $pass) {
  echo "Exist";
}
else
echo "password Wrong";
}
else {
  echo "user not Exist";
}
?>
