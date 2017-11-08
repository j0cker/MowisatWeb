<?php

include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
include ''.dirname(__FILE__).'/scripts/utils/log.php';
include ''.dirname(__FILE__).'/scripts/utils/conexionBlog.php';

    $log = new LoggerPhp();
    $log->write_log("[Index]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mowisat Corporation</title>

        <?PHP
            include ''.dirname(__FILE__).'/template/meta.php';
        ?>

        <style>
            a {color: gray}
            a:hover {text-decoration: none; color: gray};
            .big-box div {
                margin: 4.4em 0;
            }
        </style>

    </head>
    <body>   

    <?PHP
        include ''.dirname(__FILE__).'/template/header.php';
    ?>

    <!-- INITIATES SLIDER -->        
    <section class="jumbotron" style="padding-top: 0; margin-top: 0; height: 600px !important; margin-bottom: 0; background-image: url('images/tablet4.jpg')">

        <div style="margin-right: 0; margin-top: 0px; height: 600px; background-color: black;  background: rgba(0,0,0,0.5)" class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div style="margin-top: 6em !important; " class="big-title">
                    <h1 style="font-weight: 200; color: white; margin: 0; padding-top: 0px;"><?PHP echo $txt["propuestaDeValor"]; ?></h1>
                </div>
                
                <div class="little-text">
                    <h3 style="font-weight: 200; color: white; margin: 0; padding-top: 50px;"><?PHP echo $txt["descripcionPropuestaDeValor"]; ?></h3>
                </div>
                
                
                <div class="lrn-more-btn">
                    <a class="ahover" href="how-works.php">
                        <button class="ahover" style="color: white;"><?PHP echo $txt["botonAprendeMas"]; ?></button>
                    </a>
                </div>   
                
            </div>
                
            <div class="col-sm-1"></div>
        </div>

    </section>    
    
    <!-- ENDS SLIDER -->
    
    <!-- CONTAINERS SECTION BEGINS -->
    
        <!-- INITIATES INFO-BAR -->
    
    
        
        <!-- FIRST INFO-BAR LINE -->
        <section class='container-fluid info-bar'>
        
            <div class='row'>
                <div class='col-xs-12 col-md-12'>
                    <h3 style="text-align: center; font-size: 4em; margin: 1em 0;"><?PHP echo $txt["indexSubTitle"]; ?></h3>
                </div>
            </div>
    
        </section>
    
    
        <!-- ENDS INFO-BAR -->
    

        <section class="container-fluid">

            <div class="row" style="background-color: #569EB6; color: white; margin-top: 0;  text-align: center;">                
                <div class="hidden-sm-1 col-md-1"></div>

                <div class="col-sm-12 col-md-3 big-box logos">
                
                        <div class="md-hidden lg-hidden">
                            <br /><br />
                        </div>

                        <div class="transform" style="text-align: center;">
                            <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/dish3.jpg" />
                        </div>
        
                </div>                
        
                <div class="col-sm-12 col-md-7 big-box">
    
                    <div class="pad">
                        <h3 class="textoIndex" style="font-size: 4em; margin: 1em;  text-align: center;"><?PHP echo $txt["sat1"]; ?></h3>
                        <p style="text-aling: center; padding: 0 2em;"><?PHP echo $txt["sat2"]; ?></p>
                        <a href="satellite.php">
                            <button class="ahover2" style="color: white; background-color: transparent; border: 4px solid white; border-radius: 2em; font-size: 1em; text-align: center; text-decoration: none; display: inline-block; padding: 0.35em 1.5em; margin: 2em;"><?PHP echo $txt["sat3"]; ?></button>
                        </a>
                    </div> 
    
                </div>

                <div class="hidden-sm-1 col-md-1"></div>

                </div>        
               
                
                
                
            </div>

        </section>

        <!--- AQUIE MERO -->

        <section class="container-fluid">

            <div class="row" style="background-color: white; color: black; margin-top: 0;  text-align: center;">                
                <div class="hidden-sm-1 col-md-1"></div>

                    <div class="col-sm-12 col-md-7 big-box">
        
                        <div class="pad">
                            <h3 class="textoIndex" style="font-size: 4em; margin: 1em;  text-align: center;"><?PHP echo $txt["soc1"]; ?></h3>
                            <p style="text-aling: center; padding: 0 2em;"><?PHP echo $txt["soc2"]; ?></p>
                            <a href="social.php">
                                <button class="ahover" style="color: black; background-color: transparent; border: 4px solid black; border-radius: 2em; font-size: 1em; text-align: center; text-decoration: none; display: inline-block; padding: 0.35em 1.5em; margin: 2em;"><?PHP echo $txt["soc3"]; ?></button>
                            </a>
                        </div> 
        
                    </div>
            
                    <div class="col-sm-12 col-md-3 big-box logos">
                    
                            <div class="transform" style="text-align: center;">
                                <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/ruralcom.jpg" />
                            </div>
            
                            <div class="md-hidden lg-hidden">
                                <br /><br />
                            </div>
                            
                    </div>                
    
                <div class="hidden-sm-1 col-md-1"></div>
            
                
                
            </div>
                    
          
        </section>
    
        <section class="container-fluid">
        
            <div class="row" style="background-color: #569EB6; color: white; margin-top: 0;  text-align: center;">                
                <div class="hidden-sm-1 col-md-1"></div>

                <div class="col-sm-12 col-md-3 big-box logos">
                

                    <div class="md-hidden lg-hidden">
                        <br /><br />
                    </div>

                    <div class="transform" style="text-align: center;">
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" src="images/press_release_01_president.png" />
                    </div>
        
                </div>                
        
                <div class="col-sm-12 col-md-7 big-box">
    
                    <div class="pad">
                        <h3 class="textoIndex" style="font-size: 4em; margin: 1em;  text-align: center;"><?PHP echo $txt["mow1"]; ?></h3>
                        <p style="text-aling: center; padding: 0 2em;"><?PHP echo $txt["mow2"]; ?></p>
                        <a href="aboutus.php">
                            <button class="ahover2" style="color: white; background-color: transparent; border: 4px solid white; border-radius: 2em; font-size: 1em; text-align: center; text-decoration: none; display: inline-block; padding: 0.35em 1.5em; margin: 2em;"><?PHP echo $txt["mow3"]; ?></button>
                        </a>
                    </div> 
    
                </div>

                <div class="hidden-sm-1 col-md-1"></div>

                </div>        
                
                
                
                
            </div>

        </section>

    
        
        <!-- INITIATES BLOG BOX -->

        <!-- BLOG BOX-->
        <section class="container-fluid blog-box">

            <div class="row">

                <div style="margin-bottom: 40px;" class="col-md-12 text-center">
            
                    <h4 class="margin">BLOG</h4>

                </div>

            </div>

            <div class="row">
                
                <div class="col-md-4 text-center">
                    <a href="http://www.mowisat.mx/blog/2017/11/07/ellos-llevan-telefonia-e-internet-comunitario-en-mexico/">
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 100%; height: 10em; width: 10em;" src="images/blog/4.png" />            
                    </a>
                    <br /><br />
                    <a class="ahover" style="color: black;" href="http://www.mowisat.mx/blog/2017/11/07/ellos-llevan-telefonia-e-internet-comunitario-en-mexico/">
                        <h4 class="ahover" style="color: black;">Ellos llevan telefonía e internet comunitario en México</h4>
                    </a>
                    <br /><br />
                </div>

                <div class="col-md-4 text-center">
                    <a href="http://www.mowisat.mx/blog/2017/10/18/testimonial-ricardo-zepeda-now-programs-thanks-to-codecademy/">
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 100%; height: 10em; width: 10em;" src="images/blog/1.jpg" />            
                    </a>
                    <br /><br />
                    <a class="ahover" style="color: black;" href="http://www.mowisat.mx/blog/2017/10/18/testimonial-ricardo-zepeda-now-programs-thanks-to-codecademy/">
                        <h4 class="ahover" style="color: black;">Testimonial – Ricardo Zepeda now programs thanks to Codecademy</h4>
                    </a>
                    <br /><br />
                </div>

                <div class="col-md-4 text-center">
                    <a href="http://www.mowisat.mx/blog/2017/10/18/instalan-internet-satelital-gratuito-para-afectados-en-parque-mexico-el-financiero/">
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 100%; height: 10em; width: 10em;" src="images/blog/2.png" />            
                    </a>
                    <br /><br />
                    <a class="ahover" style="color: black;" href="http://www.mowisat.mx/blog/2017/10/18/instalan-internet-satelital-gratuito-para-afectados-en-parque-mexico-el-financiero/">
                        <h4 class="ahover" style="color: black;">Instalan internet satelital gratuito para afectados en Parque México – El Financiero</h4>
                    </a>
                    <br /><br />
                </div>
                <!--
                <div class="col-md-4 text-center">
                    <a href="http://www.mowisat.mx/blog/2017/10/18/mowisat-corporation-announcement-appointment-of-president-of-the-board-2/">
                        <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 100%; height: 10em; width: 10em;" src="images/blog/3.png" />            
                        </a>
                    <br /><br />
                    <a class="ahover" style="color: black;" href="http://www.mowisat.mx/blog/2017/10/18/mowisat-corporation-announcement-appointment-of-president-of-the-board-2/">
                        <h4 class="ahover" style="color: black;">MOWISAT CORPORATION announcement – Appointment of President of the Board</h4>
                    </a>
                    <br /><br />
                </div>
                -->

            </div><!--fin row-->


            <div class="row">

                <div style="margin-bottom: 40px;" class="col-md-12 text-center">
            
                    <div class="lrn-more-btn">
                        <a href="/blog">
                            <button class="ahover" style="color: black; background-color: transparent; border: 4px solid black; border-radius: 2em; font-size: 1em; text-align: center; text-decoration: none; display: inline-block; padding: 0.35em 1.5em; margin: 2em;"><?PHP echo $txt["soc3"]; ?></button>
                        </a>
                    </div> 

                </div>

            </div>
        
        </section>
        
        <!-- FIRST BLOG BOX
        <section class="container-fluid blog-box">
            <div class="row">
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-5 blog-new">
                    <h4 class="margin">BLOG</h4>

                    <?php
                    /*
                    base_de_datos_utf_8($conn);
                    $query = $conn->query("select post_content, post_title, guid from wp_posts WHERE post_type='post' ORDER BY ID DESC LIMIT 5") OR DIE(mysqli_error($conn));
                    if($query->num_rows>0){
                        while($row=$query->fetch_assoc()){
                            $title = $row["post_title"];
                            ?>
                            
                            <h5 id="titleBlog">
                                <a style="color: #85A0CF;" href="<?PHP echo $row["guid"]; ?>"><?PHP echo $title; ?></a>
                            </h5>

                            <?PHP
                        }
                    }
                    */
                    ?>
                    
                    <p class="blog-p padding-right" id="contentBlog"></p>
                    <a style="display: none;" href="" id="readBlog">
                        <button>Read more</button>
                    </a>
                </div> -->
                
                
                
                <!-- SECOND BLOG BOX      
                <div style="margin-bottom: 20px;" class="col-sm-5 blog-second">
                    <p class="blog-p margin padding-left"><?PHP echo $txt["blogPost"]; ?></p>
                    <div>
                        
                        <div class="row">
                            <img style="margin-left: 100px;" src="images/name-location.png" />
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class='image col-xs-6 col-sm-6 col-md-6'>
                                    <img style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 100%; height: 10em; width: 10em;" src="images/people/josefina.png" />
                                </div>


                                <div class='image col-xs-6 col-sm-6 col-md-6 text-center'>
                                    <b>Josefina<br />
                                    Tizilingo, CDMX</b>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
    
                <div class="col-sm-1"></div>
             
            </div>
        </section> -->  
    
    <!-- ENDS BLOG BOX -->
    
    
        <!-- INITIATES CONTACT US BOX -->
        
        <section style="margin-bottom: 40px;" class="container contact-us-box">
            <div class="row">
                <div class="col-sm-12">
                    <h4 style="margin-top: 80px; margin-bottom: 40px;">
                        <a href="mailto:info@mowisatcorp.com">
                            <?PHP echo $txt["contactUs"]; ?>
                        </a>
                    </h4>
                </div>
            </div>
            <!--
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <?PHP echo $txt["name"]; ?><font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <input id="nameContact" value="" type="text" style="background-color: #DADADA;" class="form-control" />
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="col-md-12">
                        <div class="col-md-6">
                            <?PHP echo $txt["mobileNumber"]; ?><font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <input id="numberContact" value="" type="text" style="background-color: #DADADA;" class="form-control" />
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="col-md-12">
                        <div class="col-md-6">
                            <?PHP echo $txt["eMail"]; ?><font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <input id="emailContact" value="" type="text" style="background-color: #DADADA;" class="form-control" />
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="col-md-12">
                        <div class="col-md-6">
                            <?PHP echo $txt["comments"]; ?><font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <textarea id="commentContact" value="" style="background-color: #DADADA; height: 150px;" class="form-control"></textarea>
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;" class="col-md-12 text-center">
                       <button onclick="sendContact();" id="sendContact" class="btn btn-primary"><i style="font-family: 'fontawesome' !important; font-size: 1em;" class="fa fa-paper-plane" aria-hidden="true"></i> <?PHP echo $txt["botonEnviar"]; ?></button> 
                    </div>
                </div>
                
                <div class="col-sm-6 text-center">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.965285898797!2d-79.38306128450236!3d43.64889057912149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cd578a5c61%3A0xea0589912e09cc06!2sFirst+Canadian+Place%2C+Toronto%2C+ON%2C+Canad%C3%A1!5e0!3m2!1ses-419!2smx!4v1507737368429" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>
            -->
            
        </section>
        
        
    
        <!-- ENDS CONTACT US BOX -->


    
        <!-- INITIATES WORK WITH US BOX -->
        
        <section style="padding: 40px 0 40px 0;" class="container-fluid work-with-us-box">
            <div>
                <h4 style="color: #3e3e3f !important;" class="work-title"><?PHP echo $txt["workWith"]; ?></h4>
            </div>
            
            <div style="color: #3e3e3f !important;" class="vacancies-btn ahover2">
                <a class="ahover2" href="careers.php">
                    <button class="ahover2" style="color: #3e3e3f !important;"><?PHP echo $txt["botonVacantes"]; ?></button>
                </a>
            </div>
        </section>
        <!-- ENDS WORK WITH US BOX -->
    
    <!-- CONTAINERS SECTION ENDS -->

    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
