<?php
	// if(isset($_SESSION['counter'])){
	// 	$_SESSION['counter'] = array();
	// }
	session_start();
	session_destroy();

	header('Location:index.php');
	
?>