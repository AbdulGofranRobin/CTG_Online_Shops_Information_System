<?php
	include('header.php');
	include('admin/inc/functions.php');

?>	
	<div class="container">
		<div class="navbar navbar-inverse navbar-fixed-top">
		   <div class="container">
			  <div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand hidden-xs" href="index.php">Ctg Shop Details</a>
				 <a class="navbar-brand visible-xs" href="index.php">C</a>
			  </div>
			  <div class="navbar-collapse collapse">
				 <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="Browse_market.php">Browse Market</a></li>
					<li><a href="Browse_shop.php">Browse Shop</a></li>
				 </ul>
			  </div>
			  <!--/.navbar-collapse -->
		   </div>
		</div>
		<?php
			  if (isset ($_POST['search_cat'])){
				   $searchq = $_POST['search_cat'];
		?>
		<div class="row" style="background-color:#337AB7;height:250px;">
		<img src="image/dets.jpg" class="img img-responsive img-thumbnail;" style="#;"/>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
				$rows2=SelectAllWhere('cat_info','cat_name',"'$searchq'");
				foreach($rows2 as $row2)
				{
				extract($row2);
				}
				$rows=SelectAllWhereTwo('shop_info','cat_id','approve',$cat_id,1);
				$i=0;
				
				foreach($rows as $row)
				{
					extract($row);
					$image = explode('../',$shop_image);
					$main_image = end($image);
				?>
					<div class="row">
						<div class="col-md-3">
							<img src="<?php 
								if(empty($shop_image))
								{echo "upload/not_available.jpg";}
								else 
								{echo $main_image;}?>" class="img img-responsive img-thumbnail"/>
						</div>
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h3 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne" style="color:skyblue">
										 <?php echo $shop_name;?>
										</a>
								  </h3>
								</div>
								<div id="collapseOne<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body">
									  <h5 style="color:blue;"><strong>Market Name: <?php
											$rows1=SelectAllWhere('market_info','market_id',$market_id);
											foreach($rows1 as $row1)
											{
												extract($row1);
											}
											echo $market_name;
										  ?></h5>
									 <h5 style="color:blue;"><strong>Shop Owner: <?php echo $shop_owner;?></strong></h5>
										  <h5 style="color:blue;"><strong>Shop no:<?php echo $shop_no;?></strong></h5>
										  <h5 style="color:blue;"><strong>Shop floor: <?php echo $shop_floor;?></strong></h5>
										  <h5 style="color:blue;"><strong>Shop description: <?php echo $shop_desc;?></strong></h5>
										  <h5 style="color:blue;"><strong>Shop contact: <?php echo $shop_contact;?></strong></h5>
								  </div>
							</div>
						  </div>
					</div>
				</div>
				<?php
				$i++;
				}
				?>
				
		</div>
	</div>
</div>
<?php 
}
	  if (isset ($_POST['search_market'])){
		   $searchq = $_POST['search_market'];
		?>
		<div class="row" style="background-color:#337AB7;height:250px;">
		<img src="image/dets.jpg" class="img img-responsive img-thumbnail;" style="#;"/>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
				
				$rows=SelectAllWhere('market_info','market_name',"'$searchq'");
				
				foreach($rows as $row)
				{
					extract($row);
					$image = explode('../',$market_image);
					$main_image = end($image);
				?>
					<div class="row">
						<div class="col-md-3">
							<img src="<?php 
								if(empty($market_image))
								{echo "upload/not_available.jpg";}
								else 
								{echo $main_image;}?>" class="img img-responsive img-thumbnail"/>
						</div>
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h2 class="text-danger">
									 <?php echo $market_name;?>
								  </h2>
								</div>
								  <div class="panel-body">
									  <h5 style="color:blue;"></h5>
									  <h5 style="color:blue;"><strong>Market Address: <?php echo $market_addres;?></strong></h5>
									  <h5 style="color:red;"><strong>Contact No:<?php echo $market_contact;?></strong></h5>
									  <h5><strong>Market Close Day: <?php echo $market_cloose_day;?></strong></h5>
									  <a class="btn btn-primary" href="details.php?id=<?php echo $market_id;?>&u=ms"> View All Shop</a>
								  </div>
							</div>
						  </div>
					</div>
				</div>
				<?php
				}
				?>
				
		</div>
	</div>
</div>
<?php 
}
 if (isset ($_POST['search_shop'])){
		   $searchq = $_POST['search_shop'];
		?>
		<div class="row" style="background-color:#337AB7;height:250px;">
		<img src="image/dets.jpg" class="img img-responsive img-thumbnail;" style="#;"/>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
				
				$rows=SelectAllWhere('shop_info','shop_name',"'$searchq'");
				
				foreach($rows as $row)
				{
					extract($row);
					$image = explode('../',$shop_image);
					$main_image = end($image);
				?>
					<div class="row">
						<div class="col-md-3">
							<img src="<?php 
								if(empty($shop_image))
								{echo "upload/not_available.jpg";}
								else 
								{echo $main_image;}?>" class="img img-responsive img-thumbnail"/>
						</div>
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h3 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne" style="color:skyblue">
									 <?php echo $shop_name;?>
									</a>
								  </h3>
								</div>
								  <div class="panel-body">
									  <h5 style="color:blue;"><strong>Shop Name: <?php
										echo $shop_name;
									  ?></h5>
									  <h5 style="color:blue;"><strong>Shop Owner: <?php echo $shop_owner;?></strong></h5>
									  <h5 style="color:red;"><strong>Shop no:<?php echo $shop_no;?></strong></h5>
									  <h5><strong>Shop floor: <?php echo $shop_floor;?></strong></h5>
									  <h5><strong>Shop description: <?php echo $shop_desc;?></strong></h5>
									  <h5><strong>Shop contact: <?php echo $shop_contact;?></strong></h5>
								  </div>
							</div>
						  </div>
					</div>
				</div>
				<?php
				}
				?>
				
		</div>
	</div>
</div>
<?php 
}
	include('footer.php');
	
?>
</div>

</body>
</html>

