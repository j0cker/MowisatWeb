<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[how-works]","Debug");
?>

<!DOCTYPE html>
<html>
   
<head>
    <title>How it works</title>

    
    <?PHP
    include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/how-works.css" rel="stylesheet" type="text/css">

    <style>
        a {color: gray}
        a:hover {text-decoration: none; color: gray};
    </style>

</head>

<body>

    <?PHP
    include ''.dirname(__FILE__).'/template/header.php';
    ?>
            <!-- ENDS HEADER -->    

        <!-- INITIATES SECTION -->

    <section class='container-fluid connectivity-img'>

        <div class='row'>
            <div class='col-xs-12 sat bgMeshParent' class="parallax-window" data-parallax="scroll" data-image-src="images/how.jpg">
                <div class="bgMesh">
                    <h1 style="font-size: 2.0em !important; margin: 0; padding-top: 110px;"><?PHP echo $txt["how"]; ?></h1>
                </div>
            </div>
        </div>

    </section>


    <section class='container-fluid'>

        <div class='row'>
            <div class='col-xs-12 col-md-12 description'>
                <h3><?PHP echo $txt["description-how"]; ?></h3>
            </div>
        </div>

    </section>

    <section class='container-fluid'>

    <div class='row box-size'>

        <div class='col-md-12 text-center big-box'>

            <div>
                <img style="padding-top: 20px; padding-bottom: 20px; width: 80%;" src="images/mapa.png" /> 
            </div>

        </div>    

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
            
        <div class="col-md-10 big-box">

            <div>
                <p style="padding: 2em; text-align: center; font-size: 1.3em;">
                  <?PHP echo $txt["how-text5"]; ?>
                </p>
            </div>    

        </div>

        <div class="col-md-1"></div>
            
    </div>
    
    <div style="margin-top: 40px;" class="row box-size text-center">

        <div class="col-md-1"></div>

        <div class='col-md-10 big-box text-center'>

            <div class="col-md-12">
                <a href="social.php">
                    <button style="" class="btn btn-primary text-center"><?PHP echo $txt["buttonSatelliteSocialRes"]; ?></button>
                </a>
            </div>

        </div>

        <div class="col-md-1"></div>
            
    </div>



    <!-- ENDS SECTION -->




    <!-- INITIATES FOOTER -->
    
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>    
    <!-- ENDS FOOTER -->    

</body>

<html>