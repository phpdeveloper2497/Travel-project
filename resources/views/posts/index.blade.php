<x-layouts.main>
    <section class="blog">
        <div class="container">
            <div class="listing-inner">
                <div class="row">
                    @foreach( $posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                                <div class="trend-image">
                                    <img src={{ $post->getFirstMedia('post')->getUrl() }} alt="image">
                                </div>
                                <div class="trend-content-main p-4 pb-2">
                                    <div class="trend-content">
                                        <h4><a href="{{ route('posts.show', ['post' => $post]) }}">
                                                {{ $post->title }}
                                            </a></h4>
                                        <p class="mb-3">
                                            {!! $post->desc !!}
                                            {{--  {!!  strlen($post->desc) > 50 ? substr($post->desc,0,50)."..." : $post->desc!!}--}}
                                        </p>
                                        <small>
                                            {{ $post->published_at }}
                                        </small>
                                        <div class="entry-meta d-flex align-items-center mt-2">
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


</x-layouts.main>
