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
      <li class="breadcrumb-item" aria-current="page">Start Up India Certification</li>
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
               <section id="theory" class="about roomy-100" >   
                <div class="container">    
                 <div class="row content">   
                   <div class="col-lg-3 col-sm-6" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" > 
                     <div class="menu" id="menu" style="position: sticky; top: 100px;" >
                       <a href="#topic1" style="text-decoration: none;" >
                         <div class="list"><span class="light"></span><span>DPIIT Certificate of Recognition for Startups</span></div>
                       </a>
                       <a href="#topic2" style="text-decoration: none;">
                         <div class="list"><span class="light"></span><span>Benefits for DPIIT Recognized Startups</span></div>
                       </a>
                       <a href="#topic3" style="text-decoration: none;">
                         <div class="list"><span class="light"></span><span>Documents Required</span></div>
                       </a>
                      
                     </div> 
                   </div>
                   <div class="col-lg-6" style="position: sticky; top: 100px;"   data-aos="fade-up"data-aos-duration="2000" data-aos-offset="350"data-aos-easing="ease-in-sine">

                     <div id="topic1">
                       <h4> <span class="textHead"></span>DPIIT Certificate of Recognition for Startups</h4>
                       <p>To access tax benefits and easier compliance, companies have to be recognized as Startups by the Department for Promotion of Industry and Internal Trade (DPIIT) under the Startup India initiative. </p>
                       <p>Startups recognized by DIPP can avail Intellectual property Rights (IPR) related benefits such as IPR fast-tracking and more without requiring any other license from the Inter-Ministerial Board. The current article provides a brief understanding of DPIIT Certificate of Recognition for Startups.</p>
                      
                    </div>
                    <div id="topic2">
                     <h4> <span class="textHead"></span>Benefits for DPIIT Recognized Startups </h4>
                     <p>The startups can avail the following benefits after obtaining the DPIIT Certificate of Recognition for Startups : </p>
                     <li style="list-style-type: upper-roman;"> <b> Self Certification : </b>After obtaining the DPIIT Certificate of Recognition for Startups, the entity will be allowed to self-certify compliance under 3 Environmental Laws and 6 Labour Laws.</li>
                     <li style="list-style-type: upper-roman;"> <b>Start-Up Patent Application : </b>The DPIIT recognized startups are required to pay only 80% of the fees on Patents, trademark, copyrights and design, and the fast-tracking of a patent application will be available for startups.</li >
                     <li style="list-style-type: upper-roman;"> <b>Easier Public Procurement Norms : </b> The DPIIT recognized startups will get an opportunity to list the product on Government e-Marketplace. <br>DPIIT recognized startups are exempted from submitting Earnest Money Deposit
Exemption from Prior Experience/Turnover is provided for Start-ups in all Central Government ministries and departments.</li>
                     <li style="list-style-type: upper-roman;"> <b>Easy winding up of Company : </b> According to the Insolvency and Bankruptcy Code, 2016, the company can be wound up within 90 days of applying for insolvency.</li>
                     <li style="list-style-type: upper-roman;"> <b>Funds of Funds : </b> The startups will be eligible for Rs.10000 crore funds of funds from the Alternative Investment Funds.</li>
                     <li style="list-style-type: upper-roman;"> <b> Tax Exemptions : </b> After obtaining the Certificate of Recognition, the startup can apply for Tax exemption under section 80 IAC of the Income Tax Act. <br>
                      <p>The DPIIT recognized startups can apply for Angel Tax Exemption.</p>
                      <p>After obtaining the clearance for Tax exemption, the DPIIT recognized startups are exempted from income tax for 3 consecutive fiscal years out of its first ten years since formation.</p>
                     </li>
                     
                  </div>
                  <br>
                  <div id="topic3">
                   <h4> <span class="textHead"></span> Documents Required : </h4>
                   <p>The documents required for the DPIIT Certificate of Recognition for Startups is listed as follows : </p>
                   <li style="list-style-type: upper-roman;">Certificate of Incorporation or Registration of entity</li>
                   <li style="list-style-type: upper-roman;">If the startup received any funding, the Proof of Funding need to furnish for DPIIT Certificate of Recognition for Startups</li >
                  <li style="list-style-type: upper-roman;">Document of awards or recognition received by the entity</li >
                  <li style="list-style-type: upper-roman;">Document of the patent published by the entity (The patent should be published in the patent journals)</li>

                  <li style="list-style-type: upper-roman;"> <b> Other benefits :  </b> An One Person Company can avail the various benefits provided to
                    Small Scale Industries like lower rate of Interest on loans, easy funding from bank
                    without depositing any security to a certain limit, manifold benefits under Foreign Trade
                  policy and others. All these benefits can be boon to any business in initial years.</li >
                  <li style="list-style-type: upper-roman;"> <b> Greater Credibility :  </b> As an OPC needs to have its books audited annually, it has greater
                  credibility among vendors and lending institutions. <br>A brief description of the nature of the business. The write-up should contain the following details : <br>Details of how the startup is working towards innovation <br>Development of products or processes or services <br>The scalability in terms of employment generation or wealth creation </li>

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
                         <img width="100%" src="images1/stepsStart.png">     
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
                           
                      
 <br><br>

<?php include 'content.php' ?>                                            


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
                      


 <?php include 'footer.php' ?>                          