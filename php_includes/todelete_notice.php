<?php
	include 'connect.php';
	$nid = $_GET['nid'];
	$manage = $_GET['manage'];
	
	if($manage=="delete"){
		$sql = "DELETE FROM notice WHERE nid=$nid";
		$success = mysqli_query($conn,$sql);
			if($success){
			Header ("Location: ../Pages/delete_notice.php");
			}
			else{
				echo "error";	
			}
	}
?>