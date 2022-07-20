<?php
require_once('logics/dbconection.php');
$sqldelete=mysqli_query($conn,"DELETE  FROM contactus WHERE no='".$_GET['id']."' ");
if($sqldelete)
{

    echo 'deleted successfull';
    header('location:contactus.php') ;

}
else
{
    echo'error Records';
}

?>
