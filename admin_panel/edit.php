<?php
    require_once('header.php');
    require_once('../db/dbconfig.php');
    $id = $_GET['id'];

    $user = $pdo_conn->prepare("SELECT * FROM user WHERE id=".$id);
    $user->execute();
    $user_result = $user->fetchAll();

    // var_dump($dataset);
?>  
    <div class="container dashboard-bg f-400">
        <div class="row my-4 py-4">
            <div class="col-md-6 bg-white py-5 mx-auto">

            <?php
                foreach($user_result as $user_row){
            ?>
                <form action="update.php?id=<?php echo $user_row['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $user_row['name']; ?>" class="form-control" id="name" placeholder="Name">
                </div>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="name" value="<?php echo $user_row['email']; ?>" >
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Password</label>
                    <textarea class="form-control" name="pass" id="description" >
                    <?php echo $user_row['pass']; ?>"
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Age</label>
                    <input type="number" class="form-control" value="<?php echo $user_row['age']; ?>" name="age" id="category" placeholder="stock">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Country</label>
                    <input type="text" class="form-control" value="<?php echo $user_row['country']; ?>" name="country" id="category" placeholder="stock">
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
    require_once('footer.php')
?>