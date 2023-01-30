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
           <li class="breadcrumb-item active" aria-current="page">Design Registration</li>
         </ol>
       </nav>
        </div>


        <div class="container">
        <div class="row">
            <div class="main_history fadeInUp" style="display:flex;">
                    <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine" style="border-right: 1px solid #ffb900;">
                     
                      <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">We Are Associated With </span> </h2>
                      <br> 
                        <div class="single_history_img">
                              
                                    <div class="container" style="display: flex;">
                            <div class="row ">
                                        <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                          <img src="images1/tiaup/axis.jpeg" style="border-radius: 10px;"   alt="Logo 1" width="100%" class="shadowbtn">
                                        </div>
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                          <img src="images1/tiaup/just.jpeg" style="border-radius: 10px; " alt="Logo 2" width="100%" class="shadowbtn">
                                        </div>
                                        
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                          <img src="images1/tiaup/paytm.jpeg" style="border-radius: 10px; " alt="Logo 5" width="100%" class="shadowbtn">
                                        </div>
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                          <img src="images1/tiaup/sulekha.jpeg"style="border-radius: 10px; " alt="Logo 4" width="100%" class="shadowbtn">
                                        </div>
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                          <img src="images1/tiaup/kotak.jpeg"style="border-radius: 10px; " alt="Logo 4" width="100%" class="shadowbtn">
                                        </div>
                                       
                                      </div>
                              </div>
                                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6"data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" style="border-left: 1px solid #ffb900;">
                        <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our Associated Partners </span> </h2> 
                        
                        <div class="single_history_img">
                            <!-- <div class="row "> -->
                           
                                    <div class="container" style="display: flex;">
                                        <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                          <img src="images1/Associate/logo1.jpeg" style="border-radius: 10px;"   alt="Logo 1" width="70%" class="shadowbtn">
                                        </div>
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                          <img src="images1/Associate/logo2.jpeg" style="border-radius: 10px; " alt="Logo 2" width="100%" class="shadowbtn">
                                        </div>
                                        
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                          <img src="images1/Associate/logo3.jpeg" style="border-radius: 10px; " alt="Logo 5" width="70%" class="shadowbtn">
                                        </div>
                                        <div class="col"style="display: flex; justify-content: center;align-items: center;">
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
        <hr style="border-bottom:2px solid #fbb900;">
          </div>
        </div>
        <br><br>

    <div class="row-fluid content">   
      <div class="container" style="display: flex;" >    
      <div class="col-lg-3 col-sm-6" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine"> 
        <div class="menu" id="menu" style="position: sticky; top: 100px;" >
          <a href="#topic1" style="text-decoration: none;" >
            <div class="list"><span class="light"></span><span>Design Registration </span></div>
          </a>
          <a href="#topic2" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Benefits</span></div>
          </a>
          <a href="#topic3" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Requirements</span></div>
          </a>
          <a href="#topic4" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Design Registration Rights</span></div>
          </a>
          <a href="#topic5" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Procedure</span></div>
          </a>
          <a href="#topic6" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Validity</span></div>
          </a><br>

        </div> 
      </div>
      <div class="col-lg-6 col-sm-6"  data-aos="fade-up"data-aos-duration="700" data-aos-offset="350"data-aos-easing="ease-in-sine">
        <div id="topic1">
          <h4><span class="textHead"></span> What is Design Registration ? </h4>
          <p>Under Design Act, 2000, A design must be some shape, configuration, pattern or omamentation or composition of lines or colors applied to such article in any form by any industrial process or means but does not include any mode or principle of construction or anything which is in Trade or Property mark or artistic work.</p>
          <p>Industrial designs refer to creative activity which result in the omamental or formal
            appearance of a product and design right refers to a novel or original design that is
            accorded to the proprietor of a validly registered design. Industrial designs are an
            element of intellectual property.
          </p>

        </div>
        <div id="topic2">
          <h4><span class="textHead"></span> Benefits </h4>
          <ul> <li>        
            Design registration in India gives the owner, a monopoly on his or her product, Le the right for a limited period to stop others from making, using or selling the product without their permission and is additional to any design right or copyright protection that may exist automatically in the design.
          </li></ul>
          <ul><li>
           Designs should not be seen as an alternative to patents but as a complementary protection.
         </li></ul> 
         <ul><li>
          Design registration is cheaper to obtain than patent protection and the application process is short.
        </li></ul>

      </div>
      <div id="topic3">
        <h4><span class="textHead"></span>Design Registration Rights</h4>

        <p>A registered design brings the exclusive right to make, offer, put on the market import, export, and use of stock any product to which the design has been applied or is incorporated, or to let others use the design under terms agreed with the registered owner, in the UK and the Isle of Man.</p>


      </div>
      <div id="topic4">
        <h4><span class="textHead"></span>Requirements</h4>
        <p>The Application for Design Registration is to be filed at Kolkata : </p> 
        <div class="row"> 
          <div class="container text-center">
           <div class="row align-items-center">
             <div class="col" >
               <div>
                 <img src="images1/camera.png">
               </div>
               <h5>Photos: 7 sets from five or six different angles depending on the product</h5>
             </div>
             <div class="col" >
               <div>
                 <img src="images1/noc.png">
               </div>
               <h5>From 1 (six copies) for each design registration. </h5>
             </div>

           </div>
         </div>
       </div>   
     </div><br>
     <div id="topic5">
      <h4><span class="textHead"></span>Procedure</h4>
      <ul>
       <li> <b>Application - </b>  Preparation of Application for Design Registration and submission along with the necessary documents Attending to the proceedings and obtaining Provisional Papers after necessary follow up
        Publication in official journal
      </li>
    </ul>
    <ul>
      <li><b>Opposition</b>, if any Examination</li>
    </ul>
    <ul>
     <li><b>Acceptance</b></li>
   </ul> 
   <ul>
     <li><b>Registration Certificate</b> </li>
   </ul>

 </div>
 <br>
 <div id="topic6">
  <h4><span class="textHead"></span>Validity</h4>
  <p>A design registration will initially last for 10 years from the filing date of the application and may be extended to further for a second period of 5 years. </p>
  <p>Thus the maximum period of registered design is 15 years.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6" data-aos="fade-left"data-aos-offset="350"data-aos-easing="ease-in-sine">
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
<br><br><br>
  


        <section class="design-process-section" id="process-tab">
         <div class="container" >
          <div class="col-lg-6 col-sm-6"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"style="display: flex;">
              <img width="100%" src="images1/StepDr870700.jpg" style="display: flex; justify-content: center;align-items: center;">     
          </div>         
          <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
            <h3 class="" > <span class="textHead">Procedure for Registration of Design in India</span></h3>
            <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
             <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab" data-target="#discove"><i class="fa fa-search" aria-hidden="true"></i>
               <p>Filing</p>
             </a></li>
             <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab" data-target="#Strateg"><i class="fa fa-send-o" aria-hidden="true"></i>
               <p>Examination</p>
             </a></li>
             <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab" data-target="#optimizatio"><i class="fa fa-qrcode" aria-hidden="true"></i>
               <p>Registration</p>
             </a></li>
             <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab" data-target="#conten"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
               <p>Publication
               </p>
             </a></li>
         <!-- <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"data-target="#reportin"><i class="fa fa-clipboard" aria-hidden="true"></i>
             <p>Reporting</p>
           </a></li> -->
         </ul>
         
         <div class="tab-content" style="border: 1px solid #fbb900; ">
           <div role="tabpanel" class="tab-pane  show active" id="discove">
             <div class="design-process-content">
               <h3 class="semi-bold">Filing an application</h3>
               <p>The applicant / applicant’s advocate needs to file prescribed forms and fees and four to seven copies of representation of a Design depending upon the article to be registered.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="Strateg">
             <div class="design-process-content">
               <h3 class="semi-bold">Examination of an application</h3>
               <p>The Design office will examine a application and will send a report citing observations and objections to the registration of design to Design Office. The applicant thereafter must reply to the examination report.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="optimizatio">
             <div class="design-process-content">
               <h3 class="semi-bold">Registration</h3>
               <p>The Patent office will issue the certificate of registration after the objections have removed and the application is accepted.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="conten">
             <div class="design-process-content">
               <h3 class="semi-bold">Publication</h3>
               <p>The Patent Officer will notify in the Patent Office Journal, the facts relating to the registration. Forms and fees for the Registration of Design in India</p>              
             </div>
           </div>
 <!-- <div role="tabpanel" class="tab-pane" id="reportin">
     <div class="design-process-content">
       <h3>Reporting</h3>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. </p>
   </div>
 </div> -->
