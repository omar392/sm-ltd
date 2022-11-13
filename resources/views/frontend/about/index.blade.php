@extends('frontend.layouts.index')
@section('title', __('site.about-'))
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url('{{ asset('dashboard/' . $cover->image_about) }}')">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('site.about') }}</h2>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">
                            {{ __('site.home') }}
                        </a>
                    </li>
                    <li class="active">{{ __('site.about') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Us Area -->
    <section class="about-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/about2.png') }}" style="width: 636px;height: 517px;"
                            alt="Image">

                        <div class="experience">
                            <div class="">
                                <h2>15 Years Of Experience</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
    <!-- Start Pricing Area -->
    <section class="pricing-area pt-100 pb-70" style="background-color: #424345;border-top: 6px solid #e6554f">
        <div class="container">
            <div class="section-title">
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-pricing-box">
                        <h3></h3>
                        <h2> <sub></sub></h2>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                {!! $about->mission !!}
                            </li>
                        </ul>
                        <span class="quality">{{ __('site.message') }}</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-pricing-box">
                        <h3></h3>
                        <h2> <sub></sub></h2>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                {!! $about->vision !!}
                            </li>
                        </ul>
                        <span class="quality">{{ __('site.vision') }}</span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-pricing-box">
                        <h3></h3>
                        <h2> <sub></sub></h2>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                {!! $about->goals !!}
                            </li>
                        </ul>
                        <span class="quality">{{ __('site.goals') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->
    <!-- Start About Us Area -->
    <section class="about-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/doila.jpeg') }}"alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
@endsection
