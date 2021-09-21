<?php
 include "front_files/header.php";
?>

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(assets/img/a1.jpeg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          
         <?php
          $conn=mysqli_connect("localhost","root","","portfolio");
          $tittle_query=mysqli_query($conn,"SELECT * from tittle");
          while ($row=mysqli_fetch_array($tittle_query)) 
          {
          
          ?>
          <h1 class="intro-title mb-4"><?php echo $row['Title']?></h1>
          <?php
          }
          ?>
          <p class="intro-subtitle"><span class="text-slider-items">CEO Umar__KhaN,Web Developer,Full-Stack Developer,Back-end Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">

    <?php
    $conn=mysqli_connect("localhost","root","","portfolio");
  $about_front = mysqli_query($conn,"SELECT * from about_me");
     while ($row_about=mysqli_fetch_array($about_front)) {
     
    ?>


        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img width="100px" src="Dashboard/<?php echo $row_about['Image']?>" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span><?php echo $row_about['Name']?></span></p>
                        <p><span class="title-s">Profile: </span> <span><?php echo $row_about['Profile']?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $row_about['Email']?></span></p>
                        <p><span class="title-s">Phone: </span> <span><?php echo $row_about['Phone']?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span>
                     <span class="pull-right"><?php echo $row_about['Skill_1']?></span>
                    
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row_about['Skill_1']?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    <span>CSS3</span>
                     <span class="pull-right"><?php echo $row_about['Skill_2']?></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row_about['Skill_2']?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> 
                    <span class="pull-right"><?php echo $row_about['Skill_3']?></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row_about['Skill_3']?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right"><?php echo $row_about['Skill_4']?></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row_about['Skill_4']?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                     <?php echo $row_about['About_me']?>
                    
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
        }
        ?>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                We have the Following Services Avalibale Any Time.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row ml-5">
         
      <?php
        $conn=mysqli_connect("localhost","root","","portfolio");
       $service_insert=mysqli_query($conn,"SELECT * from services");
       while ($roww=mysqli_fetch_array($service_insert))
        {
         
       
      ?>
            <div class="service-box col-md-3 ml-5">
              <div class="service-ico">
                <span class="ico-circle"><img class="ico-circle img-fluid" src="Dashboard/<?php echo $roww['Image']?>"></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php echo $roww['Title']?></h2>
                <p class="s-description text-center">
                  <?php echo $roww['Description']?>
                </p>
              </div>
            </div>
             
      <?php
       }
        ?>
           
      </div>
      
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">9</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                We are done the following Projects
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          $conn=mysqli_connect("localhost","root","","portfolio");
        $select_post=mysqli_query($conn,"SELECT * from portfolio_post");
        while ($row_post=mysqli_fetch_array($select_post)) {
          
        
          ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="Dashboard/<?php echo $row_post['Image']?>" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img style="width: 350px; height: 250px;" src="Dashboard/<?php echo $row_post['Image']?>" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $row_post['Name']?></h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?php echo $row_post['Subject_name']?></span> / <span class="w-date"><?php echo $row_post['Date_P']?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.php?id=<?php echo $row_post['ID']?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

       
<?php
}
?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
                <div class="col-md-12">

           <div id="testimonial-mf" class="owl-carousel owl-theme">
               <?php
              $conn=mysqli_connect("localhost","root","","portfolio");
              $team_Query=mysqli_query($conn,"SELECT * from team_members");
              while ($row_team=mysqli_fetch_array($team_Query)) {
              
                ?>

              <div class="testimonial-box">
                <div class="author-test">
                  <img style="width: 200px;
                             height: 210px;"
                              src="Dashboard/<?php echo $row_team['Image']?>" alt="" class="rounded-circle img-fluid b-shadow-a">

                  <h2>
                 <span class="author" style="font-size: 25px"><?php echo $row_team['Name']?></span></h2>
                  <h5 class="author" style="font-size: 15px"><?php echo $row_team['Designation']?></h5>
                </div>
                <div class="content-test">
             <p class="description lead"><?php echo $row_team['Description']?>
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
           <?php
            }
            ?>
            </div>
             
          </div>
         
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

          <?php
        $conn=mysqli_connect("localhost","root","","Portfolio");
       $result_blog=mysqli_query($conn,"SELECT * from blog_post");
        while ($row_blog=mysqli_fetch_array($result_blog)) {
        
       
          ?>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.php?id=<?php echo $row_blog['ID']?>"><img style="width: 370px; height: 300px;" src="Dashboard/<?php echo $row_blog['Image'];?>" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo $row_blog['Category_name'];?></h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html"><?php echo $row_blog['Tittle'];?></a></h3>
                
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <b><span class="author"><?php echo $row_blog['Writter_name'];?></span></b>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span><?php echo $row_blog['Time_blog'];?>
                </div>
              </div>
            </div>
          </div>
           <?php
           }
          ?>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                        expedita aperiam aliquid at.
                        Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                        mollitia inventore?
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                        <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                        <li><span class="ion-email"></span> contact@example.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

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