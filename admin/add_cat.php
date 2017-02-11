<?php
	include ('header.php');
	include ('sidebar.php');
	include('inc/functions.php');
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <center><h1 class="text-primary"><strong>ADD CATEGORY</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<form action="query.php" method="POST" enctype="multipart/form-data">
						
						  <div class="form-group">
							<label for="cat_name">Category Name</label>
							<input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Category Name" required>
						  </div>
						  <div class="form-group">
							<label for="cat_desc">Category Description</label>
							<textarea name="cat_desc" id="cat_desc" class="form-control" cols="30" rows="10" required></textarea>
						  </div>

						  <div>
							<label for="cat_image">category Image</label>
							<input type="file"id="cat_image" name="cat_image">
						  </div>
						  <input type="submit" name="cat_info" class="btn btn-info btn-sm pull-right btn-lg active" value="ADD"/>
						</form>
					</div>
					<?php
						if (isset($_GET['msg']))
							{
								echo "<p style='color:red;'>".$_GET['msg']."</p>";
							}
						
						
					?>
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
