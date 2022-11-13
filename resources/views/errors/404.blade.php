@extends('frontend.layouts.index')
@section('content')
		<!-- Start 404 Error -->
		<div class="error-area ptb-100">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="error-content">
						<h1><span class="a">4</span> <span class="red">0</span> <span class="b">4</span> </h1>
						<h3>{{ __('site.404') }}</h3>
						<p>{{ __('site.not') }}</p>

						<a href="{{ route('front.home') }}" class="default-btn two">
							<span>{{ __('site.home') }}</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End 404 Error -->
@endsection
