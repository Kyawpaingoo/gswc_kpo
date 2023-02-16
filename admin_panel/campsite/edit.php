<?php
    require_once('header.php'); 
    require_once('../../db/dbconfig.php');
    $id = $_GET['id'];

 
    $campsite = $pdo_conn->prepare("SELECT * FROM campsite WHERE id=".$id);
    $campsite->execute();
    $campsite_result = $campsite->fetchAll();

    var_dump($campsite_result);
?>

<div class="container f-400 my-4 dashboard-bg py-4">
        <div class="row">
            <div class="col-md-6 mx-auto bg-white py-4">

            <?php
                foreach($campsite_result as $campsite_row){
            ?>
                <form action="update.php?id=<?php echo $campsite_row['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $campsite_row['name']; ?>" class="form-control" id="name" placeholder="Name">
                </div>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Choose an image</label>
                    <input type="file" name="image" class="form-control" id="name" value="../../images/<?php echo $campsite_row['image']; ?>" >
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" value="<?php echo $campsite_row['price']; ?>" class="form-control" id="price" placeholder="price">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" >
                    <?php echo $campsite_row['description']; ?>"
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Guest</label>
                    <input type="number" class="form-control" value="<?php echo $campsite_row['guest']; ?>" name="guest" id="category" placeholder="guest">
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">Zone</label>
                    <input type="text" class="form-control" value="<?php echo $campsite_row['zone']; ?>" name="zone" id="category" placeholder="stock">
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