<x-guest-layout>

    <x-slot name="body">

     <!-- Section Blog -->
         <section style="background-color:#391773" id="blog" class="pages">
            <!-- jumbotron -->
            <div class="jumbotron dark-overlay"  data-center="background-position: 50% 0px;"
               data-top-bottom="background-position: 50% -60px;">
               <div class="container">
                  <!-- /col-md-6 -->
                  <div class="jumbo-heading col-md-6 col-md-offset-3" data-start="opacity: 1" data-top="opacity: 0">
                     <!-- Heading -->
                     <h1>Community Home</h1>
                     <!-- Breadcrumb -->
                     <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Community Home</li>
                     </ul>
                  </div>
                  <!-- /jumbo-heading -->
               </div>
               <!-- /container -->
            </div>
            <!-- /jumbotron -->
            <!-- container -->
            <div  class="container">
               

               <div style="
                  border: 1px solid #e5e7eb;
                  border-radius: 14px;
                  padding: 20px;
                  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
                  background: #ffffff;
                  " class="well">

                     <h5 class="sidebar-header" style="
                        font-weight: 600;
                        margin-bottom: 15px;
                        color: #391773;
                        letter-spacing: 0.5px;
                     ">Search</h5>

                  <div class="form-group">
                     <div class="input-group" style="display:flex;">
                           
                           <input type="text" class="form-control" placeholder="Search..."
                              style="
                                 border-radius: 50px 0 0 50px;
                                 border: 1px solid #e5e7eb;
                                 padding: 12px 18px;
                                 outline: none;
                                 box-shadow: none;
                              ">

                           <button type="button"
                              style="
                                 border: none;
                                 padding: 12px 22px;
                                 border-radius: 0 50px 50px 0;
                                 background: linear-gradient(135deg, #391773, #5f2dbb);
                                 color: #fff;
                                 font-weight: 600;
                                 cursor: pointer;
                                 transition: all 0.3s ease;
                              "
                              onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 15px rgba(57,23,115,0.3)'"
                              onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
                           >
                              🔍
                           </button>

                     </div>
                  </div>
               </div>

               <div id="page-container" class="main-blog col-md-4">

                  <div class="blog-card"
                     style="
                           background: linear-gradient(145deg,#0b0b0f,#391773);
                           border-radius:20px;
                           overflow:hidden;
                           box-shadow:0 20px 60px rgba(0,0,0,0.6);
                           transition:all .4s ease;
                           color:#fff;
                           cursor:pointer;
                           border:1px solid rgba(255,255,255,0.05);
                     "
                     onmouseenter="
                           this.querySelector('.blog-content').style.maxHeight='800px';
                           this.querySelector('.read-more').innerText='Close';
                           this.style.boxShadow='0 25px 80px rgba(111,0,255,0.4)';
                     "
                     onmouseleave="
                           this.querySelector('.blog-content').style.maxHeight='120px';
                           this.querySelector('.read-more').innerText='Enter the Vibe';
                           this.style.boxShadow='0 20px 60px rgba(0,0,0,0.6)';
                     "
                  >

                     <!-- Image -->
                     <div style="position:relative; overflow:hidden;">
                           <img src="/onboard/img/dj1.png"
                              style="
                                 width:100%;
                                 height:280px;
                                 object-fit:cover;
                                 transition:transform .6s ease;
                                 filter:brightness(75%);
                              "
                              onmouseover="this.style.transform='scale(1.1)'"
                              onmouseout="this.style.transform='scale(1)'"
                           >

                           <!-- Neon Overlay -->
                           <div style="
                              position:absolute;
                              bottom:0;
                              left:0;
                              right:0;
                              height:100%;
                              background:linear-gradient(to top,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0));
                           "></div>

                           <!-- Date -->
                           <div style="
                              position:absolute;
                              bottom:20px;
                              left:20px;
                              font-size:13px;
                              letter-spacing:1px;
                              color:#AEF09D;
                              font-weight:600;
                           ">
                              JUNE 17 · 2017
                           </div>
                     </div>

                     <!-- Content -->
                     <div style="padding:30px;">

                           <!-- Title -->
                           <h3 style="
                              font-weight:700;
                              margin-bottom:12px;
                              font-size:22px;
                              background:linear-gradient(90deg,#fff,#AEF09D);
                              -webkit-background-clip:text;
                              -webkit-text-fill-color:transparent;
                           ">
                              Eato Food Party
                           </h3>

                           <!-- Author -->
                           <p style="
                              font-size:14px;
                              color:#aaa;
                              margin-bottom:18px;
                           ">
                              by <span style="color:#AEF09D;">Akim Doe</span>
                           </p>

                           <!-- Expandable Content -->
                           <div class="blog-content"
                              style="
                                 max-height:120px;
                                 overflow:hidden;
                                 transition:max-height .5s ease;
                                 line-height:1.8;
                                 font-size:15px;
                                 color:#AEF09D;
                              "
                           >
                              <p style="color:#AEF09D;">
                                 A food led gathering rooted in underground culture.
                                 We open the space to local DJs from the streets, subcultures,
                                 and creative scenes turning our spot into a low key party with high energy.
                                 Grill smoke in the air. Plates passed hand to hand. Drinks flowing.
                                 Music loud enough to move bodies, not egos. People dance, eat, connect
                                 no VIPs, no filters, no rules beyond respect.
                                 The Food Party is about reclaiming space for the community.
                                 Supporting local sound, local faces, and real culture. Food as the connector.
                                 Music as the pulse. The night as a shared experience.
                              </p>
                           </div>

                           <!-- Read More -->
                           <div class="read-more"
                              style="
                                 margin-top:20px;
                                 font-size:13px;
                                 font-weight:600;
                                 letter-spacing:1px;
                                 text-transform:uppercase;
                                 color:#AEF09D;
                                 transition:all .3s ease;
                              "
                              onmouseover="this.style.textShadow='0 0 12px #AEF09D'"
                              onmouseout="this.style.textShadow='none'"
                           >
                              Enter the Vibe
                           </div>

                     </div>

                  </div>

               </div>

               <div id="page-container" class="main-blog col-md-4">

                  <div class="blog-card"
                     style="
                           background: linear-gradient(145deg,#0b0b0f,#391773);
                           border-radius:20px;
                           overflow:hidden;
                           box-shadow:0 20px 60px rgba(0,0,0,0.6);
                           transition:all .4s ease;
                           color:#fff;
                           cursor:pointer;
                           border:1px solid rgba(255,255,255,0.05);
                     "
                     onmouseenter="
                           this.querySelector('.blog-content').style.maxHeight='800px';
                           this.querySelector('.read-more').innerText='Close';
                           this.style.boxShadow='0 25px 80px rgba(111,0,255,0.4)';
                     "
                     onmouseleave="
                           this.querySelector('.blog-content').style.maxHeight='120px';
                           this.querySelector('.read-more').innerText='Enter the Vibe';
                           this.style.boxShadow='0 20px 60px rgba(0,0,0,0.6)';
                     "
                  >

                     <!-- Image -->
                     <div style="position:relative; overflow:hidden;">
                           <img src="/onboard/img/dj2.png"
                              style="
                                 width:100%;
                                 height:280px;
                                 object-fit:cover;
                                 transition:transform .6s ease;
                                 filter:brightness(75%);
                              "
                              onmouseover="this.style.transform='scale(1.1)'"
                              onmouseout="this.style.transform='scale(1)'"
                           >

                           <!-- Neon Overlay -->
                           <div style="
                              position:absolute;
                              bottom:0;
                              left:0;
                              right:0;
                              height:100%;
                              background:linear-gradient(to top,rgba(0,0,0,0.9),rgba(0,0,0,0.2));
                           "></div>

                           <!-- Date -->
                           <div style="
                              position:absolute;
                              bottom:20px;
                              left:20px;
                              font-size:13px;
                              letter-spacing:1px;
                              color:#AEF09D;
                              font-weight:600;
                           ">
                              JUNE 17 · 2017
                           </div>
                     </div>

                     <!-- Content -->
                     <div style="padding:30px;">

                           <!-- Title -->
                           <h3 style="
                              font-weight:700;
                              margin-bottom:12px;
                              font-size:22px;
                              background:linear-gradient(90deg,#fff,#AEF09D);
                              -webkit-background-clip:text;
                              -webkit-text-fill-color:transparent;
                           ">
                              Eato Food Party
                           </h3>

                           <!-- Author -->
                           <p style="
                              font-size:14px;
                              color:#aaa;
                              margin-bottom:18px;
                           ">
                              by <span style="color:#AEF09D;">Akim Doe</span>
                           </p>

                           <!-- Expandable Content -->
                           <div class="blog-content"
                              style="
                                 max-height:120px;
                                 overflow:hidden;
                                 transition:max-height .5s ease;
                                 line-height:1.8;
                                 font-size:15px;
                                 color:#AEF09D;
                              "
                           >
                              <p style="color:#AEF09D;">
                                 A food led gathering rooted in underground culture.
                                 We open the space to local DJs from the streets, subcultures,
                                 and creative scenes turning our spot into a low key party with high energy.
                                 Grill smoke in the air. Plates passed hand to hand. Drinks flowing.
                                 Music loud enough to move bodies, not egos. People dance, eat, connect
                                 no VIPs, no filters, no rules beyond respect.
                                 The Food Party is about reclaiming space for the community.
                                 Supporting local sound, local faces, and real culture. Food as the connector.
                                 Music as the pulse. The night as a shared experience.
                              </p>
                           </div>

                           <!-- Read More -->
                           <div class="read-more"
                              style="
                                 margin-top:20px;
                                 font-size:13px;
                                 font-weight:600;
                                 letter-spacing:1px;
                                 text-transform:uppercase;
                                 color:#AEF09D;
                                 transition:all .3s ease;
                              "
                              onmouseover="this.style.textShadow='0 0 12px #AEF09D'"
                              onmouseout="this.style.textShadow='none'"
                           >
                              Enter the Vibe
                           </div>

                     </div>

                  </div>

               </div>

               <div id="page-container" class="main-blog col-md-4">

                  <div class="blog-card"
                     style="
                           background: linear-gradient(145deg,#0b0b0f,#391773);
                           border-radius:20px;
                           overflow:hidden;
                           box-shadow:0 20px 60px rgba(0,0,0,0.6);
                           transition:all .4s ease;
                           color:#fff;
                           cursor:pointer;
                           border:1px solid rgba(255,255,255,0.05);
                     "
                     onmouseenter="
                           this.querySelector('.blog-content').style.maxHeight='800px';
                           this.querySelector('.read-more').innerText='Close';
                           this.style.boxShadow='0 25px 80px rgba(111,0,255,0.4)';
                     "
                     onmouseleave="
                           this.querySelector('.blog-content').style.maxHeight='120px';
                           this.querySelector('.read-more').innerText='Enter the Vibe';
                           this.style.boxShadow='0 20px 60px rgba(0,0,0,0.6)';
                     "
                  >

                     <!-- Image -->
                     <div style="position:relative; overflow:hidden;">
                           <img src="/onboard/img/dj3.png"
                              style="
                                 width:100%;
                                 height:280px;
                                 object-fit:cover;
                                 transition:transform .6s ease;
                                 filter:brightness(75%);
                              "
                              onmouseover="this.style.transform='scale(1.1)'"
                              onmouseout="this.style.transform='scale(1)'"
                           >

                           <!-- Neon Overlay -->
                           <div style="
                              position:absolute;
                              bottom:0;
                              left:0;
                              right:0;
                              height:100%;
                              background:linear-gradient(to top,rgba(0,0,0,0.9),rgba(0,0,0,0.2));
                           "></div>

                           <!-- Date -->
                           <div style="
                              position:absolute;
                              bottom:20px;
                              left:20px;
                              font-size:13px;
                              letter-spacing:1px;
                              color:#AEF09D;
                              font-weight:600;
                           ">
                              JUNE 17 · 2017
                           </div>
                     </div>

                     <!-- Content -->
                     <div style="padding:30px;">

                           <!-- Title -->
                           <h3 style="
                              font-weight:700;
                              margin-bottom:12px;
                              font-size:22px;
                              background:linear-gradient(90deg,#fff,#AEF09D);
                              -webkit-background-clip:text;
                              -webkit-text-fill-color:transparent;
                           ">
                              Eato Food Party
                           </h3>

                           <!-- Author -->
                           <p style="
                              font-size:14px;
                              color:#aaa;
                              margin-bottom:18px;
                           ">
                              by <span style="color:#AEF09D;">Akim Doe</span>
                           </p>

                           <!-- Expandable Content -->
                           <div class="blog-content"
                              style="
                                 max-height:120px;
                                 overflow:hidden;
                                 transition:max-height .5s ease;
                                 line-height:1.8;
                                 font-size:15px;
                                 color:#AEF09D;
                              "
                           >
                              <p style="color:#AEF09D;">
                                 A food led gathering rooted in underground culture.
                                 We open the space to local DJs from the streets, subcultures,
                                 and creative scenes turning our spot into a low key party with high energy.
                                 Grill smoke in the air. Plates passed hand to hand. Drinks flowing.
                                 Music loud enough to move bodies, not egos. People dance, eat, connect
                                 no VIPs, no filters, no rules beyond respect.
                                 The Food Party is about reclaiming space for the community.
                                 Supporting local sound, local faces, and real culture. Food as the connector.
                                 Music as the pulse. The night as a shared experience.
                              </p>
                           </div>

                           <!-- Read More -->
                           <div class="read-more"
                              style="
                                 margin-top:20px;
                                 font-size:13px;
                                 font-weight:600;
                                 letter-spacing:1px;
                                 text-transform:uppercase;
                                 color:#AEF09D;
                                 transition:all .3s ease;
                              "
                              onmouseover="this.style.textShadow='0 0 12px #AEF09D'"
                              onmouseout="this.style.textShadow='none'"
                           >
                              Enter the Vibe
                           </div>

                     </div>

                  </div>

               </div>

            </div>
            <!-- /container-->
         </section>
         <!-- /Section ends -->

    </x-slot>

</x-guest-layout>