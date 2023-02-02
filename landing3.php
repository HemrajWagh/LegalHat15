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
    <link rel="stylesheet" href="css1/style.css" type="text/css" >

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

      <link rel="stylesheet" type="text/css" href="css1/animate.css">

    </head>

    <body>



     <header id="header" >

       <div class="container">

          <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="http://127.0.0.1/LegalHat15/"><img src="images/logo.png"width="170"height="50" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="http://127.0.0.1/LegalHat15/">Home <span class="sr-only">(current)</span></a>
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
            Web Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Private Limited Company</a>
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


      <!-- <div ></div> -->
    <div class="container txtshadow hero" style=""  >
      <div class="col-lg-6 col-sm-12 float-bob" style="background-image: url(images1/pic1.webp);z-index: 99; " ><img class="float-bob" src="images1/man.png"></div>
      <div class="col-lg-6 col-sm-12">
        <h1 class="head">" Empower Your Vision With <br> Our Solutions. "</h1>
        <h4>We appreciate your trust in us.</h4>
        <!-- <h2>Our executive will contact you shortly !!!</h2> -->
          <div  style=""> <a href=" " class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3; ">BROWSE OUR WORK</a></div>
        </div>
      </div>
    </div>

<br><br>
     <div class="container">
     
     <div class="main_history fadeInUp" style="">
      <div class="col-lg-6 col-sm-6" style="border-right: 1px solid #ffb900;">

        <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">We Are Associated With </span> </h2>
        <br> 
        <div class="single_history_img">
          <div class="row ">

            <div class="container" style="display: flex;">
              <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                <img src="images1/tiaup/axis.jpeg"  style="border-radius: 10px;"   alt="Logo 1" width="100%" class="shadowbtn">
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
      <div class="col-lg-6 col-sm-6" style="border-left: 1px solid #ffb900;">
        <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our Associated Partners </span> </h2> 

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
           </div>
         </div>

        </div>  
 <!-- <div class="container">
  <div class="row">
    
       <hr style="border-bottom:2px solid #fbb900;">
     </div>
   </div> -->

   <!-- </div>                                    -->



      <div class="container-fluid gtco-features-list">
       <div class="container">
           <h2 style="text-align: center;font-family: Lato-Medium;
           font-weight: 900!important;
           position: relative;
           margin-bottom: 30px;
           text-transform: uppercase;text-shadow: 0px 3px 12px #c3c3c3;">WHY CHOOSE US</h2>

           <div class="row">
               <div class="media col-md-6 col-lg-4">
                   <div class="oval mr-4"><img class="align-self-start" src="images1/TmRg.png" alt=""></div>
                   <div class="media-body">
                       <h5 class="mb-0">Data Security & Trust</h5>
                       "Data security is not optional, it's necessary. We secure your data, so you can focus on what matters."
                   </div>
               </div>
               <div class="media col-md-6 col-lg-4">
                   <div class="oval mr-4"><img class="align-self-start" src="images1/TmRg.png" alt=""></div>
                   <div class="media-body">
                       <h5 class="mb-0">On Time Service</h5>
                       "Service on time, every time, Never wait for good service again , We value your time, and deliver on it. "
                   </div>
               </div>
               <div class="media col-md-6 col-lg-4">
                   <div class="oval mr-4"><img class="align-self-start" src="images1/TmRg.png" alt=""></div>
                   <div class="media-body">
                       <h5 class="mb-0">Affordable Pricing</h5>
                       "Affordable prices, unbeatable value. The smart choice for affordability and quality , Get more for less, with our affordable pricing ."
                   </div>
               </div>
               <div class="media col-md-6 col-lg-4">
                   <div class="oval mr-4"><img class="align-self-start" src="images1/TmRg.png" alt=""></div>
                   <div class="media-body">
                       <h5 class="mb-0">Easy To Use</h5>
                      "Ease of use, at your fingertips , Say goodbye to complexity, hello to ease." 
                   </div>
               </div>
               <div class="media col-md-6 col-lg-4">
                   <div class="oval mr-4"><img class="align-self-start" src="images1/TmRg.png" alt=""></div>
                   <div class="media-body">
                       <h5 class="mb-0">Free Support</h5>
                       "Support that's always free, always available. Expert support, always at your service, gratis."
                   </div>
               </div>
               <div class="media col-md-6 col-lg-4">
                   <div class="oval mr-4"><img class="align-self-start" src="images1/TmRg.png" alt=""></div>
                   <div class="media-body">
                       <h5 class="mb-0">Trained & Professional Experts</h5>
                      "Expertise you can trust, professionalism you can count on. The best in the business, backed by training and experience." 
                   </div>
               </div>
           </div>
       </div>
   </div>   




   <br><br>
  <section  class=""    id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);"  >
  <div class="container-fluid">
    <!-- <div class="row"> -->

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
                    <div class="row">
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
                        </div>
                        </div>
                      </section>
