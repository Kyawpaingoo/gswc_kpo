<?php
    require_once('../../db/dbconfig.php');
    $id=$_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    // var_dump($_POST);
    $product_order ="UPDATE product_order SET name =:name, email=:email, city=:city, country=:country, product=:product, quantity=:quantity WHERE id=".$id;
    $product_order = $pdo_conn->prepare($product_order);
    $product_order->execute(array( ':name'=>$name, ':email'=>$email, ':city'=>$city, ':country'=>$country, ':product'=>$product, ':quantity'=>$quantity));
    header('location:booking.php');
   
?>