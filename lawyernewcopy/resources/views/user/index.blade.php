<!DOCTYPE html>
<html lang="en">

<!--  50:48-->
<head>
<meta charset="UTF-8">
<title>Lawyer & Attorney - Responsive Onepage HTML Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Lawyer & Attorney One Page HTML Template">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="sharjeel anjum">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}">

<!-- Fontawesome css -->
<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css')}}">

<!-- Rev Slider css -->
<link rel="stylesheet" href="{{ asset('user/js/revolution-slider/css/settings.css')}}">

<!-- Magnific-popup css -->
<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css')}}">

<!-- Owl Carousel css -->
<link rel="stylesheet" href="{{ asset('user/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<div class="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
</div>

<!-- Navigation Section -->
@include('user.user_header')

<!-- Revolution slider start -->
<div class="tp-banner-container" id="slider">
  <div class="tp-banner" >
    <ul>
      <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/slider/dummy.png" data-lazyload="images/slider/banner.jpg">
        <div class="caption lfb large-title tp-resizeme slidertext2" data-x="right" data-y="200" data-speed="600" data-start="1000">Welcome to Lawyer & Attorney Template</div>
        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="right" data-y="240" data-speed="600" data-start="1600">We Care About you</div>
        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="right" data-y="300" data-speed="600" data-start="2200"> Best Lawyers In New York</div>
        <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="right" data-y="370" data-speed="600" data-start="2800"><a href="#." class="section-btn">Get Started</a></div>
      </li>
      <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/slider/dummy.png" data-lazyload="images/slider/banner2.jpg">
        <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000">Welcome to Lawyer & Attorney Template</div>
        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600">Attorney Lawyers Template</div>
        <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="400" data-speed="600" data-start="2200"><a href="#." class="section-btn">Get Started</a></div>
      </li>
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 

<!-- About section -->
<div class="howitwrap" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-4"><img src="images/about-us.jpg" alt="" /></div>
      <div class="col-md-8">
        <div class="stcontent"> 
          
          <!-- title start -->
          <div class="section-title">
            <h3>Welcome to <span>Lawyer & Attorney</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. </p>
          </div>
          <!-- title end -->
          
          <ul class="howlist">
            <!--step 1-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-university" aria-hidden="true"></i></div>
                <h4>Protect Your Rights</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore</p>
              </div>
            </li>
            <!--step 1 end--> 
            
            <!--step 2-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                <h4>Medical Treatment</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore</p>
              </div>
            </li>
            <!--step 2 end--> 
            
            <!--step 3-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-male" aria-hidden="true"></i></div>
                <h4>We Fight for Justice</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore</p>
              </div>
            </li>
            <!--step 3 end-->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Counter Section -->
<div id="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="999" data-speed="1000"></span> <span class="counter-text">Trusted Client</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="1512" data-speed="2000"></span> <span class="counter-text">Success Cases</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="1756" data-speed="3000"></span> <span class="counter-text">Case Study</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="101" data-speed="4000"></span> <span class="counter-text">Awards</span> </div>
      </div>
    </div>
  </div>
</div>

<!-- Practice Areas section -->
<div id="practicearea" class="parallax-section">
  <div class="container"> 
    <!-- Section Title -->
    <div class="section-title">
      <h3>Practice <span>Areas</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
    </div>
    <div class="row"> 
      <!-- Service 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/1.jpg" class="animate" alt=""></div>
          <h4>Divorce Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/2.jpg" class="animate" alt=""></div>
          <h4>Litigation</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/3.jpg" class="animate" alt=""></div>
          <h4>Accident Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/4.jpg" class="animate" alt=""></div>
          <h4>Drug Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/5.jpg" class="animate" alt=""></div>
          <h4>Personal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/6.jpg" class="animate" alt=""></div>
          <h4>Criminal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tagline -->
<div class="servicesbox bg1">
  <div class="container">
    <div class="section-title">
      <h3>Personal Injury Lawyers</h3>
    </div>
    <div class="ctoggle">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt mauris est, in faucibus dui viverra et. Aliquam finibus vestibulum elit, at pharetra nisl congue vel. Nunc pretium posuere justo pretium fringilla. Sed volutpat risus non rhoncus convallis. Sed fermentum est at hendrerit pellentesque. Mauris nec leo euismod, sagittis mauris in, posuere est...</p>
      <a href="#" class="readmore">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
  </div>
</div>

<!-- Services Section -->
<div id="service" class="parallax-section">
  <div class="container">
    <div class="section-title" >
      <h3>Services <span>We Offer</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="row"> 
      <!-- Service 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-car" aria-hidden="true"></i></div>
          <h4>Car Accident</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-shield" aria-hidden="true"></i></div>
          <h4>Security Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-code" aria-hidden="true"></i></div>
          <h4>Personal Injury</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-male" aria-hidden="true"></i></div>
          <h4>Criminal Defence</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-cloud" aria-hidden="true"></i></div>
          <h4>Brain Injury</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-motorcycle" aria-hidden="true"></i></div>
          <h4>Motorcycle Accident</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team Section -->
<div id="team" class="parallax-section">
  <div class="container"> 
    
    <!-- Dection Title -->
    <div class="section-title" >
      <h3>Our Attorneys <span>Team</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="row"> 
      <!-- team 1 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img1.jpg" class="animate" alt=""></div>
          <h4>JOHN DOE</h4>
          <h5>Personal Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
      
      <!-- team 2 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img2.jpg" class="animate" alt=""></div>
          <h4>JASON DOE</h4>
          <h5>Criminal Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
      
      <!-- team 3 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img3.jpg" class="animate" alt=""></div>
          <h4>JANE DOE</h4>
          <h5>Family Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
      
      <!-- team 4 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img4.jpg" class="animate" alt=""></div>
          <h4>MARTIN DOE</h4>
          <h5>Employment Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tagline Section -->
