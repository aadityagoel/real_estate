<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_property.php';</script>";
}
else
{
	$q="delete from property where property_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('Property Deleted Successfully'); window.location='manage_property.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_property.php';</script>";
	}
}
?>




