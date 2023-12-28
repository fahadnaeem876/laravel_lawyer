<!DOCTYPE html>
<html lang="en">

<!-- practice-areas56:43-->
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

<!-- Magnific-popup css -->
<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
</head>
<body class="subpage" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Navigation Section -->
@include('user.user_header')

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Practice Areas</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Practice Areas</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Practice Areas section -->
<div id="practicearea" class="innerpgWraper">
  <div class="container">
    <div class="row"> 
      <!-- Service 1 -->
      <div class="col-md-6 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/1.jpg" class="animate" alt=""></div>
          <h4>Divorce Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam.</p>
          <a href="#" class="btn">Read More</a> </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-6 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/2.jpg" class="animate" alt=""></div>
          <h4>Litigation</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam.</p>
          <a href="#" class="btn">Read More</a> </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-6 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/3.jpg" class="animate" alt=""></div>
          <h4>Accident Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam.</p>
          <a href="#" class="btn">Read More</a> </div>
      </div>
      
      <!-- Service 4 -->
      <div class="col-md-6 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/4.jpg" class="animate" alt=""></div>
          <h4>Drug Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam.</p>
          <a href="#" class="btn">Read More</a> </div>
      </div>
      
      <!-- Service 5 -->
      <div class="col-md-6 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/5.jpg" class="animate" alt=""></div>
          <h4>Personal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam.</p>
          <a href="#" class="btn">Read More</a> </div>
      </div>
      
      <!-- Service 6 -->
      <div class="col-md-6 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/6.jpg" class="animate" alt=""></div>
          <h4>Criminal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, lorem nec posuere venenatis, nisi tellus rutrum ante, quis faucibus orci turpis in purus. Morbi quis facilisis massa, ac finibus quam.</p>
          <a href="#" class="btn">Read More</a> </div>
      </div>
    </div>
  </div>
</div>

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
</body>

<!-- practice-areas56:43-->
</html>