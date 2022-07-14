<?php
    $message="";
    require_once('logics/dbconection.php');
    $querystudent= mysqli_query($conn,"SELECT * FROM enrollment WHERE no=' ".$_GET["id"]."' ");
    while ($fetchstudent= mysqli_fetch_array($querystudent))
    {
        $id=$fetchstudent['no'];
        $fullname= $fetchstudent['fullname'];
        $phonenumber=$fetchstudent['phonenumber'];
        $email=$fetchstudent['email'];
        $gender=$fetchstudent['gender'];
        $course=$fetchstudent['course'];
    }
     // updating user records
     require_once('logics/process-update.php')
?>

<!DOCTYPE html>
<html lang="en">
 <?php require_once('includes/headers.php')?>
<body>
            <!-- start navigation bar here -->
            <?php include("includes/nav.php")?>
            <!-- end navigation bar here -->

    <div class="header">
        <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

<div class="sidebar">
        <?php include("includes/sidebar.php")?>

</div>

<div class="main-content pt-5">
          <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header bg-dark text-center text-white">
                          <h4>
                            Edit Student
                           </h4>
                             <?php echo $fullname?>
                             <?php echo $message?>
                       </div>
                    </div>
                </div>
            </div>
          </div>
      
       <div class="card-body"> 
          <form action="edit-enrollment.php?id=<?php echo $id ?>" METHOD="POST">
                       <div class="row">
                     <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label">
                           <b>
                       Full Name
                      </b>
                    </label>
                     <input type="text" name="fullname" class="form-control" value="<?php echo $fullname ?>" placeholder="Enter your full Name">
                    </div>
                     <div class="mb-3 col-lg-6">
                               <label for="phone" class="form-label">
                        <b>
                    Phone Number
                 </b>
                  </label>
               <input type="tel" name="phonenumber" class="form-control" value="<?php echo $phonenumber ?>" placeholder="Enter your phone number">
                 </div>
    
                          <div class="mb-3 col-lg-6">
                  <label for="email" class="form-label"3>
                  <b>
                  Email
                  </b>
               </label>
              <input type="email" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Enter your email address">
             </div>
               <div class="mb-3 col-lg-6">
               <label for="gender"  class="form-label">
                    <b>
                    What's your gender
                   </b>            
              </label>
                <select name="gender" class="form-control" id="">
                   <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                    <option value="--select your gender--">--select your gender--</option>
                   <option value="male">male</option>
                  <option value="female">female</option>
                  <option value="rather not say">rather not say</option>
                 </select>
            </div>
             
               
            <div class="mb-3 col-lg-6">
                 <label for="course"  class="form-label">
                   <b> 
                    What's your preferred course?
                </b>              
                </label>
                <select name="course" class="form-control" id="">
                    <option value="<?php echo $course ?>"><?php echo $course ?></option>
                    <option value="--select your course--"> <b>--select your course-- </b> </option>
                    <option value="software development">Software development</option>
                    <option value="cyber security">cyber security</option>
                    <option value="android design">android design</option>
                 </select>
        
              </div>
          
            <br>

           
        
               <div class="row pt-3"></div>
                 <div class="col-lg-6">
               <button type="submit" name="updateenrollment" class="btn btn-primary">Update</button> 
               </div> 
           </div>
 
     </form>
   </div>
</div>

    
    
    <?php require_once('includes/script.php') ?>
</body>
</html>