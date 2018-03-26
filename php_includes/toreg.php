<?php
	include 'connect.php';
	$name = $_POST['user'];
	$email = $_POST['mail'];
	$roll = $_POST['roll'];
	$pass = md5($_POST['pwd']);
	$cpass = md5($_POST['cpwd']);
	
	if(isset($_POST['submit'])){
		if($pass == $cpass){
			$sql = "insert into student( roll,name,email,password,status) values('$roll', '$name', '$email','$pass' , 0 )";
			$success = mysqli_query($conn,$sql);
			if($success){
				Header ("Location: ../index.php");
			}
		}
	}
?>