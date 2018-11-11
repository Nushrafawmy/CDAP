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
</div>    <!-- /top navigation -->

    <!-- page content area main -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Bicycle Informations</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">

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
                                    <td> Bike Number
                                        <input type="text" class="form-control" placeholder="Enter Bike Number " name="bike_number" required="" minlength="6" maxlength="6">
                                    </td>
                                </tr>

                                <tr>
                                    <td> Ardunio id
                                        <input type="text" class="form-control" placeholder=" Enter Ardunio id " name="ardunio_id" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td> Bluetooth
                                        <input type="text" class="form-control" placeholder="Enter bluetooth" name="bluetooth" required="">
                                    </td>
                                </tr>
                                    <tr>
                                    <td> Bike Name
                                        <input type="text" class="form-control" placeholder="Enter Bike Name" name="bike_name" required=""></td>
                                    </tr>
                                <tr>
                                    <td> Bike cost
                                        <input type="text" class="form-control" placeholder="Enter Bike cost" name="bike_cost" required="" ></td>
                                </tr>
                                <tr>
                                    <td>
                                        Bike Image

                                        <input type="file" class="form-control" name="bike_img" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<input class="btn btn-default submit " type="submit" name="submitAdminRegister" value="Register">-->
                                        <input type="submit" name="bikeAddBtn" class="btn-default submit" value="Add Bike Details "style="background-color: blue; color: whitesmoke">
                                    </td>
                                </tr>
                            </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

<?php
if(isset($_POST ["bikeAddBtn"])){
  /*  mysqli_query($link,"insert into admin_registeration VALUE ('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[password]')");
   */
  /*copy images source to destinaion*/
  $tm=md5(time()); /*give unique name*/
  $fnm=$_FILES["bike_img"] ["name"]; /*predefined function*/
  $dst ="./bikes_images/".$tm.$fnm;
    $dst1="bikes_images/".$tm.$fnm;
    move_uploaded_file($_FILES["bike_img"] ["tmp_name"],$dst);



  mysqli_query($link, "insert into add_bicycle VALUE ('','$_POST[bike_number]','$_POST[ardunio_id]','$_POST[bluetooth]','$_POST[bike_name]','$_POST[bike_cost]','$dst1')");

    ?>
    <script type="text/javascript">
        alert("Bike Details added succesfully");
    </script>
    <?php
}
?>
<?php
include 'footer.php';
?>

