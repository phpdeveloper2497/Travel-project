<x-layouts.main>

    <x-page-header>
        {{ $tour->title }}
    </x-page-header>

    <section class="trending pt-6 pb-0 bg-lgrey overflow-hidden">
        <div class="tabs-navbar1 bg-white sticky1 bordernone py-3">
            <ul id="tabs" class="nav nav-tabs bordernone mb-0 overflow-visible">
                <li class="active"><a data-toggle="tab" href="#info">{{__('Info')}}</a></li>
                <li><a data-toggle="tab" href="#description">{{__('Description')}}</a></li>
                <li><a data-toggle="tab" href="#bookform">{{__('Book now')}}</a></li>
                <li><a data-toggle="tab" href="#gallery">{{__('Gallery')}}</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="single-content">
                <div id="highlight">
                    <div class="single-full-title border-b mb-2 pb-2">
                    </div>
                    <div class="description-images mb-4">
                        <div class="row">
                            <div class="col">
                                <img src="{{ $tour->getFirstMediaUrl('tour_main') }}" alt="image" class="mb-3 rounded">
                            </div>
                        </div>
                    </div>
                    <div class="description mb-2" id="info">
                        <div class="tour-includes mb-4">
                            <table>
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i>{{$tour->days}}</td>
                                    <td><i class="fa fa-cloud pink mr-1" aria-hidden="true"></i> {{ $tour->season }}
                                    </td>
                                    <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> {{$tour->from_to}}
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dollar pink mr-1" aria-hidden="true"></i> {{__('Price')}}
                                        : {{ "$".$tour->price }}/{{__('Per person')}}</td>
                                    <td><i class="fa fa-map-signs pink mr-1"
                                           aria-hidden="true"></i> {{ $tour->place->title }}</td>
                                    <td><i class="fa fa-map-marked pink mr-1" aria-hidden="true"></i> {{ $tour->area }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>{{__('Description')}}</h4>
                        <p id="description">{!! $tour->description !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    BOOKING FORM--}}

    <section class="contact-main pt-6 pb-60" id="bookform">
        <div class="container">
            <div class="row">
                <h5>
                    {{__("Book travel far in advance")}}
                </h5>
                <p>
                    {{__("After all that preparation, you’re ready to book your trip around the world, which will likely be a round-the-world plane ticket, a journey by sea, or a combination of flights and ground transportation.")}}
                </p>
                <div class="col-md-12">
                    <h1 class="text-uppercase text-center">{{__('Book now')}}</h1>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            @if (Session::has('successMsg'))
                                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                    <div id="liveToast" class="toast fade show" role="alert"
                                         aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                            <div class="rounded me-2 bg-success"
                                                 style="width: 16px; height: 16px"></div>
                                            <strong class="me-auto">{{__('Message')}}</strong>
                                        </div>
                                        <div class="toast-body">
                                            {{ Session::get('successMsg') }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
{{--                    <div id="contactform-error-msg"></div>--}}
                    <form method="post" action="{{ route('tours.store') }}">
                        @csrf()
                        <div class="form-group mb-2">
                            <input type="hidden" name="tour_id" id="tour_id" value="{{$tour->id}}">
                        </div>
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
                            <input type="submit" class="nir-btn text-uppercase" id="submit2"
                                   value="{{__('Send')}}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="gallery pt-6 pb-60" id="gallery">
        <div class="container">
            <div class="row blog-main">
                @foreach($tour->getMedia('tour_gallery') as $gallery)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mansonry-item">
                        <div class="gallery-item mb-4 rounded overflow-hidden">
                            <div class="gallery-image">
                                <img src='{{ $gallery->getFullUrl()}}' alt="image">
                                <div class="overlay"></div>
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href='{{ $gallery->getFullUrl() }}' data-lightbox="gallery"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


</x-layouts.main>
