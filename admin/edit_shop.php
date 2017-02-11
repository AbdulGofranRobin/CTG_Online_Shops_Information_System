<?php
	include ('header.php');
	include ('sidebar.php');
	include('inc/functions.php');
?>


        <div id="page-wrapper">

            <div class="container-fluid">
			<?php
						
				if(isset($_GET['refid']))
				{
					$shop_id=$_GET['refid'];
					$rows=SelectAllWhere('shop_info','shop_id',$shop_id);
					foreach($rows as $row)
					{
						extract($row);
					}
				?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<form action="query.php" method="POST">
						<input type="hidden" name="shop_id" value="<?php echo $shop_id;?>"/>
						  <div class="form-group">
							<label for="cat_name">Select Category</label>
							<select class="form-control" id="cat_name" name="cat_name" value="<?php echo $cat_name;?>"> required>
							<option value=''>--Select Category--</option>
							<?php
								$cat_old=$cat_id;
								$row=SelectAll('cat_info');
								foreach($row as $rw)
								{
									extract($rw);
									?>
									<option value='<?php echo $cat_id;?>' <?php if($cat_old==$cat_id) echo 'selected';?>><?php echo $cat_name;?></option>
						<?php
							}
							?>
							</select>
						  </div>
						  <div class="form-group">
							<label for="market_name">Select Market</label>
							<select class="form-control" id="market_name" name="market_name" value="<?php echo $market_name;?>">
							<option value=''>--Select Market--</option>
							<?php
								$market_old=$market_id;
								$row=SelectAll('market_info');
								foreach($row as $rw)
								{
									extract($rw);
									?>
									<option value='<?php echo $market_id;?>' <?php if($market_old==$market_id) echo 'selected';?>><?php echo $market_name;?></option>
						<?php
								}
							?>
							</select>
						  </div>
						  <div class="form-group">
							<label for="shop_name">Shop Name</label>
							<input type="text" class="form-control" id="shop_name" name="shop_name" value="<?php echo $shop_name;?>">
						  </div>
						   <div class="form-group">
							<label for="shop_owner">Shop Owner</label>
							<input type="shop_owner" class="form-control" id="shop_owner" name="shop_owner" value="<?php echo $shop_owner;?>">
						  </div>
						   <div class="form-group">
							<label for="shop_no">Shop No</label>
							<input type="shop_no" class="form-control" id="shop_no" name="shop_no" value="<?php echo $shop_no;?>">
						  </div>
						   <div class="form-group">
							<label for="shop_floor">Shop floor</label>
							<input type="shop_floor" class="form-control" id="shop_floor" name="shop_floor" value="<?php echo $shop_floor;?>">
						  </div>
						  <div class="form-group">
							<label for="shop_desc">Shop desc</label>
							<input type="shop_desc" class="form-control" id="shop_desc" name="shop_desc"value="<?php echo $shop_desc;?>">
						  </div>
						  <div class="form-group">
							<label for="shop_contact">Shop contact</label>
							<input type="shop_contact" class="form-control" id="shop_contact" name="shop_contact" value="<?php echo $shop_contact;?>">
						  </div>
						  <input type="submit" name="edit_shop" class="btn btn-default" value="Edit"/>
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
                 <?php
					}
					else
					{
						echo "<h1 class='text-danger'>404 Error Found</h1>";
					}
				?>
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
