@extends('frontend.layouts.index')
@section('title', __('site.offer-'))
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url('{{ asset('dashboard/' . $cover->image_contact) }}')">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ __('site.quote') }}</h2>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">
                            {{ __('site.home') }}
                        </a>
                    </li>
                    <li class="active">{{ __('site.quote') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

        <!-- Start Contact Area -->
    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('site.quote') }}</h2>
            </div>

            <form id="offerInfo" action="{{ route('email.offer') }}" method="POST" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="{{ __('site.name') }}">
                            <span class="text-danger error-text name_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="{{ __('site.email') }}">
                            <span class="text-danger error-text email_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="{{ __('site.phone') }}">
                            <span class="text-danger error-text phone_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="type" id="type" class="form-control"
                                placeholder="{{ __('site.type') }}">
                            <span class="text-danger error-text type_err"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="company_name" id="company_name" class="form-control"
                                placeholder="{{ __('site.company_name') }}">
                            <span class="text-danger error-text company_name_err"></span>
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

@endsection
