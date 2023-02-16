<?php
    require_once('header.php');
    require_once('../../db/dbconfig.php');
    $campsite = $pdo_conn->prepare("SELECT * FROM campsite ORDER BY  campsite.id ASC ");
    $campsite->execute();
    $campsite_result = $campsite->fetchAll();
?>

<div class="container-fluid dashboard-bg f-400">
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
                    <label for="stock" class="form-label">Guest</label>
                    <input type="number" name="guest" class="form-control" id="price" placeholder="Guest">
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Zone</label>
                    <input type="text" name="zone" class="form-control" id="price" placeholder="Zone">
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