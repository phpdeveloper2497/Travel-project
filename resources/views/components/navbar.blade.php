<div class="header_menu" id="header_menu">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="image">
                    </a>
                </div>

                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('tours.index') }}">Tours</a></li>
                        <li><a href="{{ route('posts.index') }}">Blog</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="register-login d-flex align-items-center">
                    <a href="{{ route('login') }}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                        <i class="icon-user"></i> Login/Register
                    </a>
                    <a href="#" class="nir-btn white">Book Now</a>
                </div>
                <div id="slicknav-mobile"></div>
            </div>
        </div>
    </nav>
</div>
