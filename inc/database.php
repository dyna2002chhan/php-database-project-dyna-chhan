<?php
    // session_start();
    //connect to database..........................................................................................//
    function database(){
        return new mysqli('localhost','root','','phpproject');
    }

    //get one data.................................................................................................//
    function getOneData($id){
        return database()->query("SELECT * FROM posts INNER JOIN doctors ON posts.doctor_id = doctors.doctor_id
                                                     WHERE posts.post_id = $id");
    } 

    //select all data..............................................................................................//
    function selectAllDatas(){
        $result = 3;

        $page = 0;
        isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        if($page> 1){
            $start = ($page * $result) - $result;
        }else{
            $start = 0;
        }
        return database()->query("SELECT * FROM posts INNER JOIN doctors ON posts.doctor_id = doctors.doctor_id
                                                      ORDER BY post_id DESC LIMIT $start, $result");
    } 

    //delete data..................................................................................................//
    function deleteData($id){
        return database()->query("DELETE FROM posts WHERE post_id = $id");
    }
    
    //edit data....................................................................................................//
    function editData($value){
        $id = $value['id'];
        $title = $value['title'];
        $description = $value['description'];
        $firstname = $value['firstname'];
        $lastname = $value['lastname'];
        $doctor = database()->query("SELECT doctors.doctor_id FROM posts INNER JOIN doctors USING (doctor_id) where doctors.firstname ='$firstname' and doctors.lastname='$lastname'");
        
        foreach($doctor as $info){
            $doctorid = $info['doctor_id'];
        }
        return database()->query("UPDATE posts SET title = '$title', description = '$description', doctor_id = '$doctorid' WHERE post_id = '$id'");
    }

    //create infomation of a patient...............................................................................//
    function insertPost($value){
        $title = $value['title'];
        $description = $value['description'];
        $doctor_id = intval($value['doctor_id']);
        $doctorImg = $value['doctorImg'];
        return database()->query("INSERT INTO posts(title,doctor_picture,description, doctor_id) VALUES ('$title','$doctorImg','$description','$doctor_id')");
    }
    
    //upload image................................................................................................//
    function uploadImage($file){
        $imageName = $file['name'];
        $imageTmp = $file['tmp_name'];
        $imageSize = $file['size'];
        $error = $file['error'];
        if ($error !=0){
            $newImageName = "";
        }else{
            if($imageSize > 1000000){
                header('location: insert_doctor.php');
                $_SESSION['message'] = "This image is too large";
            }else{
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $extensionLocal = strtolower($extension);
                $allowExtension = array('jpg', 'png', 'jpeg', 'pdf');
    
                if(in_array($extensionLocal, $allowExtension)){
                    $newImageName = uniqid('post-', true) . '.' . $extensionLocal;
                    $folderImage = 'assets/images/'. $newImageName;
                    move_uploaded_file($imageTmp, $folderImage);
                }
            }
        }
        return $newImageName;
        
    }
    //search function............................................................................................//
    function searchTitle($value){
        $search = $value['search_bar'];
        return database()->query("SELECT * FROM posts
                                  INNER JOIN doctors ON posts.doctor_id = doctors.doctor_id 
                                  WHERE posts.title LIKE '%$search%'");
    }
    //pagination................................................................................................//
    function getPages(){
        $result = 3;

        $page = 0;
        isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

        if($page > 1){
            $start = ($page * $result) - $result;
        }else{
            $start = 0;
        }
        $data = database()->query("SELECT post_id from posts");

        // get total pages
        $numRow = $data->num_rows;
        $totalPages = $numRow / $result;
        return $totalPages;
    }

    //get data of user from database..........................................................................//
    function selectUser(){
        return database()->query("SELECT * FROM users");
    }
    //login...................................................................................................//
    function login($value){
        $username = trim($value['username']);
        $password = trim($value['password']);
        $users = selectUser();

        foreach($users as $user){
            echo (password_veryfy($password, trim($user['password'])));
            if(password_verify($password, trim($user['password'])) and $username === $user['username']){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $user['role'];
                $_SESSION['message'] = "Login successful";
                header('Location: http://localhost/login/?page=welcome');
            }else{
                $_SESSION['message'] = "Login failed";
                header("Location: http://localhost/login/?page=login_view");

            }
        }
    }