
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/style.css">
    
</head>

<body>

    <!-- place navbar here -->
   <div class="container-fluid">
      <div class="row">
    <nav class="col-2 bg-dark">
          <h1 class="h-4 py-3 text-center fw-bold">
          <img src="../../images/dashboard-logo.svg" alt="" width="45px" height="45px">
            <span class="d-none d-lg-inline text-light">Admin Dashboard</span>
          </h1>

          <hr class="divider text-white my-0">

          <li class="nav-item">
            <a href="../dashboard.php" class="nav-link text-light"><i class="bi bi-table fs-5 pe-2"></i>
              Dashboard</a>
          </li>

          <hr class="divider text-white my-3">

          <div class="side-heading text-white">
            Interface
          </div>

          <li class="nav-item">
            <a href="../campsite/campsite.php" class="nav-link text-light"><i class="bi bi-card-list fs-5 pe-2"></i>
              Campsite</a>
          </li>

          <li class="nav-item">
            <a href="product.php" class="nav-link text-light"><i class="bi bi-bag-fill fs-5 pe-2"></i>
              Products</a>
          </li>

          <li class="nav-item">
            <a href="../review/review.php" class="nav-link text-light"><i class="bi bi-bag-fill fs-5 pe-2"></i>
              Review</a>
          </li>

          <li class="nav-item">
            <a href="../booking/booking.php" class="nav-link text-light"><i class="bi bi-bag-fill fs-5 pe-2"></i>
              Booking</a>
          </li>
    </nav>

        <main class="col-10">
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <div class="flex-fill"></div>

            <div class="navbar nav">
            <li class="nav-item">
                <a href="#" class="nav-link position-relative"><i class="bi bi-envelope-fill text-dark fs-4"></i>
                <span class="badge rounded-pill bg-danger badge-counter">
                  3+
                </span>
              </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link position-relative"><i class="bi bi-bell-fill text-dark fs-4"></i>
                <span class="badge rounded-pill bg-danger badge-counter">
                  7
                </span>
              </a>
            </li>
            
        <?php
                if(!empty($_SESSION['email'])){
                    
                ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fs-4"></i> <?php echo  $_SESSION['name'];?>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item">User Profile</a>
                        </li>
    
                        <li>
                            <a href="../../logout.php" class="dropdown-item">Logout</a>
                        </li>
                    </ul>

                </li>
                <?php
                } else{
                    
                ?>
                <a href="../login.php" class="btn btn-outline-secondary">
                    <?php echo  "Sign In";?>
                    </a>
                <?php
                }
                ?>
             <li class="nav-item">
                    <a href="#" class="nav-link"><i class="text-dark bi bi-gear-fill fs-4"></i></a>
                </li>
            </div>
          </nav>
        
    
 