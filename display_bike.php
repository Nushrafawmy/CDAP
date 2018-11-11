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
</div>
<!-- /top navigation -->

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                     <!--   <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                    <!--  <button class="btn btn-default" type="button">Go!</button>
                    </span> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Display Bike Details</h2>
                        <div class="container">
<form name="form1" action="" method="post">
    <div class="form-group">

        <input class="form-control" id="txtSearch" name="t1" placeholder=" Enter Bicycle Name" type="text">
    </div>

    <button name="btnSearch" type="submit"  class="btn btn-basic btn-lg" > Search</button>
</form>
                            <?php
                            if(isset($_POST["btnSearch"])){

                                $res = mysqli_query($link, "select * from add_bicycle WHERE bike_name LIKE ('$_POST[t1]%')");
                                echo "<tr>";
                                echo "<table class='table table-bordered'>";
                                echo "<th>";
                                echo "Bike Id";
                                echo "</th>";
                                echo "<th>";
                                echo "Bike Number";
                                echo "</th>";
                                echo "<th>";
                                echo "Bike Name";
                                echo "</th>";
                                echo "<th>";
                                echo "Bike Cost";
                                echo "</th>";
                                echo "<th>";
                                echo "Bike Image";
                                echo "</th>";
                                echo "<th>";
                                echo "Delete Bike";
                                echo "</th>";
                                echo "</tr>";
                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";

                                    echo "<td>";
                                    echo $row["bike_id"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["bike_number"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["bike_name"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["cost"];
                                    echo "</td>";
                                    echo "<td>"; ?> <img src="<?php echo $row["bike_image"]; ?>" height="100"
                                                         width="100"><?php echo "</td>";
                                    echo "<td>";

                                    ?>
                                    <?php

                                    echo "</td>";
                                    echo "</tr>";

                                }
                                echo "</table>";
                            }
                            else{


                            ?>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        $res = mysqli_query($link, "select * from add_bicycle");
                        echo "<tr>";
                        echo "<table  class='table table-bordered' id='user_data'>";

                        echo "<th>";
                        echo "Bike Number";
                        echo "</th>";
                        echo "<th>";
                        echo "Bike Name";
                        echo "</th>";
                        echo "<th>";
                        echo "Bike Cost";
                        echo "</th>";
                        echo "<th>";
                        echo "Bike Image";
                        echo "</th>";


                        echo "</tr>";
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";


                            echo "<td>";
                            echo $row["bike_number"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["bike_name"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["cost"];
                            echo "</td>";

                            echo "<td>"; ?> <img src="<?php echo $row["bike_image"]; ?>" height="100"
                                                 width="100"><?php echo "</td>";
                                                       echo "</td>";

                        }
                        echo "</table>";


                        }

                            ?>













