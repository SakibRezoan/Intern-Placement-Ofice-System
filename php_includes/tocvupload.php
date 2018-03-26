<?php 
include 'connect.php';
	session_start();
	$roll=$_SESSION['roll'];
	if(isset($_POST['submit']))
	{    
		 
	 $file = $roll."-".$_FILES['file']['name'];
	 
	 $file_loc = $_FILES['file']['tmp_name'];
	 $folder="../uploads/";
	 $new_file_name = strtolower($file);
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 if(move_uploaded_file($file_loc,$folder.$final_file))
	 {
	  $sql = "UPDATE student SET cv='$final_file' WHERE student.roll=$roll";
	  $success = mysqli_query($conn,$sql);
		  if($success){
		  ?>
		  <script>
		  alert('successfully uploaded');
				window.location.href='../Pages/home.php?Success';
		  </script>
		  
		 <?php
		  }
	 }
	 else{ ?>
	  <script>
	  alert('error while uploading file');
			window.location.href='../upload_cv.php?Fail';
	</script>
	<?php
    }
   }
?>