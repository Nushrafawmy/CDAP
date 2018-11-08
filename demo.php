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
                                    <tr>
                                        <td>





                                            Issue Date  <input type="text" class="form-control" name="issueDate" id="issueDate" value="<?php echo $_SESSION['issueDate']; ?>" />



                                            Return Date  <input type="text" class="form-control" name="returnDate" id="returnDate" value="<?php echo $_SESSION['returnDate']; ?>" />


                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control"   id="amountPerDay" name="amountPerDay" required="" value="<?php $date1=date_create($_SESSION['issueDate']);$date2=date_create($_SESSION['returnDate']);$diff= date_diff($date1,$date2);$diffStr=$diff->format('%a');echo $diffStr; ?>"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                            <input type="text" class="form-control" name="advanceAmount" id="advanceAmount" required="" value="<?php echo $diffStr*500;?>"/>
                                        </td>
                                    </tr>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /page content -->
