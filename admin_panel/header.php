
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/a64b1fca43.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand text-success" href="#"><img src="../images/logoipsum-225.svg" alt="" width="45px" height="45px">
            Admin</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                </ul>
                <div class="navbar nav">
                <?php
                if(!empty($_SESSION['name'])){
                    
                ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user"></i> <?php echo  $_SESSION['name'];?>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item">User Profile</a>
                        </li>
    
                        <li>
                            <a href="../logout.php" class="dropdown-item">Logout</a>
                        </li>
                    </ul>

                </li>
                <?php
                } else{
                    
                ?>
                <a href="../login.php" class="nav-link">
                    <?php echo  "Login";?>
                    </a>
                <?php
                }
                ?>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa-solid fa-gear"></i></a>
                </li>
            </div>
            </div>
      </div>
    </nav>
    
  </header>