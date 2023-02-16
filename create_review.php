<?php
    require_once('db/dbconfig.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $star = $_POST['star'];

   $pdo_statement = "INSERT INTO review (name,email,description,city,country,star) VALUES (:name, :email, :description, :city,:country, :star)";

   $pdo_statement= $pdo_conn->prepare($pdo_statement);
   $pdo_statement->execute(array(':name'=>$name, ':email'=>$email, ':description'=>$description, ':city'=>$city, ':country'=>$country, ':star'=>$star));

   header('location:review.php');
?>