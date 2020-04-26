<?php
$conn=new mysqli("localhost:3307","root","","realstate2");
if($conn->connect_error)
{
		echo "DB Not Connected";
}
else
{
	//echo "DB Connected";
}
?>