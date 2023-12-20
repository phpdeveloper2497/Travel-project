<x-layouts.main>
    <div class="banner trending overflow-hidden">
        <div class="banner-main">
            <div class="row banner-slider">
                @foreach($banner_tours as $banner)
                    <div class="col-lg-4 p-0">
                        <div class="trend-item1 box-shadow bg-white text-center">
                            <div class="trend-image position-relative">
                                <img src="{{asset($banner->getFirstMediaUrl('tour_main'))}}" alt="image" class>
                                <div class="trend-content1 px-4  top-50 bottom-inherit translatey-50">
                                    <h5 class="theme1 mb-0"><i class="flaticon-location-pin"></i> {{$banner->place->title}}</h5>
                                    <h2 class="mb-1 white"><a href="{{ route('tours.show', ['tour' => $banner->id]) }}" class="white">{{ $banner->title }}</a></h2>
                                    <div class="entry-meta text-center">
                                        <div class="entry-author mb-1">
                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> {{ '$'.$banner->price }}</span>
                                        </div>
                                        <div class="entry-author">
                                            <i class="icon-calendar white"></i>
                                            <span class="fw-bold white"> {{ $banner->days }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="form-main">
        <div class="section-shape section-shape1 top-0"
             style="background-image: url({{asset("images/shape8.png")}});"></div>
        <div class="container">
            <div class="row align-items-center form-content rounded position-relative ms-5 me-5">
                <div class="col-lg-2 p-0">
                    <h4 class="form-title1 text-center p-4 py-5 white bg-theme mb-0 rounded-start d-lg-flex align-items-center">
                        <i class="icon-location-pin fs-1 me-1"></i> {{__('Find Your Holidays')}}</h4>
                </div>
                <div class="col-lg-10 px-4">
                    <div class="form-content-in d-lg-flex align-items-center">
                        <div class="form-group me-2">
                            <div class="input-box">
                                <select class="niceSelect">
                                    <option value="1">Destination</option>
                                    <option value="2">Argentina</option>
                                    <option value="3">Belgium</option>
                                    <option value="4">Canada</option>
                                    <option value="5">Denmark</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group me-2">
                            <div class="input-box">
                                <input type="date" name="date">
                            </div>
                        </div>
                        <div class="form-group me-2">
                            <div class="input-box">
                                <select class="niceSelect">
                                    <option value="1">Travel Type</option>
                                    <option value="2">City Tour</option>
                                    <option value="3">Family Tour</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group me-2">
                            <div class="input-box">
                                <select class="niceSelect">
                                    <option value="1">Tour Duration</option>
                                    <option value="2">5 days</option>
                                    <option value="3">7 Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <a href="{{ route('tours.index') }}" class="nir-btn w-100"><i class="fa fa-search mr-2"></i>{{__('Search Now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-us pb-6"
             style="background-image:url({{asset('images/shape4.png')}}); background-position:center;">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h2 class="mb-1"><span class="theme">{{__('Find Travel Perfection')}}</span></h2>
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
                                    <h4><a href="#">{{__("Tell Us What You want To Do")}}</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-location-pin theme"></i>
                                    </div>
                                    <h4><a href="#">{{__("Share Your Travel Locations")}}</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-directions theme"></i>
                                    </div>
                                    <h4><a href="#">{{__("Share Your Travel Preference")}}</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-compass theme"></i>
                                    </div>
                                    <h4><a href="#"> {{__("Here 100% Trusted Tour Agency")}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="white-overlay"></div>
    </section>


    <section class="trending pb-0 pt-0"
             style="background-image:url({{asset('images/shape-1.png')}}); background-position:center;">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">{{__('Top Destinations')}}</h4>
                <h2 class="mb-1">{{__('Explore')}} <span class="theme">{{__('Top Destinations')}}</span></h2>

            </div>
            <div class="row align-items-center">

                @foreach($places as $place)
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                        <div class="trend-item1">
                            <div class="trend-image position-relative rounded">
                                <img src="{{ asset($place->getFirstMediaUrl('place')) }}" alt="image">
                                <div
                                    class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                    <div class="trend-content-title">
{{--                                        <h5 class="mb-0"><a href="#" class="theme1">Italy</a>--}}
{{--                                        </h5>--}}
                                        <h3 class="mb-0 white">{{ $place->title}}</h3>
                                    </div>
                                    @if ($place->tours->count() > 0)
                                        <span class="white bg-theme p-1 px-2 rounded">{{ $place->tours->count()}} {{__("Tours")}}</span>
                                    @endif
                                </div>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="trending pb-0">
        <div class="container">
            <div class="section-title text-center w-75 mx-auto mb-6">
                <h4 class="mb-1 theme1">{{__('Top Pick')}}</h4>
                <h2 class="mb-1">{{__('Best')}} <span class="theme">{{__('Tour Packages')}}</span></h2>

            </div>
            <div class="trend-box">
                <div class="row">
                    @foreach($top_tours as $top)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item rounded box-shadow">
                                <div class="trend-image position-relative">
                                    <img src="{{asset($top->getFirstMediaUrl('tour_main'))}}" alt="image" class>
                                    <div class="color-overlay"></div>
                                </div>
                                <div class="trend-content p-4 pt-5 position-relative">
                                    <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                        <div class="entry-author">
                                            <i class="icon-calendar"></i>
                                            <span class="fw-bold">{{ $top->days }}</span>
                                        </div>
                                    </div>
                                    <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> {{ $top->place->title }}</h5>
                                    <h3 class="mb-1"><a href="#">{{ $top->title }}</a></h3>
                                    <p class=" border-b pb-2 mb-2">
                                        {{ $top->short_description }}
                                    </p>
                                    <div class="entry-meta">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0"><span
                                                    class="theme fw-bold fs-5"> {{ "$".$top->price }}/{{__("Per person")}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('tours.index') }}" class="nir-btn">{{__('View All Packages')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <section class="trending pb-0" style="background-image: url({{asset('images/shape2.png')}});">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title mb-6 w-75 mx-auto text-center">--}}
{{--                <h4 class="mb-1 theme1">{{__('Top Deals')}}</h4>--}}
{{--                <h2 class="mb-1">{{__('The Last')}} <span class="theme">{{__('Minute Deals')}}</span></h2>--}}
{{--            </div>--}}
{{--            <div class="trend-box">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-7">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item rounded box-shadow">--}}
{{--                                    <div class="trend-image position-relative">--}}
{{--                                        <img src="{{asset('images/trending/trending1.jpg')}}" alt="image" class>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content p-4 pt-5 position-relative bg-white">--}}
{{--                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">--}}
{{--                                            <div class="entry-author">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span class="fw-bold"> 4 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Spain</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Barcelona city beach</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p class=" border-b pb-2 mb-2">--}}
{{--                                            {{__("A great travel package to the seaside and highlands")}}--}}
{{--                                        </p>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $220.00</span>--}}
{{--                                                    {{__("Person")}}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item rounded box-shadow">--}}
{{--                                    <div class="trend-image position-relative">--}}
{{--                                        <img src="{{asset('images/trending/trending2.jpg')}}" alt="image" class>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content p-4 pt-5 position-relative bg-white">--}}
{{--                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">--}}
{{--                                            <div class="entry-author">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span class="fw-bold"> 7 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Indonesia</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Bali Province</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p class=" border-b pb-2 mb-2">--}}
{{--                                            {{__("A great travel package to the seaside and highlands")}}--}}
{{--                                        </p>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $210.00</span>--}}
{{--                                                    {{__("Person")}}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item rounded box-shadow">--}}
{{--                                    <div class="trend-image position-relative">--}}
{{--                                        <img src="{{asset('images/trending/trending3.jpg')}}" alt="image" class>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content p-4 pt-5 position-relative bg-white">--}}
{{--                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">--}}
{{--                                            <div class="entry-author">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span class="fw-bold"> 3 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Russia</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Red City Land</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p class=" border-b pb-2 mb-2">--}}
{{--                                            {{__("A great travel package to the seaside and highlands")}}--}}
{{--                                        </p>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $120.00</span>--}}
{{--                                                    {{__("Person")}}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item rounded box-shadow">--}}
{{--                                    <div class="trend-image position-relative">--}}
{{--                                        <img src="{{asset('images/trending/trending4.jpg')}}" alt="image" class>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content p-4 pt-5 position-relative bg-white">--}}
{{--                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">--}}
{{--                                            <div class="entry-author">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span class="fw-bold"> 5 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Bangladesh</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Cox's bazar Beach</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p class=" border-b pb-2 mb-2">--}}
{{--                                            {{__("A great travel package to the seaside and highlands")}}--}}
{{--                                        </p>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $100.00</span>--}}
{{--                                                    {{__("Person")}}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-5 mb-4">--}}
{{--                        <div class="trend-item1 rounded box-shadow mb-4">--}}
{{--                            <div class="trend-image position-relative">--}}
{{--                                <img src="{{asset('images/trending/trendingb-2.jpg')}}" alt="image" class>--}}
{{--                                <div class="trend-content1 p-4">--}}
{{--                                    <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Norway</h5>--}}
{{--                                    <h3 class="mb-1 white"><a href="#" class="white">Norway Lake</a>--}}
{{--                                    </h3>--}}
{{--                                    <div class="entry-meta d-flex align-items-center justify-content-between">--}}
{{--                                        <div class="entry-author d-flex align-items-center">--}}
{{--                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $180.00</span> |--}}
{{--                                                Per {{__("Person")}}</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-author">--}}
{{--                                            <i class="icon-calendar white"></i>--}}
{{--                                            <span class="fw-bold white"> 6 {{__("Days Tours")}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="overlay"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="trend-item1 rounded box-shadow mb-4">--}}
{{--                            <div class="trend-image position-relative">--}}
{{--                                <img src="{{asset('images/trending/trending-large.jpg')}}" alt="image" class>--}}
{{--                                <div class="trend-content1 p-4">--}}
{{--                                    <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Egpyt</h5>--}}
{{--                                    <h3 class="mb-1 white"><a href="#" class="white">Pyramid Land</a>--}}
{{--                                    </h3>--}}
{{--                                    <div class="entry-meta d-flex align-items-center justify-content-between">--}}
{{--                                        <div class="entry-author d-flex align-items-center">--}}
{{--                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $180.00</span> |--}}
{{--                                                Per {{__("Person")}}</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-author">--}}
{{--                                            <i class="icon-calendar white"></i>--}}
{{--                                            <span class="fw-bold white"> 6 {{__("Days Tours")}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="overlay"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="trend-item1 rounded box-shadow">--}}
{{--                            <div class="trend-image position-relative">--}}
{{--                                <img src="{{asset('images/trending/trendingb-1.jpg')}}" alt="image" class>--}}
{{--                                <div class="trend-content1 p-4">--}}
{{--                                    <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Usa</h5>--}}
{{--                                    <h3 class="mb-1 white"><a href="#" class="white">--}}
{{--                                            New York City--}}
{{--                                        </a></h3>--}}
{{--                                    <div class="entry-meta d-flex align-items-center justify-content-between">--}}
{{--                                        <div class="entry-author d-flex align-items-center">--}}
{{--                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $140.00</span> |--}}
{{--                                                {{__("Person")}}</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-author">--}}
{{--                                            <i class="icon-calendar white"></i>--}}
{{--                                            <span class="fw-bold white"> 3 {{__("Days Tours")}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="overlay"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="about-us pt-6"
             style="background-image:url({{asset('images/background_pattern.png')}}); background-position:bottom right;">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block mb-0">{{__('Get To Know Us')}}</h4>
                            <h2 class="border-b mb-2 pb-1">{{__("Explore All Tour of the world with us.")}}</h2>
                            <p class="border-b mb-2 pb-2">
                                {{__("There are many factors to keep in mind when evaluating your trip,including what to do before leaving and your budget.To help you get started, we have put together a guide on how to travel the world,including everything from how to start looking into your trip to how to save money once you are abroad.") }}
                            </p>
                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="icon-location-pin theme"></i> {{__("Tour Guide")}}</li>
                                    <li><i class="icon-briefcase theme"></i> {{__("Friendly Price")}}</li>
                                    <li><i class="icon-folder theme"></i> {{__("Reliable Tour Package")}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <img src="{{asset('images/travel.png')}}" alt>
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
                                                <span class="m-0">{{__("Years Experiences")}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">530</h2>
                                                <span class="m-0">{{__("Tour Packages")}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">850</h2>
                                                <span class="m-0">{{__("Happy Customers")}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">320</h2>
                                                <span class="m-0">{{__("Award Winning")}}</span>
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


{{--    <section class="trending pb-0 pt-0" style="background-color:#fdfdfd;">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title mb-6 w-75 mx-auto text-center">--}}
{{--                <h4 class="mb-1 theme1">{{__('Top Offers')}}</h4>--}}
{{--                <h2 class="mb-1">{{__('Special')}} <span--}}
{{--                        class="theme">{{__('Offers')}} & {{__('Discount')}} </span> {{__('Packages')}}</h2>--}}

{{--            </div>--}}
{{--            <div class="trend-box">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="col-lg-5 col-md-4 ps-0">--}}
{{--                                    <div class="trend-item2">--}}
{{--                                        <a href="#"--}}
{{--                                           style="background-image: url({{asset('images/trending/trending1.jpg')}});"></a>--}}
{{--                                        <div class="ribbon ribbon-top-left"><span class="fw-bold">20% OFF</span></div>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-7 col-md-8">--}}
{{--                                    <div class="trend-content py-3 position-relative">--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Piazza Castello</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p>{{__("A great travel package to the seaside and highlands")}}</p>--}}
{{--                                        <div class="trend-meta border-b pb-2 mb-2">--}}
{{--                                            <div class="entry-author theme">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span> 9 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> son--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="col-lg-5 col-md-4 ps-0">--}}
{{--                                    <div class="trend-item2">--}}
{{--                                        <a href="#"--}}
{{--                                           style="background-image: url({{asset('images/trending/trending2.jpg')}});"></a>--}}
{{--                                        <div class="ribbon ribbon-top-left"><span class="fw-bold">10% OFF</span></div>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-7 col-md-8">--}}
{{--                                    <div class="trend-content py-3 position-relative">--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Santorini, Oia</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p>{{__("A great travel package to the seaside and highlands")}}</p>--}}
{{--                                        <div class="trend-meta border-b pb-2 mb-2">--}}
{{--                                            <div class="entry-author theme">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span> 7 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $210.00</span> son--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="col-lg-5 col-md-4 ps-0">--}}
{{--                                    <div class="trend-item2">--}}
{{--                                        <a href="#"--}}
{{--                                           style="background-image: url({{asset('images/trending/trending3.jpg')}});"></a>--}}
{{--                                        <div class="ribbon ribbon-top-left"><span class="fw-bold">30% OFF</span></div>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-7 col-md-8">--}}
{{--                                    <div class="trend-content py-3 position-relative">--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Norway</h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">Norway Lake</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p>{{__("A great travel package to the seaside and highlands")}}</p>--}}
{{--                                        <div class="trend-meta border-b pb-2 mb-2">--}}
{{--                                            <div class="entry-author theme">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span> 6 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $185.00</span>--}}
{{--                                                    {{__("Person")}}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="trend-full bg-white rounded box-shadow overflow-hidden">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="col-lg-5 col-md-4 ps-0">--}}
{{--                                    <div class="trend-item2">--}}
{{--                                        <a href="#"--}}
{{--                                           style="background-image: url({{asset('images/trending/trending4.jpg')}});"></a>--}}
{{--                                        <div class="ribbon ribbon-top-left"><span class="fw-bold">15% OFF</span></div>--}}
{{--                                        <div class="color-overlay"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-7 col-md-8">--}}
{{--                                    <div class="trend-content py-3 position-relative">--}}
{{--                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> {{__("Maldives")}}--}}
{{--                                        </h5>--}}
{{--                                        <h3 class="mb-1"><a href="#">{{__("Hurawalhi Island")}}</a></h3>--}}
{{--                                        <div class="rating-main d-flex align-items-center pb-2">--}}
{{--                                        </div>--}}
{{--                                        <p>{{__("A great travel package to the seaside and highlands")}}</p>--}}
{{--                                        <div class="trend-meta border-b pb-2 mb-2">--}}
{{--                                            <div class="entry-author theme">--}}
{{--                                                <i class="icon-calendar"></i>--}}
{{--                                                <span> 4 {{__("Days Tours")}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="entry-meta">--}}
{{--                                            <div class="entry-author d-flex align-items-center">--}}
{{--                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> |--}}
{{--                                                    {{__("Person")}}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="discount-action pt-4"
             style="background-image:url({{asset('images/section-bg1.png')}}); background-position:center;">
        <div class="section-shape section-shape1 top-inherit bottom-0"
             style="background-image: url({{asset('images/shape8.png')}});"></div>
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h2 class="text-uppercase"><a href="#">{{__('Explore Your Life,')}} <span
                                        class="theme1"> {{__('Travel Where You Want!')}}</span></a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>

    <section class="trending recent-articles pb-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1 text-uppercase">{{__('Our Blogs Offers')}}</h4>
                <h2 class="mb-1 text-uppercase"><span class="theme">{{__('Articles')}} & {{__('Posts')}}</span></h2>
            </div>
            <div class="recent-articles-inner">
                <div class="row">
                    @foreach( $posts as $post)
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                                <div class="trend-image">
                                    <img src={{ $post->getFirstMediaUrl('post') }} alt="image">
                                </div>
                                <div class="trend-content-main p-4 pb-2">
                                    <div class="trend-content">
                                        <h4><a href="{{ route('posts.show', ['post' => $post]) }}">
                                                {{ $post->title }}
                                            </a></h4>
                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-button d-flex align-items-center mb-2">
                                                <a href="{{route('posts.show',['post' => $post])}}" class="nir-btn">
                                                    {{__("Read More")}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @if($partners && $partners->count() > 0)
        <section class="our-partner pt-0 pb-6">
            <div class="container">
                <div class="section-title mb-6 w-75 mx-auto text-center">
                    <h4 class="mb-1 theme1 text-uppercase">{{__('Our Partners')}}</h4>
                    <h2 class="mb-1 text-uppercase">{{__('Our Awesome')}} <span class="theme">{{__('partners')}}</span>
                    </h2>
                </div>
                <div class="row align-items-center partner-in partner-slider">
                    @foreach($partners as $partner)
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="{{asset($partner->getFirstMediaUrl('partner'))}}" alt="{{ $partner->title }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


</x-layouts.main>
