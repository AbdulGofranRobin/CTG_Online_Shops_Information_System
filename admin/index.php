<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<script type="text/javascript"src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-carousel.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
  <body>
    <div class="container-fluid">
      <div class="row" style="background-image:url('image/bg.jpg'); height:650px;">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title" style="color:white;"><i class="fa fa-unlock-alt"><strong > Log in</strong><h2>Please login or Resister</h2> </i></h1>
            <div class="account-wall">
                <form class="form-signin" action="query.php" method="POST">
                <input type="text" class="form-control" id="username" name="username" placeholder="user Name" required="required"/>
				&nbsp;
                <input type="password" class="form-control" id="password" name="password"placeholder="Password" required="required"/>
				&nbsp;
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                    Sign in</button>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
			
	
		<?php
			if (isset($_GET['error']))
				{
					echo "<p style='color:white;'>".$_GET['error']."</p>";
				}
			
			
		?>
        </div>
    </div>
</div>


    
  </body>
</html>
