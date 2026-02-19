<!DOCTYPE html>
<html lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
      <meta charset="utf-8">
     
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>Eatoo</title>
    
      <link href="/onboard/css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <link href="/onboard/fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
      <link href="/onboard/fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700%7CRoboto+Slab:400,700" rel="stylesheet">
      <!-- Style CSS -->
      <link href="/onboard/css/style.css" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="/onboard/css/plugins.css">
      <!-- Color Style CSS -->
      <link href="/onboard/styles/main.css" rel="stylesheet">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="/onboard/img/remove.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/onboard/img/remove.png">
      <link rel="shortcut icon" href="/onboard/img/remove.png" type="image/x-icon">
	  	<!-- Switcher Only -->
	<link rel="stylesheet" id="switcher-css" type="text/css" href="/onboard/switcher/css/switcher.css" media="all" />
	<!--Alternate CSS -->
    <link rel="alternate stylesheet" type="text/css" href="/onboard/styles/veggie.css" title="veggie" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="/onboard/styles/foodie.css" title="foodie" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="/onboard/styles/maincolors.html" title="maincolors" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="/onboard/styles/candy.css" title="candy" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="/onboard/styles/buffet.css" title="buffet" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="/onboard/styles/boxed.css" title="boxed" media="all" />

   <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&display=swap" rel="stylesheet">
   <style>
      .logotxt{
         font-family: 'Fredoka', sans-serif;
         font-size: 24px;
         font-weight: 700;
         color: #AEF090;
      }
   </style>
   </head>
   <body id="page-top" data-spy="scroll" data-target="#navbar-brand" >
    
      <div class="page-wrapper">
	       <!-- Navbar -->

         <x-header-component />
         <!-- /navbar ends -->     

         <!-- Preloader  -->
         <div id="preloader">
            <div class="spinner">
               <div class="bounce1"></div>
               <div class="bounce2"></div>
               <div class="bounce3"></div>
            </div>
         </div>
         <!--/Preloader ends -->
		 {{$body}}
         <!-- Footer starts -->
        <x-footer-component />

         <!-- /footer ends -->
      </div>
      <!-- /page-wrapper -->
      <!-- Core JavaScript Files -->
      <script src="/onboard/js/jquery.min.js"></script>
      <script src="/onboard/js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="/onboard/js/main.js"></script>
      <!-- Reservation -->
      <script src="/onboard/js/reservation.js"></script>
      <!--Other Plugins -->
      <script src="/onboard/js/plugins.js"></script>
      <!-- Open street maps-->
      <script src="/onboard/js/map.js"></script>
      <!-- MailChimp Validator -->
      <script src="/onboard/js/mc-validate.js"></script> 
 <!-- Switcher -->
      <script src="/onboard/switcher/js/dmss.js"></script> 
<script>
function change1() {
  $('.navbar-custom').load('includes/navbar1.html');
}
function change2() {
  $('.navbar-custom').load('includes/navbar2.html');
}

</script>		  
   </body>

</html>