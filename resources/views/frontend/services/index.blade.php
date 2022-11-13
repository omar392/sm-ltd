@extends('frontend.layouts.index')
@section('title', __('site.services-'))
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area" style="background-image: url('{{  asset('dashboard/' . $cover->image_service) }}')">
			<div class="container">
				<div class="page-title-content">
					<h2>{{ __('site.services') }}</h2>
					<ul>
						<li>
							<a href="{{ route('front.home') }}">
								{{ __('site.home') }}
							</a>
						</li>
						<li class="active">{{ __('site.services') }}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Services Area -->
		<section class="services-area services-area-two bg-color pt-100 pb-70">
			<div class="container">
            <div class="section-title">
                <span>{{ __('site.services') }}</span>
                <p>{{ __('site.service1') }}</p>
            </div>

            	<div class="row">
                    @foreach ($services as $item)
					<div class="col-lg-4 col-sm-6">
						<div class="single-services-box">
							<a href="services-details.html" class="services-img">
								<img src="{{ asset('dashboard/services/' . $item->image) }}" alt="Image">
							</a>

							<div class="services-content">
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

		</section>
		<!-- End Services Area -->
@endsection
