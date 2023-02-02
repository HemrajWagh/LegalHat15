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
     <li class="breadcrumb-item active" aria-current="page">Copyright Registration</li>
   </ol>
 </nav>
</div> 

<div class="container">
<div class="row">
    <div class="main_history fadeInUp" style="display:flex; padding-bottom: 20px;">
            <div class="col-lg-6 col-sm-6"data-aos="fade-right" data-aos-offset="150"data-aos-easing="ease-in-sine" style="border-right: 1px solid #ffb900;">
              <h2 class="Associate" ><span class="textHead">We Are Associated With</span> </h2>
                <div class="single_history_img">     
                  <div class="container">
                        <!-- <div class="row "> -->
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
                          <!-- </div> -->
                    </div>               
                </div>
            </div>

            <div class="col-lg-6 col-sm-6"data-aos="fade-left" data-aos-offset="150"data-aos-easing="ease-in-sine" style="border-left: 1px solid #ffb900;">
                <h2 class="Associate"><span class="textHead">Our Associated Partners </span> </h2> 
                
                <div class="single_history_img">
                    <!-- <div class="row "> -->
                   
                            <div class="container" style="display: flex;">
                                <div class="col-3" style="display: flex; justify-content: center;align-items: center;" >
                                  <img src="images1/Associate/logo1.jpeg" style="border-radius: 10px;"   alt="Logo 1" width="70%" class="shadowbtn">
                                </div>
                                <div class="col-3"style="display: flex; justify-content: center;align-items: center;">
                                  <img src="images1/Associate/logo2.jpeg" style="border-radius: 10px; " alt="Logo 2" width="100%" class="shadowbtn">
                                </div>
                                
                                <div class="col-3"style="display: flex; justify-content: center;align-items: center;">
                                  <img src="images1/Associate/logo3.jpeg" style="border-radius: 10px; " alt="Logo 5" width="70%" class="shadowbtn">
                                </div>
                                <div class="col-3"style="display: flex; justify-content: center;align-items: center;">
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
      <!-- <hr style="border-bottom:2px solid #fbb900;"> -->
  </div>
</div>

 <!-- div class="container" style="display: flex;">
<div class="row ">
     <div class="col-2" style="display: flex; justify-content: center;align-items: center;" >
       <img src="images1/logo/active.jpeg" style="border-radius: 5px;"   alt="Logo 1" width="60%" class="shadowbtn">
     </div>
     <div class="col-2"style="display: flex; justify-content: center;align-items: center;">
       <img src="images1/logo/bhumi.jpeg" style="border-radius: 5px; " alt="Logo 2" width="60%" class="shadowbtn">
     </div>
     <div class="col-2"style="display: flex; justify-content: center;align-items: center;">
       <img src="images1/logo/dudhraja.jpeg" style="border-radius: 5px; " alt="Logo 3" width="60%" class="shadowbtn">
     </div>
     <div class="col-2"style="display: flex; justify-content: center;align-items: center;">
       <img src="images1/logo/meatbox.jpeg" style="border-radius: 5px; " alt="Logo 5" width="60%" class="shadowbtn">
     </div>
     <div class="col-2"style="display: flex; justify-content: center;align-items: center;">
       <img src="images1/logo/logica.jpeg"style="border-radius: 5px; " alt="Logo 4" width="60%" class="shadowbtn">
     </div>
     <div class="col-2"style="display: flex; justify-content: center;align-items: center;">
       <img src="images1/logo/logica.jpeg"style="border-radius: 5px; " alt="Logo 4" width="60%" class="shadowbtn">
     </div>
    
   </div>
 </div> -->

