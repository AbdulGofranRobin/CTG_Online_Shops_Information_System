<?php
include('admin/inc/functions.php');
$search = $_GET['term'];
$query="SELECT * from cat_info where cat_name LIKE '%$search%'";
$select=mysql_query($query) or die(mysql_error());
		$result = Array();
		$data = Array();
		while($row = mysql_fetch_assoc($select)){
			$result[] = $row; 
		}
		foreach($result as $row)
		{
			extract($row);
			$data[]=$cat_name;
		}
// echo json_encode($result);
// $data=array('hello','hoi','test','wer');
echo json_encode($data);
?>