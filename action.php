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
    </div>   <!-- /top navigation -->

    <!-- page content area main -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Action</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" placeholder="Search for..."> -->
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
                            <h2></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form name="form1" action="" method="post" class="col-lg-6 " enctype="multipart/form-data">
                                <table class="table">
                                    <tr>
                                        <td> User Name
                                            <input type="text" class="form-control" placeholder="User Name " name="username" required="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Problem
                                            <input type="text" class="form-control" placeholder=" Enter Problem " name="problem" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Action
                                            <input type="text" class="form-control" placeholder="Enter Action" name="Action" required="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <!--<input class="btn btn-default submit " type="submit" name="submitAdminRegister" value="Register">-->
                                            <input type="submit" name="notify" class="btn-default submit" value="Notify Incident "style="background-color: blue; color: whitesmoke">
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
if(isset($_POST ["notify"]))
{

    mysqli_query($link, "insert into action VALUE ('','$_POST[username]','$_POST[problem]','$_POST[Action]')");

    ?>
    <script type="text/javascript">
        alert("Accident Details added succesfully");
    </script>

    <?php
}
?>




<?php
include 'footer.php';
?>