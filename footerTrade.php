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