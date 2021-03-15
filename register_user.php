<?php

require 'db.php';

$name =  $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];

$sql = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `dob`) VALUES (NULL, '$name', '$email', '$password', '$dob')";

if (mysqli_query($con, $sql)) {
    echo "<br>Thank you for the registration! Please click here to <a href='login.php'>login</a>.";
} else {
    echo "$con->error <br>An error occured. Please try to register again.";
}


?>