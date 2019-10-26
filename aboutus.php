<html>
<?php require 'head1.php' ?>
    <body>
        <div class="container-fluid m-0 p-0 ">
                <div id="head" style="background: dodgerblue;">
                    <div class="left">
                            <h2><img src="images/putih.png" alt="" class="icon"></h2>
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

        <div class="container-fluid" style="margin-top: 170px;">
        	<div class="text">
        		<h1 style="font-family: 'Pacifico';">About Us</h1>
        		<h2 class="text-center" style="font-family: 'Shadows Into Light';">CEFOT Developer Team </h2>
        	</div>

		<div class="container" style="padding-top: 20px;" >
		      <div class="row">
		        <div class="col-sm text-center">
		          <img src="images/malisa.png" class="rounded" alt="..." style="width:150px; padding: 5px;">
		          <p class="h4"  style="text-align: center;">Malisa Selviana</p>
		          <div class="col-12" style="    float: left;">
		            <div class="col-lg-12 col-md-12">
		              <dl class="row text-center">
		                <dd class="col-sm-12" style="text-align: center"><p>Project Analyst</p></dd>
		                <br>
		                <dd class="col-sm-12" style="text-align: center"><p><b>J3D116084</b></p></dd>
		                <dd class="col-sm-12" style="text-align: center"><p>Computer Engineering 53</p><p>Vocational School IPB</p></dd>
		            </div>
		          </div>
		        </div>

		        <div class="col-sm text-center">
		          <img src="images/aziz.png" class="rounded" alt="..." style="width:150px; padding: 5px;">
		          <p class="h4"  style="text-align: center;">Farhan Aziz. F</p>
		          <div class="col-12" style="    float: left;">
		            <div class="col-lg-12 col-md-12">
		              <dl class="row text-center">
		                <dd class="col-sm-12" style="text-align: center"><p>Project Manager</p></dd>
		                <br>
		                <dd class="col-sm-12" style="text-align: center"><p><b>J3D116047</b></p></dd>
		                <dd class="col-sm-12" style="text-align: center"><p>Computer Engineering 53</p><p>Vocational School IPB</p></dd>
		            </div>
		          </div>
		        </div>

		        <div class="col-sm text-center">
		          <img src="images/agus.png" class="rounded" alt="..." style="width:150px; padding: 5px;">
		          <p class="h4"  style="text-align: center;">M. Agus Sugiharto</p>
		          <div class="col-12" style="    float: left;">
		            <div class="col-lg-12 col-md-12">
		              <dl class="row text-center">
		                <dd class="col-sm-12" style="text-align: center"><p>Project Designer</p></dd>
		                <br>
		                <dd class="col-sm-12" style="text-align: center"><p><b>J3D116089</b></p></dd>
		                <dd class="col-sm-12" style="text-align: center"><p>Computer Engineering 53</p><p>Vocational School IPB</p></dd>
		            </div>
		          </div>
		        </div>
		    	</dl>
		    </div>
		</div>
	</div>
<?php require 'foot.php' ?>