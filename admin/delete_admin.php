<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_admin.php';</script>";
}
else
{
	$q="delete from admin where admin_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('Admin Deleted Successfully'); window.location='manage_admin.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_admin.php';</script>";
	}
}
?>




