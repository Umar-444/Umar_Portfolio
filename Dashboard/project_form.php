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
                                <h4 class="card-title mb-5">Add Data About Your Services</h4>
                                <div class="basic-form">
      <?php
     $conn=mysqli_connect("localhost","root","","portfolio");
     if (isset($_POST['submit'])) {
         
         $categoryID=$_POST['input_category'];
         
         $naame=$_POST['name'];
        
         $subjeect=$_POST['subject'];
         
         $subjeect_name=$_POST['subject_name'];
         
         $descriptionn=$_POST['description'];
         
         $datee=date('d-m-y');
         
         $profile_Url=$_POST['profile_url'];
         
           
         $imaage="Uploaded/".time().$_FILES['image']['name'];
         if (move_uploaded_file($_FILES['image']['tmp_name'], $imaage))
          {
            $project_result=mysqli_query($conn,"INSERT into portfolio_post(Category_ID,
                Name,Subject,Subject_name,Description,Date_P,Profile_url,
                Image)VALUES('$categoryID','$naame','$subjeect','$subjeect_name','$descriptionn','$datee','$profile_Url','$imaage')");
            if ($project_result)
             {
            echo "<script>alert('Project Data is Added Successfully Uploaded....!!');</script>";     
            }
         }

     }
      ?>
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
                                                <input type="text" name="name" class="form-control" placeholder="Enter portfolio Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Subject</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="subject" class="form-control" placeholder="Enter Your Subject">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Subject Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="subject_name" class="form-control" placeholder="Enter Your Subject Name">
                                            </div>
                                        </div>

                                       
                                          
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <textarea class="form-control col-sm-8 ml-2" name="description" placeholder="Enter your portfolio Description"></textarea>
                                        </div>
                                       

                                       <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Profile Url</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="profile_url" class="form-control" placeholder="Enter Profile Url">
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
                                                <input type="submit" class="btn btn-dark float-right" name="submit" value="Upload">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>






                 <div class="content-body " style="margin-top: -100px; ">
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
                                                <th>Category ID</th>
                                                <th>Name</th>
                                                <th>Sunject</th>
                                                <th>Subject Name</th>
                                                <th>Description</th>
                                                <th>Profile Url</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
             <?php
              include "include/connection.php";
               $project_table=mysqli_query($conn,"SELECT * from portfolio_post");
                    while ($row=mysqli_fetch_array($project_table))
                     {
                        
                   
                    ?>   
                    <tr>
                    
                      <td><?php echo $row['ID']?></td>
                      <td><?php echo $row['Category_ID']?></td>
                      <td><?php echo $row['Name']?></td>
                      <td><?php echo $row['Subject']?></td>
                      <td><?php echo $row['Subject_name']?></td>
                      <td><?php echo $row['Description']?></td>
                      <td><?php echo $row['Profile_url']?></td>
                      <td><img width="50px" src="<?php echo $row['Image']?>"></td>

                      <td><a href="edit_project.php?id=<?php echo $row['ID']?>">Edit</a> |
                    <a href="delete_project.php?id=<?php echo $row['ID']?>">Delete</a>
                    </td>
                    
                    </tr>

                           <?php
                            }
                           ?>                 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category ID</th>
                                                <th>Name</th>
                                                <th>Sunject</th>
                                                <th>Subject Name</th>
                                                <th>Description</th>
                                                <th>Profile Url</th>
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