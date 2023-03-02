<?php
require_once 'utils/functions.php';

if (!is_logged_in()) {
    header("Location: loginForm.php");
}
else {
	unset($_SESSION['user']);

	header("Location: loginForm.php");
}
?>
