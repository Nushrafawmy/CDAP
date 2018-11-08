<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login Form | Route Pal </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class=" text-center ">
    <h1 style="font-family:sans-serif ">Route Pal System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>Admin Login Form</h1>

            <div>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submitAdminLogin" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="admin_register.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>
<?php
if(isset($_POST["submitAdminLogin"])){
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['login_user']=$username;


    $count =0;
    $res=mysqli_query($link,"select * from  admin_registeration where username='$_POST[username]' && password='$_POST[password]' ");

    $count=mysqli_num_rows($res);
    if($count==0)
    {
            ?>
    <div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white">Invalid</strong> Username Or Password.
    </div>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            window.location="map.php";
            </script>
<?php

    }

}
?>






</body>
</html>
