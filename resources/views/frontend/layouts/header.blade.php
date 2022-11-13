  <!-- Start Preloader Area -->
  <div class="preloader">
      <div class="lds-ripple">
          <div></div>
          <div></div>
      </div>
  </div>
  <!-- End Preloader Area -->
  <!-- Start Header Area -->
  <header class="header-area">
      <!-- Start Top Header -->
      <div class="top-header">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-8 col-md-10">
                      <ul class="header-left-content">
                          <li>
                              <i class="bx bx-home"></i>
                              {{ $setting->address }}
                          </li>
                          <li>
                              <i class="bx bx-phone-call"></i>
                              <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                          </li>
                          <li>
                              <i class="bx bx-phone-call"></i>
                              <a href="tel:{{ $setting->whatsapp }}">{{ $setting->whatsapp }}</a>
                          </li>
                          <li>
                              <i class="bx bx-envelope"></i>
                              <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                          </li>
                      </ul>
                  </div>

                  <div class="col-lg-4 col-md-2">
                      <div class="header-right-content">
                          <ul class="flag-area">
                              <li class="flag-item-top">
                                  @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                      @if ($localeCode == LaravelLocalization::getCurrentLocale())
                                      @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                                          <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                              class="flag-bar">
                                              @if (app()->getLocale() == 'ar')
                                                  <img src="{{ asset('frontend/assets/img/flag/usa.png') }}"
                                                      alt="Flag">
                                                  <span style="color: #FFF">Eng</span>
                                              @else
                                                  <img src="{{ asset('frontend/assets/img/flag/KSA.jpg') }}"
                                                      alt="Flag">
                                                  <span style="color: #FFF">العربية</span>
                                              @endif
                                          </a>
                                      @endif
                                  @endforeach
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- Start Top Header -->
          <div class="bottom">
              @if (app()->getLocale() == 'ar')
                  <marquee class="html-marquee" direction="right" behavior="scroll" scrollamount="8">
                      <p>
                          @foreach ($fasts as $item)
                              {{ $item->name }} **
                          @endforeach
                      </p>
                  </marquee>
              @endif
              @if (app()->getLocale() == 'en')
                  <marquee class="html-marquee" direction="left" behavior="scroll" scrollamount="8">
                      <p>
                          @foreach ($fasts as $item)
                              {{ $item->name }} **
                          @endforeach
                      </p>
                  </marquee>
              @endif
          </div>
      <!-- Start Navbar Area -->
      <div class="navbar-area">
          <div class="mobile-nav">
              <div class="container">
                  <div class="mobile-menu">
                      <div class="logo">
                          <a href="{{ route('front.home') }}">
                              <img src="{{ asset('frontend/assets/img/logon.png') }}"style="width: 140px;height: 85px;"
                                  alt="logo">
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="desktop-nav">
              <div class="container">
                  <nav class="navbar navbar-expand-md navbar-light">
                      <a class="navbar-brand" href="{{ route('front.home') }}">
                          <img src="{{ asset('frontend/assets/img/logon.png') }}" style="width: 140px;height: 85px;"
                              alt="logo">
                      </a>

                      <div class="collapse navbar-collapse mean-menu">
                          <ul class="navbar-nav m-auto">
                              <li class="nav-item">
                                  <a href="{{ route('front.home') }}"
                                      class="nav-link {{ URL::route('front.home') === URL::current() ? 'active' : '' }}">
                                      <b>{{ __('site.home') }}</b>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('front.about') }}"
                                      class="nav-link {{ URL::route('front.about') === URL::current() ? 'active' : '' }}">
                                      <b>{{ __('site.about') }}</b>
                                  </a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('front.services') }}"
                                      class="nav-link {{ URL::route('front.services') === URL::current() ? 'active' : '' }}">
                                      <b>{{ __('site.services') }}</b>
                                      <i class="bx bx-chevron-down"></i>
                                  </a>

                                  <ul class="dropdown-menu">
                                      @foreach ($services as $item)
                                          <li class="nav-item">
                                              <a href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}"
                                                  class="nav-link"><b>{{ $item->title }}</b></a>
                                          </li>
                                      @endforeach
                                  </ul>
                              </li>

                              <li class="nav-item">
                                  <a href="#"
                                      class="nav-link {{ URL::route('front.news') === URL::current() ? 'active' : '' }} {{ URL::route('front.blog') === URL::current() ? 'active' : '' }} {{ URL::route('front.faqs') === URL::current() ? 'active' : '' }}">
                                      <b>{{ __('site.pages') }}</b>
                                      <i class="bx bx-chevron-down"></i>
                                  </a>

                                  <ul class="dropdown-menu">
                                      <li class="nav-item">
                                          <b><a href="{{ route('front.news') }}"
                                                  class="nav-link {{ URL::route('front.news') === URL::current() ? 'active' : '' }}"><b>{{ __('site.news') }}</b></a></b>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('front.blog') }}"
                                              class="nav-link {{ URL::route('front.blog') === URL::current() ? 'active' : '' }}"><b>{{ __('site.blog') }}</b></a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('front.faqs') }}"
                                              class="nav-link {{ URL::route('front.faqs') === URL::current() ? 'active' : '' }}"><b>{{ __('site.faqs') }}</b></a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                      {{ __('site.sign') }}
                                      <i class="bx bx-chevron-down"></i>
                                  </a>

                                  <ul class="dropdown-menu">
                                      <li class="nav-item">
                                          <a href="https://erp.smilogistics.com" target="_blank"
                                              class="nav-link"><b>{{ __('site.employees') }}</b></a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="https://portal.erp.smilogistics.com" target="_blank"
                                              class="nav-link"><b>{{ __('site.customers') }}</b></a>
                                      </li>
                                  </ul>
                              </li>


                              <li class="nav-item">
                                  <a href="{{ route('front.contact') }}"
                                      class="nav-link {{ URL::route('front.contact') === URL::current() ? 'active' : '' }}">{{ __('site.contact') }}</a>
                              </li>
                          </ul>

                          <div class="others-option">
                              <div class="get-quote">
                                  <a href="{{ route('front.quote') }}" class="default-btn">
                                      <span>{{ __('site.quote') }}</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </nav>
              </div>
          </div>

          <div class="others-option-for-responsive">
              <div class="container">
                  <div class="dot-menu">
                      <div class="inner">
                          <div class="circle circle-one"></div>
                          <div class="circle circle-two"></div>
                          <div class="circle circle-three"></div>
                      </div>
                  </div>

                  <div class="container">
                      <div class="option-inner">
                          <div class="others-option justify-content-center d-flex align-items-center">
                              <div class="get-quote">
                                  <a href="{{ route('front.quote') }}" class="default-btn">
                                      <span>{{ __('site.quote') }}</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Navbar Area -->
  </header>
  <!-- End Header Area -->
