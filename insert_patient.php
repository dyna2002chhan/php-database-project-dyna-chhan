<?php
    include_once('partials/header.php');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        echo "$fileName<br> $fileSize <br> $fileType <br> $tmp_name" ;
    }
?>
<div class="container p-4">
        <form action="insert_model.php" method="post">
            <input type="hidden" name = "id">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="title" name="title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="date" name="date">
            </div>

            <form action="" method = "POST" enctype = "multipart/form-data">
                <input type="file" name ="file">                        
            </form>

            <div class="form-group">
                <!-- pel click submit, it request using post -->
                <button type="submit" class="btn btn-primary btn-block" name = "submit">បញ្ចូល</button>
            </div>

        </form>
    </div>
