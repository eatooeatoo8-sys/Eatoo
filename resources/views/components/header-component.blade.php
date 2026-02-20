<nav class="navbar navbar-custom navbar-fixed-top" id="navbar-custom">
            <div class="container">
               <!-- Logo and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                  <i class="fas fa-bars"></i>
                  </button>
                  <!-- Logo -->
                  <div class="navbar-brand page-scroll">
                     <a href="#page-top"><img src="/onboard/img/remove.png" class="img-responsive" alt=""></a>
                  </div>
               </div>
               <!-- /.navbar-header -->
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-brand">
                  <ul  class="nav navbar-nav page-scroll navbar-right" >
                     <li><a style="color: #AEF090; text-transform:uppercase;" href="{{ route('home') }}">Home</a></li>
                     <li><a style="color: #AEF090; text-transform:uppercase;" href="{{ route('about.view') }}">About </a></li>
                     <li>
                        <a style="color: #AEF090; text-transform:uppercase;"  href="{{ route('menu.view') }}">Menu<b></b></a>
                        
                     </li>
                     <li><a style="color: #AEF090; text-transform:uppercase;" href="#">Catering</a></li>
                     <li><a style="color: #AEF090; text-transform:uppercase;" href="#">Location</a></li>

                     <li><a style="color: #AEF090; text-transform:uppercase;" href="gallery.html">Community</a></li>
                     
                     <li style="list-style:none; padding:0; margin:8px 4px;">
                        <ul class="ul-button" style="padding:0; margin:0;">
                           <li style="list-style:none; padding:0; margin:0;">
                                 <a class="btn btn-secondary navbar-btn" href="contact.html"
                                    style="background-color: #AEF090; text-decoration: none; 
                                       width:36px;
                                       height:36px;
                                       padding:0;
                                       display:flex;
                                       align-items:center;
                                       justify-content:center;
                                       border-radius:6px; /
                                    ">
                                    <i class="fab fa-facebook" style="font-size:18px;"></i>
                                 </a>
                           </li>
                        </ul>
                     </li>

                     <li style="list-style:none; padding:0; margin:8px 4px;">
                        <ul class="ul-button" style="padding:0; margin:0;">
                           <li style="list-style:none; padding:0; margin:0;">
                                 <a class="btn btn-secondary navbar-btn" 
                                 href="contact.html"
                                    style="background-color: #AEF090; text-decoration: none;
                                       width:36px;
                                       height:36px;
                                       padding:0;
                                       display:flex;
                                       align-items:center;
                                       justify-content:center;
                                       border-radius:6px; /
                                    ">
                                    <i class="fab fa-instagram" style="font-size:18px;"></i>
                                 </a>
                           </li>
                        </ul>
                     </li>

                     <li style="list-style:none; padding:0; margin:8px 4px;">
                        <ul class="ul-button" style="padding:0; margin:0;">
                           <li style="list-style:none; padding:0; margin:0;">
                                 <a class="btn btn-secondary navbar-btn"
                                    href="contact.html"
                                    style="background-color: #AEF090; text-decoration: none;
                                       width:36px;
                                       height:36px;
                                       padding:0;
                                       display:flex;
                                       align-items:center;
                                       justify-content:center;
                                       border-radius:6px; /
                                    ">
                                    <i class="fab fa-tiktok" style="font-size:18px; color:#000;"></i>
                                 </a>
                           </li>
                        </ul>
                     </li>
                     <li style="list-style:none; padding:0; margin:8px 4px;">
                        <ul class="ul-button" style="padding:0; margin:0;">
                           <li style="list-style:none; padding:0; margin:0;">
                                 <a class="btn btn-secondary navbar-btn"
                                    href="{{ route('menu.cart') }}"
                                    style="background-color:#AEF090;
                                          text-decoration:none;
                                          width:36px;
                                          height:36px;
                                          display:flex;
                                          align-items:center;
                                          justify-content:center;
                                          border-radius:6px;">

                                    <i class="fas fa-cart-plus" style="font-size:18px; color:#000;"></i>

                                    <span id="cart-count"
                                          style="padding:4px; color:#000; font-weight:bold;">
                                       0
                                    </span>

                                 </a>

                           </li>
                        </ul>
                     </li>
                  </ul> 
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /container -->
         </nav>

<script>

   function updateCartCount() {

      let count = 0;

      for (let i = 0; i < localStorage.length; i++) {

         let key = localStorage.key(i);
         let value = localStorage.getItem(key);

         try {
               let item = JSON.parse(value);

               if (item && item.name && item.price) {
                  count++;
               }

         } catch (e) {
               continue;
         }
      }

      const counter = document.getElementById("cart-count");

      if (counter) {
         counter.innerText = count;
      }
   }

   document.addEventListener("DOMContentLoaded", function() {
      updateCartCount();
   });

</script>