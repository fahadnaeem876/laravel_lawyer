<!DOCTYPE html>
<html lang="en">

<!-- attorney57:15-->
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
        <h1 class="page-heading">Our Expert Attorneys</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>FAQs</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="parallax-section">
  <div class="container">
    <div class="attorneytop">
      <div class="row">
        <div class="col-md-4 col-sm-4"><img src="{{ $user->user_image ?? 'image' }}" class="lawimg" alt="" /></div>
        <div class="col-md-8 col-sm-8">
          <h2>{{ $user->name }}</h2>
          <h3> {{ $user->user_experties }} Lawyer</h3>
          <p>{{ $user->service }}</p>
          <ul class="address">
            <li><i class="fa fa-phone"></i>{{ $user->phone }}</li>
            <li><i class="fa fa-envelope-o"></i><a href="#">{{ $user->email ?? '' }}</a></li>
            <li><i class="fa fa-skype"></i>jhon.attorney</li>
            <li><i class="fa fa-globe"></i><a href="#">www.Lawyer & Attorney.com</a></li>
          </ul>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
          </ul>
          
          <div class="attorneydetail">
      <h1>Personal Statement</h1>
      <p>{{ $user->personal_statement ?? '' }}</p>
      
    </div>
          
        </div>
      </div>
    </div>
    
    <div class="atorinfo">
    <div class="row">
        <div class="col-md-6">
          <h2>Experience</h2>
          <ul>
            <li>{{ $user->experience ?? 'No Experience  ' }}</li>
            <li>Proin eu leo mattis, mollis ligula et, tincidunt elit.</li>
            <li>Praesent convallis lectus vel ipsum blandit dictum.</li>
            <li>Suspendisse ac mauris sed sem pharetra venenatis sed ut risus.</li>
            <li>Quisque porttitor libero et consequat porta.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2>Education</h2>
          <ul>
            <li>{{ $user->user_qualification ?? '' }}</li>
            <li>Quisque eget tellus id est aliquam dictum.</li>
            <li>Sed eu augue ullamcorper, pulvinar sem eget, ultricies justo.</li>
            <li>Nunc fringilla orci vel arcu facilisis aliquam.</li>
            <li>Vestibulum quis nisi porttitor, cursus odio vulputate, feugiat nibh.</li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="attorneyContact">
      <h3>Appointment Form</h3>
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

<!-- attorney57:15-->
</html>