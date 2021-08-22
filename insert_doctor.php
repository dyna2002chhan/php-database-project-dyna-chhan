<?php
    include_once('partials/header.php');
    // session_start();
    // if(isset($_SESSION['message'])){
    //     echo $_SESSION['image'];
    // }
?>
<div class="container p-4">
        <form action="insert_model.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="title" name="title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="doctor_id" name="doctor_id">
            </div>

            <!-- upload image -->
            <input type="file" name="image">
            <button type="submit" class="btn btn-info">បញ្ចូល</button>

            <!-- <div class="form-group">
            </div> -->

        </form>
    </div>
