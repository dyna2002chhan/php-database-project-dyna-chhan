<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        print_r($_POST);
        $toEdit = editData($_POST);
        if($toEdit){
            header('location: info.php');
        }
    }