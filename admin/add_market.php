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
                            Dashboard <center><h1 class="text-primary"><strong>ADD MARKET</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<form action="query.php" method="POST" enctype="multipart/form-data">
						
						  <div class="form-group">
							<label for="market_name">Market Name</label>
							<input type="text" class="form-control" id="market_name" name="market_name" placeholder="Name" required>
						  </div>
						   <div class="form-group">
							<label for="market_address">Market Address</label>
							<input type="text" class="form-control" id="market_address" name="market_address" placeholder="Address" required>
						  </div>
						   <div class="form-group">
							<label for="market_contact"> Market Contact</label>
							<input type="text" class="form-control" id="market_contact" name="market_contact" placeholder="Contact"required>
						  </div>
						   <div class="form-group">
								<label for="close_day">Close Day</label>
								<input type="text" class="form-control" id="close_day" name="close_day" placeholder="Day" required>
							  </div class="form-group">
							  <div>
								<label for="market_image">Market Image</label>
								<input type="file"id="market_image" name="market_image">
							  </div>
							  <input type="submit" name="market_info" class="btn btn-info btn-sm pull-right btn-lg active" value="ADD"/>
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
