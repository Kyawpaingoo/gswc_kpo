<?php 
    require_once('db/dbconfig.php');
    require_once('header.php');
    $id = $_GET['id'];
    $local_main= $pdo_conn->prepare("SELECT * FROM local_attraction_main WHERE id='".$id."'");
    $local_main->execute();
    $local_main_result =  $local_main->fetchAll();

?>
    <div class="container">
        <div class="row my-4">
            <?php
                if(!empty($local_main_result)){
                    foreach($local_main_result as $row){

             ?>
            <div class="col-md-6">
                <img src="images/<?php echo $row['image']; ?> " class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['description']; ?></p>
                <a href="index.php" class="btn btn-success">Back to Home Page</a>
            </div>
            <?php   
                    }
                }
            ?>
        </div>
    </div>
<?php 
    require_once('footer.php');
?>