@extends('frontend.layouts.index')
@section('title', __('site.news-'))
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url('{{  asset('dashboard/' . $cover->image_blog) }}')">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('site.news') }}</h2>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">
                            {{ __('site.home') }}
                        </a>
                    </li>
                    <li class="active">{{ __('site.news') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Services Area -->
    <section class="services-area services-area-two bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ __('site.news') }}</span>
            </div>

            <div class="row">
                @foreach ($news as $item)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-services-box">
                            <a href="services-details.html" class="services-img">
                                <img src="{{ asset('dashboard/news/' . $item->image) }}" alt="Image">
                            </a>

                            <div class="services-content">
                                <h3>
                                    <a
                                        href="{{ route('front.news.details', [str_replace(' ', '-', $item->url)]) }}">{{ $item->title }}</a>
                                </h3>

                                <p>{!! Str::limit($item->description, 170) !!} </p>

                                <a href="{{ route('front.news.details', [str_replace(' ', '-', $item->url)]) }}"
                                    class="default-btn">
                                    <span> {{ __('site.more') }}</span>
                                </a>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>

                    <a href="#" class="next page-numbers">
                        <i class="bx bx-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->
@endsection
