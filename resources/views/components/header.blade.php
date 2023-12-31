<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YO-TOUR</title>

    <x-css_files>

    </x-css_files>

</head>
<body>

<div id="preloader">
    <div id="status"></div>
</div>


<header class="main_header_area">
    <div class="header-content py-1 bg-theme">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i
                                    class="icon-calendar white"></i>{{ now()->formatLocalized('%a, %b %d, %Y %H:%M') }}
                        </a>
                    </li>
                    <li><a href="#" class="white"><i class="icon-location-pin white"></i> {{ config('app.timezone') }}</a>
                    </li>
                    <li><a href="#" class="white"><i class="icon-clock white"></i> Mon-Fri: 10 AM – 5 PM</a></li>
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    <li><a href="{{ $settings->facebook }}" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $settings->instagram }}" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $settings->telegram }}" class="white"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $settings->youtube }}" class="white"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <x-navbar>

    </x-navbar>

</header>

