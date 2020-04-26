<?php
error_reporting('ERROR');
require "connection.php";
session_start();
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['email'];
	$b=$_REQUEST['pswd'];
	$m=0;
	
	$q="select * from admin where admin_email='$a' and admin_pswd='$b'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
		$_SESSION['aname']=$r['admin_name'];
		$_SESSION['aid']=$r['admin_id'];
		header("location:main.php");
		$m=1;
	}
	if($m==0)
	{
		$result="Wrong Email ID or Password !!!";
	}
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/styles.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body style="min-height:100px; padding-top:20px; background-color:RGB(248,248,248)">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<h1 class="text-center login-title">Welcome to Admin Panel</h1>
				<div class="account-wall shade">
					<img class="profile-img" src="images/profile.png">  
				<p align="center" style="color:red;"> 
					<?php echo $result; ?> 
				</p>					
					<form class="form-signin">
						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Email" required >
						</div>
						<div class="form-group">
							<input type="password" name="pswd" class="form-control" placeholder="Password" required>
						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="sub">Sign in</button><span class="clearfix"></span>
					</form>
				</div>    
				</div>
			</div>
		</div>
		<!-- content end -->
	</div>
</body>
</html>
