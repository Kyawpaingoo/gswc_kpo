<?php
    require_once('db/dbconfig.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $pdo_statement = "INSERT INTO user (name,email, pass) VALUES (:name, :email, :pass)";
    $pdo_statement= $pdo_conn->prepare($pdo_statement);
    $pdo_statement->execute(array(':name'=>$name, ':email'=>$email, ':pass'=>$pass));

   header('location:login.php');
?>