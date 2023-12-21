<x-layouts.main>

    <x-page-header>
        {{$post->title}}
    </x-page-header>

    <section class="blog">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 mb-4">
                    <div class="blog-single">
                        <div class="blog-wrapper">
                            <h2 class="lh-sm">
                                {{ $post->title }}
                            </h2>
                            <div class="blog-content first-child-cap">
                                    <br><br>
                                        <img src="{{ $post->getFirstMedia('post')->getUrl() }}" alt="image" class="mb-3 rounded">
                                <p class="mb-3">
                                  {!! $post->desc !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



</x-layouts.main>
