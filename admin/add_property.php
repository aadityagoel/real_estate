<?php require 'header_files.php'; ?>
<?php
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{

	$a=$_POST['status'];
	$b=$_POST['type'];
	$c=$_POST['bhk'];
	$d=$_POST['city'];
	$e=$_POST['p_name'];
	$f=$_POST['p_desc'];
	$g=$_FILES['p_img']['name'];
	
	//upload code start	
	$allowedExtsimg = array("jpg","jpeg","png","JPEG","JPG");
	$b_ext = strtolower(pathinfo($g, PATHINFO_EXTENSION));
	//upload code end

	$m=0;
	if(in_array($b_ext, $allowedExtsimg)) 
	{
		$z="select * from property where p_name='$e'";
		$chk=$conn->query($z);
		while($r=$chk->fetch_assoc())
		{
			$result="<script>alert(' Property Name Already Exist!!!.'); window.location='add_property.php';</script>";

			$m=1;
		}
		if($m==0)
			{
				$q = "insert into property(status_name,type_name,bhk_number,city_name,p_name,p_desc,p_img) values ('$a','$b','$c','$d','$e','$f','$g')";
				
				if($conn->query($q))
				{
					move_uploaded_file($_FILES['p_img']['tmp_name'],"upload_image/".$g);
					$result="<script>alert(' Property Submittied...'); window.location='add_property.php';</script>";
				}
				
				else
				{
					$result="<script>alert(' Try Again...'); window.location='add_property.php';</script>";
				}
		
			}
		
	}
	else
	{
		$result= "Please Upload Valid Type of File <br> File Extension: jpg,jpeg,png<br>";
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
						<h1 class="page-header">Add Property</h1>
					</div>
				</div>
				<p style="color:blue;">
					<?php echo $result; ?>
				</p>
				<!-- ... Your content goes here ... -->
							
				<form action="#" name="user" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<!-- <label>Property Status</label> -->
						<div class="form-group">
							<label>Property Status</label>
							<select name="status">
								<?php
									$q="select * from status";
									$chk=$conn->query($q);
									while($r=$chk->fetch_assoc())
									{
									?>
										<option value="<?php echo  $r['status_name']; ?>">
											<?php echo  $r['status_name']; ?>
										</option>
									<?php
									}
									?>
							</select>						
						</div>
					</div>
					<div class="form-group">
						<!-- <label>Property Type</label> -->
						<div class="form-group">
							<label>Property Type</label>
							<select name="type">
								<?php
									$q="select * from type";
									$chk=$conn->query($q);
									while($r=$chk->fetch_assoc())
									{
									?>
										<option value="<?php echo  $r['type_name']; ?>">
											<?php echo  $r['type_name']; ?>
										</option>
									<?php
									}
									?>
							</select>						
						</div>
					</div>
					<div class="form-group">
						<!-- <label>Property BHK</label> -->
						<div class="form-group">
							<label>Property BHK</label>
							<select name="bhk">
								<?php
									$q="select * from bhk";
									$chk=$conn->query($q);
									while($r=$chk->fetch_assoc())
									{
									?>
										<option value="<?php echo  $r['bhk_number']; ?>">
											<?php echo  $r['bhk_number']; ?>
										</option>
									<?php
									}
									?>
							</select>						
						</div>
					</div>	
					<div class="form-group">
						<!-- <label>Property Locaion</label> -->
						<div class="form-group">
							<label>Property Locaion</label>
							<select name="city">
								<?php
									$q="select * from city";
									$chk=$conn->query($q);
									while($r=$chk->fetch_assoc())
									{
									?>
										<option value="<?php echo  $r['city_name']; ?>">
											<?php echo  $r['city_name']; ?>
										</option>
									<?php
									}
									?>
							</select>						
						</div>
					</div>
					
					<div class="form-group">
						<label>Property Name</label>
						<input type="text" name="p_name" required class="form-control">
					</div>
					<div class="form-group">
						<label>Property Desc</label>
						<input type="text" name="p_desc" required class="form-control">
					</div>
					<div class="form-group">
						<label>Property Pic</label>
						<input type="file" name="p_img" required class="form-control">
					</div>
					<input type="submit" name="sub" value="Submit" class="btn btn-primary">
				</form>		
			</div>	
				<!-- ... Your content goes here ... -->			
		</div>
	</div>
</body>
</html>
