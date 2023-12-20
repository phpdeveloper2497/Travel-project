<x-layouts.main>
    <x-page-header>
        {{__('Gallery')}}
    </x-page-header>

    <div class="gallery pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">{{__('Our Gallery')}}</h4>
            </div>
            <div class="row blog-main">
                @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mansonry-item">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src={{$gallery->getFirstMediaUrl('gallery')}} alt="image">
                            <div class="overlay"></div>
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">
                                {{$gallery->title}}
                            </h5>'
                            <ul>
                                <li><a href={{$gallery->getFirstMediaUrl('gallery')}} data-lightbox="gallery" data-title={{$gallery->title}}><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>





</x-layouts.main>
