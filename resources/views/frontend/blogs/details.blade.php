@extends('frontend.layouts.index')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area" style="background-image: url('{{  asset('dashboard/' . $cover->image_blog) }}')">
			<div class="container">
				<div class="page-title-content">
					<h2 style="color: #fff">{{ $blog->title }}</h2>
					<ul>
						<li>
							<a href="{{ route('front.home') }}" style="color: #fff">
								{{ __('site.home') }}
							</a>
						</li>
						<li class="active" style="color: #fff">{{ $blog->title }}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Services Details Area -->
		<section class="services-details-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="details-img">
							<img src="{{ asset('dashboard/blogs/' . $blog->image) }}" alt="Image">
						</div>

						<div class="content-one">
							<h3>{{ $blog->title }}</h3>
                            {!! $blog->description !!}
						</div>


					</div>

					<div class="col-lg-4">
						<div class="widget-sidebar">

							<div class="sidebar-widget categories">
								<h3>{{ __('site.services') }}</h3>

								<ul>

                                @foreach ($blogs as $item)
									<li>
										<a href="{{ route('front.blogs.details', [str_replace(' ', '-', $item->url)]) }}">{{ $item->title }}</a>
									</li>
                                @endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services Details Area -->
@endsection
