<?php
 $conn=mysqli_connect("localhost","root","","portfolio");
   
   $edit_blog=$_GET['id'];
  $blog_fetch=mysqli_query($conn,"SELECT * from blog_post WHERE id=$edit_blog");
       $fetch_row=mysqli_fetch_array($blog_fetch);
    if (isset($_POST['edit_submit']))
     {         
        $categoryID=$_POST['input_category'];
        $C_name=$_POST['edit_C_name'];
        $tittle=$_POST['edit_tittle'];
        $description=$_POST['edit_description'];
        $w_name=$_POST['edit_W_name'];
        $imaage="Uploaded/".time().$_FILES['image']['name'];
       
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imaage)) {
       $result1=mysqli_query($conn,"UPDATE blog_post SET Blog_ID='$categoryID',Category_name='$C_name',Tittle='$tittle', Description='$description',Writter_name='$w_name',Image='$imaage'  WHERE id=$edit_blog");
        if ($result1) {
            echo "<script>alert('Blog is Successfully Updated');</script>";
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
               $result=mysqli_query($conn,"SELECT * from blog_category");
                   while ($row=mysqli_fetch_array($result)) {
                     
                          ?>               
                              <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']?></option>
                                 <?php
                                   }
                                 ?>           
                                        </select>

                                    </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $fetch_row['Category_name']?>" type="text" name="edit_C_name" class="form-control" placeholder="Enter Category Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tittle</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $fetch_row['Tittle']?>" type="text" name="edit_tittle" class="form-control" placeholder="Enter Your Tittle">
                                            </div>
                                        </div>
                                       
                                          
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <input value="<?php echo $fetch_row['Description']?>" class="form-control col-sm-8 ml-2" name="edit_description" placeholder="Enter your Blog Description">
                                        </div>
                                       

                                       <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Writter Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $fetch_row['Writter_name']?>"  name="edit_W_name" class="form-control" placeholder="Enter Profile Url">
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