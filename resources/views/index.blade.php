<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digiface</title>
  
@include('meta::manager', [
     'title'         => 'Digiface - Index',
     'description'   => 'Create a one page corporate website for your business ',
     'image'         =>  url('assets/img/trans_logo.png'),
     'keywords'      => 'business, one page websites, corporate websites, digiface,'

])
  <!-- Favicons -->
  <link href="{{asset('assets/img/trans_logo.png')}}" rel="icon">
  <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.0.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">digiface@gmail.com</a>
        <i class="icofont-phone"></i> <a style="color:white;" href="call:+2347013950375">+2347013950375</a>
       <!-- <i class="icofont-warning"></i> <a style="color:white;" href="call:+2347013950375">Report user</a>-->
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-whatsapp"></i></a>
       <!-- <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>-->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="mr-auto">
        <!--<h1 class="text-light"><a href="/"><img src="{{asset('assets/img/trans_logo.png')}}" width="40" height="40"></a></h1>-->
        <a href="/" class="navbar-brand"><img src="{{asset('assets/img/trans_logo.png')}}" width="40" height="40"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="/about-us">About Us</a></li>
             <!-- <li><a href="team.html">Team</a></li>-->

        
              

             <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
			  </li>-->
			  
			  
            </ul>
		  </li>
		  <li><a href="/payment">Get a website</a></li>
       <li><a href="/report"><i class="icofont-warning" style="color:red;" ></i> Report User</a></li>
		  @guest
			  <li class="nav-item">
				  <a class="nav-link" href="{{ route('login') }}"><i style="color:black;" class="icofont-user"></i> {{ __('Login') }}</a>
			  </li>
			  @if (Route::has('register'))
				  <li class="nav-item">
					  <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
				  </li>
			  @endif
		  @else
			  <li class="nav-item dropdown">
				  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					  {{ Auth::user()->name }} <span class="caret"></span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="{{ route('logout') }}"
						 onclick="event.preventDefault();
									   document.getElementById('logout-form').submit();">
						  {{ __('Logout') }}
            </a>
            <a class="dropdown-item" href="home">
              Dashboard
					  </a>

					  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						  @csrf
					  </form>
				  </div>
			  </li>
		  @endguest

          <!--<li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>-->
    <li><a href="{{url('/contact-page')}}">Contact</a></li>
          <li style="margin:10px;">
            <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <input type="text" required placeholder="Search businesses" name="q" style="border-radius:15px; padding:5px;">
            <button type="submit"  style="padding:5px; background-color:goldenrod; border-radius:100%;"><i class="icofont-search"></i></button>
            
            
        </form></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
                
          <!-- Slide 1 -->
          <div class="carousel-item " style="background: url(assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span> Welcome to Digiface</span></h2>
                <p class="animated fadeInUp">Get a one page website for your business for free</p>
                <a href="{{ route('register') }}" class="btn-get-started animated fadeInUp" style="font-weight:bold;">Sign Up</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>Give your business an online presence</span></h2>
                <p class="animated fadeInUp">We provide startups and freelancers the opportunity of owning a one page website. you don't have to code or spend much to get an online business</p>
                <a href="{{ route('register') }}" class="btn-get-started animated fadeInUp" style="font-weight:bold;">Sign up</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
         <!-- <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Sequi ea <span>Dime Lara</span></h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>-->

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="icofont-responsive"></i>
              <h3><a href="">SEO friendly</a></h3>
              <p>We believe that for your business to create awareness effectively your website must be visbible on the internet. That is why we pay attentin to SEO

              </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-code"></i>
              <h3><a href="">No code</a></h3>
              <p>Setup a one page website easily without coding. Anyone can setup a one page website</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h3><a href="">Online presence</a></h3>
              <p>Your business stand to benefit from having a one page website for free</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>What we do</h3>
            <!--<p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>-->
            <p>
              We provide businesses and individuals the opportunity of setting up a one page portfolio website for their various needs. No technical coding skills is required for setting up a portfolio website on our platform. One only needs to sign up with us to get started.
              Our free one page package allows businesses to setup a decent one page portfolio website for their business needs at zero price. Users can choose to upgrade to our premium package.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
 
    <!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
   <!--<section id="clients" class="clients">
      <div class="container">

       <div class="section-title">
          <h2>Explore Businesses</h2>
          <p>Do business with our registered users</p>
        </div>

        <div class="owl-carousel clients-carousel">
          
        @if(count($biz) > 0)
        @foreach($biz as $img)
        <img src="{{url('storage/banner_img')}}/{{$img->banner_img}}" alt="">
        <p><a href="/pages/{{$img->website_name}}/">{{$img->logo}}</a></p>
        @endforeach
        @endif
        </div>

      </div>
    </section>-->
    <!------------- section -------------->
    
    <section id="clients" class="clients">
      <div class="container">
     
      <div class="row wow bounceIn">
        <div class="col-md-12 section-title">
          <h2>Explore Businesses</h2>
          <p>Do business with our registered users</p>
        </div>
        
        @if(count($biz) > 0)
        @foreach($biz as $img)
       
         <div class=" col-md-3 col-6">
          
        
            
         <!-- <img src="{{url('storage/banner_img')}}/{{$img->banner_img}}" alt="" width="150" height="150" style="padding:10px;"/>-->
          <img src="{{url('storage/banner_img')}}/{{$img->banner_img}}" alt="" width="100%" height="70%" style="padding:10px;"/>
          
          <p><a class="text-danger" style="font-weight:bold;" href="/pages/{{$img->website_name}}/">{{$img->logo}}</a></p>
        
        
       </div>
        @endforeach
        @endif
      </div>
       
        




      </div>
    </section>
    
   <!-- End section --> 
    <!-- End Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

 <!--   <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>-->
         <!-- <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>-->
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

        <!--  <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>-->

          <div class="col-lg-6 col-md-6 footer-contact">
            <h2>Contact Us</h2>
            <p>
              Sylvester Iruh street <br>
              Plot 1, block 5<br>
              Mount patti road <br>
              Lokoja,<br>
              Kogi state.
              <br>
              <strong>Phone:</strong> +2347013950375<br>
              <strong>Email:</strong> goldenwebdesign.ng@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-6 col-md-6 footer-info">
            <h2>Our Motto</h2>
            <p style="font-size:22px; font-weight:bold; color:goldenrod">We don't just build websites, we build brands !!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <!--<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>digiface</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Powered by <a href="https://bootstrapmade.com/">Digiface</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/crawler.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>