<?php
    require_once('../../db/dbconfig.php');
    $id = $_GET['id'];

    // $output = "SELECT * FROM product WHERE id=".$id;
    // echo $output;
    // exit();
    $review = $pdo_conn->prepare("SELECT * FROM review WHERE id=".$id);
    $review->execute();
    $review_result = $review->fetchAll();

    // var_dump($dataset);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6">

            <?php
                foreach($review_result as $review_row){
            ?>
                <form action="update.php?id=<?php echo $review_row['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $review_row['name']; ?>" class="form-control" id="name" placeholder="Name">
                </div>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="name" value="<?php echo $review_row['email']; ?>" >
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" >
                    <?php echo $review_row['description']; ?>"
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">City</label>
                    <input type="text" class="form-control" value="<?php echo $review_row['city']; ?>" name="city" id="category" placeholder="stock">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Country</label>
                    <input type="text" class="form-control" value="<?php echo $review_row['country']; ?>" name="country" id="category" placeholder="stock">
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">Rating</label>
                    <input type="number" class="form-control" value="<?php echo $review_row['star']; ?>" name="star" id="category" placeholder="stock">
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
</body>
</html>