<?php 
    session_start();
    require_once('header.php');
    require_once('../../db/dbconfig.php');

    $product_order = $pdo_conn->prepare("SELECT * FROM product_order ORDER BY  product_order.id ASC ");
    $product_order->execute();
    $product_order_result = $product_order->fetchAll();
?>

<div class="container-fluid dashboard-bg py-4 ">
        <div class="contianer bg-white my-4 p-4">
            <div class="row py-4">
                <div class="col-md-2">
                    <h2>Activity</h2>      
                </div>

                <div class="col-md-7">
                    <a href="create_form.php" class="btn btn-success"><i class="bi bi-plus-lg"></i> Add New</a>
                    <a href="#" class="btn btn-success"><i class="bi bi-download"></i> Import</a>
                    <a href="#" class="btn btn-success"><i class="bi bi-printer-fill"></i> Export</a>
                </div>

                <div class="col-md-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>

            <div class="row">
            <table class="table table-striped">
                <tr>
                    <th scope="col" class="py-3">ID</th>
                    <th scope="col" class="py-3">Name</th>                  
                    <th scope="col" class="py-3">Email</th>
                    <th scope="col" class="py-3">City</th>
                    <th scope="col" class="py-3">Country</th>
                    <th scope="col" class="py-3">Qunatity</th>
                    <th scope="col" class="py-3">Action</th>
                </tr>

                <?php
                if(!empty($product_order_result)){
                    foreach($product_order_result as $product_order_row){
                ?>
                <tr>
                    <td><?php echo $product_order_row['id']; ?></td>
                    <td><?php echo $product_order_row['name']; ?></td>           
                    <td><?php echo $product_order_row['email']; ?></td>           
                    <td><?php echo $product_order_row['city']; ?></td>
                    <td><?php echo $product_order_row['country']; ?></td>
                    <td><?php echo $product_order_row['quantity']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $product_order_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete.php?id=<?php echo $product_order_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
                </tr>
                <?php                  
                        }
                    }
                ?>
            </table>
            </div>
        </div>
    </div>
   
<?php
    require_once('footer.php');
?>