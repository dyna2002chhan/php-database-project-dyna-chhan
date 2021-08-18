<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $toEdit = editData($_POST);
        if($toEdit){
            header('Location: info.php');
        }
    }