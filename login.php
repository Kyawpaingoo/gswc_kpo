<?php 
    require_once('header.php');
    $msg = "";
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
    }else{
        $msg = "";
    }
?>
<main>
    <div class="container py-5">
        <?php
            if($msg != "" || $msg != null)
            {
        ?>
            <div class="row">
                <div class="col-md-4 mx-auto ">
                    <div class="alert alert-danger" role="alert">
                        <strong>Check your input information.</strong>
                    </div>

                </div>
            </div>
        <?php
            }
        ?>
        <div class="row f-700">
            <div class="col-md-4 mx-auto">
                <h3 class="fw-bold text-success">Login Account</h3>
            </div>
        </div>
        <div class="row f-400">
            <div class="col-md-4 mx-auto ">
                <form method="post" action="logincheck.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> I have agreed to
                        <a href="#" class="text-dark text-decoration-none">Terms of Use</a> 	&#38;
                        <a href="#" class="text-dark text-decoration-none">Privacy Policy</a></label>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php');?>