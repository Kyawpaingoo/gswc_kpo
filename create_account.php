<?php
    require_once('db/dbconfig.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $country = $_POST['country'];

    $pdo_statement = "INSERT INTO user (name,email, pass, age, country) VALUES (:name, :email, :pass, :age, :country)";
    $pdo_statement= $pdo_conn->prepare($pdo_statement);
    $pdo_statement->execute(array(':name'=>$name, ':email'=>$email, ':pass'=>$pass, 'age'=>$age, 'country'=>$country));

   header('location:login.php');
?>