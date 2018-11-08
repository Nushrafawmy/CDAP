<?php
include 'header.php';
include 'connection.php';
?>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">

                </li>


            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add User Informations</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                     <!--   <input type="text" class="form-control" placeholder="Search for..."> -->
                        <span class="input-group-btn">
                    <!--  <button class="btn btn-default" type="button">Go!</button> -->
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">



                    </div>
                    <div class="x_content">
                        <form name="form1" action="" method="post" class="col-lg-6 " enctype="multipart/form-data">
                            <table class="table">
                                <tr>
                                    <td>
                                        First Name
                                        <input type="text" class="form-control" placeholder=" Enter First Name" name="firstname" required=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                      Last Name
                                        <input type="text" class="form-control" placeholder=" Enter Last Name" name="lastname" required=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        User Name
                                        <input type="text" class="form-control" placeholder="Enter User Name" name="username" required=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Email
                                        <input type="text" class="form-control" placeholder="Enter Email" name="email" required=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Phone Number
                                        <input type="text" class="form-control" placeholder=" Enter Phone Number" name="number" required=""/>                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Address
                                        <input type="text" class="form-control" placeholder=" Enter Address" name="address" required=""/>                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="btn btn-default submit " type="submit" name=" userRegister" value="Register" style="background-color: blue; color: whitesmoke">
                                    </td>
                                </tr>







    <?php
    if(isset($_POST["userRegister"]))
    {

        mysqli_query($link,"insert into user_registeration VALUE ('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[number]','$_POST[address]')");

        ?>


  <div class="alert alert-success col-lg-6 col-lg-push-0">
        Registration successfully
    </div>
     <?php
    }
    ?>



