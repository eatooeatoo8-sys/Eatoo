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
                        <li class="active"><a href="#tab_a" data-toggle="pill">Starters</a></li>
                        <li><a href="#tab_b" data-toggle="pill">Main Courses</a></li>
                        <li><a href="#tab_c" data-toggle="pill">Drinks</a></li>
                        <li><a href="#tab_d" data-toggle="pill">Desserts</a></li>
                     </ul>
                  </div>
                  <!-- Tab content -->
                  <div class="tab-content col-md-9 res-margin">
                    
                  <div id="cart-section" style="padding:20px; border:1px solid #eee; border-radius:12px; background:#fafafa;">

                        <h3 style="margin-bottom:15px; color:#391773;">🛒 Your Cart</h3>

                        <div id="cart-items" style="margin-bottom:20px;"></div>

                        <div id="cart-total" style="font-weight:bold; margin-bottom:20px;"></div>

                        <div style="display:flex; gap:10px; flex-wrap:wrap;">

                            <button onclick="sendCartToWhatsApp()" 
                                    style="padding:10px 18px; background:#391773; color:#AEF09D; border:none; border-radius:6px; cursor:pointer;">
                                📤 Buy via WhatsApp
                            </button>

                            <button onclick="clearCart()" 
                                    style="padding:10px 18px; background:#AEF09D; color:#391773; border:none; border-radius:6px; cursor:pointer;">
                                🗑 Clear Cart
                            </button>

                        </div>

                    </div>
                  </div>
                  <!-- tab content -->
               </div>
               <!-- /col-md-12 -->
            </div>

         </section>
         <!-- /Section ends -->

         <script>
                function renderCart() {

                const cartContainer = document.getElementById("cart-items");
                const totalContainer = document.getElementById("cart-total");

                cartContainer.innerHTML = "";
                let total = 0;
                let count = 0;

                for (let i = 0; i < localStorage.length; i++) {

                    let key = localStorage.key(i);
                    let value = localStorage.getItem(key);

                    try {
                        let item = JSON.parse(value);

                        if (item && item.name && item.price) {

                            count++;

                            total += parseFloat(item.price);

                            cartContainer.innerHTML += `
                                <div style="padding:10px; border-bottom:1px solid #ddd;">
                                    ${count}. ${item.name} - ₦${item.price}
                                </div>
                            `;
                        }

                    } catch (e) {
                        continue;
                    }
                }

                if (count === 0) {
                    cartContainer.innerHTML = "<p>Your cart is empty 🛒</p>";
                    totalContainer.innerHTML = "";
                    return;
                }

                totalContainer.innerHTML = "Total: ₦" + total.toFixed(2);
            }


            // SEND TO WHATSAPP
            function sendCartToWhatsApp() {

                let message = "🛒 NEW ORDER\n\n";
                let total = 0;
                let count = 0;

                for (let i = 0; i < localStorage.length; i++) {

                    let key = localStorage.key(i);
                    let value = localStorage.getItem(key);

                    try {
                        let item = JSON.parse(value);

                        if (item && item.name && item.price) {

                            count++;

                            message += count + ". " + item.name + " - ₦" + item.price + "\n";
                            total += parseFloat(item.price);
                        }

                    } catch (e) {
                        continue;
                    }
                }

                if (count === 0) {
                    alert("Cart is empty 🛒");
                    return;
                }

                message += "\nTotal: ₦" + total.toFixed(2);

                let phoneNumber = "2347072859494"; // your number
                let whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

                window.location.href = whatsappURL;
            }


            // CLEAR CART
            function clearCart() {

                localStorage.clear();
                renderCart();
                alert("Cart cleared 🗑");
            }


            // AUTO LOAD CART
            document.addEventListener("DOMContentLoaded", renderCart);
        </script>

    </x-slot>

</x-guest-layout>