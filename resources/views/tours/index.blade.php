<x-layouts.main>

    <x-page-header>
        {{__('Tour')}}
    </x-page-header>


    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="destination-list">
                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                    <div class="row">
                        @foreach($tours as $tour)
                            <div class="col-lg-4 col-md-3">
                                <div class="trend-item2 rounded">
                                    <img src="{{ $tour->getFirstMediaUrl('tour_main') }}" alt="image" class=" rounded">
                                    <div class="color-overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="trend-content position-relative text-md-start text-center">
                                    <small>{{ $tour->days }}</small>
                                    <h3 class="mb-1"><a
                                            href="{{ route('tours.show',['tour' => $tour])}}">{{ $tour->title }}</a>
                                    </h3>
                                    <h6 class="theme mb-0"><i class="icon-location-pin"></i> {{ $tour->place->title }}
                                    </h6>
                                    <p class="mt-4 mb-0">{{ $tour->short_description }} <br><a
                                            href="{{ route('tours.show',['tour' => $tour]) }}"><span
                                                class="theme"> {{ $tour->area }}</span></a></p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="trend-content text-md-end text-center">
                                    <div class="trend-price my-2">
                                        <span class="mb-0">{{$tour->from_to}}</span>
                                        <h3 class="mb-0">{{ '$'.$tour->price }}</h3>
                                        <small>{{__('Per person')}}</small>
                                    </div>
                                    <a href="{{ route('tours.show',['tour' => $tour]) }}"
                                       class="nir-btn">{{__('View Detail')}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
