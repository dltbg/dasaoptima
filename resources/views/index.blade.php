@extends('layouts.master')
@section('menu-home', 'active')
@section('page-content')
    <div role="main" class="main">
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary custom-slider-container mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['991px','991px','991px','750px','750px']" style="height: 991px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative overflow-hidden">
                        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80); background-size: cover; background-position: center; opacity: 0.7"></div>
                        <div class="container position-relative z-index-3 pb-5 h-100">
                            <div class="row justify-content-center justify-content-lg-start align-items-center pb-5 h-100">
                                <div class="col-sm-9 col-lg-7 text-center text-lg-start pb-5 mb-5">
                                    <h2 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span></h2>
                                    <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">Your Go-To Source for<br>Tax and Transfer Pricing Advisory</h1>
{{--                                    <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Professional helping you design success!</p>--}}
{{--                                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overflow-hidden">
                        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToRight" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80); background-size: cover; background-position: center; opacity: 0.7"></div>
                        <div class="container position-relative z-index-3 pb-5 h-100">
                            <div class="row align-items-center justify-content-center justify-content-lg-end pb-5 h-100">
                                <div class="col-sm-9 col-lg-7 text-center text-lg-start pb-5 mb-5">
                                    <h3 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Tax Consultation</h3>
                                    <h2 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">Your Go-To Source for<br>Tax and Transfer Pricing Advisory</h2>
{{--                                    <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Professional helping you design success!</p>--}}
{{--                                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
            </div>
        </div>

        <section class="bg-color-light p-relative z-index-2">
            <div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <i class="fa-solid fa-people-group appear-animation fa-7x" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"></i>
                                <h4 class="card-title mb-1 mt-2 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Integrity</h4>
                                <p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Our actions reflect the professional code of ethics in Indonesian taxation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <i class="fa-solid fa-handshake appear-animation fa-7x" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"></i>
                                <h4 class="card-title mb-1 mt-2 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Trustworthy</h4>
                                <p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">We value our relationship with our clients and build trust all the time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
                                <i class="fa-solid fa-medal appear-animation fa-7x" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"></i>
                                <h4 class="card-title mb-1 mt-2 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Quality</h4>
                                <p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">We provide solutions to the problems more than answers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services d-flex p-relative z-index-1 bg-color-light lazyload" data-bg-src="https://images.unsplash.com/photo-1551135049-8a33b5883817?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
            <div class="col-img-our-services p-absolute overflow-hidden w-50 h-100"></div>
            <div class="container">
                <div class="row justify-content-end align-items-center h-100">
                    <div class="col-lg-5 position-relative bg-color-light z-index-1 col-our-services-text">
                        <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>our services</p>
                        <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">What We Do?</h2>
{{--                        <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut.</p>--}}
{{--                        <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet.</p>--}}
                        <div class="accordion accordion-sm appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" id="accordionServices">
                            <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                                <div class="card-header py-2 bg-color-quaternary">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3One">
                                            Transfer Pricing Services
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3One" class="collapse card-accordion-our-services">
                                    <div class="card-body">
                                        <p class="mb-0">We assist clients in the preparation of Local File, Master File, Country by Country Reports (CBCR) and Notification, applications for Advance...</p>
                                        <a href="{{route('services')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">read more +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                                <div class="card-header py-2 bg-color-quaternary">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Two">
                                            Tax Compliance Services
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3Two" class="collapse card-accordion-our-services">
                                    <div class="card-body">
                                        <p class="mb-0">We provide solutions for fulfilling clients’ monthly and annual tax obligations from preparing tax calculations to...</p>
                                        <a href="{{route('services')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">read more +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                                <div class="card-header py-2 bg-color-quaternary">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Three">
                                            Tax Advisory Services
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3Three" class="collapse card-accordion-our-services">
                                    <div class="card-body">
                                        <p class="mb-0">We provide advice on the tax implications of clients’ new businesses and agreements, formulate a strategy to optimize...</p>
                                        <a href="{{route('services')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">read more +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                                <div class="card-header py-2 bg-color-quaternary">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Four">
                                            Tax Dispute Resolutions
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3Four" class="collapse card-accordion-our-services">
                                    <div class="card-body">
                                        <p class="mb-0">We assist clients during the tax audit and objection process, prepare the appeal letter and represent clients in tax court...</p>
                                        <a href="{{route('services')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">read more +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                                <div class="card-header py-2 bg-color-quaternary">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Five">
                                            Tax Diagnose Review
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3Five" class="collapse card-accordion-our-services">
                                    <div class="card-body">
                                        <p class="mb-0">We provide diagnostic tax reviews and due diligence to assist clients in the identification and assessment of any potent...</p>
                                        <a href="{{route('services')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">read more +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                                <div class="card-header py-2 bg-color-quaternary">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Six">
                                            Training Services
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3Six" class="collapse card-accordion-our-services ">
                                    <div class="card-body">
                                        <p class="mb-0">We provide clients with training services to increase their knowledge of domestic and international taxation. The training topics...</p>
                                        <a href="{{route('services')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">read more +</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{route('services')}}" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
        </section>

{{--        <section class="coaching-consulting d-flex p-relative bg-color-light pt-3 pb-3 pt-lg-5 pb-lg-4">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-end py-5">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>coaching and consulting</p>--}}
{{--                        <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Experienced Team</h2>--}}
{{--                        <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>--}}
{{--                        <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>--}}
{{--                        <div class="d-flex align-items-center justify-content-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">--}}
{{--                            <div class="circular-bar custom-circular-bar m-0">--}}
{{--                                <div class="circular-bar-chart" data-percent="89" data-plugin-options="{'barColor': '#e8465f'}">--}}
{{--                                    <strong class="text-5 text-color-tertiary">89%</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h4 class="font-weight-bold text-color-tertiary m-0 ms-3">Successful cases<br/>in 15 years.</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-coaching-consulting-imgs p-relative">--}}
{{--                        <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">--}}
{{--                            <img src="img/demos/business-consulting-2/coaching/coaching-1.jpg" class="img-fluid border-radius-0" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">--}}
{{--                            <img src="img/demos/business-consulting-2/coaching/coaching-2.jpg" class="img-fluid border-radius-0" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">--}}
{{--                            <img src="img/demos/business-consulting-2/coaching/coaching-3.jpg" class="img-fluid border-radius-0" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pb-4">--}}
{{--            <div class="container py-xl-5">--}}
{{--                <div class="row justify-content-between align-items-center pt-5 py-xl-5 mt-3">--}}
{{--                    <div class="col-xl-6 mb-5 pb-5 mb-xl-0 pb-xl-0">--}}
{{--                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">--}}
{{--                            <div class="owl-carousel owl-theme m-0" data-plugin-options="{'items': 1, 'autoplay': false, 'animateOut': 'fadeOut', 'autoHeight': true}">--}}
{{--                                <div class="custom-testimonial-container bg-color-light">--}}
{{--                                    <div class="testimonial custom-testimonial testimonial-style-2 mb-0">--}}
{{--                                        <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">--}}
{{--                                            <img src="img/demos/business-consulting-2/logos/case-logo-1.png" alt="Bullseye">--}}
{{--                                            <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
{{--                                        </div>--}}
{{--                                        <blockquote class="px-0 pb-5">--}}
{{--                                            <h4 class="text-color-secondary font-weight-bold text-start">Bullseye Case</h4>--}}
{{--                                            <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bold text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>--}}
{{--                                        </blockquote>--}}
{{--                                        <div class="testimonial-arrow-down"></div>--}}
{{--                                        <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">--}}
{{--                                            <img src="img/avatars/avatar-3.jpg" class="img-fluid rounded-circle m-0 me-3" alt="">--}}
{{--                                            <p><strong class="font-weight-extra-bold text-start text-color-secondary mb-1">John Smith</strong><span class="text-uppercase text-start">Manager</span></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-testimonial-container bg-color-light">--}}
{{--                                    <div class="testimonial custom-testimonial testimonial-style-2 mb-0">--}}
{{--                                        <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">--}}
{{--                                            <img src="img/demos/business-consulting-2/logos/case-logo-2.png" alt="Bullseye">--}}
{{--                                            <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
{{--                                        </div>--}}
{{--                                        <blockquote class="px-0 pb-5">--}}
{{--                                            <h4 class="text-color-secondary font-weight-bold text-start">Wall Paint Shop Case</h4>--}}
{{--                                            <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>--}}
{{--                                        </blockquote>--}}
{{--                                        <div class="testimonial-arrow-down"></div>--}}
{{--                                        <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">--}}
{{--                                            <img src="img/avatars/avatar-2.jpg" class="img-fluid rounded-circle m-0 me-3" alt="">--}}
{{--                                            <p><strong class="font-weight-extra-bold text-start text-color-secondary mb-1">John Doe</strong><span class="text-uppercase text-start">Manager</span></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-testimonial-container bg-color-light">--}}
{{--                                    <div class="testimonial custom-testimonial testimonial-style-2 mb-0">--}}
{{--                                        <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">--}}
{{--                                            <img src="img/demos/business-consulting-2/logos/case-logo-3.png" alt="Bullseye">--}}
{{--                                            <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>--}}
{{--                                        </div>--}}
{{--                                        <blockquote class="px-0 pb-5">--}}
{{--                                            <h4 class="text-color-secondary font-weight-bold text-start">Go Gold Golden Case</h4>--}}
{{--                                            <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>--}}
{{--                                        </blockquote>--}}
{{--                                        <div class="testimonial-arrow-down"></div>--}}
{{--                                        <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">--}}
{{--                                            <img src="img/avatars/avatar-4.jpg" class="img-fluid rounded-circle m-0 me-3" alt="">--}}
{{--                                            <p><strong class="font-weight-extra-bold text-start text-color-secondary mb-1">Bob Smith</strong><span class="text-uppercase text-start">Manager</span></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-5 mb-5 mb-xl-0">--}}
{{--                        <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"><span class="line-pre-title bg-color-primary"></span>real world stories</p>--}}
{{--                        <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Sucessful Cases</h2>--}}
{{--                        <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat.</p>--}}
{{--                        <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>--}}
{{--                        <div class="counters custom-counters d-flex">--}}
{{--                            <div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">--}}
{{--                                <strong data-to="240" data-append="+">0</strong>--}}
{{--                                <label class="text-color-primary font-weight-bold">Satisfied Clients</label>--}}
{{--                            </div>--}}
{{--                            <div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">--}}
{{--                                <strong data-to="2000" data-append="+">0</strong>--}}
{{--                                <label class="text-color-primary font-weight-bold">Successfull Cases</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="are-you-looking-for bg-color-secondary">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-between">--}}
{{--                    <div class="col-xl-5">--}}
{{--                        <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you looking for a</p>--}}
{{--                        <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan Consultant?</h2>--}}
{{--                        <p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your company strategy session right now!</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">--}}
{{--								<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">--}}
{{--									<span>--}}
{{--										<img width="18" height="25" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">--}}
{{--									</span>--}}
{{--									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>--}}
{{--								</span>--}}
{{--                        <a href="demo-business-consulting-2-contact-us.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial consultation</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="our-blog">--}}
{{--            <div class="container">--}}
{{--                <div class="row mt-3 pt-5">--}}
{{--                    <div class="col">--}}
{{--                        <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>our blog</p>--}}
{{--                        <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">News and Articles</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mb-3 pb-5">--}}
{{--                    <div class="col">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 mb-4 mb-lg-0">--}}
{{--                                <article>--}}
{{--                                    <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">--}}
{{--                                        <div class="card-body p-4 z-index-1">--}}
{{--                                            <a href="demo-business-consulting-2-blog-post.html">--}}
{{--                                                <img class="card-img-top border-radius-0" src="img/demos/business-consulting-2/blog/blog-1.png" alt="Card Image">--}}
{{--                                            </a>--}}
{{--                                            <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-01-10">10 Jan 2023</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>--}}
{{--                                            <div class="card-body p-0">--}}
{{--                                                <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">An Interview with John Doe</a></h4>--}}
{{--                                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>--}}
{{--                                                <a href="demo-business-consulting-2-blog-post.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <article>--}}
{{--                                    <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">--}}
{{--                                        <div class="card-body p-4 z-index-1">--}}
{{--                                            <a href="demo-business-consulting-2-blog-post.html">--}}
{{--                                                <img class="card-img-top border-radius-0" src="img/demos/business-consulting-2/blog/blog-2.png" alt="Card Image">--}}
{{--                                            </a>--}}
{{--                                            <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-01-10">10 Jan 2023</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>--}}
{{--                                            <div class="card-body p-0">--}}
{{--                                                <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">How to Grow your Business</a></h4>--}}
{{--                                                <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>--}}
{{--                                                <a href="demo-business-consulting-2-blog-post.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

    </div>
@endsection