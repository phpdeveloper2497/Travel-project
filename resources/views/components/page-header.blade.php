<section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('images/bg/bg1.jpg')}});">
    <div class="section-shape section-shape1 top-inherit bottom-0"
         style="background-image: url({{asset('images/shape8.png')}});"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">{{ $slot }}</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $slot }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
