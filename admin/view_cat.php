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
                            Dashboard <center><h1 class="text-primary"><strong>Overview Category</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-8 col-lg-offset-3">
							<table class="table table-bordered">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Description</th>
								<th>Category Image</th>
								<th>Action</th>
							</tr>
							<?php
								$rows=SelectAllWhere('cat_info','del_status',0);
								foreach($rows as $row)
								{
									extract($row);
							?>
								<tr>
									<td><?php echo $cat_id;?></td>
									<td><?php echo $cat_name;?></td>
									<td><?php echo $cat_desc;?></td>
									<td><img class="img img-responsive" src="<?php echo $cat_image;?>" alt="" style="height:100px;width:100px"/></td>
									<td><a href="edit_cat.php?refid=<?php echo $cat_id;?>" class="btn btn-warning">Edit</a> <a href="delete.php?catid=<?php echo $cat_id;?>" class="btn btn-danger">Delete</a></td>
								</tr>
							<?php	
								}	
							?>
							</table>
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
