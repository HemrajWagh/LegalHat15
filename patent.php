Patent Procedure In India
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
               <img src="images/3d.png" alt="image01">
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
        <li class="breadcrumb-item" aria-current="page">Patent Registration</li>
      </ol>
    </nav>
     </div>



<br><br>
<div class="row content">   
 <div class="container" style="display: flex;" >    
    <div class="col-lg-3 col-sm-6"  data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine"> 
        <div class="menu" id="menu"style="position: sticky; top: 60px;" >
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
    <div class="col-lg-6 col-sm-6"   data-aos="fade-up"data-aos-duration="500" data-aos-offset="350"data-aos-easing="ease-in-sine" >
        <div id="topic1" style="margin-top:20px;">
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
            <p> ● A patent gives you the right to stop others from copying,
                manufacturing, selling, and importing your invention without your
                permission. The existence of your patent may be enough on its
                own to stop others from trying to exploit your invention. If it does
                not, it gives you the right to take legal action to stop them exploiting
            your invention and to claim damages.</p>
            <p> ● The patent also allows you to:
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

    <div class="row">
        <div class="container Acc">

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

<div class="row-fluid">
    <div class="container-fluid"style="display:flex;">
        <div class="col-lg-6 col-sm-6" >
            <h3  style="text-align: center;"><span class="textHead">Patent Registratoin Steps</span> </h3>
            <img src="images1/PatentSteps870_440.png" alt="">
        </div>
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;"><span class="textHead">Patent Registratoin Process</span> </h3>
            <img src="images1/patentProcess.png" alt=""></div>
         </div>
</div>                                                                   


<br><br>


<section  class=""    id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);"  >

         <section class="info">
            <div class="container">
                <h2 class="" style="color: #ffb900;text-align: center;" ><span class="textHead">Awards & Achievement</span> </h2>
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
          <h5 class="" style="color:#ffb900; text-align: center;"><span class="textHead">DIFFERENT TYPES OF TRADEMARKS THAT CAN BE REGISTERED IN INDIA</span> </h5>
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




  <div class="row"style="background-image: url(images1/bkwhite.jpg);">
  <div class="container">
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

           <!--     <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!--  -->
</body>
</html>