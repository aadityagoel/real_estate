<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_bhk.php';</script>";
}
else
{
	$q="delete from BHK where bhk_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('BHK Deleted Successfully'); window.location='manage_bhk.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_bhk.php';</script>";
	}
}
?>




