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
                    <h3>Issue Bike</h3>
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
                                                $res=mysqli_query($link,"select username from user_registeration");
                                                while ($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<option>";
                                                    echo $row["username"];

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
                                if(isset($_POST["btn_search"]))
                                {
                                    $res5=mysqli_query($link,"select * from  user_registeration WHERE username='$_POST[usr]' ");
                                    while ($row5=mysqli_fetch_array($res5))
                                    {
                                        $username=$row5["username"];
                                        $firstname=$row5["firstName"];
                                        $lastname=$row5["lastName"];
                                        $email=$row5["email"];
                                        $number=$row5["number"];
                                        $address=$row5["address"];

                                        $_SESSION["username"]=$username;
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
                                            <td> Full Name
                                                <input type="text" class="form-control" placeholder="Full Name"  value="<?php echo $firstname." ".$lastname?>"  name="name" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Email
                                                <input type="text" class="form-control" placeholder="email"  value="<?php echo $email ?>" name="email" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Phone Number
                                                <input type="text" class="form-control" placeholder="Phone Number"  value="<?php echo $number ?>" name="number" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Address
                                                <input type="text" class="form-control" placeholder="Address"  value="<?php echo $address ?>" name="address" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select name="bikeNumber" class="form-control" >

                                                    <?php
                                                    $res=mysqli_query($link,"select bike_number from  add_bicycle");
                                                    while ($row=mysqli_fetch_array($res))
                                                    {
                                                        echo "<option> " ;
                                                        echo $row["bike_number"];
                                                        echo "</option> " ;
                                                    }
                                                    ?>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Issue Date
                                                <input type="text" class="form-control" placeholder="Issue Date" id="issueDate" name="issueDate" value="<?php echo date("d-m-Y")?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Return Date
                                                <input type="text" class="form-control" placeholder="Return Date" id="returnDate" name="returnDate" value="<?php echo date("d-m-Y")?>" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="submit" class="form-control" value="Issue Bike"  name="btn_issue"    style="background-color: blue; color: whitesmoke"  >
                                            </td>
                                        </tr>
                                        <tr>

                                        </tr>


                                    </table>
                                    <?php
                                }
                                ?>
                            </form>
                            <?php
                            if(isset($_POST["btn_issue"]))

                            {
                                $sql="insert into issue_bike VALUES ('','$_SESSION[username]','$_POST[name]','$_POST[email]','$_POST[number]','$_POST[address]','$_POST[bikeNumber]',STR_TO_DATE('$_POST[issueDate]','%d-%m-%Y'), STR_TO_DATE('$_POST[returnDate]', '%d-%m-%Y'))";
                                $_SESSION['issueDate']=$_POST['issueDate'];
                                $_SESSION['returnDate']=$_POST['returnDate'];
                                mysqli_query($link,$sql);
                                ?>
                                <script type="text/javascript">
                                    alert("bike issued Successfully");
                                    window.location.href='demo.php';
                                </script>
                                <?php

                            }


                            ?>
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
