<?php
    require_once('../../db/dbconfig.php');
    $id=$_GET['id'];

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $zone = $_POST['zone'];
    $guest = $_POST['guest'];
    $description = $_POST['description'];

    $campsite ="UPDATE campsite SET image=:image, name =:name, description=:description, zone=:zone, price=:price, guest=:guest WHERE id=".$id;
    $campsite = $pdo_conn->prepare($campsite);
    $campsite->execute(array(':image'=>$image, ':name'=>$name,':description'=>$description,':zone'=>$zone,':price'=>$price,':guest'=>$guest));
    header('location:service.php');
?>