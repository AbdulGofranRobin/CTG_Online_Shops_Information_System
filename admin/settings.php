<?php
	include ('header.php');
	include ('sidebar.php');
	include('inc/functions.php');
?>


        <div id="page-wrapper">
            <div class="container-fluid">

			<?php
		echo $username=$_SESSION['username'];
		echo "<br />";
		$rows=SelectAll('admin_info');
		foreach($rows as $row)
		{
			extract($row);
		}
	?>

                <!-- Page Heading -->
                <div class="row">
				
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>User Settings</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> User Settings
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<center><img src="image/sting.jpg" class="img img-responsive img-thumbnail;" /></center>
						<form action="query.php" method="POST">
							<input type="hidden" name="cat_id" value="<?php echo $cat_id;?>"/>
						  <div class="form-group">
							<label for="user_name">User Name</label>
							<input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $username;?>">
						  </div>
						  <div class="form-group">
							<label for="new_pass">New Password</label>
							<input type="text" class="form-control" id="new_pass" name="new_pass" required>
						  </div>
						  <div class="form-group">
							<label for="new_confirm_pass">Confirm New Password</label>
							<input type="text" class="form-control" id="new_confirm_pass" name="new_confirm_pass" required>
						  </div>
						  <input type="submit" name="settings" class="btn btn-default" value="Edit"/>
						</form>
					</div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
                <!-- /.row -->
		
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
