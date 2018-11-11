
<?php
//bar chart for based on issue date
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
                <h3>Returned Report</h3>
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

                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                        <script type="text/javascript">
                            google.load("visualization", "1", {packages:["corechart"]});
                            google.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([

                                    ['Issue ID', 'Status'],
                                    <?php
                                    $query = "SELECT count(`issueID`) as count,`status`from `issue_bike` GROUP by `status`";

                                    $exec = mysqli_query($link,$query);
                                    while($row = mysqli_fetch_array($exec)){

                                        echo "['".$row['status']."',".$row['count']."],";
                                    }
                                    ?>

                                ]);

                                var options = {
                                    title: 'Status Issue Bikes'
                                };
                                var chart = new google.visualization.PieChart(document.getElementById("columnchart"));
                                chart.draw(data, options);
                            }
                        </script>

                        <h3></h3>
                        <div id="columnchart" style="width: 900px; height: 500px;"></div>

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


