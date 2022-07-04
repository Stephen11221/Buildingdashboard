<?php
$server='localhost';
$username='root';
$password="";
$database='zalego';

$conn =mysqli_connect($server, $username,$password,$database);

 $sql=mysqli_query($conn, "SELECT  * FROM enrollment");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
</head>

<body>

    <div class="header">
        <img src="images/download.jpg" alt="">
    </div>
    <div class="sidebar ">

        <ul>
            <li>
                <a href="student.php"> <span> <i class="fa fa-group "></i></span></a>
                <span>Student </span>
            </li>
            <li>
                <a href=""><span> <i class="fa fa-folder-open"></i> </span></a>
                <span>Folder</span>
            </li>

            <li>
                <a href=""> <i class="fa fa-graduation-cap"></i></a>
                <span>Compus </span>
            </li>
        </ul>


    </div>
    <main>
        <div class="card-header shadow bg-dark text-center mt-1 text-white">
            <span> <span>  <i class="fa fa-group text-white"></i></span> Student </span>

        </div>
        <div class="card-body shadow ">

            <table class="table table-bordered border-dark table-responsive table-hover table-stripe">
                <tr>
                    <th>ID</th>
                    <th>Fulll Name</th>
                    <th>Phone  Number</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Courses</th>
                    <th>Enrolled on</th>
                    <th>action</th>


                </tr>

                <?php while($fetchenrollmentrecords= mysqli_fetch_array($sql)){ ?>
                    
                    
                <tr>
                    <td><?php echo $fetchenrollmentrecords['no'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['fullname'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['phonenumber'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['email'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['gender'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['course'] ?></td>
                    <td><?php echo $fetchenrollmentrecords['creates_at'] ?></td>
                    <td>
                                
                        <a href="#" class=" btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="#" class=" btn btn-success btn-sm">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class=" btn btn-danger btn-sm">
                            <i class="fa fa-trash "></i>
                        </a>
                </td>
                    
 
                </tr>
               <?php }?>
            </table>
        </div>


    </main>

    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>

</html>