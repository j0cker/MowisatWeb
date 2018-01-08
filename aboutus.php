<?php

    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Aboutus]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
    <title><?PHP echo $txt["aboutusTitle"]; ?></title>
    
        <?PHP
            include ''.dirname(__FILE__).'/template/meta.php';
        ?>

        <link href="styles/aboutus.css" rel="stylesheet" type="text/css">
    
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

    <section class='container-fluid aboutus-pic' style="padding-top: 0; margin-top: 0; height: 300px !important; margin-bottom: 0;" class="parallax-window" data-parallax="scroll" data-image-src="images/aboutus-sat.jpg">
        <div style="margin-right: 0; margin-top: 0px; height: 300px; background-color: black;  background: rgba(0,0,0,0.5)" class='row'>

            <div class="xs-hidden col-md-1"></div>
            
            <div class='col-xs-12 col-md-10'>
                <h3 style="color: white; margin: 0; padding-top: 100px;"><?PHP echo $txt["aboutusTitle2"]; ?></h3>
            </div>
                
            <div class="xs-hidden col-md-1"></div>

        </div>
    </section>

    <section style="background-color: #569EB6; color: white;" class='container-fluid know-more'>

        <div class='row'>

<!--
            <div class='col-xs-12 col-sm-3 image'><br />
                <img src="images/dish1.jpg" />
            </div>

-->

            <div class="xs-hidden col-sm-1 col-md-1"></div>

            <div class='col-xs-12 col-sm-10 col-md-10 letter-size'>
                
                <h3 style="margin-top: 40px; margin-bottom: 40px; color: white !important; font-size: 2em;"><?PHP echo $txt["aboutusTxt2"]; ?></h3>
            
            </div>

            <div class="xs-hidden col-sm-1 col-md-1"></div>

        </div>

    </section>



    <section class='container-fluid big-box'>

        <div class='row'>

            <div class="col-xs-1 col-sm-1 col-md-1"></div>

            <div class='col-xs-10 col-sm-10 col-md-10 team z-depth-4 card-panel'>
                <h3><?PHP echo $txt["aboutusTxt3"]; ?></h3>
                <p style="color: black !important; text-align: center !important; padding: 0 0 0 10px !important;"><?PHP echo $txt["aboutusTxt4"]; ?></p>
            </div>

            <div class="col-xs-1 col-sm-1 col-md-1"></div>
        </div>

         

        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/zimmer.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>R.SCOTT ZIMMER</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt5"]; ?></p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/empresario.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>STEVE SCHAVER</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt9"]; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>

        </div>   

        <!--

        <div class='row'>


            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/chris.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>CHRIS ERGEN</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt10"]; ?></p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>CHASE ERGEN</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt11"]; ?></p>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>   

        -->

        <div class='row'>

            

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/empresario.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>DAVID MITCHELL</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt12"]; ?></p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>STEVEN HOFFMAN</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt6"]; ?></p>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>


        <div class='row'>

            

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/antonio.jpg" />
                    </div>

                    <div class='nombre'>
                        <h4 class="text-center">DR. ANTONIO ULISES DE LA GARZA VALDÉS</h4>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt13"]; ?></p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>DIEGO ALISTAIR</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt14"]; ?></p>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>



        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/vlatko.jpg" />
                    </div>

                    <div class='name'>
                        <h3>VLATKO GIGOV</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt7"]; ?></p>
                    </div>

                </div>

            </div>



            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/emiliano.jpg" />
                    </div>

                    <div class='name'>
                        <h3>EMILIANO TERÁN</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt8"]; ?></p>
                    </div>
                </div>    
            </div>

            <div class="col-md-1"></div>

        </div>

        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/eder.jpg" />
                    </div>

                    <div class='name'>
                        <h3>EDER PÉREZ</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt15"]; ?></p>
                    </div>
                </div>

            </div>



            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/david.jpg" />
                    </div>

                    <div class='name'>
                        <h3>DAVID YAO</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt16"]; ?></p>
                    </div>
                </div>    
            </div>

            <div class="col-md-1"></div>

        </div>

        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/fabiola.jpg" />
                    </div>

                    <div class='name'>
                        <h3>FABIOLA LÓPEZ</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt17"]; ?></p>
                    </div>
                </div>

            </div>



            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/team/ricardo.jpg" />
                    </div>

                    <div class='name'>
                        <h3>RICARDO ZEPEDA</h3>
                    </div>

                    <div class='description'>
                        <p style="text-align: center;" id="textoSocial"><?PHP echo $txt["aboutusTxt18"]; ?></p>
                    </div>
                </div>    
            </div>

            <div class="col-md-1"></div>

        </div>

    </section>

    <section class='container-fluid'>
        <div class='row vision-sec'>
            <div class="xs-hidden col-sm-1 col-md-1"></div>
            <div class='col-sx-12 col-sm-5 col-md-5 vision-text'>
                <h3 style="color: white;"><?PHP echo $txt["our-mission"]; ?></h3>
                <hr class='margin-line' />
                <p><?PHP echo $txt["description-mission"]; ?></p>
            </div>

            <div class='col-sx-12 col-sm-5 col-md-5 vision-text'>
                <h3 style="color: white;"><?PHP echo $txt["our-vision"]; ?></h3>
                <hr class='margin-line' />
                <p><?PHP echo $txt["description-vision"]; ?></p>
            </div>
            <div class="xs-hidden col-sm-1 col-md-1"></div>
        </div>

    </section>


    <!-- ENDS CONTAINER SECTION -->


    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>

