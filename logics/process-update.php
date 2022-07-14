<?php
require_once('logics/dbconection.php');
$message='';
if(isset($_POST['update']))
{
    //fetch form data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    //perform the query

    $update=mysqli_query($conn, "UPDATE  enrollment set 
    fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course' 
    WHERE no='".$_GET['id']."'");

    if($update)
    {
        $message="Success update";
    }
    else
    {
        $message= "Error";
    }

  }
 ?>