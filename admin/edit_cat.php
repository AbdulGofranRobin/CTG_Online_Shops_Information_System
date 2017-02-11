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
		$cat_id=$_GET['refid'];
		$rows=SelectAllWhere('cat_info','cat_id',$cat_id);
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
                                <i class="fa fa-dashboard"></i> Category
                            </li>
                        </ol>
						<div class="col-lg-6 col-lg-offset-3">
						<form action="query.php" method="POST">
							<input type="hidden" name="cat_id" value="<?php echo $cat_id;?>"/>
						  <div class="form-group">
							<label for="cat_name">Category Name</label>
							<input type="text" class="form-control" id="cat_name" name="cat_name" value="<?php echo $cat_name;?>">
						  </div>
						 <div class="form-group">
							<label for="cat_desc">Category Description</label>
							<textarea name="cat_desc" id="cat_desc" class="form-control" cols="30" rows="10"><?php echo $cat_desc;?></textarea>
						  </div>
						  
						  <input type="submit" name="edit_cat" class="btn btn-default" value="Edit"/>
						</form>
					</div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

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
