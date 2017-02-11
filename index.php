<?php
	include('header.php');
	include('admin/inc/functions.php');
?>

<div class="container-fluid">
	<div class="row" style="background-image:url('image/slider1.jpg'); height:500px;">
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
					<li class="active"><a href="index.php" style="font-weight:bold;">Home</a></li>
					<li <?php if(isset($active)){if($active==1){ echo "class='active'";}}?>><a href="browse_market.php" style="font-weight:bold;">Browse Market</a></li>
					<li <?php if(isset($active)){if($active==2){ echo "class='active'";}}?>><a href="browse_shop.php" style="font-weight:bold;">Browse Shop</a></li>
				 </ul>
			  </div>
			  <!--/.navbar-collapse -->
		   </div>
		</div>
		<div class="col-md-12">
		 <form action="search.php" method="POST" class="navbar-form navbar-left" role="search" style="margin:10% 30% 10% 30%">
			<div class="input-group">
			   <input type="text" class="form-control" name="search_cat" id="keyword" placeholder="Search By Category" style="width:400px;height:50px;padding-right: 70px;;">
			   <div class="input-group-btn">
				  <button type="submit" class="btn btn-default"  style="height:50px;width:100px;"><span class="glyphicon glyphicon-search"></span></button>
			   </div>
			</div>
		 </form>
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
	        <center><h1 class="text-primary"><strong>CHITTAGONG SHOP DETAILS</strong></h1></center>
			<p style="line-height:25px;font-size:15px;">A new online system named “The Online Shops Details”. This project is a web based shops system for an existing shop. This process whereby consumers directly information goods or services from in real-time. This project is an attempt to provide the advantages of online shopping to customers of a real shop. The customer will get the service of helps buying the products in the shops anywhere through internet by using a web device. And Online Shops Details application enables vendors to set up online shops, customers to browse through the shops, and a system administrator to approve and reject requests for new shops and maintain lists of shop categories</p>	
			</div>
	    
			<div class="row"><h2 style="color:black;"><strong>Categories</strong></h2></div>
			<div class="row">
			<?php
				$rows=SelectAllWhere('cat_info','del_status',0);
				foreach($rows as $row)
				{
					extract($row);
			?>
				<div class="col-md-3 well" id="box">
				<?php 
					if(!empty($cat_image))
					{
						$image = explode('../',$cat_image);
						$main_image = end($image);
						?>
						<img class="img img-responsive" src="<?php echo $main_image;?>" alt="" />
					<?php
					}
					else
					{ 
				   ?>
						<img class="img img-responsive" src="upload/not_available.jpg" alt="" />
				   <?php	
					}
				   ?>
					<h4><a href="details.php?id=<?php echo $cat_id;?>&u=c"><?php echo $cat_name;?></a></h4>
				</div>
				<?php
				}
				?>
			</div>
			
			<div class="row"><h2 style="color:black;"><strong>Market</strong></h2></div>
			<div class="row">
			<?php
				$rows=SelectAllWhere('market_info','del_status',0);
				foreach($rows as $row)
				{
					extract($row);
			?>
				<div class="col-md-3 well" id="box">
					<a href="details.php?id=<?php echo $market_id;?>&u=m">
					<?php 
					if(!empty($market_image))
					{
						$image = explode('../',$market_image);
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
					<h3><?php echo $market_name;?></h3></a>
				  </div>
				  <?php
				   }
				  ?>
			</div>
			
			<div class="row"><h2 style="color:black;"><strong>Shops</strong></h2></div>
			<div class="row">
			<?php
				$rows=SelectAllWhereTwo('shop_info','del_status','approve',0,1);
				foreach($rows as $row)
				{
					extract($row);
			?>
				<div class="col-md-3 well" id="box">
				
				<?php 
					if(!empty($shop_image))
					{
						$image = explode('../',$shop_image);
						$main_image = end($image);
						?>
						<img class="img img-responsive" src="<?php echo $main_image;?>" alt="" />
					<?php
					}
					else
					{ 
				   ?>
						<img class="img img-responsive" src="upload/not_available.jpg" alt="" />
				   <?php	
					}
				   ?>
					<h3><a href="details.php?id=<?php echo $shop_id;?>&u=s"><?php echo $shop_name;?></a></h3>
					
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="col-md-4 well">
		<img src="image/vendor.jpg" class="img img-responsive img-thumbnail;"/>
		 <h1 class="text-center login-title" style="color:blue;"><i class="fa fa-unlock-alt"><strong > Log in</strong><h2>Please login or Resister</h2> </i></h1>
			<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
				<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
					<li role="presentation" class="active">
						<a href="#login" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Login</a>
					</li> 
					<li role="presentation" class="">
						<a href="#signup" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Signup</a>
					</li>
				</ul> 
				<div id="myTabContent" class="tab-content"> 
					<div role="tabpanel" class="tab-pane fade active in" id="login" aria-labelledby="home-tab"> 
						<form action="query.php" method="POST">
						  <div class="form-group">
							<label for="vendor_email">Email address</label>
							<input type="email" class="form-control" id="vendor_email" name="vendor_email" placeholder="Email">
						  </div>
						  <div class="form-group">
							<label for="vendor_pass">Password</label>
							<input type="password" class="form-control" id="vendor_pass" name="vendor_pass" placeholder="Password">
						  </div>
						  <button type="submit" class="btn btn-default" name="login">Submit</button>
						</form> 
					</div> 
					<div role="tabpanel" class="tab-pane fade" id="signup" aria-labelledby="profile-tab"> 
						<form action="query.php" method="POST">
						  <div class="form-group">
							<label for="full_name">Full Name</label>
							<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
						  </div>
						  <div class="form-group">
							<label for="v_email">Email</label>
							<input type="email" class="form-control" id="v_email" name="v_email" placeholder="Enter Email">
						  </div>
						  <div class="form-group">
							<label for="v_mobile">Mobile</label>
							<input type="text" class="form-control" id="v_mobile" name="v_mobile" placeholder="Enter Mobile No" required>
						  </div>
						  <div class="form-group">
							<label for="v_pass">Password</label>
							<input type="password" class="form-control" id="v_pass" name="v_pass" placeholder="Password" pattern=".{6,}" required title="6 characters minimum">
						  </div>
						  <div class="form-group">
							<label for="v_confirm_pass">Confirm Password</label>
							<input type="password" class="form-control" id="v_confirm_pass" name="v_confirm_pass" placeholder="Confirm Password" pattern=".{6,}" required title="6 characters minimum">
						  </div>
						  <input type="submit" name="signup" class="btn btn-default" value="Sign Up"/>
						</form>
					</div> 
				</div> 
			</div>
		</div>
		
		<div class="col-md-4">
		<h3 style="color:#002147"><strong>Shops Add</strong></h3>
			<img src="image/add (1).jpg" class="img img-responsive img-thumbnail;" style="#;"/>
		</div>
		<div class="col-md-4">
			<img src="image/add (2).jpg" class="img img-responsive img-thumbnail;" style="#;"/>
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
			source: 'autocomplete.php'
		});
	});
</script>