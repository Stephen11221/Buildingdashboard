<?php
require_once('logics/dbconection.php');
$delete=mysqli_query($conn,"DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
if($delete)
{

    echo 'deleted successfull';
    header('location:student.php') ;

}
else
{
    echo'error Records';
}

?>
