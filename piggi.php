<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Piggi]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Our Vision</title>

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

    <!-- INITIATES CONTAINER SECTION -->

    <div style="background-color: #DADADA;" class="col-md-12">

        <div class="col-md-1"></div>

        <div class="col-md-10">
            <div style="padding: 0; width: 100%;" class="z-depth-4 card-panel">
                <div style="margin-top: 0px; margin-bottom: 20px; background-color: black; background: rgba(0,0,0,0.5);">
                    
                
                
                    <div class="row">

                        <div class="col-md-12" style="margin-bottom: 40px; margin-top: 40px; text-align: center;">
                            <div style="background-color: #FFF; border-radius: 100%; display: inline-block; width: 20em; height: 20em; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center;">
                                <img class="text-center" style="margin: 8.5em 0 0 0; width: 10em;" src="images/piggi_logo.png" />
                            </div>
                            <div class="transform" style="margin: 40px 0 0 0; text-align: center;">
                                <p style=""><?PHP echo $txt["net"]; ?></p>
                                <a href="https://www.netfreedompioneers.org/">
                                    <button class="black-b ahover"><?PHP echo $txt["botonMasInfo"]; ?></button>
                                </a>
                            </div>
                        </div>

                    </div>


                
                </div>
            </div>
        </div>

        <div class="col-md-1"></div>

    </div>


    <!-- ENDS CONTAINER SECTION -->


    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
