<?php
require_once('logics/dbconection.php');
 $sql=mysqli_query($conn, "SELECT  * FROM enrollment");
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('includes/headers.php') ?>

<body>

<?php include('includes/nav.php') ?>

    <div class="sidebar ">
    <?php include("includes/sidebar.php") ?>
         

    </div>
    <main class="main-content">
        <div class="card-header shadow bg-dark text-center mt-1 text-white">
            <span> <span>  <i class="fa fa-group text-white"></i></span> Student </span>

        </div>
        <div class="card-body shadow  pt-3 ">

            <table class="table table-bordered border-dark table-responsive table-hover table-stripe" style="font-size:12px">
                <tr>
                    <th>ID</th>
                    <th>Fulll Name</th>
                    <th>Phone  Number</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Courses</th>
                    <th>Enrolled on</th>
                    <th>action</th>


                </tr>

                <?php while($fetchenrollmentrecords= mysqli_fetch_array($sql)){ ?>
                    
                    
                <tr>
                    <td><?php echo $fetchenrollmentrecords['no'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['fullname'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['phonenumber'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['email'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['gender'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['course'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['creates_at'] ?></td>
                    <td>
                                
                        <a href="edit-enrollment.php?id=<?php echo $fetchenrollmentrecords['no'] ?>" class=" btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>    
                        <a href="view-enrollment.php?id=<?php echo $fetchenrollmentrecords['no']?>" class=" btn btn-success btn-sm">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="delete-enrollment.php?id=<?php echo $fetchenrollmentrecords['no']?>" class=" btn btn-danger btn-sm">
                            <i class="fa fa-trash "></i>
                        </a>
                </td>
                    
 
                </tr>
               <?php }?>
            </table>
        </div>


    </main>

    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>

</html>