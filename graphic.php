<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Graphic Designing</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- mobile responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
$("#modal23").load("modal.php");
});
    </script>
</head>

<body>
<div class="page-wrapper">  
    

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->


  <div id="header1"></div>
        <!--End Main Header -->
    
    <!-- MOBILE APP SECTION -->

    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                    <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Graphic Designing</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                
                  <!--  Graphic design is an art to create visual content which is used 
                   for communicating with user like a message. Using Page layout 
                   techniques and by applying visual hierarchy graphic designers use 
                   typography and pictures to provide users the idea of the client’s 
                   product or service. 
                </p>
                <p class="my-3 text-justify">
                If done in right informational way it is the best resource to communicate with user study, it also proves that a user feels more attached towards content when done in an Infographics way. An image speaks better than text , plain text always creates boredom while Infographics materials engages a user and also user feels curious and excited while studying it. -->
                        <?php 
                            include("connect.php");
                            $sql = 'SELECT * from `graphic_main`';
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo htmlspecialchars_decode($row['content']);
                                }
                            }
                            $conn->close();
                        ?>
            
                 <div class="row text-center" id="buttonn">
                    <button class="btn btn-lg btn-default" style="color: white; background-color:#E13737; border-radius: 0px!important; margin-top: 10vh; box-shadow: 1px 1px 1px 1px #E13737; border: 1px solid #E13737" data-toggle="modal" data-target="#myModal">
                        Request a quote&ensp;<span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                <img src="./final-assets/Graphic & Logo Designing/top.png" class="img-fluid" alt="">
            </div>

        </div>
    </div>

    
       

  <div id="modal23"></div>
    <div class="container" style="margin-top: 5rem;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Overview</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <div class="row">
                    <div style="margin-bottom: 4rem; color: black;">
                        
                        <!-- We believe in creating user oriented communication that’s simple, clear & engaging -->
                        <?php 
                            include("connect.php");
                            $sql = 'SELECT * from `graphic_overview`';
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo htmlspecialchars_decode($row['content']);
                                }
                            }
                            $conn->close();
                        ?>
                        
                    </div>
                </div>
                <p class="text-center"> -&ensp;&ensp; Strategically locate the brand to create it stand out from the crowd.</p>
                <p class="text-center"> -&ensp;&ensp; Give the brand a personality that connects well with its audience.</p>
                <p class="text-center"> -&ensp;&ensp; Delivering  a delightful experience to make the customer come over and over again</p>
            </div>
        </div>   
    </div>

    <div class="container" style="margin-top: 8vh">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10" style="margin-bottom: 15px;">
                <div class="row text-center text-justify">
                    <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:2.4rem">CORE SERVICES</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3" >
                            <div class="dontknowthename">
                            <div class="cb-container" >
                                <div class="icon" >
                                    <img src="./final-assets/Graphic & Logo Designing/Core Services/Logo Design or Revamp.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                </div>
                                <br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Logo Design or Revamp</a></h4>
                                <br/><br/><br/>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3" >
                            <div class="dontknowthename">
                            <div class="cb-container" >
                                <div class="icon">
                                    <img src="./final-assets/Graphic & Logo Designing/Core Services/Brand Identity Systems.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                </div>
                                <br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Brand Identity Systems</a></h4>
                                <br/><br/><br/>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3" >
                            <div class="dontknowthename">
                            <div class="cb-container" >
                                <div class="icon">
                                    <img src="./final-assets/Graphic & Logo Designing/Core Services/Wordpress & shopify websites.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                </div>
                                <br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">WordPress & Shopify Websites</a></h4>
                               <br/><br/><br/>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3" >
                            <div class="dontknowthename">
                            <div class="cb-container">
                                <div class="icon" >
                                    <img src="./final-assets/Graphic & Logo Designing/Core Services/UX & UI for websites and apps.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                </div>
                                <br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">UX & UI for Websites and Apps</a></h4>
                                <br/><br/><br/>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10" style="margin-bottom: 20px!important;">
                <div class="row text-center text-justify">
                    <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:2.4rem">OTHER SERVICES</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Positioning strategy.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Positioning Strategy</a></h4>
                                    
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Copywriting.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Copywriting</a></h4>
                                    <br/><br/><br/>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Brochure Design.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Brochure Design</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Flex Design.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Flex Design</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon">
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Stationery Design.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Stationery Design</a></h4>
                                    <br>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                     
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Presentation Templates.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Presentation Templates</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon">
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Email Campaigns.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Email Campaigns</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Print Campaigns.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Print Campaigns</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Event Collaterals.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Event Collaterals</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                    <div class="row"> -->
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Frontend Development.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Frontend Development</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Newsletters.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Newsletters</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Digital Ads.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Digital Ads</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Social Media Creative.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Social Media Creative</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                    <div class="row"> -->
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Landing Pages.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Landing Pages</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Amazon Storefront.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Amazon Storefront</a></h4>
                                    <br>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon">
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Other Marketing Collaterals.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Other Marketing Collaterals</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon">
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Editorial Design, and more.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Editorial Design, and more</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3" >
                            <div class="dontknowthename">
                                <div class="cb-container" >
                                    <div class="icon" >
                                        <img src="./final-assets/Graphic & Logo Designing/Other Services/Packaging.png" alt="Avatar" class="overlay-image mx-auto img-fluid" style="max-width: 60px; max-height: 60px;">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a  style="color:#0c2e8a">Packaging</a></h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                    </div>                    

                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 8vh">
        <div class="row">
              <div class="col-lg-6 col-xs-12 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="./final-assets/Graphic & Logo Designing/We design while keeping things in mind/Brand Identity.png" width="80px" height="80px"  style="margin-top:-35px"></div>
                    <br/> <br/> 
                <h4 class="title" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Brand Identity</a></h4>
                <br/>
                <p class="description">We create standardised system of brand elements that would get your brand easy recognition over time, From Logo to complete Brand Identity.</p>
              </div>
            </div>  
            <div class="col-lg-6 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="./final-assets/Graphic & Logo Designing/We design while keeping things in mind/Marketing Strategy.png" width="80px" height="80px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a style="color:#0c2e8a">Marketing Strategy</a></h4>
                  <br/>
                  <p class="description">Promoting a brand with print & digital ways that communicate the brand message and its personality.</p>
                </div>
              </div>
            </div>
        </div>
<div id="footer1"></div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/isotope.js"></script> 


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>

<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<!-- bxslider -->
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>

<script src="js/script.js"></script>
</body>
</html>
