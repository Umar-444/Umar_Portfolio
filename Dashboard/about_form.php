<?php
 include "include/header.php";
?>
        
<?php
 include "include/slider.php";
?>
       
              <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
                   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Add Data About Your Self</h4>
                                <div class="basic-form">

      <?php
        include "include/connection.php";
        if (isset($_POST['submit']))
         {
            $naaame=$_POST['name'];
            $proofile=$_POST['profile'];
            $eemail=$_POST['email'];
            $phoone=$_POST['number'];
            $skill1=$_POST['skill_1st'];
            $skill2=$_POST['skill_2nd'];
            $skill3=$_POST['skill_3rd'];
            $skill4=$_POST['skill_4th'];
            $aaboutme=$_POST['about_me'];
            $imaage="Uploaded/".time().$_FILES['input_image']['name'];
          if (move_uploaded_file($_FILES['input_image']['tmp_name'], $imaage)) {
$about_result= mysqli_query($conn,"INSERT into about_me(Name,Profile,Email,Phone,Skill_1,Skill_2,Skill_3,Skill_4,About_me,Image) VALUES('$naaame','$proofile','$eemail','$phoone','$skill1','$skill2','$skill3','$skill4','$aaboutme','$imaage')");
        
        if ($about_result) {
            echo "<script>alert('Your About Data is Added Successfully....!!');</script>";
            echo "<script>alert('Your About Data is Added Successfully....!!');</script>";
        }
            }
         }             
        ?>              
                                    <form action="" method="POST" enctype="multipart/form-data">
                                      
                                       

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Profile</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="profile" class="form-control" placeholder="Enter Your Designation">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control" placeholder="abc @ gmail.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="number" class="form-control" placeholder="100%">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">First Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="skill_1st" class="form-control" placeholder="100%">
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Second Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="skill_2nd" class="form-control" placeholder="100%">
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Third Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="skill_3rd" class="form-control" placeholder="100%">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Forth Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="skill_4th" class="form-control" placeholder="100%">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">About Me</label>
                                            <textarea class="form-control col-sm-8 ml-2" name="about_me" placeholder="Enter SomeThing New About Your-Self"></textarea>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="input_image" class="form-control">
                                            </div>
                                        </div>


                                        
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input type="submit" class="btn btn-dark float-right" name="submit" value="Upload">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>






                 <div class="content-body" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Profile</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
             <?php
              include "include/connection.php";
                $result1= mysqli_query($conn,"SELECT * from about_me");
                   while ($row=mysqli_fetch_array($result1)) 
                     {
                    ?>   
                    <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Profile']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><img width="60px" src="<?php echo $row['Image']?>"></td>
                    <td><a href="edit_about.php?id=<?php echo $row['ID']?>">Edit</a></td>
                    </tr>

                           <?php
                            }
                           ?>                 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>ID</th>
                                                <th>Name</th>
                                                <th>Profile</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
<?php
 include "include/footer.php";
?>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
       
   


</body>

</html>