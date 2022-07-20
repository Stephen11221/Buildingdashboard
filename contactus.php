<?php
require_once('logics/dbconection.php');
 $sql=mysqli_query($conn, "SELECT  * FROM contactus");
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
        <div class="card text-dark bg-light text-center">
            <span><i class="fa  fa-envelope"></i></span>
            <span>contact us</span>

        </div>
        <table class="table table-bordered border-dark table-responsive table-hover table-stripe" style="font-size:12px">
            <tr>
                <th>no</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>phonenumber</th>
                <th>Messages</th>
                <th>Sent on time/date</th>
            </tr>

                <?php 
               $count=1;
               while($fetchcontactusrecords= mysqli_fetch_array($sql)){ ?>
                    
                    
                <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $fetchcontactusrecords['firstname'] ?></td>
                    <td><?php echo $fetchcontactusrecords['lastname'] ?></td>
                    <td><?php echo $fetchcontactusrecords['email'] ?></td>
                    <td><?php echo $fetchcontactusrecords['phonenumber']?></td>
                    <td><?php echo $fetchcontactusrecords['message'] ?></td>
                    <td><?php echo $fetchcontactusrecords['created -at'] ?></td>
                    <td>
                        <a href="edit-contactus.php?id=<?php echo $fetchcontactusrecords['no']?>" class="btn btn-success"><span><i class="fa fa-edit "></i></span></a>
                        <a href="viewcontactus.php?id=<?php echo $fetchcontactusrecords['no']?>" class="btn btn-warning"><span><i class="fa fa-eye"></i></span></a>
                        <a href="delete-contact.php?id=<?php echo $fetchcontactusrecords['no']?>" class="btn btn-danger"><span><i class="fa fa-trash"></i></span></a>
                    </td>
                
                    
 
                </tr>
               <?php $count++;}?>
            </table>
        


    </main>

    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>

</html>