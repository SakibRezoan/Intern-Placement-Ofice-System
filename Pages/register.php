<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
    <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/LoginReg.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js" >
    
    <meta charset="utf-8">
	<title>Student-Registration</title>
</head>
<body>
    <div class="container">
      <div class="row" id = "register">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h2>Register Please To Create An Account</h2>
          <p><big><big>Click "Login" If You Are Already Registered.</big> </big></p>
          
          <form role="form" action="../php_includes/toreg.php" method="post">
            <div class="form-group">
              <label for="usr">Your Username</label>
              <input type="text" class="form-control" id="usr" name = "user" required="required" placeholder="myusername">
            </div>
            <div class="form-group">
              <label for="mail">Your BSSE Email</label>
              <input type="email" class="form-control" id="mail" name = "mail" required="required" placeholder="mymail@iit.du.ac.bd">
            </div>        
            <div class="form-group">
              <label for="roll">Your BSSE Roll</label>
              <input type="number" class="form-control" id="roll" name = "roll" required="required" placeholder="xxxx">
            </div>
            <div class="form-group">
              <label for="pwd">Your Password:</label>
              <input type="password" class="form-control" id="pwd" name = "pwd" required="required" placeholder="eg.1X8dfEO5">
            </div>
            <div class="form-group">
              <label for="cpwd">Confirm Your Password:</label>
              <input type="password" class="form-control" id="cpwd" name = "cpwd" required="required" placeholder="eg.1X8dfEO5">
            </div>
            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
          </form>
          <br>
          <p class = "center-block"><big>Already Registered? Click <a href="../index.php">Login</a></big> </p>
          <div class="col-sm-3"></div>
        </div>
       </div>
      </div>
    </body>
</html>
