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
                            Dashboard <center><h1 class="text-primary"><strong>ADD SHOP</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<form action="query.php" method="POST" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="cat_name">Select Category</label>
							<select class="form-control" id="cat_name" name="cat_name" required>
							<option value=''>--Select Category--</option>
							<?php
								$row=SelectAll('cat_info');
								foreach($row as $rw)
								{
									extract($rw);
									echo "<option value='$cat_id'>$cat_name</option>";
								}
							?>
							</select>
						  </div>
						  <div class="form-group">
							<label for="market_name">Select Market</label>
							<select class="form-control" id="market_name" name="market_name" required>
							<option value=''>--Select Market--</option>
							<?php
								$row=SelectAll('market_info');
								foreach($row as $rw)
								{
									extract($rw);
									echo "<option value='$market_id'>$market_name</option>";
								}
							?>
							</select>
						  </div>
						  <div class="form-group">
							<label for="shop_name">Shop Name</label>
							<input type="text" class="form-control" id="shop_name" name="shop_name" placeholder="Name" required>
						  </div>
						   <div class="form-group">
							<label for="shop_owner">Shop Owner</label>
							<input type="text" class="form-control" id="shop_owner" name="shop_owner" placeholder="Owner" required>
						  </div>
						   <div class="form-group">
							<label for="shop_no">Shop No</label>
							<input type="text" class="form-control" id="shop_no" name="shop_no" placeholder="Shop no" required>
						  </div>
						   <div class="form-group">
							<label for="shop_floor">Shop floor</label>
							<input type="text" class="form-control" id="shop_floor" name="shop_floor" placeholder="Floor" required>
						  </div>
						  <div class="form-group">
							<label for="shop_desc">Shop Description</label>
							<textarea name="shop_desc" id="shop_desc" class="form-control" cols="10" rows="5" required></textarea>
						  </div>
						  <div class="form-group">
							<label for="shop_contact">Shop contact</label>
							<input type="text" class="form-control" id="shop_contact" name="shop_contact" placeholder="Contact" required>
						  </div>
						  <div class="form-group">
							<label for="shop_image">Shop Image</label>
							<input type="file" id="shop_image" name="shop_image">
						  </div>
						  <input type="submit" name="shop_info" class="btn btn-info btn-sm pull-right btn-lg active" value="ADD"/>
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
