  <?php
  session_start();
  $allErrs = $nameErr = $emailErr = $contactnoErr = $cityErr = $typeOfSerrvicesErr = $allpostval = $allapproxbudget1 = $alltypeOfServices =  "" ;

  if(isset($_SESSION['errors'])){
      $allErrs = $_SESSION['errors'];
  }
  if(isset($_SESSION['postval'])){
      $allpostval =$_SESSION['postval'];
  }

    // if(isset($_SESSION['approxbudget1'])){
    //   $allapproxbudget1 =$_SESSION['approxbudget1'];
    // }

  if(isset($_SESSION['services'])){
      $alltypeOfServices =$_SESSION['services'];
  }

  if(isset($allpostval['enquirysource'])){
      $enquirysource=$allpostval['enquirysource'];

  }

  if (isset($allErrs['project'])) {
      $projectErr = $allErrs['project'];
  }

  if(isset($allErrs['name'])){
      $nameErr = $allErrs['name'];
  }

  if(isset($allErrs['email'])){
      $emailErr = $allErrs['email'];
  }
  if(isset($allErrs['contactno'])){
      $contactnoErr = $allErrs['contactno'];
  }
  if(isset($allErrs['city'])){
      $cityErr = $allErrs['city'];
  }
    // if(isset($allErrs['location'])){
    //   $locationErr = $allErrs['location'];
    // }

    // if(isset($allErrs['enquirysource'])){
    //   $enquirysourceErr = $allErrs['enquirysource'];
    // }
  if(isset($allErrs['services'])){
      $typeOfSerrvicesErr = $allErrs['services'];
  }?>

  
<?php include 'header.php' ?>



<div class="container">                  
   <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
       <li class="breadcrumb-item active" aria-current="page">Private Limited Registration</li>
   </ol>
</nav>
</div>   

<div class="container">
      <div class="row">
        <div class="main_history fadeInUp" style="display:flex; padding-bottom: 20px;">
          <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine" style="border-right: 1px solid #ffb900;">

            <h2 class="Associate" ><span class="textHead">We Are Associated With</span> </h2>
            <!-- <br>  -->
            <div class="single_history_img">     
              <div class="container">

                <div class="col-3">
                  <img src="images1/tiaup/axis.jpeg" style="border-radius: 10px;"   alt="Logo 1" width="70%" class="shadowbtn">
                </div>
                <div class="col-3">
                  <img src="images1/tiaup/just.jpeg" style="border-radius: 10px; " alt="Logo 2" width="70%" class="shadowbtn">
                </div>

                <div class="col-3">
                  <img src="images1/tiaup/paytm.jpeg" style="border-radius: 10px; " alt="Logo 5" width="70%" class="shadowbtn">
                </div>
                <div class="col-3">
                  <img src="images1/tiaup/sulekha.jpeg"style="border-radius: 10px; " alt="Logo 4" width="70%" class="shadowbtn">
                </div>
                <div class="col-3">
                  <img src="images1/tiaup/kotak.jpeg"style="border-radius: 10px; " alt="Logo 4" width="70%" class="shadowbtn">
                </div>


              </div>

            </div>
          </div>
          <div class="col-lg-6 col-sm-6"data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" style="border-left: 1px solid #ffb900;">
            <h2 class="Associate" ><span class="textHead">Our Associated Partners </span> </h2> 

            <div class="single_history_img">
              <!-- <div class="row "> -->

                <div class="container" style="display: flex;">
                  <div class="col-3">
                    <img src="images1/Associate/logo1.jpeg" style="border-radius: 10px;"   alt="Logo 1" width="70%" class="shadowbtn">
                  </div>
                  <div class="col-3">
                    <img src="images1/Associate/logo2.jpeg" style="border-radius: 10px; " alt="Logo 2" width="100%" class="shadowbtn">
                  </div>

                  <div class="col-3">
                    <img src="images1/Associate/logo3.jpeg" style="border-radius: 10px; " alt="Logo 5" width="70%" class="shadowbtn">
                  </div>
                  <div class="col-3">
                    <img src="images1/Associate/logo4.jpeg"style="border-radius: 10px; " alt="Logo 4" width="70%" class="shadowbtn">
                  </div>
                 <!--  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                    <img src="images1/tiaup/png.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                  </div>
                -->
              </div>
              <!-- </div> -->
              
            </div>
          </div>       
        </div>
      </div>
    </div>
<br><br>

