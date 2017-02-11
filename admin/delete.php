<?php
//Deleted Cat insert
	include('inc/functions.php');
	if(isset($_GET['catid']))
	{
		$cat_id=$_GET['catid'];
		$query=mysql_query("UPDATE cat_info SET del_status='1' where cat_id='$cat_id'") or die(mysql_error());
		
		if($query)
		{
			$success="successfully Deleted";
			header('location:view_cat.php?msg='.$success);
		}
		else
		{
			$error = "Not Deleted!";
			header('location:view_cat.php?msg='.$error);
			
		}
	}
	//Deleted Market insert
	if(isset($_GET['marketid']))
	{
		$market_id=$_GET['marketid'];
		$query=mysql_query("UPDATE market_info SET del_status='1' where market_id='$market_id'") or die(mysql_error());
		
		if($query)
		{
			$success="successfully Deleted";
			header('location:view_market.php?msg='.$success);
		}
		else
		{
			$error = "Not Deleted!";
			header('location:view_market.php?msg='.$error);
			
		}
	}
	//Deleted shop insert
	if(isset($_GET['shopid']))
	{
		$shop_id=$_GET['shopid'];
		$query=mysql_query("UPDATE shop_info SET del_status='1' where shop_id='$shop_id'") or die(mysql_error());
		
		if($query)
		{
			$success="successfully Deleted";
			header('location:view_shop.php?msg='.$success);
		}
		else
		{
			$error = "Not Deleted!";
			header('location:view_shop.php?msg='.$error);
			
		}
	}
?>