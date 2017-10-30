<?php

    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Satellite]","Debug");
?>

<!DOCTYPE html>
<html>
   
<head>
    <title><?PHP echo $txt["satelliteTitle"] ?></title>

    
    <?PHP
        include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/satellite.css" rel="stylesheet" type="text/css">

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
            <div class='col-xs-12 sat bgMeshParent' class="parallax-window" data-parallax="scroll" data-image-src="images/sat.jpg">
                <div class="bgMesh">
                    <h1 style="font-size: 2.0em !important; margin: 0; padding-top: 140px;"><?PHP echo $txt["satelliteImageTitle"]; ?></h1>
            
                </div>
            </div>
        </div>

    </section>


    <section class='container-fluid'>

        <div class='row'>
            <div class='col-xs-12 col-md-12 last-mile'>
                <h3><?PHP echo $txt["satelliteSubTitle"]; ?></h3>
            </div>
        </div>

    </section>

    <section class='container-fluid'>

        <div class='row box-size blue'>
    
            <div class="col-md-1"></div>

            <div class="col-md-10">

                <div class="border-w">
                    <h2 style="color: white;"><?PHP echo $txt["intro"]; ?></h2>
                    <h3 style="padding-bottom: 1.5em;"><?PHP echo $txt["introSub"]; ?></h3>
                </div>

            </div>
            
            <div class="col-md-1"></div>

        </div>

    
    
        
        <div class="row box-size">

            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div style="text-align: center;">
                    <img style="padding-top: 20px; padding-bottom: 20px; width: 80%;" src="images/Old-New.png" /> 
                </div>
            </div>
                
            <div class="col-md-1"></div>

        </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>

        <div class='col-md-10 big-box'>

            <div>
                <h2 style="color: white;"><?PHP echo $txt["howHead"]; ?></h2>

                <div class="row">


                    <div class="col-md-6 border-w2">

                        <p style="padding: 2em; text-align: center; font-size: 1.3em;"}>
                        <?PHP echo $txt["howP1"]; ?> 
                        </p>

                    </div>

                    <div class="col-md-6 border-w2">

                        <p style="padding: 2em; text-align: center; font-size: 1.3em;">
                        <?PHP echo $txt["howP2"]; ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-1"></div>
            
    </div>



    <div class="row box-size">

        <div class="col-md-1"></div>

        <div class="col-md-10">
            <div style="text-align: center;">
                <img style="padding-top: 20px; padding-bottom: 20px; width: 80%;" src="images/key-comp.png" /> 
            </div>
        </div>

        <div class="col-md-1"></div>

    </div>

    <div class="row box-size blue">

        <div class="col-md-1"></div>

            <div class="col-md-10 border-w">
                <h2 style="color: white !important;"><?PHP echo $txt["residentHead"]; ?></h2>
                <h3><?PHP echo $txt["residentSubHead"]; ?></h3>
            </div>

        <div class="col-md-1"></div>

    </div>    
    
    <!-- target market -->

    <div class='row box-size'>
    
        <div class="col-md-1"></div>

        <div class="col-md-10 middle">

            <div class="row">

                <div class="col-md-4 box-center">

                    <h2 class="more-mar"><?PHP echo $txt["residentList1"]; ?></h2>
                    <div class="list-lu">
                        <ul style="text-align: center;" class="list-li">
                            <li style="display: block;"><?PHP echo $txt["residentList2"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["residentList3"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["residentList4"]; ?></li>
                            <li class="logos"><img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/house.jpg" /></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 box-center">
                    <h2 class="more-mar"><?PHP echo $txt["busList1"]; ?></h2>
                    <div class="list-lu">
                        <ul style="text-align: center;" class="list-li">
                            <li style="display: block;"><?PHP echo $txt["busList2"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["busList3"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["busList4"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["busList5"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["busList6"]; ?></li>
                            <li class="logos" style="text-align: center;"><img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);"  src="images/bus.jpg" /></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4 box-center">
                    <h2 class="more-mar"><?PHP echo $txt["govList1"]; ?></h2>
                    <div class="list-lu">   

                        <ul style="text-align: center;" class="list-li">
                            <li style="display: block;"><?PHP echo $txt["govList2"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["govList3"]; ?></li>
                            <li style="display: block;"><?PHP echo $txt["govList4"]; ?></li>
                            <li class="logos" style="text-align: center;"><img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/gov.jpg" /></li>
                        </ul>

                    </div>
                    
                </div> 

            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  

    <div class="row box-size text-center">

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