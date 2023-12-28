<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Atema</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png')}}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
          @include('header')
         </div>
      </div>
      <!-- header section end -->
      <!-- studies section start -->
      <div class="studies_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="studies_taital">Recent Case Studies</h1>
               </div>
            </div>
            <div class="studies_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="images/service-img1.png"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Master of Law, 2010</h3>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="images/service-img2.png"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Master of Law, 2012</h3>
                     </div>
                     <div class="read_bt active"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="images/service-img3.png"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Master of Law, 2014</h3>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- studies section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer_logo">
                  <a href="indexz.html">
                     <img src="images/logo.png">
               </div>
               <div class="social_icon">
               <ul>
               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
               </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/popper.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('js/custom.js')}}"></script>
      <!-- javascript --> 
   </body>
</html>