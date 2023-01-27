<?php
    require_once('header.php');
    require_once('db/dbconfig.php');
    $pdo_statement = $pdo_conn->prepare("SELECT service. * FROM service ORDER BY  service.id ASC");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();

    $info_figure = $pdo_conn->prepare("SELECT * FROM information_figure  ORDER BY  information_figure.id ASC");
    $info_figure->execute();
    $info_figure_result =  $info_figure->fetchAll();

    $info_gallery = $pdo_conn->prepare("SELECT * FROM info_gallery  ORDER BY  info_gallery.id ASC");
    $info_gallery->execute();
    $info_gallery_result =  $info_gallery->fetchAll();

    $info_local= $pdo_conn->prepare("SELECT * FROM info_local  ORDER BY  info_local.id ASC");
    $info_local->execute();
    $info_local_result =  $info_local->fetchAll();
?>
    <section class="header">
        <div class="container-fluid">
            <h1 class="text-center py-5">Information</h1>
        </div>
    </section>

    <section class="my-5 me-4">
        <div class="container text-start">
       
             <div class="row g-4">
                
             <div class="col-md-4">
                <img src="images/pitch.jpg" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title fw-bold pt-5">The perfect gateway from home</h2>
                    
                    <div class="col-md4 justify-content-end">
                    <p class="card-text pt-3">The perfect way from home can vary for everyone, as it depends on individual preferences and circumstances. Some people may prefer a quiet and scenic walk through nature, while others may prefer a brisk jog or bike ride. The key is to find what works best for you and make it a regular part of your routine. It could be a great opportunity to enjoy fresh air, disconnect from technology, and get some exercise. It could also be a perfect time to reflect and clear your mind, to set goals and plan your day. Whatever it is, make sure it's something you enjoy and can stick to, and you'll find that it can be a great way to start or end your day.</p>
                    
                    <ul>
                        <li class="mb-2">Wifi</li>
                        <li class="mb-2">Pitch Tent</li>
                        <li class="mb-2">Cycling</li>
                        <li class="mb-2">Motorhome Service</li>
                        <li class="mb-2">Local Attraction</li>
                        <li class="mb-2">Other Features</li>
                    </ul>
                    </div>
                    
                </div>
                </div>
                </div>

                <hr class="divider mt-5">
        </div>
    </section>

    <section>
        <div class="container ms-auto me-auto">
        <div class="row my-2">
                <h2 class="text-center">Service</h2>
            </div>
            <div class="row mt-4">
                <?php
                if(!empty($result)){
                    foreach($result as $row){

                   
                ?>
                <div class="col-md-4"><h5><img src="images/<?php echo $row['image']; ?>" width="50px" height="50px" alt="">   <?php echo $row['title']; ?></h5>
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
                        
            
            <hr class="divider mt-5">
        </div>
    </section>

    <section class="my-4 me-4">
        <div class="container text-end">
       
             <div class="row g-4 py-4">
                <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title fw-bold pt-5">Discover An Immersive Camping Experience</h2>
                    
                    <div class="col-md4 justify-content-end">
                    <p class="card-text pt-3">Discovering an immersive camping experience is all about immersing yourself in nature and disconnecting from the distractions of everyday life. This can be achieved by camping in remote, secluded areas and leaving behind modern conveniences such as electricity and internet. It's an opportunity to reconnect with the natural world, to disconnect from technology and the fast pace of modern life and to relax in the tranquility of the great outdoors. Additionally, an immersive camping experience can involve activities such as hiking, fishing, and wildlife watching, which can provide an even deeper connection with nature. So, whether you're a seasoned camper or new to the experience, consider immersing yourself in nature for a truly unforgettable camping experience.</p>
                    <button class="btn  btn-success">View More</button>
                    </div>
                    
                </div>
                </div>

                <div class="col-md-4">
                <img src="images/wild_swim1.jpg" class="img-fluid rounded" alt="...">
                </div>
            </div>
            <hr class="divider mt-5">
        </div>
    </section>

    <section class="my-4">
        <div class="container">
            <div class="row py-4">
                <?php
                if(!empty($info_figure)){
                    foreach($info_figure_result as $row){

                ?>
                <div class="col-md-4">
                    <figure class="figure">
                    <img src="images/<?php echo $row['image']; ?>" class="figure-img img-fluid rounded h-50" alt="...">
                    <figcaption class="figure-caption text-align">
                    <?php echo $row['description']; ?>
                    </figcaption>
                    </figure>
                </div>
                <?php

                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="my-4">
        <div class="container">
            <div class="row my-4">
            <?php
                if(!empty($info_gallery)){
                    foreach($info_gallery_result as $row){

                ?>
                <div class="col-md-4 my-2">
                    <img src="images/<?php echo $row['image']; ?>" class="img-fluid rounded" alt="">
                </div>
                <?php
                        }   
                    }
                ?>
        </div>
    </section>

    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19795.845625414477!2d96.1185981511977!3d17.04150494588119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19976cf791c21%3A0xf840acae908abb4e!2sHlawga%20National%20Park%20Mode!5e0!3m2!1sen!2smm!4v1673501728234!5m2!1sen!2smm" width="350px" height="350px" style="border:0; max-width: 480px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 pt-4 ps-4">
                    <div class="row">
                    <div class="col-md-6"><h5><img src="images/deer.svg" width="50px" height="50px" alt=""> Wild Life</h5>
                    <p>You can relax at our campsite and see the beauty of nature and wildlife.</p>
                    </div>
                    <div class="col-md-6 align-self-end pt-5"><h5><img src="images/lake.svg" width="50px" height="50px" alt="">River and Lake</h5>
                    <p>You can relax and chill on the shore of lake. You can swim in the river.</p>
                    </div>   
                    </div>
                    <div class="row">
                    <div class="col-md-6"><h5><img src="images/tent-_1_.svg" width="50px" height="50px" alt=""> Fire Camping</h5>
                    <p>You can relax and celebrate a fire camping party with your friends.</p>
                    </div>
                    <div class="col-md-6 align-self-end pt-5"><h5><img src="images/kayaking.svg" width="50px" height="50px" alt="">Canoeing</h5>
                    <p>You can enjoy rowing boat in the river and have fun.</p>
                    </div>   
                    </div>
                </div>       
            </div>

            <div class="row pt-4">
                <div class="col-md-6 pt-4">
                    <div class="row">
                    <div class="col-md-6"><h5><img src="images/tent-_1_.svg" width="50px" height="50px" alt=""> Fire Camping</h5>
                    <p>You can relax and celebrate a fire camping party with your friends.</p>
                    </div>
                    <div class="col-md-6 pt-5"><h5><img src="images/deer.svg" width="50px" height="50px" alt=""> Adventure Trip</h5>
                    <p>You can make adventure trip at our wild campsite and enjoy new experience.</p>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6"><h5><img src="images/tent-_1_.svg" width="50px" height="50px" alt=""> Wild Life</h5>
                    <p>You can relax at our campsite and see the beauty of nature and wildlife.</p>
                    </div>
                    <div class="col-md-6 align-self-end pt-5"><h5><img src="images/kayaking.svg" width="50px" height="50px" alt="">Canoeing</h5>
                    <p>You can enjoy rowing boat in the river and have fun.</p>
                    </div>   
                    </div>
                </div>   
                <div class="col-md-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19795.845625414477!2d96.1185981511977!3d17.04150494588119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19976cf791c21%3A0xf840acae908abb4e!2sHlawga%20National%20Park%20Mode!5e0!3m2!1sen!2smm!4v1673501728234!5m2!1sen!2smm" width="350px" height="350px" style="border:0; max-width: 480px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>  
            </div>
            <hr class="divider mt-5">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2 class="text-center">Local Attractions</h2>
            </div>
            <div class="row mt-4 mb-2">
                <?php 
                    if(!empty($info_local)){
                        foreach($info_local_result as $row){       
                ?>
                <div class="col-md-4">
                <figure class="figure">
                <img src="images/<?php echo $row['image']; ?>" class="figure-img img-fluid rounded h-50 my-3"  alt="...">
                <figcaption class="figure-caption lh-lg">
                    <?php
                    echo substr($row['description'],0,200)."...";
                    ?>
                </figcaption>
                <a href="local_attraction_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-success mt-2">Read More</a>
                </figure>
                </div>
                <?php
                      }
                    }
                ?>
            </div>
            <div class="row mb-4">
               
                    <a href="local_attraction.php" class="text-dark text-end text-decoration-none hvr-forward">Click here to view more local attractions 
                    <i class="fa-solid fa-arrow-right"></i></a>    
            </div>
        </div>
    </section>
   
<?php
    require_once('footer.php')
?>