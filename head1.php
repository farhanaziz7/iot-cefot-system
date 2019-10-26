    <?php session_start(); ?>
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
                    <?php if(!empty($_SESSION['u'])) { ?>
                        <li ><a href="laporanPakan.php">REPORT</a></li>
                    <?php } ?>
                    <li ><a href="aboutus.php">ABOUT US</a></li>
                            <?php 
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
                                                <p><input type="submit" value="Login" class="btn btn-primary" name="login">
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