<div class="container " >    
    <div class="row content ">   
    <div class="col-lg-3 col-sm-6"  data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" > 
        <div class="menu" id="menu"style="position: sticky; top: 60px;" >
            <a href="#topic1" style="text-decoration: none;" >
                <div class="list"><span class="light"></span><span>Required Document</span></div>
            </a>
            <a href="#topic2" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Advantages</span></div>
            </a>
            <a href="#topic3" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Process</span></div>
            </a>

        </div> 
    </div>
    <div class="col-lg-6"  data-aos="fade-up" data-aos-offset="350"data-aos-easing="ease-in-sine" >
        <div id="topic1">
            <h4 style="text-align:center;">DOCUMENT REQUIRED </h4>
            <br>
            <div class="row"> 
             <div class="container text-center">
              <div class="row align-items-center">
                <div class="col" >
                    <div>
                        <img src="images1/camera.png">
                    </div>
                    <h5>Passport Size Photograph</h5>
                </div>
                <div class="col" >
                    <div>
                        <img src="images1/pan-card.png">
                    </div>
                    <h5>PAN Card</h5>
                </div>
                <div class="col" >
                 <div>
                     <img src="images1/electricity-bill.png">
                 </div>
                 <h5>Copy of Electricity Bill</h5>
             </div>
             <div class="col" >
                 <div>
                     <img src="images1/Office-Proof.png">
                 </div>
                 <h5>Registered Office Proof</h5>
             </div>                         
         </div>
     </div>
 </div>
 <br>
<div class="container text-center">
     <div class="row"> 
      <div class="row align-items-center">
        <div class="col" >
            <div>
                <img src="images1/Aadhaar-Card.png">
            </div>
            <h5>Copy of Aadhaar Card</h5>
        </div>
        <div class="col" >
            <div>
                <img src="images1/Address-Proof.png">
            </div>
            <h5>Address Proof</h5>
        </div>
        <div class="col" >
         <div>
             <img src="images1/Residential-Proof.png">
         </div>
         <h5>Residential Proof</h5>
     </div>
     <div class="col" >
         <div>
             <img src="images1/noc.png">
         </div>
         <h5>No Objection Certificate</h5>
     </div>                         
 </div>
</div>
</div>
</div>   
<br><br><br>

<div id="topic2">
   <h4 style="text-align:center;">THE ADVANTAGES OF REGISTRATION OF COMPANY</h4>
   <!-- Start title section -->
   <div class="title">
       <!-- <h1 style="text-align:center; color: #ffb900;">What We Do ?</h1> -->
       <!-- Section's title goes here -->
       <p  style="text-align:center;"> Setup & Delivered 2,00,000 + New Companies and Business Licenses for MSMEs in India and continuing…</p>
       <!--Simple description for section goes here. -->
   </div>
   <!-- <div class="row"> -->
     <br>
    <div class="container">
      <div class="row">
           <div class="row"> 
            <div class="container text-center">
             <div class="row align-items-center">
               <div class="col" >
                   <div>
                       <img src="images1/camera.png">
                   </div>
                   <h5>Passport Size Photograph</h5>
               </div>
               <div class="col" >
                   <div>
                       <img src="images1/pan-card.png">
                   </div>
                   <h5>PAN Card</h5>
               </div>
               <div class="col" >
                <div>
                    <img src="images1/electricity-bill.png">
                </div>
                <h5>Copy of Electricity Bill</h5>
            </div>
            <div class="col" >
                <div>
                    <img src="images1/Office-Proof.png">
                </div>
                <h5>Registered Office Proof</h5>
            </div>                         
        </div>
    </div>
</div>


<div class="container text-center">
   <div class="row"> 
     <div class="row align-items-center">
       <div class="col" >
           <div>
               <img src="images1/camera.png">
           </div>
           <h5>Passport Size Photograph</h5>
       </div>
       <div class="col" >
           <div>
               <img src="images1/pan-card.png">
           </div>
           <h5>PAN Card</h5>
       </div>
       <div class="col" >
        <div>
            <img src="images1/electricity-bill.png">
        </div>
        <h5>Copy of Electricity Bill</h5>
    </div>
    <div class="col" >
        <div>
            <img src="images1/Office-Proof.png">
        </div>
        <h5>Registered Office Proof</h5>
    </div>                         
</div>
</div>
</div>   

</div>
</div>
</div>
<div id="topic3">

