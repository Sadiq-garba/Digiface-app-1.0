<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		@if(!empty($web))
	
	    <title>Digiface - {{$web->title}}</title>
	    @include('meta::manager', [
            'title'         => $web->title,
            'description'   => $web->description,
			'image'         => url('assets/img/trans_logo.png'),
			'keywords'      => 'business, one page websites, corporate websites, digiface, '. $web->biz_type
        ])
	
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<!-- Favicons -->
		<link href="{{asset('temp/images/trans_logo.png')}}" rel="icon">

		<link rel="stylesheet" href="{{asset('temp/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('temp/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('temp/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{url('temp/css/icofont.min.css')}}">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{asset('temp/css/templatemo-style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magic-popup/dist/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('temp/owl.carousel/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('temp/owl.carousel/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('temp/js/purecookie/purecookie.css')}}"/>
		<link href="{{asset('temp/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
		<link href="{{asset('temp/notification/bs4.pop.css')}}" rel="stylesheet">
	</head>
	
	<body id="top">

		<!-- start preloader -->
		<!--<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>-->
    	<!-- end preloader -->

        <!-- start header -->
	
        <header>
            <div class="container">
                <div class="row">
                  <!--<div class="col-md-3 col-sm-3 col-xs-12">
					<p><a href="/payment"><i class="icofont-crown"></i>Get a website</a></p>
	

				   </div>-->
                
                    <div class="col-md-3 col-sm-3 col-xs-12">
					<p><i class="fa fa-envelope-o"></i><span> Email</span><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="social-icon">
							<li><span>Meet us on</span></li>
							@if(!empty($web->facebook_link))
						<li><a href="{{$web->facebook_link}}" class="fa fa-facebook"></a></li>
							@endif
							@if(!empty($web->whatsapp_link))
							<li><a href="{{$web->facebook_link}}" class="fa fa-whatsapp"></a></li>
							@endif
							@if(!empty($web->instagram_link))
						<li><a href="{{$web->instagram_link}}" class="fa fa-instagram"></a></li>
							@endif
                            <!--<li><a href="#" class="fa fa-apple"></a></li>-->
                        </ul>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						 @if(!empty(Auth::user()->name))
					<p><a class="btn btn-primary" href="/page/{{$web->id}}/edit"><i style="color:white;" class="fa fa-edit"></i> Edit {{$web->website_name}} page </a></p>
					     @endif
				   </div>
				</div>
				<!---row--->
               <!-- <div class="row">
                   
					<div class="col-md-3 col-sm-3 col-xs-12">
						
						@if(!empty(Auth::user()->name))
						<a href="{{url('home')}}">DASHBOARD</a>
						@endif
						
                    
				   </div>
				   
					<div class="col-md-3 col-sm-3 col-xs-12">
						
						
						<a href="/">DIGIFACE <img src="{{asset('assets/img/trans_logo.png')}}" width="40" height="40"></a>
                    
				   </div>
                </div>-->
			</div>
			<!---container--->
        </header>
        <!-- end header -->

    	<!-- start navigation|templatemo-nav  -->
    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
				   <a href="#" class="navbar-brand" style="text-transform:capitalize;">{{$web->logo}}</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#service">ABOUT</a></li>
						<li><a href="#team">PRODUCTS/SERVICES</a></li>
						<li><a href="#contact">CONTACT</a></li>
						@if(!empty(Auth::user()->name))
						<li><a href="{{url('home')}}">DASHBOARD</a></li>
						@endif
						<li><a href="/">DIGIFACE <img src="{{asset('assets/img/trans_logo.png')}}" width="40" height="40"></a></li>
						@if(!empty(Auth::user()->name))


						@endif
						<li><a href="/upload-ad">PLACE ADVERT</a></li>
						
					</ul>
					  
				</div>
			</div>
		</nav>
		<marquee>Get a customized business/portfolio website for your business. Go premium and remove our logo from your website   <a style="color:blue;" href="/payment">click to get started !</a> </marquee>
		<!-- end navigation -->
		@if(session('success'))
           <!--<script> 
          alert('your transaction was successful');
          </script> -->
          
          <p class="text-center">{{session('success')}}</p>
          <script> 
             alert('{{session('success')}}');
             var audio = new Audio("{{asset('storage/files/success.mp3')}}");
              audio.play();
          </script>
         @endif
    	<!-- start home -->
	<section id="home" class="wow fadeInRight" style="background:url('{{url('storage/banner_img')}}/{{$web->banner_img}}');  background-size: cover; padding-top: 160px; padding-bottom: 100px; min-height: 650px; background-position:center;">
			<div class="overlay-itro"></div>
		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">welcome to <span>{{$web->logo}}</span></h1>
    					<div class="element">
						<div class="sub-element">{{$web->banner_texts}}</div>
                            <!--<div class="sub-">Awesome Template is provided by templatemo.com website for everyone</div>
                            <div class="sub-element">Download, edit and apply this awesome template for your websites</div>-->
                        </div>
					<a data-scroll href="tel:{{$web->phone_number}}" class="btn btn-primary"><i class="fa fa-phone"></i> Call Us</a>
    				</div>
    			</div>
    		</div>
	</section>
		
		@endif
    	<!-- end home -->

    	<!-- start about -->
		<!--<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">WE ARE <span>AWESOME</span></h2>
    				</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-mobile"></i>
								</div>
								<h3 class="media-heading">FULLY RESPONSIVE</h3>
							</div>
							<div class="media-body">
								<p>Awesome responsive template is provided by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a> website. This is Bootstrap v3.3.2 layout built on HTML5 CSS3. You can use this for any purpose. Please tell your friends about it.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">FREE SUPPORT</h3>
							</div>
							<div class="media-body">
								<p>Credits go to <a rel="nofollow" href="http://pixabay.com">Pixabay</a> for homepage image and <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for portfolio images. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								</div>
								<h3 class="media-heading">HTML5 &AMP; CSS3</h3>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<!-- end about -->
         <!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">About <span>Us</span></h2>
    				</div>
    				<!--<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-laptop"></i>
    					<h4>Web Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>-->
    				<div class="col-md-6 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
					<img src="{{url('storage/about_img')}}/{{$web->about_img}} " class="img-responsive" alt="team img 3">
    				</div>
    				<div class="col-md-6 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<!--<i class="fa fa-cog"></i>-->
    					<h4>Write up</h4>
					<p>{{$web->description}}</p>
				
					</div>
    			</div>
    		</div>
    	</section>
    	<!-- end servie -->
    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
						@if(count($detail) > 0)
						<h2><span><i class="fa fa-cart-o"></i></span></h2>
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Our</span> Products/Services</h2>
					    @endif
					</div>
							@if(count($detail) > 1)
							@foreach($detail as $details)
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn " data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">                                 <!--class="img-responsive"-->
    						<img class="text-center" src="{{url('storage/prod_img')}}/{{$details->prod_img}}"  width="350" height="350"  alt="team img 1">
    							<div class="team-des justify-content-center">
								<h4 class="text-center">{{$details->product_name}}</h4>
    								<span class="text-center">{{$details->price}}</span>
									<p class="text-center">{{$details->description}}</p>
							<div class="action">	
								<a href="tel:{{$details->phone_number}}" class="btn btn-primary "><i class="fa fa-phone" ></i> Call</a>
								@if(!empty(Auth::user()->name))
								<a class="btn btn-primary" href="{{url('edit-products')}}/{{$details->id}}"><i class="fa fa-edit"></i> Edit</a>
								<form method="POST"  action="{{url('product/delete')}}/{{$details->id}}" style="margin:10px; margin-top:10px;">
                                    {{ csrf_field() }}
            
                                    <div class="form-group">
                                <p> <input type="submit"   class="btn btn-danger delete-user" value="Delete product" onClick="return myFunction();"></p>
                                 </div>
								</form>
								@endif
							</div>
							   
							</div>
    					</div>
					</div>
					@endforeach
					@elseif(count($detail) == 1) 
					@foreach($detail as $details)
    				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{url('storage/prod_img')}}/{{$details->prod_img}}" class="img-responsive" alt="team img 1">
    							<div class="team-des">
								<h4 class="text-center"> {{$details->product_name}}</h4>
    								<span class="text-center">{{$details->price}}</span>
    								<p class="text-center">{{$details->description}}</p>
								<a href="tel:{{$details->phone_number}}" class="text-center btn btn-primary" style="text-align:center; display:block; margin:0 auto;"><i class="fa fa-phone"></i> call</a>
								@if(!empty(Auth::user()->name))
								<a class="btn btn-primary text-center" href="{{url('edit-products')}}/{{$details->id}}"><i class="fa fa-edit"></i>edit</a>
								<form method="POST" action="{{url('product/delete')}}/{{$details->id}}">
                                    {{ csrf_field() }}
            
                                    <div class="form-group" class="text-center">
                                <p> <input type="submit"   class="btn btn-danger delete-user" value="Delete product" onClick="return myFunction();"></p>
                                 </div>
                                </form>
							    @endif
							</div>
    					</div>
					</div>
					@endforeach
					
					@endif
    				<!--<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="temp/images/team-img2.jpg" class="img-responsive" alt="team img 2">
    							<div class="team-des">
    								<h4>MARY</h4>
    								<span>Developer</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
									<a class="btn btn-primary"><i class="fa fa-phone"></i> Call</a>
								</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="temp/images/team-img3.jpg" class="img-responsive" alt="team img 3">
    							<div class="team-des">
    								<h4>JULIA</h4>
    								<span>Director</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
									<a class="btn btn-primary"><i class="fa fa-phone"></i> Call</a>
								</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="temp/images/team-img4.jpg" class="img-responsive" alt="team img 4">
    							<div class="team-des">
    								<h4>LINDA</h4>
    								<span>Manager</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
									<a class="btn btn-primary"><i class="fa fa-phone"></i> Call</a>
								</div>
    					</div>
					</div>-->
					
				       @if(!empty(Auth::user()->name))
                    <div class="col-md-12 col-xs-12 col-12">
					<a href="{{url('create-products')}}/{{$web->user_id}}" style="text-align:center; display:block; margin:0 auto;" class="btn btn-primary"><i class="fa fa-plus"></i> add product</a>
					</div>
				      @endif
				
				</div>
    		</div>
		</section>
		<!-- end team -->
		<section id="team">
			<div class="container">
			  <div class="row">
			    <div class="col-md-12">
					
					<h2 class="wow fadeInRight"><span>Adverts</span></h2>
				</div>
				
				<div class="col-md-12">
				  <div class="owl-carousel owl-theme"> 
					 @if(count($ad) > 0)
					 @foreach($ad as $ads)
				  <a href="{{$ads->link}}"><img class="item team-wrapper" width="100%" height="300"  src="{{asset('storage/ads')}}/{{$ads->banner_img}}"/></a>
					 @endforeach
					 @else
					
					<h1>empty</h1>

					@endif
				  
				
		
			     </div>
			   </div>
			
			</div>
		</section>
        <!-- Advert -->
    	<section id="team">
          <div class="container">
		    <div class="row">
			     <div class="col-md-12">
						<h2><span><i class="fa fa-cart-o"></i></span></h2>
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>GO</span> PREMIUM</h2>
						</div class="col-md-12 image-link">
					    <div>
					</div>
			
			     
			
			
			
			        <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
										<img src="{{url('temp/images')}}/ads.png" class="img-responsive" alt="image advert about getting standard website"/>
    							<div class="team-des">
								<h4 class="text-center">Go premium and get a customized corporate/portfolio website developed</h4>
    							<!--	<span></span>
    								<p></p>-->
								<a href="/payment" class="btn btn-primary"  style="text-align:center; display:block; margin:0 auto;"><i class="fa fa-phone"></i> Get it now</a>
								
							</div>
    					</div>
					</div>
			 </div>
		  </div>




        </section>
        <!-- end advert -->
    	<!-- start portfolio -->
    	<section id="portfolio">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
						@if(count($port) > 0)
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>OUR</span> PORTFOLIO</h2>
					     @endif
					</div>
					@if(!empty($port))
					@foreach($port as $ports)
    				<div class="col-md-3 col-sm-3 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">                          <!--img-responsive-->
    					   <img src="{{url('storage/port_img')}}/{{$ports->port_img}}" width="100%"  class="port_img" alt="portfolio img 1">
								   @if(!empty(Auth::user()->name))
						       <div class="portfolio-overlay">
								<h4>Caption</h4>
								<p>{{$ports->caption}}</p>
									<a href="{{url('edit-portfolio')}}/{{$ports->id}}" class="btn btn-default">Edit</a>
							        <form method="POST" action="{{url('portfolio/delete')}}/{{$ports->id}}" style="display:inline-block;">
                                    {{ csrf_field() }}
            
                                    <div class="form-group">
                                 <input type="submit"  class="btn btn-danger delete-user" value="Delete" onClick="return myFunction();"><i class="fa fa-delete"></i>
                                 </div>
                                </form>
                                </div>
								   @else   
								   
								   <div class="portfolio-overlay">
									 <h4>Caption</h4>
									 <p>{{$ports->caption}}</p>
									<!-- <a href="{{url('edit-portfolio')}}" class="btn btn-default">Edit</a>-->
							 
									</div>
								 
								   @endif 
							</div>
					</div>
					@endforeach
					@endif

    				<!--<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="temp/images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Two</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="temp/images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Three</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="temp/images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Four</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="temp/images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Five</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="temp/images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Six</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project Seven</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="temp/images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Eight</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
				   </div>-->
				   
				
			
			</div>

    		<div class="row">
			    @if(!empty(Auth::user()->name))
				<div class="col-md-12 col-xs-12 col-12">
				<a href="{{url('create-portfolio')}}/{{$web->user_id}}" style="text-align:center; display:block; margin:0 auto;" class="btn btn-primary"><i class="fa fa-camera"></i> add Image</a>
				@endif
			</div>
				
			
		</div>
    	</section>
    	<!-- end portfolio -->

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>DETAILS</span></h2>
    				</div>
    				<!--<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="#" method="post">
    						<label>NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
    						
                            <input type="submit" class="form-control">
    					</form>
    				</div>-->
    				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
						<!--<address>-->
    						<p class="address-title">OUR ADDRESS</p>
						     <address>
							<span>{{$web->biz_address}}</span>
							  @if(!empty($web))
						     </address>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<address>
							<p><i class="fa fa-envelope-o"></i>{{$web->email}}</p>
						</address>
						</div>	
						<div class="col-md-3 col-sm-3 col-xs-12">
							<address>		
							<p><i class="fa fa-map-marker"></i> {{$web->biz_address}}</p>
						  </address>
						</div>	
						<div class="col-md-3 col-sm-3 col-xs-12">
							<address>
						<p><i class="fa fa-phone"></i>{{$web->phone_number}}</p>
						   </address>
						   
					</div>
						<!--</address>-->
					
    				<!--	<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>-->
						@endif

						
					  </div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <p  class="wow bounceIn text-center" data-wow-offset="50" data-wow-delay="0.3s">
                       	<a  style="color:white;" href="isis">Powered by Digiface</a> <img src="{{asset('assets/img/trans_logo.png')}}" width="40" height="40"> </p>
                    </div>
                </div>
            </div>
        </footer>
		<!-- end copyright -->
		<!--scripts-->
		<script src="{{asset('temp/js/jquery.js')}}"></script>
		<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5b5321ee8f327c00111aaf85&product=inline-share-buttons' async='async'></script>

		<script src="{{asset('temp/js/bootstrap.min.js')}}"></script>
	   <!-- <script src="{{asset('temp/js/jquery.singlePageNav.min.js')}}"></script>-->
	    <script src="{{asset('temp/owl.carousel/owl.carousel.min.js')}}"></script>
		
		
		<script src="{{asset('temp/js/typed.js')}}"></script>
		<script src="{{asset('temp/js/wow.min.js')}}"></script>
		<script src="{{asset('temp/js/custom.js')}}"></script>
		<script src="{{asset('temp/notification/bs4.pop.js.js')}}"></script>
        <script src="{{asset('temp/js/purecookie/purecookie.js')}}"></script>
		<script src="{{asset('assets/magic-popup/dist/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/magic-popup/dist/jquery.magnific-popup.js')}}"></script>
        <script>
          function myFunction() {
            if(!confirm("Are you sure you want to delete delete this page"))
              event.preventDefault();
           }
        </script>
	    <script type="text/javascript">
         
           var audio = new Audio("{{asset('storage/files/success.mp3')}}");
          audio.play();

    
        
		</script>
		
		<script>
		$(document).ready(function() {
          $('.image-link').magnificPopup({type:'image'});
        });
		</script>
	
		<script src="{{asset('temp/js/carousel.js')}}"></script>
		
	</body>
</html>