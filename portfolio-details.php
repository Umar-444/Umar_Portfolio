<?php
 include "front_files/header.php";
?>

  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Portfolio Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Portfolio Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">
        <?php
         $conn=mysqli_connect("localhost","root","","portfolio");
         $post_ID=$_GET['id'];
       $result= mysqli_query($conn,"SELECT * from portfolio_post where ID='$post_ID'");
         while ($row=mysqli_fetch_array($result)) {
           
         
        ?>

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="Dashboard/<?php echo $row['Image']?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              
              <li><strong>Name</strong>:<?php echo $row['Name']?></li>
              <li><strong>Project date</strong>:<?php echo $row['Date_P']?></li>
              <li><strong>Project URL</strong>: <a href="<?php echo $row['Profile_url']?>"><?php echo $row['Profile_url']?></a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?php echo $row['Subject']?></h2>
          <p>
            <?php echo $row['Description']?>
          </p>
        </div>
        <?php
        }
        ?>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php
 include "front_files/footer.php";
 ?>
 <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>