<!DOCTYPE html>
<html lang="en">

<!-- contact-us58:57-->
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
        <h1 class="page-heading">Contact Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Contact Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Google Map Section -->
<div id="map"></div>

<!-- Contact Section -->
<div id="contact" class="parallax-section">
  <div class="container"> 
    
    <!-- SECTION TITLE -->
    <div class="section-title">
      <h3>Get Free Quote</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="contact-now">
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Address:</strong>
              <p>8500 lorem, New Ispum, Dolor amet sit 12301</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email Address:</strong>
              <p>investigate@your-site.com</p>
              <p>investigate@your-site.com</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Phone No:</strong>
              <p>+12 345 67 09</p>
              <p>+12 345 67 09</p>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
      </div>
      <div class="col-md-8"> 
        <!-- CONTACT FORM HERE -->
        <div class="contact-form">
          <form id="contact-form" class="row">
            <div class="col-md-4 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-md-4 col-sm-12">
              <input type="tel" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="col-md-12 col-sm-12">
              <input type="text" class="form-control" name="phone" placeholder="Address">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
            </div>
          </form>
        </div>
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

<!-- Google Map --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&amp;callback=initMap" async defer></script> 
<script src="{{ asset('user/js/gmap.js')}}"></script>
</body>

<!-- contact-us58:58-->
</html>