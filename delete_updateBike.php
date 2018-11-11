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
    </div>   <!-- /top navigation -->

    <!-- page content area main -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Alter Bike Details</h3>
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
                           <form name="form1" method="post" action="">
                               <table>
                                   <tr>
                                       <td>
                                           <select name="bikeNumber" class="form-control selectpicker"  >
                                               <?php
                                               $res=mysqli_query($link,"select bike_number from add_bicycle");
                                               while ($row=mysqli_fetch_array($res))
                                               {
                                                   echo "<option>";
                                                   echo $row["bike_number"];

                                                   echo "</option>";
                                               }

                                               ?>


                                           </select>
                                       </td>
                                       <td>
                                           <input type="submit"  value="Search" name="btn_search" class="form-control btn btn-default" style="margin-top: 5px; margin-left: 40px " >

                                       </td>
                                   </tr>
                               </table>
                <?php
                if(isset($_POST["btn_search"])) {
                    $res5 = mysqli_query($link, "select * from add_bicycle WHERE bike_number ='$_POST[bikeNumber]' ");
                    while ($row5 = mysqli_fetch_array($res5)) {
//ardId` INT(5) NOT NULL, CHANGE `bluetooth_id` `blutId`
                        $bikenumber=$row5["bike_number"];
                        $ardunioid=$row5["ardId"];

                        $bluetoothid=$row5["blutId"];

                        $bikename=$row5["bike_name"];

                        $cost=$row5["cost"];
                        $_SESSION["bike_number"] = $bikenumber;



                        //  $_SESSION["bike_number"]=$bike_number;


                    }
                    ?>
                    <table class="table table-bordered">

                        <tr>
                            <td> Bike Number
                                <input type="text" class="form-control" name="bikeNo" value="<?php echo $bikenumber; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td> Ardunio ID
                                <input type="text" class="form-control" value="<?php echo $ardunioid?>" name="ardunioId" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Bluetooth ID
                                <input type="text" class="form-control" value="<?php echo $bluetoothid; ?>" name="bluetoothid">
                            </td>
                        </tr>
                        <tr>
                            <td> Bike Name
                                <input type="text" class="form-control" value="<?php echo $bikename; ?>"
                                       name="bikeName">
                            </td>
                        </tr>
                        <tr>
                            <td> Cost
                                <input type="text" class="form-control" value="<?php echo $cost; ?>" name="cost" required>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="form-control" value="Update" name="Update"> </td>
                            <td><input type="submit" class="form-control" value="Delete" name="Delete"> </td>
                        </tr>
                    </table>
                    <?php
                }
                ?>
                               <?php
                               if(isset($_POST['Delete'])){

                                   //DELETE FROM `add_bicycle` WHERE `bike_number`=12
                                    mysqli_query($link,"DELETE from add_bicycle WHERE bike_number ='$_POST[bikeNumber]' ") ;

                               }
                               if(isset($_POST['Update'])){
                                   $bn=$_POST['bikeNumber'];
                                   $ard=$_POST['ardunioId'];
                                   $bld=$_POST['bluetoothid'];
                                   $bname=$_POST['bikeName'];
                                   $cst=$_POST['cost'];
                                   //mysql_query("UPDATE blogEntry SET content = '".$udcontent."', title = '".$udtitle."' WHERE id = '".$id."'");
                                   //UPDATE `add_bicycle` SET `bike_id`=[value-1],`bike_number`=[value-2],`ardId`=[value-3],`blutId`=[value-4],`bike_name`=[value-5],`cost`=[value-6],`bike_image`=[value-7] WHERE 1
                                   mysqli_query($link,"UPDATE add_bicycle  SET ardId='.$ard',  blutId='$bld',  bike_name='$bname', cost='$cst' WHERE bike_number ='$bn'");
                               }
                               ?>


                           </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

<?php
include 'footer.php';
?>