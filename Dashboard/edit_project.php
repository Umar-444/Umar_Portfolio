<?php
 $conn=mysqli_connect("localhost","root","","portfolio");
$project_ID=$_GET['id'];
 $project_edit=mysqli_query($conn,"SELECT * from portfolio_post WHERE id=$project_ID");
   $edit=mysqli_fetch_array($project_edit);
   if (isset($_POST['edit_submit']))
         {
            $Category_id=$_POST['input_category'];
            $naame=$_POST['edit_name'];
            $subjeect=$_POST['edit_subject'];
            $subjeect_name=$_POST['edit_subject_name'];
            $descriptionn=$_POST['edit_description'];
            $daate=date('d-m-y');
            $profile_url=$_POST['edit_profile_url'];
            $imaage="Uploaded/".time().$_FILES['image']['name'];
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imaage)) {
                  $service_result=mysqli_query($conn,"UPDATE portfolio_post set 
                     Category_ID='$Category_id',
                       Name='$naame',
                        Subject='$subjeect',
                         Subject_name='$subjeect_name',
                           Description='$descriptionn',
                             Date_P='$daate',
                               Profile_url='$profile_url',
                                 Image='$imaage'
                     WHERE id=$project_ID");
     
              if ($service_result) {
                 echo "<script>alert('Data is Updated Successfully....!!');
                   window.location.href='project_form.php';
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
                                            <label class="col-sm-2 col-form-label">Category</label>
                                           <select name="input_category" class="form-control col-sm-8">
               <?php
                    
                   $conn=mysqli_connect("localhost","root","","portfolio");
               $result=mysqli_query($conn,"SELECT * from category");
                   while ($row=mysqli_fetch_array($result)) {
                     
                          ?>               
                              <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']?></option>
                                 <?php
                                   }
                                 ?>           
                                        </select>

                                    </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $row['Name'];?>" type="text" name="edit_name" class="form-control" placeholder="Enter portfolio Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Subject</label>
                                            <div class="col-sm-8">
                                                <input  type="text" name="edit_subject" class="form-control" placeholder="Enter Your Subject">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Subject Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="edit_subject_name" class="form-control" placeholder="Enter Your Subject Name">
                                            </div>
                                        </div>

                                       
                                          
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <textarea class="form-control col-sm-8 ml-2" name="edit_description" placeholder="Enter your portfolio Description"></textarea>
                                        </div>
                                       

                                       <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Profile Url</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="edit_profile_url" class="form-control" placeholder="Enter Profile Url">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input type="submit" class="btn btn-dark float-right" name="edit_submit" value="Upload">
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