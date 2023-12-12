<x-layouts.main>

    <x-page-header>
        {{__('Tour')}}
    </x-page-header>

    <section class="trending pt-6 pb-0 bg-lgrey overflow-hidden">

        <div class="container">
            <div class="single-content">
                <div id="highlight">
                    <div class="single-full-title border-b mb-2 pb-2">
                    </div>
                    <div class="description-images mb-4">
                        <div class="row">
                            <div class="col"><img src="{{asset('images/trending/trending1.jpg')}}" alt class="rounded">
                            </div>
                            <div class="col"><img src="{{asset('images/trending/trending2.jpg')}}" alt class="rounded">
                            </div>
                            <div class="col"><img src="{{asset('images/trending/trending3.jpg')}}" alt class="rounded">
                            </div>
                        </div>
                    </div>
                    <div class="description mb-2">
                        <h4>{{__('Description')}}</h4>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                            graphic or web designs. </p>
                        <div class="tour-includes mb-4">
                            <table>
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i> 5 Days</td>
                                    <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : 26</td>
                                    <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Jan 18 - Dec 21</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : 10+</td>
                                    <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup : Airport
                                    </td>
                                    <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Langauge - English,
                                        Thai
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="description mb-2">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="desc-box bg-grey p-4 rounded">
                                        <h5 class="mb-2">Departure & Return Location</h5>
                                        <p class="mb-0">John F.K. International Airport(Google Map)</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="desc-box bg-grey p-4 rounded">
                                        <h5 class="mb-2">Bedroom</h5>
                                        <p class="mb-0">4 Bedrooms</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="desc-box bg-grey p-4 rounded">
                                        <h5 class="mb-2">Departure Time</h5>
                                        <p class="mb-0">3 Hours Before Flight Time</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="desc-box bg-grey p-4 rounded">
                                        <h5 class="mb-2">Departure Time</h5>
                                        <p class="mb-0">3 Hours Before Flight Time</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="desc-box bg-grey p-4 rounded">
                                        <h5 class="mb-2">Price Includes</h5>
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Air Fares
                                            </li>
                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> 3 Nights
                                                Hotel Accomodation
                                            </li>
                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Tour Guide
                                            </li>
                                            <li class="d-block"><i class="fa fa-check pink mr-1"></i> Entrance Fees</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="desc-box bg-grey p-4 rounded">
                                        <h5 class="mb-2">Departure & Return Location</h5>
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Guide Service
                                                Fee
                                            </li>
                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Driver
                                                Service Fee
                                            </li>
                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Any Private
                                                Expenses
                                            </li>
                                            <li class="d-block"><i class="fa fa-close pink mr-1"></i> Room Service Fees
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="discount-action pt-0"
             style="background-image:url({{ asset('images/section-bg1.png') }}); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h2>{{__('Explore Your Life,')}} <span
                                    class="theme1"> {{__('Travel Where You Want!')}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0"
             style="background-image: url({{ asset('images/shape6.png') }});"></div>
    </section>

    <section class="our-partner pb-6 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">{{__('Our Partners')}}</h4>
            </div>
            <div class="row align-items-center partner-in partner-slider">
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="{{asset('images/cl-1.png')}}" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="{{asset('images/cl-5.png')}}" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="{{asset('images/cl-2.png')}}" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="{{asset('images/cl-3.png')}}" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="{{asset('images/cl-4.png')}}" alt>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="{{asset('images/cl-5.png')}}" alt>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layouts.main>
