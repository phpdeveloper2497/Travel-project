<x-layouts.main>

    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Tour </h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour Lists Fullwidth</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="list-results d-flex align-items-center justify-content-between">
                <div class="list-results-sort">
                    <p class="m-0">Showing 1-5 of 80 results</p>
                </div>
                <div class="click-menu d-flex align-items-center justify-content-between">
                    <div class="change-list f-active me-2"><a href="{{ route('tours.show') }}"><i class="fa fa-bars rounded"></i></a></div>
                    <div class="change-grid me-2"><a href="{{ route('tours.show') }}"><i class="fa fa-th rounded"></i></a></div>
                    <div class="sortby d-flex align-items-center justify-content-between ml-2">
                        <select class="niceSelect">
                            <option value="1">Sort By</option>
                            <option value="2">Average rating</option>
                            <option value="3">Price: low to high</option>
                            <option value="4">Price: high to low</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="destination-list">
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="tour-single.html" style="background-image: url(images/destination/destination17.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">Leeds Castle, Cliffs Of Dover</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Croatia</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$125</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="{{ route('tours.show') }}" style="background-image: url(images/destination/destination15.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">Adriatic Adventure–Zagreb To Athens</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Greece</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$160</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="{{ route('tours.show') }}" style="background-image: url(images/destination/destination11.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">The Spanish Riviera Cost Bay</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Spain</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$160</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="{{ route('tours.show') }}" style="background-image: url(images/destination/destination12.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">Adriatic Adventure–Zagreb To Athens</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Greece</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$160</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="{{ route('tours.show') }}" style="background-image: url(images/destination/destination13.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">Highlights scenery of Vietnam</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Vietnam</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$160</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="{{ route('tours.show') }}" style="background-image: url(images/destination/destination10.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">The Spanish Riviera Cost Bay</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Spain</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$160</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="trend-item2 rounded">
                                <a href="{{ route('tours.show') }}" style="background-image: url(images/destination/destination14.jpg);"></a>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="trend-content position-relative text-md-start text-center">
                                <small>6+ Hours | Full Day Tours</small>
                                <h3 class="mb-1"><a href="{{ route('tours.show') }}">Empire Prestige Causeway Bay</a></h3>
                                <h6 class="theme mb-0"><i class="icon-location-pin"></i> Egypt</h6>
                                <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="trend-content text-md-end text-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <small>200 Reviews</small>
                                <div class="trend-price my-2">
                                    <span class="mb-0">From</span>
                                    <h3 class="mb-0">$160</h3>
                                    <small>Per Adult</small>
                                </div>
                                <a href="{{ route('tours.show') }}" class="nir-btn">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <section class="discount-action pt-0" style="background-image:url(images/section-bg1.png); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where Your're Going</h5>
                            <h2><a href="#">Explore Your Life, <span class="theme1"> Travel Where You Want!</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                    <i class="fa fa-play bg-blue"></i>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0" style="background-image: url(images/shape6.png);"></div>
    </section>


    <section class="our-partner pb-6 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">Our Partners</h4>
                <h2 class="mb-1">Our Awesome <span class="theme">partners</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center partner-in partner-slider">
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-1.png" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-5.png" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-2.png" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-3.png" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-4.png" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-5.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.main>
