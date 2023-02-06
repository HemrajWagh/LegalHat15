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
      <link rel="stylesheet" type="text/css" href="css1/animate.css" />
      <!-- Fav and touch icons -->
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
      

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <link rel="shortcut icon" href="images/ico/favicon.ico">

      <!-- <style type="text/css">
          .dropright .dropdown-menu {
              top: 0;
              right: auto;
              left: 100%;
              margin-top: 0;
              margin-left: 0.125rem;
          }

      </style> -->
      <style type="text/css">
         .dropdown-submenu {
             position: relative;
         }

         .dropdown-submenu>.dropdown-menu {
             top: 0;
             left: 100%;
             margin-top: -6px;
             margin-left: -1px;
             -webkit-border-radius: 0 6px 6px 6px;
             -moz-border-radius: 0 6px 6px;
             border-radius: 0 6px 6px 6px;
         }

         .dropdown-submenu:hover>.dropdown-menu {
             display: block;
         }

         .dropdown-submenu>a:after {
             display: block;
             content: " ";
             float: right;
             width: 0;
             height: 0;
             border-color: transparent;
             border-style: solid;
             border-width: 5px 0 5px 5px;
             border-left-color: #000;
             margin-top: 5px;
             margin-right: -10px;
         }

         .dropdown-submenu:hover>a:after {
             border-left-color: #fff;
         }

         .dropdown-submenu.pull-left {
             float: none;
         }

         .dropdown-submenu.pull-left>.dropdown-menu {
             left: -100%;
             margin-left: 10px;
             -webkit-border-radius: 6px 0 6px 6px;
             -moz-border-radius: 6px 0 6px 6px;
             border-radius: 6px 0 6px 6px;
         }
      </style>

  </head>
  <body>

   <header id="header" >

  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="http://127.0.0.1/LegalHat15/"><img src="images/logo.png"width="170"height="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://127.0.0.1/LegalHat15/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                  
                  <!-- <li class="dropdown-divider"></li> -->
                  <li class="dropdown-submenu">
                    <a  class="dropdown-item" tabindex="-1" href="#">IPR Services</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/trademark.php">Trademark Registration </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/copyright.php">Copyright Registration </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/design-registration.php">Design Registration </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/patent.php">Patent Registration </a></li>
                    <!-- <li class="dropdown-divider"></li> -->
                      <!-- <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Even More..</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">3rd level</a></li>
                              <li class="dropdown-submenu"><a class="dropdown-item" href="#">another level</a>
                              <ul class="dropdown-menu">
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                              </ul>
                            </li>
                              <li class="dropdown-item"><a href="#">3rd level</a></li>
                        </ul>
                      </li> -->
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                       <a  class="dropdown-item" tabindex="-1" href="#">Compony Formation</a>
                       <!-- <li class="dropdown-divider"></li> -->
                       <ul class="dropdown-menu">
                         <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/private-limited.php">PVT Limited </a></li>
                         <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/LLP-registration.php">LLP </a></li>
                         <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/opc.php">OPC </a></li>
                       </ul>   
                  </li>    
                  
                  <li class="dropdown-item"><a href="http://127.0.0.1/LegalHat15/iso.php">Iso Registration</a></li>
                  <li class="dropdown-item"><a href="http://127.0.0.1/LegalHat15/fssai-registration.php">Food License</a></li>
                  <li class="dropdown-item"><a href="http://127.0.0.1/LegalHat15/gst.php">GST registration</a></li>
                  <!-- <li class="dropdown-divider"></li> -->
                  <li class="dropdown-submenu">
                    <a  class="dropdown-item" tabindex="-1" href="#">Other Registraion</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/startup.php">Make in india Certificattion</a></li>
                      <!-- <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Even More..</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">3rd level</a></li>
                              <li class="dropdown-submenu"><a class="dropdown-item" href="#">another level</a>
                              <ul class="dropdown-menu">
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                              </ul>
                            </li>
                              <li class="dropdown-item"><a href="#">3rd level</a></li>
                        </ul>
                      </li> -->
                      <li class="dropdown-item"><a href="#">Shop Act</a></li>
                      <li class="dropdown-item"><a href="http://127.0.0.1/LegalHat15/psara.php"> PSARA Registration</a></li>
                      <li class="dropdown-item"><a href="#"> Agreements</a></li>
                    </ul>
                  </li>
                  
                </ul>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Web Services
              </a>
              <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                  
                  <li class="dropdown-submenu">
                    <a  class="dropdown-item" tabindex="-1" href="#">Web Development</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a tabindex="-1" href="http://127.0.0.1/LegalHat15/web.php">Wordpress Development </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="#">Laravel Development </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="#">Angular Development </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="#">Ecommerce Development </a></li>
                      <li class="dropdown-item"><a tabindex="-1" href="#">Website Maintainance </a></li>
                      <!-- <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Even More..</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">3rd level</a></li>
                              <li class="dropdown-submenu"><a class="dropdown-item" href="#">another level</a>
                              <ul class="dropdown-menu">
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                                  <li class="dropdown-item"><a href="#">4th level</a></li>
                              </ul>
                            </li>
                              <li class="dropdown-item"><a href="#">3rd level</a></li>
                        </ul>
                      </li> -->
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="#">SEO</a></li>
                  <li class="dropdown-submenu">
                       <a  class="dropdown-item" tabindex="-1" href="http://127.0.0.1/LegalHat15/web.php">Digital Marketing</a>
                       <ul class="dropdown-menu">
                         <li class="dropdown-item"><a tabindex="-1" href="#">Google Adwords</a></li>
                         <li class="dropdown-item"><a tabindex="-1" href="#">Social Media</a></li>
                         <!-- <li class="dropdown-item"><a tabindex="-1" href="#"> </a></li> -->
                       </ul>   
                  </li>    
                </ul>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
          </li>

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>


            <div class="dropdown-menu dropdown-menu-right dropright" aria-labelledby="navbarDropdownMenuLink2">
                <a class="nav-link dropdown-toggle dropright" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  IPR Services
                </a>
                <div class="dropdown-menu dropdown-menu-right dropright " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/trademark.php">Trademark </a>
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">Copyright </a>
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">Design </a>
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/patent.php">Patent </a>
                </div>

                      <a class="nav-link dropdown-toggle dropright" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Compony Formation
                      </a>

                <div class="dropdown-menu dropdown-menu-right dropright " aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/trademark.php">PVT Limited</a>
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">LLP</a>
                    <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">OPC</a>
                </div>

                  <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">Iso Registration</a>
                  <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">Food License</a>
                  <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/patent.php">GST registration</a>
                            <a class="nav-link dropdown-toggle dropright" href="#" id="navbarDropdownMenuLink3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Other Registraion
                            </a>

                      <div class="dropdown-menu dropdown-menu-right dropright " aria-labelledby="navbarDropdownMenuLink3">
                          <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/trademark.php">Make in india Certificattion </a>
                          <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">Shop Act  </a>
                          <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php"> PSARA Registration </a>
                          <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">Agreements </a>
                      </div>
              </div>

          </li> -->


          <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Web Services
                    </a>


                    <div class="dropdown-menu dropdown-menu-right dropright" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/trademark.php">Trademark Registration</a>
                        <a class="nav-link dropdown-toggle dropright" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropright " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/trademark.php">Trademark </a>
                            <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">Copyright </a>
                            <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">Design </a>
                            <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/patent.php">Patent </a>
                        </div>
                        <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/copyright.php">Copyright Registration</a>
                        <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/design-registration.php">Design Registration</a>
                        <a class="dropdown-item" href="http://127.0.0.1/LegalHat15/patent.php">Patent Registration</a>
                    </div>
          </li> -->

        </ul>
    </nav>  
  </div>

  </header>

  </div>

   	

      <!-- <div ></div> -->
    <div class="container txtshadow hero" style=""  >
      <div class="col-lg-6 col-sm-12 float-bob heroSlide" style="background-image: url(images1/pic1.webp);z-index: 99; " ><img class="float-bob" src="images1/man.png"></div>
      <div class="col-lg-6 col-sm-12 ">
        <h1 class="head">" Empower Your Vision With <br> Our Solutions. "</h1>
        <h4>We appreciate your trust in us.</h4>
        <!-- <h2>Our executive will contact you shortly !!!</h2> -->
          <div  style=""> <a href=" " class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3; ">BROWSE OUR WORK</a></div>
        </div>
      </div>
    </div>

