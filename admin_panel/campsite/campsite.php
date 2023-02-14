<?php 
    session_start();
    require_once('header.php');
    require_once('../../db/dbconfig.php');

    $campsite = $pdo_conn->prepare("SELECT * FROM campsite ORDER BY  campsite.id ASC ");
    $campsite->execute();
    $campsite_result = $campsite->fetchAll();
?>


<div class="container-fluid dashboard-bg">
        <div class="contianer">
            <div class="row py-4">
                <div class="col-md-2">
                    <h2>Products</h2>
                    
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
                    <th scope="col" class="py-3">Image</th>
                    <th scope="col" class="py-3">ID</th>
                    <th scope="col" class="py-3">Name</th>                  
                    <th scope="col" class="py-3">Zone</th>
                    <th scope="col" class="py-3">Guest</th>
                    <th scope="col" class="py-3">Price</th>
                    <th scope="col" class="py-3">Action</th>
                </tr>

                <?php
                if(!empty($campsite_result)){
                    foreach($campsite_result as $campsite_row){
                ?>
                <tr>
                    <td><img src="../../images/<?php echo $campsite_row['image']; ?>" class="img-fluid" width="100px" height="100px"></td>
                    <td><?php echo $campsite_row['id']; ?></td>
                    <td><?php echo $campsite_row['name']; ?></td>           
                    <td><?php echo $campsite_row['zone']; ?></td>
                    <td><?php echo $campsite_row['guest']; ?></td>
                    <td><?php echo $campsite_row['price']; ?></td>
                    <td>
                    <a href="#" class="btn btn-success"><i class="bi bi-search"></i> View</a>
                    <a href="edit.php?id=<?php echo $campsite_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete.php?id=<?php echo $campsite_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
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