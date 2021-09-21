<?php
 $conn=mysqli_connect("localhost","root","","portfolio");
$About_ID=$_GET['id'];
 $about_edit=mysqli_query($conn,"SELECT * from about_me WHERE id=$About_ID");
   $edit=mysqli_fetch_array($about_edit);
   if (isset($_POST['edit_submit']))
         {
            $naaame=$_POST['edit_name'];
            $proofile=$_POST['edit_profile'];
            $eemail=$_POST['edit_email'];
            $phoone=$_POST['edit_number'];
            $skill1=$_POST['edit_skill_1st'];
            $skill2=$_POST['edit_skill_2nd'];
            $skill3=$_POST['edit_skill_3rd'];
            $skill4=$_POST['edit_skill_4th'];
            $aaboutme=$_POST['edit_about_me'];
            $imaage="Uploaded/".time().$_FILES['edit_image']['name'];
          if (move_uploaded_file($_FILES['edit_image']['tmp_name'], $imaage)) {
    $about_result=mysqli_query($conn,"UPDATE about_me set 
        Name='$naaame',
        Profile='$proofile',
        Email='$eemail',
        Phone='$phoone',
        Skill_1='$skill1',
        Skill_2='$skill2',
        Skill_3='$skill3',
        Skill_4='$skill4',
        About_me='$aaboutme',
        Image='$imaage' 
        WHERE id=$About_ID");
     
        if ($about_result) {
            echo "<script>alert('Updated');
               window.location.href='about_form.php';
                  </script>";
          
        }
            }
         }             

?>

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
                                    <form action="" method="POST" enctype="multipart/form-data">
                                      
                                       

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="edit_name" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Profile</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="edit_profile" class="form-control" placeholder="Enter Your Designation">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="edit_email" class="form-control" placeholder="abc @ gmail.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="edit_number" class="form-control" placeholder="100%">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">First Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="edit_skill_1st" class="form-control" placeholder="100%">
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Second Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="edit_skill_2nd" class="form-control" placeholder="100%">
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Third Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="edit_skill_3rd" class="form-control" placeholder="100%">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Forth Skill</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="edit_skill_4th" class="form-control" placeholder="100%">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">About Me</label>
                                            <textarea class="form-control col-sm-8 ml-2" name="edit_about_me" placeholder="Enter SomeThing New About Your-Self"></textarea>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="edit_image" class="form-control">
                                            </div>
                                        </div>


                                        
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input type="submit" class="btn btn-dark float-right" name="edit_submit" value="Update">
                                            </div>
                                        </div>
                                    </form>
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