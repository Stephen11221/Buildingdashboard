<?php
require_once('logics/dbconection.php');
$delete=mysqli_query($conn,"DELETE FROM contactus WHERE no='".$_GET['id']."' ");
if($delete)
{

    echo 'deleted successfull';
    header('location:delete-contact.php') ;

}
else
{
    echo'error Records';
}

?>
