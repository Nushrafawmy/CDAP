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
                <h3></h3>
               <form name="form1" action="" method="post" >
               <div class="form-group">
                   <input class="form-control" id="txtSearch" name="t1" placeholder=" Enter User Name" type="text">
               </div>

                   <button name="btnSearch" type="submit"  class="btn btn-basic btn-lg" > Search</button>
               </div>
               </form>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">


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
                        <h2>Display User Details</h2>
                        <div class="container">
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    </div>
                    <?php
                    if(isset($_POST["btnSearch"])){

                        $res= mysqli_query($link,"select * from user_registeration  WHERE  username LIKE ('$_POST[t1]%')");
                        echo "<tr>";
                        echo "<table class='table table-bordered'>";
                        echo "<th>"; echo " User Id";  echo "</th>";
                        echo "<th>"; echo " First Name";  echo "</th>";
                        echo "<th>"; echo " Last Name";  echo "</th>";
                        echo "<th>"; echo " User Name";  echo "</th>";
                        echo "<th>"; echo " Email";  echo "</th>";
                        echo "<th>"; echo " Number";  echo "</th>";
                        echo "<th>"; echo " Address";  echo "</th>";
                        echo "</tr>";
                        while ($row=mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>";echo $row ["cust_id"];echo "</td>";
                            echo "<td>";echo $row ["firstName"];echo "</td>";
                            echo "<td>";echo $row ["lastName"];echo "</td>";
                            echo "<td>";echo $row ["username"];echo "</td>";
                            echo "<td>";echo $row ["email"];echo "</td>";
                            echo "<td>";echo $row ["number"];echo "</td>";
                            echo "<td>";echo $row ["address"];echo "</td>";
                            echo "</tr>";

                        }
                        echo "</table>";

                    }
                    else{


                    ?>
                        <?php
$res= mysqli_query($link,"select * from user_registeration  ");
 echo "<tr>";
 echo "<table class='table table-bordered'>";
 echo "<th>"; echo " User Id";  echo "</th>";
 echo "<th>"; echo " First Name";  echo "</th>";
 echo "<th>"; echo " Last Name";  echo "</th>";
 echo "<th>"; echo " User Name";  echo "</th>";
 echo "<th>"; echo " Email";  echo "</th>";
 echo "<th>"; echo " Number";  echo "</th>";
 echo "<th>"; echo " Address";  echo "</th>";
 echo "</tr>";
    while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>";echo $row ["cust_id"];echo "</td>";
        echo "<td>";echo $row ["firstName"];echo "</td>";
        echo "<td>";echo $row ["lastName"];echo "</td>";
        echo "<td>";echo $row ["username"];echo "</td>";
        echo "<td>";echo $row ["email"];echo "</td>";
        echo "<td>";echo $row ["number"];echo "</td>";
        echo "<td>";echo $row ["address"];echo "</td>";
        echo "</tr>";

    }
              echo "</table>";
                    }
                        ?>
















