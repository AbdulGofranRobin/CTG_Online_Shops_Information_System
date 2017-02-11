<?php
	include('connection.php');
	function SelectAll($table)
	{
		$query="SELECT * from $table";
		$select=mysql_query($query) or die(mysql_error());
		$result = Array();
		while($row = mysql_fetch_assoc($select)){
			$result[] = $row; 
		}
		return $result;
	}
	////
	function SelectAllWhere($table,$where,$value)
	{
		$query="SELECT * from $table where $where=$value";
		$select=mysql_query($query) or die(mysql_error());
		$result = Array();
		while($row = mysql_fetch_assoc($select)){
			$result[] = $row; 
		}
		return $result;
	}
	////
	function SelectAllWhereTwo($table,$where1,$where2,$value1,$value2)
	{
		$query="SELECT * from $table where $where1=$value1 and $where2=$value2";
		$select=mysql_query($query) or die(mysql_error());
		$result = Array();
		while($row = mysql_fetch_assoc($select)){
			$result[] = $row; 
		}
		return $result;
	}
	///Market upload image
		
	function uploadMe($fieldname, $supported_ext = array('jpg','jpeg','png'), $upload_dir = '../upload'){

		
		$name 	= $fieldname['name'];
		$type 	= $fieldname['type'];
		$tmp 	= $fieldname['tmp_name'];
		$size 	= $fieldname['size'];
		$error 	= $fieldname['error'];
		
		
		$x = explode('.',$name);		
		$ext = strtolower(end($x));		
		$final_name = time()."_".uniqid()."_".$name;
		
		@mkdir($upload_dir,0775,true);
		
		$problems = array();
		if(empty($problems)){
			$fullpath = $upload_dir."/".$final_name;
			if(move_uploaded_file($tmp,$fullpath)){
				return $fullpath;
			}
		}
		
		return false;
	}

?>