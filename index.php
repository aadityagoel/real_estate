<?php require "header.php"; ?>
  
  <!-- banner -->
<div class="main-w3pvt mian-content-wthree text-center" id="home">
    <div class="container">
        <div class="style-banner mx-auto">
            <h3 class="text-wh font-weight-bold">Search and Find Your<span>Luxury</span> Homes</h3>
            <p class="mt-2 text-li" id="find">Property for sale & for rent around the world</p>
            <!-- form -->
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
            <!-- //form -->
        </div>
    </div>
</div>
<!-- //banner -->

<!-- banner bottom -->
<section class="w3ls-bnrbtm py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-md-5 mb-4 text-center text-bl font-weight-bold">Welcome To Our <span>Real Esate
                Site</span></h3>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="images/about.jpg" alt="about" class="img-fluid" />
            </div>
            <div class="col-lg-6 pr-xl-5 mt-xl-4 mt-lg-0 mt-4">
                <h3 class="title-sub mb-4">The best place to find the <span>house you want.</span></h3>
                <p class="sub-para">We provide the best way to buy a dream house and flat in a beautiful and clean city.  
                    We provide the best environment and home in your budget. We give you the house of your choice</p>
            </div>
        </div>
    </div>
</section>
<!-- //banner bottom -->

<!-- services -->
<div class="w3pvtits-services py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-2 text-center text-wh font-weight-bold">We Provide The <span>Best Services</span>
        </h3>
        <p class="text-li text-center title-w3 mb-md-5 mb-4">Home Sweet Home</p>
        <div class="row w3pvtits-services-row text-center pt-4">
            <div class="col-lg-4">
                <div class="w3pvtits-services-grids">
                    <div class="icon-effect-wthree">
                        <span class="fa fa-home ser-icon"></span>
                    </div>
                    <h4 class="text-bl my-4">Brokerage</h4>
                    <p class="text-left">We have specialized teams to cater separately for Sale, Purchase and Renting needs. 
                        Our brokerage agents meet the clients and discuss the strategy for sale, purchase or renting WITH no any hidden charges. 
                    </p>
                </div>
            </div>
            <div class="col-lg-4 serv-w3mk my-lg-0 my-5">
                <div class="w3pvtits-services-grids">
                    <div class="icon-effect-wthree">
                        <span class="fa fa-wrench ser-icon"></span>
                    </div>
                    <h4 class="text-bl my-4">Property Manegment</h4>
                    <p class="text-left">All of you who own properties and the Millennium City, home to almost 50% of Fortune 500 companies, 
                    the most favored investment destination in India can rely on us to hassle-free management of your properties
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="w3pvtits-services-grids">
                    <div class="icon-effect-wthree">
                        <span class="fa fa-building ser-icon"></span>
                       
                    </div>
                    <h4 class="text-bl my-4">Construction Renovation / Interiors</h4>
                    <p class="text-left">We promise our customers of Total Customer Satisfaction by way of Highest Quality Standards, Hassle Free Experience and On-Time delivery of projects.</p>
                </div>
            </div>
        </div>
    </div>
    <img src="images/img.png" alt="services" class="img-fluid img-posi-w3pvt" />
</div>
<!-- //services -->

<!-- places -->
<section class="branches py-5" id="places">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-2 text-center text-bl font-weight-bold">Most Popular <span>Places</span></h3>
        <p class="text-center title-w3 mb-md-5 mb-4">Clean and Green Environment</p>
        <div class="row branches-position pt-4">
            <div class="col-lg-3 col-sm-6 place-w3">
                <!-- branch-img -->
                <div class="team-img team-img-1">
                    <div class="team-content">
                        <h4 class="text-wh">Chandigarh</h4>
                        
                    </div>
                </div>
            </div>
            <!-- / branch-img -->
            <div class="col-lg-3 col-sm-6 place-w3 mt-sm-0 mt-4">
                <!-- team-img -->
                <div class="team-img team-img-2">
                    <div class="team-content">
                        <h4 class="text-wh">Delhi</h4>
                        
                    </div>
                </div>
            </div>
            <!-- /.branch-img -->
            <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4">
                <!-- team-img -->
                <div class="team-img team-img-3">
                    <div class="team-content">
                        <h4 class="text-wh">Mumbai</h4>
                    
                    </div>
                </div>
            </div>
            <!-- /.branch-img -->
            <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4">
                <!-- team-img -->
                <div class="team-img team-img-4">
                    <div class="team-content">
                        <h4 class="text-wh">Bangalore </h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //places -->


<!-- gallery -->
<div class="gallery pb-5" id="gallery">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-2 text-center text-bl font-weight-bold">Our <span>Gallery</span></h3>
        <div class="row news-grids text-center no-gutters">
            <div class="col-md-4 gal-img ">
                <a href="#gal1"><img src="images/g1.jpg" alt="Gallery Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4 gal-img ">
                <a href="#gal2"><img src="images/g2.jpg" alt="Gallery Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4 gal-img ">
                <a href="#gal3"><img src="images/g3.jpg" alt="Gallery Image" class="img-fluid"></a>
            </div>
        </div>
        <div class="row news-grids text-center no-gutters">
            <div class="col-md-4 gal-img ">
                <a href="#gal4"><img src="images/g4.jpg" alt="Gallery Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4 gal-img ">
                <a href="#gal5"><img src="images/g5.jpg" alt="Gallery Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4 gal-img ">
                <a href="#gal6"><img src="images/g6.jpg" alt="Gallery Image" class="img-fluid"></a>
            </div>
        </div>
        <!-- gallery popups -->
        <!-- popup-->
        <div id="gal1" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal2" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal3" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup3 -->
        <!-- popup-->
        <div id="gal4" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal5" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal6" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- //gallery popups -->
    </div>
</div>
<!-- //gallery -->
<?php require "contact.php"; ?>
<?php require "footer.php"; ?>