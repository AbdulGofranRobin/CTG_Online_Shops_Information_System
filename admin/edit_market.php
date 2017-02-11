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
					$market_id=$_GET['refid'];
					$rows=SelectAllWhere('market_info','market_id',$market_id);
					foreach($rows as $row)
					{
						extract($row);
					}
			?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Category Edit</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<form action="query.php" method="POST">
							<input type="hidden" name="market_id" value="<?php echo $market_id;?>"/>
						  <div class="form-group">
							<label for="market_name">Market Name</label>
							<input type="text" class="form-control" id="market_name" name="market_name" value="<?php echo $market_name;?>">
						  </div>
						   <div class="form-group">
							<label for="market_address">Market Address</label>
							<input type="market_address" class="form-control" id="market_address" name="market_address" value="<?php echo $market_addres;?>">
						  </div>
						   <div class="form-group">
							<label for="market_contact"> Market Contact</label>
							<input type="market_contact" class="form-control" id="market_contact" name="market_contact" value="<?php echo $market_contact;?>">
						  </div>
						   <div class="form-group">
							<label for="close_day">Close Day</label>
							<input type="close_day" class="form-control" id="close_day" name="close_day"value="<?php echo $market_cloose_day;?>">
						  </div>
						  <input type="submit" name="edit_market" class="btn btn-default" value="Edit"/>
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
				<?php
					}
					else
					{
						echo "<h1 class='text-danger'>404 Error Found</h1>";
					}
				?>

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
