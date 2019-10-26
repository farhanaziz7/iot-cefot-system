<?php require 'head.php'?>
               
                <div class="overlay" style="padding-top: 235px">
                    <div class="introtext" style="display: contents;">
                        <h1 style="font-family: 'Pacifico';">Chicken Farm IOT</h1>
                        <p>Cefot works by monitoring cage lighting, feed availibility, and cage stabilizer.
                        <br>Cefot has a control mode, you can control cage condition with automatic mode.
                        <br>Check and Monitor your livestock with CEFOT.</p>
                      
                        <div class="mnu">
                            
                            <div class="mm">
                                <img src="images/light.png" style="height: 110px;">
                                <p><span id="txtLampu">CONDITION</span></p>
                            </div>
                            <div class="mn">
                                <img src="images/feed.png" style="height: 110px;">
                                <p><span id="txtPakan">Kilogram</span> Kg</p>

                            </div>
                            <div class="mo">
                                <img src="images/temperature.png" style="height: 110px;">
                                <p><span id="txtSuhu"></span>˚C</p>

                            </div>          
                        </div>
                    </div>
                </div>


        <script type="text/javascript" src="js/jquery.js"></script>
                <script type="">
                    setInterval(ambilPakan, 1000);  

                    function ambilPakan(){
                    $.ajax({
                url: 'api/getDataPakan.php',
                success: function(response){
                    var test = $.parseJSON(response);

            //      console.log(test);
                    var berat = test['berat'];
                    var lampu = test['lampu'];
                    var suhu = test['suhu'];

                    $('#txtLampu').html(lampu);
                    $('#txtPakan').html(berat);
                    $('#txtSuhu').html(suhu);

                },
            })  
        }
                </script>
    <?php require 'foot.php' ?>