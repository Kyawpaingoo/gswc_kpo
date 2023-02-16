<?php
    require_once('db/dbconfig.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    $pdo_statement = "INSERT INTO product_order (name,email, city, country, product, quantity) 
    VALUES (:name, :email, :city, :country, :product, :quantity)";
    $pdo_statement= $pdo_conn->prepare($pdo_statement);
    $pdo_statement->execute(array(':name'=>$name, ':email'=>$email, ':city'=>$city, 'country'=>$country, 'product'=>$product, ':quantity'=>$quantity));
    // var_dump($pdo_statement);
    header('location:pitchtype.php');
?>