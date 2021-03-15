<?php

require 'db.php';

$sql = "SELECT count(*) as user_post_count, users.id, users.name
FROM `posts`, `users` 
WHERE posts.user_id = users.id
group by user_id";

$res = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($res)){
    echo $row['name'] . " : " . $row['user_post_count'] . "<br><br>";
}


?>