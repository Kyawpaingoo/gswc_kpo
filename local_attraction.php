<?php
    require_once('header.php');
    require_once('db/dbconfig.php');
    
    $local_main= $pdo_conn->prepare("SELECT * FROM local_attraction  ORDER BY  local_attraction.id ASC");
    $local_main->execute();
    $local_main_result =  $local_main->fetchAll();
?>
    <section class="local_header">
        <div class="container">
        <h1 class="fs-2 fw-bold">
       Connect with Nature
    </h1>
    <p class="fs-1 fw-bold">Change the way you think</p>  
    <a href="#" class="btn btn-outline-light ms-3">Check Availability</a>
        </div>
   
    </section>

    <section>
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
    <section>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-6">
                <img src="images/attraction1.jpg" class=" img-fluid rounded my-3"  alt="...">
                </div>
                <div class="col-md-6 py-4">
                    <h2> Yosemite National Park </h2>
                    <p>Yosemite National Park in California is a true natural wonder that offers a wide range of outdoor activities and
                    breathtaking scenery for visitors. Known for its granite cliffs, cascading waterfalls, and towering sequoia trees, 
                    the park covers over 750,000 acres of wilderness in the Sierra Nevada Mountains of California.
                    One of the most popular activities in the park is hiking. With over 750 miles of trails, visitors can
                    explore the park's diverse landscapes, including alpine meadows, forests, and granite cliffs. 
                    </p>
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-md-6">
                <img src="images/la.jpg" class=" img-fluid rounded my-3"  alt="...">
                </div>
                <div class="col-md-6 py-4">
                    <h2> Grand Canyon </h2>
                    <p>The Grand Canyon in Arizona is truly one of the most spectacular natural wonders in the world.
                    The park, which is located in northern Arizona, covers over 1.2 million acres and is home to the iconic Grand Canyon,
                    a massive gorge that is over a mile deep and up to 18 miles wide in some places. The Grand Canyon is a result of millions
                    of years of erosion caused by the Colorado River and its tributaries.
                    </p>
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-md-6">
                <img src="images/la3.jpg" class=" img-fluid rounded my-3"  alt="...">
                </div>
                <div class="col-md-6 py-4">
                    <h2> Glacier National Park </h2>
                    <p>Glacier National Park in Montana is a true natural wonder that offers a wide range of outdoor activities 
                    and breathtaking scenery for visitors. Known for its rugged mountains, pristine lakes, and diverse wildlife, 
                    the park covers over 1 million acres of wilderness in the Rocky Mountains of Montana and is a part of the Crown of 
                    the Continent Ecosystem.
                    </p>
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row my-4">
                <?php
                    if(!empty($local_main)){
                        foreach($local_main_result as $row){
                       
                ?>
                <div class="col-md-4 my-3">
                <div class="card" >
                        <img src="images/<?php echo $row['image']; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text">

                            <?php echo substr($row['description'],0,200); ?>
                            </p>
                            <a href="local_attraction_moredetail.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Read More</a>
                        </div>
                        </div>
                </div>
                <?php
                     }
                    }
                ?>
            </div>
        </div>
    </section>


    <section class="welcome2 my-4">
        <div class="container">
        <h1 class="fs-1 fw-bold text-start ps-5 pt-3 lh-lg">Start booking at our website <br> to relax your mind</h1>
            
            <a href="pitchtype.php" class="btn btn-success ms-5">Check Now!</a>
        </div>
    </section>
<?php
    require_once('footer.php');
?>