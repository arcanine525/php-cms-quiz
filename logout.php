<?php
session_start();
session_destroy();
$cookie_name = "username";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
 
	header("Location: index.php");
?>