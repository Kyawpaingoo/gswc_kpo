<?php
    require_once('../../db/dbconfig.php');
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $zone = $_POST['zone'];
    $guest = $_POST['guest'];
    $description = $_POST['description'];

    $campsite = "INSERT INTO campsite (image,name, zone, guest, description, price) VALUES(:image,:name, :zone, :guest, :description, :price)";
    $campsite = $pdo_conn->prepare($campsite);
    $campsite->execute(array(':image'=> $image,':name'=>$name, ':zone'=>$zone, ':guest'=>$guest, 'description'=>$description,':price'=>$price));
    header('location:service.php');
    // var_dump($campsite);
?>