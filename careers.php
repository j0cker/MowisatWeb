<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Partners]","Debug");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carreer Options</title>

    <?PHP
        include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/careers.css" rel="stylesheet" type="text/css">

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
            <div class='col-xs-12 careers-img' style="top: 0; padding: 0; margin: 0; background-image: url('images/careers.jpg'); opacity: 1;">
                <div style="margin-top: 0px; height: 300px; background-color: black; background: rgba(0,0,0,0.5);">
                    <h1 style="margin: 0; padding-top: 150px;"><?PHP echo $txt["vacancies"]; ?></h1>
                    <h1 style="margin: 0; padding-top: 50px;"><?PHP echo $txt["vac-phrase"]; ?></h1>
                </div>
            </div>           
        </div>

    </section> 

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3">
                <li class="tab col s6"><a class="active" href="#tab1"><?PHP echo $txt["contactForm"]; ?></a></li>
                <li class="tab col s3">
            </ul>
        </div>
        <div style="margin-top: 40px;" id="tab1" class="col-md-12">
            <div class="col-md-4"></div>
            <div style="background-color: white; color: black;" class="col-md-4 z-depth-4 card-panel">
                
                <div class="row">
                    
                    <div class="col-sm-12">
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
                    
                    
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>   

    <!--
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#tab1">All</a></li>
                <li class="tab col s6"><a href="#tab2">Commercial</a></li>
            </ul>
        </div>
        <div style="margin-top: 20px;" id="tab1" class="col-md-12">
            <div style="background-color: #444; color: white;" class="col-md-4">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                    Financial / Commercial Analyst & Researcher
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <p>
                        • Data mining<br> 
                        • Report Generation and interpretation<br> 
                        • Trend Analysis, opportunity identification<br>
                        • Research - macro (industry) and micro (customer) trends, future developments etc.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>

        <div style="margin-top: 20px;" id="tab2" class="col-md-12">
            <div style="background-color: #444; color: white;" class="col-md-4">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                    Financial / Commercial Analyst & Researcher
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <p>
                        • Data mining<br> 
                        • Report Generation and interpretation<br> 
                        • Trend Analysis, opportunity identification<br>
                        • Research - macro (industry) and micro (customer) trends, future developments etc.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    
    </div>
     -->

    </section>

    <!-- ENDS SECTION -->

    <!-- INITIATES FOOTER -->
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>    
    <!-- ENDS FOOTER -->    

</body>

<html>