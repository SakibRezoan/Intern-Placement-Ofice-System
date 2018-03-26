<?php
	include 'connect.php';
	$cname = $_POST['cname'];
	$location = $_POST['location'];
	$mail = $_POST['mail'];
	$job_cat = $_POST['job_cat'];
	$available_pos = $_POST['available_pos'];
	
	if(isset($_POST['submit'])){
		$sql = "insert into company(company_name, location, hr_email, job_cat, available_pos)
		values('$cname', '$location','$mail','$job_cat','$available_pos')";
		$success = mysqli_query($conn,$sql);
		if($success){
			Header ("Location: ../Pages/upload_company_info.php");
		}
	}
?>