        <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>{{ __('site.about') }}</h2>
                        <p>{!! $about->about !!}</p>
                    </div>
                </div>

                <div class="sidebar-instagram-feed">
                    <h2>{{ __('site.gallery') }}</h2>

                    <ul>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/1.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/2.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/3.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/4.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/5.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/6.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/7.jpg') }}" alt="image"></a></li>
                        <li><a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog-image/8.jpg') }}" alt="image"></a></li>
                    </ul>
                </div>

                <div class="sidebar-contact-area">
                    <div class="sidebar-contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                <span>OR</span>
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </h2>

                            <ul class="social">
                                <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn"><i class="flaticon-cross-out"></i></span>
            </div>
        </div>
        <!-- End Sidebar Modal -->
