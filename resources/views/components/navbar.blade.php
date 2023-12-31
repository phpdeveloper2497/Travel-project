<div class="header_menu" id="header_menu">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                <div class="navbar-header">
                    <a class="navbar-brand d-flex" href="{{ route('home') }}">
                        <img style="height: 48px;" src='{{ asset("images/logo.svg") }}' alt="YO-TOUR-LOGO" class="mr-1">
                        <h3 class="align-items-baseline m-0" style="font-size: 32px">TOUR</h3>
                    </a>
                </div>

                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li class="@if (Request::is('/')) active @endif"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        <li class="@if (Request::is('tours')) active @endif"><a href="{{ route('tours.index') }}">{{__('Tours')}}</a></li>
                        <li class="@if (Request::is('posts')) active @endif"><a href="{{ route('posts.index') }}">{{__('Blog')}}</a></li>
                        <li class="@if (Request::is('gallery')) active @endif"><a href="{{ route('gallery') }}">{{__('Gallery')}}</a></li>
                        <li class="@if (Request::is('about')) active @endif"><a href="{{ route('about') }}">{{__('About us')}}</a></li>
                        <li class="@if (Request::is('contact')) active @endif"><a href="{{ route('contact') }}">{{__('Contact')}}</a></li>
                    </ul>
                </div>

                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li class="dropdown submenu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"
                            >{{ $current_locale }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    @foreach($all_locales as $locale)
                                        <a class="btn btn-primary  text-uppercase"
                                           href="{{ route('locale.change',['locale' => $locale]) }}">
                                            {{ $locale }}
                                        </a>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="register-login d-flex align-items-center">
{{--                        <a href="{{ route('login') }}" data-bs-toggle="modal" data-bs-target="#exampleModal"--}}
{{--                           class="me-3">--}}
{{--                            <i class="icon-user"></i> Login/Register--}}
{{--                        </a>--}}
{{--                        <a href="#" class="nir-btn white">Book Now</a>--}}
                    </div>
                    <div id="slicknav-mobile"></div>
                </div>
            </div>
        </div>
    </nav>
</div>
