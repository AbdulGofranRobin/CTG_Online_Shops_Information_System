<?php
//Deleted Cat insert
	include('inc/functions.php');
	if(isset($_GET['shopid']))
	{
		$shop_id=$_GET['shopid'];
		$query=mysql_query("UPDATE shop_info SET approve='1' where shop_id='$shop_id'") or die(mysql_error());
		
		if($query)
		{
			$success="Approved Successfully";
			header('location:view_shop.php?msg='.$success);
		}
		else
		{
			$error = "Not Deleted!";
			header('location:view_shop.php?msg='.$error);
			
		}
	}
	//Deactivate vendor
	if(isset($_GET['vdid']))
	{
		$vendor_id=$_GET['vdid'];
		$query=mysql_query("UPDATE vendor_info SET status='1' where vendor_id='$vendor_id'") or die(mysql_error());
		
		if($query)
		{
			$success="Deactivate Successfully";
			header('location:view_vendor.php?msg='.$success);
		}
		else
		{
			$error = "Operation Failed!";
			header('location:view_vendor.php?msg='.$error);
			
		}
	}
	//activate vendor
	if(isset($_GET['vaid']))
	{
		$vendor_id=$_GET['vaid'];
		$query=mysql_query("UPDATE vendor_info SET status='0' where vendor_id='$vendor_id'") or die(mysql_error());
		
		if($query)
		{
			$success="Activate Successfully";
			header('location:view_vendor.php?msg='.$success);
		}
		else
		{
			$error = "Operation Failed!";
			header('location:view_vendor.php?msg='.$error);
			
		}
	}
?>