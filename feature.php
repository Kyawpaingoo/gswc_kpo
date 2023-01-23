<?php 
    require_once('header.php');
    require_once('db/dbconfig.php');
    $pdo_statement = $pdo_conn->prepare("SELECT service. * FROM service ORDER BY  service.id ASC");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();

    $campsite = $pdo_conn->prepare("SELECT campsite. * FROM campsite ORDER BY  campsite.id ASC");
    $campsite->execute();
    $campsite_result = $campsite->fetchAll();
?>
    <section class="feature-header bg-secondary">
                    <h1 class="text-center py-5">Our Features</h1>
    </section>

    <section>
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 text-center">
                    <h2 class="py-2">Welcome to Our Campsite</h2>
                    <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aut laboriosam alias exercitationem dolore quasi blanditiis ex nulla natus voluptatibus molestias, deleniti sunt corrupti, suscipit adipisci minus quia illum illo!</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12">
                    <h2 class="text-center">Camp Infrastructure</h2>
                </div>
            </div>
            <div class="row mt-4">
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
            
        </div>
    </section>

    <section>
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
                <div class="col-md-6 pt-3 lh-lg">
                    <h4 class="fw-bold"><?php echo $row['title']; ?></h4>
                    <figcaption><?php echo $row['short_desc']; ?> <div class="vr"></div> <?php echo $row['short_desc2']; ?> Person <div class="vr">
                    </figcaption>
                    <p class="lh-lg">
                    <?php echo substr($row['long_desc'],0,200); ?>
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

    <section>
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                <figure class="figure">
                <img src="images/wildswim.jpg" class="figure-img img-fluid rounded" alt="...">
                <h4 class="fs-3 fw-bold">Book your dream vacation now</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, repellendus non dolor labore quis porro minus voluptatum sunt eligendi ratione inventore omnis laborum vero perspiciatis, iusto veniam eaque quas cum!</p>
                <a href="" class="text-dark text-end text-decoration-none hvr-forward">Book Now
                <i class="fa-solid fa-arrow-right"></i></a> 
                </figure>
                </div>

                <div class="col-md-6">
                <figure class="figure">
                <img src="images/ankur-khandelwal-nfUNBJtLHWI-unsplash.jpg" class="figure-img img-fluid rounded" alt="...">
                <h4 class="fs-3 fw-bold">Book your dream vacation now</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, repellendus non dolor labore quis porro minus voluptatum sunt eligendi ratione inventore omnis laborum vero perspiciatis, iusto veniam eaque quas cum!</p>
                <a href="" class="text-dark text-end text-decoration-none hvr-forward">Book Now
                <i class="fa-solid fa-arrow-right"></i></a> 
                </figure>
                </div>
            </div>
        </div>
    </section>

    <section>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                    
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