<?php
   ///vendor sign up.......
	session_start();
	include('connection.php');
	if(isset($_POST['login']))
	{
		$vendor_email=$_POST['vendor_email'];
		$vendor_pass=$_POST['vendor_pass'];
		$query=mysql_query("select * from vendor_info where vendor_email='$vendor_email' AND vendor_password='$vendor_pass' AND status='0'") or die(mysql_error());
		$row=mysql_num_rows($query);
		if($row>0)
		{
			$data=mysql_fetch_assoc($query);
			
			$_SESSION['vendor_email']=$data['vendor_email'];
			$_SESSION['vendor_id']=$data['vendor_id'];
			header('Location:vendor/index.php');
		}
		else
		{
			$msg="User Name or password is wrong!!";
			header('Location:index.php?error='.$msg);
		}
	}
	///vendor sign up.......
	if(isset($_POST['signup']))
	{
		$full_name=$_POST['full_name'];
		$v_email=$_POST['v_email'];
		$v_mobile=$_POST['v_mobile'];
		$v_pass=$_POST['v_pass'];
		$v_confirm_pass=$_POST['v_confirm_pass'];
		
		if($v_pass==$v_confirm_pass)
		{
			$query="INSERT into vendor_info(vendor_name,vendor_email,vendor_mobile,vendor_password) values('$full_name','$v_email','$v_mobile','$v_pass')";
			$insert=mysql_query($query);
			if($insert)
			{
				$success = "Successfully Inserted";
				header('location:vendor/index.php?msg='.$success);
			}
			else
			{
				$error = "Not Inserted!";
				header('location:index.php?msg='.$error);
			}
		}
		else{
			$error = "Password Not Match!";
			header('location:index.php?msg='.$error);
		}
		
	}
	
	
?>