<section id="theory" class="about roomy-100" > 
   <div class="container" style="display: flex;" >    
  <div class="row content">   
    <div class="col-lg-3 col-sm-6" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
      <div class="menu" id="menu"style="position: sticky; top: 60px;" >
        <a href="#topic1" style="text-decoration: none;" >
          <div class="list"><span class="light"></span><span>Copyright Registration</span></div>
        </a>
        <a href="#topic2" style="text-decoration: none;">
          <div class="list"><span class="light"></span><span>Types of Copyright</span></div>
        </a>
        <a href="#topic3" style="text-decoration: none;">
          <div class="list"><span class="light"></span><span>Importance and Advantages of Copyright</span></div>
        </a>

      </div> 
    </div>
    <div class="col-lg-6" data-aos="fade-up"data-aos-duration="700" data-aos-offset="300"data-aos-easing="ease-in-sine">
      <div id="topic1">
        <h4> <span class="textHead"></span> What is Copyright Registration ? </h4>
        <p>Copyright is a legal concept, enacted by most governments, giving
          the creator of an original work exclusive rights to it, usually for a
        limited time.</p>
        <p>Generally, it is "the right to copy", but also gives the
          copyright holder the right to be credited for the work, to determine
          who may adapt the work to other forms, who may perform the work,
        who may financially benefit from it, and other related rights. </p>
        <p>It is an
          intellectual property form (like the patent, the trademark, and the
          trade secret) applicable to any expressible form of an idea or
        information that is substantive and discrete.</p>

      </div>
      <div id="topic2">
        <h4> <span class="textHead"></span> Types of Copyright </h4>
        <ul>
          <p>
            ● Artistic Work (Manufacturing and Service Industry logos / labels /
            symbols / packaging)
          </p>
        </ul>
        <ul>

          <p> ● Literary Work (Books, magazines, concepts, business
          plans/ideas, scripts)</p>
        </ul>
        <ul>

          <p> ● Software Content (Software languages, contents, programming
          files)</p>
        </ul>
        <ul>

          <p> ● Web Contents (Website pages, website content)</p>
        </ul>
        <ul>

          <p> ● Dramatic and Musical Work</p>
        </ul>
        <ul>

          <p> ● Cinematographic Films</p>
        </ul>
        <ul>

          <p> ● Photographs and paintings.</p>
        </ul>
      </div>
      <div id="topic3">
        <h4><span class="textHead"></span>Importance and Advantages of Copyright</h4>
        <p>Copyright is a major part of Intellectual property where one can
          claim exclusive rights over the created identity which may be in any
        above mentioned form.</p>
        <ul>
          <li>

            <p>Several exclusive rights typically attach to the holder of a copyright : </p>
          </li>
        </ul>
        <ul>
          <li>

            <p>to produce copies or reproductions of the work and to sell those
            copies (including, typically, electronic copies/online) </p>
          </li>
        </ul><ul>
          <li>

            <p>to import or export the work </p>
          </li>
        </ul>
        <ul>
          <li>
            <p>to create derivative works (works that adapt the original work) </p>

          </li>
        </ul>
        <ul>
          <li>
            <p>to perform or display the work publicly</p>

          </li>
        </ul><ul>
          <li>
            <p>to sell or assign these rights to others</p>

          </li>
        </ul><ul>
          <li>
            <p> to advertise or display by radio/video/online</p>

          </li>
        </ul>
        <ul>
          <li>

            <p> Copyright Registration acts as a strong legal tool to ovoid the
            infringe-ment and fraudal use of the Copyrighted work. </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
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
          <div class="col-lg-6 col-sm-6"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"style="display: flex;">
              <img width="100%" src="images1/StepsProcedure.jpg" style="display: flex; justify-content: center;align-items: center;">     
          </div>         
          <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
            <h3 class="num" style="text-align: center;" ><span class="textHead" >Procedure</span></h3>
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
               <p>An application for registration is to be made in a prescribed form as per the Copyright Act/ Rules.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="Strateg">
             <div class="design-process-content">
               <h3 class="semi-bold">Opposition</h3>
               <p>No action is taken by the copyright office for 30 days thereafter and it waits for the objections if any to be received. In case the objections are received, both the parties that is the person who has raised objections and the applicant are sent a letter and a reply is received. A hearing takes place before the Registrar and the application is accepted or rejected.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="optimizatio">
             <div class="design-process-content">
               <h3 class="semi-bold">Acceptance</h3>
               <p>Thereafter, the application may be accepted or rejected. If accepted, the Copyright office approves the registration and shall send extract from the Register to the Applicant.</p>
             </div>
           </div>
           <div role="tabpanel" class="tab-pane" id="conten">
             <div class="design-process-content">
               <h3 class="semi-bold">Registration Certificate</h3>
               <p>In case the discrepancies are not replied to, the application is rejected and the rejection letter is sent to the Applicant.
