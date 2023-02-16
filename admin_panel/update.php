<?php
    require_once('../db/dbconfig.php');
    $id=$_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $country = $_POST['country'];

    $user ="UPDATE user SET name =:name, email=:email, pass=:pass, age=:age, country=:country WHERE id=".$id;
    $user = $pdo_conn->prepare($user);
    $user->execute(array(':name'=>$name, ':email'=>$email, ':pass'=>$pass,':age'=>$age,':country'=>$country));
    header('location:dashboard.php');
?>