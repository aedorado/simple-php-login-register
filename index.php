<?php

session_start();

if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
	echo "<h1>Welcome " . $_SESSION['user_name'] . "</h1>";

?>

<form method="get" action="post.php">
	<textarea name="status" placeholder="What's on your mind..."></textarea>
	<input type="submit" value="Post Status">
</form>
<br><a href=logout.php>Logout</a>
<br><a href=me.php>Your Posts</a>

<?php
} else {
	header('Location: login.php');
}

?>

