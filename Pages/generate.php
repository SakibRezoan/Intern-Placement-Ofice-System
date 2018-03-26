<?php

	include '../php_includes/connect.php';
	
	$sql1 = "SELECT * FROM student ORDER BY cgpa DESC";
	$success1 = mysqli_query($conn,$sql1);
	if($success1){
		while($student = mysqli_fetch_assoc($success1)){
			$roll = $student['roll'];
			
			echo $roll.'<br>';
			
			$sql2 = "SELECT * FROM choice_form WHERE roll=$roll ORDER BY priority ASC";
			$success2 = mysqli_query($conn,$sql2);
			if($success2){
				while($choice=mysqli_fetch_assoc($success2)){
					$priority = $choice['priority'];
					$cid = $choice['cid'];
					echo $priority."----";
					echo $cid."----";
					
					$sql3 = "SELECT *FROM company WHERE cid = $cid";
					$success3 = mysqli_query($conn,$sql3);
					if($success3){
						$company = mysqli_fetch_assoc($success3);
						$cname = $company['company_name'];
						$ap = $company['available_pos'];
						echo $cname."----";
						echo $ap."<br>";
						
						if($ap>0){
							$sql4 = "UPDATE student SET cid = $cid WHERE roll=$roll";
							$sql5 = "UPDATE company SET available_pos = $ap-1 WHERE cid=$cid";
							
							$success4 = mysqli_query($conn,$sql4);
							$success5 = mysqli_query($conn,$sql5);
							
							if($success4&&$success5){
								echo $roll."-----".$cid."<br>";
								break;
							}	
						}
					}
				}
			}
		}
		
	}
		Header("Location: allocation_list.php");
?>