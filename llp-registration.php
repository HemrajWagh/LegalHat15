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

 <?php include "header.php" ?>

       <div class="container">                  
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
           <li class="breadcrumb-item" aria-current="page">LLP Registration</li>
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
            <div class="list"><span class="light"></span><span>What is LLP ? </span></div>
          </a>
          <a href="#topic2" style="text-decoration: none;">
            <div class="list"><span class="light"></span><span>Documents Required </span></div>
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
      <div class="col-lg-6"  data-aos="fade-up"data-aos-duration="700" data-aos-offset="350"data-aos-easing="ease-in-sine">
        <div id="topic1">
          <h4 class="textHead"> What is LLP ? </h4>
          <p>Limited Liability Partnership entities, the world wide recognized form of business organization has now been introduced in India by way of Limited Liability Partnership Act, 2008. </p>
          <p>A Limited Liability Partnership, popularly known as LLP combines the advantages of both the Company and Partnership into a single form of organization.
          </p>

        </div>
        <br>  <br>  
        <div id="topic2">
           <h4 class="textHead">DOCUMENT REQUIRED </h4>
                      <br>
                      <div class="row"> 
                       <div class="container text-center">
                        <div class="row align-items-center">
                          <div class="col" >
                              <div>
                                  <img src="images1/camera.png">
                              </div>
                              <h5>Two Colour Photographs of Promoters/Individuals/ Company/ Director</h5>
                          </div>
                          <div class="col" >
                              <div>
                                  <img src="images1/pan-card.png">
                              </div>
                              <h5>PAN Card of each Shareholders and directors</h5>
                          </div>
                          <div class="col" >
                           <div>
                               <img src="images1/electricity-bill.png">
                           </div>
                           <h5>Identity Proof (Voter ID / Driving License/ Passport)</h5>
                       </div>
                                                
                   </div>
               </div>
           </div>
           <br>
           <div class="row"> 
               <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col" >
                      <div>
                          <img src="images1/Aadhaar-Card.png">
                      </div>
                      <h5>Address Proof (Bank Statement / Electricity, Mobile, Telephone Bill)</h5>
                  </div>
                  <div class="col" >
                      <div>
                          <img src="images1/Address-Proof.png">
                      </div>
                      <h5>Proof of Registered Office</h5>
                  </div>
                  <div class="col" >
                   <div>
                       <img src="images1/Residential-Proof.png">
                   </div>
                   <h5>Utility Bill as proof must be Latest</h5>
               </div>
                                        
           </div>
          </div>
          </div>
      </div>
      <br>        <br>  
      <div id="topic3">
        <h4 class="textHead">Design Registration Rights</h4>

        <p>A registered design brings the exclusive right to make, offer, put on the market import, export, and use of stock any product to which the design has been applied or is incorporated, or to let others use the design under terms agreed with the registered owner, in the UK and the Isle of Man.</p>


      </div>
      <div id="topic4">
        <h4 class="textHead">Requirements</h4>
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
      <h4 class="textHead">Procedure</h4>
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
  <h4 class="textHead">Validity</h4>
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


      <!-- <section id="info1">
      <div class="row">
        <div class="container">
          <div class="col-lg-6 col-sm-6" >
            <h3 style="text-align: center;">Patent Registratoin Steps</h3>
            <img src="images1/PatentSteps870_440.png" alt="">
          </div>
          <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Patent Registratoin Process</h3>
            <img src="images1/patentPrcesure.png" alt=""></div>
          </div>
        </div> 
      </section>  -->
     
         <section class="design-process-section" id="process-tab">
               <div class="container" >
                <div class="col-lg-6 col-sm-6"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"style="display: flex;">
                    <img width="100%" src="images1/StepDr870700.jpg" style="display: flex; justify-content: center;align-items: center;">     
                </div>         
                <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
                  <h3 class="textHead" >Procedure</h3>
                  <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                   <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab" data-target="#discove"><i class="fa fa-search" aria-hidden="true"></i>
                     <p>Application </p>
                   </a></li>
                   <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab" data-target="#Strateg"><i class="fa fa-send-o" aria-hidden="true"></i>
                     <p>Opposition</p>
                   </a></li>
                   <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab" data-target="#optimizatio"><i class="fa fa-qrcode" aria-hidden="true"></i>
                     <p>Acceptance</p>
                   </a></li>
                   <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab" data-target="#conten"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                     <p>Registration Certificate
                     </p>
                   </a></li>
               <!-- <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"data-target="#reportin"><i class="fa fa-clipboard" aria-hidden="true"></i>
                   <p>Reporting</p>
                 </a></li> -->
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
                     <h3 class="semi-bold">Opposition</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                   </div>
                 </div>
                 <div role="tabpanel" class="tab-pane" id="optimizatio">
                   <div class="design-process-content">
                     <h3 class="semi-bold">Acceptance</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                   </div>
                 </div>
                 <div role="tabpanel" class="tab-pane" id="conten">
                   <div class="design-process-content">
                     <h3 class="semi-bold">Registration Certificate</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>              
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

      <br><br>         


      <section id="info2">
        <!-- <div class="row">
          <div class="container">
            <div class="main_history fadeInUp">
              <div class="col-lg-6 col-sm-6" style="display: flex; align-items: center;justify-content: center;" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_img">
                  <img width="100%" src="images1/DMfLOWCHART.png">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6" style="display: flex; align-items: center;justify-content: center;" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <div class="single_history_img">
                  <img width="100%" src="images1/StepsManVert.jpg">
                </div>
              </div> -->

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
       <!--      </div>
          </div>
        </div>  -->
      </section>         


<br><br>
      

      <section  class=""    id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);padding-bottom: 50PX; "  >

               <section class="info">
                  <div class="container">
                      <h2 style="color: #ffb900;text-align: center;" ><span class="textHead"></span> Awards & Achievement</h2>
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
                <h5 class="txtshadow num" style="color: #ffb900;text-align: center;"> <span class=""></span>Transforming your business with innovative solutions. </h5>
                <h5 class="txtshadow num" style="color: #ffb900;text-align: center;"> <span class=""></span>You may interested our other amazing services , making your dreams a reality . </h5>
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
               <br><br>

        <div class="row"style="background-image: url(images1/bkwhite.jpg);">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
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
            <div class="col-md-12">
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
                                            <div class="scrollup">
                                              <a href="#">
                                                <i class="icon-up-open"></i>
                                              </a>
                                            </div>



                                            <!-- ScrollUp button end -->
                                            <!-- Include javascript -->
                                            <script src="js/jquery.js"></script>
                                            <script type="text/javascript" src="js/jquery.mixitup.js"></script>
                                            <script type="text/javascript" src="js/bootstrap.js"></script>
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

                   <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
                   <script src="dropdown-19/js/popper.min.js"></script>
                   <script src="dropdown-19/js/bootstrap.min.js"></script>
                   <script src="dropdown-19/js/owl.carousel.min.js"></script>
                   <script src="dropdown-19/js/main.js"></script>


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

                <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
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

               <script src="js1/bootstrap.min.js"></script>
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