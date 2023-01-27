<?php
    require_once('header.php');
    require_once('db/dbconfig.php');
   
    $camp = $pdo_conn->prepare("SELECT  * FROM camp_infrastructure ORDER BY  camp_infrastructure.id ASC");
    $camp->execute();
    $camp_result = $camp->fetchAll();
    
    $info_local= $pdo_conn->prepare("SELECT * FROM info_local  ORDER BY  info_local.id ASC");
    $info_local->execute();
    $info_local_result =  $info_local->fetchAll();

    $local_main= $pdo_conn->prepare("SELECT * FROM local_attraction_main  ORDER BY  local_attraction_main.id ASC");
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
                <?php
                if(!empty($camp_result)){
                    foreach($camp_result as $row){

                   
                ?>
                <div class="col-md-3 text-center border-end"><h5><img src="images/<?php echo $row['image']; ?>" width="80px" height="80px" alt="">   </h5>
                <p>
                    <?php
                    echo  $row['description'];
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
        <div class="container">
            <div class="row my-4">
                <?php
                    if(!empty($info_local)){
                        foreach($info_local_result as $local_row){

                ?>
                <div class="col-md-6">
                <img src="images/<?php echo $local_row['image']; ?>" class=" img-fluid rounded my-3"  alt="...">
                </div>
                <div class="col-md-6 py-4">
                    <h2> <?php echo $local_row['title']; ?> </h2>
                    <p>
                    <?php echo substr($local_row['description'],0,200); ?>
                    </p>
                    <a href="local_attraction_detail.php?id=<?php echo $local_row['id']; ?>" class="btn btn-success">Read More</a>
                </div>
                <?php 
                     }
                    }
                ?>
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