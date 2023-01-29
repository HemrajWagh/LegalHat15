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

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">IPR Services</a>
                  <!-- <a class="dropdown-item" href="#">Private Limited Company</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Compony Formantion</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Iso Registration</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Food License</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">GST registration</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Make in india Certificattion</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Other Registraion</a>
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




    <div class="container">                  
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <!-- <li class="breadcrumb-item"><a href="#">Design Registration</a></li> -->
          <li class="breadcrumb-item" aria-current="page">Trademark Registration</li>
        </ol>
      </nav>
    </div>


    <div id="clients"style="background-image:url(images1/b.jpg)" >
     <div class="section primary-section"style="height: 100vh; width: 100%;">
      <div class="container">

       <div class="row" >
        <img src="images1/3banner.png" alt="" style="position: relative;  display: block; margin:;top:100px">
        <div class="col-lg-12 col-sm-6" >
         <!-- <div id='cursor'></div> -->
         <div class="canvas" style="display: block; margin:0 auto; margin-top: -400px; "  width="100" height="100">
           <ul class='tags-cloud'>
             <li class='tag'><span class='wrap'>Trademark</span></li>
             <!-- <li class='tag'><span class='wrap'>Copyright</span></li> -->
             <li class='tag'><span class='wrap'>Trademark</span></li>
             <li class='tag'><span class='wrap'>Copyright</span></li>
             <!-- <li class='tag'><span class='wrap'>Trademark</span></li> -->
             <li class='tag'><span class='wrap'>Copyright</span></li>
             <!-- <li class='tag'><span class='wrap'>Patent</span></li> -->
             <li class='tag'><span class='wrap'>Copyright</span></li>
             <!-- <li class='tag'><span class='wrap'>Patent</span></li> -->
             <!-- <li class='tag'><span class='wrap'>Company <br><br>Formation</span></li> -->
             <li class='tag'><span class='wrap'>Patent</span></li>
             <li class='tag'><span class='wrap'>Company <br><br>Formation</span></li>
             <!-- <li class='tag'><span class='wrap'>Company <br><br>Formation</span></li> -->
             <!-- <li class='tag'><span class='wrap'>Patent</span></li> -->
             <li class='tag'><span class='wrap'>ISO</span></li>
             <li class='tag'><span class='wrap'>Company <br><br>Formation</span></li>
             <li class='tag'><span class='wrap'>ISO</span></li>
             <li class='tag'><span class='wrap'>Website <br><br> Design</span></li>

           </ul>

         </div>

       </div>    
     </div>
   </div>

 </div>
 <div class="container">
  <div class="row">
    <div class="main_history fadeInUp" style="display:flex;margin-top: -150px;">
      <div class="col-lg-6 col-sm-6" style="border-right: 1px solid #ffb900;">

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
                      <hr style="border-bottom:2px solid #fbb900;">
                    </div>
                  </div>
                </div>    

                <br><br>
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
                    <hr style="border-bottom:2px solid #fbb900;">
                  </div>
                </div>
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
                      <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                        <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">Our  <br> Associated Partners </span> </h2> 
                        
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

                        <br><br><br><br><br><br>


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
                          <div class="scrollup">
                            <a href="#">
                              <i class="icon-up-open"></i>
                            </a>
                          </div>



                          <!-- ScrollUp button end -->
                          <!-- Include javascript -->
                          <script src="js/jquery.js"></script>
                          <script type="text/javascript" src="js/jquery.mixitup.js"></script>
                          <script type="text/javascript" src="js/bootstrap.js"></script>
                          <script type="text/javascript" src="js/modernizr.custom.js"></script>
                          <script type="text/javascript" src="js/jquery.bxslider.js"></script>
                          <script type="text/javascript" src="js/jquery.cslider.js"></script>
                          <script type="text/javascript" src="js/jquery.placeholder.js"></script>
                          <script type="text/javascript" src="js/jquery.inview.js"></script>
                          <!-- Load google maps api and call initializeMap function defined in app.js -->
                          <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=falsscript>
                            <!-- css3-mediaqueries.js for IE8 or older -->
                            <!-- [if lt IE 9] -->
                            <script src="js/respond.min.js"></script>
                            <!-- [endif]-->
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

                         <script src="js1/bootstrap.min.js"></script>
                         <script src="./form/script.js"></script>
                         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

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