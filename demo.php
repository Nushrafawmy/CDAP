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
</div> <!-- /top navigation -->

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

                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <form name="form1" method="post" action="">


            <div class="clearfix"></div>
            <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Payment Details</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form name="form1" action="" method="post" class="col-lg-6 " enctype="multipart/form-data">
                                <table class="table">
                                    <td>
                                        <select name="usr" class="form-control selectpicker"  >
                                            <?php
                                            $res=mysqli_query($link,"SELECT `issueID` FROM `issue_bike` ORDER BY `issueID` DESC LIMIT 1");
                                            while ($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["issueID"];

                                                echo "</option>";
                                            }

                                            ?>

                                        </select>
                                    <tr>
                                        <td>
                                         Date  <input type="text" class="form-control" name="issueDate" id="issueDate" disabled value="<?php echo $_SESSION['issueDate']; ?>" style="width: 25%"/>
                                          Return Date  <input type="text" class="form-control" name="returnDate" id="returnDate" disabled value="<?php echo $_SESSION['returnDate']; ?>" style="width: 25%" />
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>
                                         No Of Days

                                            <input type="text" class="form-control"   id="dateDiff" name="dateDiff" disabled value="<?php $date1=date_create($_SESSION['issueDate']);$date2=date_create($_SESSION['returnDate']);$diff= date_diff($date1,$date2);$diffStr=$diff->format('%a');echo $diffStr; ?>" style="width: 25%"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Amount Per Day
                                            <input type="text"  class="form-control" id="amountPerDay" name="Amount"  style="width: 25%" />
                                        </td>
                                    </tr>
                                 <script>
                                     function computeAmount() {
                                         var amount= document.getElementById('amountPerDay').value;
                                         var datediff=document.getElementById('dateDiff').value;

                                         document.getElementById('result').value=amount*datediff;
                                     }
                                 </script>

                                    <tr>
                                        <td>
                                            <input type="text" id="result" name="result" class="form-control" style="width: 25%" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <button class="form-control"  name="cal" style="width: 25%" onclick="computeAmount();">Calculate</button>
                                        </td>
                                    </tr>


                                    <tr>
                            </form>
                            <?php
                            if(isset($_POST['cal'])){
                                mysqli_query($link,"INSERT INTO payment VALUE ('','$_POST[Amount]','$_POST[result]','$_POST[usr]')");
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /page content -->
