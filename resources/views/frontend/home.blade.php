@extends('frontend.layouts.index')
@section('content')



    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="banner-content">
                                <span class="top-title wow animate__animated animate__fadeInDown" data-wow-delay="1s">{{ $setting->name }}</span>
                                <h5 class="wow animate__animated animate__fadeInDown" data-wow-delay="1s" style="color: #fff;">{!! $about->about !!}</h5>

                                {{-- <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">Join the millions getting bargain deals on shipping cars, furniture, freight, and more</p> --}}

                                <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                                    <a href="{{ route('front.quote') }}" class="default-btn">
                                        <span>{{ __('site.quote') }}</span>
                                    </a>
                                    <a href="{{ route('front.contact') }}" class="default-btn active">
                                        <span>{{ __('site.contact') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="video-btn-2 wow animate__animated animate__zoomIn" data-wow-delay="1s">
                                <a href="{{ $setting->video }}" class="popup-youtube">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->


    <!-- Start About Us Area -->
    <section class="about-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/about2.png') }}" style="width: 636px;height: 517px;" alt="Image">

                        <div class="experience">
                            <div class="">
                                <h2>20 Years Of Experience</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">{{ __('site.about') }}</span>
                        <h2>{{ $setting->name }}</h2>
                        <p>{!! $about->about !!}</p>
                        <ul>
                            @foreach ($insurance as $item)
                            <li>
                                <i class="bx bx-check"></i>
                                {{ $item->name }}
                            </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('front.about') }}" class="default-btn">
                            <span>{{ __('site.about') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->





    <!-- Start services Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('site.services') }}</span>
                <p>{{ __('site.service1') }}</p>
            </div>

            <div class="row">
                <div class="blog-slider owl-carousel owl-theme">
                    @foreach ($services as $item)
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="{{route('front.services.details',[str_replace(' ', '-', $item->url)])}}">
                                <img src="{{ asset('dashboard/services/' . $item->image) }}" style="width: 402px;height: 292px;" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">

                            <h3>
                                <a href="{{route('front.services.details',[str_replace(' ', '-', $item->url)])}}">{{ $item->title }}</a>
                            </h3>

                            <p>{!! Str::limit($item->description, 170) !!} </p>

                            <a href="{{route('front.services.details',[str_replace(' ', '-', $item->url)])}}" class="default-btn">
                                <span> {{ __('site.more') }}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start About Us Area -->
    <section class="about-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/car_vector_2.png') }}"alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- Start blog Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>{{ __('site.news') }}</span>
            </div>

            <div class="row">
                <div class="blog-slider owl-carousel owl-theme">
                    @foreach ($news as $item)
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="{{route('front.news.details',[str_replace(' ', '-', $item->url)])}}">
                                <img src="{{ asset('dashboard/news/' . $item->image) }}" style="width: 402px;height: 292px;" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">

                            <h3>
                                <a href="{{route('front.services.details',[str_replace(' ', '-', $item->url)])}}">{{ $item->title }}</a>
                            </h3>

                            <p>{!! Str::limit($item->description, 170) !!} </p>

                            <a href="{{route('front.news.details',[str_replace(' ', '-', $item->url)])}}" class="default-btn">
                                <span> {{ __('site.more') }}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->



    <!-- Start Counter Area -->
    <section class="counter-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-package"></i>

                        <h2>
                            <span class="odometer" dir="ltr" data-count="{{ $counter->input0 }}">00</span>
                            <span class="target">+</span>
                        </h2>

                        <p>{{ __('site.operations') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-worldwide"></i>

                        <h2>
                            <span class="odometer" dir="ltr"  data-count="{{ $counter->input2 }}">00</span>
                            <span class="target">+</span>
                        </h2>

                        <p>{{ __('site.visits') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-user"></i>

                        <h2>
                            <span class="odometer" dir="ltr"  data-count="{{ $counter->input3 }}">00</span>
                            <span class="traget">+</span>
                        </h2>

                        <p>{{ __('site.years') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-location-1"></i>

                        <h2>
                            <span class="odometer" dir="ltr"  data-count="{{ $counter->input4 }}">00</span>
                            <span class="target">+</span>
                        </h2>

                        <p>{{ __('site.branches') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->


    <!-- Start Partner Area -->
    <div class="partner-area bg-color ptb-70">
        <div class="container">
            <div class="row">
                <div class="partner-slider owl-carousel owl-theme">

                    @foreach ($partners as $item)
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ asset('dashboard/partners/' . $item->image) }}" style="width: 135px;height: 50px;" alt="Image">
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->




@endsection
