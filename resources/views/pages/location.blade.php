<x-guest-layout>

    <x-slot name="body">

     <!-- Section Page -->
         <section style="background-color: #391773;" id="page" class="pages no-padding-bottom">
            <!-- jumbotron -->
            <div class="jumbotron dark-overlay"  
               style="
                  background-image:url('/onboard/img/scream.png');
                  background-size: cover;
                  background-position: center center;
                  background-repeat: no-repeat;
                  height: 1000px;
               "
               data-center="background-position: 50% 0px;"
               data-top-bottom="background-position: 50% -60px;">

               <div class="container" style="height:100%; display:flex; align-items:center;">
                  
                  <div class="jumbo-heading col-md-6 col-md-offset-3 text-center" 
                     data-start="opacity: 1" 
                     data-top="opacity: 0">

                     <h1 style="font-size:60px; color:#fff; font-weight:700;
                     font-family: 'Arial Rounded MT Bold', Arial, sans-serif;">
                        Location
                     </h1>

                     <ul class="breadcrumb" style="background:transparent; justify-content:center;">
                        <li><a href="#" style="color:#fff;font-family: 'Arial Rounded MT Bold', Arial, sans-serif;">Home</a></li>
                        <li class="active" style="color:#fff;font-family: 'Arial Rounded MT Bold', Arial, sans-serif;">Location</li>
                     </ul>

                  </div>

               </div>
            </div>
           
           
         </section>
         <!-- /Section ends -->   


         <!-- Section: Testimonials -->
            <section 
               id="testimonials" 
               class="container-fluid bg-lightcolor1"
               style="
                  display: flex;
                  align-items: center;      /* vertical center */
                  justify-content: center;  /* horizontal center */
                  min-height: 100vh;
               "
               >

               <div 
                  class="col-lg-6 text-center res-margin"
                  style="
                     background-color: rgba(57, 23, 115, 0.85); /* 👈 transparent purple */
                     padding:40px 30px;
                     border-radius:16px;
                     box-shadow:0 20px 40px rgba(0,0,0,0.25);
                     max-width:600px;
                     margin:auto;
                     backdrop-filter: blur(0.1px);
                  "
                  >
                  

                     <p 
                        style="
                        color:#AEF09D;
                        font-size:22px;
                        font-weight:600;
                        line-height:1.4;
                        margin:0;
                        "
                     >
                     


                        <div class="">
                           <div class="text-center">
                              <h5 style="color:#AEF09D; font-family: 'Arial Rounded MT Bold', Arial, sans-serif;">Contact us today</h5>
                              <!-- Bottom Info -->
                              <ul style="color:#AEF09D; font-family: 'Arial Rounded MT Bold', Arial, sans-serif;" class="list-unstyled contact-info">
                                 <li>081 442 065 01</li>
                                 <li>Email: <a style="color:#AEF09D" href="mailto:info@eatooo.com">info@eatooo.com</a></li>
                                 <li>
                                    
                                 <i 
                                    class="fas fa-map-marker-alt"
                                    style="
                                       color:#AEF09D;
                                       margin-right:10px;
                                       font-size:28px;
                                       vertical-align:middle;
                                    "
                                 ></i>
                                 Lagos, Nigeria <br> 
                                 <span style="font-weight:400; opacity:0.9;">
                                       No. 1 Ijaiye Road Ogba, Global Plaza, Opposite Mobile Filling Station.
                                 </span></li>
                              </ul>
                              <!--Social icons -->
                              <div class="social-media">
                                 <a href="#" title=""><i style="color:#AEF09D" class="fab fa-twitter"></i></a>
                                 <a href="#" title=""><i style="color:#AEF09D" class="fab fa-facebook"></i></a>
                                 <a href="#" title=""><i style="color:#AEF09D" class="fab fa-google-plus"></i></a>
                                 <a href="#" title=""><i style="color:#AEF09D" class="fab fa-instagram"></i></a>
                              </div>
                           </div>
                     <!-- /text-center -->
                  
                  </div>
                     </p>
                  </div>

            </section>
         <!--/section ends  -->
      
    </x-slot>

</x-guest-layout>