<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_status.php';</script>";
}
else
{
	$q="delete from type where type_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('Type Deleted Successfully'); window.location='manage_type.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_type.php';</script>";
	}
}
?>




