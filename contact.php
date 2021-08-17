<?php
  include_once('partials/header.php');
?>
    <!-- ======= Contact Section ======= -->
    <br>
    <br><br>
    <section class="contact">
      <div class="container">

        <div class="section-title text-center mt-5">
          <h2>ទំនាក់ទំនង</h2>
          <p>សូមធ្វើការទំនាក់ទំនងមកកាន់យើងខ្ញុំដើម្បីប្រសិនបើលោកអ្នកមានចម្ងល់ រឺចង់ដឹងពីព៏ត៏មានបន្ថែម</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="contact-box">
                  <i class="fas fa-map-signs"></i>
                  <h3>អស័យដ្ឋាន</h3>
                  <p>ទល់មុខសាលាបឋមសិក្សាអូរអំបិល ភូមិអូរអំបិល ក្រុងសិរីសោភ័ណ </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="contact-box mt-4">
                  <i class="fas fa-envelope"></i>
                  <h3>អុឺមែល</h3>
                  <p>clinic.sereysophon@example.com<br>dyna@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="contact-box mt-4">
                  <i class="fas fa-phone"></i>
                  <h3>លេខទូសព្ទ</h3>
                  <p>+៨៥៥ ៨៧ ៩៤៩៤ ៦២ <br>+៨៥៥ ៧១ ៧៩ ៣០ ៩២៦</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" 
                  placeholder="ឈ្មោះ">
                  
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" 
                  id="email" placeholder="អុីម៉ែល">
                  
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" 
                id="subject" placeholder="អំពី" >
                </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="សារជាអក្សរ"></textarea>
              </div>
              <div class="text-center">
                <button type="submit">បញ្ជូន....</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
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
                <!-- <a href="#!"class="text">Terms of Use</a></div> -->
          </div>
      </div>
    </footer>
  </body>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php
    include_once('partials/footer.php');
  ?>
</html>