<br><br>
     <div class="container">                  
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
               <li class="breadcrumb-item active" aria-current="page">Web Services</li>
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
 <!-- <div class="container">
  <div class="row">
    
       <hr style="border-bottom:2px solid #fbb900;">
     </div>
   </div> -->

   <!-- </div>  -->

<br><br>
<div class="container">
	
   <section class="cardsB-wrapper" style="display: flex;
                justify-content: center;
                align-items: center; flex-wrap: wrap;">   
      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#" >
            <div>
               <img src="images1/webweb.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Web Development</h4>
                    <p>Responsive Web Design for Real Eastat,Ecommerce,all domains</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <div class="tag">HTML</div>
                      <div class="tag">CSS</div>
                      <div class="tag">JS</div>
                      <!-- <div class="tag">PHP</div> -->
                  </div>
              </div>
          </a>
      </div>

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/WebDev.png" style="border-radius: 0px 20px;" alt="">
                    <h4>WordPress Development</h4>
                    <p>Customize CMS Development for all domains</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <div class="tag">PHP</div>
                      <div class="tag">JS</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/stepLLP.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Plugin and Theme Development</h4>
                    <p>Fully Customize Theme Development</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <div class="tag">PHP</div>
                  </div>
              </div>
          </a>
      </div>


      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/WebLara.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Laravel Development</h4>
                    <p>Advanace web application using laravel framework</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <div class="tag">PHP</div>
                      <div class="tag">JS</div>
                      <div class="tag">MySQL</div>
                  </div>
              </div>
          </a>
      </div> 
      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#" >
            <div>
               <img src="images1/WebAng.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Angular Development</h4>
                    <p>Fast loading single page application</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags"style="flex-wrap: wrap;" >
                      <div class="tag">JS</div>
                      <div class="tag">HTML</div>
                      <div class="tag">CSS</div>
                      <div class="tag">PHP</div>
                      <div class="tag">MySQL</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/WebAngular.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Ecommerce Development</h4>
                    <p>Woocommerce,MERN Stage delelopment for all domains</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <div class="tag">Node JS</div>
                      <div class="tag">Ex JS</div>
                      <div class="tag">Mongo DB</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/WebMain.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Website Maintanance</h4>
                    <p>Security,No Downtime,Updation</p>
                    <!-- <div class="date">14 Oct 2017</div> -->
                    <div class="tags">
                      <div class="tag">AWS</div>
                  </div>
              </div>
          </a>
      </div>


      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/stepLLP.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Advance Dashboard for Lead Management</h4>
                    <p>Complete lead flow,tracking,distubution</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <div class="tag">PHP</div>
                      <div class="tag">MySQL</div>
                  </div>
              </div>
          </a>
      </div> 

      

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/stepLLP.png" style="border-radius: 0px 20px;" alt="">
                    <h4>SEO</h4>
                    <p>High relevency,Keyword,Optimization </p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <!-- <div class="tag">HTML</div> -->
                  </div>
              </div>
          </a>
      </div>

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/WebSoci.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Digital marketing</h4>
                    <p>Google Adwords,Native ads campaign</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <!-- <div class="tag">HTML</div> -->
                  </div>
              </div>
          </a>
      </div>

      <div class="cardB-grid-space">
          <!-- <div class="num">03</div> -->
          <a class="cardB" href="#">
            <div>
               <!-- <img src="images1/Awards/Achievers.jpeg" style="border-radius: 0px 20px;" alt=""> -->
               <img src="images1/WebSocial.png" style="border-radius: 0px 20px;" alt="">
                    <h4>Social Media Marketing</h4>
                    <p>Facebook,Instagram,Linkedin campaign</p>
                    <div class="date">14 Oct 2017</div>
                    <div class="tags">
                      <!-- <div class="tag">HTML</div> -->
                  </div>
              </div>
          </a>
      </div>  

     
    </section>
