
<?php require 'header_files.php'; ?>
<script src="js/pswd.js"></script>
<body style="min-height:100px; padding-top:20px; background-color:RGB(248,248,248)">

<div id="wrapper">

    <!-- Navigation -->
<?php require 'menu.php'; ?>
	
<?php
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['cpswd'];
	$b=$_REQUEST['npswd'];
	$c=$_SESSION['aid'];
	$m=0;
	
	$q="select * from admin where admin_pswd='$a' and admin_id='$c'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
		$z="update admin set admin_pswd='$b' where admin_id='$c'";
		if($conn->query($z))
		{
			$result="Password Updated Successfully";
		}
		else
		{
			$result="Try Again";
		}
		$m=1;
	}
	if($m==0)
	{
		$result="Password doesn't matched with the current password";
	}
}
?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Settings</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			
			<p style="color:green;">
				<?php echo $result; ?>
			</p>
			
			<form name="admin" method="post" onsubmit="return(f1());">
				
				<div class="form-group">
					<label>Current Password</label>
					<input type="password" name="cpswd" required class="form-control">
				</div>
				
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="npswd" required class="form-control">
				</div>
				
				<div class="form-group">
					<label>Re-Enter New Password</label>
					<input type="password" name="rpswd" required class="form-control">
				</div>
				
				<input type="submit" name="sub" value="Submit" class="btn btn-primary">
			</form>
			
			<!-- ... Your content goes here ... -->
			
        </div>
    </div>

</div>



</body>
</html>
