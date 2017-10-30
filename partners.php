<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Partners]","Debug");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Our partners</title>

    <?PHP
        include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/partners.css" rel="stylesheet" type="text/css">

    <style>
        a {color: gray}
        a:hover {text-decoration: none; color: gray};
    </style>
</head>


<body>

<?PHP
include ''.dirname(__FILE__).'/template/header.php';
?>

        
    <!-- INITIATES SECTION -->

    <section class='container-fluid'>
            
       <div class='row'>
            <div class='col-xs-12 partners-img bgMeshParent'  class="parallax-window" data-parallax="scroll" data-image-src="images/part.jpg">
                <div class="bgMesh">
                    <h1 style="margin: 0; padding-top: 150px;"><?PHP echo $txt["part-ners"]; ?></h1>
                </div>
            </div>           
        </div>

    </section>    


    <section style="background-color: #DDD;" class='container-fluid'>

        <div class="row">

            <div class="col-md-6" style="margin-top: 40px; text-align: center;">
                <div style="background-color: #FFF; border-radius: 100%; display: inline-block; width: 20em; height: 20em; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center;">
                    <img class="text-center" style="margin: 2em 0 0 0; width: 20em;" src="images/net.png" />
                </div>
                <div class="transform" style="margin: 40px 0 0 0; text-align: center;">
                    <p style=""><?PHP echo $txt["net"]; ?></p>
                    <a href="https://www.netfreedompioneers.org/">
                        <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 40px; text-align: center;">
                <div style="background-color: #FFF; border-radius: 100%; display: inline-block; width: 20em; height: 20em; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center;">
                    <img class="text-center" style="margin: 8em 0 0 0; width: 10em;" src="images/piggi_logo.png" />
                </div>

                <div class="transform" style="margin: 40px 0 0 0; text-align: center;">
                    <p><?PHP echo $txt["piggi"]; ?></p>
                    <a href="https://pig.gi/">
                        <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>
            </div>

        </div>


        <div style="margin-bottom: 40px !important;" class="row">

            <div class="col-md-6" style="margin-top: 40px; text-align: center;">
                <div style="background-color: #FFF; border-radius: 100%; display: inline-block; width: 20em; height: 20em; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center;">
                    <img class="text-center" style="margin: 8em 0 0 0; width: 15em;" src="images/stargo_logo.png" />
                </div>
                <div class="transform" style="margin: 40px 0 0 0; text-align: center;">
                    <p><?PHP echo $txt["stargo"]; ?></p>
                    <a href="http://www.stargomexico.com/">
                        <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 40px; text-align: center;">
                <div style="background-color: #FFF; border-radius: 100%; display: inline-block; width: 20em; height: 20em; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center;">
                    <img class="text-center" style="margin: 8em 0 0 0; width: 15em;" src="images/hughes_logo.png" />
                </div>

                <div class="transform" style="margin: 40px 0 0 0; text-align: center;">
                    <p><?PHP echo $txt["hughes"]; ?></p>
                    <a href="https://www.hughes.com/">
                        <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>
            </div>

        </div>

    </section>    

    <!--
    <section class='container-fluid'>
                
        <div class='row box-size'>

            <div class="col-md-1"></div>

            <div class="col-md-10 big-box">

                <div>
                    <p style="text-transform: uppercase"><?PHP echo $txt["net"]; ?></p>
                    <a href="https://www.netfreedompioneers.org/">
                        <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>  
   

        <div class="row box-size blue">

            <div class="col-md-1"></div>
            
            
                    
            <div  class="col-md-7 big-box">

                <div>
                    <p><?PHP echo $txt["stargo"]; ?></p>
                    <a href="http://www.stargomexico.com/">
                        <button class="ahover2"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>

            </div>


            <div class='col-md-3 logos big-box'>

                <div style="text-align: center;">
                    <img src="images/stargo_logo.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
             
         


        </div>

       
        <div class="row box-size">

            <div class="col-md-1"></div>    
            
            <div class="col-md-3 big-box logos">

                <div style="text-align: center;">
                    <img src="images/piggi_logo.png" />
                </div>

            </div>                

            <div class="col-md-7 big-box">

                <div>
                    <p><?PHP echo $txt["piggi"]; ?></p>
                    <a href="https://pig.gi/">
                        <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div> 

            </div>
  

            <div class="col-md-1"></div>

        </div> 


        <div class="row box-size blue">

            <div class="col-md-1"></div>
            
            
                    
            <div class="col-md-7 big-box">

                <div>
                    <p><?PHP echo $txt["hughes"]; ?></p>
                    <a href="https://www.hughes.com/">
                        <button class="black-b ahover2"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>    

            </div>


            <div class='col-md-3 logos big-box'>

                <div style="text-align: center;">
                <img src="images/hughes_logo.png" />
                
                </div>

            </div>

            <div class="col-md-1"></div>
             
         


        </div>
            
    </section>-->

    <!-- ENDS SECTION -->

    <!-- INITIATES FOOTER -->
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>    
    <!-- ENDS FOOTER -->    

</body>

<html>