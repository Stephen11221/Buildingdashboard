<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$done=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['enter']))
{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST ['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    $data=mysqli_query($done,"INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)VALUE('$fullname','$phonenumber','$email','$gender','$course')");

if('insertData')
{
    $response="Success Detail";
}
else
{
    $response="Not correct detail";

};
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="card " >
            <div class="card-header text-center text-white bg-dark">
                <h4>
                </h4>
            </div>
                <div class="card-body">
                    <form action="student.php" method="post" >
                        <div class="row">
                        <div class="col-lg-12">
                            <label for=""> Full Name:</label>
                            <input name="fullname" type="text"   class="form-control" id="">

                        </div>
                        <div class="col-lg-12">
                            <label for="">phonenumber</label>
                            <input name="phonenumber" type="number" class="form-control">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Email Address</label>
                            <input name="email" type="text"  class="form-control" >                                        
                        </div>
                        <div class="col-lg-12">
                            <label for="">What's your gender</label>
                            <select name="gender" class="form-control">
                            <option>   </option>
                            <option>MALE</option>
                                <option>FEMALE</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">What's your preferred course?</label>
                            <select name="course" class="form-control" id="">
                            <option></option>
                                <option ><b>--Select your course--</b></option>
                                <option > Cyber security</option>
                                <option >Web development </option>
                            </select>
                        </div>

                    </div>
                    
                    <br>
                <a href = "student.php" class="btn btn-primary"> 
                    <button type="submit" name="enter" class=" btn btn-primary">   
                    Add Record 
                   </button>
          </a>
      </form>

    </div>
  </div>
</div>


<?php require('includes/script.php')?>
</body>

</html>