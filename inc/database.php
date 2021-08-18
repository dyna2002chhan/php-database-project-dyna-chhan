<?php
    //connect to database..........................................................................................//
    function database(){
        return new mysqli('localhost','root','','phpproject');
    }

    //get one data.................................................................................................//
    function getOneData($id){
        return database()-query("SELECT * FROM posts INNER JOIN doctors ON posts.doctor_id = doctors.doctor_id
                                                     WHERE posts.post_id = $id");
    } 

    //select all data..............................................................................................//
    function selectAllDatas(){
        return database()->query("SELECT * FROM posts INNER JOIN doctors ON posts.doctor_id = doctors.doctor_id
                                                      ORDER BY post_id DESC");
    } 

    //delete data..................................................................................................//
    function deleteData($id){
        return database()->query("DELETE FROM posts WHERE post_id = $id");
    }
    
    //edit data....................................................................................................//
    function editData($value){
        $title = $value['title'];
        $description = $value['description'];
        $date = $value['date'];
        $doctor_id = $value['doctor_id'];
        return database()->query("UPDATE posts SET title = '$title', description = '$description', date = '$date', doctor_id = '$doctor_id'");
    }

    //create infomation of a patient...............................................................................//
    function insertPost($value){
        $title = $value['title'];
        $description = $value['description'];
        $date = $value['date'];
        $doctor_id = $value['doctor_id'];
        // $firstname = $value['firstname'];
        // $lastname = $value['lastname'];
        // $profile_pic = $value['profile_pic'];
        return database()->query("INSERT INTO posts(title,date,description, doctor_id) VALUES ('$title','$date', '$description','$doctor_id')");
    }