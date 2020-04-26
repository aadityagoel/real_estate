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
						<h1 class="page-header">Add Status</h1>
					</div>
				</div>
				<!-- ... Your content goes here ... -->
							
				<form action="status.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Status Name</label>
						<input type="text" name="status_name" required class="form-control">
					</div>					
					<input type="submit" name="sub" value="Submit" class="btn btn-primary">
				</form>			
				<!-- ... Your content goes here ... -->			
			</div>
		</div>
	</div>
</body>
</html>
