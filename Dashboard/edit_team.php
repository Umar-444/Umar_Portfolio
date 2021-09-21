<?php
 $conn=mysqli_connect("localhost","root","","portfolio");
 $teamedit=$_GET['id'];
 $result=mysqli_query($conn, "SELECT * from team_members where id=$teamedit");
 $row=mysqli_fetch_array($result);
 if (isset($_POST['edit_submit'])) {
     $name=$_POST['edit_name'];
     $designation=$_POST['edit_designation'];
     $description=$_POST['edit_description'];
     $image="Uploaded/".time().$_FILES['image']['name'];
     if (move_uploaded_file($_FILES['image']['tmp_name'],$image)) {
    $result1=mysqli_query($conn, "UPDATE team_members set Name='$name',Designation='$designation',Description='$description',Image='$image' where id=$teamedit");
    if ($result1) {
        echo "<script>alert('Update Successfully')
    window.location.href='team_form.php';
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
                                                <input type="text" value="<?php echo $row['Name']?>" name="edit_name" class="form-control" placeholder="Enter portfolio Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Designation</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $row['Designation']?>" name="edit_designation" class="form-control" placeholder="Enter Your Subject">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $row['Description']?>" name="edit_description" class="form-control" placeholder="Enter Your Subject Name">
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