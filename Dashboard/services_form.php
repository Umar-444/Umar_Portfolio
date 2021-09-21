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
        include "include/connection.php";
        if (isset($_POST['submit']))
         {
            $tittlee=$_POST['tittle'];
            $descriptionn=$_POST['description'];
           $image="Uploaded/".time().$_FILES['image']['name'];
          if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
         $result=mysqli_query($conn,"INSERT into services(Title,Description,Image) VALUES('$tittlee','$descriptionn','$image')");
           if ($result) {
                        echo "<script>alert('Successfully Added');</script>";
            
            }              
         } 
         }             
        ?>              
                                    <form action="" method="POST" enctype="multipart/form-data">
                                      
                                       

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tittle" class="form-control" placeholder="Enter Service Name">
                                            </div>
                                        </div>

                                          
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <textarea class="form-control col-sm-8 ml-2" name="description" placeholder="Enter About your Service"></textarea>
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






                 <div class="content-body " style="margin-top: -300px; ">
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
                                                <th>Tittle Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
             <?php
              include "include/connection.php";
                $result1= mysqli_query($conn,"SELECT * from Services");
                   while ($row=mysqli_fetch_array($result1)) 
                     {
                    ?>   
                    <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['Title']?></td>
                    <td><?php echo $row['Description']?></td>
                    <td><img width="100px" src="<?php echo $row['Image']?>"></td>
                    <td><a href="edit_services.php?id=<?php echo $row['ID']?>">Edit</a> |
                    <a href="delete_servcies.php?id=<?php echo $row['ID']?>">Delete</a>
                    </td>
                    
                    </tr>

                           <?php
                            }
                           ?>                 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tittle Name</th>
                                                <th>Description</th>
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