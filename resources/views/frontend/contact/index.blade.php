@extends('frontend.layouts.index')
@section('title', __('site.contact-'))
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url('{{ asset('dashboard/' . $cover->image_contact) }}')">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('site.contact') }}</h2>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">
                            {{ __('site.home') }}
                        </a>
                    </li>
                    <li class="active">{{ __('site.contact') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-envelope"></i>
                        <h3>{{ __('site.email') }}</h3>
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-phone-call"></i>
                        <h3>{{ __('site.contact') }}</h3>
                        <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        <a href="tel:{{ $setting->whatsapp }}">{{ $setting->whatsapp }}</a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <a href="">{{ $setting->address }}</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('site.let') }}</h2>
            </div>

            <form id="contactInfo" action="{{ route('contact.save') }}" method="POST" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="{{ __('site.name') }}">
                            <span class="text-danger error-text name_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="{{ __('site.email') }}">
                            <span class="text-danger error-text email_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="{{ __('site.phone') }}">
                            <span class="text-danger error-text phone_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control"
                                placeholder="{{ __('site.subject') }}">
                            <span class="text-danger error-text subject_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                placeholder="{{ __('site.message') }}"></textarea>
                            <span class="text-danger error-text message_err"></span>
                        </div>
                    </div>


                    <div class="col-12">
                        <button type="submit" class="default-btn btn-two btn-submit">
                            <span>{{ __('site.send') }}</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area -->
    <div class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2984.1935827502225!2d-88.54223508432493!3d41.586694691578195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880ebf5c2925d401%3A0x82b679cd7569709f!2s9170%20Millbrook%20Rd%2C%20Newark%2C%20IL%2060541%2C%20USA!5e0!3m2!1sen!2sbd!4v1601810027362!5m2!1sen!2sbd"></iframe>
    </div>
    <!-- End Map Area -->
@endsection

