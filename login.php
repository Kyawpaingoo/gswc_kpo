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
        <div class="row">
            <div class="col-md-4 mx-auto ">
                <form method="post" action="logincheck.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php');?>