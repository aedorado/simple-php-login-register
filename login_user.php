<?php

require 'db.php';

$password =  $_POST['password'];
$email = $_POST['email'];

echo $name;

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$res = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($res);

if ($num_rows == 1) {   //login success
    $row = $res -> fetch_assoc();
    session_start();
    $_SESSION['user_logged_in'] = true;
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];
    header('Location: index.php');
} else {    //login fail
    session_start();
    $_SESSION['user_logged_in'] = false;
    header('Location: login.php?fail=true');
}

// if () {
//     echo "<br>Thank you for the registration! Please click here to <a href='login.php'>login</a>.";
// } else {
//     echo "$con->error <br>An error occured. Please try to register again.";
// }

?>