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
                                            <p class="m-0">{{$settings->address}}</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="contactform-error-msg"></div>
                                        <form method="post" action="#" name="contactform2" id="contactform2">
                                            <div class="form-group mb-2">
                                                <input type="text" name="first_name" class="form-control" id="fullname"
                                                       placeholder="{{__('First Name')}}">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="last_name" class="form-control" id="llastname"
                                                       placeholder="{{__('Last Name')}}">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" name="email" class="form-control" id="email"
                                                       placeholder="{{__('Email')}}">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="phone" class="form-control" id="phnumber"
                                                       placeholder="{{__('Phone')}}">
                                            </div>
                                            <div class="textarea mb-2">
                                                <textarea name="comments" placeholder="{{__('Enter a message')}}"></textarea>
                                            </div>
                                            <div class="comment-btn text-center">
                                                <input type="submit" class="nir-btn" id="submit2" value="{{__('Send Message')}}">
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
