<?php
$conn=new mysqli("localhost","root","","realstate");
if($conn->connect_error)
{
		echo "DB Not Connected";
}
else
{
	//echo "DB Connected";
}
    $a= $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['subject'];
    $d= $_POST['msg'];


$sql = "insert into contact(name,email,subject,msg,time) values ('$a','$b','$c','$d',NOW())";

if(mysqli_query($conn,$sql))
{
    
    echo "<script>alert('Thanks For Your Response...'); window.location='index.php';</script>";
}
else
{
    echo "<script>alert('Query Not Submited'); window.location='index.php';</script>";
}



 ?>