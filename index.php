<?php
    require_once('header.php');
    require_once('db/dbconfig.php');

    $camp_review = $pdo_conn->prepare("SELECT  * FROM review ORDER BY  review.id ASC LIMIT 3");
    $camp_review->execute();
    $camp_review_result = $camp_review->fetchAll();

    $local_attraction = $pdo_conn->prepare("SELECT  * FROM  local_attraction  ORDER BY local_attraction .id DESC LIMIT 2");
    $local_attraction ->execute();
    $local_attraction_result =$local_attraction ->fetchAll();
?>  
    <Section class="f-400">
    <div id="carouselExampleAutoplaying" class="carousel slide h-50" data-bs-ride="carousel">
        
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/attraction1.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
    <h3 class="card-title pt-5 ps-5">Nature benefits you</h3>
    <p class="card-text ps-5">Experience everything nature has to offer</p>
    
  </div>
    </div>
    <div class="carousel-item">
    <img src="images/couple.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
    <h3 class="card-title pt-5 ps-5">Travel with your soul </h3>
    <p class="card-text ps-5">Experience Earht's enery with your soulmate</p>
    
  </div>

    </div>
    <div class="carousel-item">
    <img src="images//adventure.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
    <h3 class="card-title pt-5 ps-5">Choose a heatlhy environment</h3>
    <p class="card-text ps-5">You can travel and work from any destination</p>
    
  </div>

    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </Section>

    <!-- //welcome -->
    <section class="Welcome py-4 f-400">
        <div class="container">
            <h1 class="text-center fw-bold">Welcome to Global Wild Swimming <br> and Camping</h1>
            <p class="text-center mx-auto lh-lg">Welcome to our camping service site! We offer a variety of camping options for all types of outdoor enthusiasts. From secluded tent sites to RV hookups and cabin rentals, we have something for everyone. Our campgrounds are located in some of the most beautiful and scenic areas in the country, providing the perfect setting for a peaceful and relaxing getaway. Whether you're looking for a weekend getaway or an extended vacation, we have the perfect spot for you. Come and explore the great outdoors with us!</p>
        </div>  
    </section>
       
    <section class="f-400">
        <div class="container my-4 mx-auto">    
            <div class="row">
                <h3 class="text-center">Camp Infrastructure</h3>
                <div class="row mt-4">
                <div class="col-md-3 text-center border-end"><h5>
                <img src="images/camper-van.svg" width="80px" height="80px" alt="">  </h5>
                <p> 30 Camper</p>
                </div>

                <div class="col-md-3 text-center border-end"><h5>
                <img src="images/caravan.svg" width="80px" height="80px" alt="">  </h5>
                <p> 30 Camper</p>
                </div>

                <div class="col-md-3 text-center border-end"><h5>
                <img src="images/tent.svg" width="80px" height="80px" alt="">  </h5>
                <p> 40+ tent</p>
                </div>

                <div class="col-md-3 text-center border-end"><h5>
                <img src="images/cabin.svg" width="80px" height="80px" alt="">  </h5>
                <p> 50+ Cabin</p>
                </div>
            </div>    
        </div>
    </section>
    
    <section class="welcome2 f-400">
        <div class="container my-4">
        <div class="row">
            <div class="col-md-7">
              <h1 class="fs-1 fw-bold text-start ps-5 lh-lg">Can you hear <br> the outdoors calling for you</h1>  
            <a href="pitchtype.php" class="btn btn-success ms-5">Check Now!</a> 
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="fs-3 col-md-4 text-center">
                    <i class="fa-solid fa-user"></i>
                    <p> +
                    <?php
                    require_once('counter.php');
                    ?>
                     Visitors</p>
                    </div>

                    <div class="fs-3 col-md-4 text-center">
                    <i class="bi bi-map-fill"></i>
                    <p>20 Attractions</p>
                    </div>

                    <div class="fs-3 col-md-4 text-center">
                    <i class="fa-solid fa-campground"></i>
                    <p>10 Campgroud</p>
                    </div>
                </div>
            
            </div>
        </div>
        </div>
    </section>


    <section class="f-400">
        <div class="container my-4">
            <div class="row my-2">
                <div class="col-md-12">
                    <h3 class="text-center fw-bold">Local Attractions</h3>
                </div>
            </div>
            <div class="row">
            <?php 
                if(!empty($local_attraction_result)){
                    foreach($local_attraction_result as $row){    
            ?>
            <div class="col-md-6">
            <figure class="figure">
            <img src="images/<?php echo $row['image']; ?>" class="figure-img img-fluid rounded" alt="...">
            <h5 class="fw-bold"><?php echo $row['title']; ?></h5>
            <p>
            <?php echo substr($row['description'],0,200)."..."; ?>
            </p>
            <a href="local_attraction_moredetail.php?id=<?php echo $row['id'];?>" class="btn btn-success">Read More</a>
            </figure>
            </div>
            
            <?php
                }
            }
            ?>
            
        </div>
       

        
    </section>


    <section class="f-400">
        <div class="container my-4">
        <div class="row my-2">
                <h2 class="text-center fw-bold">Service</h2>
            </div>
            <div class="row my-4">          
                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/parking.svg" width="50px" height="50px" alt="">   
                    Parking in the camp</h5>
                    <p>
                    We have large arear for car parking 24/7. You can pick up your car to our campsite
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/caravan.svg" width="50px" height="50px" alt="">   
                    Motorhome</h5>
                    <p>
                    You can rent motorhome service at our campsite for your family trip
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/washing-machine.svg" width="50px" height="50px" alt="">   
                    Washing Machines</h5>
                    <p>
                    We also provide laundry service at our campsite. You can wish your clothes there
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/shower.svg" width="50px" height="50px" alt="">   
                    Sanitary Facilities</h5>
                    <p>
                    Not only motorhome service. We provide sanitary facilities for our valued customers.
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/wifi.svg" width="50px" height="50px" alt="">   
                    Hight Speed Wifi</h5>
                    <p>
                    We install high speed wifi internet service for our customers in all of our campsite.
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/electric-_1_.svg" width="50px" height="50px" alt="">   
                    Electricity </h5>
                    <p>
                    To cook your food with electric oven, We also provide electricity in our campsite 24/7
                    </p>
                </div>
            </div>    
        </div>
    </section>

    <section class="f-400">
        <div class="container my-4 Review">
            <div class="row text-center pt-4">
                <h1 class="fw-bold">Review </h1>
            </div>
            <div class="row">
                <?php
                if(!empty($camp_review_result)){
                    foreach($camp_review_result as $row){     
                ?>
                <div class="col-md-4">
                    <p>
                       <?php
                       echo $row['description'];
                       ?> 
                    </p>
                    <figcaption>
                        <?php
                        echo $row['name'];
                        ?>
                    </figcaption>
                    <?php
                        for ($i=0; $i < $row['star']; $i++) { 
                            echo '<i class="text-warning bi bi-star-fill"></i>';
                        }
                    ?>
                    
                </div>
                <?php
                }
            }
                ?>
            </div>
        </div>
    </section>

    <section class="f-400">
    <div class="container my-4">     
        <div class="row">
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.8078555758384!2d96.13864567974771!3d16.80058482817077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb430b170b41%3A0x34d3bc9909d44576!2sShwe%20Kaung%20Hot%20Pot!5e0!3m2!1sen!2smm!4v1673359372234!5m2!1sen!2smm"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid rounded-start w-100 h-100"></iframe>
        </div>
        <div class="col-md-6">
        <div class="card-body">
            <h3 class="card-title fw-bold">We are Here!</h5>
            <div class="row mt-2">
                    <h5 class="py-2">Contact</h5>
                    <ul class="list-unstyled lh-lg">
                        <li class="mb-2"><i class="fa-solid fa-location-dot"></i> : Via Venti Settembre, Ireland</li>
                        <li class="mb-2"><i class="fa-solid fa-phone"></i> : 09-768045970</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope"></i> : paingookyaw624@gamil.com</li>
                    </ul>
                    </div>

                    <div class="row mt-4">
                    <h5>Our Social Media :</h5>
                    <p style="font-size: 25px;"><i class="fa-brands fa-facebook me-2"></i>
                    <i class="fa-brands fa-instagram me-2"></i>
                    <i class="fa-brands fa-twitter me-2"></i>
                    <i class="fa-brands fa-tiktok me-2"></i>
                    <i class="fa-brands fa-youtube me-2"></i>
                    </p>
                    </div>           
            <a href="contact.php" class="btn btn-success">Contact Us Now</a>

            <?php
                require_once('counter.php');
            ?>
        </div>
        </div>
        </div>
        <!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://surfing-waves.com/newsrss.xml";  
rssfeed_frame_width="230"; 
rssfeed_frame_height="260"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url=""; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "bb82b6e5135bab2be052db88ef98215c"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="color:#ccc;font-size:10px; text-align:right; width:230px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
<!-- end sw-rss-feed code -->
        </div>
    </section>

    <?php
    require_once('footer.php');
    ?>
