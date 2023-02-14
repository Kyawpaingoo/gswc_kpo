<?php
    require_once('../../db/dbconfig.php');

    $id= $_GET['id'];

    $campsite = $pdo_conn->prepare("DELETE FROM campsite WHERE id=".$id);
    $campsite->execute();
    header("location: service.php");
?>