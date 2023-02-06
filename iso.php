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
       <li class="breadcrumb-item active" aria-current="page">ISO Registration</li>
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

<br><br><br>
   <div class="container " style="display: flex;" >    
    <div class="row content ">   
    <div class="col-lg-3 col-sm-6"  data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" > 
        <div class="menu" id="menu"style="position: sticky; top: 60px;" >
            <a href="#topic1" style="text-decoration: none;" >
                <div class="list"><span class="light"></span><span>What is ISO ? </span></div>
            </a>
            <a href="#topic2" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Benefits of ISO</span></div>
            </a>
            <a href="#topic3" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Advantages of ISO</span></div>
            </a>
            <a href="#topic4" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Charges for ISO 9001:2015</span></div>
            </a>
            <a href="#topic5" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Validity</span></div>
            </a>

        </div> 
    </div>
    <div class="col-lg-6 col-sm-6"  data-aos="fade-up" data-aos-offset="350"data-aos-easing="ease-in-sine" >
      <br>
        <div id="topic1">
            <h4><span class="textHead">What is ISO ? </span></h4>
            <br>
                <p>ISO (International Organization for Standardization) is the world's largest developer of voluntary International Standards. International Standards give state of the art specifications for products, services and good practice, helping to make industry more efficient and effective. </p>
                <p>Developed through global consensus, they help to break down barriers to international trade. </p>
                <p>The ISO 9000 standards cover an organisation's practices in fulfilling the customer's quality requirstrongents and applicable regulatory requirstrongents while aiming to enhance customer satisfaction and achieve continual improvstrongent of its performance in pursuit of these objectives.</p>
            <br>

<div id="topic2">
   <h4 ><span class="textHead">Benifits of ISO</span>  </h4>
   <!-- Start title section -->
   <div class="title">
       <!-- <h1 style="text-align:center; color: #ffb900;">What We Do ?</h1> -->
       <!-- Section's title goes here -->
       <p> With an ISO 9001 certified quality management system : </p>
       <!--Simple description for section goes here. -->
   </div>
   <!-- <div class="row"> -->
     
     <ul><li>   Common, understanding system including consistent and repeatable processes requisite for better establishment.</li></ul>
     <ul><li>  Disciplined and systematic way of functioning of an organization.</li></ul>
     <ul><li> Fewer failures in terms of quality of service or product. </li></ul>
     <ul><li>  Clarity for the people about what to do and how; less time spending on 'making things up' or 'finding things out or reinventing wheels</li></ul>
     <ul><li>  Better and more business opportunities as you can explore new markets or having the certificate distinguishes you in the marketplace.</li></ul>
     <ul><li>  Establishment of new process and resources and skills to identify & fix the problems in faster, better and cheaper way. </li></ul>
     <ul><li>  Better management control and reporting</li></ul>
     <ul><li>  You don't scratch your head wondering how to respond to tenders or other questions asking about your quality system, because you know! ( And that 'ISO 9001 cachet works wonders.) </li></ul>
</div>
<br>    
<div id="topic3">
    <h4 class="textHead">  ADVANTAGES OF ISO FOR AN ORGANIZATION  </h4>
    <p> Organisation consistently report many benefits from gaining ISO 9001 which include : </p>    
     <ul><li> Greater management control </li></ul>   
     <ul><li> Greater clarity about what they do and how </li></ul>   
     <ul><li> Improvements in customer satisfaction </li></ul>   
     <ul><li> Increased employee satisfaction </li></ul>   
     <ul><li> Reduced rework and frustration </li></ul>   
     <ul><li> Reduced maintenance effort. </li></ul>   
</div>
<br>    
<div id="topic4">
    <h4> <span class="textHead"> CHARGES FOR ISO 9001 : 2015</span>   </h4>
    <p> The Cost for the Certification process is just Rs 15,000 only. </p>
    <ul> <b>  Payment Terms :  </b>   </ul>    
     <ul><li> Rs 10,000 initially at the time of submission of documents </li></ul>   
     <ul><li> Rs 5,000 at the time of Verification and Certification.  </li></ul>   
    <ul> ( The final certificate will be issued after 15-20 working days of submission
documents )
   </ul>    
</div>
<br>    
<div id="topic5">
    <h4 ><span class="textHead">Validiy</span>    </h4>
    <p> The certificate will be valid for <b> 3 years  </b>  and hence one has to file a new application after every three years. </p>     
</div>
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


<br><br><br>
  


        <section class="design-process-section" id="process-tab">
         <div class="container Acc" >
          <div class="col-lg-6 col-sm-6 "  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"style="display: flex;">
              <img width="100%" src="images1/StpesIso.jpg" class="" >     
          </div>         
          <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
            <h3> <span class="textHead">Procedure</span></h3>
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
               <p>Common, understanding system including consistent and repeatable processes requisite for better establishment.</p>
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



<section id="about" class="about roomy-100">

    <div class="container ">
        <div class="row Acc">
            <div class="col-lg-6 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <ul class="accordian">
                    <h2 style="text-align: center;" ><span class="textHead Associate">DOCUMENTS REQUIRED FOR ISO 9001 REGISTRATION</span> </h2>
                    <li>
                        <input type="radio" name="accordian" id="first" checked>
                        <label for="first">Business Registration Proof</label>
                        <div class="content">
                            <p>A document proof of business required such as certificate of incorporation, GST certificate, MSME certificate, Trademark certificate, etc.
                            </p>
                        </div>
                    </li>

                    <li>
                        <input type="radio" name="accordian" id="second">
                        <label for="second">Letter Head or Visiting Card :</label>
                        <div class="content">
                            <p>A Letter Head or Visiting Card of the business required for which you are looking for ISO 9001 registration.
                            </p>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="accordian" id="third">
                        <label for="third">Sales and Purchase Invoice : </label>
                        <div class="content">
                            <p>A Sale and Purchase Invoice evidencing the nature of business activity for which you’re securing ISO 9001 registration.
                            </p>
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
 
<?php include 'content.php' ?>


  <div class="container" >
  <!-- <div class="row" > -->
    <div class="row">
        <div class="col-md-12">
            <div class="section-title text-center wow zoomIn">
                <h2 ><span class="textHead Associate">Frequently Asked Questions</span> </h2>
                <!-- <span></span> -->
                <p>If you have any doubts regarding Trademark then this article based on FAQs on Trademark Registration in India will clear all your doubts.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="background-image: url(images1/bkwhite.jpg);">
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
    <!-- </div><!--- END COL -->
</div><!--- END ROW -->  


<?php include 'footer.php' ?>