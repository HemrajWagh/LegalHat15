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

  
  <?php include 'header.php';?>

  <!-- ============Content========= -->


  <div class="container">                  
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
        <li class="breadcrumb-item" aria-current="page">Trademark Registration</li>
      </ol>
    </nav>
  </div>

  <div class="container">
    <!-- <div class="row"> -->
      <div class="main_history fadeInUp" style="display:flex;">
        <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine" style="border-right: 1px solid #ffb900;">

          <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">We Are Associated With </span> </h2>
          <div class="single_history_img"> 
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
        <div class="col-lg-6 col-sm-6"data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" style="border-left: 1px solid #ffb900;">
          <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our Associated Partners </span> </h2> 

          <div class="single_history_img">

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
             <hr style="border-bottom:2px solid #fbb900;">
           <!-- </div> -->
         </div>
         <br><br>
         <section id="theory" class="about roomy-100" >   
           <div class="container">    
            <div class="row content">   
              <div class="col-lg-3 col-sm-6" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" > 
                <div class="menu" id="menu" style="position: sticky; top: 100px;" >
                  <a href="#topic1" style="text-decoration: none;" >
                    <div class="list"><span class="light"></span><span> Trademark Registration </span></div>
                  </a>
                  <a href="#topic2" style="text-decoration: none;">
                    <div class="list"><span class="light"></span><span>Importance Of Trademark</span></div>
                  </a>
                  <a href="#topic3" style="text-decoration: none;">
                    <div class="list"><span class="light"></span><span>Trademark Registration Procedure</span></div>
                  </a>
                  <a href="#topic4" style="text-decoration: none;">
                    <div class="list"><span class="light"></span><span>Requirements for filing Application</span></div>
                  </a>

                </div> 
              </div>
              <div class="col-lg-6" style="position: sticky; top: 100px;"   data-aos="fade-up"data-aos-duration="700" data-aos-offset="350"data-aos-easing="ease-in-sine">

                <div id="topic1">
                  <h4> <span class="textHead"></span> What is Trademark Registration ? </h4>
                  <p>A trademark, trade mark, or trade-mark is a disunclive sign or indicator used by an individual business brganizallon, or otlher legal entity to identify that the products or services o consumers wilh whieh the lrademark appears originate from a unique source, designated for a speciic markel end is used to distinguish its products or services from those of other enlities.</p>
                  <p>A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements.  </p>
                  <p>There is also a range of non-conventional trademarks comprising marks which do not fall into these standard categories, such as those based on Color, smell, or sound.</p>

                </div>
                <div id="topic2">
                  <h4> <span class="textHead"></span> Importance Of Trademark </h4>
                  <p>Trademark is denoted as yourintellectual property as it adds fo your brand identity as its quife mandatory to have the Trademark Registration to create own brand identity in the market and to stop others who are misusing and creating confusion in the market by infringing your brand name. </p>
                  <p>Your reputation is represented by your trade mark. Others may seek to use/copy your trade mark or something akin to your trade mark for their own use and thus take advantage of the reputation eamed by youin the market.</p>
                  <p>Registration of your trade mark is the surest and quickest means of avoiding these circumstances. Furthermore, registration establishes yOur exclusive nights to use that trade mark for your goods or services.</p>

                </div>
                <div id="topic3">
                  <h4> <span class="textHead"></span>Trademark Registration Procedure</h4>

                  <p>The procedure for applying for Trademark Reglstration is as follows :</p>

                  <p> 1. Search :-  A search is conducted at the Trade Mark Registry, Govt. Office to As certain whether the trademark to be applied for ls register-able or hot. </p>

                  <p>2. Application For Registration :- An application needs to be file prepare the complete applicalion doc and file the same. On submission, application number is received which is made availlable to you along with copy ofapplication.</p>

                  <p>3. Official Objections, If Any :- We need to reply to official objections raised under various sections of the Act.</p>

                  <p>4. Publications and Registration :- The mark is then published in the trademark jourmal and a certificate of registration is issued.</p>


                </div>
                <div id="topic4">
                  <h4> <span class="textHead"></span>Requirements for filing Application</h4>
                  <h4>Informational Requirements :</h4>
                  <ul>
                    <li>The name, address and nationality of the applicant.</li  >
                    <li>Form of Organization. (Proprietorship/Partnership/Company/Trust)</li  >
                    <li>Full name & Age of signatory of the application</li  >
                    <li>Father’s / Husband name of signatory & nationality with Residential address.</li  >
                    <li>Trademark to be registered</li  >
                    <li>A list of goods and/or services for which registration is required with trade description (such as manufacturers/merchants/dealers).</li  >
                    <li>Date of first use of the trademark (if already using), If user not claimed then mention as to when you propose to be use the trademark.</li>
                  </ul>

                  <h4>Documentary Requirements : </h4>
                  <ul>
                    <li>Sales Invoices from date of using the trademark (if already using the trademark)</li>

                    <li>In case of a partnership concern: Copy of partnership deed</li>

                    <li>In case of a company: copy of memorandum and articles and certificate of incorporation duly attested as true copy </li>
                    <li>In case of a trust or an NGO: copy of trust deed with names and addresses of trustees</li>
                    <!-- <li>Required logo / writing style of trademark in soft copy to be mailed to info@trademark.in and to the concerned advocate/executive in our firm</li> -->
                  </ul>

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
  </section>    
  <br><br><br>

  <div class="container">
    <div class="row" >  
      <div class="col-lg-12 col-sm-6"> 
        <div class="">
          <h4 class="pb-3 pt-2 mb-5 "> <span class="textHead">TRADEMARK REGISTRATION PROCEDURE :</span> </h4>
          <!-- <hr style="background-color:#ffb900 " size="100"> -->
          <!--first section-->
          <div class="row align-items-center how-it-works d-flex">
            <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
              <div class="circle font-weight-bold">1</div>
            </div>
            <div class="col-6">
              <h5><span id="highlight"> Search : </span>  </h5>
              <p> A search is conducted at the Trade Mark Registry, Govt. Office to As certain whether the trademark to be applied for ls register-able or hot.
              </p>
            </div>
          </div>
          <!--path between 1-2-->
          <div class="row timeline">
            <div class="col-2">
              <div class="corner top-right"></div>
            </div>
            <div class="col-8">
              <hr/>
            </div>
            <div class="col-2">
              <div class="corner left-bottom"></div>
            </div>
          </div>
          <!--second section-->
          <div class="row align-items-center justify-content-end how-it-works d-flex">
            <div class="col-6 text-right">
              <h5><span id="highlight">Application For Registration : </span></h5>
              <p>An application needs to be file prepare the complete applicalion doc and file the same. On submission, application number is received which is made availlable to you along with copy ofapplication.</p>
            </div>
            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
              <div class="circle font-weight-bold">2</div>
            </div>
          </div>
          <!--path between 2-3-->
          <div class="row timeline">
            <div class="col-2">
              <div class="corner right-bottom"></div>
            </div>
            <div class="col-8">
              <hr/>
            </div>
            <div class="col-2">
              <div class="corner top-left"></div>
            </div>
          </div>
          <!--third section-->
          <div class="row align-items-center how-it-works d-flex">
            <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
              <div class="circle font-weight-bold">3</div>
            </div>
            <div class="col-6">
              <h5> <span id="highlight">Official Objections</span>, If Any : </h5>
              <!-- <p>We need to reply to official objections raised under various sections of the Act.</p> -->
            </div>
          </div>


          <div class="row align-items-center how-it-works d-flex">

            <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
              <div class="circle font-weight-bold">3</div>
            </div>
            <div class="col-6">
              <!-- <h5>Search : </h5> -->
              <p>We need to reply to official objections raised under various sections of the Act.</p>
            </div>
          </div>

          <!--path between 1-2-->
          <div class="row timeline">
            <div class="col-2">
              <div class="corner bottom top-right"></div>
            </div>
            <div class="col-8">
              <hr/>
            </div>
            <div class="col-2">
              <div class="corner left-bottom "></div>
            </div>
          </div>
          <!--second section-->

          <!--second section-->
          <div class="row align-items-center justify-content-end how-it-works d-flex">
            <div class="col-6 text-right">
              <h5><span id="highlight">Publications and Registration : </span> </h5>
              <p>The mark is then published in the trademark jourmal and a certificate of registration is issued.
              </p>
            </div>
            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
              <div class="circle font-weight-bold">4</div>
            </div>
          </div>
          <!--path between 2-3-->
          <div class="row timeline">
            <div class="col-2">
              <div class="corner right-bottom"></div>
            </div>
            <div class="col-8">
              <hr/>
            </div>
            <div class="col-2">
              <div class="corner top-left"></div>
            </div>
          </div>
          <!--third section-->


        </div>
      </div>
    </div>
  </div>  

  <br>

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
          <img src="images1/StepsCheck.jpg" alt="">
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
  <div class="container FlowFlex">
    <!-- <div class="row " > -->
      <div class="col-lg-6 col-sm-6 " data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
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
<a href="" class="btn btn-lg shadowbtn txtshadow"style=" border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a>
</div>
</div>
<div class="col-lg-6 col-sm-6 "><img class="flow" src="images1/Flowcchart(TM).png" alt="" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"></div>
<!-- </div> -->
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

                        <h3 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">We Are  <br> Associated With </span> </h3>
                         
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
                      <br>
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
                          <div class="container Acc">
                            <div class="col-lg-6 col-sm-6 "><img class="ParaHigh" src="images1/man.png" ></div>
                            <div class="col-lg-6 col-sm-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a></div>
                          </div>
                        </section>  
                        <br><br>

                        <section id="about" class="about roomy-100" >    

                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="section-title text-center wow zoomIn">
                                  <h4><span class="textHead"></span> Frequently Asked Questions</h4>
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

                      <?php include 'footer.php' ?>      

                      <!-- <div class="scrollup">
                        <a href="#">
                          <i class="icon-up-open"></i>
                        </a>
                      </div> -->




<?php 
unset($_SESSION['errors']);
unset($_SESSION['notmatched']);
unset($_SESSION['postval']);
unset($_SESSION['typeofflat1']);
unset($_SESSION['approxbudget1']);
// session_destroy();

?>
</html> 