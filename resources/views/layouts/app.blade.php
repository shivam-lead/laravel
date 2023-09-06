<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{asset('assets/css/favicon.png')}}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://fonts.cdnfonts.com/css/nunito-sans" rel="stylesheet">
    	<!-- CSS -->

    @yield('header_extras')
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer-new')
    <!-- All Scripts -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/circularProgressBar.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
   
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=648d51ba91ef70001294d2c3&product=inline-share-buttons&source=platform" async="async"></script>
    <script>
        function checkScrollPosition() {
             
            //  alert(footerPosition);
    if (window.scrollY >= 300) {
       $('#sidebar').addClass('sticky');
      
    } else {
        $('#sidebar').removeClass('sticky');
       
       
    }
}
window.addEventListener("scroll", checkScrollPosition);
    </script>
    
    
</body>

</html>
