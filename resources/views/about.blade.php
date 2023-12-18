<x-layouts.main>

    <x-page-header>
        {{__('About us')}}
    </x-page-header>


    <section class="about-us pt-6"
             style="background-image:url({{asset('images/background_pattern.png')}}); background-position:bottom right;">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
                            <h2 class="border-b mb-2 pb-1">Explore All Tour of the world with us.</h2>
                            <p class="border-b mb-2 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="icon-location-pin theme"></i> Tour Guide</li>
                                    <li><i class="icon-briefcase theme"></i> Friendly Price</li>
                                    <li><i class="icon-folder theme"></i> Reliable Tour Package</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <img src="{{asset('images/travel.png')}}" alt>{__{('')}}
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="counter-main w-75 float-start z-index3 position-relative">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">20</h2>
                                                <span class="m-0">Years Experiences</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">530</h2>
                                                <span class="m-0">Tour Packages</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">850</h2>
                                                <span class="m-0">Happy Customers</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">320</h2>
                                                <span class="m-0">Award Winning</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>


    <section class="about-us pb-0">
        <div class="section-shape section-shape1" style="background-image: url(images/shape8.png);"></div>
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
            </div>

            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-flag theme"></i>
                                    </div>
                                    <h4><a href="about.html">Tell Us What You want To Do</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-location-pin theme"></i>
                                    </div>
                                    <h4><a href="about.html">Share Your Travel Locations</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-directions theme"></i>
                                    </div>
                                    <h4><a href="about.html">Share Your Travel Preference</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-compass theme"></i>
                                    </div>
                                    <h4><a href="about.html">Here 100% Trusted Tour Agency</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="our-partner pt-0 pb-6">
        <div class="container">
            <h4 class="mb-1 theme1 text-uppercase">{{__('Our Partners')}}</h4>
            <div class="partners_inner">
                <ul>
                    @foreach($partners as $partner)
                        <li><img src="{{asset($partner->getFirstMediaUrl('partner'))}}" alt></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</x-layouts.main>
