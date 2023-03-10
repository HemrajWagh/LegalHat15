
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
        <li class="breadcrumb-item" aria-current="page">Patent Registration</li>
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


 <div class="container" style="display: flex;" >    
<div class="row content">   
    <div class="col-lg-3 col-sm-6"   data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine"> 
        <div class="menu" id="menu"style="position: sticky; top: 100px;" >
            <a href="#topic1" style="text-decoration: none;" >
                <div class="list"><span class="light"></span><span>Patent</span></div>
            </a>
            <a href="#topic2" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Importance Of Patent</span></div>
            </a>
            <a href="#topic3" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Benefits Of Patent</span></div>
            </a>

        </div> 
    </div>
    <div class="col-lg-6 col-sm-6"   data-aos="fade-up"data-aos-duration="700" data-aos-offset="350"data-aos-easing="ease-in-sine" >
        <div id="topic1" style="margin-top:30px;">
            <h4> <span class="textHead"></span> What is Patent ? </h4>
            <p>Patent is a major part of Intellectual Property which grants its
                inventor, the right of exploiting its object exclusively, during a given
            time period.</p>
            
        </div>

        <div id="topic2">
            <h4><span class="textHead"></span>Importance Of Patent</h4>
            <p>It helps in stimulating the development of new technologies and
                also guarantees the investor's exploitation rights. It also promotes
                new era and various modifications required in the existing systems
            and process.</p>
            <p>The patent provides the user exclusive rights over his
                object; and this right is ultimately incorporated to the assets of a
                company. It is really helpful to the company for defining market
            strategies needed to hit the public target.</p>
            <p>However, patent rights
                are granted, only on the fulfillment of some requirements such as:
                Industrial applicability, inventive act and novelty with regard to the
            technological knowledge already disclosed.</p><p>Due to the creative
                effor ts in the technical field, the inventor who opts for Patent
                Registration also holds the temporary exploitation monopoly of his
            creation; which ultimately guarantees him a sort of market reserve.</p>
        </div><div id="topic3">
            <h4><span class="textHead"></span>Benefits Of Patent</h4>
            <p> ??? A patent gives you the right to stop others from copying,
                manufacturing, selling, and importing your invention without your
                permission. The existence of your patent may be enough on its
                own to stop others from trying to exploit your invention. If it does
                not, it gives you the right to take legal action to stop them exploiting
            your invention and to claim damages.</p>
            <p> ??? The patent also allows you to:
                sell the invention and all the intellectual property (IP) rights
                license the invention to someone else but retain all the IP rights
                discuss the invention with others in order to set up a business
            based around the invention.</p>
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
          <div class="col-lg-6 col-sm-6"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
              <img width="100%" src="images1/StepsManVert.jpg">     
          </div>         
          <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
            <h3><span class="textHead">Patent Procedure In India</span></h3>
            <ul class="nav nav-tabs process-model more-icon-preocess" style="left: 25px;" role="tablist">
             <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab" data-target="#discove"><i class="fa fa-search" aria-hidden="true"></i>
               <p>Appl. </p>
             </a></li>
             <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab" data-target="#Strateg"><i class="fa fa-send-o" aria-hidden="true"></i>
               <p>Publication</p>
             </a></li>
             <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab" data-target="#optimizatio"><i class="fa fa-qrcode" aria-hidden="true"></i>
               <p>Pre Grant of Opposition</p>
             </a></li>
            <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"data-target="#reportin"><i class="fa fa-clipboard" aria-hidden="true"></i>
             <p>Hearing/Grant </p>
              </a>
            </li>
             <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab" data-target="#conten"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
               <p>Term of Patent:
               </p>
             </a></li>
         </ul>
         
         <div class="tab-content" style="border: 1px solid #fbb900; ">
           <div role="tabpanel" class="tab-pane  show active" id="discove">
             <div class="design-process-content">
               <h3 class="semi-bold">Application</h3>
               <p>Preparation of Application for Design Registration and submission along with the necessary documents Attending to the proceedings and obtaining Provisional Papers after necessary follow up Publication in official journal</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="Strateg">
             <div class="design-process-content">
               <h3 class="semi-bold">Publication</h3>
               <p>An inventor may file request for examination for early publication of the patent. In case the same is not filed, the Indian Patent Office will publish the patent application within 18 months from the date of filing or date of priority whichever is earlier.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="optimizatio">
             <div class="design-process-content">
               <h3 class="semi-bold">Pre Grant of Opposition</h3>
               <p>At any time after a Patent is published and before it is granted any person may represent before the Patent office by filing an opposition against the grant of the patent.</p>
             </div>
           </div>
        <div role="tabpanel" class="tab-pane" id="reportin">
          <div class="design-process-content">
             <h3>Hearing/Grant</h3>
                <p>The Patent office may call for a hearing to seek clarifications from the applicant on the requirements on application filed and reply given by the applicant. </p>
                <p>If the application for Patent is found in order for grant, the Patent Office shall grant the Patent and Letters Patent is issued and the details of the grant of patent are published in the Patent Journal.</p>     
        </div>
          </div>
           <div role="tabpanel" class="tab-pane" id="conten">
             <div class="design-process-content">
               <h3 class="semi-bold">Term of Patent:</h3>
               <p>A patent is issued for a period of 20 years from the date of Application or priority date whichever is earlier.</p>              
             </div>
           </div>
