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

    <title>Admin Registeration Form | Route Pal </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/animate.min.css" rel="stylesheet"> -->
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="text-center ">
    <h1 style="font-family:Lucida Console">Route Pal System</h1>
</div>


<body class="login" style="margin-top: -20px;">



<div class="login_wrapper">

    <section class="login_content" style="margin-top: -40px;">
        <form name="form1" action="" method="post">
            <h2 style="text-align: center">Admin Registration Form</h2><br>

            <div>
                <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
            </div>
            <div>
                <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
            </div>

            <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
            </div>

            <div>
                <input type="text" class="form-control" placeholder="email" name="email" required=""/>
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
            </div>

            <div class="col-lg-12  col-lg-push-3">
                <input class="btn btn-default submit " type="submit" name="submitAdminRegister" value="Register">
            </div>

        </form>
    </section>
        <?php
        if(isset($_POST["submitAdminRegister"]))
        {

           mysqli_query($link,"insert into admin_registeration VALUE ('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[password]')");


        ?>

    <?php
        }
        ?>









</div>




</body>
</html>