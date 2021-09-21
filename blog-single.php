<?php
 include "front_files/header.php";
?>

  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">

      <?php
      $conn=mysqli_connect("localhost","root","","portfolio");
      $blog_ID=$_GET['id'];
     $blog_fetch=mysqli_query($conn,"SELECT * from blog_post WHERE ID='$blog_ID'");
     while ($fetch=mysqli_fetch_array($blog_fetch))
      {
       
     
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
              <div class="post-thumb">
                <img src="Dashboard/<?php echo $fetch['Image'];?>" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <h1 class="article-title"><?php echo $fetch['Tittle'];?></h1>
                <ul>
                  <li>
                    <span class="ion-ios-person"></span>
                    <a href="#"><?php echo $fetch['Writter_name'];?></a>
                  </li>
                  <li>
                    <span class="ion-pricetag"></span>
                    <a href="#"><?php echo $fetch['Category_name'];?></a>
                  </li>
                  <li>
                    <span class="ion-chatbox"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                <p>
                 <?php echo $fetch['Description'];?>
                </p>
              </div>
            </div>
            <div class="box-comments">
              <div class="title-box-2">
                <?php 
              $conn=mysqli_connect("localhost","root","","portfolio");
              $blog_ID=$_GET['id'];
              $count=mysqli_query($conn,"SELECT count(ID) from comments_table WHERE Comment_ID='$blog_ID'");
              $fetch1=mysqli_fetch_array($count);
                ?>
                <h4 class="title-comments title-left">Comments <?php echo $fetch1[0]?></h4>
              </div>
              <ul class="list-comments">
               <?php
             $conn=mysqli_connect("localhost","root","","portfolio");
             $fetch=mysqli_query($conn,"SELECT * from comments_table where Comment_ID='$blog_ID' order by ID desc");
             while ($result3=mysqli_fetch_array($fetch)) {
              ?>
                <li>
                  <div class="comment-details">
                     <h4 class="comment-author"><?php echo $result3['Name']?></h4>
                      <span><?php echo $result3['Date_B']?></span>
                     <p>
                       <?php echo $result3['Message']?>
                     </p>
                     <a href="3">Reply</a>
                  </div>
                  
                </li>
                <?php
                    }
                  ?>
                
                
              </ul>
            </div>
            <div class="form-comments">
              <div class="title-box-2">
                <h3 class="title-left">
                  Leave a Reply
                </h3>
              </div>
      <?php
        $conn=mysqli_connect("localhost","root","","portfolio");
        $blog_ID=$_GET['id'];
        if (isset($_POST['submit']))
         {
            $Name=$_POST['name'];
            $Message=$_POST['message'];
            $date=date('d-m-y');
            $insert=mysqli_query($conn,"INSERT into comments_table(Comment_ID,Name,Message,Date_B) VALUES('$blog_ID','$Name','$Message','$date')");

          if ($insert)
           {
             echo "<script>alert('Added Successfully');</script>";
          }
        }
      ?>
              <form class="form-mf" method="POST" action="">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" name="submit" class="button button-a button-big button-rouded" value="Send Message">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              <h5 class="sidebar-title">Search</h5>
              <div class="sidebar-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="ion-android-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recent Post</h5>
              <?php
        $conn=mysqli_connect("localhost","root","","portfolio");
        $result4= mysqli_query($conn,"SELECT * from blog_post");
        while ($row4=mysqli_fetch_array($result4)) {
    
 
   ?>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <h6><a href="#"><?php echo $row4['Tittle']?></a></h6>
                    <p>Time : <?php echo $row4['Time_blog']?></p>
                    
                  </li>

                </ul>
              </div>
              <?php
              }
              ?>
            </div>
          
            <div class="widget-sidebar widget-tags">
              <h5 class="sidebar-title">Blogs Categories</h5>
              <div class="sidebar-content">
                <?php
        $conn=mysqli_connect("localhost","root","","portfolio");
     $result5=mysqli_query($conn,"SELECT * from blog_category ");
     while ($row5=mysqli_fetch_array($result5)) {
     
                ?>
                <ul>
                  <li class="mb-4">
                    <a href="#"><?php echo $row5['Name']?></a>
                  </li>
                </ul>
                <?php
               }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
     } 
    ?>
    </section><!-- End Blog Single Section -->

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