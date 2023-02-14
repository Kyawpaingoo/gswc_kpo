<?php
    require_once('../../db/dbconfig.php');
    $id=$_GET['id'];

    $image = $_POST['image'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $product ="UPDATE product SET image=:image, name =:name, description=:description, category_id=:category_id, price=:price, stock=:stock WHERE id=".$id;
    $product = $pdo_conn->prepare($product);
    $product->execute(array(':image'=>$image, ':name'=>$name,':description'=>$description,':category_id'=>$category_id,':price'=>$price,':stock'=>$stock));
    header('location:product.php');
?>