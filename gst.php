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
      <li class="breadcrumb-item" aria-current="page">GST Registration</li>
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
                                           <div class="list"><span class="light"></span><span> GST Registration </span></div>
                                         </a>
                                         <a href="#topic2" style="text-decoration: none;">
                                           <div class="list"><span class="light"></span><span>Process</span></div>
                                         </a>
                                        <!--  <a href="#topic3" style="text-decoration: none;">
                                           <div class="list"><span class="light"></span><span>Trademark Registration Procesure</span></div>
                                         </a>
                                         <a href="#topic4" style="text-decoration: none;">
                                           <div class="list"><span class="light"></span><span>Requirements for filing Application</span></div>
                                         </a> -->

                                       </div> 
                                     </div>
                                     <div class="col-lg-6" style="position: sticky; top: 100px;"   data-aos="fade-up"data-aos-duration="700" data-aos-offset="350"data-aos-easing="ease-in-sine">

                                       <div id="topic1">
                                         <h4> <span class="textHead"></span> What is GST Registration ? </h4>
                                         <p>Businesses must register as regular taxable persons under the Goods and Services Tax (GST) if their annual revenue exceeds the threshold limit of Rs. 40 lakhs (in case of goods), Rs. 20 lakhs (in case of services), or Rs. 10 lakhs, as applicable. GST registration is the term for it.</p>
                                         <p>It is mandatory to generate the GSTIN if annual turnover exceeds the above prescribed limit. If the company conducts business without registering for GST, it is an offence and faces severe penalties.</p>
                                         <p>It typically takes 4 to 6 working days to register for GST. In 3 simple steps, Team Online Legal India can assist you in obtaining GST registration more quickly.</p>

                                       </div>
                                       <div id="topic2">
                                         <h4> <span class="textHead"></span>Process to apply for GST Registration </h4>
                                         <li style="list-style-type: upper-roman;"> <b> Visit GST Portal </b>Go to the GST Portal i.e. gst.gov.in.</li>
                                         <li style="list-style-type: upper-roman;"> <b> Navigate to New Registration  </b> Click on ‘Register Now’ on the Home page OR Go to Services > Registration > New Registration.</li >
                                         <li style="list-style-type: upper-roman;"> <b> Part A : New Registration </b> Click on ‘New Registration’ on the next page that appears and select the relevant options. 
                                          <li>‘I am a’ – select the relevant option</li> 
                                          <li>State/UT and District – Select the state in which you want the registration</li> 
                                          <li>The legal name of the business – Enter the name as per PAN</li> 
                                          <li>PAN – Enter PAN of the business</li> 
                                          <li>Add e-mail and mobile number of the primary authorized signatory</li> 
                                          <li>Enter the characters seen in Captcha Image</li> 

                                         </li >
                                         <li style="list-style-type: upper-roman;"> <b> GSTIN List </b>The screen displays GSTIN / UIN / Provisional ID for the same PAN in the same state. Click on ‘Proceed’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>OTP Verification </b> The screen displays an OTP Verification page. Enter the OTP (One-Time Password) that you receive on the mobile number and e-mail entered in Step 3 above. OTP is valid for 10 minutes.If OTP is not received or is invalid, click on the option ‘Click here to resend the OTP’ to receive a new OTP.</li >
                                         <li style="list-style-type: upper-roman;"> <b> TRN (Temporary Reference Number)  </b> You will receive a 15 digit TRN (Temporary Reference Number) on the registered e-mail and mobile. The screen will also show the validity of the TRN. </li>
                                         <li style="list-style-type: upper-roman;"> <b> Part B – Enter TRN </b>The screen displays an OTP Verification page. Enter the OTP (One-Time Password) that you receive on the mobile number and e-mail. The same OTP would be sent on e-mail and mobile number. OTP is valid for 10 minutes. <br>If OTP is not received or is invalid, click on the option ‘Click here to resend the OTP’ to receive a new OTP. </li>                              
                                         <li style="list-style-type: upper-roman;"> <b>Tab wise Details </b>Part B of the form has various tabs. Enter the details by selecting relevant options. Upload documents in .pdf and .jpeg format.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Business Details </b>‘The first tab is ‘Business Details’. Enter the necessary details and upload the relevant documents. If you want to apply for Composition Scheme, select ‘Yes’ in the option for the Composition field. Once all the details are entered, click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Promoters / Partners Details </b>‘The first tab is ‘Business Details’. Enter the necessary details and upload the relevant documents. If you want to apply for Composition Scheme, select ‘Yes’ in the option for the Composition field. Once all the details are entered, click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Authorised Signatory </b>The third tab is ‘Authorised Signatory’. The details are auto-filled if the tab for authorised signatory was selected while entering details of promoter or partner in the earlier tab. Select the primary authorised signatory. Review details and click on ‘Save & Continue’</li>
                                         <li style="list-style-type: upper-roman;"> <b>Authorised Representative </b>The fourth tab is ‘Authorised Representative’. If you have any authorised representative, enter details of such person and click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Additional Place of Business</b>The fifth tab is ‘Additional Place of Business’. If you have any other office other than the principal place of business, enter details of that place under this tab. Enter the number of additional place of business, add details similar to the principal place of business and click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Goods and Services</b>The sixth tab is ‘Goods and Services’. Enter details of goods or services supplied by the business. You can enter details of a maximum of 5 goods and 5 services. Enter HSN/SAC and description. Once you enter the details, click on ‘Save & Continue’.</li>

                                         <li style="list-style-type: upper-roman;"> <b>Bank Accounts</b>The ‘Bank Accounts’ tab will not appear on the screen during the GST Registration. Once the GSTIN is issued, when the taxpayer logins to the GST Portal for the first time, Bank Account details are required to be added. You can enter details of maximum of 10 bank accounts. Enter the account number, type, and IFSC code. Further, upload the document proof and click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>State Specific Information</b>The eighth tab is ‘State Specific Information’. Enter details of state registrations if any and click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Verification</b>The last tab is ‘Verification’. There are two options to Submit the Application at the bottom of the page. <ul><br>
                                          <li><b>Submit with DSC – </b>Sign the application using the DSC i.e. Digital Signature Certificate token. However, you must register the DSC on the GST Portal.</li>
                                         <li><b>Submit with EVC or Submit with E-Signature –</b>Under this option, you would receive an OTP on registered mobile and registered email. Enter the OTP and submit the application.</li></ul> </li>
                                         <li style="list-style-type: upper-roman;"> <b>State Specific Information</b>The eighth tab is ‘State Specific Information’. Enter details of state registrations if any and click on ‘Save & Continue’.</li>
                                         <li style="list-style-type: upper-roman;"> <b>Success message</b>TAfter you submit the application, a success message is displayed. You would receive an Acknowledgement Reference Number i.e. ARN on your registered email and mobile in the next 15 minutes.</li>
                                       </div><br>
                                       
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
                           <img width="100%" src="images1/StepGst.jpg">     
                         </div>         
                         <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
                           <h3 class="textHead num" >Patent Procedure In India</h3>
                           <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
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

                 <div class="container " style="">
                   <div class="row Acc">

                     <div class="col-lg-6 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">

                       <ul class="accordian">
                         <h2 style="text-align: center;" ><span class="textHead">Requirements for filing Application</span> </h2>
                         <li>
                           <input type="radio" name="accordian" id="first" checked>
                           <label for="first">Informational Requirements : </label>

                           <div class="content">

                             <p>The name, address and nationality of the applicant.</p>
                             <p>Form of Organization. ( Proprietorship/Partnership/Company/Trust )</p>
                             <p>Father’s / Husband name of signatory & nationality with Residential address.</p>
                             <p>Trademark to be registered</p>
                             <p>A list of goods and/or services for which registration is required with trade description (such as manufacturers/merchants/dealers).</p>
                             <p>Date of first use of the trademark (if already using), If user not claimed then mention as to when you propose to be use the trademark.</p>

                           </div>
                         </li>

                         <li>
                           <input type="radio" name="accordian" id="second">
                           <label for="second">Documentary Requirements : </label>
                           <div class="content">
                             <p>Sales Invoices from date of using the trademark ( if already using the trademark )</p>
                             <p>In case of a partnership concern: Copy of partnership deed</p>
                             <p>In case of a company: copy of memorandum and articles and certificate of incorporation duly attested as true copy</p>
                             <p>In case of a trust or an NGO: copy of trust deed with names and addresses of trustees</p>
                             <!-- <p>Required logo / writing style of trademark in soft copy to be mailed to info@trademark.in and to the concerned advocate/executive in our firm</p> -->

                           </div>
                         </li>

                       </ul>
                     </div>

                     <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                       <img src="images1/StepsGst.jpg" alt="">
                     </div>
                   </div>
                 </div>
               </section>

               <br><br>

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
                            <!--  <div class="container" style="display:flex;justify-content: center;align-items: center; ">
                               <div class="col-sm-6 " data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                                 <div class="single_history_content">
                                   <div class="head_title"style="margin-right:0px; border-left:4px solid #ffb900;font-family: Lato-Medium;
                                                         font-weight: 900!important;
                                   text-shadow: 0px 3px 12px #c3c3c3; border-left: 5px solid #ffb900;">
                                   <h2 style="margin-left: 20px;" >Flowchart of <br> Trademark Registraion</h2>
                                 </div>
                                 <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.</p>

                                 <p>Conduct a trademark search to ensure that the proposed mark is not already in use by another party. File a trademark application with the appropriate government agency. Wait for the application to be reviewed and approved by an examining attorney. </p>
                                 <p>If the application is approved, the mark is published in the Official Gazette, allowing other parties to file oppositions or request extensions of time to oppose. </p>
                                 <p>If no opposition is filed or if the opposition is unsuccessful, the mark is registered and a certificate of registration is issued. </p>
                                 <a href="" class="btn btn-lg shadowbtn txtshadow"style="margin-right:0px; border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a>
                               </div>
                             </div>
                             <div class="col-lg-6"><img src="images1/Flowcchart(TM).png" alt="" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"></div>
                           </div>
                         </div>
                         <br><br> <br><br> -->

  <section  class=""    id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);"  >

           <section class="info">
              <div class="container">
                  <h2 class="" style="color: #ffb900;text-align: center;" > <span class="textHead">Awards & Achievement</span></h2>
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
            <h5 class="" style="color: #ffb900;text-align: center;"><span class="textHead"> DIFFERENT TYPES OF TRADEMARKS THAT CAN BE REGISTERED IN INDIA</span></h5>
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


                       

                          <div class="row line" >
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


  <br><br>


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

                  <div class="col-lg-6 col-sm-6 clientsFlex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="single_history_content" >
                          <div class="head_title"style="margin-right:0px; ">
                              <h2 style="margin-left: 20px; text-align: center;" class="textHead"> "CLIENTS FIRST , ALWAYS" </h2>
                          </div>
                          <!-- <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.</p>

  <p>There is also a range of non-conventional trademarks comprising marks which do not fall into these standard categories, such as those based on Color, smell, or sound. </p> -->
                              <!-- <a href="" class="btn btn-lg shadowbtn txtshadow"style="margin-right:0px; border-left:4px solid #ffb900;">BROWSE OUR WORK</a> -->
                      </div>
                  </div>
          </div>
        </div>
      </div>          
      <br><br>
      <section id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
            <div class="container" style="display: flex;" id="paraFlex" >
              <div class="col-lg-6 col-sm-6"><img src="images1/man.png"></div>
              <div class="col-lg-6 col-sm-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a></div>
            </div>
      </section>  
      <br><br>
          <div class="container">
          <div class="row">
              <div class="main_history fadeInUp" style="display:flex;">
                      <div class="col-lg-6 col-sm-6" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
                       
                        <h2 class="Associate" ><span class="textHead">We Are  <br> Associated With </span> </h2>
                        
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

                      <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                          <h2 class="Associate"><span class="textHead">Our  <br> Associated Partners </span> </h2> 
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
          <br><br>     
                            <section id="testim" class="testim action roomy-40" style="background:-webkit-linear-gradient(0deg, rgba(252,200,19,1) 0%, rgba(255,231,93,1) 100%)">
                                      <div class="testim-cover">
                                          <div class="wrap">

                                              <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                              <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                                              <ul id="testim-dots" class="dots">
                                                  <li class="dot active">
                                                  </li>
                                                  <li class="dot"></li>
                                                  <li class="dot"></li>
                                                  <li class="dot"></li>
                                                  <li class="dot"></li>
                                                  <li class="dot"></li>
                                                  <li class="dot"></li>
                                              </ul>
                                              <div class="head_title text-center fix">
                                                          <h2 class="text-uppercase" style="color: #fff;">Our Team</h2>
                                                      </div>

                                              <div id="testim-content" class="cont">
                                                  
                                                  <div class="active">
                                                      <div class="img"><img src="images1/legal.jpg" alt=""></div>
                                                      <h2>Adv. Milind Pawar <span>B.Com LLB</span></h2>
                                                      <p>A versatile lawyer by profession with more than 15 years of experience in Civil, Criminal and Intellectual property matters. At LegalHat he heads the legal department.</p>                    
                                                  </div>


                                                  <div>
                                                      <div class="img"><img src="images1/legal.jpg" alt=""></div>
                                                      <h2>Adv. Inamdar AN <span> BCS MBA LLB (Legal Head) </span></h2>
                                                      <p>A dynamic lawyer with experience specially in
          IPR Matters and alsopracticing at High Court in Mumbai. At LegalHat she takes care of all IPR related matters.</p>                    
                                                  </div>

                                                  <div>
                                                      <div class="img"><img src="images1/legal.jpg" alt=""></div>
                                                      <h2>Adv. Inamdar S N <span>BCA MBA MSW LLB LLM</span> </h2>
                                                      <p>A dedicated lawyer by profession. At LegalHat she takes careof all Company formation matters. Overall experience on a scale of 10 is 10/10 🙂 Thanks.</p>                    
                                                  </div>

                                                  <div>
                                                      <div class="img"><img src="images1/news2.jpg" alt=""></div>
                                                      <h2>Mr. Patel S A <span>Engg Mech</span></h2>
                                                      <p>Patent Attorney An Engineer by profession with more than 10 years of Industrial Marketing, Trademark and Patents. At LegalH at he heads theMarketing team, Branding and Business Development.</p>                    
                                                  </div>

                                                  <div>
                                                      <div class="img"><img src="images1/news2.jpg" alt=""></div>
                                                      <h2>S. S. Kulkarni <span> M.B.A. B.Com. </span></h2>
                                                      <p>At LegalHat he takes care of the administration department, Marketing Research and Analysis.</p>                    
                                                  </div>

                                                  <div>
                                                      <div class="img"><img src="images1/expert.jpg" alt=""></div>
                                                      <h2>A.V. Karwa <span> B.Com, CA. MBA (Finance)</span> </h2>
                                                      <p>Tax And Audit.</p>                    
                                                  </div>

                                                  <div>
                                                      <div class="img"><img src="images1/expert.jpg" alt=""></div>
                                                      <h2>Mr. Asif Shaikh <span>M.Pharm, MSc (Chem)</span></h2>
                                                      <p>Patent Research and Analysis. </p>                    
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </section>
                                  <br><br>

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
                                                                   Can I save the application for change of details in GST Registration?
                                                                 </a>
                                                               </h4>                    

                                                             </div>

                                                             <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                                                               <div class="panel-body">
                                                                 <p>Yes. You can save the application to change or update details in GST Registration. However, you must submit the application within 15 days from the date of starting the application. On the expiry of 15 days, the system automatically cancels the application.
                                                                 </p>
                                                               </div>
                                                             </div>
                                                           </div>            
                                                           <div class="panel panel-default">
                                                             <div class="panel-heading" role="tab" id="headingTwo">
                                                               <h4 class="panel-title">
                                                                 <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                                                                  Can PAN be changed after GST Registration?
                                                                </a>
                                                              </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                                                             <div class="panel-body">
                                                               <p>No, after registration PAN (Permanent Account Number) cannot be changed. This is because GST Number or GSTIN is based on the PAN of the entity.</p>
                                                             </div>
                                                           </div>
                                                         </div>
                                                         <div class="panel panel-default">
                                                           <div class="panel-heading" role="tab" id="headingThree">
                                                             <h4 class="panel-title">
                                                               <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                                                                 How to change GST registration details?
                                                               </a>
                                                             </h4>
                                                           </div>
                                                           <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                                                             <div class="panel-body">
                                                               <p>In order to change the details of your registration , you need to visit the GST official portal. Go to Services > Registration > Amendment of Registration Non-Core Fields. Select the desired tab and make the necessary changes.
                                                               </p>
                                                               
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