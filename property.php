<?php require "header.php"; ?>

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