</div>
</div>
</div>
</section>

       

    <section id="about" class="about roomy-100">

            <div class="container">
        <div class="row Acc">

                <div class="col-lg-6 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                          
                    <ul class="accordian ">
                        <h2 style="text-align: center;" ><span class="textHead">Requirements for filing Application</span> </h2>
                        <li>
                            <input type="radio" name="accordian" id="first" checked>

                            <label for="first">Basic Requirements : </label>

                            <div class="content">
                                  <p>Novelty : A design is capable of being registered only if it is novel, new or original. A design is stated to be new if it is not already published anywhere in the world or does not form part of the public domain.</p>

                                  <p>Since as per the Act the Design is always in relation to an article and since the definition of a article includes an article or any part thereof capable of being made and sold separately, the requirement of a design to be registered must be in respect of an article capable being made and sold separately.</p>
                                
                            </div>
                        </li>

                        <li>
                            <input type="radio" name="accordian" id="second">
                            <label for="second">Requirements for filing Design Application</label>
                            <div class="content">
                         
                              <p>Applicant: (Firm / Company / Individual) :</p>  
                              <p>Address, Tel. and Email :</p>

                              <p>Full Name of the signatory with Father`s / Husband`s Name : </p>
                              <p>Names and residential addresses of Proprietor / Partners (in case of company, address of registered office of the company)</p>
                              <p>Photos: 5 sets from four or five different angles depending on the product</p>
                              <p>Drawings of the Design</p >
                              <p>Brief statement of novelty of the Design</p> 
                        
                            </div>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <img src="images1/StepsCheck.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    
 <style type="text/css">.swiper {


      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 75%;
      height: 100%;
      object-fit: cover;
    }
  </style> 

