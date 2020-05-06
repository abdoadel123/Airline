<?php
$username=strval($_GET['username']);
$pass=strval($_GET['password']);

$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
$user_check_query = "SELECT * FROM customer";
$flage="false";
$result = mysqli_query($db, $user_check_query);
while($user=mysqli_fetch_assoc($result)) {
    if($user['username']==$username){
        $flage="true";
        if ($user['Password'] == $pass) {
          echo "Exist";
        }
        else
        echo "password Wrong";
        }
  
      }
      if ($flage=="false")
      echo "user not Exist";
?>
