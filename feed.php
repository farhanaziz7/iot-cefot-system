<?php session_start(); ?>
<html>
    <?php require 'head1.php' ?>
        <div class="container-fluid" style="margin-top: 120px">
            <div class="container">
                <div class="row">
                <div class="col-md-8 text-center ">
                    <div id="chart-container">FusionCharts will load here...</div>
                </div>
                <div class="col-md-4 align-self-center" >
                    <form method="POST" action="api/updateDataAlat.php">
                    <?php include('api/getDataAlat.php');?>
                        <div class="row text-center">
                            <div class="col">
                                Chicken Food Data
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                              <label for="pMin" class="col-form-label">Min</label>
                              <input type="text" id="pMin" name="pMin" class="form-control" value="<?=$pMin?>">
                            </div>
                            <div class="col">
                              <label for="pMax" class="col-form-label">Max</label>
                              <input type="text" id="pMax" name="pMax" class="form-control"  value="<?=$pMax?>">
                            </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col">
                                <?php
                                if(empty($_SESSION['u'])) { ?>
                                <button type="button" class="btn btn-info w-100 disabled" >Update</button>
                                <p class="text-center" style="color: red;">-YOU MUST LOGIN TO UPDATE-</p>
                                <?php } else { ?>
                                <button type="submit" class="btn btn-info w-100" >Update</button>
                                <?php } ?> 
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col-md-5 text-left">
                                Stock
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col text-left">
                                <span id="txtStock">- Stock -</span> KG
                            </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col-md-5 text-left">
                                Current Weight
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col text-left">
                                <span id="txtBerat">- Weight -</span> KG
                            </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col">
                                <span id="alert"></span>
                            </div>
                        </div>
                    </form>
                </div>     
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                         <div id="chart-temp">FusionCharts XT will load here!</div>
                    </div>
                    <div class="col-md-4 align-self-center" >
                        <form method="POST" action="api/updateDataAlat.php">
                        <?php include('api/getDataAlat.php');?>
                        <div class="row mt-3 text-center">
                            <div class="col">
                               Chicken Cage Temperature Data
                            </div>
                        </div>
                        <div class="row text-center align-self-center">
                            <div class="col">
                              <label for="sMin" class="col-form-label">Min</label>
                              <input type="text" id="sMin" name="sMin" class="form-control" value="<?=$sMin?>">
                            </div>
                            <div class="col">
                              <label for="sMax" class="col-form-label">Max</label>
                              <input type="text" id="sMax" name="sMax" class="form-control"  value="<?=$sMax?>">
                            </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col">
                                <?php if(empty($_SESSION['u'])) { ?>
                                <button type="button" class="btn btn-info w-100 disabled" >Update</button>
                                <p class="text-center" style="color: red;">-YOU MUST LOGIN TO UPDATE-</p>
                                <?php } else { ?>
                                <button type="submit" class="btn btn-info w-100" >Update</button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col-md-5 text-left align-self-center ">
                                Lamp Condition
                            </div>
                            <div class="col-md-1 align-self-center">
                                :
                            </div>
                            <div class="col text-left align-self-center">
                                <img id="myImage"  src="images/mati.png" width="103" height="110">
                            </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col-md-5 text-left align-self-center">
                                Fan Condition
                            </div>
                            <div class="col-md-1 align-self-center">
                                :
                            </div>
                            <div class="col text-left">
                                <img id="myFan"  src="images/fann.png" width="103" height="110">
                            </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col">
                                <span id="alert"></span>
                            </div>

                        </div>
                    </form>
                </div>   
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
        <?php  require 'foot.php'?>
    </body>
</html>