<div class="container">
<div class="swiper mySwiper" >
    <div class="swiper-wrapper"style="display:flex;">
      <div class="swiper-slide"> <img src="images1/logo/activeLogo.png"></div>
      <div class="swiper-slide"> <img src="images1/logo/mamaLogo.png"></div>
      <div class="swiper-slide"><img src="images1/logo/meatLogo.png"></div>
      <div class="swiper-slide"><img src="images1/logo/spiceLogo.png"></div>
      <div class="swiper-slide"><img src="images1/logo/vrukshaLogo.png"></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div> 
<script>
    var swiper = new Swiper(".mySwiper", {
      // effect: "coverflow",
      // slidesPerView: 3,
      // spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
              delay: 50,
              disableOnInteraction: false,
            },
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
    
 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <style>.owl-carousel {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}

.owl-carousel .owl-item {
  flex: 0 0 auto;
}

.owl-carousel .owl-item img {
  width: 100%;
/*  margin:  0PX;*/
}
</style>  
    <!-- <div class="owl-carousel owl-theme">
      <div class="owl-item">
        <img src="images1/logo/activeLogo.png">
      </div>
      <div class="owl-item">
        <img src="images1/logo/mamaLogo.png">
      </div>
      <div class="owl-item">
        <img src="images1/logo/meatLogo.png">
      </div>
      <div class="owl-item">
        <img src="images1/logo/spiceLogo.png">
      </div>
      <div class="owl-item">
        <img src="images1/logo/vrukshaLogo.png">
      </div>
    </div> -->
    <script type="text/javascript">
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    </script>
    <!-- <script>$(document).ready(function(){
  $('.owl-carousel').owlCarousel();
});</script> -->

      <section id="info1">
     <!--  <div class="row">
        <div class="container">
          <div class="col-lg-6 col-sm-6" >
            <h3 style="text-align: center;">Patent Registratoin Steps</h3>
            <img src="images1/PatentSteps870_440.png" alt="">
          </div>
          <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Patent Registratoin Process</h3>
            <img src="images1/patentPrcesure.png" alt=""></div>
          </div>
        </div>  -->
      </section> 
      <br><br>
      <section id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
        <div class="container" style="display: flex;" >
          <div class="col-lg-6"><img src="images1/man.png" width="60%"></div>
          <div class="col-lg-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a></div>
        </div>
      </section>  
      <br><br><br><br>

      <section id="info2" style="box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);"  >
      <br><br>        
          <div class="container">
        <div class="row">
            <div class="main_history fadeInUp">
              <div class="col-lg-6 col-sm-6" style="display: flex; align-items: center;justify-content: center;" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_img">
                <h3 style="text-align: center;">FLOWCHART</h3>
                  <img width="100%" src="images1/DMfLOWCHART.png">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6" style="display: flex; align-items: center;justify-content: center;" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_img">
                  <img width="100%" src="images1/StepsManVert.jpg">
                </div>
              </div>

              <!-- <div class="col-lg-6 col-sm-6 " style="display: flex; align-items: center;justify-content: center;" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_content">
                  <div class="head_title"style="margin-right:0px; border-left:4px solid #ffb900;align-items: center;justify-content: center;" >
                    <h2 style="margin-left: 20px;" >A GOLDEN LEGACY OF OVER <br> 5 DECADES</h2>
                  </div>
                  <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.</p>
                  <p>There is also a range of non-conventional trademarks comprising marks which do not fall into these standard categories, such as those based on Color, smell, or sound. </p>
                  <a href="" class="btn btn-lg shadowbtn txtshadow"style="margin-right:0px; border-left:4px solid #ffb900;">BROWSE OUR WORK</a>
                </div>
              </div> -->
            </div>
          </div>
        </div> 
      <br><br>
      </section>         



      <section  class=""    id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);"  >

               <section class="info">
                  <div class="container">
                      <h2 class="txtshadow num" style="color: #ffb900;text-align: center;" >Awards & Achievement</h2>
                  </div>
                 <!-- <h1>Awards &mdash; Achievments </h1> -->
               </section>
               <br>
               <section class="cards-wrapper">
                 <div class="cardA-grid-space">
                   <!-- <div class="num">LEGAL TEAM</div> -->
                   <a class="cardA" href="#" style="background-image: url(images1/Awards/IndianLaw.jpeg)">
                     <div style="display: flex;">
                       <!-- <div class="tags"> -->
                        <img src="images1/Awards/IndianLaw.jpeg" style="border-radius: 0px 20px;" alt="">
                     <!-- <h4 class="tag">Adv. Abbas All Qazi B.Sc.</h4>
                       <p >A versatile lawyer by profession with more than 25 years of experience In Civil, Criminal and Intellectual property matters. At Flywings he heads the legal department.</p>
                        <h4>Adv. P. S Joshi (B.Com) LL.M. A</h4>
                       <p>A dynamic lawyer with more than 10 years of experience specially in IPR Matters and also practicing at High Court in Mumbai. At Flywings he takes care of all IPR related matters. Adv. D.S Shah (M.Com), LL.B., ACS. A dedicated lawyer and also a certified Company Secretary by proffession. At Flywings he takes care of all Company formation matters.
                       <div class="date">6 Oct 2017</div>
                       <div class="tags">
                         <div class="tag">HTML</div>
                       </div> --> 
                     </div>
                   </a>
                 </div>
                 <div class="cardA-grid-space">
                   <!-- <div class="num">MARKETING & RESEARCH TEAM</div> -->
                   <a class="cardA" href="#" style="background-image: url(images1/Awards/msme.jpg)">
                     <div>
                      <img src="images1/Awards/msme.jpg"style="border-radius: 0px 20px;" alt="">
                       <!-- <h1>Adv. P. S Joshi (B.Com) LL.M. A</h1>
                       <p>A dynamic lawyer with more than 10 years of experience specially in IPR Matters and also practicing at High Court in Mumbai. At Flywings he takes care of all IPR related matters. Adv. D.S Shah (M.Com), LL.B., ACS. A dedicated lawyer and also a certified Company Secretary by proffession. At Flywings he takes care of all Company formation matters.</p>
                       <div class="date">6 Oct 2017</div>
                       <div class="tags">
                         <div class="tag">HTML</div>
                       </div> -->
                     </div>
                   </a>
                 </div>
                 
                 <div class="cardA-grid-space">
                   <!-- <div class="num">03</div> -->
                   <a class="cardA" href="#" style="background-image: url('images1/Awards/Achievers.jpeg')">
                     <div>
                      <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt="">

                       <!-- <h1>Links, images and about file paths</h1>
                       <p>Learn how to use links and images along with file paths…</p>
                       <div class="date">14 Oct 2017</div>
                       <div class="tags">
                         <div class="tag">HTML</div>
                       </div> -->
                     </div>
                   </a>
                 </div>
                        <div class="cardA-grid-space">
                          <!-- <div class="num">LEGAL TEAM</div> -->
                          <a class="cardA" href="#" style="background-image: url(images1/Awards/award.png)">
                            <div style="display: flex;">
                              <!-- <div class="tags"> -->
                               <img src="images1/Awards/award.png" style="border-radius: 0px 20px;" alt="">
                 <!--         <h4 class="tag">Adv. Abbas All Qazi B.Sc.</h4>
                              <p >A versatile lawyer by profession with more than 25 years of experience In Civil, Criminal and Intellectual property matters. At Flywings he heads the legal department.</p>
                               <h4>Adv. P. S Joshi (B.Com) LL.M. A</h4>
                              <p>A dynamic lawyer with more than 10 years of experience specially in IPR Matters and also practicing at High Court in Mumbai. At Flywings he takes care of all IPR related matters. Adv. D.S Shah (M.Com), LL.B., ACS. A dedicated lawyer and also a certified Company Secretary by proffession. At Flywings he takes care of all Company formation matters.
                              <div class="date">6 Oct 2017</div>
                              <div class="tags">
                                <div class="tag">HTML</div>
                              </div> --> 
                            </div>
                          </a>
                        </div>
                 <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
               </section>
                 <br> <br>
          <div class="container">
            <div class="row" >    
              <div class="col-lg-12" style="display:flex; flex-direction: column; align-items: center;justify-content: center; ">
                <!-- <h1>What We Do?</h1> -->
                <!-- Section's title goes here -->
                <h5 class="txtshadow num" style="color: #ffb900;text-align: center;">DIFFERENT TYPES OF TRADEMARKS THAT CAN BE REGISTERED IN INDIA</h5>
                <hr class="new1">
                <!--Simple description for section goes here. -->
              </div> 
            </div>
          </div> 

          <div class="container">
            <div class="row-fluid">
                          <!-- <div class="linebtn" > 
                              <div class="col-lg-12 col-md-8 col-sm-12 ">
                                  <ul>
                                      <li class="list active" data-filter="all"><strong>All</strong></li>
                                      <li class="list" data-filter="2022"><strong>YEAR 2021-22</strong></li>
                                      <li class="list" data-filter="2023"><strong>YEAR 2022-23</strong></li>
                                  </ul>
                              </div>
                            </div> -->


                           

                              <div class="row line">
                                  <div class="col-md-3 col-sm-12">
                                      <div class=" card11 text-center">
                                      <a href="http://127.0.0.1/LegalHat15/trademark.php">
                                          <!-- <div class="oval"><img class="card-img-top" src="images1/isoRg.png" alt=""></div> -->
                                          <div class="card-body">
                                              <h3 class="card-title">TRADEMARK REGISTRATION</h3>
                                              <h6 class="card-title">"Don't let someone else steal your shine - register your trademark today !"</h6>

                                          </div>
                                      </a>
                                      </div>
                                  </div>  
                                  <div class="col-md-3 col-sm-12">
                                      <div class="card11 text-center" >

                                        <!-- <a href="#" target="_blank" style="text-decoration: none;" rel="noopener"> -->
                                          <a href="http://127.0.0.1/LegalHat15/copyright.php">
                                          <div class="card-body">
                                              <h3 class="card-title">COPYRIGHT REGISTRATION</h3>
                                              <h6 class="card-title">"Protect your creations,Secure your rights, register your copyright."</h6>  
                                          </div>
                                          </a>
                                      <!-- <h5 class="txtshadow zoom-in">TRADEMARK REGISTRATION</h5>
                                      <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                      eget.</p> -->
                                      <!-- </a>   -->
                                  </div>
                              </div>  


                              <div class="col-md-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <a href="http://127.0.0.1/LegalHat15/design-registration.php">
                                      <div class="card-body">
                                          <h3 class="card-title">DESIGN REGISTRATION</h3>
                                          <h6 class="card-title">"Safeguard your intellectual property, register your designs."</h6>  
                                      </div>           
                                      </a>
                                  </div>
                              </div>


                              <div class="col-md-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <a href="http://127.0.0.1/LegalHat15/patent.php">
                                      <div class="card-body">
                                          <h3 class="card-title">PATENT REGISTRATION</h3>
                                          <h6 class="card-title">"Protect your inventions, register your patent"</h6>  
                                      </div>           
                                      </a>
                                  </div>                        
                              </div>

                              <div class="col-md-3 col-sm-12 txtshadow">
                                  <div class="card11 text-center " >
                                      <a href="http://127.0.0.1/LegalHat15/iso.php">
                                      <div class="card-body ">
                                          <h3 class="card-title">ISO REGISTRATION</h3>
                                          <h6 class="card-title">"ISO registration: a sign of quality and excellence"</h6>  
                                      </div>           
                                      </a>
                                  </div>  
                              </div>

                              <div class="col-md-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <a href="http://127.0.0.1/LegalHat15/web-services.php">
                                      <div class="card-body">
                                          <h3 class="card-title">WEB SERVICES</h3>
                                          <h6 class="card-title">"The web, made easy with our services"</h6>  
                                      </div>           
                                      </a>
                                  </div>  
                              </div>

                              <div class="col-md-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <a href="http://127.0.0.1/LegalHat15/private-limited.php">
                                      <div class="card-body">
                                          <h3 class="card-title">FORMATION OF COMPANIES</h3>
                                          <h6 class="card-title">"Starting a business? Let us handle the details."</h6>  
                                      </div>           
                                      </a>
                                  </div> 
                              </div>
                              <div class="col-md-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <div class="card-body">
                                          <h3 class="card-title">BRANDING SERVICES</h3>
                                          <h6 class="card-title">"Let us help you tell your brand's story."</h6>  
                                      </div>           
                                  </div> 
                              </div>

                          
                            </div>
                          </div>
                         </div>
      </section>

     <br><br><br>


           <div class="container">
         <div class="row">
             <div class="main_history fadeInUp" style="display:flex;">
                     <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                         <div class="single_history_img">
                                     <div class="container" style="display: flex;">
                             <div class="row ">
                                         <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                           <img src="images1/logo/active.jpeg" style="border-radius: 5px;"   alt="Logo 1" width="100%" class="shadowbtn">
                                         </div>
                                         <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                           <img src="images1/logo/bhumi.jpeg" style="border-radius: 5px; " alt="Logo 2" width="100%" class="shadowbtn">
                                         </div>
                                         
                                         <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                           <img src="images1/logo/meatbox.jpeg" style="border-radius: 5px; " alt="Logo 5" width="100%" class="shadowbtn">
                                         </div>
                                         <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                           <img src="images1/logo/logica.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                                         </div>
                                         <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                           <img src="images1/logo/png.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                                         </div>
                                        
                                       </div>
                               </div>
                               <br>
                                      <div class="container" style="display: flex;">
                              <div class="row ">
                                          <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                            <img src="images1/logo/mamaLogo.png" style="border-radius: 5px;"   alt="Logo 1" width="100%" class="shadowbtn">
                                          </div>
                                          <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                            <img src="images1/logo/kiranaLogo.png" style="border-radius: 5px; " alt="Logo 2" width="100%" class="shadowbtn">
                                          </div>
                                          <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                            <img src="images1/logo/vrukshaLogo.png" style="border-radius: 5px; " alt="Logo 3" width="100%" class="shadowbtn">
                                          </div>
                                          <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                            <img src="images1/logo/twotech.jpeg" style="border-radius: 5px; " alt="Logo 5" width="100%" class="shadowbtn">
                                          </div>
                                        
                                        </div>
                                 </div>
                                 <br>
                                   <div class="container" style="display: flex;">
                                <div class="row ">
                                            <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/logo/dudhraja.jpeg" style="border-radius: 5px; " alt="Logo 3" width="35%" class="shadowbtn">
                                             </div>
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                            <img src="images1/logo/spicelogo.png" style="border-radius: 5px; " alt="Logo 2" width="45%" class="shadowbtn">
                                          </div>
                                           
                                            
                                            <!-- <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                              <img src="images1/logo/soar.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                                            </div> -->
                                            
                                 </div>
                                </div>                

                         </div>
                     </div>

                     <div class="col-lg-6 col-sm-6 "data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" style=" display: flex; align-items: center; justify-content: center;">
                         <div class="single_history_content" >
                             <div class="head_title"style="margin-right:0px; ">
                                 <h2 style="margin-left: 20px; " class="textHead"> "CLIENTS FIRST , ALWAYS" </h2>
                             </div>
                             <!-- <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.</p>

     <p>There is also a range of non-conventional trademarks comprising marks which do not fall into these standard categories, such as those based on Color, smell, or sound. </p> -->
                                 <!-- <a href="" class="btn btn-lg shadowbtn txtshadow"style="margin-right:0px; border-left:4px solid #ffb900;">BROWSE OUR WORK</a> -->
                         </div>
                     </div>
             </div>
           </div>
         </div>          
         <br><br><br> <br>

             <div class="container">
             <div class="row">
                 <div class="main_history fadeInUp" style="display:flex;">
                         <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                          
                           <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">We Are  <br> Associated With </span> </h2>
                           <br> 
                             <div class="single_history_img">
                                 <div class="row ">
                                   
                                         <div class="container" style="display: flex;">
                                             <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                               <img src="images1/tiaup/axis.jpeg" style="border-radius: 5px;"   alt="Logo 1" width="100%" class="shadowbtn">
                                             </div>
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/tiaup/just.jpeg" style="border-radius: 5px; " alt="Logo 2" width="100%" class="shadowbtn">
                                             </div>
                                             
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/tiaup/paytm.jpeg" style="border-radius: 5px; " alt="Logo 5" width="100%" class="shadowbtn">
                                             </div>
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/tiaup/sulekha.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                                             </div>
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/tiaup/kotak.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                                             </div>
                                            
                                           </div>
                                   </div>
                                             
                             </div>
                         </div>
                         <div class="col-lg-6 col-sm-6"data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                             <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our  <br> Associated Partners </span> </h2> 
                             
                             <div class="single_history_img">
                                         <div class="container" style="display: flex;">
                                 <div class="row ">
                                
                                             <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                               <img src="images1/Associate/logo1.jpeg" style="border-radius: 5px;"   alt="Logo 1" width="80%" class="shadowbtn">
                                             </div>
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/Associate/logo2.jpeg" style="border-radius: 5px; " alt="Logo 2" width="80%" class="shadowbtn">
                                             </div>
                                             
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/Associate/logo3.jpeg" style="border-radius: 5px; " alt="Logo 5" width="80%" class="shadowbtn">
                                             </div>
                                             <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/Associate/logo4.jpeg"style="border-radius: 5px; " alt="Logo 4" width="80%" class="shadowbtn">
                                             </div>
                                            <!--  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                               <img src="images1/tiaup/png.jpeg"style="border-radius: 5px; " alt="Logo 4" width="100%" class="shadowbtn">
                                             </div>
                                             -->
                                           </div>
                                   </div>
                                             
                             </div>
                         </div>       
                 </div>
               </div>
             </div>

             <br><br><br>

             <section id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
               <div class="container" style="display: flex;" >
                 <div class="col-lg-6"><img src="images1/man.png" width="60%"></div>
                 <div class="col-lg-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a></div>
               </div>
             </section>  
             <br><br><br><br>    

        <div class="container">
        <div class="row"style="background-image: url(images1/bkwhite.jpg);">
          <div class="row">
              <div class="col-md-12 col-sm-6">
                  <div class="section-title text-center wow zoomIn">
                      <h2 style="text-align: center;font-family: Lato-Medium;
                      font-weight: 900!important;
                      position: relative;
                      margin: 30px 0px;
                      text-shadow: 0px 3px 12px #c3c3c3;">Frequently Asked Questions</h2>
                      <span></span>
                      <p>If you have any doubts regarding Trademark then this article based on FAQs on Trademark Registration in India will clear all your doubts.</p>
                  </div>
              </div>
          </div>
          <div class="row">               
            <div class="col-md-12 col-sm-6" >
              <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What is an industrial design?
                      </a>
                    </h4>                    

                  </div>

                  <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                    <div class="panel-body">
                      <p>Industrial design is a composition of two-dimensional lines or colors, or any three dimensional shape that gives an industrial product, or a product of traditional crafts, a special appearance provided that this is not only for functional or technical purpose including textile designs. A design is what makes an article attractive and appealing. Hence, it adds to the commercial value of a product and increases its marketability.
                      </p>
                    </div>
                  </div>
                </div>            
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                      What is the Procedure for registration of a Design in India?
                     </a>
                   </h4>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                  <div class="panel-body">
                    <p>Any person, who claims to be the owner of a new or original design that is not previously published in India, can apply for registration of design. The application can be made with the Indian Patent Office; an examination report may be issued. Within a stipulated period of six months from the date of filing of a design application a reply is required to be filed in response to the objections raised in the examination report, the response may be accepted or rejected by the controller. If rejected an opportunity for amending the application or submitting further replies is provide. Once the objection is complied with, the application is accepted and a certificate of registration is issued. </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                      Where and How to apply for Design Registration?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                  <div class="panel-body">
                    <p>
                      Any person interested may apply for a registration of Design by filing an application on the prescribed format along with the prescribed fees.
                    </p>
                    <p> An application for registration of Design can be filed at Kolkata it is a head office for handling the Design Application.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour">
                     What is a Register of Designs?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="panel-body">
                    <p>Following are the functions of Trademark </p>
                    <p>The Register of Designs is a document maintained by The Patent Office, Kolkata as required . </p>
                    <p>It contains the design number, class number, date of filing, name and address of Proprietor and such other matters as would affect the validity of proprietorship of the design and it is open for public inspection on payment of prescribed fee & extract from register may also be obtained on request with the prescribed fee. </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFive">
                     Design Infringement
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="panel-body">
                    <p>Registered design can be infringed by the unauthorized manufacture for commercial use or the unauthorized sale or hire of articles in cooperating or embodying the registered design.</p>
                    <p>Legal action can only be taken against an infringer once the certificate of Registration has issued. Court proceedings are initiated in the High Court. Appeals are possible to the court of Appeal.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!--- END COL -->     
        </div><!--- END ROW -->        

      </div>

    </div>


<!-- <div class="row">
    <div class="container" style="display: flex;"      >
        <div class="col-lg-6 ">
            <ul class="accordian">
                <li>
                    <input type="radio" name="accordian" id="first" checked>
                    <label for="first">Products</label>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore nam provident fuga.
                        </p>
                    </div>
                </li>

                <li>
                    <input type="radio" name="accordian" id="second">
                    <label for="second">Products</label>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore nam provident fuga.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordian" id="third">
                    <label for="third">Products</label>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore nam provident fuga.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-sm-12 "   >
                <img src="images1/trademark-doc.webp "width="500"   alt="">
        </div>
    </div>
  </div> -->

  <br><br>
  


              <!-- Contact section edn -->
              <!-- Footer section start -->
                                    <!-- <div class="footer">
                                        <pShared by <i class="fa fa-love"></i><a href="#">hemraj</a>
                                        </p>
                                      </div> -->
                                      <!-- Footer section end -->
                                      <!-- ScrollUp button start -->

  <?php include'footer.php' ?>