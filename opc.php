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
      <li class="breadcrumb-item" aria-current="page">OPC Registration</li>
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
         <div class="row ">

           <div class="container" style="display: flex;">
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
       <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our Associate Partners </span> </h2> 

       <div class="single_history_img">
         <div class="row ">

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
                         </div>

                       </div>
                     </div>       
                   </div>                        

                   <hr style="border-bottom:2px solid #fbb900;">
                 </div>
               </div>
               <br><br>
               <section id="theory" class="about roomy-100" >   
                <div class="container">    
                 <div class="row content">   
                   <div class="col-lg-3 col-sm-6" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" > 
                     <div class="menu" id="menu" style="position: sticky; top: 100px;" >
                       <a href="#topic1" style="text-decoration: none;" >
                         <div class="list"><span class="light"></span><span>What is One Person Company </span></div>
                       </a>
                       <a href="#topic2" style="text-decoration: none;">
                         <div class="list"><span class="light"></span><span>FEATURES</span></div>
                       </a>
                       <a href="#topic3" style="text-decoration: none;">
                         <div class="list"><span class="light"></span><span>ADVANTAGES</span></div>
                       </a>
                       <a href="#topic4" style="text-decoration: none;">
                         <div class="list"><span class="light"></span><span>MAJOR DRAWBACK / DISADVANTAGE</span></div>
                       </a>
                       <a href="#topic5" style="text-decoration: none;">
                         <div class="list"><span class="light"></span><span>PROCESS</span></div>
                       </a>

                     </div> 
                   </div>
                   <div class="col-lg-6" style="position: sticky; top: 100px;"   data-aos="fade-up"data-aos-duration="2000" data-aos-offset="350"data-aos-easing="ease-in-sine">

                     <div id="topic1">
                       <h4> <span class="textHead"></span> What is One Person Company ? </h4>
                       <p>As per provisions of section 2(62) of The Companies Act, 2013, “One Person Company" means
                       a company which has only one person as a member”.</p>
                       <p>The concept of One Person Company was introduced by The Companies Act, 2013. In a Private
                        Company, a minimum of 2 Directors and Members are required whereas in a Public Company, a
                      minimum of 3 Directors and a minimum of 7 members.</p>
                      <p>There is also a range of non-conventional trademarks comprising marks which do not fall into these standard categories, such as those based on Color, smell, or sound.A single person could not incorporate a
                        Company previously. But now as per Section 2(62) of the Company’s Act 2013, a company can
                        be formed with just 1 Director and 1 member. One Person Company (OPC) is a business entity
                        in which there is only one owner with limited liabilities who can act both as a shareholder as well
                      as the director. </p>

                    </div>
                    <div id="topic2">
                     <h4> <span class="textHead"></span>Features of One Person Company : </h4>
                     <li style="list-style-type: upper-roman;"> <b> Only One Person Required : </b>An OPC can be registered in India, by only one person, who shall act as the directors/shareholders of the company. The maximum number of directors of an OPC is 15 and the number of shareholder cannot go beyond one.</li style="list-style-type: upper-roman;">
                     <li style="list-style-type: upper-roman;"> <b> Resident Director : </b> One director of the company must be resident in India. A person is said to be resident if he or she stays in India for at least 182 days during the preceding financial year irrespective of their citizenship. The days of stay can be in phases.</li >
                     <li style="list-style-type: upper-roman;"> <b> Requirement of Minimum Capital : </b> Invest as per requirement of your business, and
                      there is no minimum capital requirement as such to be maintained in the company.
                      However, the government fee on company registration is calculated on the amount of
                    capital invested in company.</li >

                  </div>
                  <br>
                  <div id="topic3">
                   <h4> <span class="textHead"></span> ADVANTAGES OF ONE PERSON COMPANY : </h4>

                   <li style="list-style-type: upper-roman;"> <b> Separate Legal Entity : </b>One Person company is a separate legal entity and capable of
                   doing everything that an entrepreneur would do.</li>
                   <li style="list-style-type: upper-roman;"> <b> Easy Funding :  </b> Like a Private company, One Person Company can raise funds through
                    venture capital, financial institutions, angel investors etc. A One Person Company can
                  raise funds thus graduating itself to a private limited company.</li >
                  <li style="list-style-type: upper-roman;"> <b> Limited Liability : </b> Since the liability of the One Person Company is limited to the extent
                    of the value of the share you hold, the individual could take more risk in business without
                    affecting or suffering loss of personal assets. It is the encouragement to new, young and
                  innovative start-ups.</li >
                  <li style="list-style-type: upper-roman;"> <b> Minimum Compliances :  </b> One Person Company have to face little compliance burden as
                    compared to private limited companies , hence One Person Company can more focus on
                  other functional and core areas.</li >
                  <li style="list-style-type: upper-roman;"> <b> Other benefits :  </b> An One Person Company can avail the various benefits provided to
                    Small Scale Industries like lower rate of Interest on loans, easy funding from bank
                    without depositing any security to a certain limit, manifold benefits under Foreign Trade
                  policy and others. All these benefits can be boon to any business in initial years.</li >
                  <li style="list-style-type: upper-roman;"> <b> Greater Credibility :  </b> As an OPC needs to have its books audited annually, it has greater
                  credibility among vendors and lending institutions.</li ><br>

                </div>
                <div id="topic4">
                 <h4> <span class="textHead"></span>
                 MAJOR DRAWBACK / DISADVANTAGE OF ONE PERSON COMPANY :</h4>                        
                 <p>The MCA is skeptical about a single person in charge of a large corporation. Therefore, it
                  requires all OPCs to be converted into private limited or public limited companies on crossing a
                  certain revenue number. Currently, in case of an average turnover of Rs. 2 crore or more for the
                  three consecutive years or a paid-up capital of over Rs. 50 lakh, the OPC must mandatorily be
                converted into an OPC.</p>

              </div>
              <div id="topic5">
               <h4> <span class="textHead"></span>
               PROCESS OF REGISTRATION OF ONE PERSON COMPANY : </h4>                        
               <li style="list-style-type: upper-roman;"> <b> Apply for Digital Signature : </b>The first Step is to obtain the Digital Signature Certificate (DSC) of the proposed
                Director which required the following documents:
                <li > Address Proof</li>
                <li > Aadhaar card</li>
                <li > PAN card</li>
                <li > Photo</li>
                <li > Email Id</li>
                <li > Phone Number</li>
              </li><br>
              <li style="list-style-type: upper-roman;"> <b> Application for DIN : </b>This option is now available only in integrated form Spice while applying for
                incorporation of a company.
              </li>
              <br>
              <li style="list-style-type: upper-roman;"> <b> Name Approval Application : </b>
                <p>The next step while incorporating an OPC is to decide on the name of the Company. The
                name of the Company will be in the form of “ABC (OPC) Private Limited”.</p>
                <p>There are 2 options available for getting name approved by making application in Form
                  SPICe or by using RUN Web service of MCA by giving only 1 preferred name along
                with the significance of keeping that name.</p>
              </li>

              <li style="list-style-type: upper-roman;"> <b> Documents Required : </b>
                <p>We have to prepare the following documents which are required to be submitted to the
                ROC:</p> 
                <ul>
                  <li style="list-style-type: upper-alpha">Since there are only 1 Director and a member, a nominee on behalf of such person has
                    to be appointed because in case he becomes incapacitated or dies and cannot perform his
                    duties the nominee will perform on behalf of the director and take his place. His consent
                    in Form INC – 3 will be taken along with his PAN card, Voter ID/ Passport as ID proof
                  and Bank Statement / Utility bill as Address proof.</li>
                  <li style="list-style-type: upper-alpha"> Proof of the Registered office of the proposed Company along with the proof of
                  ownership and a NOC from the owner.</li>
                  <li style="list-style-type:upper-alpha">Consent of the proposed Director in Form DIR – 2.</li>
                </li> 
                <li style="list-style-type:upper-alpha">A declaration by the professional certifying that all compliances have been made.</li>
              </li>
            </ul>     
            <li style="list-style-type: upper-roman;"> <b> Filing of Forms with MCA : </b>
              <p>All these documents will be attached to SPICe Form, SPICe-MOA, SPICe-AOA and
                AGILE form along with the DSC of the Director and the professional, and will be
              uploaded to the MCA site for approval.</p>
            </li>

            <li style="list-style-type: upper-roman;"> <b> Issue of Certificate of Incorporation : </b>
              <p>On verification, the Registrar of Companies (ROC) will issue a Certificate of
                Incorporation and we can commence our business. Nowadays, the issue of Pan Number
                and TAN is done automatically at the time of incorporation of the Company. There is no
                need to make any separate application. The PAN Number and TAN come printed on the
                certificate of incorporation itself, and after the registration of the Company, E-Pan and
              Tan letter is sent via email.</p>
            </li>

          </div>

        </div>
        <div class="col-lg-3" data-aos="fade-left"data-aos-offset="350"data-aos-easing="ease-in-sine">
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
                     </section>    
                     <br><br><br>

                     <section class="design-process-section" id="process-tab">
                      <div class="container" >
                       <div class="col-lg-6 col-sm-6"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
