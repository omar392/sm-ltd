
		<!-- Start Footer Area -->
		<footer class="footer-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<a href="{{ route('front.home') }}" class="logo">
								{{-- <img src="{{ asset('frontend/assets/img/logo-footer.png') }}" alt="Image"> --}}
								<img src="{{ asset('frontend/assets/img/logon.png') }}" alt="Image">
							</a>

							<p>{!! $about->about !!}</p>

							<ul class="social-icon">
								<li>
									<a href="{{ $setting->facebook }}">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="{{ $setting->instagram }}">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="{{ $setting->linkedin }}">
										<i class="bx bxl-linkedin-square"></i>
									</a>
								</li>
								<li>
									<a href="{{ $setting->twitter }}">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="{{ $setting->youtube }}">
										<i class="bx bxl-youtube"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>{{ __('site.services') }}</h3>

							<ul class="import-link">
                                @foreach ($services as $item)
				                <li>
									<a href="{{route('front.services.details',[str_replace(' ', '-', $item->url)])}}">{{ $item->title }}</a>
								</li>
                                @endforeach
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>{{ __('site.quick') }}</h3>

							<ul class="import-link">
								<li>
									<a href="{{ route('front.about') }}">{{ __('site.about') }}</a>
								</li>
								<li>
									<a href="team.html">{{ __('site.team') }}</a>
								</li>
								<li>
									<a href="{{ route('front.faqs') }}">{{ __('site.faq') }}</a>
								</li>
								<li>
									<a href="{{ route('front.blog') }}">{{ __('site.blog') }}</a>
								</li>
								<li>
									<a href="{{ route('front.quote') }}">{{ __('site.quote') }}</a>
								</li>
								<li>
									<a href="{{ route('front.quote') }}">{{ __('site.profile') }}</a>
								</li>

							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>{{ __('site.info') }}</h3>

							<ul class="address">
								<li class="location">
									<i class="bx bxs-location-plus"></i>
									{{ $setting->address }}
								</li>
								<li>
									<i class="bx bxs-envelope"></i>
									<a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
								</li>
								<li>
									<i class="bx bxs-phone-call"></i>
									<a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
									<a href="tel:{{ $setting->whatsapp }}">{{ $setting->whatsapp }}</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<p>
					Copyright <i class="bx bx-copyright"></i>{{ now()->year }}
					<a href="https://smilogistics.com" target="_blank">SMI Logistics</a>
				</p>
			</div>
		</div>
		<!-- End Copy Right Area -->
