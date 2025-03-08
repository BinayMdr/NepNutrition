<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <title>NepNutrition</title>
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{asset('assets/frontend/js/nepNutrition.min.js')}}" async></script>
    
    
    <link rel="stylesheet" href="{{asset('assets/frontend/css/styles.css')}}">
    @yield('css')
    {{-- <link rel="stylesheet" href="css/@@css"> --}}
    
    <link rel="icon" type="image/png" href="{{asset('assets/favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('assets/favicon/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('assets/favicon/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}" />
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}" />
</head>
<body>
<nav class="header sticky-top @if(\Route::currentRouteName() == 'frontend.index') is-index @else bg-young-night shadow @endif">
    <div class="wrapper-fluid">
        <div class="header-container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{route('frontend.index')}}">
                <img src="{{asset('assets/frontend/image/logo.jpg')}}" alt="NepNutrition" class="img-fluid">
            </a>
            <div class="menu-wrapper d-md-block d-none">
                <ul class="navbar mb-0 list-unstyled">
                    <li><a href="{{route('frontend.index')}}" class="nav-item @if(\Route::currentRouteName() == 'frontend.index') active @endif">HOME</a></li>
                    <li><a href="{{route('frontend.products')}}" class="nav-item @if(\Route::currentRouteName() == 'frontend.products') active @endif">PRODUCTS</a></li>
                    <li><a href="{{route('frontend.contact_us')}}" class="nav-item @if(\Route::currentRouteName() == 'frontend.contact_us') active @endif">CONTACT US</a></li>
                    <li><a href="{{route('frontend.about_us')}}" class="nav-item @if(\Route::currentRouteName() == 'frontend.about_us') active @endif">ABOUT US</a></li>
                    <li><a href="{{route('frontend.gallery')}}" class="nav-item @if(\Route::currentRouteName() == 'frontend.gallery') active @endif">GALLERY</a></li>
                </ul>
            </div>
            <div class="search cursor-pointer d-md-block d-none" data-bs-target="#searchModal" data-bs-toggle="modal">
                <svg height="20" width="20">
                    <use href="./assets/images/icons.svg#icon-search"></use>
                </svg>
            </div>

            <!--Search Modal-->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true" aria-labelledby="searchModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <div class="search-box text-center">
                                <h2 class="text-white mb-3">Search</h2>
                                <input type="search" class="form-control form-control-lg" placeholder="Search NepNutrition...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Mobile Navigation Section-->
            <div class="mobile-nav d-md-none d-block">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        aria-label="Toggle navigation">
                    <svg height="19" width="25">
                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-hamburger"></use>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-end bg-smoky-black" tabindex="-1" id="offcanvasDarkNavbar"
                     aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('assets/frontend/image/logo.jpg')}}" alt="NepNutrition" class="img-fluid" width="55">
                        </a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <hr class="border-0"/>
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item d-flex gap-2 align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                                </svg>
                                <a class="nav-link flex-grow-1 active" aria-current="page" href="{{route('frontend.index')}}">HOME</a>
                            </li>
                            <li class="nav-item d-flex gap-2 align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                                </svg>
                                <a href="{{route('frontend.products')}}" class="nav-link flex-grow-1">PRODUCTS</a></li>
                            <li class="nav-item d-flex gap-2 align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                                </svg>
                                <a href="{{route('frontend.contact_us')}}" class="nav-link flex-grow-1">CONTACT US</a></li>
                            <li class="nav-item d-flex gap-2 align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                                </svg>
                                <a href="{{route('frontend.about_us')}}" class="nav-link flex-grow-1">ABOUT US</a></li>
                            <li class="nav-item d-flex gap-2 align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                                </svg>
                                <a href="{{route('frontend.gallery')}}" class="nav-link flex-grow-1">GALLERY</a>
                            </li>
                            <li class="nav-item d-flex gap-2 align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                                </svg>
                                <a href="{{route('frontend.authenticity')}}" class="nav-link flex-grow-1">AUTHENTICITY</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer text-white">
    <div class="wrapper">
        <div class="main-container py-5">
            <div class="row text-center text-md-center">
                <div class="col-12 col-lg-2 d-flex align-items-start footer-logo-wrapper">
                    <img src="{{asset('assets/frontend/image/logo.jpg')}}" alt="NepNutrition" class="img-fluid footer-logo">
                </div>

                <!--This Section for desktop view menu listing-->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 d-md-block d-none">
                    <p class="fw-medium">Quick Links</p>
                    <ul class="list-unstyled footer-nav mb-0">
                        <li class="me-0"><a class="nav-item text-decoration-none" href="{{route('frontend.gallery')}}">Gallery</a></li>
                        <li class="me-0"><a class="nav-item text-decoration-none" href="{{route('frontend.authenticity')}}">Authenticity</a>
                        </li>
   
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-5 mb-lg-0 d-md-block d-none">
                    <p class="fw-medium">Quick Links</p>
                    <ul class="list-unstyled footer-nav mb-0">
                        <li class="me-0"><a class="nav-item text-decoration-none" href="{{route('product')}}">Product</a></li>
                        <li class="me-0"><a class="nav-item text-decoration-none" href="{{route('about-us')}}">About Us</a>
                        </li>
                    </ul>
                </div>

                <!--This Section for mobile view menu listing-->
                <div class="col-12 d-md-none d-block mb-md-0 mb-4">
                    <div class="accordion" id="menuAccordion">
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3 px-2 bg-transparent text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menuAccordion-collapseTwo" aria-expanded="false" aria-controls="menuAccordion-collapseTwo">
                                    Quick Links
                                </button>
                            </h2>
                            <div id="menuAccordion-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body p-3 border-top">
                                    <ul class="list-unstyled footer-nav mb-0">
                                        <li class="me-0"><a class="nav-item text-decoration-none d-block" href=".{{route('frontend.gallery')}}">Gallery</a></li>
                                        <li class="me-0"><a class="nav-item text-decoration-none d-block" href="{{route('frontend.authenticity')}}">Authenticity</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3 px-2 bg-transparent text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menuAccordion-collapseThree" aria-expanded="false" aria-controls="menuAccordion-collapseThree">
                                    Categories
                                </button>
                            </h2>
                            <div id="menuAccordion-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body p-3 border-top">
                                    <ul class="list-unstyled footer-nav mb-0">
                                        <li class="me-0"><a class="nav-item text-decoration-none d-block" href="{{route('product')}}">Product</a></li>
                                        <li class="me-0"><a class="nav-item text-decoration-none d-block" href="{{route('about-us')}}">About Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-0 mb-lg-0">
                    <div class="contact-info">
                        <p class="contact-detail justify-content-center justify-content-lg-start">
                            <svg width="20" height="20">
                                <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-location"></use>
                            </svg>
                            <a href="javascript:void(0)" class="text-white">{{$settings['address']}}</a>
                        </p>
                        <p class=" contact-detail justify-content-center justify-content-lg-start">
                            <svg width="20" height="20">
                                <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-phone"></use>
                            </svg>
                            <a href="tel:{{$settings['number']}}" class="text-white">{{$settings['number']}}</a>
                        </p>
                        <p class=" contact-detail justify-content-center justify-content-lg-start">
                            <svg width="20" height="20">
                                <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-email"></use>
                            </svg>
                            <a href="mailto:{{$settings['email']}}" class="text-white">{{$settings['email']}}</a>
                        </p>
                    </div>
                    <div class="social-links justify-content-center justify-content-lg-start">
                        @if($settings['insta-link'] != "" && $settings['insta-link'] != null)
                            <a href="{{$settings['insta-link']}}" target='_blank' rel='noopener noreferrer'
                            class="social d-flex align-items-center justify-content-center text-white text-decoration-none">
                                <svg height="20" width="20">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-instagram"></use>
                                </svg>
                            </a>
                        @endif
                        @if($settings['facebook-link'] != "" && $settings['facebook-link'] != null)
                            <a href="{{$settings['facebook-link']}}" target='_blank' rel='noopener noreferrer'
                            class="social d-flex align-items-center justify-content-center text-white text-decoration-none">
                                <svg height="20" width="20">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-facebook"></use>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright d-flex flex-lg-row flex-column justify-content-between align-items-center row-gap-md-3 row-gap-2">
            <div class="section-left text-white small">
                Copyright &copy; <?php echo date('Y'); ?> - All Rights Reserved
            </div>
            <div class="section-right text-white small">
                Powered By ⚡ NepNutrition
            </div>
        </div>
    </div>
</footer>
@yield('js')
</body>
</html>