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

<div class="section primary-section" id="service">
    <div class="container-fluid"   >
        <!-- Start title section -->
        <!-- <div class="title"> -->
            <!-- <h1>What We Do?</h1> -->
            <!-- Section's title goes here -->
            <!-- <p>Setup & Delivered 2,00,000 + New Companies and Business Licenses for MSMEs in India and continuing…</p> -->
            <!--Simple description for section goes here. -->
            <!-- </div> -->

            <br>
            <div class="container gtco-features" id="about">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12" data-aos="fade-right"data-aos-offset="350"data-aos-easing="ease-in-sine" >
                            <h2 class="txtshadow"style="margin-bottom: 0px;">"Unlock The <span id="highlight">Possibilities</span> </h2>  <h2 style="text-align:center; margin-top: 0px;">With Our <span style="color: ">Services</span> "</h2>
                            <h2 style="margin-top: 0px;">We Offer For You </h2>
                            <p><span id="highlight">"</span> Discover the full range of services we have to offer and unlock the possibilities for your success. <span id="highlight">"</span></p>
                            <a class="shadowbtn txtshadow" href="#parallex2">All Services <img class="txtshadow" src="images1/right.png" alt=""></a></div>
                            <div class="col-lg-8" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                                <svg id="bg-services"
                                width="100%"
                                viewBox="0 0 1000 800">
                                <defs>
                                    <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                                d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                            </svg>
                            <div class="row">
                                <div class="col" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                                    <div class="card text-center animate__animated animate__fadeInRight">
                                        <div class="oval shadowbtn"><img class="card-img-top" src="images1/trademark.png" alt=""></div>
                                        <div class="card-body txtshadow shape-image-list right-top" >
                                            <h3 class="card-title">TRADEMARK REGISTRATION</h3>
                                            <p class="card-text">" Building a Strong Brand, Securing Your Identity. "</p>
                                        </div>
                                    </div>
                                    <div class="card text-center animate__animated  animate__fadeInRight">
                                        <div class="oval shadowbtn"><img class="card-img-top" src="images1/CpRg.png" alt=""></div>
                                        <div class="card-body txtshadow shape-image-list right-top">
                                            <h3 class="card-title">COPYRIGHT REGISTRATION</h3>
                                            <p class="card-text">" Securing Your Creativity, Protecting Your Rights. "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"  data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                                    <div class="card text-center ">
                                        <div class="oval shadowbtn "><img class="card-img-top" src="images1/TmRg.png" alt=""></div>
                                        <div class="card-body txtshadow shape-image-list right-top" >
                                            <h3 class="card-title">DESIGN REGISTRATION</h3>
                                            <p class="card-text">" Designing for Success, Registering for Protection. "</p>
                                        </div>
                                    </div>
                                    <div class="card text-center animate__animated animate__fadeInRight">
                                        <div class="oval shadowbtn"><img class="card-img-top" src="images1/patent.png" alt=""></div>
                                        <div class="card-body txtshadow shape-image-list right-top">
                                            <h3 class="card-title">PATENT REGISTRATION</h3>
                                            <p class="card-text">" Protecting your innovations, securing your future. "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    </div>






    <!-- <div>
        <div class="card text-center">
            <img class="card-img-top" src="images1/logo1.jpeg" alt="">
            <div class="card-body" style="padding: 0px;" >
                
            </div>
        </div>
    </div> -->
    
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<br>

