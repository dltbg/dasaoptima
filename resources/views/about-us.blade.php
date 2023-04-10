@extends('layouts.master')
@section('menu-about-us', 'active')
@section('page-content')
        <div role="main" class="main">

            <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">About Us</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <li><a href={{ route('home') }}}>Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="text-4 font-weight-bold text-color-secondary">Dasa Optima Consulting</span>
                        <span class="text-4 line-height-9">is run by highly experienced tax practitioners who hold Brevet C - Indonesia’s highest tax consultant license, and own tax attorney licenses at the Indonesian tax court. Prior to our company’s establishment, most of our professionals worked for Big Four Consultancy Firms.
                        </span>
                        <p class="mt-2 p-0 text-4 line-height-9">Our diversified background comes from complex experiences,- and years of journey in serving small and medium enterprises to high-profile clients. Our expertise span from a wide range of practices and industries covering tax compliance, tax advisory, tax dispute, tax review, transfer pricing, and training services.</p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <div class="card border-radius-0 box-shadow-1 border-0 mt-4 mt-lg-0 ms-lg-3 p-3 mb-3 mb-lg-0">
                            <img src=https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="img-fluid border-radius-0" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row py-3 mt-2">

                    <div class="col-lg-6 p-0">
                        <section class="section section-height-3 h-100 m-0 border-0" style="background-color: #1c2584">
                            <div class="row justify-content-end m-0">
                                <div class="col-half-section col-half-section-right text-color-light">
                                    <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-secondary ms-0 me-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span></p>
                                    <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Vision</h2>
                                    <span class="opacity-7 d-block">
											<p class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">To become a leading and trusted tax and transfer pricing advisory firm that offers high-quality services and creates optimum value for the clients and public in general</p>
										</span>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-6 p-0">
                        <section class="section section-height-3 h-100 m-0 border-0" style="background-color: #232ea1">
                            <div class="row m-0">
                                <div class="col-half-section text-color-light text-end">
                                    <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100"><span class="line-pre-title me-0 ms-3 bg-color-secondary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200"></span></p>
                                    <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Mission</h2>
                                    <span class="opacity-7 d-block">
											<p class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">Providing high-quality services and advice that exceed expectations, keeping updated on the development of domestic and international tax regulations, and maintaining a strong relationship with the client and tax authorities are the ways we believe create optimum value for all stakeholders.</p>
										</span>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>

            <div class="container py-5 mb-3">
                <div class="row align-items-center">
                    <div class="col-lg-5 pt-3 pt-lg-0 pb-4 pb-lg-0">
                        <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="img-fluid border-radius-0" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <span class="text-4 line-height-9 appear-animation text-color-secondary font-weight-bold" data-appear-animation="fadeIn" data-appear-animation-delay="100">Dasa Optima Consulting</span>
                        <span class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                             can be the new tax advisor you need to support your growth and success. Whether you’re looking to strengthen your business continuity, enhance your tax compliance, or secure your tax dispute resolution, our tax and transfer pricing team offers solutions to help you succeed.
                        </span>
                        <p class="mt-2 p-0 appear-animation text-4 line-height-9" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                            Our purpose is to be a catalyst for the growth and success of our clients, our people and our communities. We strive to be as diverse as those we serve and the talent we attract and retain.
                        </p>
                    </div>
                </div>
            </div>

{{--            <section class="are-you-looking-for bg-color-secondary">--}}
{{--                <div class="container">--}}
{{--                    <div class="row justify-content-between">--}}
{{--                        <div class="col-xl-5">--}}
{{--                            <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you looking for a</p>--}}
{{--                            <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan Consultant?</h2>--}}
{{--                            <p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your company strategy session right now!</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">--}}
{{--								<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">--}}
{{--									<span>--}}
{{--										<img width="18" height="25" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">--}}
{{--									</span>--}}
{{--									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>--}}
{{--								</span>--}}
{{--                            <a href="demo-business-consulting-2-contact-us.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial consultation</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

        </div>
@endsection
