<x-layouts.main>

    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('images/bg/bg1.jpg') }});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
             style="background-image: url({{ asset('images/shape8.png') }})">
        </div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Show blog</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Show</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <section class="blog">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 mb-4">
                    <div class="blog-single">
                        <div class="blog-wrapper">
                            <h2 class="lh-sm"> {{ $post->title }}</h2>
                            <div class="blog-content first-child-cap">
                                <p class="mb-3"> {{ $post->desc }} </p>
                                    <br><br>
                                    <img src={{asset("images/bg/bg3.jpg")}} alt="image" class="mb-3 rounded">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


</x-layouts.main>