<section class="info">
    <div class="container">
        <h2 class="txtshadow num" style="color: #ffb900;text-align: center;">Awards & Achievement</h2>
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
      <br> 

      <div class="container  " style="display: flex;">
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
             <img src="images1/logo/png.jpeg"style="border-radius: 5px; " alt="Logo 4" width="60%" class="shadowbtn">
         </div>

     </div>
 </div>


        <!-- <div> <img src="images1/logo/active.jpeg" width="2%"> </div>
        <div> <img src="images1/logo/bhumi.jpeg"> </div>
        <div> <img src="images1/logo/dudhraja.jpeg"> </div>
        <div> <img src="images1/logo/logica.jpeg"> </div>
        <div> <img src="images1/logo/meatbox.jpeg"> </div>   -->  


        <div class="container-fluid gtco-features" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-sm-12" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine" >
                        <svg id="bg-services"
                        width="100%"
                        viewBox="0 0 1000 800">
                        <defs>
                            <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                            </linearGradient>
                        </defs>
                        <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                        d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                    </svg>
                    <div class="row">
                        <div class="col" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                            <div class="card text-center">
                                <div class="oval shadowbtn"><img class="card-img-top" src="images1/isoRg.png" alt=""></div>
                                <div class="card-body txtshadow">
                                    <h3 class="card-title">ISO REGISTRATION</h3>
                                    <p class="card-text">" Raising the Standard, Achieving ISO Registration. "</p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval shadowbtn"><img class="card-img-top" src="images1/companies.png" alt=""></div>
                                <div class="card-body txtshadow">
                                    <h3 class="card-title">FORMATION OF COMPANIES</h3>
                                    <p class="card-text">" Bringing Your Vision to Life, Through Company Formation. "</p>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine" > 
                            <div class="card text-center">
                                <div class="oval shadowbtn"><img class="card-img-top" src="images1/webservices.png" alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">WEB SERVICES</h3>
                                    <p class="card-text">" Connecting You to the World, Through Web Services. "</p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval shadowbtn"><img class="card-img-top" src="images1/branding.png" alt=""></div>
                                <div class="card-body txtshadow">
                                    <h3 class="card-title">BRANDING SERVICES</h3>
                                    <p class="card-text">" Standing Out in the Crowd: Branding Services. "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <h2 class="txtshadow"> Explore The <span id="highlight">Services</span><br/>
                    We Offer For You </h2>
                    <p> <span id="highlight">"</span> Whether you need help with a specific problem or are looking for new ways to grow, our team of experts can provide the support you need. Browse our offerings today and take the first step towards achieving your goals.<span id="highlight">"</span> </p>
                    <a class="shadowbtn txtshadow" href="#parallex2"><img  class="txtshadow" src="images1/left.png" alt=""> All Services</a>
                </div>


            </div>
        </div>
    </div>



    <!-- <div class="container-fluid gtco-feature" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cover">
                        <div class="card">
                            <svg
                                    class="back-bg"
                                    width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                                <defs>
                                    <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                      d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                            </svg>
                           

                            <svg width="100%" viewBox="0 0 700 500">
                                <clipPath id="clip-path">
                                    <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                                </clipPath>
                              
                                <image clip-path="url(#clip-path)" xlink:href="images1/learn-img.jpg" width="100%"
                                       height="465" class="svg__image"></image>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2> We are a Creative Digital
                        Agency & Marketing Experts </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus turpis nisl, vitae dictum mi
                        semper convallis. Ut sapien leo, varius ac dapibus a, cursus quis ante. </p>
                    <p>
                        <small>Nunc sodales lobortis arcu, sit amet venenatis erat placerat a. Donec lacinia magna nulla,
                            cursus impediet augue egestas id. Suspendisse dolor lectus, pellentesque quis tincidunt ac,
                            dictum id neque.
                        </small>
                    </p>
                    <a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div> -->




    <div class="container-fluid gtco-testimonials" id="parallex" style="padding-bottom: 50px; background-image: url(images1/bk1.jpg);box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);">
        <div class="container">
            <h2 class="txtshadow" style="color: #ffb900;padding-top:50px ;">WE ARE <br> ASSOCIATED WITH     </h2>
            <div class="owl-carousel owl-carousel3 owl-theme">
                <div>
                    <div class="card text-center">
                        <img class="card-img-top" src="images1/logo1.jpeg" alt="">
                        <div class="card-body" style="padding: 0px;" >
                            <h5 class="txtshadow">Partnering for success <br/>
                                <!-- <span> Director Dynamic Enterprises </span></h5>
                                    <p class="card-text">“ Very professional and responsible. Excellent problem solvers, and a great guide for the first timers in this field. Brilliant team of consultants & legal professionals. Very prompt and helpful in responses. ” </p> -->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card text-center">
                                <img class="card-img-top" src="images1/logo2.jpeg" alt="">
                                <div class="card-body"style="padding: 0px;">
                                    <h5 class="txtshadow">Together, achieving more<br/>
                                    <!-- <span> Director V. R. Marketers </span></h5>
                                        <p class="card-text">“ LegalHat has executed numerous successful projects for us. Team's professionalism, technical knowhow & quality sets them apart from many other service providers. We would definitely recommend LegalHat as a preferred long term partner for any requirements in registration field ” </p> -->
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card text-center">
                                    <img class="card-img-top" src="images1/logo3.jpeg" alt="">
                                    <div class="card-body"style="padding: 0px;">
                                        <h5 class="txtshadow">Connecting for growth<br/>
                                        <!-- <span> Director Markets & Markets </span></h5>
                                            <p class="card-text">“ LegalHat has helped us to register our brands, domain names and ensured maximum protection for our brand names in the market. We are exceptionally happy with LegalHat professionalism; responsiveness & attention to the needs of our surveying firm. We highly recommend LegalHat services to all who seek a superbly visible & professional looking protecting,registering & promoting entrepreneurship in the market. ” </p> -->
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card text-center">
                                        <img class="card-img-top" src="images1/logo4.jpeg" alt="">
                                        <div class="card-body"style="padding: 0px;">
                                            <h5 class="txtshadow">Stronger together<br/>
                                            <!-- <span> M D Rural Development Agency </span></h5>
                                                <p class="card-text">“ Your commitment to high quality work & client satisfaction was clearly demonstrated during our work together on our website. Your expertise,accessibility and client servicing standards all contributed in making this process smooth & stress free. Your willingness to experiment with different ideas and your genuine desire to push for the best possible output was particularly appreciated. We look forward to a continued association. Wishing you all the best ” </p> -->
                                            </div>
                                        </div>
                                    </div>


                                    
                                </div>
                            </div>
                        </div>
                    </div>



                    <br><br>
                    <div class="container-fluid gtco-numbers-block" >
                        <div class="container">
                            <svg width="100%" viewBox="0 0 1600 400" >
                                <defs>
                                    <linearGradient id="PSgrad_03" x1="50%" x2="0%"  y2="0%">
                                       <stop offset="0%" style="stop-color:rgba(252,200,19,1);stop-opacity:1" />
                                       <stop offset="100%" style="stop-color:rgba(252,225,29,1);stop-opacity:1" />
                                       <!-- <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" /> -->
                                       <!-- <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" /> -->

                                   </linearGradient>

                               </defs>
                               <!-- <clipPath id="clip-path3"> -->

                                  <!-- </clipPath> -->

                                  <path fill-rule="evenodd"  fill="url(#PSgrad_03)"
                                  d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>

                                  <clipPath id="ctm" fill="none">
                                    <path
                                    d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>
                                </clipPath>

                                <!-- xlink:href for modern browsers, src for IE8- -->
                                <image  clip-path="url(#ctm)" xlink:href="images1/word-map.png" height="800px" width="100%" class="svg__image">

                                </image>

                            </svg>
                            <div class="row" style="box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);">
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">125</h5>
                                            <p class="card-text">Active Projects</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">200</h5>
                                            <p class="card-text">Business Growth</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">530</h5>
                                            <p class="card-text">Completed Projects</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">941</h5>
                                            <p class="card-text">Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <br><br><br>
                    <div class="section primary-section"  id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);padding-bottom: 50PX; ">
                        <div class="container" >
                            <!-- Start title section -->
                            <div class="title txtshadow">
                                <h1 style="text-align:center; color: #ffb900;padding-top: 50px;">What We Do ?</h1>
                                <!-- Section's title goes here -->
                                <p  style="text-align:center;color: #ffb900;"> Setup & Delivered 2,00,000 + New Companies and Business Licenses for MSMEs in India and continuing…</p>
                                <!--Simple description for section goes here. -->
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

                    <!-- <div class="row">
                        <div class="container">
                            <div class="owl-carousel">
                              <div> <img src="images1/logo/active.jpeg" alt=""> </div>
                              <div> <img src="images1/logo/bhumi.jpeg" alt=""> </div>
                              <div> <img src="images1/logo/dudhraja.jpeg" alt=""> </div>
                              <div> <img src="images1/logo/kirana.jpeg" alt=""> </div>
                              <div> <img src="images1/logo/logica.jpeg" alt=""> </div>
                              <div> <img src="images1/logo/" alt=""> </div>
                              <div> <img src="images1/logo/" alt=""> </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row line" style="">
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




