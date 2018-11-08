<?php
include 'header.php';
$user = "94770590500";
$password = "8754";
?>
<?php if (isset($_POST['btn_send'])) {
    $text = urlencode("Please contact Route Pal to extend due on bike");
    $to = $_POST['num'];

    $baseurl = "http://www.textit.biz/sendmsg";
    $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
    $ret = file($url);

    $res = explode(":", $ret[0]);

    if (trim($res[0]) == "OK") {
        echo "Message Sent - ID : " . $res[1];
    } else {
        echo "Sent Failed - Error : " . $res[1];
    }
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
                        <form name="form1" action="s.php" method="post" class="col-lg-6 " enctype="multipart/form-data">
                            <table class="table">

                                <tr>
                                    <td>
                                        Number

                                        <input type="text" class="form-control" placeholder="Enter Number" name="num" required="">
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
