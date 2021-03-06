<?php
  include_once('partials/header.php');
  require_once('inc/database.php');
  $posts = "";
  if($_SERVER['REQUEST_METHOD']=="POST"){
      $posts = searchTitle($_POST);
  } else {
      $posts = selectAllDatas();
  }

?>


    <!-- search bar --------------------------------------------------->
  
    <form class="form-inline d-flex justify-content-end " method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="ស្វែងរក" name="search_bar">
      <button class="btn btn-warning mr-5" type="submit">ស្វែងរក</button>      <!-- sort by ------------------------------------------------------->
        <div class="dropdown mr-5">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            លំដាប់
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">ផុសចុងក្រោយគេ</a>
            <a class="dropdown-item" href="#">ផុសមុនគេ</a>
            <a class="dropdown-item" href="#">ចំណងជើង</a>
            </div>
        </div>
    </form>
    
    <!-- insert patient --------------------------------------------->
    <section class="insert bg-info mt-5">
        <div class="insert-patient">
            <h2 class="text-center">បញ្ចូលទិន្ន័យ</h2>
        </div>
        <div class=" text-center">
            <a href="insert_doctor.php" class="insert-btn btn btn-dark text-light">ចុចបញ្ចូល</a>
        </div>
    </section>
    <!-- create doctor form ------------------------------------------->
    <div class="container p-4">

        <!-- <div class="d-flex justify-content-end p-2">
            <a href="create_html.php" class="btn btn-primary">Add +</a>
        </div> -->

        <?php 
            require_once('inc/database.php');
            if($posts-> num_rows > 0):
            forEach($posts as $post):
        ?>
      <div class="pt-3 d-flex justify-content-center"> 
          <div class="card ml-5 pt-2 pl-2 bg-info text-light w-50">
              <div class="card-body​ ">
                  <h6 class="d-flex justify-content-end"><?= $post['date']?></h6>                      
                  <div class="d-flex">               
                      <div class="info">
                          <h6 >ឈ្មោះគ្រូពេទ្យ :<?= $post['lastname']?> <?= $post['firstname']?></h6>                       
                          <h6 >ចំណងជើង :<?= $post['title']?></h6>                          
                          <h6 >​​​​​​​​​​​​​​​​​​​​​​ការសរសេរ : <?= $post['description']?></h6> 
                          <!-- profile picture of doctor -->
                          <div class="card-image mr-3">
                              <img class="img-fluid" width="200" src="assets/images/<?= $post['doctor_picture']?>" alt="">
                          </div>
                      </div>
                  </div>
                  <!-- edit and delete button-------------->
                  
                  <div class="action d-flex justify-content-end">
                      <a href="edit_data.php?id=<?= $post['post_id']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                      <a href="delete_data.php?id=<?= $post['post_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </div>

              </div>
          </div>
      </div>
      <?php endforEach ;
        else:
      ?>
      <h1>Search not found!</h1>
      <?php endif; ?>
    </div>
    <!-- pagination -------------------------------------->
    <div class="d-flex justify-content-center">
            <ul class="pagination">
               <?php  
                    $pages = getPages();
                    for($i = 1; $i <= $pages + 1; $i++):
               ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php endfor ?>               
            </ul>
        </div>
    <!-- End create form ---------------------------------------------------------------------->



    <!-- ======= Misson--------------------------------------======= -->
    <section class="camp">

      <div class="container text-center bg-dark text-light pr-5">
        <h2 class="py-3">
        បេសកកម្ម
        </h2>
        <p class="mb-3">ជួយព្យាបាលជំងឺដល់អតិថិជន ដោយមិនគិតទៅលើប្រាក់កម្រៃជាអទិភាព</p>
      </div>
    </section>
    
    <!-- Footer-->
    <footer class="footer py-4 mt-5">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
              <div class="col-lg-4 my-3 my-lg-0">
                  <a class="btn btn-back btn-social mx-2" href="#!">
                    <i class="fab fa-twitter"></i></a>
                  <a class="btn btn-back btn-social mx-2" href="#!">
                    <i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-back btn-social mx-2" href="#!">
                    <i class="fab fa-linkedin-in"></i></a>
              </div>
              <div class="col-lg-4 text-lg-right">
                <a class="mr-3 text" href="#!">រក្សាកម្មសិទ្ធដោយ គ្លីនិកសិរីសោភ័ណ</a>
          </div>
      </div>
    </footer>
  </body>
  <?php
    
    include_once('partials/footer.php');
  ?>
