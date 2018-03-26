<?php
	
	session_start();
	
	include 'connect.php';
	$email = $_POST['mail'];
	$pass = $_POST['pwd'];
	
	if(isset($_POST['submit'])){
		$sql = "select * from student where email = '$email'";
		$success = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($success);
		
		if($row['password']==md5($pass) && $row['status']==1 ){
				
				$_SESSION['roll']=$row['roll'];
				$_SESSION['designation']="student";
				
				Header ("Location: ../Pages/home.php");
			}
			
		else{
			$sql2 = "select * from employee where email = '$email'";
			$success2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_array($success2);
			if($row2['password']==$pass){
				$_SESSION['designation']=$row2['designation'];
				
				Header ("Location: ../Pages/home.php");
			}
			
			else{
				Header ("Location: ../");	
			}
			
		}
	}
?>