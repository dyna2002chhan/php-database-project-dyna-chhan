<?php
    include_once('inc/database.php');
    $id = $_GET['id'];
    $toDelete = deleteData($id);

    if($toDelete){
        header('Location: info.php');
    }