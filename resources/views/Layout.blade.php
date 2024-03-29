<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Pizza Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ ('asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ ('asset/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ ('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ ('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ ('asset/css/magnific-popup.css') }}">
    
    <link rel="stylesheet" href="{{ ('asset/css/aos.css') }}">
    
    <link rel="stylesheet" href="{{ ('asset/css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ ('asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ ('asset/css/jquery.timepicker.css') }}">
    
    <link rel="stylesheet" href="{{ ('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ ('asset/css/icomoon.css') }}">
    
    <link rel="stylesheet" href="{{('asset/css/style.css') }}">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light fixed-top" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicious</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link list-item" href="/List">List</a></li>
                <li class="nav-item"><a class="nav-link add-item" href="/add">Add</a></li>
                <li class="nav-item"><a class="nav-link search-item" href="/Search">Search</a></li>
                {{-- <li class="nav-item"><a class="nav-link search-item" href="/logout">Logout</a> --}}
            </ul>
      
              @if(Session::get('users'))
                  <a class="nav-link active" href="#"> Welcome | {{Session::get('users')}}</a>
              @else
                  <a class="nav-link active" href="/login">Login</a>
                  <a class="nav-link active" href="/register">Register</a>
                  {{-- <a class="nav-link active" href="/logout">Logout</a> --}}

                  

              @endif
          </div>
      </div>
  </nav>
  
  
  
    <!-- END nav -->

             
            
       
     
    <div class="container">
        @yield('content') 
    </div>

  
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(asset/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(asset/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ ('asset/js/jquery.min.js') }}"></script>
  <script src="{{ ('asset/js/jquery.easing.1.3.js') }}"></script>  
  <script src="{{ ('    asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ ('    asset/js/popper.min.js') }}"></script>
  <script src="{{ ('    asset/js/bootstrap.min.js') }}"></script>
  <script src="{{ ('    asset/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ ('    asset/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ ('    asset/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ ('    asset/js/owl.carousel.min.js') }}"></script>
  <script src="{{ ('    asset/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ ('    asset/js/aos.js') }}"></script>
  <script src="{{ ('    asset/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ ('    asset/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ ('    asset/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ ('    asset/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ ('asset/js/google-map.js') }}"></script>
  <script src="{{ ('asset/js/main.js') }}"></script>
    
  </body>
</html>




<script>
  // Initialize the map
  function initMap() {
      // Replace with the latitude and longitude of your desired location
      var myLatLng = { lat: 37.7749, lng: -122.4194 };

      // Create a map centered at the specified location
      var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 12
      });

      // Add a marker at the specified location
      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Your Location'
      });
  }
</script>