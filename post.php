<?php

require 'db.php';

session_start();

$user_id = $_SESSION['user_id'];
$content = $_GET['status'];

$sql = "INSERT INTO `posts` (`id`, `user_id`, `content`) VALUES (NULL, '$user_id', '$content')";

if (mysqli_query($con, $sql)) {
    echo "Post successful!";
} else {
    echo "Could not make post";
}


?>