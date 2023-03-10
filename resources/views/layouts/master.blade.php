<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dasa Optima Consulting</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

    @vite('resources/css/app.css')

    <!-- Head Libs -->
    @vite('resources/js/vendor/modernizr/modernizr.min.js')

</head>

<body>
<div class="body">
    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
{{--            <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">--}}
{{--                <div class="container h-100">--}}
{{--                    <div class="header-row h-100">--}}
{{--                        <div class="header-column justify-content-between">--}}
{{--                            <div class="header-row">--}}
{{--                                <nav class="header-nav-top w-100">--}}
{{--                                    <ul class="nav nav-pills justify-content-between w-100 h-100">--}}
{{--                                        <li class="nav-item py-2 d-inline-flex">--}}
{{--													<span class="header-top-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase">--}}
{{--														<span>--}}
{{--															<img width="15" height="18" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">--}}
{{--														</span>--}}
{{--														<a class="text-color-secondary text-color-hover-primary text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>--}}
{{--													</span>--}}
{{--                                            <span class="header-top-email px-0 font-weight-normal align-items-center d-none d-xl-flex">--}}
{{--														<span>--}}
{{--															<img width="25" height="18" src="img/demos/business-consulting-2/icons/mail.svg" alt="Mail">--}}
{{--														</span>--}}
{{--														<a class="text-color-secondary text-color-hover-primary text-decoration-none" href="mailto:business@portotheme.com">business@portotheme.com</a>--}}
{{--													</span>--}}
{{--                                            <span class="header-top-opening-hours px-0 font-weight-normal align-items-center text-color-secondary d-none d-xl-flex">--}}
{{--														<span>--}}
{{--															<img width="19" height="18" src="img/demos/business-consulting-2/icons/calendar.svg" alt="Calendar">--}}
{{--														</span>--}}
{{--														Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED--}}
{{--													</span>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item nav-item-header-top-socials d-none d-md-flex justify-content-between h-100">--}}
{{--													<span class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">--}}
{{--														<a href="demo-business-consulting-2-contact-us.html" class="btn-primary d-flex align-items-center justify-content-center h-100 w-100 text-color-light font-weight-semibold text-decoration-none text-uppercase custom-button-header-top">free initial consultation</a>--}}
{{--													</span>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="header-container container bg-color-light">
                <div class="header-row">
                    <div class="header-column header-column-logo">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="demo-business-consulting-2.html">
                                    <img alt="Porto" width="123" src="{{asset('/image/logo-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column header-column-nav-menu justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown-secondary">
                                                <a class="nav-link active" href="{{ route('home') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{route('about-us')}}">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{ route('services') }}">
                                                    Services
                                                </a>
                                            </li>
                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{ route('contact-us') }}">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header-column header-column-search justify-content-center align-items-end">
                        <div class="header-nav-features">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch">
                                    <i class="fas fa-search header-nav-top-icon text-color-secondary text-3"></i>
                                </a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fa fa-search header-nav-top-icon text-color-secondary"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('page-content')

    <footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
        <div class="container">
            <div class="row py-5 custom-row-footer">
                <div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
                    <img width="123" src="{{asset('/image/logo-2.png')}}" alt="Logo Footer">
                    <p class="d-block m-0 text-color-default">Lorem ipsum dolor sit amet, conse adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor.</p>
                </div>
                <div class="col-12 col-sm-12 col-lg-9 footer-column">
                    <div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
                        <div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
                            <ul class="nav nav-pills justify-content-between h-100 mb-4 mb-lg-0">
                                <li class="nav-item d-inline-flex flex-column flex-lg-row">
											<span class="footer-nav-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase justify-content-start mb-2 mb-lg-0">
												<span>
													<img width="15" height="18" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">
												</span>
												<a class="font-weight-bold text-color-secondary text-color-hover-primary text-decoration-none" href="tel:123-456-7890">+62 813-8700-2008</a>
											</span>
                                    <span class="footer-nav-email px-0 font-weight-normal d-flex align-items-center justify-content-start mb-2 mb-lg-0">
												<span>
													<img width="25" height="18" src="img/demos/business-consulting-2/icons/mail.svg" alt="Mail">
												</span>
												<a class="text-color-secondary text-color-hover-primary text-decoration-none" href="mailto:business@portotheme.com"> info@dasaoptima.com</a>
											</span>
                                    <span class="footer-nav-opening-hours px-0 font-weight-normal d-flex align-items-center text-color-secondary justify-content-start mb-2 mb-lg-0">
												<span>
													<img width="19" height="18" src="img/demos/business-consulting-2/icons/calendar.svg" alt="Calendar">
												</span>
												Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED
											</span>
                                </li>
                            </ul>
                            <ul class="social-icons custom-social-icons">
                                <li class="social-icons-instagram">
                                    <a class="custom-bg-color-light-grey" href="#" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
                                    </a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a class="custom-bg-color-light-grey" href="#" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
                                    </a>
                                </li>
                                <li class="social-icons-facebook">
                                    <a class="custom-bg-color-light-grey" href="#" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <nav class="nav-footer w-100 d-none d-lg-block">
                            <ul class="nav nav-pills justify-content-end" id="mainNav">
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('home')}}">
                                        Home
                                    </a>
                                </li>
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('about-us')}}">
                                        About Us
                                    </a>
                                </li>
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('services')}}">
                                        Services
                                    </a>
                                </li>
                                <li class="dropdown-secondary">
                                    <a class="nav-link text-color-secondary font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('contact-us')}}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright container bg-color-quaternary">
            <div class="row">
                <div class="col-lg-12 text-center m-0">
                    <p class="text-color-grey">Dasa Optima Consulting. ©  2023.  All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@vite('resources/js/vendor/jquery/jquery.min.js')
@vite('resources/js/vendor/plugins/js/plugins.js')
@vite('resources/js/template/theme.js')
@vite('resources/js/template/view.contact.js')
@vite('resources/js/template/bc-2.js')
@vite('resources/js/template/custom.js')
@vite('resources/js/template/theme.init.js')


</body>
</html>