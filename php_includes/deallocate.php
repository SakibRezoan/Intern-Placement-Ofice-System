<?php
	include '../php_includes/connect.php';
			
	$roll=$_GET['roll'];
	$oldcid =$_GET['cid'];
	
	$sql1 = "SELECT available_pos FROM company WHERE cid = '$oldcid'";
		
	$result1 = mysqli_query($conn,$sql1);
		
	if(!$result1){
		 mysqli_error($conn);
			exit;
	}
	$row1 = mysqli_fetch_assoc($result1);
	$available_pos = $row1['available_pos'];
	$inc= $available_pos+1;
	
	$sql2 = "UPDATE student SET cid = NULL WHERE roll='$roll'";	
	$sql3 = "UPDATE company SET available_pos = '$inc' WHERE cid='$oldcid'";
	$result2 = mysqli_query($conn,$sql2);
	$result3 = mysqli_query($conn,$sql3);
	if($result2 && $result3){
			Header("Location: ../Pages/modify_allocation.php");
	}
	
?>