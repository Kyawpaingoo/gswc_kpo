<?php
    session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css' integrity='sha512-Qg72y9f1a3aVc1FVnjq5YURLOOG8fDKQjMnhxYaZgBz4nIVjpVOBUtuMMMqkZPS1FlVrzzEBXq2sM6Qp1zen/Q==' crossorigin='anonymous'/>
        <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary f-700">
    <div class="container">
        <a class="navbar-brand text-success" href="#">
            <img src="images/logoipsum-225.svg" alt="" width="45px" height="45px">
            GWSC
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="information.php">Infromation</a>
            </li>
            <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="pitchtype.php">Product</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Info
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="feature.php">Feature</a></li>
                <li><a class="dropdown-item" href="local_attraction.php">Local Attraction</a></li>
                <li><a class="dropdown-item" href="review.php">Review</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="contact.php">Contact</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="navbar nav ms-2">
        <?php
                 if(!empty($_SESSION['name'])){
                    
                    ?>
                    <li class="nav-item dropdown text-dark">
                        <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i> <?php echo  $_SESSION['name'];?>
                        </a>
    
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">User Profile</a>
                            </li>
        
                            <li>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </li>
                        </ul>
    
                    </li>
                    <?php
                    } else{
                        
                    ?>
                    <a href="register.php" class="btn btn-outline-secondary">
                        <?php echo  "Sign In";?>
                        </a>
                    <?php
                    }
                    ?>

            </div>                    
        </div>
    </div>
    </nav>