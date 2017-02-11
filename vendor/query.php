<?php
/////shop Add
	session_start();
	include('inc/functions.php');
	if(isset($_POST['shop_info']))
	{
		$cat_name=$_POST['cat_name'];
		$market_name=$_POST['market_name'];
		$vendor_id=$_SESSION['vendor_id'];
		$shop_name=$_POST['shop_name'];
		$shop_owner=$_POST['shop_owner'];
		$shop_no=$_POST['shop_no'];
		$shop_desc=$_POST['shop_desc'];
		$shop_floor=$_POST['shop_floor'];
		$shop_contact=$_POST['shop_contact'];
		$approve=0;
		
		$shop_image= uploadMe(
			$_FILES['shop_image'], 
			$supported_ext = array('jpg','jpeg','png'), 
			$upload_dir = '../upload'
			);
		
		$query=mysql_query("INSERT into shop_info(cat_id,vendor_id,market_id,shop_name,shop_owner,shop_no,shop_floor,shop_desc,shop_contact,shop_image,approve) values('$cat_name','$vendor_id','$market_name','$shop_name','$shop_owner','$shop_no','$shop_floor','$shop_desc','$shop_contact','$shop_image','$approve')")or die(mysql_error());
		
		if($query)
		{
			$success="successfully inserted";
			header('location:add_shop.php?msg='.$success);
		}
		else
		{
			$error = "Not Inserted!";
			header('location:add_shop.php?msg='.$error);
			
		}
	}

	/////shop edit
	if(isset($_POST['edit_shop']))
	{
		$shop_id=$_POST['shop_id'];
		$cat_name=$_POST['cat_name'];
		$market_name=$_POST['market_name'];
		$shop_name=$_POST['shop_name'];
		$shop_owner=$_POST['shop_owner'];
		$shop_no=$_POST['shop_no'];
		$shop_desc=$_POST['shop_desc'];
		$shop_floor=$_POST['shop_floor'];
		$shop_contact=$_POST['shop_contact'];
		// $approve=1;
		
		$query=mysql_query("UPDATE shop_info SET cat_id='$cat_name',market_id='$market_name',shop_name='$shop_name',shop_owner='$shop_owner',shop_no='$shop_no',shop_desc='$shop_desc',shop_floor='$shop_floor',shop_contact='$shop_contact' where shop_id='$shop_id'") or die(mysql_error());
		
		if($query)
		{
			$success="successfully Updated";
			header('location:view_shop.php?msg='.$success);
		}
		else
		{
			$error = "Not Updated!";
			header('location:view_shop.php?msg='.$error);
			
		}
	}
?>
