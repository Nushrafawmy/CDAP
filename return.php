<?php
include 'header.php';
include 'connection.php';
session_start();
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
</div>  <!-- /top navigation -->
<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Return Bike</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <!--<input type="text" class="form-control" placeholder="Search for...">-->
                        <span class="input-group-btn">
                     <!-- <button class="btn btn-default" type="button">Go!</button> -->
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
                        <form name="form1" action="" method="post"><!-- insert the link to payement page -->
                            <table>
                                <tr>
                                    <td>
                                        <select name="usr" class="form-control selectpicker"  >
                                            <?php
                                            $res=mysqli_query($link,"select issueID from issue_bike");
                                            while ($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["issueID"];

                                                echo "</option>";
                                            }

                                            ?>

                                        </select>

                                    </td>


                                    <td >


                                        <input type="submit"  value="Search" name="btn_search" class="form-control btn btn-default" style="margin-top: 5px; margin-left: 40px " >
                                    </td>
                                </tr>

                            </table>
                            <?php
                            if(isset($_POST["btn_search"])) {
                                $res5 = mysqli_query($link, "select * from  issue_bike WHERE issueID='$_POST[usr]' ");
                                while ($row5 = mysqli_fetch_array($res5)) {
                                    $username = $row5["username"];
                                    $returnDate=$row5["returnDate"];
                                    $bikeNumber = $row5["bikeNumber"];

                                  /*  $lastname = $row5["lastName"];
                                    $email = $row5["email"];
                                    $number = $row5["number"];
                                    $address = $row5["address"];

                                   */

                                    $_SESSION["username"] = $username;
                                    //  $_SESSION["bike_number"]=$bike_number;


                                }
                                ?>
                            <table class="table table-bordered">
                                <tr>
                                    <td> User Name
                                        <input type="text" class="form-control" placeholder="User Name"  name="username" value="<?php echo $username; ?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td> Return Date
                                        <input type="text" class="form-control" placeholder="Return Date" id="returnDate" name="returnDate" value="<?php echo $returnDate; ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Bike Number
                                        <input type="text" class="form-control" placeholder="bikeNO"  name="bikeno" value="<?php echo $bikeNumber; ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td> Status
                                        <input type="text" class="form-control" placeholder="Status"  name="status" value="" required >
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>
                                        <input type="submit" class="form-control"   name="btnReturn" value="Return" >
                                    </td>
                                </tr>
                                <tr>

                                <?php
                            }
                                ?>
                                    <?php
                                if(isset($_POST['btnReturn'])){
                                     $st=$_POST['status'];

                                   $bn=$_POST['usr'];

                                   mysqli_query($link,"UPDATE issue_bike SET status='$st' WHERE  issueID='$bn'" );
                                }

                                ?>
