<?PHP
?>

<header class="container-fluid">
        
    <!-- FIRST PART OUT OF 3 OF THE HEADER 
    <nav class="row dots" style="background-image: url('images/blue-dots.jpg')">

        <div class="col-sm-1"></div>

        <div class="col-sm-10">

            <div class="login-btn">
                <button>Login</button>
            </div>

        </div>

        <div class="col-sm-1"></div>

    </nav>
    -->

    <!-- SECOND PART OUT OF 3 OF THE HEADER -->
    <nav style="padding: 0 !important; margin-bottom: 0 !important; border: 0 !important; background-color: #FFF !important; border-radius: 0 !important;" class="navbar navbar-inverse col-md-12">
    
        <div class="hidden-xs col-md-1"></div>

        <div class="container-fluid col-md-10">

            <div style="margin-left: 24px;" class="navbar-header">
                <button style="background-color: black;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="header-two" href="index.php">
                    <img style="width: 12em !important;" src="images/mowisat-corp-logo.png" alt="mowisat corp logo" />        
                </a>
            </div>

            <div style="border: 0 !important;" class="collapse navbar-collapse" id="myNavbar">
                <ul style="margin: 0.6em 0 0 0 !important;" class="nav navbar-nav navbar-right nav-style-header">
                    <li><a class="ahover" style="color: black;" href="satellite.php"><?PHP echo $txt["toSatellite"]; ?></a></li>
                    <li><a class="ahover" style="color: black;" href="social.php"><?PHP echo $txt["toSocial"]; ?></a></li>
                    <li><a class="ahover" style="color: black;" href="./blog"><?PHP echo $txt["toNews"]; ?></a></li>
                    <li><a class="ahover" target="_blank" style="color: black;" href="http://mowisatinvest.mx"><?PHP echo $txt["toInvestors"]; ?></a></li>
                    <li style="margin-top: 7px;" class="hidden-xs hidden-sm hidden-md round"><a style="padding: 5px 5px 5px 5px; color: black;" href="?idiom=en">EN</a></li>
                    <li style="margin-top: 7px;" class="hidden-xs hidden-sm hidden-md round"><a style="padding: 5px 5px 5px 5px; color: black;" href="?idiom=es">ES</a></li>
                    

                    <li class="ahover" style="text-align: center; text-align: -webkit-center;"><a class="hidden-lg round" style="width: 39px; padding: 5px 5px 5px 5px; color: black; border-radius: 100%; text-align: center; text-align: -webkit-center; border: 2px solid gray; color: black;" href="?idiom=es">ES</a></li>
                    <li class="ahover" style="text-align: center; text-align: -webkit-center;"><a class="hidden-lg round" style="width: 39px; padding: 5px 5px 5px 5px; color: black; border-radius: 100%; text-align: center; text-align: -webkit-center; border: 2px solid gray; color: black;" href="?idiom=en">EN</a></li>
                    <li style="margin-top: 7px;" class="hidden-lg">
                        <br />
                    </li>

                </ul>
            </div>

        </div>

        <div class="hidden-xs col-md-1"></div>

    </nav>

    <!-- THIRD PART OUT OF 3 OF THE HEADER -->

    <nav class="row header-three-style">
        <div style="z-index: 9999; padding: 0; margin: 0; -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2); box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2); " class="col-md-12" id="third-header">

            <div class="col-xs-12 col-sm-12 col-md-4 style-box text-center">
                <div class="inline-display"><a href="./aboutus.php"><img src="images/icon7.png" alt="question mark" /><?PHP echo $txt["whyMowisat"]; ?></a></div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 style-box text-center">
                <div class="inline-display"><a href="./how-works.php"><img src="images/icon8.png" alt="gears" /><?PHP echo $txt["howWorks"]; ?></a></div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 style-box text-center">
                <div class="inline-display"><a href="./partners.php"><img style="margin-right: 15px;" src="images/icon9.png" alt="partners" /><?PHP echo $txt["partners"]; ?></a></div>
            </div>

        </div>
    </nav>

</header>
<!-- ENDS HEADER --> 