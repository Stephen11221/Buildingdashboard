<?php
require_once('logics/dbconection.php');
 $sql=mysqli_query($conn, "SELECT  * FROM subcribers ");
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
            <span>Subscriber </span>

        </div>
        <table class="table table-bordered border-dark table-responsive table-hover table-stripe" style="font-size:12px">
        <tr>
             <th> no</th>
            <th>Email</th>
            <th>Created _at</th>
        </tr>
            <?php 
               $count=1;
               while($fetchsubcribersrecords= mysqli_fetch_array($sql)){ ?>
        <tr>
            <td><?php echo $count?></td>
            <td> <?php echo $fetchsubcribersrecords ['email']?></td>
            <td><?php echo $fetchsubcribersrecords ['created_at']?> </td>
            <td></td>
        </tr>
        
        <?php $count++; }?>
        </table>

    </main>

<script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
<script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>

</html>