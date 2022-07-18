<?php
require_once('logics/dbconection.php');
$message='';
if(isset($_POST['update']))
{
    //fetch form data
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];

    $uprefresh=mysqli_query($conn, "UPDATE  contactus set 
    firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phonenumber',message='$message' 
    WHERE no='".$_GET['id']."'");

}
  
 ?>