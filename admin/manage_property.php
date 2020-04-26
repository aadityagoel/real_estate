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
                    <h1 class="page-header">Manage Property</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table table-bordered">
				<tr>
					<th>Property ID</th>
					<th>Property Status</th>
					<th>Property Type</th>
					<th>Property BHK</th>
					<th>Property Location</th>
					<th>Property Name</th>
					<th>Property Desc</th>
					<th>Property Image</th>
					<th>Action</th>

				</tr>
				<?php
				$q="select * from property";
				$chk=$conn->query($q);
				while($r=$chk->fetch_assoc())
				{
				?>
				<tr>
					<td><?php echo  $r['property_id']; ?></td>
					<td><?php echo  $r['status_name']; ?></td>
					<td><?php echo  $r['type_name']; ?></td>
					<td><?php echo  $r['bhk_number']; ?></td>
					<td><?php echo  $r['city_name']; ?></td>
					<td><?php echo  $r['p_name']; ?></td>
					<td><?php echo  $r['p_desc']; ?></td>
					<td>
					<img src="upload_image/<?php echo $r['p_img']; ?>" height="40px" width="70px">
					<td>
						<a href="delete_property.php?z=<?php echo $r['property_id'];?>
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
