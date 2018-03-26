<?php
	include 'connect.php';
	$type = $_POST['type'];
	$content = $_POST['content'];
	
	if(isset($_POST['submit'])){
		$sql = "insert into notice( type,content) values('$type', '$content')";
		$success = mysqli_query($conn,$sql);
		if($success){
			Header ("Location: ../Pages/upload_notice.php");
		}
		else{
			echo "error";
		}
	}
?>