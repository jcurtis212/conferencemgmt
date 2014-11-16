<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  require('db.php');

  //connect db
  connect();

  //enter data into db
  //forward to new user page
}
else{
?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Conference Management Organization System">

        <title>4confs | Register</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 		<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />

    </head>
    <body>
        <div class="wrap">
            <div class="header container col-xs-4 col-xs-offset-4">
        		<img src="images/logo-sm.jpg" alt="logo" id="logo" />
            </div>
            <div class="container col-xs-4 col-xs-offset-4">
        		<div class="well well-lg">
    	    		<p class="login-element">Sign up with your email address</p>
    	    		<form action="register.php" method="POST" role="form">
                        <div class="form-group login-element">
    	    			    <input type="text" name="email" placeholder="Email Address">
    	    			</div>
                        <div class="form-group login-element">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group login-element">
                            <input type="password" name="password" placeholder="Confirm Password">
                        </div>
                        <div class="login-element">
    	    			    <input type="submit" class="btn btn-primary" value="Register">
                        </div>
    	    		</form>
    	    	</div>
        	</div>
        </div>
    </body>
</html>
<?php
}
?>
