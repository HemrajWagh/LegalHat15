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

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset=utf-8>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Legal | Hat</title>
      <!-- Load Roboto font -->
      <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
      <!-- Load css styles -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css1/bootstrap.min.css">
      <!-- custom CSS -->
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" /> -->
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->

      <link rel="stylesheet" href="./form/style.css">

      <!-- awesone fonts css-->
      <link href="css1/font-awesome.css" rel="stylesheet" type="text/css">
      <!-- owl carousel css-->
      <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
      <!-- Bootstrap CSS -->

      <!-- custom CSS -->
      <link rel="stylesheet" href="css1/style.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

      <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
      <!-- <link rel="stylesheet" type="text/css" href="css/pluton.css" /> -->
      <!-- [if IE 7]> -->
      <!-- <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" /> -->
      <!-- <![endif]--> 
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link rel="shortcut icon" href="images/ico/favicon.ico">



    </head>

    <body>

 <header id="header" >
         
       <div class="container">
           
            <nav class="navbar navbar-expand-lg navbar-light ">
              <a class="navbar-brand" href="#"><img src="images/logo.png"width="170"height="50" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse textHead" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Services
                    </a>
                    <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IPR Services</a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/trademark.php">Trademark Registration</a>
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">Copyright Registration</a>
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">Design Registration</a>
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/patent.php">Patent Registration</a>
                            </div>

                      <div class="dropdown-divider"></div>
                      <!-- <a class="dropdown-item" href="#">Compony Formation</a> -->
                            <a class="dropdown-item dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compony Formation</a>
                            <div class="dropdown-menu dropdown1 dropdown-menu-right">
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/private-limited.php">PVT Limited</a>
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/llp-registration.php">LLP</a>
                              <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/opc.php">OPC</a>
                            </div>

                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/iso.php">Iso Registration</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/fssai-registration.php">Food License</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/gst.php">GST registration</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/">Make in india Certificattion</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/">Other Registraion</a>
                     
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Registration
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Private Limited Company</a>
                      <!-- <a class="dropdown-item" href="#">Private Limited Company</a> -->
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">LIMITED LIABILITY PARTNERSHIP</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Contact Us</a>
                  </li>
                </ul>
                
              </div>
            </nav>


       </div>   

  </header>


<!-- Start home section -->
<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider">
        <!-- <div class="triangle"></div> -->
        <!-- mask elemet use for masking background image -->
        <div class="mask"></div>
        <!-- All slides centred in container element -->
        <div class="container">
            <!-- Start first slide -->
            <div class="da-slide">
                <h2 class="fittext2">Trademark</h2>
                <!-- <h4>Trademark</h4> -->
                <p>A trademark, trade mark, or trade-mark is a distinctive 
                    sign or indicator used by an individual, business 
                    organization, or other legal entity to identify that the 
                    products or services to consumers with which the 
                    trademark appears originate from a unique source, 
                    designated for a specific market, and is used to 
                    distinguish its products or services from those of other 
                entities.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                   <!-- <a href="https://icons8.com/illustrations/author/JTmm71Rqvb2T">Dani Grapevine</a> from <a href="https://icons8.com/illustrations">Ouch!</a> -->
                   <img src="images/3d.png" alt="image01" width="320">
               </div>
           </div> 
           <!-- End first slide -->
           <!-- Start second slide -->
           <div class="da-slide">
            <h2>Copyright</h2>
            <!-- <h4>Copyright</h4> -->
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="images/anime.gif" width="320" alt="image02">
            </div>
        </div>
        <!-- End second slide -->
        <!-- Start third slide -->
        <div class="da-slide">
            <h2>Patent Registration</h2>
            <!-- <h4>Patent</h4> -->
            <p>Patent is a major part of Intellectual Property which grants its' 
                inventor, the right of exploiting its object exclusively, during a 
            given time period.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="images/patent.gif" width="320" alt="image03">
            </div>
        </div>
        <div class="da-slide">
            <h2>Company Formation</h2>
            <!-- <h4>Company Formation</h4> -->
            <p>Company formation is the term for the process of incorporation 
                of a business. It is also sometimes referred to as 
                company registration. Under company law and most 
                international law a company or corporation is considered to be 
                an entity that is separate from the people who own or operate 
            the company.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="images/Compani.png" width="320" alt="image03">
            </div>
        </div>
        <div class="da-slide">
            <h2>ISO</h2>
            <!-- <h4>ISO</h4> -->
            <p>ISO's work makes a positive difference to the world we live in. 
                ISO standards add value to all types of business operations. 
                They contribute to making the development, manufacturing 
                and supply of products and services more efficient, safer 
                and cleaner. They make trade between countries easier and 
                fairer. ISO standards also serve to safeguard consumers and 
                users of products and services in general - as well as making 
            their lives simpler.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="images/iso.png" width="320" alt="image03">
            </div>
        </div>
        <div class="da-slide">
            <h2>Website Design</h2>
            <!-- <h4>Website Design</h4> -->
            <p>A Web service is a method of communication between two 
                electronic devices over the Web. It includes website 
                development and various online services required for 
            set up of a enterpreneurship.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="images/Web.png" width="320" alt="image03">
            </div>
        </div>
        <!-- Start third slide -->
        <!-- Start cSlide navigation arrows -->
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
        <!-- End cSlide navigation arrows -->
    </div>
</div>
</div>
<!-- End home section -->
<!-- Service section start -->

<div class="container">                  
   <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
       <li class="breadcrumb-item active" aria-current="page">ISO Registration</li>
   </ol>
</nav>
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
    <div class="col-lg-6"  data-aos="fade-up" data-aos-offset="350"data-aos-easing="ease-in-sine" >
        <div id="topic1">
            <h4 >What is ISO ? </h4>
            <br>
                <p>ISO (International Organization for Standardization) is the world's largest developer of voluntary International Standards. International Standards give state of the art specifications for products, services and good practice, helping to make industry more efficient and effective. </p>
                <p>Developed through global consensus, they help to break down barriers to international trade. </p>
                <p>The ISO 9000 standards cover an organisation's practices in fulfilling the customer's quality requirstrongents and applicable regulatory requirstrongents while aiming to enhance customer satisfaction and achieve continual improvstrongent of its performance in pursuit of these objectives.</p>
            <br>

<div id="topic2">
   <h4>Benifits of ISO </h4>
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
    <h4>  ADVANTAGES OF ISO FOR AN ORGANIZATION  </h4>
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
    <h4>  CHARGES FOR ISO 9001 : 2015  </h4>
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
    <h4>  Validiy  </h4>
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
         <div class="container" >
          <div class="col-lg-6 col-sm-6"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine"style="display: flex;">
              <img width="100%" src="images1/StpesIso.jpg" style="display: flex; justify-content: center;align-items: center;">     
          </div>         
          <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine"> 
            <h3 class="txtshadow num" >Procedure</h3>
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

    <div class="container Acc">
        <div class="row">
            <div class="col-lg-6 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
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

            <div class="col-lg-6 col-sm-6" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                <img src="images1/StepsCheck.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<br>
    <div class="container content1" style="display: flex; " >
        <div class="row ">
        <!-- <div class="col-lg-6 col-sm-6"></div> -->
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Procedure for registration of a logo / monogram </h3>
            <img src="images1/patentProcess.png" alt="">
        </div>
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Procedure for registration for service
            Industries : </h3>
            <img src="images1/patentProcess.png" alt="">
        </div>
    </div>
</div>


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

           <!-- <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
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
