<?php
    require_once('header.php');
    require_once('db/dbconfig.php');
    $msg = "";
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
    }

    $tent = $pdo_conn->prepare("SELECT  * FROM product WHERE category_id = '1' ORDER BY  product.id ASC");
    $tent->execute();
    $tent_result = $tent->fetchAll();

    $motorhome = $pdo_conn->prepare("SELECT  * FROM product WHERE category_id = '2' ORDER BY  product.id ASC");
    $motorhome->execute();
    $motorhome_result = $motorhome->fetchAll();

    $camper = $pdo_conn->prepare("SELECT  * FROM product WHERE category_id = '3' ORDER BY  product.id ASC");
    $camper->execute();
    $camper_result = $camper->fetchAll();
?>
   
    <section class="pitchtype_header bg-secondary f-400">
        <h1 class="text-center py-5">
        Pitch Type and Availability
        </h1>    
    </section>    
    <section class="f-400">
        <div class="container my-3">
        <?php
            if($msg == "error")
                {
        ?>
            <div class="row">
                <div class="col-md-4 mx-auto mt-2">
                    <div class="alert alert-danger" role="alert">
                        <strong>Please Login your account.</strong>
                        <a href="login.php" class="bnt text-decoration-none f-300 btn btn-sm">Login Here!</a>
                    </div>
                </div>
            </div>
        <?php
                }
        ?>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center fw-bold">Pitch Rental Service</h3>
                </div>
            </div>
            <div class="row my-4 py-4">
                <?php
                    if(!empty($tent_result)){
                        foreach($tent_result as $tent_row){
             
                ?>
                <div class="col-md-4">
                <figure class="figure" style="height: 500px;">
                <img src="images/<?php echo $tent_row['image']; ?>" class="figure-img img-fluid square" alt="...">
            
                    <h4><?php echo $tent_row['name']; ?> </h4>
                <figcaption class="figure-caption">Price: <?php echo '$'.$tent_row['price']; ?> 
               
                </figcaption>
                <figcaption class="figure-caption">In Stock: <?php echo $tent_row['stock']; ?> </figcaption>
                <p style="text-align: justify;">
                <?php echo substr($tent_row['description'],0,200)."..."; ?>
                </p>
                <hr class="divider">
                <div class="row">
                    <div class="col-md-6">
                    <a href="order.php?id=<?php  echo $tent_row['id']; ?>" class="text-success text-decoration-none hvr-forward ">Rent Now
                    <i class="fa-solid fa-arrow-right"></i></a>  
                    </div>
                    <div class="col-md-6">
                    <a href="pitchdetail.php?id=<?php echo $tent_row['id']; ?>" class="text-dark text-end text-decoration-none hvr-forward ps-3">View More Details
                    <i class="fa-solid fa-arrow-right"></i> 
                    </a> 
                    </div>            
                    </div>     
                </figure>
                </div>
                <?php
                    }
                }
                ?>
               
            </div>
        </div>
    </section>

    <section class="f-400">
    <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center fw-bold">Motorhomes Rental Service</h3>
                </div>
            </div>
            <div class="row my-4 py-4">
                <?php
                    if(!empty($motorhome_result)){
                        foreach($motorhome_result as $motorhome_row){
             
                ?>
                <div class="col-md-4">
                <figure class="figure">
                <img src="images/<?php echo $motorhome_row['image']; ?>" class="figure-img img-fluid square" alt="...">
                
                <h4><?php echo $motorhome_row['name']; ?></h4>
                <figcaption class="figure-caption">Price: <?php echo '$'.$motorhome_row['price']; ?> <br></figcaption>
                <figcaption class="figure-caption">In Stock: <?php echo $motorhome_row['stock']; ?> <br></figcaption>
                <p>
                <?php echo substr($motorhome_row['description'],0,200)."..."; ?>
                </p>
                <hr class="divider">
                <div class="row">
                <div class="col-md-6">
                    <a href="order.php?id=<?php  echo $tent_row['id']; ?>" class="text-success text-decoration-none hvr-forward ">Rent Now
                    <i class="fa-solid fa-arrow-right"></i></a>  
                </div>
                <div class="col-md-6">
                    <a href="pitchdetail.php?id=<?php echo $motorhome_row['id']; ?>" class="text-dark text-end text-decoration-none hvr-forward ps-3">View More Details
                    <i class="fa-solid fa-arrow-right"></i> 
                    </a> 
                </div> 
                    </div>    
                </figure>
                </div>
                <?php
                    }
                }
                ?>
               
            </div>
        </div>
    </section>

    <section class="f-400">
    <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center fw-bold">Camper Rental Service</h3>
                </div>
            </div>
            <div class="row my-4 py-4">
                <?php
                    if(!empty($camper_result)){
                        foreach($camper_result as $camper_row){
             
                ?>
                <div class="col-md-4">
                <figure class="figure">
                <img src="images/<?php echo $camper_row['image']; ?>" class="figure-img img-fluid square" alt="...">
                
                <h4><?php echo $camper_row['name']; ?></h4>
                <figcaption class="figure-caption">Price: <?php echo '$'.$camper_row['price']; ?> <br></figcaption>
                <figcaption class="figure-caption">In Stock: <?php echo $camper_row['stock']; ?> <br></figcaption>
                <p>
                <?php echo substr($camper_row['description'],0,200)."..."; ?>
                </p>
                <hr class="divider">
                <div class="row">
                <div class="col-md-6">
                    <a href="order.php?id=<?php  echo $tent_row['id']; ?>" class="text-success text-decoration-none hvr-forward ">Rent Now
                    <i class="fa-solid fa-arrow-right"></i></a>  
                    </div>
                    <div class="col-md-6">
                    <a href="order.php?id=<?php echo $camper_row['id']; ?>" class="text-dark text-end text-decoration-none hvr-forward ps-3">View More Details
                    <i class="fa-solid fa-arrow-right"></i> 
                    </a> 
                    </div> 
                    </div>    
                </figure>
                </div>
                <?php
                    }
                }
                ?>
               
            </div>
        </div>
    </section>

<?php
    require_once('footer.php');
?>