</p>              
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

  <div class="container ">
    <div class="row Acc">

            <div class="col-lg-6 col-sm-6" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                      
                <ul class="accordian">
                          <h2 style="text-align: center;" ><span class="textHead">Requirements for filing Application</span> </h2>
                    <li>
                        <input type="radio" name="accordian" id="first" checked>
                        <label for="first">Informational Requirements : </label>

                        <div class="content">
                            
                              <p>The name, address and nationality of the applicant.</p>
                              <p>Residential address of the applicant.</p>
                              <p>Name, address and nationality of the author; if the author is deceased, the date of his decease.</p>
                              <p>Title, language and brief description of the work.</p>
                            
                        </div>
                    </li>

                    <li>
                        <input type="radio" name="accordian" id="second">
                        <label for="second">Documentary Requirements : </label>
                        <div class="content">
                          <p>In case of a partnership concern: Copy of partnership deed</p>
                          <p>In case of a company: copy of memorandum and articles and certificate of incorporation duly attested as true copy</p>
                          <p>In case of a trust or an NGO: copy of trust deed with names and addresses of trustees</p>
                          <p>In case registration of Computer Software/ Literally Material / Musical Work then required the five copies of the work./ in case Artistic work then 10 color printouts of the logo.</p>
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
        <section id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
          <div class="container Acc">
            <div class="col-lg-6 col-sm-6 "><img class="ParaHigh" src="images1/man.png" ></div>
            <div class="col-lg-6 col-sm-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a></div>
          </div>
        </section>  
        <br><br>                              

    <div class="container">
    <div class="row"style="background-image: url(images1/bkwhite.jpg);">
      <!-- <div class="row"> -->
          <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="section-title text-center wow zoomIn">
                  <h2><span class="textHead">Frequently Asked Questions</span></h2> 
                  <p>If you have any doubts regarding Trademark then this article based on FAQs on Trademark Registration in India will clear all your doubts.</p>
              </div>
          </div>
      <!-- </div> -->
      <div class="row">               
          <div class="col-md-12">
              <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                  What is copyright ?
                              </a>
                          </h4>                    

                      </div>

                      <div id="collapseOne" class="collapse show" data-parent="#accordion" data-parent="#accordion">
                          <div class="panel-body">
                              <p>Copyright is a right given by the law to creators of literary, dramatic, musical and artistic works and producers of cinematograph films and sound recordings. In fact, it is a bundle of rights including, inter alia, rights of reproduction, communication to the public, adaptation and translation of the work. There could be slight variations in the composition of the rights depending on the work.
                              </p>
                          </div>
                      </div>
                  </div>            
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" >
                                 What is a work?
                             </a>
                         </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse"  data-parent="#accordion">
                      <div class="panel-body">
                          <p>A work means any of the following, namely, a literary, dramatic, musical or artistic work, a cinematograph film, or a sound recording.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree">
                              What types of work attract Copyright?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                      <div class="panel-body">
                          <p>The main branches of copyright are literary works (including computer programmes), dramatic works, musical works, artistic works, Cinematographic works and sound recording.
                          </p>
                          
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour">
                              What is an artistic work?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="panel-body">
                          <p>An artistic work means -</p>
<ul><li>
A painting, a sculpture, a drawing (including a diagram, map, chart or plan), an engraving or a photograph, whether or not any such work possesses artistic quality;
</li>
</ul>
<ul><li>
A work of architecture; and
</li>
</ul>
<ul><li>

Any other work of artistic craftsmanship.</ul>
</li>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFive">
                              How is Copyright obtained?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                      <div class="panel-body">
                          <p>Copyright in a work comes into existence automatically when the work is created. However, the copyright application should be filed as an evidence of ownership of the work.</p>
                      </div>
                  </div>
              </div>
          </div>
         </div> 
      </div>                                                                               
      </div><!--- END COL -->     
  </div><!--- END ROW -->  
  


<?php include 'footer.php' ?>