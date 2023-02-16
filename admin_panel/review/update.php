<?php
    require_once('../../db/dbconfig.php');
    $id=$_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $star = $_POST['star'];

    $review ="UPDATE review SET email=:email, name =:name, description=:description, city=:city, country=:country, star=:star WHERE id=".$id;
    $review = $pdo_conn->prepare($review);
    $review->execute(array(':email'=>$email, ':name'=>$name,':description'=>$description,':city'=>$city,':country'=>$country,':star'=>$star));
    header('location:review.php');
?>