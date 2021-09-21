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
                                <h4 class="card-title mb-5">Enter Your Website Tittle</h4>
                                <div class="basic-form">

      <?php
        include "include/connection.php";
        if (isset($_POST['submit']))
         {
             $TITTLE=$_POST['tittle'];
           $result= mysqli_query($conn,"INSERT into tittle(Title) VALUES('$TITTLE')");
           if ($result)
            {
               echo "<script>alert('Tittle is Added Successfully To Your Website...!!');</script>";  
            }
      }             
        ?>              
                                    <form action="" method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">Tittle</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tittle" class="form-control" placeholder="Enter Your Tittle For Your Front Page">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <input type="submit" class="btn btn-dark float-right" name="submit" value="Upload">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>






                 <div class="content-body" style="margin-top: -450px;">
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
                                                <th>Tittle</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
             <?php
              include "include/connection.php";
                $result1= mysqli_query($conn,"SELECT * from tittle");
                   while ($row=mysqli_fetch_array($result1)) 
                     {
                    ?>   
                    <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['Title']?></td>
                    <td><a href="delete_tittle.php?id=<?php echo $row['ID']?>">Delete</a></td>
                    </tr>

                           <?php
                            }
                           ?>                 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tittle</th>
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