</div>
</div>
<div class="col-lg-3" data-aos="fade-left"data-aos-offset="350"data-aos-easing="ease-in-sine" >
  <div class="container "style="position: sticky; top: 100px;" >
  <div class="row">

      <form method="post" action="send.php" class="form-horizontal" role="form" id="LeadsForm" >
        <!-- <i class="fas fa-paper-plane"></i> -->
        <!-- <span class="text-success"style="display: flex;justify-content: center;"><?php if($_SESSION['success']){echo $_SESSION['success'];} ?></span> -->
        <div class="input-group">
          <!-- <label>Full Name</label> -->
          <input type="text" name="name" placeholder="Enter your name"  id="contact_name" onkeyup="validatName()" >
          <span id="name_error"><?php echo $nameErr; ?></span>
        </div>

        <div class="input-group">
          <!-- <label>Phone No.</label> -->
          <input type="tel" name="contactno" placeholder="123 456 7890" id="contact_phone" onkeyup="validatPhone()" >
          <span id="phone_error"class="text-danger"><?php echo $contactnoErr; ?></span>
        </div>

        <div class="input-group">
          <!-- <label>Email Id</label> -->
          <input type="email" name="email" placeholder="Enter Email" id="contact_email" onkeyup="validatEmail()" >
          <span id="email_error"class="text-danger"><?php echo $emailErr; ?></span>
        </div>   
        <br>
        <div class="input-group" style="max-width:88% ;">
         <!-- <label class="">Services </label> -->
         <!-- <div class="col-lg-12"> -->
           <select  name="services[]" class="form-control">
             <option value="">--Please choose an option--</option>
             <option value="Trademark" <?php if(in_array('Trademark',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Trademark</option>
             <option value="Copyright" <?php if(in_array('Copyright',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Copyright</option>
             <option value="Patent" <?php if(in_array('Patent',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Patent</option>
             <option value="Company Formation" <?php if(in_array('Company Formation',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Company Formation</option>
             <option value="ISO" <?php if(in_array('ISO',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>ISO</option>
             <option value="Website Design" <?php if(in_array('Website Design',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Website Design</option>

           </select>
           <span class="text-danger"><?php echo $typeOfSerrvicesErr; ?></span>
           <!-- </div> -->
         </div>
         <!-- <br> -->

         <div class="input-group">
          <!-- <label>City</label> -->
          <input type="text" name="city" placeholder="Enter City name"  id="contact_name" onkeyup="validatCity()" >
          <span id="city_error"class="text-danger"><?php echo $cityErr; ?></span>
        </div>   

          <!-- <div class="input-group">
            <label>Your Message</label>
            <textarea rows="5" placeholder="Enter your message" id="contact_massage" onkeyup="validatMassage()"></textarea>
            <span id="massage_error"></span>
          </div> -->

          <div class="input-group">
            <!-- <label for="location" class="col-sm-3 control-label">Generate OTP:</label> -->
            <!-- <div class="col-sm-12"> -->
             <!-- <input type="text" id="otp" name="otp" placeholder="otp" class="form-control"  >
             <span><strong>Note : </strong> Please Verify Mobile No. To submit the form. <a href="javascript:void(0)" onclick="SendOtp()">Verify</a></span>
             <span class="text-danger"><?php echo $otpErr; ?></span> -->
             <!-- <br>
               <br> -->
               <!-- <div   class="col-sm-12" > -->
                <input id="button" type="submit" name="save" class="" value="Submit">
                <!-- </div> -->

              </div>

              <!-- <button>Submit</button> -->
              <span id="submit-error" id="contact_submit" onkeyup="validatSubmit()"></span>

            </form>
          </div>
        </div>
      </div>
</div>
</div>    
<br><br>
<?php include 'content.php' ?>


  <div class="container">
  <div class="row"style="background-image: url(images1/bkwhite.jpg);">
        <div class="col-md-12">
            <div class="section-title text-center wow zoomIn">
                <h2 style="text-align: center;font-family: Lato-Medium;
                font-weight: 900!important;
                position: relative;
                margin-bottom: 30px;
                text-shadow: 0px 3px 12px #c3c3c3;">Frequently Asked Questions</h2>
                <span></span>
                <p>If you have any doubts regarding Trademark then this article based on FAQs on Trademark Registration in India will clear all your doubts.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">               
            <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                               How many people are required to form a private ltd company?
                            </a>
                        </h4>                    

                    </div>

                    <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                        <div class="panel-body">
                            <p>From the date of submission of complete required documents, it will take approximately 14 working days to deliver certificate of incorporation in your hand 
                            </p>
                        </div>
                    </div>
                </div>            
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                               Who can be a director of a company?
                           </a>
                       </h4>
                   </div>
                   <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                    <div class="panel-body">
                        <p>Any person who attends the age of 18 can be director of the company 
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                           How many shareholders can be there in a private ltd company?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                    <div class="panel-body">
                        <p>Minimum 2 and Maximum 200 shareholders can be added in the company
                        </p>
            
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour">
                            How many directors can be there in private ltd company?
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="panel-body">
                        <p>Minimum 2 Maximum 15 directors can manage the show of a company </p>
                    </div>
                </div>
            </div>
            
        </div>
       </div> 
    </div>                                                                               
    </div><!--- END COL -->     
</div><!--- END ROW -->  


<footer class="container-fluid" id="gtco-footer">
   <div class="container">
       <div class="row">
           <div class="col-lg-6" id="contact">
               <h4> Contact Us </h4>
               <input type="text" class="form-control" placeholder="Full Name">
               <input type="email" class="form-control" placeholder="Email Address">
               <textarea class="form-control" placeholder="Message"></textarea>
               <a href="#" class="submit-button">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
           </div>
           <div class="col-lg-6">
               <div class="row">
                   <div class="col-6">
                       <h4>Company</h4>
                       <ul class="nav flex-column company-nav">
                           <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                       </ul>
                       <h4 class="mt-5">Fllow Us</h4>
                       <ul class="nav follow-us-nav">
                           <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                             aria-hidden="true"></i></a></li>
                             <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                              aria-hidden="true"></i></a></li>
                              <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                  aria-hidden="true"></i></a></li>
                                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                      aria-hidden="true"></i></a></li>
                                  </ul>
                              </div>
                              <div class="col-6">
                               <h4>Services</h4>
                               <ul class="nav flex-column services-nav">
                                   <li class="nav-item"><a class="nav-link" href="#">Trademark Registration</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Copyright Registration</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Design Registration</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Patent Registration</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">ISO Registration</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Formation OF Company</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Web Servieces</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Branding Services</a></li>
                                   <li class="nav-item"><a class="nav-link" href="#">Other Registration Services</a></li>
                               </ul>
                           </div>
                           <div class="col-12">
                               <p>&copy; 2023. All Rights Reserved.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </footer>



                           <!--  <div id="contact" class="contact">
                                <div class="section secondary-section">
                                    <div class="container">
                                        <div class="title">
                                            <h1>Contact Us</h1>
                                            <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                                        </div>
                                    </div>
                                    <div class="map-wrapper">
                                        <div class="map-canvas" id="map-canvas">Loading map...</div>
                                        <div class="container">
                                            <div class="row-fluid">
                                                <div class="span5 contact-form centered">
                                                    <h3>Say Hello</h3>
                                                    <div id="successSend" class="alert alert-success invisible">
                                                        <strong>Well done!</strong>Your message has been sent.</div>
                                                        <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                                        <form id="contact-form" action="php/mail.php">
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                                                    <div class="error left-align" id="err-name">Please enter name.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                                                    <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                                                    <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <button id="send-mail" class="message-btn">Send message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="span9 center contact-info">
                                                <p>123 Fifth Avenue, 12th,Belgrade,SRB 11000</p>
                                                <p class="info-mail">ourstudio@somemail.com</p>
                                                <p>+11 234 567 890</p>
                                                <p>+11 286 543 850</p>
                                                <div class="title">
                                                    <h3>We Are Social</h3>
                                                </div>
                                            </div>
                                            <div class="row-fluid centered">
                                                <ul class="social">
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-facebook-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-twitter-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-linkedin-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-pinterest-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-dribbble-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-gplus-circled"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Contact section edn -->
                                <!-- Footer section start -->
                                <!-- <div class="footer">
                                    <pShared by <i class="fa fa-love"></i><a href="#">hemraj</a>
                                    </p>
                                </div> -->
                                <!-- Footer section end -->
                                <!-- ScrollUp button start -->
                                <div class="scrollup">
                                    <a href="#">
                                        <i class="icon-up-open"></i>
                                    </a>
                                </div>



                                <!-- ScrollUp button end -->
                                <!-- Include javascript -->
                                <script src="js/jquery.js"></script>
                                <script type="text/javascript" src="js/jquery.mixitup.js"></script>
                                <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
                                <script type="text/javascript" src="js/modernizr.custom.js"></script>
                                <script type="text/javascript" src="js/jquery.bxslider.js"></script>
                                <script type="text/javascript" src="js/jquery.cslider.js"></script>
                                <script type="text/javascript" src="js/jquery.placeholder.js"></script>
                                <script type="text/javascript" src="js/jquery.inview.js"></script>
                                <!-- Load google maps api and call initializeMap function defined in app.js -->
                                <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
                                <!-- css3-mediaqueries.js for IE8 or older -->
            <!--[if lt IE 9]>
                <script src="js/respond.min.js"></script>
            <![endif]-->
             <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

             <script type="text/javascript" src="js/app.js"></script>

           <!--     <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
               <script src="dropdown-19/js/popper.min.js"></script>
               <script src="dropdown-19/js/bootstrap.min.js"></script>
               <script src="dropdown-19/js/owl.carousel.min.js"></script>
               <script src="dropdown-19/js/main.js"></script> -->


               <script type="text/javascript">
                 (function($) {
                     'use strict';

                     jQuery(document).on('ready', function(){

                         $('a.page-scroll').on('click', function(e){
                             var anchor = $(this);
                             $('html, body').stop().animate({
                                 scrollTop: $(anchor.attr('href')).offset().top - 50
                             }, 1500);
                             e.preventDefault();
                         });     

                     });                       
                 })(jQuery);
             </script>

             <script type="text/javascript">
               // Acc
               $(document).on("click", ".naccs .menu div", function() {
                var numberIndex = $(this).index();

                if (!$(this).is("active")) {
                    $(".naccs .menu div").removeClass("active");
                    $(".naccs ul li").removeClass("active");

                    $(this).addClass("active");
                    $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                    var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                    $(".naccs ul").height(listItemHeight + "px");
                }
            });
        </script> 


        <script type="text/javascript">
            class FibonacciSphere {
                #points;

                get points() {
                    return this.#points;
                }

                constructor(N) {
                    this.#points = [];

                    const goldenAngle = Math.PI * (3 - Math.sqrt(5));

                    for (let i = 0; i < N; i++) {
                        const y = 1 - (i / (N - 1)) * 2;
                        const radius = Math.sqrt(1 - y ** 2);
                        const a = goldenAngle * i;
                        const x = Math.cos(a) * radius;
                        const z = Math.sin(a) * radius;

                        this.#points.push([x, y, z]);
                    }
                }
            }


            class TagsCloud {
                #root;
                #size;
                #sphere;
                #tags;
                #rotationAxis;
                #rotationAngle;
                #rotationSpeed;
                #frameRequestId;

                constructor(root) {
                    this.#root = root;
                    this.#size = this.#root.offsetWidth;
                    this.#tags = root.querySelectorAll('.tag');
                    this.#sphere = new FibonacciSphere(this.#tags.length);
                    this.#rotationAxis = [1, 0, 0];
                    this.#rotationAngle = 0;
                    this.#rotationSpeed = 0;

                    this.#updatePositions();
                    this.#initEventListeners();
                    this.#root.classList.add('-loaded');
                }

                #initEventListeners() {
                    window.addEventListener('resize', this.#updatePositions.bind(this));
                    document.addEventListener('mousemove', this.#onMouseMove.bind(this));
                }

                #updatePositions() {
                    const sin = Math.sin(this.#rotationAngle);
                    const cos = Math.cos(this.#rotationAngle);
                    const ux = this.#rotationAxis[0];
                    const uy = this.#rotationAxis[1];
                    const uz = this.#rotationAxis[2];

                    const rotationMatrix = [
                        [
                            cos + (ux ** 2) * (1 - cos),
                            ux * uy * (1 - cos) - uz * sin,
                            ux * uz * (1 - cos) + uy * sin,
                            ],
                        [
                            uy * ux * (1 - cos) + uz * sin,
                            cos + (uy ** 2) * (1 - cos),
                            uy * uz * (1 - cos) - ux * sin,
                            ],
                        [
                            uz * ux * (1 - cos) - uy * sin,
                            uz * uy * (1 - cos) + ux * sin,
                            cos + (uz ** 2) * (1 - cos)
                            ]
                        ];

                    const N = this.#tags.length;

                    for (let i = 0; i < N; i++) {
                        const x = this.#sphere.points[i][0];
                        const y = this.#sphere.points[i][1];
                        const z = this.#sphere.points[i][2];

                        const transformedX =
                        rotationMatrix[0][0] * x
                        + rotationMatrix[0][1] * y
                        + rotationMatrix[0][2] * z;
                        const transformedY =
                        rotationMatrix[1][0] * x
                        + rotationMatrix[1][1] * y
                        + rotationMatrix[1][2] * z;
                        const transformedZ =
                        rotationMatrix[2][0] * x
                        + rotationMatrix[2][1] * y
                        + rotationMatrix[2][2] * z;

                        const translateX = this.#size * transformedX / 2;
                        const translateY = this.#size * transformedY / 2;
                        const scale = (transformedZ + 2) / 3;
                        const transform =
                        `translateX(${translateX}px) translateY(${translateY}px) scale(${scale})`;
                        const opacity = (transformedZ + 1.5) / 2.5;

                        this.#tags[i].style.transform = transform;
                        this.#tags[i].style.opacity = opacity;
                    }
                }

                #onMouseMove(e) {
                    const rootRect = this.#root.getBoundingClientRect();
                    const deltaX = e.clientX - (rootRect.left + this.#root.offsetWidth / 2);
                    const deltaY = e.clientY - (rootRect.top + this.#root.offsetHeight / 2);
                    const a = Math.atan2(deltaX, deltaY) - Math.PI / 2;
                    const axis = [Math.sin(a), Math.cos(a), 0];
                    const delta = Math.sqrt(deltaX ** 2 + deltaY ** 2);
                    const speed = delta / Math.max(window.innerHeight, window.innerWidth) / 10;

                    this.#rotationAxis = axis;
                    this.#rotationSpeed = speed;
                }

                #update() {
                    this.#rotationAngle += this.#rotationSpeed;

                    this.#updatePositions();
                }

                start() {
                    this.#update();

                    this.#frameRequestId = requestAnimationFrame(this.start.bind(this));
                }

                stop() {
                    cancelAnimationFrame(this.#frameRequestId);
                }
            }


            function main() {
                {
                    const root = document.querySelector('.tags-cloud');
                    const cloud = new TagsCloud(root);

                    cloud.start();
                }

                {
                    const cursor = document.getElementById('cursor');
                    const isActivated = false;

                    document.addEventListener('mousemove', (e) => {
                        if (!isActivated) {
                            cursor.classList.add('-activated');
                        }

                        cursor.style.transform =
                        `translateX(${e.clientX}px) translateY(${e.clientY}px)`;
                    });
                }
            }


            document.addEventListener('DOMContentLoaded', () => {
                main();
            });

        </script>    

        <!-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script> -->
        <!-- <script src="assets/js/jquery-1.9.1.min.js"></script> -->
        <script type="text/javascript">
          $(document).ready(function(){
           $('.list').click(function(){
              const value = $(this).attr('data-filter');
              if(value == 'all'){
                  $('.itemBox').show('1000');
              }
              else{
                  $('.itemBox').not('.'+value).hide('1000');
                  $('.itemBox').filter('.'+value).show('1000');
              }
          }); 

           $('.list').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
        });
       });
   </script>
   <script src="js1/jquery-3.3.1.slim.min.js"></script>
   <script src="js1/popper.min.js"></script>
   <script src="owl-carousel/owl.carousel.min.js"></script>
   <script src="js1/bootstrap.min.js"></script>
   <script src="js1/main.js"></script>

   <script>window.onscroll = function() {
      stickyHeader();
  };

  var header = document.getElementById("header");
  var sticky = header.offsetTop;

  function stickyHeader() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

</script>

<script type="text/javascript">
// Acc
    $(document).on("click", " .menu div", function() {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(" .menu div").removeClass("active");
        // $("  ul li").removeClass("active");

            $(this).addClass("active");
        // $(" ul").find("li:eq(" + numberIndex + ")").addClass("active");

    //     var listItemHeight = $(".naccs ul")
    //         .find("li:eq(" + numberIndex + ")")
    //         .innerHeight();
    //     $(" ul").height(listItemHeight + "px");
    // }
        };
    </script>



<script type="text/javascript">// script for tab steps
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    var href = $(e.target).attr('href');
    var $curr = $(".process-model  a[href='" + href + "']").parent();

    $('.process-model li').removeClass();

    $curr.addClass("active");
    $curr.prevAll().addClass("visited");
});
</script>

<script src="./form/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</body> 
<?php 
unset($_SESSION['errors']);
unset($_SESSION['notmatched']);
unset($_SESSION['postval']);
unset($_SESSION['typeofflat1']);
unset($_SESSION['approxbudget1']);
session_destroy();

?>
</html>