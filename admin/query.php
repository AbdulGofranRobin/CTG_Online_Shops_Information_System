<?php
    ///Admin login.......
	session_start();
	include('inc/functions.php');
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query=mysql_query("select * from admin_info where username='$username' AND password='$password'");
		$row=mysql_num_rows($query);
		if($row>0)
		{
			$_SESSION['username']=$username;
			header('Location:dashboard.php');
		}
		else
		{
			$msg="User Name or password is wrong!!";
			header('Location:index.php?error='.$msg);
		}
	}
	///Admin settings......
	if(isset($_POST['settings']))
	{
		$user_name=$_POST['user_name'];
		$new_pass=$_POST['new_pass'];
		$new_confirm_pass=$_POST['new_confirm_pass'];
		if($new_pass!=$new_confirm_pass)
		{
			$error = "Password not matched";
			header('location:settings.php?msg='.$error);
		}
		else
		{
			$query=mysql_query("UPDATE admin_info SET username='$user_name',password='$new_pass' where username='$user_name'") or die(mysql_error());
			if($query)
			{
				$success="successfully Updated";
				header('location:logout.php?msg='.$success);
			}
		}
	}
	///ADD Category Insert......
	if(isset($_POST['cat_info']))
	{
		$cat_name=$_POST['cat_name'];
		$cat_desc=$_POST['cat_desc'];
		
		$cat_image = uploadMe(
			$_FILES['cat_image'], 
			$supported_ext = array('jpg','jpeg','png'), 
			$upload_dir = '../upload'
			);	
			
        $query=mysql_query("INSERT into cat_info(cat_name,cat_desc,cat_image) values('$cat_name','$cat_desc','$cat_image')") or die(mysql_error());     	
		if($query)
		{
			$success="successfully inserted";
			header('location:add_cat.php?msg='.$success);
		}
		else
		{
			$error = "Not Inserted!";
			header('location:add_cat.php?msg='.$error);
			
		}
	}
	///Market Category Insert.......
	if(isset($_POST['market_info']))
	{
		$market_name=$_POST['market_name'];
		$market_address=$_POST['market_address'];
		$market_contact=$_POST['market_contact'];
		$close_day=$_POST['close_day'];
		
		
		$market_image = uploadMe(
			$_FILES['market_image'], 
			$supported_ext = array('jpg','jpeg','png'), 
			$upload_dir = '../upload'
			);	
		
		$query=mysql_query("INSERT into market_info(market_name,market_addres,market_image,market_contact,market_cloose_day) values('$market_name','$market_address','$market_image','$market_contact','$close_day')") or die(mysql_error());
		
		
		if($query)
		{
			$success="successfully inserted";
			header('location:add_market.php?msg='.$success);
		}
		else
		{
			$error = "Not Inserted!";
			header('location:add_market.php?msg='.$error);
			
		}
	}
	///Shop Category Insert.......
	if(isset($_POST['shop_info']))
	{
		$cat_name=$_POST['cat_name'];
		$market_name=$_POST['market_name'];
		$shop_name=$_POST['shop_name'];
		$shop_owner=$_POST['shop_owner'];
		$shop_no=$_POST['shop_no'];
		$shop_desc=$_POST['shop_desc'];
		$shop_floor=$_POST['shop_floor'];
		$shop_contact=$_POST['shop_contact'];
		$approve=1;
		
		$shop_image= uploadMe(
			$_FILES['shop_image'], 
			$supported_ext = array('jpg','jpeg','png'), 
			$upload_dir = '../upload'
			);
		
		$query=mysql_query("INSERT into shop_info(cat_id,market_id,shop_name,shop_owner,shop_no,shop_floor,shop_desc,shop_contact,shop_image,approve) values('$cat_name','$market_name','$shop_name','$shop_owner','$shop_no','$shop_floor','$shop_desc','$shop_contact','$shop_image','$approve')")or die(mysql_error());
		
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
	///category edit.......
	if(isset($_POST['edit_cat']))
	{
		$cat_id=$_POST['cat_id'];
		$cat_name=$_POST['cat_name'];
		$cat_desc=$_POST['cat_desc'];
		
		$query=mysql_query("UPDATE cat_info SET cat_name='$cat_name',cat_desc='$cat_desc'where cat_id='$cat_id'") or die(mysql_error());
		
		if($query)
		{
			$success="successfully Updated";
			header('location:view_cat.php?msg='.$success);
		}
		else
		{
			$error = "Not Updated!";
			header('location:view_cat.php?msg='.$error);
			
		}
	}
	///Market edit........
	if(isset($_POST['edit_market']))
	{
		$market_id=$_POST['market_id'];
		$market_name=$_POST['market_name'];
		$market_address=$_POST['market_address'];
		$market_contact=$_POST['market_contact'];
		$close_day=$_POST['close_day'];
	
		$query=mysql_query("UPDATE market_info SET market_name='$market_name',market_addres='$market_address',market_contact='$market_contact',market_cloose_day='$close_day' where market_id='$market_id'") or die(mysql_error());
		
		if($query)
		{
			$success="successfully Updated";
			header('location:view_market.php?msg='.$success);
		}
		else
		{
			$error = "Not Updated!";
			header('location:view_market.php?msg='.$error);
			
		}
	}
	///shop edit........
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
