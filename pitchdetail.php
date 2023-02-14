<?php
    require_once('header.php');
    require_once('db/dbconfig.php');
    $id = $_GET['id'];
    $tent= $pdo_conn->prepare("SELECT * FROM product WHERE id='".$id."'");
    $tent->execute();
    $tent_result =  $tent->fetchAll();
?>
    <div class="container">
        <div class="row my-4">
            <?php
                if(!empty($tent_result)){
                    foreach($tent_result as $tent_row){

            ?>
            <div class="col-md-6">
            <figure class="figure">
                <img src="images/<?php echo $tent_row['image'];?>" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Price: <?php echo $tent_row['price']; ?> <br></figcaption>
                <figcaption class="figure-caption">In Stock: <?php echo $tent_row['stock']; ?> <br></figcaption>
                </figure>
                <div class="row">
                    <div class="col">
                    <img src="images/parking.svg"  width="25px" height="25px" alt="">
                    <img src="images/caravan.svg" width="25px" height="25px" alt="">
                    <img src="images/washing-machine.svg" width="25px" height="25px" alt="">
                    <img src="images/shower.svg" width="25px" height="25px" alt="">
                    <img src="images/wifi.svg" width="25px" height="25px" alt="">
                    <img src="images/electric-_1_.svg" width="25px" height="25px" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4><?php echo $tent_row['name']; ?></h4>
                <p><?php echo $tent_row['description']; ?></p>
                <a href="#" class="btn btn-success">Rent Now!</a>
                <a href="pitchtype.php" class="btn btn-success">Go Back</a>
            </div>
            <?php                          
                    }
                }
            ?>
        </div>
    </div>
<?php
    require_once('footer.php')
?>