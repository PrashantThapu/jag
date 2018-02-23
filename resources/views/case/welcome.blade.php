<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CASE</title>
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{asset('assets/img/favicon-icon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- jQuery min js -->
    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
</head>

<body>
<!-- Preloader -->
<div class="site-preloader-wrap">
    <div class="cssload-loader"></div>
</div>
<!-- End Preloader -->

<!-- Start Main Menu Area -->
<div class="main-menu-area" data-spy="affix" data-offset-top="55">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/img/.png')}}" style="height: 80px" alt="Logo"></a>
                </div>
            </div>

            <div class="col-md-9">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="main-menu">
                            <ul class="nav navbar-nav navbar-right">

                                <li class="dropdown active">
                                <li><a href="{{url('/')}}">Home</a></li>
                                </li>

                                <li><a href="#group">Group</a></li>
                                <li><a href="#news">News</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#partner">Partners</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Main Menu Area -->

<!-- SearchBox Modal -->
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
        <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
    </form>
</div>
<!-- End SearchBox Modal -->

<!-- Start Homepage Slider -->
<div class="homepage-slides-wrapper">
    <!-- Slider main container -->
    <div class="swiper-container swiper1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide slide-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    {{--<h1>With over 25 years of experience in auto services work</h1>--}}
                                    {{--<p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>--}}
                                    {{--<a class="btn theme-btn" href="appointment.html">make an appointment</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    {{--<h1>With over 25 years of experience in auto services work</h1>--}}
                                    {{--<p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>--}}
                                    {{--<a class="btn theme-btn" href="appointment.html">make an appointment</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide-bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    {{--<h1>With over 25 years of experience in auto services work</h1>--}}
                                    {{--<p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>--}}
                                    {{--<a class="btn theme-btn" href="appointment.html">make an appointment</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</div>
<!-- End Homepage Slider -->


<!-- Start Services Area -->
<div class="content-block-area gray-bg" id="group">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <h2><span>Our featured</span> GROUP OF COMPANIES</h2>
                    <div class="car-icon">Jagadamba Group of Services&nbsp;&nbsp;&nbsp;<img src="assets/img/cars.png" alt="car"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator-line" ></div>

    <div class="container" >
        <div class="row">
            <div class="col-md-4">
                <div class="services-item">
                    <div class="box">
                        <a href="{{url('/')}}">
                            <img src="{{asset('images/tvs.jpg')}}" alt="Image">
                            <h3>TVS</h3>
                            <div class="box-content">
                                <h3 class="title">TVS</h3>
                                <span class="post">Top leading Motor-cycle brand in Nepal.</span>
                                <ul class="icon">
                                    <li style="color: white">Visit the site</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="services-item">
                    <div class="box">
                        <a href="{{url('/')}}">

                            <img src="{{asset('images/case.jpg')}}" alt="Image">
                            <h3>CASE</h3>
                            <div class="box-content">
                                <h3 class="title">CASE</h3>
                                <span class="post"></span>
                                <ul class="icon">
                                    <li style="color: white">Visit the site</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-item">
                    <div class="box">
                        <a href="{{url('/')}}">
                            <img src="{{asset('images/tvs.jpg')}}" alt="Image">
                            <h3>Jagadamba Credits</h3>
                            <div class="box-content">
                                <h3 class="title">Jagadamba Credits</h3>
                                <span class="post">Helping you turn your future dreams into today's realities.</span>
                                <ul class="icon">
                                    <li style="color: white">Visit the site</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Area -->

<!-- Start Why Choose Us Area -->
{{--<div class="content-block-area">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 col-md-offset-3">--}}
{{--<div class="section-title text-center">--}}
{{--<h2><span>Why choose</span> us</h2>--}}
{{--<div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="boxed-item">--}}
{{--<span class="sirial-number">01</span>--}}
{{--<span class="single-boxed"><i class="flaticon-crane"></i></span>--}}
{{--<h3>Car Inspection</h3>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content.</p>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="boxed-item">--}}
{{--<span class="sirial-number">02</span>--}}
{{--<span class="single-boxed"><i class="flaticon-wheel-1"></i></span>--}}
{{--<h3>Tires Services</h3>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content.</p>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="boxed-item">--}}
{{--<span class="sirial-number">03</span>--}}
{{--<span class="single-boxed"><i class="flaticon-speedometer"></i></span>--}}
{{--<h3>Schedule Service</h3>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content.</p>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="boxed-item">--}}
{{--<span class="sirial-number">04</span>--}}
{{--<span class="single-boxed"><i class="flaticon-car-radio"></i></span>--}}
{{--<h3>Radiator Repair</h3>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-md-12 text-center">--}}
{{--<a href="about-us.html" class="btn theme-btn">about us</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- End Why Choose Us Area -->

<!-- Start Count-Down Area -->
{{--<div class="count-down-area count-bg jarallax">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="count-down-boxed text-center">--}}
{{--<span class="count-icon"><i class="ion-ios-people-outline"></i> <span class="count-number counter">12,500</span></span>--}}
{{--<h3 class="count-info">Happy Clients</h3>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="count-down-boxed text-center">--}}
{{--<span class="count-icon"><i class="ion-ios-partlysunny-outline"></i> <span class="count-number counter">17,500</span></span>--}}
{{--<h3 class="count-info">Completed Projects</h3>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="count-down-boxed text-center">--}}
{{--<span class="count-icon"><i class="ion-ios-paperplane-outline"></i> <span class="count-number counter">15,500</span></span>--}}
{{--<h3 class="count-info">WINNING AWARD</h3>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-3">--}}
{{--<div class="count-down-boxed text-center">--}}
{{--<span class="count-icon"><i class="ion-ios-thunderstorm-outline"></i> <span class="count-number counter">14,500</span></span>--}}
{{--<h3 class="count-info">Hours Worked</h3>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- End Count-Down Area -->--}}

<!-- Start Auto Body Services Area -->
{{--<div class="content-block-area">--}}
{{--<div class="container-fluid">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<div class="body-service-boxed-item auto-body-bg"></div>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 col-lg-8">--}}
{{--<div class="section-title text-center">--}}
{{--<h2><span>Auto Body</span> services</h2>--}}
{{--<div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-sm-6 col-md-6 col-lg-4">--}}
{{--<div class="services-list">--}}
{{--<ul>--}}
{{--<li>Aluminum Repair</li>--}}
{{--<li>Paintless Dent Repair</li>--}}
{{--<li>Auto Glass Repair</li>--}}
{{--<li>Auto Painting</li>--}}
{{--<li>Windshield Repairs</li>--}}
{{--<li>Auto Paint Repair</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-6 col-lg-4">--}}
{{--<div class="services-list">--}}
{{--<ul>--}}
{{--<li>Fender Repair</li>--}}
{{--<li>Hail Damage Repair</li>--}}
{{--<li>Towing Service</li>--}}
{{--<li>Wheel Alignment</li>--}}
{{--<li>Wheel Rim Repair</li>--}}
{{--<li>Collision Repair</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-8 text-center">--}}
{{--<a href="#" class="btn theme-btn">request appointment</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- End Auto Body Services Area -->

<!-- Start Our testimonials Area -->
<div class="content-block-area gray-bg" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="section-title text-right">
                    <h3>our clients</h3>
                    <h2><span>CLIENTS THAT TRUST</span> OUR SERVICES</h2>
                </div>
                <div class="testimonials-car-boxed wow fadeInLeft">
                    <img src="{{asset('images/testimonials.jpg')}}" alt="Image">
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="testimonial-item">
                    <div class="testimonial-single-item">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to  making it look like readable English.</p>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>

                    <div class="quotation-profile">
                        <img src="" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="testimonial-item">
                    <div class="testimonial-single-item">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to  making it look like readable English.</p>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="quotation-profile">
                        <img src="assets/img/31m.jpg" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 col-md-offset-4 text-center">
                <a href="#" class="btn theme-btn">see testimonials</a>
            </div>
        </div>
    </div>
</div>
<!-- End Our testimonials Area -->

<!-- Start Appointment Area -->
{{--<div class="content-block-area">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<div class="apointment-preview-boxed man-image-bg wow fadeInUp"></div>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<div class="section-title text-center">--}}
{{--<h2><span>request an</span> appointment</h2>--}}
{{--<div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>--}}
{{--<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. .</p>--}}
{{--</div>--}}
{{--<form class="appointment-form" action="index.html">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<label>Vehicle Information</label>--}}
{{--<select id="Year">--}}
{{--<option value="hide">-- Year, Model --</option>--}}
{{--<option value="2010">2010</option>--}}
{{--<option value="2011">2011</option>--}}
{{--<option value="2012">2012</option>--}}
{{--<option value="2013">2013</option>--}}
{{--<option value="2014">2014</option>--}}
{{--<option value="2015">2015</option>--}}
{{--<option value="2016">2016</option>--}}
{{--<option value="2017">2017</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<label>Select Services</label>--}}
{{--<select id="selectServices">--}}
{{--<option value="hide">-- Select Service --</option>--}}
{{--<option value="1">Aluminum Repair</option>--}}
{{--<option value="2">Fender Repair</option>--}}
{{--<option value="3">Auto Painting</option>--}}
{{--<option value="4">Oil Change</option>--}}
{{--<option value="4">Collision Repair</option>--}}
{{--<option value="4">Break Repair</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<label>Appointment Date</label>--}}
{{--<input type="text" id="datepicker" name="appointmentDate" placeholder="Appointment Date" required>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<label>Appointment Time</label>--}}
{{--<select id="Time">--}}
{{--<option value="hide">-- Choose --</option>--}}
{{--<option value="2010">09:00AM - 10:00AM</option>--}}
{{--<option value="2011">10:00AM - 11:00AM</option>--}}
{{--<option value="2012">11:00AM - 12:00PM</option>--}}
{{--<option value="2013">12:00PM - 01:00PM</option>--}}
{{--<option value="2014">01:00PM - 02:00PM</option>--}}
{{--<option value="2015">02:00PM - 03:00PM</option>--}}
{{--<option value="2015">03:00PM - 04:00PM</option>--}}
{{--<option value="2015">04:00PM - 05:00PM</option>--}}
{{--<option value="2015">05:00PM - 06:00PM</option>--}}
{{--<option value="2015">06:00PM - 07:00PM</option>--}}
{{--<option value="2015">07:00PM - 08:00PM</option>--}}
{{--<option value="2015">08:00PM - 09:00PM</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<p>Contact Details</p>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<input type="text" name="yourName" placeholder="Your Name" required>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<input type="email" name="yourEmail" placeholder="Your Email" required>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<input type="text" name="yourPhone" placeholder="Your Phone" required>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<textarea name="yourMessage" id="yourMessage" placeholder="Your Message" required></textarea>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 text-center">--}}
{{--<button class="btn theme-btn" type="submit">Submit Now</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- End Appointment Area -->

{{--<!-- Start News Area -->--}}
<div class="content-block-area gray-bg" id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <h2><span>recent</span> news</h2>
                    <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                    {{--<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="single-blog-item">
                    <a href="#" class="zoomin"><img src="{{asset('images/tvsnews.jpg')}}" alt="Image Description"></a>
                    <div class="blog-item-info">
                        <span class="blog-date">Date</span> <div class="separator">|</div>
                        <a class="blog-tags red" href="#"><i class="fa fa-tag"></i> TVS</a>
                        <a href="#"><h3>News Title</h3></a>
                        <p>...</p>
                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>--}}

                        <div class="row">
                            <div class="col-xs-7">
                                <div class="blog-item-profile">
                                    <img src="assets/img/testimonials-1.jpg" alt="Image description"> <a href="#">author</a>
                                </div>
                            </div>
                            <div class="col-xs-5 text-right">
                                <div class="blog-item-c-v-info">
                                    <span><a href="#"><i class="fa fa-comments-o"> 25</i></a></span>
                                    <span><a href="#"><i class="fa fa-eye"> 520</i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="single-blog-item">
                    <a href="#" class="zoomin"><img src="{{asset('images/casenews.jpg')}}" alt="Image Description"></a>
                    <div class="blog-item-info">
                        <span class="blog-date">Date</span> <div class="separator">|</div>
                        <a class="blog-tags green" href="#"><i class="fa fa-tag"></i> CASE</a>
                        <a href="#"><h3>News Title</h3></a>
                        <p>...</p>
                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>--}}

                        <div class="row">
                            <div class="col-xs-7">
                                <div class="blog-item-profile">
                                    <img src="assets/img/44w.jpg" alt="Image description"> <a href="#">author</a>
                                </div>
                            </div>
                            <div class="col-xs-5 text-right">
                                <div class="blog-item-c-v-info">
                                    <span><a href="#"><i class="fa fa-comments-o"> 25</i></a></span>
                                    <span><a href="#"><i class="fa fa-eye"> 520</i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="single-blog-item">
                    <a href="#" class="zoomin"><img src="{{asset('images/tvsnews.jpg')}}" alt="Image Description"></a>
                    <div class="blog-item-info">
                        <span class="blog-date">Date</span> <div class="separator">|</div>
                        <a class="blog-tags blue" href="#"><i class="fa fa-tag"></i> Jagadamba Motors</a>
                        <a href="#"><h3>News Title</h3></a>
                        <p>...</p>
                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>--}}

                        <div class="row">
                            <div class="col-xs-7">
                                <div class="blog-item-profile">
                                    <img src="assets/img/10m.jpg" alt="Image description"> <a href="#">author</a>
                                </div>
                            </div>
                            <div class="col-xs-5 text-right">
                                <div class="blog-item-c-v-info" >
                                    <span><a href="#"><i class="fa fa-comments-o"> 25</i></a></span>
                                    <span><a href="#"><i class="fa fa-eye"> 520</i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End News Area -->

{{--<!-- Start Our Parners Area -->--}}
<div class="content-block-area"  id="partner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <h2><span>Our</span> Partners</h2>
                    <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                    {{--<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>--}}
                </div>
            </div>
        </div>
        <div class="partner-slides">
            <div class="single-partner-slide">
                <a class="partners-logo" href="#"><img src="assets/img/partner-1.png" alt="Image Description"></a>
            </div>
            <div class="single-partner-slide">
                <a class="partners-logo" href="#"><img src="assets/img/partner-2.png" alt="Image Description"></a>
            </div>
            <div class="single-partner-slide">
                <a class="partners-logo" href="#"><img src="assets/img/partner-3.png" alt="Image Description"></a>
            </div>
            <div class="single-partner-slide">
                <a class="partners-logo" href="#"><img src="assets/img/partner-4.png" alt="Image Description"></a>
            </div>
            <div class="single-partner-slide">
                <a class="partners-logo" href="#"><img src="assets/img/partner-5.png" alt="Image Description"></a>
            </div>
            <div class="single-partner-slide">
                <a class="partners-logo" href="#"><img src="assets/img/partner-6.png" alt="Image Description"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Our Parners Area -->

<!-- Footer Area -->
<footer class="site-footer">
    <!-- Footer Top Area -->
    <div class="footer-top-area">
        <div class="container">
            {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}
            {{--<div class="footer-top-info">--}}
            {{--<span class="footer-icons"><i class="fa fa-map-o"></i></span> <p>1828 Johns Drive Glenview, IL 60025</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4">--}}
            {{--<div class="footer-top-info">--}}
            {{--<span class="footer-icons"><i class="flaticon-crane"></i></span> <p>Working Days Monday to Friday</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4">--}}
            {{--<div class="footer-top-info">--}}
            {{--<span class="footer-icons"><i class="fa fa-headphones"></i></span> <p>Give us a free call (224) 228-8475</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="hr-line"></div>
            <div class="row" id="contact">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-wid">
                        <a href="index.html" class="footer-logo"><img src="{{asset('assets/img/jagadambalogo.png')}}" alt="logo"></a>
                        <p>"Jagadamba Motors is .. "</p>
                        {{--<a href="#" class="link-color">Read More About Us <i class="fa  fa-long-arrow-right"></i></a>--}}
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wid footer-menu">
                                <h3 class="footer-wid-title">Quick Links</h3>
                                <ul>
                                    <li><a href="index.html"><i class="fa  fa-angle-right"></i> home</a></li>
                                    <li><a href="about-us.html"><i class="fa  fa-angle-right"></i> group</a></li>
                                    <li><a href="projects.html"><i class="fa  fa-angle-right"></i> news</a></li>
                                    <li><a href="industries.html"><i class="fa  fa-angle-right"></i> testimonials</a></li>
                                    <li><a href="gallery.html"><i class="fa  fa-angle-right"></i> partner</a></li>
                                    <li><a href="contact-us.html"><i class="fa  fa-angle-right"></i> contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wid footer-menu">
                                <h3 class="footer-wid-title">Working Hours</h3>
                                <ul>
                                    <li><i class="fa  fa-angle-right"></i> Monday:7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Tuesday:7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Wednesday:7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Thursday:7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Friday:7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Saturday:7:30am - 3:00pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Sunday: Closed</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wid">
                                <h3 class="footer-wid-title">Contact Us</h3>
                                <p></p>
                                <div class="address-info">
                                    <span><i class="fa  fa-phone"></i>&nbsp;&nbsp;(+977) ..</span><br>
                                    <span><i class="fa  fa-envelope"></i>&nbsp;&nbsp; info@jagadambasupport.com </span>
                                </div>
                                <div class="subscribe">
                                    <form action="index.html">
                                        <input type="text" placeholder="Type your email" required>
                                        <button>Subscribe now <i class="fa  fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="social-icos">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Footer Top -->

    <!-- Footer Bottom Area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    &copy; Copyright <script type="text/javascript">
                        var d=new Date();
                        document.write(d.getFullYear());
                    </script> All Rights Reserved.
                </div>
                <div class="col-md-6 col-sm-7 text-right">
                    <a href="#">Terms & Condition</a> <span class="seprator">|</span> <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div> <!-- End Footer Bottom Area -->
</footer> <!-- End Footer Area -->

<!-- Back Top top -->
<a href="#content" class="back-to-top">Top</a>
<!-- End Back Top top -->

<!-- Bootstrap JS file -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Owl-Carousel JS file -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JS file -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Mixitup JS file -->
<script src="{{asset('assets/js/mixitup.min.js')}}"></script>
<!-- Swiper JS file -->
<script src="{{asset('assets/js/swiper.jquery.min.js')}}"></script>
<!-- Datepicker JS file -->
<script src="{{asset('assets/js/datepicker.js')}}"></script>
<!-- WOW JS file -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Isotop JS JS file -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- Waypoints JS file -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- Counter JS file -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- RipplesJS -->
<script src="{{asset('assets/js/jquery.ripples-min.js')}}"></script>
<!-- YTPlayer JS -->
<script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- Jarallax JS -->
<script src="{{asset('assets/js/jarallax.min.js')}}"></script>
<!-- Parsley JS -->
<script src="{{asset('assets/js/parsley.min.js')}}"></script>
<!-- jQuery Google Map JS file -->
<script src="{{asset('assets/js/jquery.googlemap.js')}}"></script>
<!-- Google Map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
<!-- Custom JS file -->
<script src="{{asset('assets/js/active.js')}}"></script>
</body>
</html>