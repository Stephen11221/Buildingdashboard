<?php
    session_start();
    $message='';
    require_once('logics/dbconection.php');

    $querystudent=mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
    while($fetchstudent=mysqli_fetch_array($querystudent))
    {
        $fullname=$fetchstudent['fullname'];
        $phonenumber=$fetchstudent['phonenumber'];
        $email=$fetchstudent['email'];
        $gender=$fetchstudent['gender'];
        $course=$fetchstudent['course'];
        $id=$fetchstudent['no'];
        
    }

    // updating user records
    require_once('logics/process-update.php');

?>

<!DOCTYPE html>
<html lang="en">


<?php require_once('includes/headers.php') ?>

<body>
    <?php include('includes/nav.php') ?>


    <div class="sidebar ">
        <?php include("includes/sidebar.php")?>
    </div>
    <main class="main-content">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card " >
                        <div class="card-header text-center text-white bg-dark">
                            <h4>Edit Student
                            </h4>
                        </div>
                        <div class="card-body">

                                <form action="edit-enrollment.php?id=<?php echo $id ?>" method="post" >

                                   <div class="row">
                                    <div class="col-lg-6">
                                        <label for=""> Full Name:</label>
                                        <input name="fullname" type="text" value="<?php echo $fullname ?>"  class="form-control" id="">

                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">phonenumber</label>
                                        <input name="phonenumber" type="number" value="<?php echo $phonenumber ?>" class="form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Email Address</label>
                                        <input name="email" type="text" value="<?php echo $email ?>" class="form-control" >                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">What's your gender</label>
                                        <select name="gender" class="form-control">
                                        <option><?php echo $gender ?>   </option>
                                        <option>MALE</option>
                                         <option>FEMALE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">What's your preferred course?</label>
               <select name="course" class="form-control" id="">
                   <option><?php echo $course?> </option>
                    <option ><b>--Select your course--</b></option>
                    <option > Cyber security</option>
                    <option >Web development </option>
                


                </select>
                                    </div>

                                </div>
                                
                                <br> <button type="submit" name="update" class=" btn btn-primary">update Record </button>



                      
                      
                      
                      
      </form>

                        </div>

                    </div>
                </div>
            </div>
    </main>
    <?php require('includes/script.php')?>
</body>

</html>