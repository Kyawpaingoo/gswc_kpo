<?php
require_once('header.php');
require_once('db/dbconfig.php');
if(!empty($_SESSION['email'])){

    $id = $_GET['id'];
    $product= $pdo_conn->prepare("SELECT * FROM product WHERE id='".$id."'");
    $product->execute();
    $product_result =  $product->fetchAll();
?>
    <section class="f-400">
        <div class="container">
        <div class="row my-4">
        <?php
                if(!empty($product_result)){
                    foreach($product_result as $product_row){

            ?>
            <div class="col-md-6">
                <img src="images/<?php echo $product_row['image']; ?>" alt="">
                <h4><?php echo $product_row['name']; ?></h4>
                <figcaption class="figure-caption">Price: <?php echo $product_row['price']; ?> <br></figcaption>
                <figcaption class="figure-caption">In Stock: <?php echo $product_row['stock']; ?> <br></figcaption>
            </div>
            <div class="col-md-6">
                <form action="create_order.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" placeholder="City" name="city">
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" placeholder="Country" name="country">
            </div>

            <div class="mb-3">
                <label for="star" class="form-label">Product</label>
                
                <input type="text" class="form-control"  name="product" value="<?php echo $product_row['name']; ?>">
            <?php
                    }
                }
            ?>
            </div>
            
            <div class="mb-3">
                <label for="address" class="form-label">Qunatity</label>
                <input type="number" class="form-control"  name="quantity">
            </div>

            <input type="submit" class="btn btn-success" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            </form>
            </div>       
        </div>
    </section>
<?php
     }
     else{
         header('location:pitchtype.php?msg=error');
     }
    require_once('footer.php');
?>