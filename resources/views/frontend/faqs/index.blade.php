@extends('frontend.layouts.index')
@section('title', __('site.faqs-'))
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area bg-11">
			<div class="container">
				<div class="page-title-content">
					<h2>{{ __('site.faqs') }}</h2>
					<ul>
						<li>
							<a href="{{ route('front.home') }}">
								{{ __('site.home') }}
							</a>
						</li>
						<li class="active">{{ __('site.faqs') }}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start FAQ Area -->
		<section class="faq-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span class="pumpkin-color">{{ __('site.faqs') }}</span>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="faq-accordion">
							<ul class="accordion">
                                @foreach ($faqs as $item)
								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)">
										<span>{{ $loop->iteration }}</span>
										{{ $item->ask }}
									</a>
									<p class="accordion-content">{!! $item->answer !!}</p>
								</li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FAQ Area -->
@endsection
