<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location:login.php');
} 
include('db/dbconfig.php');
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pdo_statement = $pdo_conn->prepare("SELECT * FROM user WHERE email='".$email."' AND pass='".$pass."'");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
    if(!empty($result)) { 
        $_SESSION['name'] = $result[0]['name'];
        $_SESSION['email'] = $result[0]['email']; 
        if($result[0]['type'] == 0){
            header('location:admin_panel/dashboard.php');
        }else{
            header('location:index.php');
        }
    } 
    else{
        if(!ISSET($_SESSION['attempt'])){
            $_SESSION['attempt'] = 0;
        }
        
        $_SESSION['attempt'] += 1;
        
        if($_SESSION['attempt'] === 3){
            $_SESSION['msg'] = "Your Login is disabled";
            header('location:index.php?msg=disabled');
        }
        header('location:login.php?msg=error');
    }
?>