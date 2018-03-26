<?php
	include 'connect.php';
	$cgpa = $_POST['cgpa'];
	$roll = $_POST['roll'];
	
	if(isset($_POST['submit'])){
		$sql="UPDATE `student` SET `cgpa` = '$cgpa' WHERE `student`.`roll` = '$roll'";
			$success = mysqli_query($conn,$sql);
			if($success){
				Header ("Location: ../Pages/uploadCgpa.php");
			}
			else {
				echo "Cgpa of roll $roll has not been inserted".mysqli_connect_error($conn);
			}
	}
?>