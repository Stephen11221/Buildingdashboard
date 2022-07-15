<?php
// database connection
require_once('logics/dbconection.php');
$sqlfetchenrolledtudent=mysqli_query($conn,
"SELECT * FROM enrollment WHERE no='".$_GET['id']."'" );
while($fetchstudent=mysqli_fetch_array($sqlfetchenrolledtudent))
{
    $fullname=$fetchstudent['fullname'];
    $email=$fetchstudent['email'];
    $phonenumber=$fetchstudent['phonenumber'];
    $gender=$fetchstudent['gender'];
    $course=$fetchstudent['course'];
    $creates_at=$fetchstudent['creates_at'];

}
?>


<!DOCTYPE html>
<html lang="en">


<?php require_once('includes/headers.php') ?>

<body>
    <?php include('includes/nav.php') ?>


    <div class="sidebar ">
        <?php include("includes/sidebar.php")?>
    </div>
    <main class="main-content pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Personal information </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">fullname: <span class="float-end badge bg-primary rounded-pill"><?php echo $fullname?></span></li>
                                <li class="list-group-item">phonenumber: <span class="float-end badge bg-warning rounded-pill"><?php echo $phonenumber?></span></li>
                                <li class="list-group-item">email: <span class="float-end badge bg-warning rounded-pill"></span > <?php echo $email ?></li>

                            </ul>
                        </div>

                    </div>
                </div>
                
                <div class="col-lg-6 pt-5">
                <div class="card ">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Other information </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Gender: <span class="float-end badge bg-primary rounded-pill"><?php echo $gender ?></span></li>
                                <li class="list-group-item">course: <span class="float-end badge bg-warning rounded-pill"><?php echo $course?></span></li>
                                <li class="list-group-item">creates_at:<span class="float-end badge bg-danger rounded-pill "> <?php echo $creates_at?></span > </li>

                            </ul>
                        </div>

                    </div>
                    

                </div>
            </div>

            </div>


        </div>


    </main>
    <?php require('includes/script.php')?>
</body>

</html>