<div class="taglinewrap">
  <div class="container">
    <h2>FREE Consultation</h2>
    <p>Sed sed neque laoreet, rhoncus libero id, pharetra est. Sed ut neque est. Maecenas et est sagittis, mollis risus dignissim, mattis dolor. </p>
    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us Now</a> </div>
</div>

<!-- FAQ Section -->
<div id="faqs" class="parallax-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6"> 
        
        <!-- Video start -->
        <div class="videowraper">
          <div class="videobg">
            <div class="video-image" style="background-image:url(images/videobg.jpg)"></div>
            <div class="playbtn"><a href="#." class="popup"><span></span></a></div>
          </div>
        </div>
        <!-- Video end --> 
        
      </div>
      <div class="col-md-6">
        <div class="faqs">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="" href="#collapse1">Nunc ut erat at massa elementum tempus.?</a> </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus. </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse2"> Donec lacus sem, pretium a eros ut?</a> </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus. <br>
                  <br>
                  Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse3"> Donec lacus sem, pretium a eros ut?</a> </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus. <br>
                  <br>
                  Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse4">Nunc ut erat at massa elementum tempus.?</a> </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus. <br>
                  <br>
                  Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse5"> Donec lacus sem, pretium a eros ut?</a> </h4>
              </div>
              <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus. <br>
                  <br>
                  Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container"> 
    
    <!-- Section Title -->
    <div class="section-title">
      <h3>Testimonials</h3>
      <p>See What Our Clients Saying!</p>
    </div>
    <ul class="testimonialsList">
      <!-- Client -->
      <li class="item">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
    </ul>
  </div>
</div>

<!-- Blog Section -->
<div id="blog">
  <div class="container"> 
    <!-- SECTION TITLE -->
    <div class="section-title" >
      <h3>Latest From <span>Blog</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <ul class="blogGrid">
      <li class="item">
        <div class="int"> 
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/1.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
      <li class="item">
        <div class="int"> 
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/2.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
      <li class="item">
        <div class="int"> 
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/3.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
      <li class="item">
        <div class="int"> 
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/4.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
    </ul>
  </div>
</div>

<!-- Clients Logo-->
<div class="our-clients">
  <div class="container">
    <div class="owl-clients">
      <div class="item"> <img src="images/client-logo4.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
    </div>
  </div>
</div>
<!-- Clients Logo end--> 

<!-- Footer Section -->
<div class="site-footer"> 
  <!-- Footer Top start -->
  <div class="footer-top-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-logo"><img src="images/logo.png" alt="Lawyer & Attorney"></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. </p>
            <ul class="footer-contact">
              <li><i class="fa fa-phone"></i> +1 1234 456789</li>
              <li><i class="fa fa-envelope"></i> info@companyname.com</li>
              <li><i class="fa fa-fax"></i> +1 123 123456</li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">Quick Links</h3>
            <ul>
              <li><a href="index-2.html">Home</a></li>
              <li><a href="about.html">About Company</a></li>
              <li><a href="services.html">Our Services</a></li>
              <li><a href="blog-list.html">Blog</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">About Lawyer</h3>
            <ul>
              <li><a href="practice-areas.html">Practice Areas List</a></li>
              <li><a href="practice-area-detail.html">Practice Areas Detail</a></li>
              <li><a href="attorney-list.html">Attorney List</a></li>
              <li><a href="attorney.html">Attorney Detail</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-lwf-title">Opening Hours</h3>
            <ul class="open-hours">
              <li><span>Mon to Fri:</span> <span class="text-right">09:30AM to 05:30PM</span></li>
              <li><span>Sun:</span> <span class="text-right">Closed</span></li>
            </ul>
            <div class="newsletter">
              <form>
                <input type="text" placeholder="Enter your email" value="" class="news-input">
                <button type="submit" value="" class="news-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top end --> 
  
  <!-- copyright start -->
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-6"><span>Lawyer & Attorney</span>.</div>
        <div class="col-md-12 col-md-6 text-right"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
      </div>
    </div>
  </div>
  <!-- copyright end --> 
</div>

<!-- Bootstrap --> 
<script src="{{ asset('user/js/jquery-2.1.4.min.js')}}"></script> 
<script src="{{ asset('user/js/bootstrap.min.js')}}"></script> 

<!-- Popup --> 
<script src="{{ asset('user/js/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{ asset('user/js/magnific-popup-options.js')}}"></script> 

<!-- Carousel --> 
<script src="{{ asset('user/js/owl.carousel.js')}}"></script> 

<!-- Sticky Header --> 
<script src="{{ asset('user/js/jquery.sticky.js')}}"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript" src="{{ asset('user/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('user/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script> 

<!-- Parallax --> 
<script src="{{ asset('user/js/jquery.parallax.js')}}"></script> 

<!-- Counter --> 
<script src="{{ asset('user/js/counter.js')}}"></script> 
<script src="{{ asset('user/js/smoothscroll.js')}}"></script> 

<!-- Custom --> 
<script src="{{ asset('user/js/custom.js')}}"></script>
</body>

<!--  53:50-->
</html>