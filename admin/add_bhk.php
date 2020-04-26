<?php require 'header_files.php'; ?>
<body style="min-height:100px; padding-top:20px; background-color:RGB(248,248,248)">
	<div id="wrapper">
		<!-- Navigation -->
		<?php require 'menu.php'; ?>
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Add BHK</h1>
					</div>
				</div>
				<!-- ... Your content goes here ... -->
							
				<form action="bhk.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>BHK Number</label>
						<input type="text" name="bhk_number" required class="form-control">
					</div>					
					<input type="submit" name="sub" value="Submit" class="btn btn-primary">
				</form>			
				<!-- ... Your content goes here ... -->			
			</div>
		</div>
	</div>
</body>
</html>