<<<<<<< HEAD
                         <img width="100%" src="images1/stepOPC.png">     
=======
                         <img width="100%" src="images1/StepsFood.jpg">     
>>>>>>> 61e07c1f58219a44c4c5737c59ac1e88817838af
                       </div>         
                       <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
                         <h3 class="textHead num" >PROCESS OF REGISTRATION OF ONE PERSON COMPANY :</h3>
                         <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                          <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab" data-target="#discove"><i class="fa fa-search" aria-hidden="true"></i>
                            <p>Appl. for <br> Digi. Sigh</p>
                          </a></li>
                          <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab" data-target="#Strateg"><i class="fa fa-send-o" aria-hidden="true"></i>
                            <p>Appl. for <br> DIN</p>
                          </a></li>
                          <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab" data-target="#optimizatio"><i class="fa fa-qrcode" aria-hidden="true"></i>
                            <p>Name <br> Approval Appli.</p>
                          </a></li>
                          <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"data-target="#reportin"><i class="fa fa-clipboard" aria-hidden="true"></i>
                            <p>Forms with MCA</p>
                          </a>
                        </li>
                        <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab" data-target="#conten"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                          <p>Certificate <br> of Incorporation
                          </p>
                        </a></li>
                      </ul>

                      <div class="tab-content" style="border: 1px solid #fbb900; ">
                        <div role="tabpanel" class="tab-pane  show active" id="discove">
                          <div class="design-process-content">
                            <h3 class="semi-bold">Apply for Digital Signature :</h3>
                            <p>The first Step is to obtain the Digital Signature Certificate (DSC) of the proposed
                            Director which required the following documents:</p>
                            <li>Address Proof</li>
                            <li>Aadhaar card</li>
                            <li>PAN card</li>
                            <li>Photo</li>
                            <li>Email Id</li>
                            <li>Phone Number</li>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Strateg">
                          <div class="design-process-content">
                            <h3 class="semi-bold">Application for DIN :</h3>
                            <p>This option is now available only in integrated form Spice while applying for
                            incorporation of a company.</p>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="optimizatio">
                          <div class="design-process-content">
                            <h3 class="semi-bold">Name Approval Application:</h3>
                            <p>The next step while incorporating an OPC is to decide on the name of the Company. The
                            name of the Company will be in the form of “ABC (OPC) Private Limited”.</p>
                            <p>There are 2 options available for getting name approved by making application in Form
                              SPICe or by using RUN Web service of MCA by giving only 1 preferred name along
                            with the significance of keeping that name.</p>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reportin">
                         <div class="design-process-content">
                          <h3>Filing of Forms with MCA :</h3>
                          <p>All these documents will be attached to SPICe Form, SPICe-MOA, SPICe-AOA and
                            AGILE form along with the DSC of the Director and the professional, and will be
                          uploaded to the MCA site for approval.</p>
                          
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="conten">
                        <div class="design-process-content">
                          <h3 class="semi-bold">Issue of Certificate of Incorporation :</h3>
                          <p>On verification, the Registrar of Companies (ROC) will issue a Certificate of
                            Incorporation and we can commence our business. Nowadays, the issue of Pan Number
                            and TAN is done automatically at the time of incorporation of the Company. There is no
                            need to make any separate application. The PAN Number and TAN come printed on the
                            certificate of incorporation itself, and after the registration of the Company, E-Pan and
                          Tan letter is sent via email.</p>              
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <section id="about" class="about roomy-100">

               <div class="container " style="">
                 <div class="row Acc" >

                   <div class="col-lg-6 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">

                     <ul class="accordian">
                       <h2 style="text-align: center;" ><span class="textHead">ADVANTAGES / DISADVANTAGE :</span> </h2>
                       <li>
                         <input type="radio" name="accordian" id="first" checked>
                         <label for="first">ADVANTAGES OF ONE PERSON COMPANY :</label>

                         <div class="content">
                          <ul>
                            <li style="list-style-type: upper-roman;"> <b> Separate Legal Entity : </b>One Person company is a separate legal entity and capable of
                            doing everything that an entrepreneur would do.</li>
                            <li style="list-style-type: upper-roman;"> <b> Easy Funding :  </b> Like a Private company, One Person Company can raise funds through
                              venture capital, financial institutions, angel investors etc. A One Person Company can
                            raise funds thus graduating itself to a private limited company.</li>
                            <li style="list-style-type: upper-roman;"> <b> Limited Liability : </b> Since the liability of the One Person Company is limited to the extent
                              of the value of the share you hold, the individual could take more risk in business without
                              affecting or suffering loss of personal assets. It is the encouragement to new, young and
                            innovative start-ups.</li>
                            <li style="list-style-type: upper-roman;"> <b> Minimum Compliances :  </b> One Person Company have to face little compliance burden as
                              compared to private limited companies , hence One Person Company can more focus on
                            other functional and core areas.</li>
                            <li style="list-style-type: upper-roman;"> <b> Other benefits :  </b> An One Person Company can avail the various benefits provided to
                              Small Scale Industries like lower rate of Interest on loans, easy funding from bank
                              without depositing any security to a certain limit, manifold benefits under Foreign Trade
                            policy and others. All these benefits can be boon to any business in initial years.</li>
                            <li style="list-style-type: upper-roman;"> <b> Greater Credibility :  </b> As an OPC needs to have its books audited annually, it has greater
                              credibility among vendors and lending institutions.
                            </li>
                          </ul>
                          <br>
                        </div>
                      </li>

                      <li>
                       <input type="radio" name="accordian" id="second">
                       <label for="second">MAJOR DRAWBACK / DISADVANTAGE OF ONE PERSON COMPANY :</label>
                       <div class="content">
                         <p>The MCA is skeptical about a single person in charge of a large corporation. Therefore, it
                          requires all OPCs to be converted into private limited or public limited companies on crossing a
                          certain revenue number. Currently, in case of an average turnover of Rs. 2 crore or more for the
                          three consecutive years or a paid-up capital of over Rs. 50 lakh, the OPC must mandatorily be
                        converted into an OPC.</p>

                      </div>
                    </li>

                  </ul>
                </div>

                <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                 <img src="images1/Stepsfoof.jpg" alt="">
               </div>
             </div>
           </div>
         </section>

         <br><br>

