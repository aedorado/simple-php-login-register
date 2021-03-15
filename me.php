<?php

require 'db.php';

session_start();

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM `posts` WHERE user_id = $user_id ORDER BY created_at DESC";

$res = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($res)){
    echo $row['content'] . "<br>";
    echo "- created at " . $row['created_at'] . "<br><br>";
}

?>

<a href="index.php">Home</a>