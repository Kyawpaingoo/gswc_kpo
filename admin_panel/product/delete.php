<?php
    require_once('../../db/dbconfig.php');

    $id= $_GET['id'];

    $product = $pdo_conn->prepare("DELETE FROM product WHERE id=".$id);
    $product->execute();
    header("location: product.php");
?>