<?php
include 'header.php';
$username = "luxmidhananjayan@yahoo.com";
$hash = "b5b58a60b11a132de83cc137921dfbe1e037e4fa35302f3de2badf90fb71121f";
?>

<?php if(isset($_POST['btn_send'])){
// Authorisation details.


// Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";
// Data for text message. This is the text message data.
    $sender = $_POST['sender']; // This is who the message appears to be from.
    $numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
    $message = $_POST['mess'];
// 612 chars or less
// A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    echo($result);
}
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
                    <h3>Send Notification</h3>
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
                            <form name="form1" action="send_notification.php" method="post" class="col-lg-6 " enctype="multipart/form-data">
                                <table class="table">

                                    <tr>
                                        <td> Sender
                                            <input type="text" class="form-control" placeholder="Enter Sender" name="sender" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Number

                                            <input type="text" class="form-control" placeholder="Enter Number" name="num" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Message

                                            <input type="text" class="form-control" placeholder="Enter Message" name="mess" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--<input class="btn btn-default submit " type="submit" name="submitAdminRegister" value="Register">-->
                                            <input type="submit" name="btn_send" class="btn-default submit" value="Send Message"style="background-color: blue; color: whitesmoke">
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
include 'footer.php';
?>