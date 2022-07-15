<?php
require_once('logics/dbconection.php');
//counting total number of students
$queryenrollmentstudent=mysqli_query($conn,"SELECT * FROM enrollment");
$countallstudents=mysqli_num_rows($queryenrollmentstudent);
//count by gender
$queryenrollmentfemale=mysqli_query($conn,"SELECT * FROM enrollment WHERE gender='female'");
$countallfemale=mysqli_num_rows($queryenrollmentfemale);
?>
<!DOCTYPE html>
<html lang="en">

<?php require('includes/headers.php') ?>

<body>
<?php include('includes/nav.php') ?>


 <div class="sidebar ">
 <?php include_once("includes/sidebar.php")?>
    </div>
    <main class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Top content</span>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow">
                        <span>students</span>
                    </div>
                    <div class="card-body shadow">
                        <span> <i class="fa fa-group fa-4x text-dark">  </i></span>
                        <span class="float-end badge bg-dark rounded-pill"><?php echo $countallstudents?></span>

                    </div>
                    <div class="footer">

                    </div>

                </div>
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow ">
                        <span>Available courses</span>
                    </div>
                    <div class="card-body shadow">
                        <span> <i class="fa fa-folder-open fa-4x  text-dark"> </i></span> <span class="float-end badge bg-dark rounded-pill"><?php echo $countallfemale?></span>
                    </div>
                </div>
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow">
                        <span>Compuses</span>
                    </div>
                    <div class="card- body shadow">
                        <span>  <i class="fa fa-graduation-cap fa-4x  text-dark"></i></span>
                        <span class="float-end  text-dark">00</span>
                    </div>
                </div>

                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow">
                        <span>User</span>
                    </div>
                    <div class="card-body shadow">
                        <span> <i class="fa fa-user fa-4x  text-dark"></i></span>
                        <span class="float-end  text-dark">00</span>

                    </div>

                </div>
            </div>
            <div class="row p-3">
                <div class="col-lg-12">
                    <div class="card-header shadow bg-dark text-center text-white">
                        <span>Student Analysis</span>

                    </div>
                    <div class="body shadow">
                        <span> <i class="fa fa-line-chart fa-4x  text-dark"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require('includes/script.php')?>
</body>

</html>