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
    </div>   <!-- /top navigation -->

    <!-- page content area main -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Search Bicycle</h3>
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
            <form method="post" action="" name="form1">
                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2></h2>
                                <select name="loc" class="form-control selectpicker"  >
                                    <?php //display arduino
                                    $res=mysqli_query($link,"select ar_id from location");
                                    while ($row=mysqli_fetch_array($res))
                                    {
                                        echo "<option>";
                                        echo $row["ar_id"];

                                        echo "</option>";
                                    }

                                    ?>

                                </select>
                                <button name="btnSearch" type="submit"  class="btn btn-basic btn-lg" style="margin-top: 20px"> Search</button>

            </form>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
            <?php
            if(isset($_POST["btnSearch"])){
                //fetching lat & lng from db according to selected

                $result = mysqli_query($link,"SELECT longtitute, lattitute FROM location  WHERE  ar_id='$_POST[loc]'");
                $listeDesPoints='';
                while($row = mysqli_fetch_array($result)){
                    if($listeDesPoints!='') $listeDesPoints.=',';
                    $listeDesPoints.='['.$row['longtitute'].','.$row['lattitute'].']';


                }

                mysqli_close($link);
            }
            else{
                //just display all pickers

                $result = mysqli_query($link,"SELECT longtitute, lattitute FROM location order by ar_id");
                $listeDesPoints='';
                while($row = mysqli_fetch_array($result)){
                    if($listeDesPoints!='') $listeDesPoints.=',';
                    $listeDesPoints.='['.$row['longtitute'].','.$row['lattitute'].']';
                }

                mysqli_close($link);
            }

            ?>
            <html>
            <head>
                <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
                <style type="text/css">
                    .container{
                        height: 450px;
                    html { height: 100% }
                    body { height: 100%; margin: 0; padding: 0 }
                    #map_canvas { width: 100%;
                        height:100%;
                        border: 1px solid blue; }
                </style>
            </head>
            </html>
            <html>
            <head>
            <body>


            <script type="text/javascript"
                    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB3is760vHXhki9vS_LpiWAig8a33GP3CY&sensor=false">
            </script>
            <script type="text/javascript">
                function initialize() {
                    var optionsCarte = {
                        center: new google.maps.LatLng(7.8731,80.7718),
                        zoom: 7,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new     google.maps.Map(document.getElementById("map_canvas"),
                        optionsCarte);

                    var liste_des_points=[<?php echo $listeDesPoints; ?>];

                    var i=0,li=liste_des_points.length;
                    while(i<li){
                        //creating multiple marker
                        new google.maps.Marker({
                            position: new google.maps.LatLng(liste_des_points[i][0], liste_des_points[i][1]),
                            map: map
                        });
                        i++;
                    }

                }
            </script>
            <div class="container">

                <body onload="initialize()">
                <div id="map_canvas" style="width:50%; height:100% ; border: solid coral">    </div>
                </body>
                </head>
            </div>
            </body>
            </html>

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