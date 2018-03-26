<?php
	include '../php_includes/connect.php';
	
	$submit = $_POST['submit'];		
	$roll=$_POST['roll'];
	$newcid =$_POST['company'];
	
	if(isset($submit)){
	
		$sql = "SELECT cid FROM student WHERE roll='$roll'";
		
		$result = mysqli_query($conn,$sql);
		
		if (!$result) {
			echo 'MySQL Error: 1' . mysqli_error($conn);
			exit;
		}
		
		$row = mysqli_fetch_assoc($result);
		
		$oldcid = $row['cid'];
		
		$sql2 = "SELECT available_pos FROM company WHERE cid = '$oldcid'";
		
		$result2 = mysqli_query($conn,$sql2);
		
		if(!$result2){
			echo 'MySQL Error: 2' . mysqli_error($conn);
			exit;
		}
		
		$row2 = mysqli_fetch_assoc($result2);
		$available_pos_old = $row2['available_pos'];
		$inc = $available_pos_old+1;
		
		$sql3 = "SELECT available_pos FROM company WHERE cid = '$newcid'";
		
		$result3 = mysqli_query($conn,$sql3);
		
		if(!$result3){
			echo 'MySQL Error: 2' . mysqli_error($conn);
			exit;
		}
		$row3 = mysqli_fetch_assoc($result3);
		$available_pos_new = $row3['available_pos'];
		$dec = $available_pos_new-1;
		
		$sql4 = "UPDATE student SET cid = '$newcid' WHERE roll='$roll'";
		$result4 = mysqli_query($conn,$sql4);
		$sql5 = "UPDATE company SET available_pos='$dec' WHERE cid='$newcid'";
		$result5 = mysqli_query($conn,$sql5);
		$sql6 = "UPDATE company SET available_pos='$inc' WHERE cid='$oldcid'";
		$result6 = mysqli_query($conn,$sql6);
	
		if($result4 && $result5 && $result6){
			Header("Location: ../Pages/modify_allocation.php");
		}
		else{
			echo 'MySQL Error: 3' . mysqli_error($conn);
        	exit;
		}
	}
?>