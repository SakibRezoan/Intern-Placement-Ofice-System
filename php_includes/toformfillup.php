<?php
	session_start();
	include 'connect.php';
	$n = 1;
	$roll = $_SESSION['roll'];
	if(isset($_POST['submit'])){
		foreach($_POST['choice'] as $array => $choice){
			$choice = mysql_real_escape_string($choice);
			$sql = "INSERT into choice_form (roll,cid,priority) VALUES('$roll','$choice','$n')";
			$n++;
			$success = mysqli_query($conn,$sql);
		}
		
		if($success){
			Header("Location: ../Pages/home.php");
		}
 	}
?>