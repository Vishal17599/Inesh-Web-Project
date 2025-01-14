<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Email Marketing</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="./css/font-awesome.min.css">

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

    <!-- ECOMM SECTION -->
    <div class="container" style="margin-top: 3rem;">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:3.2rem">Email Marketing</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                    
                        <!-- Using email to get your marketing message for your audience is an essential tool to increase your
                        business in the fast-moving world of internet business, because it provides open and interactive
                        communication. The most popular form of email marketing is email newsletters or e-zine.
                        Permission-based email marketing includes special email promotions, single blasts, ads, follow-up
                        sequences and auto responder, email courses, and more. Email marketing is popular because it is
                        relatively easy to get started, is quick, and affordable. When done right then it can also generate
                        considerable benefits. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `email_main`';
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
                    <div class="row">
                        <div style="" class="text-center">
                            <!-- <p style="padding-top:20vh">IMG</p> -->
                            <img src="./final-assets/Email Marketing/Email Marketing - Main Image.png" class="img-fluid" alt="">
                        </div>
                    </div>
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
                <div class="col-xs-10 col-xs-offset-1">
                    
                        <!-- The basis behind email marketing is that you create a list of customers who wants to hear from you.
                        Then you regularly market them by email so they can stay on top and buy more. You may be reading
                        this thinking that email marketing has already reached its peak, that everybody is doing it, and you
                        may not have to worry too much because these days everyone complains that they crowd is inbox.
                        But be assured, email marketing is a strategy that you should not ignore. Email newsletters that
                        deliver real value are still read, saved, shared, and clicked by the people. Plus, email marketing is a
                        great way to stay in touch with your audience, increase brand exposure, value and enhance your
                        rights. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `email_overview`';
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
        </div>

        <section id="services" class="container"  style="margin-top: 30px;">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:3.2rem">Email marketing can help your business grow</h2>
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center">
                    <div class="row mx-auto text-center">
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Save Valueable Budget.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Save valuable budget</a></h4>
                                <br>
                                <p class="description">
                                        Save money and some trees! By going digital, you will avoid printing, paper, envelopes, mail handling, and postage expenses. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Increase Brand Identity.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Increase Brand Identity</a></h4>
                                <br>
                                <p class="description">
                                Get your brand image and name in front of your audience more often by including your logo, tagline, colour palette, and brand graphics in your email communication template design.                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Connect with your Target Marget.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4  Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Connect with your target market</a></h4>
                                <br>
                                <p class="description">
                                Email marketing helps you keep in touch with your audience, keeping your mind on a regular basis and at the tip of their tongue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Increase your credibility.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4  Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Increase your credibility</a></h4>
                                <br>
                                <p class="description">
                                    Continuous, quality email marketing which is relevant, on-topic and worth the price, will help you gain and grow your target market and customers’ trust.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Educate your current customers.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Educate your current customers</a></h4>
                                <br>
                                <p class="description">
                                    Your email newsletter is a great place to keep what your customers have in your business. By sharing what you are working on and who is working on, you can make them aware of it.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Attracting new opportunity.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4  Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Attracting new opportunities</a></h4>
                                <br>
                                <p class="description">
                                Publishing e-mail newsletters can help you generate new opportunities like strategic partnerships, joint ventures, media interviews, spoken engagement, and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Create New Stream of income.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Create new streams of income</a></h4>
                                <br>
                                <p class="description">
                                    You can also use your email newsletter as an affiliate, products, programs and services that you have used yourself or believe in and earn commission on sales made by your referrals. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Expand your network.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Expand your network</a></h4>
                                <br>
                                <p class="description">
                                    Email marketing helps you to build your list by allowing you to develop your network and capture the email address via the Website Opt-in or subscribe box.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                        <div class="dontknowthename">
                            <div class="cb-container" style="padding: 10px;">
                                <div class="icon"><img src="./final-assets/Email Marketing/Organize your industry knowledge.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                <br><br>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Organize Your Industry Knowledge</a></h4>
                                <br>
                                <p class="description">
                                    On a topic, a series of articles written for your email newsletter can be repurchased in a free audio for an e-book, whitepaper, guide, or even content marketing.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container" style="padding: 10px;">
                                    <div class="icon"><img src="./final-assets/Email Marketing/Reach Wide audience.png" alt="Avatar" width="60px" height="60px" class="img-fluid" style="margin-top:-35px"></div>
                                    <br><br>
                                    <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Reach wide audiences</a></h4>
                                    <br>
                                    <p class="description">
                                        Get your website newsletter back to your website by promoting recent blog posts in each issue to attract new visitors through social media.
                                    </p>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
    </div>
</section>
    <div class="container" style="margin-top: 3rem; overflow-x: auto;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Plan and Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 text-center" style="overflow-x:auto!important;">
                <table class="table table-responsive">
                    <thead style="background-color:#E13737; color:white; font-size:1.5rem; padding: 10px;" >
                        <tr>
                            <th class="text-center">Services</th>
                            <th class="text-center">Basic</th>
                            <th class="text-center">Premium</th>
                            <th class="text-center">Business</th>
                            <th class="text-center">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Average Business Growth Per Quarter</td>
                            <td>5-10%</td>	
                            <td>10-20%</td>	
                            <td>20-30%</td>	
                            <td>Above 30%</td>
                        </tr>
                        <tr>
                            <td>Campaigns Per Year</td>
                            <td>4</td>
                            <td>6</td>
                            <td>8</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Custom Branded Templates</td>
                            <td>4</td>
                            <td>6</td>
                            <td>8</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Template Design & Layout</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            </tr>
                        <tr>
                            <td>Email Creation</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td>Email Merge & Tracking</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td>Constant Contact Account Set-up</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td>Strategy Discussion</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td>Regular Consultation</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td>List Management</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-lg text-center" style="color: white; border-radius: 0px!important; background-color:#E13737; margin-top: 30px!important; margin-bottom: 20px!important;" data-toggle="modal" data-target="#mymodal">ORDER NOW</button>
            </div>
        </div>  
    </div>   
          
    <div id="modal23"></div>

    <!--Subscribe Section-->
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
