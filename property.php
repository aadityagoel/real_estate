<?php require "header.php"; ?>
  
  <!-- banner -->
<div class="main-w3pvt mian-content-wthree text-center" id="home">
    <div class="container">
        <div class="style-banner mx-auto">
            <h3 class="text-wh font-weight-bold">Search and Find Your<span>Luxury</span> Homes</h3>
            <p class="mt-2 text-li" id="find">Property for sale & for rent around the world</p>
            
            <div class="home-form-w3ls mt-5 pt-lg-4">
                <form action="property.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select required="" name="status" class="form-control">
                                    <option value="">Any Status</option>
                                    <?php
                                        $cn=$conn;
                                        $s="select * from status";
                                        $result=mysqli_query($cn,$s);
                                        $r=mysqli_num_rows($result);
                                        //echo $r;
                                        while($data=mysqli_fetch_array($result))
                                        {   
                                    ?>
                                    
                                    <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
                                    <?php
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select required="" name="typ" class="form-control">
                                    <option value="">All Type</option>
                                    <?php
                                        $cn=$conn;
                                        $s="select * from type";
                                        $result=mysqli_query($cn,$s);
                                        $r=mysqli_num_rows($result);
                                        //echo $r;
                                        while($data=mysqli_fetch_array($result))
                                        {   
                                    ?>
                                    
                                    <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
                                    <?php
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select required="" name="bhk" class="form-control">
                                    <option value="">Bedrooms</option>
                                    <?php
                                        $cn=$conn;
                                        $s="select * from bhk";
                                        $result=mysqli_query($cn,$s);
                                        $r=mysqli_num_rows($result);
                                        //echo $r;
                                        while($data=mysqli_fetch_array($result))
                                        {   
                                    ?>
                                    
                                    <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
                                    <?php
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select required="" name="city" class="form-control">
                                    <option value="">Location</option>
                                    <?php
                                        $cn=$conn;
                                        $s="select * from city";
                                        $result=mysqli_query($cn,$s);
                                        $r=mysqli_num_rows($result);
                                        //echo $r;
                                        while($data=mysqli_fetch_array($result))
                                        {   
                                    ?>
                                    
                                    <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
                                    <?php
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="sub" class="btn btn_apt">Find Here</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!-- //banner -->



<!-- gallery -->
<div class="gallery pb-5" id="gallery">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-2 text-center text-bl font-weight-bold">Our <span>Properties</span></h3>
        <div class="row news-grids text-center no-gutters">  
            <?php
                include('connection.php');
                if(isset($_POST['sub']))
                {
                    $a = $_POST['status'];
                    $b = $_POST['typ'];
                    $c = $_POST['bhk'];
                    $d = $_POST['city'];
                  $cn=$conn;
                  $s="select * from property where status_name LIKE '".$a."' AND type_name LIKE '".$b."'  AND bhk_number LIKE '".$c."'  AND city_name LIKE '".$d."' ";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                    //echo $r;
                    if($r>0)
                    {
                        echo "<script>alert('Property found Successfully');</script>";
                        while($data=mysqli_fetch_array($result))
                        {   
            ?> 
                    <div class="col-md-4 gal-img ">
                        <a href="single.php?z=<?php echo $data['property_id']; ?>">
                            <img src="admin/upload_image/<?php echo $data[7]; ?>" alt="Gallery Image" class="img-fluid">
                        </a>
                    </div>
            <?php
                        }
                    }
                    else
                    {
                        echo "<script>alert('No Record Found'); window.location='index.php';</script>";
                    }
                }
            ?>
        </div>
    </div>
</div>
<!-- //gallery -->

<?php require "contact.php"; ?>
<?php require "footer.php"; ?>
