<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">


        @include('frontend.layouts.head')

    <body>
        @include('frontend.layouts.header')
        @yield('content')
    @include('frontend.layouts.footer')

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>
    <!-- End Go Top Area -->

    @yield('scripts')
    @include('frontend.layouts.script')
    </body>
</html>
