<?php require "header.php"; ?>

<?php $pro=$_GET['z']; ?>

<!-- banner bottom -->
<section class="w3ls-bnrbtm py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <?php
            $q="select * from property where property_id='$pro'";
            $chk=$conn->query($q);
            while($r=$chk->fetch_assoc())
             {
            ?>
        <h3 class="title-w3 mb-md-5 mb-4 text-center text-bl font-weight-bold">Welcome To Our <span><?php echo $r['p_name']; ?></span></h3>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="admin/upload_image/<?php echo $r['p_img']; ?>" alt="about" class="img-fluid" />
            </div>
            <div class="col-lg-6 pr-xl-5 mt-xl-4 mt-lg-0 mt-4">
                <h3 class="title-sub mb-4">The best place to find the <span>house you want.</span></h3>
                <p class="sub-para"><?php echo $r['p_desc']; ?></p>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</section>
<!-- //banner bottom -->


<?php require "contact.php"; ?>

<?php require "footer.php"; ?>