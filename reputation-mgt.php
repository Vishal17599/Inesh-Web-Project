<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Online Reputation Management</title>

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


        <div class="container" style="margin-top: 3rem;">
            <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:3.2rem">Online Reputation Management</h2>
                    </div>
            <div class="row">
                <div class="col-sm-6">
                    
                    <p class="my-3 text-justify">
                       <!-- Online reputation management (ORM) means control over online conversations. Its techniques and strategies ensure that people find the right content of yours on the Internet. The purpose of Online Reputation Management is to balance combat deceptive trends and keep your best foot forward. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `reputation_main`';
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo htmlspecialchars_decode($row['content']);
                          }
                      }
                      $conn->close();
                  ?>
                    </p>
                    <br/>
                    <h3 style="color: black; margin-bottom: 10px!important;"><b>Why should you care about your online reputation?</b></h3>
                    <p class="text-center text-justify my-2">
                      Not only do people see the Internet as the first source of their information, but they also rely on what it tells to them. More importantly, they decide on the basis of whatever they find online. Two out of three people see the Internet as the most trusted source of information about a person or business (Edelman insights).
                    </p>

                    <div class="row text-center" id="buttonn">
                        <button class="btn btn-lg btn-default" style="color: white; background-color:#E13737; border-radius: 0px!important; margin-top: 10vh; box-shadow: 1px 1px 1px 1px #E13737; border: 1px solid #E13737" data-toggle="modal" data-target="#myModal">
                            Request a quote&ensp;<span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                        <img class="img-fluid" style="height: 100%; width: 100%; " src="img/reputation.png">
                </div>
            </div> 
        </div>

   <div id="modal23"></div>
        <br/><br/><br/>
            <div class="container" >
    <div class="row">
        <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center">Overview</h2>
                </div>
                <p class="text-center">
                 <!--  60% of hiring managers rejects a candidate because they found something about them online. When looking for a local business, almost 90% of people read online reviews. The loss of reputation over 75% comes from a mismatch between discussion and reality. Looking at the figures like these, it is clear that what happens online affects your whole life.

With each passing day, the online world becomes more and more alive with our remaining activities. From smartphones to smart TVs, from "Internet of Things" to future self-driving cars - you're living online every day, even if you never touch the computer. This means that there are more ways to leave an online mark for you, either positive or negative.

Now, you cannot think that people are searching for you, but there is a possibility that they are. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `reputation_overview`';
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo htmlspecialchars_decode($row['content']);
                          }
                      }
                      $conn->close();
                  ?>
</p>
    </div>
</div>
<br/>
<h2 class="text-center" style="color: black; font-size: 30px;">Common reasons include:</h2>
<br/>
            <div class="container" >
<div class="row" >
                
          <div class="col-sm-3 col-xs-6 dontknowthename" >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Employers researching interviews.png" width="60px" height="60px" ></div> 
                <br/><br/><br/>
              <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Employers researching interviews</a></h4>
              <br/><br/><br/>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Landlord looking at future tenants.png" width="60px" height="60px"  ></div>
                <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a"> Landlord looking at future tenants</a></h4>
              <br/><br/><br/>
              </div>
            </div>  
            <div class="col-sm-3 col-xs-6 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/Children searching for details of their parents or vice-versa.png" width="60px" height="60px"  ></div><br/><br/><br/>
                  <h4 class="description" Align="center" ><a href=""style="color:#0c2e8a">Children searching for details of their parents or vice-versa</a></h4>
              <br/><br/><br/>
                </div>
              </div>
              
              <div class="col-sm-3 col-xs-6 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/Former colleagues are looking to share professional opportunities.png" width="60px" height="60px"  ></div><br/><br/><br/>
                  <h4 class="description" Align="center" ><a href=""style="color:#0c2e8a">Former colleagues are looking to share professional opportunities</a></h4>
                    <br/><br/><br/>
                </div>
              </div>
                </div>
                <br/>
                <div class="row" >
                    <div class="col-sm-2"></div>
                
          <div class="col-sm-4 col-xs-6 dontknowthename" >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/College admission department evaluates future students.png" width="60px" height="60px" ></div> 
                <br/><br/><br/>
              <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">College admission department evaluates future students</a></h4>
              <br/><br/><br/>
            </div>
          </div>
          <div class="col-sm-4 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Insurance companies assessing risk.png" width="60px" height="60px"  ></div>
                <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Insurance companies assessing risk</a></h4>
              <br/><br/><br/>
              </div>
            </div>  
            
