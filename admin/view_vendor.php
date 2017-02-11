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
                            Dashboard <center><h1 class="text-primary"><strong>View Resister Vendor</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-12">
							<table class="table table-bordered">
							<tr>
								<th>Vendor Name</th>
								<th>Vendor Email</th>
								<th>Vendor Mobile</th>
								<th>Vendor Status</th>
								<th>Action</th>
								
							</tr>
							<?php
								$rows=SelectAll('vendor_info');
								foreach($rows as $row)
								{
									extract($row);
							?>
								<tr>
									<td><?php echo $vendor_name;?></td>
									<td><?php echo $vendor_email;?></td>
									<td><?php echo $vendor_mobile;?></td>
									<td><?php if($status==0)
											echo "<span style='color:green'>Active</span>";
										else
											echo "<span style='color:red'>Deactive</span>";?></td>
									
									<td><?php if($status==0)
									{?>
											<a class="btn btn-danger" href="approve.php?vdid=<?php echo $vendor_id;?>">Deactivate</a>
											<?php
									}
											else{ 
											?>
											<a class="btn btn-warning" href="approve.php?vaid=<?php echo $vendor_id;?>">Activate</a>
										<?php
										}
									?></td>
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
