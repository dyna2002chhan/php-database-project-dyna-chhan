<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $toInsert = insertPost($_POST);
        if($toInsert){
            header('Location: info.php');
        }
    }