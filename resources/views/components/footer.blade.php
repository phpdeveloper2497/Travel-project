<footer class="pt-20 pb-4" style="background-image: url({{asset('images/background_pattern.png')}});">
    <div class="section-shape top-0" style="background-image: url({{asset('images/shape8.png')}});"></div>
    <div class="insta-main pb-10">
        <div class="container">
            <div class="insta-inner">

                <div class="follow-button">
                    <a href="#">
                        <h5 class="m-0 rounded"><i class="fab fa-instagram"></i>{{__('Follow on Instagram')}}</h5>
                    </a>
                </div>
                <div class="row attract-slider">
                    @foreach($galleries as $gallery)
                        <div class="col-md-3 col-sm-6">
                            <div class="insta-image rounded">
                                <a href="gallery.html"><img src="{{$gallery->getFirstMediaUrl('gallery')}} "
                                                            alt="insta"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4 pe-4">
                    <div class="footer-about">
                        <div class="d-flex">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo">
                            <h1 class="align-items-baseline m-0">TOUR</h1>
                        </div>
                        <p class="mt-3 mb-3 white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque
                            iaculis molestie sagittis maecenas aenean eget molestie sagittis.
                        </p>
                        <ul>
                            <li class="white"><strong>{{__('PO Box')}}:</strong>
                                <p class="m-0 white">{{ $settings->phone1 }}</p>
                                <p class="m-0 white">{{ $settings->phone2 }}</p>
                            </li>
                            <br>
                            <li class="white"><strong>{{__('Location')}}:</strong>
                                {{$settings->address}}
                            </li>
                            <br>
                            <li class="white"><strong>{{__('Email')}}:</strong> <a
                                    href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__" data-cfemail="4d24232b220d193f2c3b28212423632e2220">
                                    <p class="white">{{ $settings->email1  }} </p>
                                    <p class="white">{{ $settings->email2  }} </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">{{__('Quick link')}}</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                            <li><a href="{{ route('tours.index') }}">{{__('Tours')}}</a></li>
                            <li><a href="{{ route('posts.index') }}">{{__('Blog')}}</a></li>
                            <li><a href="{{ route('gallery') }}">{{__('Gallery')}}</a></li>
                            <li><a href="{{ route('about') }}">{{__('About us')}}</a></li>
                            <li><a href="{{ route('contact') }}">{{__('Contact')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">2022 {{config('app.name')}}.</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="{{ $settings->facebook }}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $settings->instagram }}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $settings->telegram }}"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $settings->youtube }}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</footer>

<div id="back-to-top">
    <a href="#"></a>
</div>


<div id="search1">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="post-tabs">

                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button aria-controls="login" aria-selected="false" class="nav-link active"
                                    data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab"
                                    type="button">Login
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button aria-controls="register" aria-selected="true" class="nav-link"
                                    data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab"
                                    type="button">Register
                            </button>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>

<x-js_files>

</x-js_files>

</body>

</html>


