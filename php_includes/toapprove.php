<?php 

	include 'connect.php';

	$roll = $_GET['roll'];
	$approve = $_GET['approve'];

	if($approve=="yes"){

		$sql = "UPDATE student SET status=1 WHERE roll=$roll";
		$result = mysqli_query($conn,$sql);
		if($result){
			Header ("Location: ../Pages/approve_users.php");
		}
		else{
			echo "Some Problem Occurs";
		}
	}
	elseif ($approve=="delete") {
		$sql = "DELETE FROM student WHERE roll=$roll";
		$result = mysqli_query($conn,$sql);
		if($result){
			Header ("Location: ../Pages/approve_users.php");
		}
		else{
			echo "Some Problem Occurs";
		}
	}

?>