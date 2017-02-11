<?php
//Deleted shop insert
	include('inc/functions.php');
	
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