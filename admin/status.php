<?php
	$conn=new mysqli("localhost","root","","realstate2");
	if($conn->connect_error)
	{
			echo "DB Not Connected";
	}
	else
	{
		//echo "DB Connected";
	}
		$a=$_POST['status_name'];
		
		$sql = "insert into status(status_name) values ('$a')";
			
		if(mysqli_query($conn,$sql))
		{
				
			echo "<script>alert('Submittied...'); window.location='add_status.php';</script>";
		}
		else
		{
			echo "<script>alert('Not Submited..'); window.location='add_status.php';</script>";
		}
	
	
	
	 ?>