<html>
    <head>
        <title>CEFOT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/cefotlogo.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/regular.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/solid.css">
        <link rel="stylesheet" href="css/cefot.css">
        <script type="text/javascript" src="fc/js/fusioncharts.js"></script>
        <script src="fc/js/themes/fusioncharts.theme.fusion.js"></script>
        
        <script type="text/javascript" src="js/chart.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>

        <div id="head" style="background-color: dodgerblue; z-index: 1">
            <div class="left">
                <a href="index.php"><h2><img src="images/putih.png" alt="" class="icon"></h2></a>
            </div>
            <div class="right">
                        <ul>
                            <li ><a href="index.php">HOME</a></li>
                            <li ><a href="feed.php">DASHBOARD</a></li>
                            <li ><a href="laporanPakan.php">REPORT</a></li>
                            <li ><a href="aboutus.php">ABOUT US</a></li>
                            <?php 
                            session_start(); 
                            if(empty($_SESSION['u'])) { ?>
                                <li ><a id="myBtn" href="#"  class="btn-group">LOGIN</a></li>   
                                <center><!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>LOGIN</h3>
                                            <span class="close">&times;</span>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="in.php">
                                                <p><input type="text" placeholder="Username" name="username" class="input-group-text" required=""></p>
                                                <p><input type="password" placeholder="Password" name="password" class="input-group-text" required=""></p>
                                                <p><input type="submit" value="Login" class="btn btn-primary">
                                            </form>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                            <li><a href="out.php">LOGOUT</a></li>
                            <?php } ?>
                        </ul>
            </div>   
        </div>
        <div class="container-fluid" style="margin-top: 55px">
            <div class="row text-right align-self-right">
                <div class="col-md-8">
                </div>
                <div class="col-md-2" style="margin-top: 120px">
                     <a href="export.php"><button type="button" class="btn btn-raised btn-info col-md-12">Download Excel</button></a>
                </div>
                <div class="col-md-2 text-right" style="margin-top: 120px">
                    <a href="dataLaporanPDF.php"><button type="button" class="btn btn-raised btn-info col-md-12">Download PDF</button></a>
                </div>
            </div>
            <div class="row align-self-center" style="margin-top: 10px;">
                <div class="col text-center align-self-center">
                    <?php include ('api/dataLaporanPakan.php') ?>
                </div>
            </div>
        </div>