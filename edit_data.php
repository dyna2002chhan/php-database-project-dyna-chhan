
<div class="container p-4">
<?php
    require_once('inc/database.php');
    $id = $_GET['id'];
    $posts = getOneData($id);
    forEach($posts as $post) :
?>
        <form action="edit_model.php" method="post">
            <input type="hidden" name = "id">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="ឈ្មោះ" name="firstname" value="<?=$post['firstname']?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="ត្រកូល" name="lastname" value="<?=$post['lastname']?>>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="ចំណងជើង" name="title" value="<?=$post['title']?>>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description" value="<?=$post['description']?>>
            </div>

            <div class="form-group">
                <input type="file" class="form-control" name="profile">
            </div>

            <div class="form-group">
                <!-- pel click submit, it request using post -->
                <button type="submit" class="btn btn-primary btn-block">បញ្ចូល</button>
            </div>

        </form>
        <?php
            endforEach;
        ?>
    </div>
