<?php
    require_once('header.php');
    require_once('db/dbconfig.php');

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
   
    <section class="pitchtype_header bg-secondary">
        <h1 class="text-center py-5">
        Pitch Type and Availability
        </h1>    
    </section>

    <div class="container my-4">
    <form class="row row-cols-lg-auto g-3 align-items-center">
        <div class="col-12">
            <label class="visually py-1" for="inlineFormInputGroupUsername"><i class="bi bi-calendar3"></i>Check In</label>
            <div class="input-group">
            <input type="datetime" class="form-control" id="inlineFormInputGroupUsername">
            </div>
        </div>
        <div class="col-12">
            <label class="visually py-1" for="inlineFormInputGroupUsername"><i class="bi bi-calendar3"></i>Check Out</label>
            <div class="input-group">
            <input type="datetime" class="form-control" id="inlineFormInputGroupUsername">
            </div>
        </div>
        <div class="col-12">
            <label class="visually py-1" for="inlineFormInputGroupUsername"><i class="bi bi-person"></i>Guest Number</label>
            <div class="input-group">
            <input type="number" class="form-control" id="inlineFormInputGroupUsername">
            </div>
        </div>
        

        <div class="col-12">
            <label class="py-1" for="inlineFormSelectPref">Campsite Zone</label>
            <select class="form-select" id="inlineFormSelectPref">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>

        <div class="col-12 pt-4">
            <button type="submit" class="btn btn-success">Check Availability</button>
        </div>
        </form>
    </div>

    <section>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Pitch Rental Service</h3>
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
                    <a href="pitchdetail.php?id=<?php echo $tent_row['id']; ?>" class="text-success text-decoration-none hvr-forward ">Rent Now
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

    <section>
    <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Motorhomes Rental Service</h3>
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
                    <a href="motorhomedetail.php?id=<?php echo $motorhome_row['id']; ?>" class="text-success text-decoration-none hvr-forward ">Rent Now
                    <i class="fa-solid fa-arrow-right"></i></a>  
                </div>
                <div class="col-md-6">
                    <a href="motorhomedetail.php?id=<?php echo $motorhome_row['id']; ?>" class="text-dark text-end text-decoration-none hvr-forward ps-3">View More Details
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

    <section>
    <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Camper Rental Service</h3>
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
                    <a href="camperhomedetail.php?id=<?php echo $camper_row['id']; ?>" class="text-success text-decoration-none hvr-forward ">Rent Now
                    <i class="fa-solid fa-arrow-right"></i></a>  
                    </div>
                    <div class="col-md-6">
                    <a href="camperhomedetail.php?id=<?php echo $camper_row['id']; ?>" class="text-dark text-end text-decoration-none hvr-forward ps-3">View More Details
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