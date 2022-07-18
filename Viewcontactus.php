<?php
    session_start();
    $message='';
    require_once('logics/dbconection.php');

    $sqldan=mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
    while($fetchdan=mysqli_fetch_array($sqldan))
    {
        $firstname=$fetchdan['firstname'];
        $lastname=$fetchdan['lastname'];
        $email=$fetchdan['email'];
        $phonenumber=$fetchdan['phonenumber']; 
        $message=$fetchdan['message'];
        $id=$fetchdan['no'];
        
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">


<?php require_once('includes/headers.php') ?>

<body>
    <?php include('includes/nav.php') ?>


    <div class="sidebar ">
        <?php include("includes/sidebar.php")?>
    </div>
    <main class="main-content">
        <div class="row pt-5 ">
            <div class="col-lg-6 ">
                <div class="card ">
                    <div class="card-header bg-primary">
                        <span>contact us information</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">firstname: <span class="float-end badge-text-bg-warning"> <?php echo $firstname?></span> </li>
                            <li class="list-group-item">lastname: <span class="float-end"> <?php echo $lastname?></span> </li>
                            <li class="list-group-item">phonenumber <span class="float-end"> <?php echo $phonenumber?></span> </li>
                            <li class="list-group-item">email <span class="float-end"> <?php echo $email?></span> </li>
                            <li class="list-group-item"> massege <span class="float-end">  <?php echo $message?></span> </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
            

    
    </main>

    <?php require('includes/script.php')?>

</body>
</html>