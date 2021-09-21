<?php
$conn=mysqli_connect("localhost","root","","portfolio");
session_start();
if(isset($_POST['submit'])){
$username=mysqli_real_escape_string($conn,htmlentities(trim(strip_tags($_POST['username']))));
$password=mysqli_real_escape_string($conn,htmlentities(trim(strip_tags($_POST['password']))));


if(!empty($username) && !empty($password)){
  $result=mysqli_query($conn,"SELECT * from login where Username='$username' and Password='$password'" );
  if(mysqli_num_rows($result)==1)    
  {
       $row=mysqli_fetch_array($result);
       $_SESSION['user_id']=$row['Username'];
       header("location:dashboard.php");
  }
  else{
    echo "<script>alert('Invalid Username or Password');</script>";
  }
}
}
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Umar - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.php"> <h3>Umar <b class="text-success">IT Solution</b></h3></a>
        
                                <form class="mt-5 mb-5 login-input" action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <input type="submit" name="submit" class="btn login-form__btn w-100" value="Sign in">
                                </form>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





