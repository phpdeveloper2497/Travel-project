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
                            <div class="col">
                                <img src="{{ $tour->getFirstMediaUrl('tour_main') }}" alt="image" class="mb-3 rounded">
{{--                                <img src="{{asset('images/trending/trending1.jpg')}}" alt class="rounded">--}}
                            </div>
                        </div>
                    </div>
                    <div class="description mb-2">
                        <h4>{{__('Description')}}</h4>
                        <p>{!! $tour->description_en !!}  </p>
                        <div class="tour-includes mb-4">
                            <table>
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i>{{$tour->days}} Days</td>
                                    <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : 26</td>
                                    <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> {{$tour->from_to}}</td>
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
{{--                        <div class="description mb-2">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 col-md-6 mb-2">--}}
{{--                                    <div class="desc-box bg-grey p-4 rounded">--}}
{{--                                        <h5 class="mb-2">Departure & Return Location</h5>--}}
{{--                                        <p class="mb-0">John F.K. International Airport(Google Map)</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 mb-2">--}}
{{--                                    <div class="desc-box bg-grey p-4 rounded">--}}
{{--                                        <h5 class="mb-2">Bedroom</h5>--}}
{{--                                        <p class="mb-0">4 Bedrooms</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 mb-2">--}}
{{--                                    <div class="desc-box bg-grey p-4 rounded">--}}
{{--                                        <h5 class="mb-2">Departure Time</h5>--}}
{{--                                        <p class="mb-0">3 Hours Before Flight Time</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 mb-2">--}}
{{--                                    <div class="desc-box bg-grey p-4 rounded">--}}
{{--                                        <h5 class="mb-2">Departure Time</h5>--}}
{{--                                        <p class="mb-0">3 Hours Before Flight Time</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 mb-2">--}}
{{--                                    <div class="desc-box bg-grey p-4 rounded">--}}
{{--                                        <h5 class="mb-2">Price Includes</h5>--}}
{{--                                        <ul>--}}
{{--                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Air Fares--}}
{{--                                            </li>--}}
{{--                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> 3 Nights--}}
{{--                                                Hotel Accomodation--}}
{{--                                            </li>--}}
{{--                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Tour Guide--}}
{{--                                            </li>--}}
{{--                                            <li class="d-block"><i class="fa fa-check pink mr-1"></i> Entrance Fees</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 mb-2">--}}
{{--                                    <div class="desc-box bg-grey p-4 rounded">--}}
{{--                                        <h5 class="mb-2">Departure & Return Location</h5>--}}
{{--                                        <ul>--}}
{{--                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Guide Service--}}
{{--                                                Fee--}}
{{--                                            </li>--}}
{{--                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Driver--}}
{{--                                                Service Fee--}}
{{--                                            </li>--}}
{{--                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Any Private--}}
{{--                                                Expenses--}}
{{--                                            </li>--}}
{{--                                            <li class="d-block"><i class="fa fa-close pink mr-1"></i> Room Service Fees--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    BOOKING FORM--}}

    <section class="contact-main pt-6 pb-60">
        <div class="container">
            <div class="contact-info-main mt-0">
                <div class="row">
                    <h1>{{__('Book now')}}</h1>
                    <div class="col-lg-6">

                        <form action="{{ route('tours.store') }}" method="post" >
                            @csrf
                            <div class="form-group mb-2">
                                <input type="hidden" name="tour_id" id="tour_id" value="{{$tour->id}}" >
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                       placeholder="{{__('First Name')}}">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                       placeholder="{{__('Last Name')}}">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="phone" id="phone" class="form-control"
                                       placeholder="{{__('Phone')}}">
                            </div>
                            <div class="textarea mb-2">
                                <textarea name="comment" id="phcommentone" placeholder="{{__('Enter a message')}}"></textarea>
                            </div>
                            <div class="comment-btn text-center">
                                <input class="nir-btn" type="submit" value="{{__('Send')}}">
{{--                                <button class="nir-btn" type="submit">{{__('Send')}}</button>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