</div>


      <div class="container-fluid gtco-features-list">
       <div class="container">
           <h2  style="display: flex; justify-content: center;align-items: center;	"> <span class="textHead"> WHY CHOOSE US </span> </h2>

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

                               <div class="col-lg-6 col-sm-6 clientsFlex"data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" style=" display: flex; align-items: center; justify-content: center;">
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
                <br><br>

              <section id="parallex2"  style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
                <div class="container Acc ">
                  <div class="col-lg-6 float-bob-x " style="background-image:url(images1/pattern5.png);"><img class="float-bob ParaHigh" src="images1/man.png"></div>
                  <div class="col-lg-6 col-sm-6" style=""> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3; ">BROWSE OUR WORK</a></div>
                </div>
              </section>  
              <br><br><br><br>
                <section id="about" class="about roomy-100" >    

                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="section-title text-center wow zoomIn">
                          <h1 ><span class="textHead">Frequently Asked Questions	</span> </h1>
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

            <?php include 'footer.php' ?>
                    <?php 
                    unset($_SESSION['errors']);
                    unset($_SESSION['notmatched']);
                    unset($_SESSION['postval']);
                    unset($_SESSION['typeofflat1']);
                    unset($_SESSION['approxbudget1']);
                    // session_destroy();

                    ?>
                    </html> 

