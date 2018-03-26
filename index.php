<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/loginReg.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>IPOS-Login</title>
</head>
<body>
    <div class="container">
      <div class="row" id = "login">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h2>Login Please If You Are Registered User</h2>
          <br>
          <p><big><big>Click "Register" to create an Account</big> </big></p>
          
          <form role="form" action="php_includes/tologin.php" method="post">
            <div class="form-group">
              <label for="mail">Your BSSE Email</label>
              <input type="email" class="form-control" id="mail" name="mail" required="required"
              placeholder="mymail@iit.du.ac.bd">
            </div>
                    
            <div class="form-group">
              <label for="pwd">Your Password:</label>
              <input type="password" class="form-control" id="pwd" name="pwd" required="required" placeholder="eg.1X8dfEO5">
            </div>
            <div class="checkbox">
  			<label><input type="checkbox" value="keepLogin"><big>Keep Me Login</big></label>
			</div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>
          <br>
          <p><big> Not A Member Yet ? Click <a href = "Pages/register.php" >Register</a></big> </p>
          <div class="col-sm-3"></div>
        </div>
       </div>
     </div>
 </body>
</html>
