<?php
	
	session_start();
	if (session_status()==NULL) {
      	header ("Location: ../");
    }
    else {

      		if($_SESSION['designation']!="ipoh"){
      		header ("Location: ../");
			}
      	else{ ?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
    <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <meta charset="utf-8">
	<title>Delete Notice</title>
</head>

<body>
	<div class="container" id = "main">
    	<nav class="navbar navbar-default navbar-fixed-top">
    		<div class="container">
    			<div class="navbar-header">
                	<a class="navbar-brand" href="http://www.iit.du.ac.bd/" id = "iitlogo" target="new">
                    <img src="../photos/iitlogo.png" width = "100px" height = "50px" alt="IIT logo">
                    </a>
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>                        
      				</button>
    			</div>
    
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav navbar-right">
        				
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a id="Notice" href="view_notice.php">Notice</a></li>
                        <li><a id="cinfo" href="view_company_info.php">Company Information</a></li>
                        <li class="dropdown">
                        	<a id="FormFillup" href="" class="dropdown-toggle" data-toggle="dropdown" data-hover = "dropdown">
                            Form Fill up<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                            	<li class="arrow">
                                	<li> <a align="center" href="Form_fillup.php">Choice Form </a></li>
                                	<li> <a align="center" href="upload_cv.php">Upload CV</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href="allocation_list.php">Allocation List</a></li>
                        <li><a id="UploadCGPA" href="uploadCgpa.php">Upload CGPA</a></li>

                        <li class="dropdown" >
                        	<a id="AdminPanel" href="" class="dropdown-toggle" data-toggle ="dropdown" data-hover="dropdown">
                            Admin Panel<strong class="caret"></strong></a>
                            	<ul class="dropdown-menu">
                                    <li class="arrow">
                                    <li> <a href="approve_users.php">Users Approval</a></li>
                                    <li> <a href="upload_company_info.php">Upload Company Info</a></li>
                                    <li> <a href="upload_notice.php">Upload Notice</a></li>
                                    <li> <a href="delete_notice.php">Delete Notice</a></li>
                                    <li> <a href="generate.php">Generate Allocation</a></li>
                                    <li> <a href="modify_allocation.php">Modify Allocation</a></li>
                                    </li>
                                </ul> <!-- end dropdown manu-->
                        </li> <!--end dropdown -->
                        <li><a href="../php_includes/tologout.php"><span class = "glyphicon glyphicon-off"></span>Logout</a></li>
      				</ul>
     			</div> <!-- end myNavbar -->
    		</div> <!-- end container -->
    	</nav> <!-- end nav -->
        
        <div id="Welcome" class="jumbotron">
    		<div class="text-center">
      			<h1>Intern Placement Office System</h1>
      			<h2>Institute of Information Technology, University of Dhaka</h2>
    		</div>
         </div> <!-- end welcome -->
<?php
	include '../php_includes/connect.php';
	$sql = 'SELECT * FROM notice ORDER BY nid DESC'; 
	$result = mysqli_query( $conn, $sql );
 
   	while($row = mysqli_fetch_assoc($result)){ ?>
           
        <article>
            <div class="row" id = "homeCallout">
                <div class="col-sm-12">
                    <div class="well">
                    	<div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <div class="panel-title">
                                       <a data-toggle="collapse" href="#<?php echo $row['nid'];?>">
                                         <span id = "view">Delete Notice</span> of Date: <?php echo $row['dateTime']; ?> </a>
                                           <p><b>Notice Type </b>: <?php echo $row['type']; ?> </p>
                                   </div>
                                 </div>
                             <div id="<?php echo $row['nid'];?>" class="panel-collapse collapse">
                              <div class="panel-body"> 
                                  <p><?php echo $row['content']; ?></p>
                                     <div class="panel-footer" id = "pannel_footer">
                                    	<a class="btn btn-danger"
                                     	href="../php_includes/todelete_notice.php?nid=<?php echo $row['nid'];?>&manage=delete">
                                     		Delete</a>
                                      </div> <!-- end panel footer -->
                                </div> <!-- end panel body -->
                            </div> <!-- end panel collaspe -->
                          </div> <!-- end panel default -->
                        </div> <!-- end panel group -->
                    </div> <!-- end well -->
                </div> <!-- end col-12 -->    
            </div> <!-- end homeCallout-->
        </article> <!-- end article-->
	
	<?php } ?>
    
    <!-- Company Links -->
    <div>
        <div class="page-header">
        	<h2>Company Links</h2>
         </div> <!-- end header -->
        <ul class="list-inline">    
            <li>
                <a href="http://www.brainstation-23.com" target="new">
                	<img src="../photos/BS.png" width="144" height="144" alt = "Brainstation-23" title=
                    "http://www.brainstation-23.com" />
                </a>
            </li>
            
            <li>
                <a href="http://www.jantrik.com" target = "new">
                    <img src="../photos/Jantric.png" width="144" height="144" alt="Jantric Technology" 
                    title = "http://www.jantrik.com" />
                </a>
            </li>
            
            <li>
                <a href="http://www.bracits.com" target = "new">
                    <img src = "../photos/bits.gif" width="144" height="144" alt="Bracits"
                    title = "http://www.bracits.com"/>
                </a>
            </li>
            
            <li>
                <a href="http://selise.ch" target = "new">
                    <img src="../photos/Selise.gif" width="144" height="144" alt="Selise"
                    title = "http://selise.ch"/>
                </a>
            </li>
            
            <li>
                <a href="http://kaz.com.bd" target="new">
                    <img src="../photos/kaz.png" width="144" height="144" alt="Kaz Software"
                    title="http://kaz.com.bd"/>
               	</a>
            </li>
            
            <li>
                <a href="http://www.field.buzz" target="new">
                    <img src="../photos/gmbh.gif" width="144" height="144" alt="Field"
                    title = "http://www.field.buzz"/>
                </a>
            </li>
            
            <li>
                <a href="http://www.leads-bd.com" target="new">
                    <img src="../photos/leads.png" width="144" height="144" alt="Leads"
                    title = "http://www.leads-bd.com"/>
                </a>
            </li>
    
            <li>
                <a href="http://www.orion-informatics.com" target="new">
                    <img src="../photos/Orion.png" width="144" height="144" alt="Orion"
                    title = "http://www.orion-informatics.com"/>
                </a>
            </li>
            <li>
                <a href="http://www.bdpanacea.com" target="new">
                    <img src="../photos/Panacea.png" width="144" height="144" alt="Panacea"
                    title = "http://www.bdpanacea.com"/>
                </a>
            </li>
            <li>
                <a href="http://www.southtechlimited.com" target = "new">
                    <img src="../photos/SouthTech.png" width="144" height="144" alt="Southtech"
                    title="http://www.southtechlimited.com"/>
                </a>
            </li>
    
        </ul>
    </div><!-- end company_link -->
        
    </div> <!-- end container -->
     <div class="footer">
        	<div class = "container">
            	<div class="row">
                <div class="col-sm-4">
                	<div class="page-header">
                    	<h2>About IPOS</h2>
                    </div>
                    <p id="about">Intern Placement Office System is a web based software where an admin panel control the system
                     to allocate students for companies.The students can view the notice and information of companies,
                     fill up their choice form and upload their CV.The section officer uploads students CGPA only.
                     The Intern placement office head have the authority to access all information</p>
                </div>
                <div class="col-sm-4">
                	<div class="page-header">
                    	<h2>Help Desk</h2>
                    </div>
                    <p id="help"><u>If you are an IPOH:</u> Approve the users,
                    Upload company information then upload notice.Wait till all the students fill up
                    their choice form and RPO upload CGPA of Students.<br>
                   <u>If you are a student:</u> View Notice then fill up your choice form and upload your CV.<br>
                   <u>If you are a RPO:</u> View Notice then upload CGPA of all students.
                     </p>
                    
                    </p>
                </div>
                <div class="col-sm-4">
                	<div class="page-header">
                    	<h2>Contact</h2>
                    </div>
                    <p"> IIT,University of Dhaka <br>
                        Dhaka, Bangladesh <br>
                        Phone: +8801xxxxxxxxx <br>
                        Website:<a href="http://www.iit.du.ac.bd" target="new">http://www.iit.du.ac.bd</a> <br>
                        Email: iit@du.ac.bd
					</p>
                </div>
          	</div> <!-- end row -->
         </div> <!-- end container -->
         <div class="row" id = "copyright">
             <div class="col-sm-12 text-center">
               	<p>2016 &copy; IIT. Developed by Md. Sakib Rezoan<br> BSSE 06<sup>th</sup> Batch.
                	
               </p>
             </div>
         </div> <!-- end row -->
      </div> <!-- end footer-->
         <script type="text/javascript"> 
	var designation = '<?php echo $_SESSION['designation']; ?>';
  	if(designation=="student"){
	document.getElementById("UploadCGPA").style.display='none';
    document.getElementById("AdminPanel").style.display='none';
  	}
  	else if(designation=="ipoh"){
	 document.getElementById("UploadCGPA").style.display='none';
	 document.getElementById("FormFillup").style.display='none';
	}
  	else if(designation=="rpo"){
	  document.getElementById("AdminPanel").style.display='none';
	  document.getElementById("FormFillup").style.display='none';
	  document.getElementById("cinfo").style.display='none';
  	}
  </script>
</body>
</html>
	<?php } ?>
<?php }?>