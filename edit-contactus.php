<?php
    session_start();
    $message='';
    require_once('logics/dbconection.php');

    $queryusers=mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
    while($fetchusers=mysqli_fetch_array($queryusers))
    {
        $firstname=$fetchusers['firstname'];
        $lastname=$fetchusers['lastname'];
        $email=$fetchusers['email'];
        $phonenumber=$fetchusers['phonenumber']; 
        $message=$fetchusers['message'];
        $id=$fetchusers['no'];
        
    }
    

    // updating user records
   require_once('logics/process-editcont.php') 

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
    <div class="card">
        <div class="card-header">
            <span>Edit contactus</span>
            
        </div>
        <div class="card-body">
            <form action="edit-contactus.php?id=<?php echo $id ?>" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        
                     <label for="">firstname</label>
                     <input type="text" value="<?php echo $firstname ?>" name="firstname" class="form-control">
                    </div>
                    <div class="col-lg-6">
                    <label for="">lastname</label>
                        <input type="text" value="<?php echo $lastname ?>" name="lastname" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="">Email</label>
                        <input type="text"  value="<?php echo $email ?> "name="email"class="form-control">  
                    </div>
                    <div class="col-lg-6">
                        <label for="">phonenumber </label>
                         <input type="number" value="<?php echo $phonenumber?>" name="phonenumber" class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-12">
                      <label for="">message</label>
                     <input type="text" class="form-control"  value="<?php echo $message ?>" name="message" >

                  </div>
                </div>
                <button type="submit" name="update" class="btn btn-warning">update</button>
            </form>
        </div>
    </div>
</main>

<?php require('includes/script.php')?>
</body>
</html>