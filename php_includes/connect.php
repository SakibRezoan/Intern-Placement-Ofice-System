<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	$db_name = 'ipos';
	   
	if(!$conn ){
	   die('Could not connect: ' . mysql_error());
	}
	$select = mysqli_select_db($conn, $db_name);
	if(!$select ){
	   die('Could not select: ' . mysql_error());
	}
?>