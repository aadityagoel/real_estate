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
		$a=$_POST['bhk_number'];
		
		$sql = "insert into bhk(bhk_number) values ('$a')";
			
		if(mysqli_query($conn,$sql))
		{
				
			echo "<script>alert('Submittied...'); window.location='add_bhk.php';</script>";
		}
		else
		{
			echo "<script>alert('Not Submited..'); window.location='add_bhk.php';</script>";
		}
	
	
	
	 ?>