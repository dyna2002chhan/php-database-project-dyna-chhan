<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        uploadImage($_POST);
        header('location: info.php');
    }