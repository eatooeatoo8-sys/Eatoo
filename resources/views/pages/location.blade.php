<x-guest-layout>

    <x-slot name="body">

     <!-- Section Page -->
         <section style="background-color: #391773;" id="page" class="pages no-padding-bottom">
            <!-- jumbotron -->
            <div class="jumbotron dark-overlay"  data-center="background-position: 50% 0px;"
               data-top-bottom="background-position: 50% -60px;">
               <div class="container">
                  <!-- /col-md-6 -->
                  <div class="jumbo-heading col-md-6 col-md-offset-3" data-start="opacity: 1" data-top="opacity: 0">
                     <!-- Heading -->
                     <h1>Contact/Location</h1>
                     <!-- Breadcrumb -->
                     <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contact/Location</li>
                     </ul>
                  </div>
                  <!-- /jumbo-heading -->
               </div>
               <!-- /container -->
            </div>
            <!-- /jumbotron -->
            <!-- Page -->
            <div class="container-fluid">
               <!-- container -->
               <div class="container">
                  <!--  Box -->
                  <div class="row">
                     <div class="col-lg-4 box-padding">
                        <h5 style="color: #AEF09D"  class="text-center">Visit Us</h5>
                        <p style="color: #AEF09D" >
                           Euismod finibus augue vulputate. Sed aliquam, elit eu gravida dignissim, justo dolor vulputate ipsum, a dapibus purus dui vitae purus  Euismod finibus augue vulputate Sed aliquam.
                        </p>
                     </div>
                     <div class="col-lg-4 text-center box-padding divider-border">
                        <h5 style="color: #AEF09D">Contact Info</h5>
                        <!-- Bottom Info -->
                        <ul style="color: #AEF09D" class="list-unstyled contact-info">
                           <li>(122) 2345-53450</li>
                           <li>Email: <a href="mailto:info@eatooo.com">info@eatooo.com</a></li>
                           <li>Lagos, Nigeria. No. 1 Ijaiye Road Ogba, Global Plaza, Opposite Mobile Filling Station.</li>
                        </ul>
                        <!--Social icons -->
                        <div  class="social-media">
                           <a href="#" title=""><i style="color: #AEF09D" class="fab fa-twitter"></i></a>
                           <a href="#" title=""><i style="color: #AEF09D" class="fab fa-facebook"></i></a>
                           <a href="#" title=""><i style="color: #AEF09D" class="fab fa-google-plus"></i></a>
                           <a href="#" title=""><i style="color: #AEF09D" class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                     <div class="box-padding col-lg-4">
                        <h5 style="color: #AEF09D" class="text-center">Opening Hours:</h5>
                        <!-- Table-->
                        <p style="color: #AEF09D"> We are open in the following schedule bellow:</p>
                        <table class="table opening">
                           <tbody style="color: #AEF09D">
                              <tr>
                                 <td class="text-left">Monday to Friday</td>
                                 <td class="text-right">7 a.m to 7 p.m</td>
                              </tr>
                              <tr>
                                 <td class="text-left">Weekends</td>
                                 <td class="text-right">7 a.m to 2 p.m</td>
                              </tr>
                              <tr>
                                 <td class="text-left">Holidays</td>
                                 <td class="text-right">Closed</td>
                              </tr>
                           </tbody>
                        </table>
						 <!-- /table -->
                     </div>
					  <!-- /box-padding -->
                  </div>
                  <!-- /text-center -->
               </div>
			    <!-- /container -->
               <div class="container-fluid contact-bg dark-overlay small-section">
                  <h4 style="color: #AEF09D" class="text-center">Make a Reservation</h4>
                  <!-- Contact Form -->
                  <div id="contact_form" class="margin1 container">
                     <div class="col-md-6">
                        <div class="form-group">
                           <div class="col-md-12">
                              <input type="text" name="name" placeholder="Name" class="form-control input-field" required="">                    
                           </div>
                           <!-- /col-md-12 -->
                           <div class="col-md-12">
                              <input type="email" name="email" placeholder="E-mail" class="form-control input-field" required="">           
                           </div>
                           <!-- /col-md-12 -->
                           <div class="col-md-4">
                              <input type="number" name="people" placeholder="Guests" class="form-control input-field" required=""> 
                           </div>
                           <!-- /col-md-4 -->
                           <div class="col-md-8">
                              <div class="input-group date" id="datetimepicker1">
                                 <input type="text" placeholder="Date and Time" name="date" class="form-control input-field" required=""/>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                              </div>
                           </div>
                           <!-- /col-md-8 -->
                        </div>
						 <!-- /form-group -->
                     </div>
					  <!-- /col-md-6 -->
                     <div class="col-md-6">
                        <div class="col-md-12">
                           <textarea name="message" id="message" class="size-fix textarea-field form-control" rows="7" placeholder="Message" ></textarea>
                        </div>
                     </div>
					  <!-- /col-md-6 -->
                     <div class="col-md-12">
                        <div class="text-center">
                           <button style="background-color: #391773; color:#AEF09D; border: none;" type="submit" id="submit_reservation" value="Submit" class="btn btn-secondary">Send Reservation</button>
                        </div>
						<!-- Contact results -->
                      <div id="contact_results"></div>
                     </div>
					  <!-- /col-md-12 -->
                  </div>
                  <!-- /form-group -->
               </div>
               <!-- /contact_form -->
            </div>
           
         </section>
         <!-- /Section ends -->   
      
    </x-slot>

</x-guest-layout>