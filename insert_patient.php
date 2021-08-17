<?php
    include_once('partials/header.php');
?>
<div class="container p-4">
        <form action="insert_model.php" method="post">
            <input type="hidden" name = "id">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="នាមឈ្មោះ" name="firstname">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="នាមត្រកូល" name="lastname">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" placeholder="អាយុ" name="age">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" placeholder="អាស័យដ្ឋាន" name="address">
            </div>

            <div class="form-group">
                <input type="file" class="form-control" name="profile">
            </div>

            <div class="form-group">
                <!-- pel click submit, it request using post -->
                <button type="submit" class="btn btn-primary btn-block">បញ្ចូល</button>
            </div>

        </form>
    </div>
<?php
    include_once('partials/footer.php');
?>