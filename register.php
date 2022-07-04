<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database,);
if($conn)
{
    echo 'Database connection success';
}
else
{
    echo 'Error occured';
}
if(isset($_POST['singup']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql=mysqli_query($conn, "INSERT INTO 
    register(username,email,password) VALUE('$username','$email','$password')");
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
</head>
<style>
    main {
        background-color: maroon;
        color: white;
        text-align: center;
    }
    
    body {}
    
    img {
        height: 80px;
    }
    
    form {
        border-style: groove;
        height: 350px;
        margin-left: 500px;
        margin-right: 500px;
        align-items: center;
        padding: 20px;
        border-radius: 10px;
    }
</style>

<body>
    <main>
        <h2>Zalego| Admin Register</h2>
    </main>
    <center><img src="images/download.jpg" alt=""></center>
    <form action="register.php" method="post">

        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
        <label for="">Email</label>
        <input type="email" name="email"  class="form-control">
        <label for="">Password</label>
        <input type="password" name="password" id="password"class="form-control">
        <label for="">Confirm password</label>
        <input type="password"  name="cpassword" id="cpassword" class="form-control">
        <button type="singup" name="singup" class="btn btn-primary  "> Submit</button>
        <p>Have account? Sign in <a href="login.php">here</a></p>





        
    </form>

    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>