<div class="container-fluid gtco-testimonials">
    <div class="container">

        <h2 class="text-center"> <span class="textHead"></span>What our customers say about us.</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center">
                    <!-- <img class="card-img-top" src="images1/customer1.jpg" alt=""> -->
                    <div class="card-body">
                        <h5>Hussain Sharief <br/>
                            <span> Director Dynamic Enterprises </span></h5>
                            <p class="card-text">“ Very professional and responsible. Excellent problem solvers, and a great guide for the first timers in this field. Brilliant team of consultants & legal professionals. Very prompt and helpful in responses. ” </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center">
                        <!-- <img class="card-img-top" src="images1/customer2.jpg" alt=""> -->
                        <div class="card-body">
                            <h5>Dalsukh Bauva<br/>
                                <span> Director V. R. Marketers </span></h5>
                                <p class="card-text">“ LegalHat has executed numerous successful projects for us. Team's professionalism, technical knowhow & quality sets them apart from many other service providers. We would definitely recommend LegalHat as a preferred long term partner for any requirements in registration field ” </p>
                            </div>
                        </div>
                    </div>      
                    <div>
                        <div class="card text-center">
                            <!-- <img class="card-img-top" src="images1/customer3.jpg" alt=""> -->
                            <div class="card-body">
                                <h5>Sanjay Shah<br/>
                                    <span> Director Markets & Markets </span></h5>
                                    <p class="card-text">“ LegalHat has helped us to register our brands, domain names and ensured maximum protection for our brand names in the market. We are exceptionally happy with LegalHat professionalism; responsiveness & attention to the needs of our surveying firm. We highly recommend LegalHat services to all who seek a superbly visible & professional looking protecting,registering & promoting entrepreneurship in the market. ” </p>
                                </div>
                            </div>
                        </div>   
                        <div>
                            <div class="card text-center">
                                <!-- <img class="card-img-top" src="images1/customer3.jpg" alt=""> -->
                                <div class="card-body">
                                    <h5>Abhijit Bhangar<br/>
                                        <span> M D Rural Development Agency </span></h5>
                                        <p class="card-text">“ Your commitment to high quality work & client satisfaction was clearly demonstrated during our work together on our website. Your expertise,accessibility and client servicing standards all contributed in making this process smooth & stress free. Your willingness to experiment with different ideas and your genuine desire to push for the best possible output was particularly appreciated. We look forward to a continued association. Wishing you all the best ” </p>
                                    </div>
                                </div>
                            </div>   
                            <div>
                                <div class="card text-center">
                                    <!-- <img class="card-img-top" src="images1/customer3.jpg" alt=""> -->
                                    <div class="card-body">
                                        <h5>Dinesh Mulchandani<br/>
                                            <span> Director Prestige Imports and Exports </span></h5>
                                            <p class="card-text">“ We were looking for a good company who can give us
                                               what we wanted. And I believe LegalHat gave us
                                               what we wanted. They have a talented team and are
                                               the best in this field, and they know how to
                                               communicate and provide the best & they follow the
                                               registration process till the end. One more, I never met
                                               the company people while I working at my desk in
                                               United States and still I got all my work done easily
                                           even though I am so far from them. ” </p>
                                       </div>
                                   </div>
                               </div>   
                               <div>
                                <div class="card text-center">
                                    <!-- <img class="card-img-top" src="images1/customer3.jpg" alt=""> -->
                                    <div class="card-body">
                                        <h5>Chirag Shah<br/>
                                            <span> Xylus Pharmaceuticals </span></h5>
                                            <p class="card-text">“ I have been associated with LegalHat for a long time &
                                               can endorse that it has been a pleasure working with them.
                                               It has a team that pays thorough attention to detail &
                                               I can't be more pleased with the quality of work. Their
                                               openness to input is a positive trait that makes the
                                               customer comfortable working with them. Simply want
                                               to say that you guys are doing a great job. Keep up the
                                           good work. ” </p>
                                       </div>
                                   </div>
                               </div>   
                               <div>
                                <div class="card text-center">
                                    <!-- <img class="card-img-top" src="images1/customer3.jpg" alt=""> -->
                                    <div class="card-body">
                                        <h5>Prashant Battul<br/>
                                            <span> Director N-Vivsoft Technologies LLP </span></h5>
                                            <p class="card-text">“ LegalHat easily fulfilled our requirements & expectations
                                               in a very professional way. Its a pleasure to be associated
                                               with LegalHat, thorough professional in their work.
                                               Their dedication towards customer satisfaction gives
                                           them a edge over their competitor's.” </p>
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


                   <div class="container-fluid gtco-features-list">
                          <div class="container">
                              <h2 class="text-center"><span class="textHead "></span>Why Choose Us</h2>

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
            <section id="parallex2" style="background-image: url(images1/bk2.jpg); box-shadow: 0 10px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);height: 250px;">
                  <div class="container" style="display: flex;" id="paraFlex" >
                    <div class="col-lg-6 col-sm-6"><img src="images1/man.png"></div>
                    <div class="col-lg-6 col-sm-6" style="display: flex; justify-content: center; align-items: center;margin-top:-100px ;"> <a href="" class="btn btn-lg shadowbtn "style="  border-left:4px solid #ffb900;text-shadow: 0px 3px 12px #c3c3c3;">BROWSE OUR WORK</a></div>
                  </div>
            </section>  
            <br><br>

                <div class="container-fluid gtco-logo-area">
                    <div class="container">
                        <h2 style="text-align: center;font-family: Lato-Medium;
                        font-weight: 900!important;
                        position: relative;
                        margin-bottom: 30px;
                        text-transform: uppercase;text-shadow: 0px 3px 12px #c3c3c3;">Our Associate Partner</h2>
                        <div class="row">
                            <div class="col"><img src="images1/logo1.jpeg" class="img-fluid" alt=""></div>
                            <div class="col"><img src="images1/logo2.jpeg" class="img-fluid" alt=""></div>
                            <div class="col"><img src="images1/logo3.jpeg" class="img-fluid" alt=""></div>
                            <div class="col"><img src="images1/logo4.jpeg" class="img-fluid" alt=""></div>
                            <div class="col"><img src="images1/logo5.png" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>

                  <div class="container">
                <div class="row">
                    <div class="main_history fadeInUp" style="display:flex;">
                        <div class="col-lg-12 col-sm-12"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">

                          <h2 style="text-align: center;justify-content: center;align-items: center;" ><span class="textHead">We Are Associated With </span> </h2>
                          <br> 
                          <div class="single_history_img">
                            <div class="row ">

                                <div class="container" style="display: flex;">
                                    <div class="col" style="display: flex; justify-content: center;align-items: center;" >
                                      <img src="images1/tiaup/axis.jpeg" style="border-radius: 5px;"   alt="Logo 1" width="90%" class="shadowbtn">
                                  </div>
                                  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                      <img src="images1/tiaup/just.jpeg" style="border-radius: 5px; " alt="Logo 2" width="90%" class="shadowbtn">
                                  </div>

                                  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                      <img src="images1/tiaup/paytm.jpeg" style="border-radius: 5px; " alt="Logo 5" width="90%" class="shadowbtn">
                                  </div>
                                  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                      <img src="images1/tiaup/sulekha.jpeg"style="border-radius: 5px; " alt="Logo 4" width="90%" class="shadowbtn">
                                  </div>
                                  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                      <img src="images1/tiaup/kotak.jpeg"style="border-radius: 5px; " alt="Logo 4" width="90%" class="shadowbtn">
                                  </div>
                                  <div class="col"style="display: flex; justify-content: center;align-items: center;">
                                      <img src="images1/tiaup/godaddy.jpeg"style="border-radius: 5px; " alt="Logo 4" width="90%" class="shadowbtn">
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
  <!-- <div class="col-lg-6 col-sm-6"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
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
                                      
 <div class="container-fluid gtco-news" id="news">
     <div class="container">
         <h2>Latest News & Articles | In The Media</h2>
         <div class="owl-carousel owl-carousel2 owl-theme">
             <div>
                 <div class="card text-center"><img class="card-img-top" src="images1/news1.jpg" alt="">
                     <div class="card-body text-left pr-0 pl-0">
                         <h5>Online retail giant Amazon could be held responsible for breaching luxury shoemaker Christian Louboutin's trademark rights </h5>
                         <p class="card-text">Online retail giant Amazon could be held responsible for breaching luxury shoemaker Christian Louboutin's trademark rights over the sale of counterfeit red soled high-heeled shoes on its platform, the European Court of Justice ruled on Thursday.
                         . . . </p>
                         <a href="https://economictimes.indiatimes.com/tech/technology/amazon-may-breach-trademark-rights-over-fake-louboutin-ads/articleshow/96432654.cms?from=mdr">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                     </div>
                 </div>
                 <div>
                     <div class="card text-center"><img class="card-img-top" src="images1/news2.jpg" alt="">
                         <div class="card-body text-left pr-0 pl-0">
                             <h5> What Tips-Wynk legal row, invoking Section 31D of Indian Copyright Act, means for music fans. </h5>
                             <p class="card-text">
                                 Tips, which owns the rights to many popular 1990s Hindi film soundtracks such as Khalnayak, Raja Hindustani and Taal, had sued Wynk for infringing its copyright, by continuing to stream its music in the absence of an agreement. If that sounds vaguely familiar, it’s because it’s the same reason Warner/Chappell took Spotify to court.
                                 <a href="https://www.firstpost.com/entertainment/what-tips-wynk-legal-row-invoking-section-31d-of-indian-copyright-act-means-for-music-fans-6695491.html">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                             </div>
                         </div>
                         <div>
                          <div class="card text-center"><img class="card-img-top" src="images1/news3.jpg" alt="">
                              <div class="card-body text-left pr-0 pl-0">
                                  <h5>Morbi faucibus odio sollicitudin
                                  risus scelerisque dignissim. </h5>
                                  <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                      et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                  . . . </p>
                                  <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                              </div>
                          </div>
                          <div>
                              <div class="card text-center"><img class="card-img-top" src="images1/news1.jpg" alt="">
                                  <div class="card-body text-left pr-0 pl-0">
                                      <h5>Aenean ultrices lorem quis blandit
                                      tempor urabitur accumsan. </h5>
                                      <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                          et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                      . . . </p>
                                      <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                                  </div>
                              </div>
                              <div>
                                  <div class="card text-center"><img class="card-img-top" src="images1/news2.jpg" alt="">
                                      <div class="card-body text-left pr-0 pl-0">
                                          <h5> Nam vel nisi eget odio pulvinar
                                          iaculis. Fusce aliquet. </h5>
                                          <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                              et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                          . . . </p>
                                          <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="card text-center"><img class="card-img-top" src="images1/news3.jpg" alt="">
                                          <div class="card-body text-left pr-0 pl-0">
                                              <h5>Morbi faucibus odio sollicitudin
                                              risus scelerisque dignissim. </h5>
                                              <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                                  et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                              . . . </p>
                                              <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>                                                                       




                          <!-- Client -->
                          <div class="vg-page page-client">
                            <div class="container" >
                              <div class="row" >
                                <div class="col-md-6 col-lg-4 col-xl-3 item" >
                                  <div class="img-place wow fadeInUp" style="display:flex;">
                                    <img src="images1/logo/logica.png" alt="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/mamaLogo.png" alt="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/activeLogo.png" alt="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/meatLogo.png" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/spicelogo.png" alt="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/vrukshaLogo.png" alt="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/dudhraja.jpeg" alt="">
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 item">
                                  <div class="img-place wow fadeInUp">
                                    <img src="images1/logo/soar.jpeg" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> <!-- End client -->

