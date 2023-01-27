<?php 
    require_once('db/dbconfig.php');
    require_once('header.php');
    $id = $_GET['id'];
    $info_local= $pdo_conn->prepare("SELECT * FROM info_local WHERE id='".$id."'");
    $info_local->execute();
    $info_local_result =  $info_local->fetchAll();

?>
    <div class="container">
        <div class="row my-4">
            <?php
                if(!empty($info_local_result)){
                    foreach($info_local_result as $row){

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