<x-layouts.main>

    <div class="page-cover pt-10 pb-6 bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="cover-content text-center text-md-start">
                        <div class="author-detail mb-2">
                            <a href="#" class="tag white bg-theme py-1 px-3 me-2 rounded">#Technology</a>
                            <a href="#" class="tag py-1 px-3"><i class="fa fa-eye"></i> 2500</a>
                        </div>
                        <h1>Ratcliffe to be Director of nation talent Trump ignored</h1>
                        <div class="author-detail d-flex align-items-center">
                            <span class="me-3"><a href="#"><i class="fa fa-clock"></i> Posted On : 12 May 2021</a></span>
                            <span class="me-3"><a href="#"><i class="fa fa-user"></i> Jack Richard</a></span>
                            <span><a href="#"><i class="fa fa-comments"></i> 50</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="position-relative rounded bg-white">
                        <img src="images/blog/blog10.jpg" alt="Image" class="w-100 rounded">
                        <div class="video-button text-center position-absolute w-100 mx-auto z-index3 top-50 start-50 translate-middle">
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
    </div>

    <section class="blog">
        <div class="container">
            <div class="listing-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="list-results d-flex align-items-center justify-content-between">
                            <div class="list-results-sort">
                                <p class="m-0">Showing 1-2 results</p>
                            </div>
                            <div class="click-menu d-flex align-items-center justify-content-between">
                                <div class="change-list me-2 rounded overflow-hidden"><a href="post-list-1.html"><i class="fa fa-bars bg-gr ey"></i></a></div>
                                <div class="change-grid f-active me-2 rounded overflow-hidden"><a href="post-grid-1.html"><i class="fa fa-th"></i></a></div>
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
                    </div>
                    @foreach( $posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                            <div class="trend-image">
                                <img src="{{ asset('/storage/.$post->foto') }}" alt="image">
                            </div>
                            <div class="trend-content-main p-4 pb-2">
                                <div class="trend-content">
                                    <h5 class="theme mb-1">Category</h5>
                                    <h4><a href="detail-1.html"> {{ $post->title }}</a></h4>
                                    <p class="mb-3">
                                       {!! $post->desc !!}
                                    </p>
                                    <small> {{ $post->published_at }}</small>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author mb-2">
                                            <img src="images/reviewer/2.jpg" alt class="rounded-circle me-1">
                                            <span>Sollmond Nell</span>
                                        </div>
                                        <div class="entry-button d-flex align-items-center mb-2">
                                            <a href="{{route('posts.show',['post', $post])}}" class="nir-btn">Read More</a>
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


{{--    <section class="featured-video pb-4 pt-0">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title mb-6 text-center w-75 mx-auto">--}}
{{--                <h4 class="mb-1 theme1">Our Articles & Blogs</h4>--}}
{{--                <h2 class="mb-1">SOme Related <span class="theme">Posts</span></h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--            </div>--}}
{{--            <div class="featured-video-main">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="trend-item box-shadow bg-white rounded overflow-hidden">--}}
{{--                            <div class="trend-image position-relative">--}}
{{--                                <img src="images/trending/trending14.jpg" alt="image" class="w-100">--}}
{{--                                <div class="video-button text-center position-absolute top-50 w-100 mx-auto z-index3 start-50 translate-middle">--}}
{{--                                    <div class="call-button text-center">--}}
{{--                                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">--}}
{{--                                            <i class="fa fa-play bg-blue"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="video-figure"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="trend-content-main">--}}
{{--                                <div class="trend-content-main p-4 pb-2">--}}
{{--                                    <div class="trend-content">--}}
{{--                                        <h5 class="theme mb-1 d-inline-block">Inspiration</h5>--}}
{{--                                        <h4><a href="detail-1.html">Our Main Inspire Runner with Autism Graces of Women's Running</a></h4>--}}
{{--                                        <p class="mb-3">--}}
{{--                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                        </p>--}}
{{--                                        <div class="entry-meta d-flex align-items-center justify-content-between">--}}
{{--                                            <div class="entry-author mb-2">--}}
{{--                                                <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">--}}
{{--                                                <span>David Scott</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="entry-button d-flex align-items-center mb-2">--}}
{{--                                                <a href="#" class="nir-btn">Read More</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item box-shadow bg-white rounded overflow-hidden">--}}
{{--                                    <div class="trend-image">--}}
{{--                                        <img src="images/trending/trending10.jpg" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content-main">--}}
{{--                                        <div class="trend-content p-4">--}}
{{--                                            <h5 class="theme mb-1">Design</h5>--}}
{{--                                            <h4 class="mb-0"><a href="detail-1.html">Get Ready To Up Your Creative Game</a></h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item box-shadow bg-white rounded overflow-hidden">--}}
{{--                                    <div class="trend-image">--}}
{{--                                        <img src="images/trending/trending11.jpg" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content-main">--}}
{{--                                        <div class="trend-content p-4">--}}
{{--                                            <h5 class="theme mb-1">Health</h5>--}}
{{--                                            <h4 class="mb-0"><a href="detail-1.html">Tradition design won’t save us in the COVID</a></h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item box-shadow bg-white rounded overflow-hidden">--}}
{{--                                    <div class="trend-image">--}}
{{--                                        <img src="images/trending/trending13.jpg" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content-main">--}}
{{--                                        <div class="trend-content p-4">--}}
{{--                                            <h5 class="theme mb-1">Foods</h5>--}}
{{--                                            <h4 class="mb-0"><a href="detail-1.html">The 1 Food that helps remote teams</a></h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                                <div class="trend-item box-shadow bg-white rounded overflow-hidden">--}}
{{--                                    <div class="trend-image">--}}
{{--                                        <img src="images/trending/trending12.jpg" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="trend-content-main">--}}
{{--                                        <div class="trend-content p-4">--}}
{{--                                            <h5 class="theme mb-1">Products</h5>--}}
{{--                                            <h4 class="mb-0"><a href="detail-1.html">New: Freehand Templates, built for all</a></h4>--}}
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

</x-layouts.main>
