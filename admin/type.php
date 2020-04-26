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
		$a=$_POST['type_name'];
		
		$sql = "insert into type(type_name) values ('$a')";
			
		if(mysqli_query($conn,$sql))
		{
				
			echo "<script>alert('Submittied...'); window.location='add_type.php';</script>";
		}
		else
		{
			echo "<script>alert('Not Submited..'); window.location='add_type.php';</script>";
		}
	
	
	
	 ?>