<?php
	session_start();
	//var_dump($_SESSION['userData']);
	echo 'Hello '.$_SESSION['userData']['name'];
?>