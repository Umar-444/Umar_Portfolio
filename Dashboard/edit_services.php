<?php
 $conn=mysqli_connect("localhost","root","","portfolio");
$Abou_ID=$_GET['id'];
 $about_edit=mysqli_query($conn,"SELECT * from services WHERE id=$Abou_ID");
   $edit=mysqli_fetch_array($about_edit);
   if (isset($_POST['edit_submit']))
         {
            $tittle=$_POST['edit_title'];
            $descriptionn=$_POST['edit_description'];
            $service_result=mysqli_query($conn,"UPDATE services set 
        Title='$tittle',
        Description='$descriptionn' 
        WHERE id=$Abou_ID");
     
        if ($service_result) {
            echo "<script>alert('Updated Successfully');
               window.location.href='services_form.php';
                  </script>";
          
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
                                            <label class="col-sm-2 col-form-label">Tittle</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="edit_title" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <textarea class="form-control col-sm-8 ml-2" name="edit_description" placeholder="Enter SomeThing New About Your-Self"></textarea>
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