@extends('layouts.master')
@section('menu-services', 'active')
@section('page-content')
    <div role="main" class="main">

        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Services</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="#">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Our Services</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">What We Do</h2>

                    <div class="accordion accordion-sm mb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" id="accordionServices">
                        <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                            <div class="card-header py-2 bg-color-quaternary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3One">
                                        Transfer Pricing Services
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3One" class="collapse card-accordion-our-services show">
                                <div class="card-body">
                                    <p class="font-weight-semibold mb-4">We assist clients in the preparation of Local File, Master File, Country by Country Reports (CBCR) and Notification, applications for Advance Pricing Agreements (APA), Mutual Agreement Procedures (MAP), Transfer Pricing Dispute Resolutions, Transfer Pricing Advisory (e.g., Benchmarking Study or Value Chain Analysis) and other transfer pricing services.</p>
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
                                    <p class="font-weight-semibold mb-4">We provide solutions for fulfilling clients’ monthly and annual tax obligations from preparing tax calculations to filing tax returns for corporations and individuals. We also assist clients in arranging reconciliations between financial statements and tax returns.</p>
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
                                    <p class="font-weight-semibold mb-4">We provide advice on the tax implications of clients’ new businesses and agreements, formulate a strategy to optimize tax costs, and provide general tax advice for corporations and individuals.</p>
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
                                    <p class="font-weight-semibold mb-4">We assist clients during the tax audit and objection process, prepare the appeal letter and represent clients in tax court hearings, and we also assist in the judicial review application to the Supreme Court. These services include helping clients in the restitution process for Income Tax and VAT.</p>
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
                                    <p class="font-weight-semibold mb-4">We provide diagnostic tax reviews and due diligence to assist clients in the identification and assessment of any potential tax exposures that may arise either due to a possible transaction or because of a prospective business investment or acquisition.</p>
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
                            <div id="collapse3Six" class="collapse card-accordion-our-services">
                                <div class="card-body">
                                    <p class="font-weight-semibold mb-4">We provide clients with training services to increase their knowledge of domestic and international taxation. The training topics can be tailored in accordance with clients’ needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-5">
                    <hr class="m-0">
                </div>
            </div>
            <div class="row align-items-center">
                <h4 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Industry</h4>
                <p class="font-weight-light mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="font-size: 15px">Throughout a decade and more of experience, we have served a wide range of national and multinational clients from key sectors such as:
                </p>
            </div>
            <div class="row align-items-center gy-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Fast Moving Consumer Good (FMCG)</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" class="img-fluid border-radius-0" alt="FMCG">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="150">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Automotive</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1567789884554-0b844b597180?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="img-fluid border-radius-0" alt="Automotive">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Financial Service</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1518186233392-c232efbf2373?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" class="img-fluid border-radius-0" alt="FMCG">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Energy & Resource</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1487875961445-47a00398c267?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="img-fluid border-radius-0" alt="FMCG">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Chemicals</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1532187643603-ba119ca4109e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="img-fluid border-radius-0" alt="FMCG">
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="350">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Electronics</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Tourism & Hospitality</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHRyYXZlbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Plantation</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1602020277972-99978250c8bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Construction</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1591588582259-e675bd2e6088?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div class="col-lg-2 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0 position-relative appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="550">
                        <div class="line-height-2 mb-1" style="font-size: 10px; height: 25px">Real Estate</div>
                        <img style="object-fit: cover; aspect-ratio: 1/1; height: 125px" src="https://images.unsplash.com/photo-1555636222-cae831e670b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1477&q=80" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
