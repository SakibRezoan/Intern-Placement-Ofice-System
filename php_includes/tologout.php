<?php 
	
	session_start();

	include 'connect.php';

	if(session_status() == PHP_SESSION_ACTIVE){
		session_destroy();
		Header("Location: ../");
	}

 ?>