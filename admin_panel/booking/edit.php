<?php
    require_once('../../db/dbconfig.php');
    require_once('header.php');
    $id = $_GET['id'];

 
    $product_order = $pdo_conn->prepare("SELECT * FROM product_order WHERE id=".$id);
    $product_order->execute();
    $product_order_result = $product_order->fetchAll();

    // var_dump($dataset);
?>

<div class="container my-4 py-4 dashboard-bg">
        <div class="row">
            <div class="col-md-6 bg-white py-4 mx-auto">

            <?php
                foreach($product_order_result as $product_order_row){
            ?>
                <form action="update.php?id=<?php echo $product_order_row['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $product_order_row['name']; ?>" class="form-control" id="name" placeholder="Name">
                </div>
 
                <div class="mb-3">
                    <label for="price" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php echo $product_order_row['email']; ?>" class="form-control" id="price" placeholder="email">
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">City</label>
                    <input type="text" class="form-control" value="<?php echo $product_order_row['city']; ?>" name="city" id="category" placeholder="stock">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Country</label>
                    <input type="text" class="form-control" value="<?php echo $product_order_row['country']; ?>" name="country" id="category" placeholder="guest">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Product</label>
                    <input type="text" class="form-control" value="<?php echo $product_order_row['product']; ?>" name="product" id="category" placeholder="guest">
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">Qunatity</label>
                    <input type="number" class="form-control" value="<?php echo $product_order_row['quantity']; ?>" name="quantity" id="category" placeholder="stock">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
    require_once('footer.php');
?>