</div>
</div>
</div>
</section>


<section id="about" class="about roomy-100">

        <div class="container ">
    <div class="row Acc">

            <div class="col-lg-6 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                      
                <ul class="accordian">
                          <h2 style="text-align: center;" ><span class="textHead">Types of Patent Applications that can be filed in India:</span> </h2>
                    <li>
                        <input type="radio" name="accordian" id="first" checked>
                        <label for="first">Patent Application enclosing Provisional Specification : </label>

                        <div class="content">
                              <p>When the research on invention is not completed fully, the inventor may file a Patent Application enclosing provisional specification followed by a Patent Application enclosing complete specification within 12 months.</p>
                        </div>
                    </li>

                    <li>
                        <input type="radio" name="accordian" id="second">
                        <label for="second">Patent Application with complete Specification :  </label>
                        <div class="content">
                          <p>The inventor may file a patent application with complete specification giving full details of the inventions with details of invention, drawings and diagrams.</p>
                    
      
                        </div>
                    </li>


                    <li>
                        <input type="radio" name="accordian" id="third">
                        <label for="third">Convention Patent Application :</label>
                        <div class="content">
                          <p>The inventor may file a patent application with complete specification giving full details of the inventions with details of invention, drawings and diagrams.</p>
                    
                    
                        </div>
                    </li>


                    <li>
                        <input type="radio" name="accordian" id="four">
                        <label for="four">PCT National Phase Patent Application : </label>
                        <div class="content">
                          <p>The inventor may file a patent application with complete specification giving full details of the inventions with details of invention, drawings and diagrams.</p>
                    
                    
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="accordian" id="five">
                        <label for="five">PCT International Patent Application :</label>
                        <div class="content">
                          <p>The inventor may file a patent application with complete specification giving full details of the inventions with details of invention, drawings and diagrams.</p>
                    
                    
                        </div>
                    </li>
                    
                </ul>
            </div>

            <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <img src="images1/StepsCheck.jpg"alt="">
            </div>
        </div>
    </div>
</section>


<br><br>         


    
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

<br><br><br>

<div class="container-fluid"style="display:flex;">
<div class="row">
        <div class="col-lg-6 col-sm-6" >
            <h3  style="text-align: center;"><span class="textHead">Patent Registratoin Steps</span> </h3>
            <img src="images1/PatentSteps870_440.png" alt="">
        </div>
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;"><span class="textHead">Patent Registratoin Process</span> </h3>
            <img src="images1/patentProcess.png" alt=""></div>
         </div>
</div>                                                                   

<?php include 'content.php' ?>

  <div class="container">
  <div class="row"style="background-image: url(images1/bkwhite.jpg);">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title text-center wow zoomIn">
                <h2 class="txtshadow" ><span class="textHead">Frequently Asked Questions</span></h2>
                <span></span>
                <p>If you have any doubts regarding Trademark then this article based on FAQs on Trademark Registration in India will clear all your doubts.</p>
            </div>
        </div>
    </div>
    <div class="row">               
        <div class="col-md-12">
            <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is a patent?
                            </a>
                        </h4>                    

                    </div>

                    <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                        <div class="panel-body">
                            <p>A patent is a statutory right for an invention granted by the State for a limited period of time, generally 20 years. The patent owner (patentee) enjoys monopoly rights and can legally exclude others from selling the patented product or process without his consent.
                            </p>
                        </div>
                    </div>
                </div>            
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                               What are the requirements for applying for a patent?
                           </a>
                       </h4>
                   </div>
                   <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                    <div class="panel-body">
                        <p>The requirements for applying for a patent are as follows.The invention must be novel
                          It must be non-obvious to a person skilled in the art.
                          It should have capability of an industrial Application.
                          It must not fall within the provision of Sec 3 & 4 of the patent Act 1970.
                          The applicant must disclose fully the methods of making the product or description of the process.
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                            What are the documents required for applying for a patent?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                    <div class="panel-body">
                        <p>TThe following are the requirements for applying for patent application;
                        </p>
                        <p>
                            Detailed description of the invention complete with diagrams & drawings
                        </p>
                        <p>
                            Details of the same invention/ Substantial same invention applied in other country PCT.
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour">
                            What are the advantages of PCT?
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="panel-body">
                        <p>PCT facilitates obtaining protection in many countries (member countries of PCT) at a time. Saves time and effort of the applicant seeking protection in multiple jurisdictions. The applicant has time of up to 30/31 months to decide as to which countries he wants to apply for patent.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFive">
                            What is the term of a patent? How many years the patent is valid?
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="panel-body">
                        <p>The term of a patent is generally 20 years from the date of application.</p>
                    </div>
                </div>
            </div>
        </div>
       </div> 
    </div>                                                                               
    </div><!--- END COL -->     
</div><!--- END ROW -->        



<?php include 'footer.php' ?>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63d62649c2f1ac1e20302960/1gnu8b4h6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
