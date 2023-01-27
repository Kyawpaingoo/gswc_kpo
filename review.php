<?php 
    require_once('db/dbconfig.php');
    require_once('header.php');

    $camp_review = $pdo_conn->prepare("SELECT review. * FROM review ORDER BY  review.id DESC");
    $camp_review->execute();
    $camp_review_result = $camp_review->fetchAll();
?>
    <section class="review_header bg-secondary">
        <h1 class="text-center py-5">
        Review Post
        </h1>    
    </section>

    <section>
        <div class="container my-4 Review">
            <div class="row text-center pt-4">
                <h1>Review </h1>
            </div>
            <div class="row">
                <?php
                if(!empty($camp_review_result)){
                    foreach($camp_review_result as $row){     
                ?>
                <div class="col-md-4">
                    <p>
                       <?php
                       echo $row['description'];
                       ?> 
                    </p>
                    <figcaption>
                        <?php
                        echo $row['name']." - ".$row['city']." - ".$row['country'];
                        ?>
                    </figcaption>
                    <?php
                        for ($i=0; $i < $row['star']; $i++) { 
                            echo '<i class="text-warning bi bi-star-fill"></i>';
                        }
                    ?>
                    
                </div>
                <?php
                }
            }
                ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-6 align-center">
                <form action="create.php" method="POST">
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
                <label for="star" class="form-label">Rate Us Star</label>
                <input type="number" class="form-control"  name="star">
            </div>
            
            <div class="mb-3">
                <label for="address" class="form-label">Review</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>

            <input type="submit" class="btn btn-success" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            </form>
            </div>       
        </div>
    </section>
    
<?php
    require_once('footer.php');
?>