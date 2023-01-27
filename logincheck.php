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
        header('location:admin_panel/dashboard.php');
    }else{
        header('location:login.php?msg=error');
    }
?>