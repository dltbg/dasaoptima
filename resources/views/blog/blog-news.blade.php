@extends('layouts.master')
@section('blog', 'active')
@section('page-meta')
    <title>Blog & News</title>
    <meta name="keywords" content="Blog and news" />
    <meta name="description" content="Dasa Optima Consulting can be the new tax advisor you need to support your growth and success. Whether you’re looking to strengthen your business continuity, enhance your tax compliance, or secure your tax dispute resolution.">
    <meta name="author" content="Dasaoptima">
@endsection

@section('page-content')
    <div role="main" class="main">

        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Blog</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="#">Home</a></li>
                            <li class="active">Blog & News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-9">

                <article>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <a href="{{route('blog-post-2')}}">
                                    <img class="card-img-top border-radius-0" src="https://images.unsplash.com/photo-1543286386-713bdd548da4?q=80&amp;w=1000&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2024-01-19">19 Jan 2024</time> <span class="opacity-3 d-inline-block px-2"> | </span> Dasaoptima </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="{{route('blog-post-2')}}">AN UPDATE ON INDONESIAN VALUATION PROCEDURES FOR TAXATION PURPOSES</a></h4>
                                    <p class="card-text mb-3">The government's recent introduction of Minister of Finance Regulation Number 79 of 2023 (PMK-79/2023) focuses on...</p>
                                    <a href="{{route('blog-post-2')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <a href="{{route('blog-post-1')}}">
                                    <img class="card-img-top border-radius-0" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2938&q=80" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-10-4">4 Oct 2023</time> <span class="opacity-3 d-inline-block px-2"> | </span> Dasaoptima </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="{{route('blog-post-1')}}">Indonesia’s Benefit Tests: Preliminary Steps in Applying the Arm’s Length Principle for Intercompany Service Transactions</a></h4>
                                    <p class="card-text mb-3">The Indonesian Government, in PMK Number 22/03/2020 (”PMK-22/2020”), emphasized the significance of 'preliminary steps' when...</p>
                                    <a href="{{route('blog-post-1')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <a href="{{route('blog-post')}}">
                                    <img class="card-img-top border-radius-0" src="https://images.pexels.com/photos/6693661/pexels-photo-6693661.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-08-4">4 Aug 2023</time> <span class="opacity-3 d-inline-block px-2"> | </span> Dasaoptima </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="{{route('blog-post')}}">Brief Overview of MoF Regulation No 66/2023</a></h4>
                                    <p class="card-text mb-3">The Indonesian Government has issued MoF Regulation No 66/2023 which came into force on July 1, 2023, regarding the Income Tax Treatment for compensation or remuneration related to work or services rendered, received in the form of benefit-in-kind (BIK). Deductible BIKs are BIKs that represent compensation related to...</p>
                                    <a href="{{route('blog-post')}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>
                                </div>
                            </div>
                        </div>
                    </article>

{{--                    <article>--}}
{{--                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">--}}
{{--                            <div class="card-body p-4 z-index-1">--}}
{{--                                <a href="demo-business-consulting-2-blog-post.html">--}}
{{--                                    <img class="card-img-top border-radius-0" src="img/demos/business-consulting-2/blog/blog-2.png" alt="Card Image">--}}
{{--                                </a>--}}
{{--                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-01-10">10 Jan 2023</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>--}}
{{--                                <div class="card-body p-0">--}}
{{--                                    <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">How to Grow your Business</a></h4>--}}
{{--                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin...</p>--}}
{{--                                    <a href="demo-business-consulting-2-blog-post.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}

{{--                    <ul class="pagination pagination-rounded pagination-lg justify-content-center">--}}
{{--                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>--}}
{{--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>--}}
{{--                    </ul>--}}

                </div>
                <div class="col-lg-3 pt-4 pt-lg-0">
                    <aside class="sidebar">
                        <div class="px-3 mb-4">
                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog</h3>
                            <p class="m-0">Dasaoptima is an active organization. We will always update our activity and give beneficial information to the readers.</p>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
{{--                        <div class="px-3 mt-4">--}}
{{--                            <form action="page-search-results.html" method="get">--}}
{{--                                <div class="input-group mb-3 pb-1">--}}
{{--                                    <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">--}}
{{--                                    <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="py-1 clearfix">--}}
{{--                            <hr class="my-2">--}}
{{--                        </div>--}}
{{--                        <div class="px-3 mt-4">--}}
{{--                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>--}}
{{--                            <div class="pb-2 mb-1">--}}
{{--                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>--}}
{{--                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>--}}
{{--                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>--}}
{{--                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>--}}
{{--                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>--}}
{{--                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="py-1 clearfix">--}}
{{--                            <hr class="my-2">--}}
{{--                        </div>--}}
{{--                        <div class="px-3 mt-4">--}}
{{--                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Comments</h3>--}}
{{--                            <div class="pb-2 mb-1">--}}
{{--                                <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>--}}
{{--                                <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>--}}
{{--                                <a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Consectetur adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="py-1 clearfix">--}}
{{--                            <hr class="my-2">--}}
{{--                        </div>--}}
{{--                        <div class="px-3 mt-4">--}}
{{--                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0">Categories</h3>--}}
{{--                            <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">--}}
{{--                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a></li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>--}}
{{--                                    <ul>--}}
{{--                                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>--}}
{{--                                        <li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>--}}
{{--                                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>--}}
{{--                                        <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos (3)</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle (2)</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology (1)</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>

    </div>
@endsection
