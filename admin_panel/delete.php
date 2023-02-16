<?php
    require_once('../db/dbconfig.php');

    $id= $_GET['id'];

    $user = $pdo_conn->prepare("DELETE FROM user WHERE id=".$id);
    $user->execute();
    header("location: dashboard.php");
?>