<div class="col-sm-2"></div>

                </div>
                <br/>
            </div>
            <div class="container">
            <p class="text-center">
                Your online reputation is forever, if someone writes something negative about you online, then it can put you in serious harm for a long time - especially if you do not know about it. You never know why you did not find the apartment you wanted, or why the job was never offered after that unprecedented interview. People today take their opinions on social media and other online platforms, find solutions or usually go to see information. The days have come, where someone needs to conduct an online or offline survey to find out about a particular topic.
<br/>
This is a simple search for all the feelings surrounding a brand. Maintaining a positive reputation online for businesses has become very important. If people are saying bad things about you or your company, then do you want to help your customers with positive things about you by your replies? Bad reputation online can harm business objectives in the long run.
            </p></div>

              <div class="container" style="margin-top: 3rem;">
            <div  style="margin-bottom: 4rem;">
                        <h3 class="text-center" style="color: black;">Here's why you'll manage your online rebate:</h3>
                    </div>
                    <h4 style="color: black; margin-bottom: 10px!important;"><b>Incresing sales:</b></h4>
                    <p class="my-3 text-justify">
                       Internet is the first place where people reach a solution or product. It is one of the best sources for research because anyone can easily connect with many people who are contributing to the topic. One of the best ways to improve your sales is to interact with direct customer online and indirect resources such as through social media posts and analyze the best ways to convert them. A Reputation Management companies can share insights from your customer's behaviour and response, which, in turn, can help you understand the best form of communication in order to move ahead with the customer.
                    </p>
                    <br/>
                    <h4 style="color: black; margin-bottom: 10px!important;"><b>Make credibility</b></h4>
                    <p class="text-center text-justify my-2">
                     Winning a customer's trust is very important for a business to succeed. Become an individual or another customer in your B2B Vertical, the Internet gives them a platform to be a citizen journalist, so if they are not happy about your service or your product, they can lift their voice online about your brand and it will spread. Everybody knows that negativity spreads much faster than positivity. If implemented at the time, implementing an ORM strategy can convert negative reviews into positive which helps to build positive credibility as a brand that cares about its customers or users and wants to improve the product. A good ORM service can help you connect and design your communication with it.
                    </p>
                    <br/>
                    <h4 style="color: black; margin-bottom: 10px!important;"><b>Create brand Image</b></h4>
                    <p class="text-justify my-2">
                        When it comes to complaints on the lines of reputation management, an effective ORM can help in creating the right brand image. Monitoring the responses in any form of continuous communication can help your company to create a brand image you wish for. Putting social media posts? Understand that your customers are reacting the same way, so that the next post gets a more positive response. Are your customers talking about a particular aspect of your product in very positive light? Make it your centre of communication. Many go right and wrong when going online with your brand. The key is to get your act directly.
                    </p>
                    <br/>
                    <h4 style="color: black; margin-bottom: 10px!important;"><b>Recruitment</b></h4>
                    <p class="text-center text-justify my-2">
                       Another reason that a company can succeed is that to do with the talent running the product. Drive a good online reputation in high volume applications for any job opening. And it is no secret that a good, qualified candidate will always do his research online before making an interview call or application in your company. Your company's online reputation may be the deciding factor in the candidate, who is saying yes for you. 
                    </p>
                </div>
            </div>

    <!-- END WEB DEVELOPMENT -->
    <!--Team Section-->
    <!-- <section class="team-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/1.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Monica Dull</h5></a>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/2.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Roxan Gilbert</h5></a>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/3.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Adam Lambert</h5></a>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/4.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Monica Dull</h5></a>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/5.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Roxan Gilbert</h5></a>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/6.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Adam Lambert</h5></a>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
            </div>                                    
        </div>
    </section> -->
    <!--End Team Section-->
    <div class="container" style="margin-top: 3rem; overflow-x: auto;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Plan and Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 text-center">
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
                            <td class="font-weight-bold">Phrase Targeted</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Search Positions Monitored</td>
                            <td>1 to 10</td>
                            <td>1 to 20</td>
                            <td>1 to 30</td>
                            <td>1 to 40</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Web 2.0 Site Development</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Social Media Profile Creation</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Blog Setup</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Blog Writing</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Blog Posting</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Twitter Profile Promotion</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Facebook Profile Promotion</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">LinkedIn Profile Promotion</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">YouTube Profile Promotion</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Image Promotion</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Video Promotion</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Business Reviews</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Business Listing</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Social Bookmarking</td>
                            <td>10</td>
                            <td>20</td>
                            <td>30</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Article Writing</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Article Submission</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Local Map Listing</td>
                            <td>2</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Online Tracking and Notification</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">ORM Report</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Email Support</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Chat Support</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Phone Support</td>
                            <td><span class="fa fa-times"></span></td>
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
