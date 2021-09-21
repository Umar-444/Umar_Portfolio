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
                                                <th>Blog ID</th>
                                                <th>Category Name</th>
                                                <th>Tittle</th>
                                                <th>Description</th>
                                                <th>Writter Name</th>
                                                <th>Time</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
             <?php
              include "include/connection.php";
               $project_table=mysqli_query($conn,"SELECT * from blog_post");
                    while ($row=mysqli_fetch_array($project_table))
                     {
                        
                   
                    ?>   
                    <tr>
                    
                      <td><?php echo $row['ID']?></td>
                      <td><?php echo $row['Blog_ID']?></td>
                      <td><?php echo $row['Category_name']?></td>
                      <td><?php echo $row['Tittle']?></td>
                      <td><?php echo $row['Description']?></td>
                      <td><?php echo $row['Writter_name']?></td>
                      <td><?php echo $row['Time_blog']?></td>
                      <td><img width="50px" src="<?php echo $row['Image']?>"></td>

                      <td><a href="edit_blog.php?id=<?php echo $row['ID']?>">Edit</a> |
                    <a href="delete_blog.php?id=<?php echo $row['ID']?>">Delete</a>
                    </td>
                    
                    </tr>

                           <?php
                            }
                           ?>                 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Blog ID</th>
                                                 <th>Category Name</th>
                                                <th>Tittle</th>
                                                <th>Description</th>
                                                <th>Writter Name</th>
                                                <th>Time</th>
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