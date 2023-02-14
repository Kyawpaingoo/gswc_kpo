<?php
    require_once('../../db/dbconfig.php');
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $stock = $_POST['stock'];

    $product = "INSERT INTO product (image,name,description, category_id,price, stock) VALUES(:image,:name, :description, :category_id, :price, :stock)";
    $product = $pdo_conn->prepare($product);
    $product->execute(array(':image'=> $image,':name'=>$name,':description'=>$description,':category_id'=>$category_id,':price'=>$price, ':stock'=>$stock));
    header('location:product.php');
    // var_dump($product);
?>