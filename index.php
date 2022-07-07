<!DOCTYPE html>
<html lang="en">

<?php require_once('includes/headers.php') ?>

<body>
<?php include('includes/nav.php') ?>


 <div class="sidebar ">
 <?php include("includes/sidebar.php")?>
    </div>
    <main>
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
                        <Span>Student</Span>
                    </div>
                    <div class="card-body shadow">
                        <span> <i class="fa fa-group fa-4x">  </i></span>
                        <span class="float-end">00</span>

                    </div>
                    <div class="footer">

                    </div>

                </div>
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow ">
                        <span>Available courses</span>
                    </div>
                    <div class="card-body shadow">
                        <span> <i class="fa fa-folder-open fa-4x"> </i></span> <span class="float-end">00 </span>
                    </div>
                </div>
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow">
                        <span>Compuses</span>
                    </div>
                    <div class="card- body shadow">
                        <span>  <i class="fa fa-graduation-cap fa-4x"></i></span>
                        <span class="float-end">00</span>
                    </div>
                </div>

                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-white text-center shadow">
                        <span>User</span>
                    </div>
                    <div class="card-body shadow">
                        <span> <i class="fa fa-user fa-4x"></i></span>
                        <span class="float-end">00</span>

                    </div>

                </div>
            </div>
            <div class="row p-3">
                <div class="col-lg-12">
                    <div class="card-header shadow bg-dark text-center text-white">
                        <span>Student Analysis</span>

                    </div>
                    <div class="body shadow">
                        <span> <i class="fa fa-line-chart fa-4x"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require('includes/script.php')?>
</body>

</html>