    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @if (app()->getLocale() == 'ar')
		<!-- Bootstrap Rtl Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.rtl.min.css') }}">
        @endif
        @if (app()->getLocale() == 'en')
		<!-- Bootstrap Rtl Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        @endif
		<!-- Owl Theme Default Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
		<!-- Owl Carousel Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
		<!-- Animate Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
		<!-- Boxicons Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}">
		<!-- Magnific Popup Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
		<!-- Flaticon CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
		<!-- Dark CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/dark.css') }}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        @if (app()->getLocale() == 'ar')
		<!-- Rtl CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/rtl.css') }}">
        @endif
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/cropped-fav.png') }}">
		<!-- Title -->
    <title>{{ $setting->name }} @yield('title')</title>
          @toastr_css
          <style>






/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   {
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%);
 }
 100% {
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%);
 }
}
.html-marquee {
.overflow: hidden;
 position: relative;
 background: #424345;
 color: #000;
 font-weight:bold;
 font-size:16px;
 border: 1px solid #ccc;
}
          </style>
    </head>
