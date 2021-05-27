
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digiface</title>
  <meta content="Create A free one page corporate website " name="description">
  <meta content="login page, Digiface" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <!-- Favicons -->
  <link href="{{asset('assets/img/trans_logo.png')}}" rel="icon">
  <link href="{{asset('assets/img/trans_logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
   <link href="{{asset('assets/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/dropzone/dist/min/basic.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:digiface@gmail.com">digiface@gmail.com</a>
        <i class="icofont-phone"></i> +2347013950375
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="whatsapp"><i class="icofont-whatsapp"></i></a>
        <!-- <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>-->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="mr-auto">
      
        <a href="/" class="navbar-brand"><img src="{{asset('assets/img/trans_logo.png')}}" width="40" height="40"></a>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <!--class="active"-->
          <li><a href="/">Home</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="/about-us">About Us</a></li>
              <!--<li><a href="team.html">Team</a></li>-->

        
              

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
            <a href="{{url('home')}}">Dashboard</a>

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

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<!-- End Header -->
			
		</div>
	</header>
	<!--================ End Header Menu Area |  d-flex align-items-center =================-->

	<!--================ Start Home Banner Area =================-->
    
    
      @yield('content')
	<!--================  start footer Area =================-->
	
  
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
	<!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script>
   $('.keyup-websitename').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z0-9,\s]+\s*$/;
    if(!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2">No special characters allowed.</span>');
    }
});
</script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script type="text/javascript">
    // var total_photos_counter = 0;
    
Dropzone.options.upload = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 16, // MB
  acceptedFiles:'image/*',
  uploadMultiple:false,
  headers:'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content');
  accept: function(file, done){
    
     done(); 
 
  }

};
  
</script>  
  <!--<script src="{{asset('assets/dropzone/dist/configdrop.js')}}"></script>-->
  <script src="{{asset('assets/dropzone/dist/min/dropzone-amd-module.min.js')}}"></script>
  <script src="{{asset('assets/dropzone/dist/min/dropzone.min.js')}}"></script>
	<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
	<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>
	<!-- Template Main JS File -->
	
  
  </body>
  
  </html>