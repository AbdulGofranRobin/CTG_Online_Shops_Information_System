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
                            Dashboard <center><h1 class="text-primary"><strong>Overview Shop</strong></h1></center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<div class="col-lg-12">
							<table class="table table-bordered">
							<tr>
								<th>Category Name</th>
								<th>Vendor Name</th>
								<th>Market Name</th>
								<th>Shop Name</th>
								<th>Shop owner</th>
								<th>Shop no</th>
								<th>Shop floor</th>
								<th>Shop desc</th>
								<th>Shop contact</th>
								<th>Shop Image</th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
							<?php
								$rows=SelectAllWhere('shop_info','del_status',0);
								foreach($rows as $row)
								{
									extract($row);
							?>
								<tr>
									<td><?php 
										$rows2=SelectAllWhere('cat_info','cat_id',$cat_id);
										foreach($rows2 as $row2)
										{
										extract($row2);
										echo $cat_name;
										}
										?></td>
									<td><?php if($vendor_id==0)
									{
										echo 'Admin';
									}
									else{
										$rows4=SelectAllWhere('vendor_info','vendor_id',$vendor_id);
										foreach($rows4 as $row4)
										{
										extract($row4);
										echo $vendor_name;
										}
									}?></td>
									<td><?php 
										$rows3=SelectAllWhere('market_info','market_id',$market_id);
										foreach($rows3 as $row3)
										{
										extract($row3);
										echo $market_name;
										}
										?></td>
									<td><?php echo $shop_name;?></td>
									<td><?php echo $shop_owner;?></td>
									<td><?php echo $shop_no;?></td>
									<td><?php echo $shop_floor;?></td>
									<td><?php echo $shop_desc;?></td>
									<td><?php echo $shop_contact;?></td>
									<td><img class="img img-responsive" src="<?php echo $shop_image;?>" alt="" style="height:100px;width:100px"/></td>
									<td><?php if($approve==1)
											echo '<span style="color:green">Approved</span>';
										else{ ?>
											<a class="btn btn-warning" href="approve.php?shopid=<?php echo $shop_id;?>">Approve</a>
										<?php
										}
									?></td>
									
									<td><a href="edit_shop.php?refid=<?php echo $shop_id;?>" class="btn btn-warning">Edit</a> <a href="delete.php?shopid=<?php echo $shop_id;?>" class="btn btn-danger">Delete</a></td>
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
