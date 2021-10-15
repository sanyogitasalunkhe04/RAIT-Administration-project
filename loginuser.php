<?php
session_start();
if(!(isset($_SESSION['username'])))
	header('Location: login.php');
	if($_SESSION['levelid']==2)
		//echo $_SESSION['levelid'];
		header('Location: index2.php');
?>

