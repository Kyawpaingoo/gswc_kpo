<?php
    require_once('header.php');
?>
    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h3 class="fw-bold text-success py-2">Register Account</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                <form action="create_account.php" method="post" novalidate>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> I have agreed to
                        <a href="#" class="text-dark text-decoration-none">Terms of Use</a> 	&#38;
                        <a href="#" class="text-dark text-decoration-none">Privacy Policy</a></label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <p>Already have an account? <a href="login.php" class="text-dark">Login Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once('footer.php');
?>