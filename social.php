<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Social]","Debug");
?>

<!DOCTYPE html>
<html>

<head>

    <title><?PHP echo $txt["socialInit"]; ?></title>
 
    <?PHP
    include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/social.css" rel="stylesheet" type="text/css">

    <style>
        a {color: gray}
        a:hover {text-decoration: none; color: gray};
    </style>

</head>

<body>

    <?PHP
    include ''.dirname(__FILE__).'/template/header.php';
    ?>
    
    <!-- SECTION BEGINS -->

    <section class='container-fluid connectivity-img'>
            
       <div class='row'>
            <div class='col-xs-12 bgMeshParent' class="parallax-window" data-parallax="scroll" data-image-src="images/ini.jpg">
                <div class="bgMesh">
                    <h1 style="text-align: center; color: white; font-size: 2.0em !important; margin: 0; padding-top: 140px;"><?PHP echo $txt["socialInit"]; ?></h1>
                </div>
            </div>           
        </div>

    </section>



    <section class='container-fluid'>

        <div style="background-color: #DADADA;" class='row'>
            <div style="text-align: center; padding: 4em" class='col-xs-12 col-md-12 description'>
                <h3 style="text-align: center;"><?PHP echo $txt["socialInit-desc"]; ?></h3>
            </div>
        </div>

    </section>

    <section class='container-fluid'>

        <div style="background-color: #569EB6;" class='row'>
        
            <div class="col-md-1"></div>

            <div style="text-align: center; color: white;" class='col-md-10'>

            <h1 class="textoSocialTitle" style="margin-top: 60px;"><?PHP echo $txt["connectTitle1"]; ?></h1>

            <p class="textoSocial2" style="padding: 2em; text-align: center;">
                <?PHP echo $txt["connect1"]; ?>
                <?PHP echo $txt["connect2"]; ?>
                </p>

            </div>    

            <div class="col-md-1"></div>

        </div>  


        <div class="row">

            <div class="col-md-1"></div>

            <div class='col-md-10'>

                <div style="text-align: center;">
                    <img style="padding-top: 20px; padding-bottom: 20px; width: 80%;" src="images/step by step.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
                
        </div>
        <div style="background-color: #569EB6;" class='row'>
        
            <div class="col-md-1"></div>

            <div style="text-align: center; color: white;" class='col-md-10'>

                <h1 class="textoSocialTitle" style="margin-top: 60px;"><?PHP echo $txt["connectTitle2"]; ?></h1>

                <p class="textoSocial2" style="padding: 2em; text-align: center; font-size: 0.8em;">
                <?PHP echo $txt["connect3"]; ?>
                <?PHP echo $txt["connect4"]; ?>
                <?PHP echo $txt["connect5"]; ?>
                </p>

            </div>    

            <div class="col-md-1"></div>

        </div>  


        <div style="" class="row">

            <div class="col-md-1"></div>

            <div class='col-md-10'>

                <div style="text-align: center;">
                    <img style="padding-top: 20px; padding-bottom: 20px; width: 80%;" src="images/codecademy rural.jpg"/>
                </div>

            </div>

            <div class="col-md-1"></div>
                
        </div>
        <div style="background-color: #569EB6;" class='row'>
        
            <div class="col-md-1"></div>

            <div style="text-align: center; color: white;" class='col-md-10'>

                <h1 class="textoSocialTitle" style="margin-top: 60px;"><?PHP echo $txt["connectTitle3"]; ?></h1>

                <p class="textoSocial2" style="padding: 2em; text-align: center; font-size: 1.3em;">
                    
                    <?PHP echo $txt["connect6"]; ?>
                    <?PHP echo $txt["connect7"]; ?>
                </p>

            </div>    

            <div class="col-md-1"></div>

        </div>  


        <div class="row">

            <div class="col-md-1"></div>

            <div class='col-md-10'>

                <div style="text-align: center;">
                    <img style="padding-top: 20px; padding-bottom: 20px; width: 80%;" src="images/mexicoin.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
                
        </div>

    </section>




  


    <!-- SECTION ENDS -->




    <!-- INITIATES FOOTER -->
    
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?> 

</body>

<html>