<?php
    require_once('header.php');
    require_once('../../db/dbconfig.php');
    $category = $pdo_conn->prepare("SELECT * FROM category ORDER BY  category.id ASC ");
    $category->execute();
    $category_result = $category->fetchAll();
?>
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/style.css">
<div class="container-fluid dashboard-bg">
    <div class="contianer py-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold text-center">Create New Product</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="create.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Choose an image</label>
                    <input type="file" name="image" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" ></textarea>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" id="price" placeholder="Stock">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <?php 
                            foreach($category_result as $category_row){

                        ?>
                        <option value="<?php echo $category_row['id'] ?>"><?php echo $category_row['name'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Upload</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../../js/bootstrap.bundle.min.js"></script>
<?php
    require_once('../footer.php')
?>