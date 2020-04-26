<?php require 'header_files.php'; ?>
<script src="js/data.js">
</script>

<?php
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['aname'];
	$b=$_REQUEST['amail'];
	$c=$_REQUEST['apswd'];
	$m=0;
	
	
	$z="select * from admin where admin_email='$b'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$result="Email ID Already Exist!!!";
		$m=1;
	}
	if($m==0)
	{
		$q="insert into admin(admin_name,admin_pswd,admin_email,time)values('$a','$c','$b',NOW())";
	
		if($conn->query($q))
		{
			$result="Admin Inserted Successfully";
		}
		else
		{
			$result="Try Again";
		}
	}
}
?>

<body style="min-height:100px; padding-top:20px; background-color:RGB(248,248,248)">
	<div id="wrapper">
		<!-- Navigation -->
		<?php require 'menu.php'; ?>
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header"><span class="fa fa-user" aria-hidden="true" hspace="10x"></span>Add Admin</h1>
					</div>
				</div>
				<!-- ... Your content goes here ... -->
				<p style="color:blue;">
					<?php echo $result; ?>
				</p>
				<form name="admin" method="post" onsubmit="return(f1());">			
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="aname" required class="form-control">
					</div>				
					<div class="form-group">
						<label>Email ID</label>
						<input type="email" name="amail" required class="form-control">
					</div>				
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="apswd" required class="form-control">
					</div>				
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="acpswd" required class="form-control">
					</div>				
					<input type="submit" name="sub" value="Submit" class="btn btn-primary">			
				</form>			
				<!-- ... Your content goes here ... -->			
			</div>
		</div>
	</div>

</body>
</html>
