<?php
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand">			
			<span style="font-size:54px; Font-family:Satisfy; color:Red;">Realstate</span>
		</a>
    </div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">            
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">				
				<i class="fa fa-user fa-fw"></i>  <?php echo $_SESSION['aname']; ?>  <b class="caret"></b>
            </a>
			<ul class="dropdown-menu dropdown-user">
				<!-- <li><a href="#"><i class="fa fa-user"></i> User Profile</a></li> -->
				<li><a href="change_pswd.php"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
				<li class="divider"></li>
				<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
			</ul>
        </li>
    </ul>
    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navi">
            <ul class="nav" id="side-menu">                    
                <li>
                    <a href="main.php" class="active"><span style="color: red"><i class="fa fa-dashboard fa-fw"></span></i> Dashboard</a>
                </li>
				<li>
                    <a href="#"><span style="color: black"><i class="fa fa-user fa-fw"></i></span> Admin<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="add_admin.php">Add Admin</a>
				</li>
				<li>
					<a href="manage_admin.php">Manage Admin</a>
				</li>
			</ul>
				</li>					
				<li>
					<a href="#"><span style="color: red"><i class="fa fa-home fa-fw"></span></i>Property<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="add_property.php">Add Property</a>
				</li>
				<li>
					<a href="manage_property.php">Manage Property</a>
				</li>
			</ul>
                </li>					
				<li>
					<a href="#"><span style="color: black"><i class="fa fa-bed fa-fw"></span></i>Bedroom<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="add_bhk.php">Add Bedroom</a>
				</li>
				<li>
					<a href="manage_bhk.php">Manage Bedroom</a>
				</li>
			</ul>
				</li>
				<li>
					<a href="#"><span style="color: red"><i class="fa fa-map-marker fa-fw"></span></i>Location<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="add_location.php">Add Location</a>
				</li>
				<li>
					<a href="manage_location.php">Manage Location</a>
				</li>
			</ul>
				</li>
				<li>
					<a href="#"><span style="color: black"><i class="fa fa-compass fa-fw"></span></i>Status<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="add_status.php">Add Status</a>
				</li>
				<li>
					<a href="manage_status.php">Manage Status</a>
				</li>
			</ul>
				</li>
				<li>
					<a href="#"><span style="color: red"><i class="fa fa-building fa-fw"></span></i>Type<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="add_type.php">Add Type</a>
				</li>
				<li>
					<a href="manage_type.php">Manage Type</a>
				</li>
			</ul>
				</li>
            </ul>				
		</div>
    </div>
</nav>