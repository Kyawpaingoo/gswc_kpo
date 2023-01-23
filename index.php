<?php
    require_once('header.php');
    require_once('db/dbconfig.php');
    $pdo_statement = $pdo_conn->prepare("SELECT service. * FROM service ORDER BY  service.id ASC");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();

    $camp = $pdo_conn->prepare("SELECT  * FROM camp_infrastructure ORDER BY  camp_infrastructure.id ASC");
    $camp->execute();
    $camp_result = $camp->fetchAll();

    $camp_review = $pdo_conn->prepare("SELECT  * FROM index_review ORDER BY  index_review.id ASC");
    $camp_review->execute();
    $camp_review_result = $camp_review->fetchAll();

    $index_blog = $pdo_conn->prepare("SELECT  * FROM  index_blog  ORDER BY   index_blog .id ASC");
    $index_blog ->execute();
    $index_blog_result = $index_blog ->fetchAll();
?>  
    <!-- //carousel -->
    <Section>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="card text-bg-dark">
    <img src="images/attraction1.jpg" class="img-fluid" alt="...">
    <div class="card-img-overlay">
    <h3 class="card-title pt-5 ps-5">Nature benefits you</h3>
    <p class="card-text ps-5">Experience everything nature has to offer</p>
    <a href="" class="btn btn-outline-light" style="margin-left: 10%">View More</a>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card text-bg-dark">
    <img src="images/attraction1.jpg" class="img-fluid" alt="...">
    <div class="card-img-overlay">
    <h3 class="card-title pt-5 ps-5">Travel with your soul </h3>
    <p class="card-text ps-5">Experience Earht's enery with your soulmate</p>
    <a href="" class="btn btn-outline-light" style="margin-left: 10%">View More</a>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card text-bg-dark">
    <img src="images/attraction1.jpg" class="img-fluid" alt="...">
    <div class="card-img-overlay">
    <h3 class="card-title pt-5 ps-5">Choose a heatlhy environment</h3>
    <p class="card-text ps-5">You can travel and work from any destination</p>
    <a href="" class="btn btn-outline-light" style="margin-left:10%;">View More</a>
  </div>
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
    <section class="Welcome py-4">
        <div class="container">
            <h1 class="text-center">Welcome to Global Wild Swimming <br> and Camping</h1>
            <p class="text-center mx-auto lh-lg">Welcome to our camping service site! We offer a variety of camping options for all types of outdoor enthusiasts. From secluded tent sites to RV hookups and cabin rentals, we have something for everyone. Our campgrounds are located in some of the most beautiful and scenic areas in the country, providing the perfect setting for a peaceful and relaxing getaway. Whether you're looking for a weekend getaway or an extended vacation, we have the perfect spot for you. Come and explore the great outdoors with us!</p>
        </div>  
    </section>

    <div class="container">
       
            
            <form action="" method="get" class="row g-3">
                   
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Check In</label>
                    <input type="datetime" name="checkin" class="form-control" id="inputEmail4">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Check out</label>
                    <input type="datetime" name="checkout" class="form-control" id="inputPassword4">
                </div>

                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Guest</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>

                <div class="col-md-6">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                <option selected>Classic</option>
                <option>...</option>
                </div>

                <div class="col-md-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div>

                <div class="col-md-12">
                    <a href="#" class="btn btn-outline-success">Check Availability</a>
                </div>
                
            </form>
    </div>

    <section>
        <div class="container my-4 mx-auto">
        
            <div class="row">
                <h3 class="text-center">Camp Infrastructure</h3>
                <div class="row mt-4">
                <?php
                if(!empty($camp_result)){
                    foreach($camp_result as $row){

                   
                ?>
                <div class="col-md-3 text-center border-end"><h5><img src="images/<?php echo $row['image']; ?>" width="80px" height="80px" alt="">   </h5>
                <p>
                    <?php
                    echo $row['description'];
                    ?>
                </p>
                </div>
                
                <?php
                 }
                }
                ?>
            </div>    
        </div>
    </section>

    <section class="welcome2">
    <div class="container-fluid">
            <h1 class="fs-1 fw-bold text-start ps-5 pt-3 lh-lg">Can you hear <br> the outdoors calling for you</h1>
            
            <a href="pitchtype.php" class="btn btn-success ms-5">Check Now!</a>
            
            
        </div>
    </section>

    <section>
        <div class="container my-4">
            <div class="row my-2">
                <div class="col-md-12">
                    <h3 class="text-center fw-bold">Blogs</h3>
                </div>
            </div>
            <div class="row">
            <?php 
                if(!empty($index_blog)){
                    foreach($index_blog_result as $row){    
            ?>
            <div class="col-md-6">
            <figure class="figure">
            <img src="images/<?php echo $row['image']; ?>" class="figure-img img-fluid rounded" alt="...">
            <h5><?php echo $row['title']; ?></h5>
            <p>
            <?php echo $row['description']; ?>
            </p>
            </figure>
            </div>
            
            <?php
                }
            }
            ?>
            
        </div>
       

        
    </section>


    <section>
        <div class="container my-6">
        <div class="row my-2">
                <h2 class="text-center">Service</h2>
            </div>
            <div class="row mt-4">
                <?php
                if(!empty($result)){
                    foreach($result as $row){

                   
                ?>
                <div class="col-md-4 text-center"><h5><img src="images/<?php echo $row['image']; ?>" width="50px" height="50px" alt="">   <?php echo $row['title']; ?></h5>
                <p>
                    <?php
                    echo $row['description'];
                    ?>
                </p>
                </div>
                
                <?php
                 }
                }
                ?>
            </div>    
        </div>
    </section>

    <section>
        <div class="container my-4 Review">
            <div class="row text-center pt-4">
                <h1>Review </h1>
            </div>
            <div class="row">
                <?php
                if(!empty($camp_review_result)){
                    foreach($camp_review_result as $row){     
                ?>
                <div class="col-md-4">
                    <p>
                       <?php
                       echo $row['text'];
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

    <section>
    <div class="container my-4">
        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row g-0">
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.8078555758384!2d96.13864567974771!3d16.80058482817077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb430b170b41%3A0x34d3bc9909d44576!2sShwe%20Kaung%20Hot%20Pot!5e0!3m2!1sen!2smm!4v1673359372234!5m2!1sen!2smm"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid rounded-start w-100 h-100"></iframe>
        </div>
        <div class="col-md-6">
        <div class="card-body">
            <h5 class="card-title">We are Here!</h5>
            <div class="row mt-4">
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
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <?php
    require_once('footer.php');
    ?>