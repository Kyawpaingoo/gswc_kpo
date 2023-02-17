<?php
session_start();
    require_once('header.php');
    require_once('../db/dbconfig.php');

    $searchErr = '';
    $employee_details = '';
    if(isset($_SESSION['save'])){
        if(!empty($_POST['search'])){
           $search = $_POST['search'];
           $user_search = $pdo_conn->prepare("SELECT * FROM user where name like '$%search%' ORDER BY  user.id ASC "); 
           $user_search->execute();
           $employee_details = $user_search->fetchAll(PDO::FETCH_ASSOC);
           print_r($employee_details);
        } else{
            $searchErr = "Please enter the information";
        } 
    }

    // $user = $pdo_conn->prepare("SELECT * FROM user ORDER BY  user.id ASC ");
    // $user->execute();
    // $user_result = $user->fetchAll();
?>
    <div class="container-fluid dashboard-bg f-400">
    <div class="container">
    <div class="row flex-column flex-lg-row py-4">
            <h2 class="h6 text text-white-50">QUICK STATS</h2>
            <div class="col-md-3">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                    <h3 class="card-tittle h5"><i class="fa-solid fa-user"></i> Monthly Visitor</h3>
                <span class="text-secondary fs-4">
                    <?php
                    include('counter.php');
                    ?>
                </span>
                </div>
                </div>
            </div>
          

          <div class="col-md-3">
            <div class="card border-left-success shadow">
                <div class="card-body">
                <h3 class="card-tittle h5"><i class="fa-solid fa-chart-simple"></i> Reaches</h3>
                <span class="text-secondary fs-4">
                   400
                </span>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-left-info shadow">
                <div class="card-body">
                <h3 class="card-tittle h5"><i class="fa-solid fa-dollar-sign"></i> Monthly Earning</h3>
                <span class="text-secondary fs-4">
                    350
                </span>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-left-warning shadow">
                <div class="card-body">
                <h3 class="card-tittle h5"><i class="fa-solid fa-comments"></i> Pending Requests</h3>
                <span class="text-secondary fs-4">
                    18
                </span>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container my-4">
            <div class="row bg-white p-3">
                <div class="col-md-7">
                <h4><i class="fa-solid fa-user"></i> Users</h4>
                </div>
            
                <div class="col-md-3">
                <form class="d-flex" role="search" method="post">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" name="save" type="submit">Search</button>
                </form>
                </div>

                <div class="col-md-2">
                    <button class="btn pt-0">
                    <i class="bi bi-download fs-3"></i>       
                    </button>                                                    
                    <button class="btn pt-0">
                    <i class="bi bi-printer-fill fs-3"></i>       
                    </button>                                                    
                </div>
            

        <table class="table table-bordered table-responsive ">      
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Age</th>
            <th scope="col">Country</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
            </tr>

            <?php
            if(!$employee_details){       
                    //foreach($user_result as $user_row){
            ?>
            <!-- <tr>
            <td><?php // echo $user_row['id']; ?></td>
            <td><?php // echo $user_row['name']; ?></td>
            <td><?php //echo $user_row['email']; ?></td>
            <td><?php //echo $user_row['pass']; ?></td>
            <td><?php //echo $user_row['age']; ?></td>
            <td><?php //echo $user_row['country']; ?></td>
            <td><?php //echo $user_row['role']; ?></td>
            <td><a href="edit.php?id=<?php //echo $user_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="delete.php?id=<?php //echo $user_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
            </td>    
            </tr>   -->
            <?php                  
                    //}
                
            } else{
                foreach($employee_details as $key=>$value){
            ?>
            <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['pass']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['country']; ?></td>
            <td><?php echo $value['role']; ?></td>
            <td><a href="edit.php?id=<?php echo $value['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="delete.php?id=<?php echo $value['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
            </td>    
            </tr>  
            <?php
                }
            }
            ?>
        </table>   
        </div>
    </div>
    </div>
    
<?php
    require_once('footer.php');
?>