<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $imgName = uploadImage($_FILES['image']);
        $data = $_POST;
        $data['doctorImg'] = $imgName;
        $toInsert = insertPost($data);
        if($toInsert){
            header('Location: info.php');
        }
    }