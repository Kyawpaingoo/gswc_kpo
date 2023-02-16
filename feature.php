<?php 
    require_once('header.php');
    require_once('db/dbconfig.php');

    $campsite = $pdo_conn->prepare("SELECT campsite. * FROM campsite ORDER BY  campsite.id ASC");
    $campsite->execute();
    $campsite_result = $campsite->fetchAll();
?>
    <section class="feature-header bg-secondary f-400">
        <h1 class="text-center py-5">Our Features</h1>
    </section>

    <section class="f-400">
        <div class="container my-4">
        <div class="row my-2">
                <h2 class="text-center">Activities</h2>
            </div>
            <div class="row my-4">          
                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/kayaking.svg" width="50px" height="50px" alt="">   
                    Canoeing</h5>
                    <p>
                    You can enjoy rowing boat in the river and have fun
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/tent-_1_.svg" width="50px" height="50px" alt="">   
                    Campfire</h5>
                    <p>
                    You can relax at our campsite and see the beauty of nature and wildlife.
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/fisherman.svg" width="50px" height="50px" alt="">   
                    Fishing</h5>
                    <p>
                    You can relax and enjoy fishing at our campsite.
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/swimming.svg" width="50px" height="50px" alt="">   
                    Swimming</h5>
                    <p>
                    You can enjoying swimming in the river and relax at our campsite
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/hiking.svg" width="50px" height="50px" alt="">   
                    Hiking</h5>
                    <p>
                    You can also hike mountain and burn your energy
                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <h5>
                    <img src="images/bicycle.svg" width="50px" height="50px" alt="">   
                    Cycling </h5>
                    <p>
                    You can ride bicycle at our campsite and enjoy your jounery.
                    </p>
                </div>
            </div>    
        </div>
    </section>

    <section class="f-400">
        <div class="container my-4">
            <div class="row py-4">
                <div class="col-md-6">
                    <img src="images/erik-mclean-R_O76DHewdw-unsplash.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold">Enjoy your journey at our campsite</h3>
                    <p class="lh-lg">We welcome you to our campsite, where you can embark on a memorable journey filled with adventure, relaxation and nature. Our campsite offers a peaceful and serene environment, surrounded by beautiful landscapes, perfect for those looking to escape the hustle and bustle of daily life. Whether you're a seasoned camper or a first-timer, our facilities and amenities cater to your every need, making your stay with us comfortable and enjoyable. We encourage you to explore the surrounding area, participate in our outdoor activities and make unforgettable memories. Come, relax and enjoy your journey at our campsite.</p>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-md-6">
                    <h3 class="fw-bold">Relax your soul in the river</h3>
                    <p class="lh-lg">Take a break from the stresses of daily life and come relax your soul in the calming waters of the river. The tranquil sound of the flowing water, surrounded by lush greenery, creates a peaceful and serene atmosphere that soothes the mind and rejuvenates the spirit. Take a dip in the cool waters or simply bask in the sun on the riverbank, allowing yourself to fully unwind and forget about your worries. Let the river wash away your tensions and leave you feeling refreshed and invigorated. Come and let the river soothe your soul.</p>
                </div>

                <div class="col-md-6">
                    <img src="images/laura-chouette-bD4j1V52dx0-unsplash.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    
    <section class="f-400">
        <div class="container my-4">
        <div class="row my-2">
                <h2 class="text-center">Service</h2>
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
        <div class="container py-3 ">
            <div class="row py-3">
                <div class="col-md-12">
                    <h2 class="text-center">Our Campsites</h2>
                </div>
            </div>
            <?php 
                if(!empty($campsite_result)){
                    foreach($campsite_result as $row){

            ?>
            <div class="row py-3">
                <div class="col-md-6">
                    <img src="images/<?php echo $row['image']; ?>" class="img-fluid w-100" alt="">
                </div>
                <div class="col-md-6 pt-3 lh-lg bg-light bg-gardient">
                    <h4 class="fw-bold"><?php echo $row['name']; ?></h4>
                    <figcaption><?php echo $row['zone']; ?> <div class="vr"></div> <?php echo $row['guest']; ?> Person <div class="vr">
                    </figcaption>
                    <p class="lh-lg">
                    <?php echo substr($row['description'],0,200); ?>
                    </p>
                    <p class="font-monospace">
                    <img src="images/parking.svg"  width="35px" height="35px" alt="">
                    <img src="images/caravan.svg" width="35px" height="35px" alt="">
                    <img src="images/washing-machine.svg" width="35px" height="35px" alt="">
                    <img src="images/shower.svg" width="35px" height="35px" alt="">
                    <img src="images/wifi.svg" width="35px" height="35px" alt="">
                    <img src="images/electric-_1_.svg" width="35px" height="35px" alt="">
                    </p>
                    <hr class="divider w-75">  
                    <a href="" class="text-dark text-end text-decoration-none hvr-forward">Click here to view more local attractions 
                    <i class="fa-solid fa-arrow-right"></i></a>   
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </section>

    <section class="f-400">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                <figure class="figure">
                <img src="images/wildswim.jpg" class="figure-img img-fluid rounded" alt="...">
                <h4 class="fs-3 fw-bold">Book your dream vacation now</h4>
                <p>Book your dream vacation now at our camping site and experience the beauty and tranquility of the great outdoors. We offer a variety of camping options and easy online booking. Don't wait, reserve your spot and start planning your ultimate outdoor adventure.
                </p>
                </figure>
                </div>

                <div class="col-md-6">
                <figure class="figure">
                <img src="images/ankur-khandelwal-nfUNBJtLHWI-unsplash.jpg" class="figure-img img-fluid rounded" alt="...">
                <h4 class="fs-3 fw-bold">Wake up in your own paradise</h4>
                <p>Wake up in your own paradise at our camping site. Experience serene surroundings, fresh air and natural beauty that will make your vacation unforgettable. Book now and start planning your dream outdoor getaway.</p>        
                </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="f-400">
        <div class="container py-3">
        <div class="row py-3">
            <h3 class="fw-bold">Campsite Price List</h3>
        </div>
        <div class="row py-3">
            <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Campsite</th>
                    <th scope="col">Person</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        if(!empty($campsite_result)){
                            foreach($campsite_result as $row){
                    ?>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['guest']; ?> persons</td>
                    <td><?php echo $row['price']; ?></td>
                    <td><a href="#" class="btn btn-success">Book Now!</a> </td>
                    </tr>
                    <?php
                              }
                        }
                    ?>
                   </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                    <a href="" class="text-dark text-end text-decoration-none hvr-forward">Click here to view more local attractions 
                    <i class="fa-solid fa-arrow-right"></i></a> 
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <img src="images/joshua-sukoff-wXzuPjvTZf8-unsplash.jpg" class="img-fluid w-100" alt="">
            </div>
        </div>
        </div>
        
    </section>
<?php 
    require_once('footer.php');
?>