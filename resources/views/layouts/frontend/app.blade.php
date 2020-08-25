<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- <html lang="zxx" class="no-js"> -->
<head>
	<!-- Mobile Specific Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Daffodil International University" />	
	<!-- Meta Description -->
	<meta name="description" content="Overlap & Improvement System" />
	<!-- Meta Keyword -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- meta character set -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
</head>

<body>

	<!-- Start Header Area -->
	@include('layouts.frontend.partials.navbar')
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	@include('layouts.frontend.partials.banner-parent')
	
	<!-- End Banner Area -->


	<!-- Start About Area -->
	@include('layouts.frontend.partials.about-parent')
	<!-- End About Area -->


	<!-- Start Courses Area -->
	<section class="courses-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 about-right">
					<h1>
						This is Why <br> We have Solid Idea
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
							about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first
							telescope. It’s exciting to think about setting up your own viewing station.
						</p>
					</div>
					<a href="courses.html" class="primary-btn white">Explore Courses</a>
				</div>
				<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Development
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> IT & Software
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Photography
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Language
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Life Science
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Business
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Socoal Science
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Data Science
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Design
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Training
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Humanities
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Marketing
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> Economics
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Personal Dev
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Courses Area -->


	<!--Start Feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Features That Make Us Hero</h1>
						<p>
							If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for
							as low as $.17 each.
						</p>
					</div>
				</div>
			</div>
			<div class="feature-inner row">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-crown"></i>
						<h4>Architecture</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-briefcase"></i>
						<h4>Interior Design</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-medall-alt"></i>
						<h4>Concept Design</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-key"></i>
						<h4>Lifetime Access</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-files"></i>
						<h4>Source File Included</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="ti-headphone-alt"></i>
						<h4>Live Support</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Feature Area -->


	<!-- Start Faculty Area -->
	<section class="faculty-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Faculty Members</h1>
						<p>
							If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for
							as low as $.17 each.
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center d-flex align-items-center">
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('assets/frontend/img/faculty/f1.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Ethel Davis</h4>
						<p class="designation">Sr. Faculty Data Science</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<p>
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('assets/frontend/img/faculty/f2.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Rodney Cooper</h4>
						<p class="designation">Sr. Faculty Data Science</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('assets/frontend/img/faculty/f3.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Dora Walker</h4>
						<p class="designation">Sr. Faculty Data Science</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid" src="{{asset('assets/frontend/img/faculty/f4.jpg')}}" alt="">
					</div>
					<div class="meta-text text-center">
						<h4>Lena Keller</h4>
						<p class="designation">Sr. Faculty Data Science</p>
						<div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
							<p>
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price.
							</p>
						</div>
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Faculty Area -->


	<!-- Start Testimonials Area -->
	@yield('content')
	<!-- End Testimonials Area -->


	<!-- Start Footer Area -->
	@include('layouts.frontend.partials.footer')
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="{{asset('assets/frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="{{asset('assets/frontend/js/vendor/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('assets/frontend/js/easing.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/hoverIntent.js')}}"></script>
	<script src="{{asset('assets/frontend/js/superfish.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl-carousel-thumb.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/mail-script.js')}}"></script>
	<script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>

</html>