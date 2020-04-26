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
                    <h1 class="page-header">Manage status</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table table-bordered">
				<tr>
					<th>Status ID</th>
					<th>Status Name</th>
					<th>Action</th>
				</tr>
				<?php
				$q="select * from status";
				$chk=$conn->query($q);
				while($r=$chk->fetch_assoc())
				{
				?>
				<tr>
					<td><?php echo  $r['status_id']; ?></td>
					<td><?php echo  $r['status_name']; ?></td>
					<td>
						<a href="delete_status.php?z=<?php echo $r['status_id'];?>
								" class="btn btn-danger btn-xs">
								<span class="fa fa-trash"></span> Delete
						</a>
					</td>
					</tr>
				<?php
				}
				?>
				
			</table>
			<!-- ... Your content goes here ... -->
			
        </div>
    </div>

</div>



</body>
</html>
