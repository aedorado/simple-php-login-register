<?php

session_start();

if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
	header('Location: index.php');
}

?>

<style>

.warning {
    color: red;
}

</style>

<h1>Welcome to our website!</h1>

<?php

if (isset($_GET['fail']) && $_GET['fail'] == true) {
    echo "<p class='warning'>Incorrect username/password.</p>";
}

?>


Please use this form to login:

<form action="login_user.php" method="post">
	Email: <input type="text" name="email" placeholder="Enter your email"><br>
	Password: <input type="password" name="password" placeholder="Enter password"><br>
	<input type="submit">
</form>