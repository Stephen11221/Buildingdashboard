<?php 
 require_once('logics/dbconection.php');
 $querystudent=mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
 while($fetchstudent=mysqli_fetch_array($querystudent))
{
    $fullname=$fetchstudent['fullname'];
    $phonenumber=$fetchstudent['phonenumber'];
    $email=$fetchstudent['email'];
    $course=$fetchstudent['course'];
    $gender=$fetchstudent['gender'];
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
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center text-white bg-dark">
                            <h4>Edit Student
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="#" method="post" class="shadow">

                                   <div class="row">
                                    <div class="col-lg-6">
                                        <label for=""> Full Name:</label>
                                        <input name="fullname" type="text" value="<?php  echo $fullname ?>" class="form-control" id="">

                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">phonenumber</label>
                                        <input name="phonenumber" type="number" value="<?php  echo $phonenumber?>" class="form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Email Address</label>
                                        <input name="email" type="text" class="form-control" value="<?php  echo $email?>">                                        

                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">What's your gender</label>
                                        <select name="gender" class="form-control">
                                        <option value="<?php  echo $gender?>">     <?php  echo $gender?>   </option>
                               <option> <b> --Select your gender-- </b></option>
                              
                                   <option>MALE</option>
                                    <OPtion>FEMALE</OPtion>
                    

                </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">What's your preferred course?</label>
               <select name="course" class="form-control" id="">
                   <option value="<?php  echo $course?>"><?php  echo $course?></option>
                    <option ><b>--Select your course--</b></option>
                    <option > Cyber security</option>
                    <option >Web development </option>
                


                </select>
                                    </div>

                                </div>
                                <input type="checkbox">
                                <label for="">  Agree terms and condition</label> <br>
                                <br> <button type="submit" name="enter" class="btn btn-primary">Submit application </button>



                            </form>

                        </div>

                    </div>
                </div>
            </div>
    </main>
    <?php require('includes/script.php')?>
</body>

</html>