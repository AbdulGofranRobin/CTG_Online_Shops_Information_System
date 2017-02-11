<?php
	$active=2;
	include('header.php');
	include('admin/inc/functions.php');
?>

<div class="container-fluid">
	<div class="row" style="background-image:url('image/banner_16.jpg'); height:500px;">
	    <div class="navbar navbar-inverse navbar-fixed-top">
		   <div class="container">
			  <div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand hidden-xs" href="index.php">CompAny</a>
				 <a class="navbar-brand visible-xs" href="index.php">C</a>
				 </form>
			  </div>
			  <div class="navbar-collapse collapse">
				 <ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" style="font-weight:bold;">Home</a></li>
					<li><a href="browse_market.php" style="font-weight:bold;">Browse Market</a></li>
					<li class="active"><a href="browse_shop.php" style="font-weight:bold;">Browse Shop</a></li>
				 </ul>
			  </div>
			  <!--/.navbar-collapse -->
		   </div>
		</div>
		<div class="col-md-12">
		  <form action="search.php" method="POST" class="navbar-form navbar-left" role="search" style="margin:10% 30% 10% 30%">
			<div class="input-group">
			    <input type="text" name="search_shop" id="keyword" class="form-control" placeholder="Search by Shop" style="width:400px;height:50px;">
			   <div class="input-group-btn">
				  <button type="submit" class="btn btn-default"  style="height:50px;"><span class="glyphicon glyphicon-search"></span></button>
			   </div>
			</div>
		 </form>
		</div>
	</div>
</div>

	<!--main Content Start-->
<div class="container">
	<div class="row">
	    <div class="col-md-8">
			<div class="row">
	        <center><h1 class="text-primary"><strong>SHOP'S DETAILS</strong></h1></center>
			<p>A new online system named “The Online Shops Details”. This project is a web based shops system for an existing shop. This process whereby consumers directly information goods or services from in real-time. This project is an attempt to provide the advantages of online shopping to customers of a real shop. The customer will get the service of helps buying the products in the shops anywhere through internet by using a web device. And Online Shops Details application enables vendors to set up online shops, customers to browse through the shops, and a system administrator to approve and reject requests for new shops and maintain lists of shop categories.</p>	
			</div>
	    
			<div class="row"><h3 style="color:black;"><strong>Shops Categories</strong></h3></div>
			<div class="row">
			<?php
				$rows=SelectAllWhereTwo('shop_info','del_status','approve',0,1);
				foreach($rows as $row)
				{
					extract($row);
			?>
				<div class="col-md-4">
				
				<?php 
					if(!empty($shop_image))
					{
						$image = explode('../',$shop_image);
						$main_image = end($image);
						?>
						<img class="img img-thumbnail img-responsive" src="<?php echo $main_image;?>" alt="" />
					<?php
					}
					else
					{ 
				   ?>
						<img class="img img-thumbnail img-responsive" src="upload/not_available.jpg" alt="" />
				   <?php	
					}
				   ?>
					<h3><a href="details.php?id=<?php echo $shop_id;?>&u=s"><?php echo $shop_name;?></a></h3>
					<p><?php echo $shop_desc;?></p>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="col-md-4 ">
			<h3><strong>Market Add</strong></h3>
			<img src="image/shp (2).jpg" class="img img-responsive img-thumbnail;" style="#;"/>
			<p><strong>Wal-Mart Digital Photo Center:Store:T-shirts. Close. Back to Walmart.com. New Customer? Start Here...</strong></p>
		</div>
		<div class="col-md-4">
			<img src="image/shp (1).jpg" class="img img-responsive img-thumbnail;" style="#;"/>
			<p><strong>Wal-Mart Digital Photo Center:Store:T-shirts. Close. Back to Walmart.com. New Customer? Start Here...</strong></p>
		</div>
			<?php
				if(isset($_GET['error']))
				{
					echo $_GET['error'];
				}
			?>
	</div>
	<!-- Main Content End-->
	</div>
	<?php
	include('footer.php');
	?>		
	<script type="text/javascript">
		$(function() {
		$( "#keyword" ).autocomplete({
			source: 'autocomplete_shop.php'
		});
	});
</script>