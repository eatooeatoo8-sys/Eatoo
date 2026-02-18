<x-guest-layout>

    <x-slot name="body">

    <!-- Section Page -->
         <section id="page" class="pages">
            <!-- jumbotron -->
            <div class="jumbotron dark-overlay"  data-center="background-position: 50% 0px;"
               data-top-bottom="background-position: 50% -60px;">
               <div class="container">
                  <!-- /col-md-6 -->
                  <div class="jumbo-heading col-md-6 col-md-offset-3" data-start="opacity: 1" data-top="opacity: 0">
                     <!-- Heading -->
                     <h1>Menu</h1>
                     <!-- Breadcrumb -->
                     <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Menu</li>
                     </ul>
                  </div>
                  <!-- /jumbo-heading -->
               </div>
               <!-- /container -->
            </div>
            <!-- /jumbotron -->
            <!-- Page -->
            <div id="page-container" class="menu-page no-bg-small container">
               <div class="col-md-12">
                  <!-- nav pills -->
                  <div class="nav-center-responsive">
                     <ul class="nav nav-pills col-md-3" id="prices-nav">
                        <li class="active"><a style="color:#AEF09D;"  href="#tab_a" data-toggle="pill">Foods/Swallows</a></li>
                        <li><a style="color:#AEF09D;" href="#tab_b" data-toggle="pill">Sides/Extras</a></li>
                        <li><a style="color:#AEF09D;" href="#tab_c" data-toggle="pill">Drinks</a></li>
                        <li><a style="color:#AEF09D;" href="#tab_d" data-toggle="pill">Desserts</a></li>
                     </ul>
                  </div>
                  <!-- Tab content -->
                  <div class="tab-content col-md-9 res-margin">
                     <div class="tab-pane fade in active" id="tab_a">
                        <div class="row">
                           <!-- Menu: starters -->
                           <h3 style="color:#391773;" class="text-center">Foods/Swallows</h3>
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    
                                       <!-- Item starts -->
                                     
                                       <div  class="menu-card"
                                             style="display:flex; align-items:flex-start; gap:20px; margin-bottom:25px; padding:15px; border:1px solid #eee; border-radius:12px; transition:0.4s; flex-wrap:wrap;"
                                             onmouseover="if(window.innerWidth > 768){ this.querySelector('.desc').style.maxHeight='200px'; this.querySelector('.desc').style.opacity='1'; }"
                                             onmouseout="if(window.innerWidth > 768){ this.querySelector('.desc').style.maxHeight='0'; this.querySelector('.desc').style.opacity='0'; }"
                                             >

                                          <!-- Image -->
                                          <a href="/onboard/img/rice.png" target="_blank">
                                             <img src="/onboard/img/rice.png" alt="Mini Burgers"
                                                   style="width:120px; height:120px; object-fit:cover; border-radius:10px; transition:0.3s; cursor:pointer;">
                                          </a>

                                             <!-- Content -->
                                             <div style="flex:1; min-width:200px;">

                                                <div style="font-weight:bold; font-size:18px;">
                                                   <span class="food-name">5 Mini Burgers with salad</span>
                                                </div>

                                                <div style="color:#c0392b; font-weight:bold; margin:5px 0;">
                                                   ₦<span class="food-price">5.5</span>
                                                </div>


                                                <!-- Mobile View Button -->
                                                <button 
                                                   style="display:none; padding:6px 14px; margin-bottom:10px; background:#391773; color:#fff; border:none; border-radius:6px; cursor:pointer;"
                                                   onclick="
                                                      var desc = this.parentElement.querySelector('.desc');
                                                      if(desc.style.maxHeight == '0px' || desc.style.maxHeight == ''){
                                                         desc.style.maxHeight='200px';
                                                         desc.style.opacity='1';
                                                         this.innerText='Hide';
                                                      }else{
                                                         desc.style.maxHeight='0';
                                                         desc.style.opacity='0';
                                                         this.innerText='View';
                                                      }
                                                   "
                                                   class="viewBtn">
                                                   View
                                                </button>

                                                <!-- Expanding Description -->
                                                <div class="desc"
                                                   style="max-height:0; overflow:hidden; opacity:0; transition:all 0.4s ease;">

                                                   <div style="background:#391773; padding:12px; border-radius:6px; font-size:14px; color:#AEF09D; margin-bottom:12px;">
                                                      <ul style="margin:0; padding-left:18px; color:#AEF09D;">
                                                         <li>Fresh ingredients daily.</li>
                                                         <li>Homemade special sauce.</li>
                                                         <li>Premium beef patties.</li>
                                                         <li>Served hot and fresh.</li>
                                                      </ul>
                                                   </div>

                                                </div>

                                                <!-- Buttons -->
                                                <div style="display:flex; gap:10px; flex-wrap:wrap;">

                                                   <!-- Add to Cart -->
                                                   <button 
                                                      onclick="addToCart(this)"
                                                      style="display:flex; align-items:center; gap:6px; padding:8px 16px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;">
                                                      🛒 Add
                                                   </button>

                                                   <!-- Remove -->
                                                   <button 
                                                      onclick="removeFromCart(this)"
                                                      style="display:none; padding:8px 16px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;"
                                                      class="removeBtn">
                                                      Remove
                                                   </button>

                                                   <!-- Buy Now -->
                                                   <button 
                                                      onclick="buyNow(this)"
                                                      style="padding:8px 18px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;">
                                                      Buyooo
                                                   </button>

                                                </div>
                                             </div>
                                       </div>
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->	
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    
                                    <!-- Item starts -->
                                     
                                    <div  class="menu-card"
                                             style="display:flex; align-items:flex-start; gap:20px; margin-bottom:25px; padding:15px; border:1px solid #eee; border-radius:12px; transition:0.4s; flex-wrap:wrap;"
                                             onmouseover="if(window.innerWidth > 768){ this.querySelector('.desc').style.maxHeight='200px'; this.querySelector('.desc').style.opacity='1'; }"
                                             onmouseout="if(window.innerWidth > 768){ this.querySelector('.desc').style.maxHeight='0'; this.querySelector('.desc').style.opacity='0'; }"
                                             >

                                          <!-- Image -->
                                          <a href="/onboard/img/rice.png" target="_blank">
                                             <img src="/onboard/img/rice.png" alt="Mini Burgers"
                                                   style="width:120px; height:120px; object-fit:cover; border-radius:10px; transition:0.3s; cursor:pointer;">
                                          </a>

                                             <!-- Content -->
                                             <div style="flex:1; min-width:200px;">

                                                <div style="font-weight:bold; font-size:18px;">
                                                   <span class="food-name">Rice and Beans</span>
                                                </div>

                                                <div style="color:#c0392b; font-weight:bold; margin:5px 0;">
                                                   ₦<span class="food-price">5.5</span>
                                                </div>


                                                <!-- Mobile View Button -->
                                                <button 
                                                   style="display:none; padding:6px 14px; margin-bottom:10px; background:#391773; color:#fff; border:none; border-radius:6px; cursor:pointer;"
                                                   onclick="
                                                      var desc = this.parentElement.querySelector('.desc');
                                                      if(desc.style.maxHeight == '0px' || desc.style.maxHeight == ''){
                                                         desc.style.maxHeight='200px';
                                                         desc.style.opacity='1';
                                                         this.innerText='Hide';
                                                      }else{
                                                         desc.style.maxHeight='0';
                                                         desc.style.opacity='0';
                                                         this.innerText='View';
                                                      }
                                                   "
                                                   class="viewBtn">
                                                   View
                                                </button>

                                                <!-- Expanding Description -->
                                                <div class="desc"
                                                   style="max-height:0; overflow:hidden; opacity:0; transition:all 0.4s ease;">

                                                   <div style="background:#391773; padding:12px; border-radius:6px; font-size:14px; color:#AEF09D; margin-bottom:12px;">
                                                      <ul style="margin:0; padding-left:18px; color:#AEF09D;">
                                                         <li>Fresh ingredients daily.</li>
                                                         <li>Homemade special sauce.</li>
                                                         <li>Premium beef patties.</li>
                                                         <li>Served hot and fresh.</li>
                                                      </ul>
                                                   </div>

                                                </div>

                                                <!-- Buttons -->
                                                <div style="display:flex; gap:10px; flex-wrap:wrap;">

                                                   <!-- Add to Cart -->
                                                   <button 
                                                      onclick="addToCart(this)"
                                                      style="display:flex; align-items:center; gap:6px; padding:8px 16px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;">
                                                      🛒 Add
                                                   </button>

                                                   <!-- Remove -->
                                                   <button 
                                                      onclick="removeFromCart(this)"
                                                      style="display:none; padding:8px 16px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;"
                                                      class="removeBtn">
                                                      Remove
                                                   </button>

                                                   <!-- Buy Now -->
                                                   <!-- <button 
                                                      onclick="buyNow(this)"
                                                      style="padding:8px 18px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;">
                                                      Buyooo
                                                   </button> -->

                                                   <a href="{{ route('menu.cart') }}" style="padding:8px 18px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;">
                                                      Buyooo
                                                   </a>
                                                </div>
                                             </div>
                                    </div>

                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->				  
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /tab-pane  -->
                     <div class="tab-pane fade" id="tab_b">
                        <div class="row">
                           <!-- Menu: main courses-->
                           <h3 class="text-center">Main Courses</h3>
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Classic Burger with Fries
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Sea Food pasta
                                       </div>
                                       <div class="menu-item-price">
                                          ₦7
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Pizza
                                       </div>
                                       <div class="menu-item-price">
                                          ₦12
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->  
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Spagetthi with sea food
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Grilled salmon with potatoes
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Fish and Chips with salad
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->  									
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->	
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Mega Cheese Plate with salad
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Grilled Chicken with potatoes
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Grilled Lamb with salad
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Grilled Albergines with salad
                                       </div>
                                       <div class="menu-item-price">
                                          ₦7
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->                             
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Crab with potatoes
                                       </div>
                                       <div class="menu-item-price">
                                          ₦4
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Shepard Pie
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->                 
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->				  
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /tab-pane  -->
                     <div class="tab-pane fade" id="tab_c">
                        <div class="row">
                           <!-- Menu: Drinks-->
                           <h3 class="text-center">Drinks</h3>
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Smoothie
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Ice Coffee
                                       </div>
                                       <div class="menu-item-price">
                                          ₦7
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Teas
                                       </div>
                                       <div class="menu-item-price">
                                          ₦4
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->  
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Coffee
                                       </div>
                                       <div class="menu-item-price">
                                          ₦2.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Fresh fruit Juice
                                       </div>
                                       <div class="menu-item-price">
                                          ₦6
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Soda
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->  									
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->	
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Pisco Sour
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Gin Tonic
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Special Cocktail
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Cuba Libre
                                       </div>
                                       <div class="menu-item-price">
                                          ₦7
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->                             
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Martini
                                       </div>
                                       <div class="menu-item-price">
                                          ₦14
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Pina Colada
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->						                                                        
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->				  
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /tab-pane  -->
                     <div class="tab-pane fade" id="tab_d">
                        <div class="row">
                           <!-- Menu: Desserts -->
                           <h3 class="text-center">Desserts</h3>
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Chocolate Cake
                                       </div>
                                       <div class="menu-item-price">
                                          ₦2.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Cheesecake
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Brownie
                                       </div>
                                       <div class="menu-item-price">
                                          ₦12
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->  
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Fruit salad
                                       </div>
                                       <div class="menu-item-price">
                                          ₦3.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Banana Split
                                       </div>
                                       <div class="menu-item-price">
                                          ₦8
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Vegan ice Cream
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->  									
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->	
                           <!-- column -->
                           <div class="col-md-6">
                              <div class="menu-body">
                                 <div class="menu-section">
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Almond cake
                                       </div>
                                       <div class="menu-item-price">
                                          ₦5.5
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Vegan Sandwich
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Fat Free Cheesecake
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Chocolate Covered Nuts
                                       </div>
                                       <div class="menu-item-price">
                                          ₦7
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->                             
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Homemade ice cream
                                       </div>
                                       <div class="menu-item-price">
                                          ₦4
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                       <div class="menu-item-name">
                                          Butter cake
                                       </div>
                                       <div class="menu-item-price">
                                          ₦11
                                       </div>
                                       <div class="menu-item-description">
                                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                       </div>
                                    </div>
                                    <!-- Item ends -->		                
                                 </div>
                                 <!--/ menu section -->
                              </div>
                              <!-- / menu body -->
                           </div>
                           <!-- /col-md-6 -->				  
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /tab-pane  -->
                  </div>
                  <!-- tab content -->
               </div>
               <!-- /col-md-12 -->
            </div>

           
         </section>
         <!-- /Section ends -->



         <script>

            document.addEventListener("DOMContentLoaded", function () {

               // Check localStorage on page load
               const cards = document.querySelectorAll(".menu-card");

               cards.forEach(card => {
                  const name = card.querySelector(".food-name").innerText;
                  const addBtn = card.querySelector("button[onclick='addToCart(this)']");
                  const removeBtn = card.querySelector(".removeBtn");

                  if (localStorage.getItem(name)) {
                        addBtn.style.display = "none";
                        removeBtn.style.display = "inline-block";
                  }
               });

            });

            // ADD TO CART
            function addToCart(btn) {
               const card = btn.closest(".menu-card");
               const name = card.querySelector(".food-name").innerText;
               const price = card.querySelector(".food-price").innerText;

               // Save to localStorage
               localStorage.setItem(name, JSON.stringify({
                  name: name,
                  price: price
               }));

               alert(name + " added to cart ✅");

               // Toggle buttons
               btn.style.display = "none";
               card.querySelector(".removeBtn").style.display = "inline-block";

               updateCartCount();
            }


            // REMOVE FROM CART
            function removeFromCart(btn) {
               const card = btn.closest(".menu-card");
               const name = card.querySelector(".food-name").innerText;

               localStorage.removeItem(name);

               alert(name + " removed from cart ❌");

               // Toggle buttons
               btn.style.display = "none";
               card.querySelector("button[onclick='addToCart(this)']").style.display = "inline-block";
               updateCartCount();
            }


            // BUY NOW (optional)
            // function buyNow(btn) {
            //    const card = btn.closest(".menu-card");
            //    const name = card.querySelector(".food-name").innerText;

            //    alert("Proceeding to buy " + name);
            // }

         </script>
      
    </x-slot>

</x-guest-layout>