<br><br>                      

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
                               <div class="row ">
                                <div class="container" style="display: flex;">
                                 <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                  <img src="images1/logo/dudhraja.jpeg" style="border-radius: 5px; " alt="Logo 3" width="35%" class="shadowbtn">
                                </div>
                                <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                 <img src="images1/logo/spiceLogo.png" style="border-radius: 5px; " alt="Logo 2" width="45%" class="shadowbtn">
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

              <section id="parallex2"  style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
                <div class="container" style="display: flex;">
                  <div class="col-lg-6 float-bob-x" style="background-image:url(images1/pattern5.png);"><img class="float-bob" src="images1/man.png" width="60%" ></div>
                  <div class="col-lg-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3; ">BROWSE OUR WORK</a></div>
                </div>
              </section>  
              <br><br><br><br>
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
              <!-- Footer section start -->
                  <!-- <div class="footer">
                      <pShared by <i class="fa fa-love"></i><a href="#">hemraj</a>
                      </p>
                    </div> -->
                    <!-- Footer section end -->
                    <!-- ScrollUp button start -->

                     <footer class="container-fluid" id="gtco-footer" style="background-image:url(images1/bk1.jpg); ">
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
                                             <h4 class="mt-5">Follow Us</h4>
                                             <ul class="nav follow-us-nav">
                                                 <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                                   <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                      <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                          <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-linkedin"></i> </a></li>
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

                                 <div>
                                    <a class="website floting"  target="_blank" href="https://api.whatsapp.com/send?phone=919960482299"><img src="images1/whatsapp.png" width="10%" style="animation-iteration-count: infinite;animation-duration: calc(var(--animate-duration)*1.25); position: fixed;left: 18px;bottom: 4%;float: left;z-index: 9;" class="whtsapp animate__bounceIn animate__infinite"></a>     
                                </div>
                               <!-- <div>
                                    <a class="website floting "  target="_blank" href="https://api.whatsapp.com/send?phone=918956498759"><img src="images1/fotterbtn.svg" width="10%" style="animation-iteration-count: infinite;animation-duration: calc(var(--animate-duration)*1.25); position: fixed;right: 18px;bottom: 4%;float: right ;z-index: 9;" class="whtsapp animate__bounceIn animate__infinite"></a>     
                                </div> -->

                                <!-- Large modal -->
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button> -->


                                <img data-toggle="modal" data-target=".bd-example-modal-sm" src="images1/fotterbtn.svg" width="10%" style="animation-iteration-count: infinite;animation-duration: calc(var(--animate-duration)*1.25); position: fixed;right: 18px;bottom: 4%;float: right ;z-index: 9; cursor: pointer" class=" whtsapp animate__bounceIn animate__infinite">

                               <!-- <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-sm">
                                   <div class="modal-content">
                                     ...
                                   </div>
                                 </div>
                             </div>  -->
                               <!-- <div class="modal  bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-left: 0px; width: 375px; left: 74%;padding-right: 0px;">
                                 <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                     
                                   </div>
                                 </div>
                             </div> -->

                             <!-- Small modal -->

                             <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="margin-left: 0px;left: 75%;top:25%;width: 370px;height: 355px;padding-left: 0px; ">
                               <!-- <div class="modal-dialog modal-sm"> -->
                                 <!-- <div class="modal-co    ntent"> -->
                                   <div class="container " >
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
                             <script src="js1/jquery-3.3.1.slim.min.js"></script>
                             <script src="js1/popper.min.js"></script>
                             <script src="owl-carousel/owl.carousel.min.js"></script>
                             <script src="js1/bootstrap.min.js"></script>
                             <script src="js1/main.js"></script>
                             <script src="./form/script.js"></script>
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
                    <!--  -->



                    <!-- Swiper JS-->
                    <script src="js1/swip.js"></script>
                    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->
                    <!-- Initialize Swiper -->
                    <script>
                       var swiper = new Swiper(".mySwiper", {
                         slidesPerView: 3,
                         spaceBetween: 5,
                         freeMode: true,
                         grabCursor: true,
                         mousewheel: true,
                         autoplay: {
                          delay: 2000,
                          disableOnInteraction: true,
                      },
                      pagination: {
                       el: ".swiper-pagination",
                       clickable: true,
                    },
                    });
                    </script>

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