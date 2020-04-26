<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_status.php';</script>";
}
else
{
	$q="delete from status where status_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('status Deleted Successfully'); window.location='manage_status.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_status.php';</script>";
	}
}
?>




