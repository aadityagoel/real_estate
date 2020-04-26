<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_location.php';</script>";
}
else
{
	$q="delete from city where city_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('City Deleted Successfully'); window.location='manage_city.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_location.php';</script>";
	}
}
?>




