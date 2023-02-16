<?php
    require_once('../../db/dbconfig.php');

    $id= $_GET['id'];

    $review = $pdo_conn->prepare("DELETE FROM review WHERE id=".$id);
    $review->execute();
    header("location: review.php");
?>