
var designation = "<?php echo $_SESSION['designation']; ?>";
  if(designation=="student"){
	document.getElementById("upload_cgpa").style.display='none';
    document.getElementById("admin_panel").style.display='none';
  }
  else if(designation=="ipoh"){
	 document.getElementById("upload_cgpa").style.display='none';
	 document.getElementById("choice_form").style.display='none';
	 }
  else if(designation=="rpo"){
	  document.getElementById("register").style.display='none';
	  document.getElementById("admin_panel").style.display='none';
	  document.getElementById("choice_form").style.display='none';
  }