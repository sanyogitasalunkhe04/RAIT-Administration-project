<?php
session_start();
    unset($_SESSION['username']);
	unset($_SESSIN['uid']);
	session_destroy();
	header('Location: login.php');
?>