<<<<<<< HEAD
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
=======
                       <!-- <section id="about" class="about roomy-100" >   
                           <div class="row">
                             <div class="container content1">
                               <div class="col-lg-6 col-sm-6" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" >
                                 <h3 style="text-align: center;">Patent Registratoin Steps</h3>
                                 <img src="images1/PatentSteps870_440.png" alt="">
                               </div>
                               <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="350"data-aos-easing="ease-in-sine">
                                 <h3 style="text-align: center;">Patent Registratoin Process</h3>
                                 <img src="images1/patentPrcesure.png" alt="">
                               </div>
                             </div>
                           </div> 
                         </section> -->



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
                         <!-- <div class="row"> -->
                           <div class="container" style="display:flex;justify-content: center;align-items: center; ">
                             <div class="col-sm-6 " data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                               <div class="single_history_content">
                                 <div class="head_title"style="margin-right:0px; border-left:4px solid #ffb900;font-family: Lato-Medium;
                                 /*                      font-weight: 900!important;*/
                                 text-shadow: 0px 3px 12px #c3c3c3; border-left: 5px solid #ffb900;">
                                 <h2 style="margin-left: 20px;" >Flowchart of <br> Trademark Registraion</h2>
                               </div>
                               <!-- <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.</p> -->

                               <p>Conduct a trademark search to ensure that the proposed mark is not already in use by another party. File a trademark application with the appropriate government agency. Wait for the application to be reviewed and approved by an examining attorney. </p>
                               <p>If the application is approved, the mark is published in the Official Gazette, allowing other parties to file oppositions or request extensions of time to oppose. </p>
                               <p>If no opposition is filed or if the opposition is unsuccessful, the mark is registered and a certificate of registration is issued. </p>
                               <a href="" class="btn btn-lg shadowbtn txtshadow"style="margin-right:0px; border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a>
                             </div>
                           </div>
                           <div class="col-lg-6"><img src="images1/Flowcchart(TM).png" alt="" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"></div>
                         </div>
                       </div>
                       <br><br> <br><br>

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
>>>>>>> 61e07c1f58219a44c4c5737c59ac1e88817838af
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


                                       <br><br>

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
                                                     <div class="row ">
                                                       <div class="container" style="display: flex;">
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
                                                     <div class="row ">
                                                      <div class="container" style="display: flex;">
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
                                                    <div class="row ">
                                                     <div class="container" style="display: flex;">
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
                                               <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our  <br> Associate Partners </span> </h2> 
                                               
                                               <div class="single_history_img">
                                                 <div class="row ">

                                                   <div class="container" style="display: flex;">
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
                                               <br><br><br>                                              


                                               <section id="about" class="about roomy-100" >    

                                                 <div class="container">
                                                   <div class="row">
                                                     <div class="col-md-12">
                                                       <div class="section-title text-center wow zoomIn">
                                                         <h1 style="    text-align: center;
                                                         font-family: Lato-Medium;
                                                         font-weight: 900!important;
                                                         position: relative;
                                                         margin-bottom: 30px;
                                                         text-shadow: 0px 3px 12px #c3c3c3;">Frequently Asked Questions</h1>
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
                                                                 What is Trademark?
                                                               </a>
                                                             </h4>                    

                                                           </div>

                                                           <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                                                             <div class="panel-body">
                                                               <p>The term ‘Trademark’ refers to the brand or logo which represents the business. It is a visual symbol of a signature, name, device, label, numerals or combination of colors used by the owner of the trademark for goods or services or any other articles of commerce. Moreover, it is meant to differentiate among the similar products or services originated from the different business. A trademark can be a word, wrapper, packaging labels or a tagline or a combination of these. For example Coca-Cola and Pepsi.
                                                               </p>
                                                             </div>
                                                           </div>
                                                         </div>            
                                                         <div class="panel panel-default">
                                                           <div class="panel-heading" role="tab" id="headingTwo">
                                                             <h4 class="panel-title">
                                                               <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                                                                Who can apply for the Trademark?
                                                              </a>
                                                            </h4>
                                                          </div>
                                                          <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                                                           <div class="panel-body">
                                                             <p>Any Individual, Company, Proprietor or legal entity who can claim to be an owner of the Trademark can apply for it. The trademark Registration formalities can be done in 18 to 24 months after that you can start using the ‘TM’ symbol. Once your trademark registry is done and registration certificate is issued then you may use ® (registered symbol) next to your trademark. The validity of a registered trademark is for 10 years from the date of filing and that can be renewed from time to time. </p>
                                                           </div>
                                                         </div>
                                                       </div>
                                                       <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingThree">
                                                           <h4 class="panel-title">
                                                             <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                                                               What are the types of Trademark?
                                                             </a>
                                                           </h4>
                                                         </div>
                                                         <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                                                           <div class="panel-body">
                                                             <p>There are several types of Trademark which are given below:
                                                             </p>
                                                             <p>
                                                               A name of a person or surname or predecessor in business or the signature of the person.
                                                               The coined word or an invented word or any dictionary words that are not being directly descriptive of the character.
                                                               Alphanumeric or letter or any combination thereof.
                                                               Image, symbol, monograms, 3-dimensional shapes etc
                                                               Sound marks in audio format
                                                             </p>
                                                           </div>
                                                         </div>
                                                       </div>
                                                       <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingFour">
                                                           <h4 class="panel-title">
                                                             <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour">
                                                               What are the functions of Trademark?
                                                             </a>
                                                           </h4>
                                                         </div>
                                                         <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                                           <div class="panel-body">
                                                             <p>Following are the functions of Trademark </p>
                                                             <p>It identifies the product or the services and its sources. </p>
                                                             <p>It provides a guarantee for its quality </p>
                                                             <p>It helps in advertising the products and services. </p>
                                                             <p>Read more : Classes of Trademark Goods and Services </p>
                                                           </div>
                                                         </div>
                                                       </div>
                                                       <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingFive">
                                                           <h4 class="panel-title">
                                                             <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFive">
                                                               What are the documents required for Trademark Registration?
                                                             </a>
                                                           </h4>
                                                         </div>
                                                         <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                                           <div class="panel-body">
                                                             <p>Following are the documents which are required for the Trademark registration: </p>
                                                             <p>Copy of Trademark or logo </p>
                                                             <p>Applicant details like name, address, and nationality and for the company it requires the state of incorporation </p>
                                                             <p>Goods or services to register </p>
                                                             <p>Date of first use of the trademark in India. </p>
                                                             <p>Power of attorney which is to be signed by the applicant. </p>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div><!--- END COL -->     
                                                 </div><!--- END ROW -->        

                                               </div><!--- END Cont -->  

                                             </section>


                                             <!-- Contact section edn -->
                                             <!-- Footer section start -->



<<<<<<< HEAD
                                             <?php include 'footer.php' ?>                          
=======
 <?php include 'footer.php' ?>                          
>>>>>>> 61e07c1f58219a44c4c5737c59ac1e88817838af
