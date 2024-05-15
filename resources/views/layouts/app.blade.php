<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Scripts -->
<!-- Styles -->
<meta content="" name="keywords">
<meta content="" name="description">
<!-- Favicon -->
<link href="{{ asset('frontendAssets/img/favicon.ico') }}" rel="icon">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<!-- Libraries Stylesheet -->

<link href="{{ asset('frontendAssets/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontendAssets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontendAssets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('frontendAssets/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Template Stylesheet -->
<link href="{{ asset('frontendAssets/css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-xxl bg-white p-0">

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
<span class="sr-only">Loading...</span>
</div>
</div>
<!-- Spinner End -->
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">


<!--navbar header start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
<a href="{{url('/')}}" class="navbar-brand p-0"><img src="{{asset('frontendAssets/img/logo.png')}}" alt="Logo" width="90px" height="100px" style='margin-left:-20px;'></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="fa fa-bars"></span></button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<div class="navbar-nav ms-auto py-0 pe-4">
<a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
<a href="{{url('buy')}}" class="nav-item nav-link">Buy</a>
<a href="{{url('sell')}}" class="nav-item nav-link">Sell</a>
<a href="{{url('rent')}}" class="nav-item nav-link">Rent</a>
<a href="{{url('invest')}}" class="nav-item nav-link">Invest</a>
<a href="{{url('auction')}}" class="nav-item nav-link">Auction</a>
<a href="{{url('properties')}}" class="nav-item nav-link">Property</a> 
<a href="{{url('sell')}}" class="nav-item nav-link">Add property</a> 
<a href="{{url('blog')}}" class="nav-item nav-link"> News & Blogs</a>
<a href="{{url('about')}}" class="nav-item nav-link">About</a>
<a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
</div>
@guest
@if (Route::has('login'))
<a href="{{ route('login') }}" class="btn btn-danger py-2 px-4">Sign in</a>
@endif

@if (Route::has('register'))
<a href="{{ route('register') }}" class="btn btn-danger py-2 px-4">Sign Up</a>
@endif

@else

<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }}
</a>

<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</div>
</li>
@endguest
</div>
</nav>


        <!--navbar header end-->
        <main class="py-4">
            @yield('content')
        </main>
    



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontendAssets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('frontendAssets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('frontendAssets/js/main.js') }}"></script>