<br><br><br>

                          <!-- <div class="row"style="background-image: url(images1/bkwhite.jpg);"> -->
                              <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title text-center wow zoomIn">
                                            <h2 class="text-center"><span class="textHead">Frequently Asked Questions</span></h2>
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
                                </div> 
                            </div>                                                                               
                        </div><!--- END COL -->     
                    </div><!--- END ROW -->   



                            <div id="myModals" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title pop_align">Get in touch with us </h4><br>
                        <h6 style="text-align:center;">Please fill up following details</h6>
                          </div>
                        <div class="modal-body">
                         <form action="thank-you.php" method="post" id="contact-popup">
                                 <input name="firstname" type="text" id="firstname" class="hide-robot">
                             <!-- <input type="hidden" id="booknow" name="booknow" value="booknow"> -->
                              <input name="firstname" type="text" id="firstname" class="hide-robot">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" name="name" id="fnames" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="emails" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <span class="input-group-addon"><i class="fas fa-phone-square-alt" ></i></span>
                                            <input type="text" class="form-control" name="mobile" id="mobiles" pattern="\d*" minlength="10" placeholder="Mobile" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group"> 
                                        
                                            <div id="RecaptchaField1"></div>

                                        </div>
                                        </div>
                                    </div>

                                    
                                  <div class="pop_align">
                                     <div class="form-group">
                                        <input type="submit" name="save" class="btn btn-orange"  value="Submit" style="margin: auto;display: block;">
                                     </div>
                                </div>
                              <div class="success_message1 pop_align"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END Popup -->

                    <div id="myModalsbook" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title pop_align">Online Booking </h4><br>
                        <h6 style="text-align:center;">Book Your Dream Home Online</h6>
                          </div>
                        <div class="modal-body">
                         <form action="thank-you.php" method="post" id="contact-book">

                             <input type="hidden" id="booknow" name="booknow" value="booknow">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" name="name" id="fnames" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="emails" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <span class="input-group-addon"><i class="fas fa-phone-square-alt" ></i></span>
                                            <input type="text" class="form-control" name="mobile" id="mobiles" pattern="\d*" minlength="10" placeholder="Mobile" required>
                                        </div>
                                    </div>

                                   <div class="form-group">
                                    <div class="input-group">

                                         <div id="RecaptchaField2"></div>
                                                   </div>
                                    </div> 

                                    
                                  <div class="pop_align">
                                     <div class="form-group">
                                        <input type="submit" name="save" class="btn btn-orange"  value="Submit" style="margin: auto;display: block;">
                                     </div>
                                </div>
                              <div class="success_message1 pop_align"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END Popup -->
                    <style type="text/css">
                        #contact .form-group{float: none;}
                    .hide-robot{display: none;}
                    .capbox, .capbox3 {
                        background-color: #98c7efb3;
                        border: #98c7efb3 0px solid;
                        border-width: 0px 12px 0px 0px;
                        display: inline-block;
                        *display: inline; zoom: 1; /* FOR IE7-8 */
                        padding: 8px 40px 8px 8px;
                        width:100%;
                        }
                        .capbox1{background-color: #98c7efb3;
                        border: #98c7efb3 0px solid;
                        border-width: 0px 12px 0px 0px;
                        display: inline-block;
                        *display: inline; zoom: 1; /* FOR IE7-8 */
                        padding: 8px 40px 8px 8px;width: 45%}

                    .capbox-inner, .capbox-inner1, .capbox-inner3 {
                        font: bold 11px arial, sans-serif;
                        color: #000000;
                        background-color: #98c7efb3;
                        margin: 5px auto 0px auto;
                        padding: 3px;
                        -moz-border-radius: 4px;
                        -webkit-border-radius: 4px;
                        border-radius: 4px;
                        }

                    #CaptchaDiv, #CaptchaDiv1, #CaptchaDiv3 {
                        font: bold 17px verdana, arial, sans-serif;
                        font-style: italic;
                        color: #000000;
                        background-color: #FFFFFF;
                        padding: 4px;
                        -moz-border-radius: 4px;
                        -webkit-border-radius: 4px;
                        border-radius: 4px;
                        }

                    #CaptchaInput, #CaptchaInput1, #CaptchaInput3 { margin: 1px 0px 1px 0px; width: 135px; }
                    #con-form {
                        width: 100%;
                        height: 100%;
                        opacity: .95;
                        top: 0;
                        left: 0;
                        display: none;
                        position: fixed;
                        background-color: #313131;
                        overflow: auto;
                        z-index: 9999;
                    }


                    .modal-backdrop{display: none;}
                    .modal-dialog{width: 480px; margin: 100px auto; }
                    .modal-header{background: #fff;}

                    @media screen and (max-width:767px){
                    .modal-dialog {width: 100%; margin: 5px;}
                      }
                    </style>


                    //Function To Display Popup
                        function div_show() {
                        document.getElementById('con-form').style.display = "block";
                        }
                    //Function to Hide Popup
                        function div_hide(){
                          document.getElementById('con-form').style.display = "none";
                        }

<?php include 'footer.php';?>                          