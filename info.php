<?php
  include_once('partials/header.php');
?>
    <!-- search bar --------------------------------------------------->
  
    <form class="form-inline d-flex justify-content-end " action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="ស្វែងរក">
      <button class="btn btn-success mr-5" type="submit">ស្វែងរក</button>
      <!-- sort by ------------------------------------------------------->
        <div class="dropdown mr-5">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            លំដាប់
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">នាមឈ្មោះ</a>
            <a class="dropdown-item" href="#">កាលបរិច្ឆេទ</a>
            <a class="dropdown-item" href="#">អាយុ</a>
            </div>
        </div>
    </form>
    
    <!-- insert patient --------------------------------------------->
    <section class="insert bg-info mt-5">
        <div class="insert-patient">
            <h2 class="text-center">បញ្ចូលអ្នកជំងឺថ្មី</h2>
        </div>
        <div class=" text-center">
            <a href="insert_patient.php" class="insert-btn btn btn-dark text-light">ចុចបញ្ចូល</a>
        </div>
    </section>
    
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
</html>