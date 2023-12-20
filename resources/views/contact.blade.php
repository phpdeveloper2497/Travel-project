<x-layouts.main>
    <x-page-header>
        {{__('Contact')}}
    </x-page-header>


    <section class="contact-main pt-6 pb-60">
        <div class="container">
            <div class="contact-info-main mt-0">
                <div class="row">
                    <div class="col-lg-10 col-offset-lg-1 mx-auto">
                        <div class="contact-info bg-white">
                            <div class="contact-info-title text-center mb-4 px-5">
                                <h3 class="mb-1">{{__('INFORMATION ABOUT US')}}</h3>
                            </div>
                            <div class="contact-info-content row mb-1">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-map-marker-alt theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>{{__('Office Location')}}</h3>
                                            <p class="m-0">{{ $settings->address}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-phone theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>{{__('Phone Number')}}</h3>
                                            <p class="m-0">{{ $settings->phone1 }}</p>
                                            <p class="m-0">{{ $settings->phone2 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-envelope theme"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <h3>{{__('Email Address')}}</h3>
                                            <p class="m-0"><a
                                                    href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="3851565e57784a5d59544b50515d545c165b5755">{{ $settings->email1 }}</a> {{--[email&#160;protected]--}}
                                            </p>
                                            <p class="m-0"><a
                                                    href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="3c5459504c7c4e595d504f5455595058125f5351">{{ $settings->email2 }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="contact-form1" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="map rounded overflow-hidden rounded mb-md-4">
                                            <div style="width: 100%">
                                                <iframe height="500"
                                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
{{--                                           {{ $settings->location}}--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        @if (Session::has('successMsg'))
                                            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                                <div id="liveToast" class="toast fade show" role="alert"
                                                     aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-header">
                                                        <div class="rounded me-2 bg-primary" style="width: 16px; height: 16px"></div>
                                                        <strong class="me-auto">{{__('Message')}}</strong>
                                                    </div>
                                                    <div class="toast-body">
                                                        {{ Session::get('successMsg') }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div id="contactform-error-msg"></div>
                                        <form method="post" action="{{ route('create.ticket') }}">
                                            @csrf()
                                            <div class="form-group mb-2">
                                                <input type="text" name="first_name"
                                                       class="form-control @error('first_name') is-invalid @enderror"
                                                       placeholder="{{__('First Name')}}"
                                                       value="{{ old('first_name') }}">
                                                @error('first_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="last_name"
                                                       class="form-control @error('last_name') is-invalid @enderror"
                                                       placeholder="{{__('Last Name')}}" value="{{ old('last_name') }}">
                                                @error('last_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" name="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       placeholder="{{__('Email')}}" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="phone"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       placeholder="{{__('Phone')}}" value="{{ old('phone') }}">
                                                @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="textarea mb-2">
                                                <textarea class="@error('message') is-invalid @enderror" name="message"
                                                          placeholder="{{__('Enter a message')}}">{{ old('message') }}</textarea>
                                                @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="comment-btn text-center">
                                                <input type="submit" class="nir-btn" id="submit2"
                                                       value="{{__('Send Message')}}">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
