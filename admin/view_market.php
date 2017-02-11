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
                            Dashboard  <center><h1 class="text-primary"><strong>Overview Market</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-12">
							<table class="table table-bordered">
							<tr>
								<th>ID</th>
								<th>Market Name</th>
								<th>Market address</th>
								<th>Market Contact</th>
								<th>Close Day</th>
								<th>Market Image</th>
								<th>Action</th>
							</tr>
							<?php
								$rows=SelectAllWhere('market_info','del_status',0);
								foreach($rows as $row)
								{
									extract($row);
							?>
								<tr>
									<td><?php echo $market_id;?></td>
									<td><?php echo $market_name;?></td>
									<td><?php echo $market_addres;?></td>
									<td><?php echo $market_contact;?></td>
									<td><?php echo $market_cloose_day;?></td>
									<td><img class="img img-responsive" src="<?php echo $market_image;?>" alt="" style="height:100px;width:100px"/></td>
									<td><a href="edit_market.php?refid=<?php echo $market_id;?>" class="btn btn-warning">Edit</a> <a href="delete.php?marketid=<?php echo $market_id;?>" class="btn btn-danger">Delete</a></td>
								</tr>
							<?php	
								}	
							?>
							</table>
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
