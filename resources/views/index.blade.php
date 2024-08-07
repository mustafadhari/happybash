@extends('layouts.master')
@section('title')
    Index
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="position-relative">
        <div id="ecommerceHero" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="ecommerce-home bg-danger-subtle"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/babyshower.jpg')}}');">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ecommerce-home bg-primary-subtle"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/wedding.jpg')}}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ecommerce-home"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/kidsparty.jpg') }}');background-size: cover;">
                        <div class="container">
                            <div class="row justify-content-end">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ecommerce-home"
                        style="background-image: url('{{ URL::asset('build/images/ecommerce/home/birthday.jpg') }}');background-size: cover;">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#ecommerceHero" data-bs-slide="prev">
                <i class="ph-caret-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ecommerceHero" data-bs-slide="next">
                <i class="ph-caret-right"></i>
            </button>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/fast-delivery.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                            <p class="text-muted mb-0">Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/returns.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">2 Days Return Policy</h5>
                            <p class="text-muted mb-0">No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/guarantee-certificate.png') }}" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Money Back Guarantee</h5>
                            <p class="text-muted mb-0">Within 5 business days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/24-hours-support.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">24 X 7 Service</h5>
                            <p class="text-muted mb-0">Online service for customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3">Browse by</h3>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
            @foreach($categories as $category)
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <!-- Check if category has images and display them, otherwise show default image -->
                        @if($category->images->isNotEmpty())
                            @foreach($category->images as $image)
                                <img src="{{ URL::asset($image->image_url) }}" alt="{{ $category->name }}"
                                    class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-0">
                            @endforeach
                        @else
                            <img src="{{ URL::asset('build/images/users/user-dummy-img.jpg') }}" alt="Default Image"
                                class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-4">
                        @endif
                        <div class="mt-4">
                            <a href="{{ route('subcategories.show', $category->id) }}">
                                <h5 class="mb-2 fs-15">{{ $category->name }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">Latest Arrival</h3>
                        <p class="text-muted fs-15">What you wear is how you present yourself to the world, especially
                            today, when human contacts are so quick. Fashion is instant language.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper latest-slider mt-4" dir="ltr">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-wrapper pt-5">

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-dark-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-9.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Petronas Baseball Cap</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">3.2 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$125.00 <span
                                                        class="text-muted fs-12"><del>$200.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-warning-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-10.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Mens Black T Shirt</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">4.3 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$150.00 <span
                                                        class="text-muted fs-12"><del>$300.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-11.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Blue Checked Slim Fit Shirt
                                                </h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">2.3 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$135.00 <span
                                                        class="text-muted fs-12"><del>$523.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-danger-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-12.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Onyx SmartGRID Chair Red</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">3.5 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$99.00 <span
                                                        class="text-muted fs-12"><del>$129.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card overflow-hidden">
                                    <div class="bg-secondary-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-14.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="product-details">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Nursing Chair Steam Grey</h6>
                                            </a>
                                            <div class="mt-3">
                                                <span class="float-end">2.3 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                <h5 class="mb-0">$632.00 <span
                                                        class="text-muted fs-12"><del>$721.00</del></span></h5>
                                            </div>
                                            <div class="mt-3">
                                                <a href="shop-cart" class="btn btn-primary btn-sm"><i
                                                        class="mdi mdi-cart me-1"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">What Customers Say About Us</h3>
                        <p class="text-muted fs-15">A customer is a person or business that buys goods or services from
                            another business. Customers are crucial because they generate revenue.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper testi-slider">
                        <div class="swiper-wrapper my-5">

                            <div class="swiper-slide">
                                <div class="client-box m-1">
                                    <div class="client-desc p-4 border rounded">
                                        <p class="mb-0 fs-16">" Clean design. document is just a fews page but i should be
                                            like this cuz when looking on laravel project it well prepare. everytime i need
                                            a component or something else. easy to find. "</p>
                                    </div>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center mt-4 pt-1">
                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                                class="avatar-sm rounded">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-2 fs-16">George Obrien</h5>
                                                <p class="text-muted mb-0">Velzon User</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-5">
                                <div class="client-box m-1">
                                    <div class="client-desc p-4 border rounded">
                                        <p class="mb-0 fs-16">" Thank you for supporting CakePHP 4, we have purchased the
                                            template because of this support, please push forward more integration "</p>
                                    </div>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center mt-4 pt-1">
                                            <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt=""
                                                class="avatar-sm rounded">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-2 fs-16">Chadwick A. Scott</h5>
                                                <p class="text-muted mb-0">Velzon User</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="client-box m-1">
                                    <div class="client-desc p-4 border rounded">
                                        <p class="mb-0 fs-16">" We have used your other templates as well and seems it's
                                            amazing with the design and code quality. Wish you best for the future updates.
                                            Keep updated you will be #1 in near future. "</p>
                                    </div>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center mt-4 pt-1">
                                            <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt=""
                                                class="avatar-sm rounded">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-2 fs-16">Tommy Moreno</h5>
                                                <p class="text-muted mb-0">Skote User</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-5">
                                <div class="client-box m-1">
                                    <div class="client-desc p-4 border rounded">
                                        <p class="mb-0 fs-16">" The template is very complete as an admin panel and was
                                            well written in a way that makes it easy to use. "</p>
                                    </div>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center mt-4 pt-1">
                                            <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt=""
                                                class="avatar-sm rounded">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-2 fs-16">Mary Atkinson</h5>
                                                <p class="text-muted mb-0">Velzon User</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>
                </div>
            </div>

            <div
                class="row row-cols-lg-5 row-cols-md-3 row-cols-1 text-center justify-content-center align-items-center g-3 mt-5 pt-lg-5">
                <div class="col">
                    <div class="client-images">
                        <a href="#!">
                            <img src="{{ URL::asset('build/images/clients/paypal.svg') }}" alt="client-img"
                                class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-images">
                        <a href="#!">
                            <img src="{{ URL::asset('build/images/clients/walmart.svg') }}" alt="client-img"
                                class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-images">
                        <a href="#!">
                            <img src="{{ URL::asset('build/images/clients/spotify.svg') }}" alt="client-img"
                                class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-images">
                        <a href="#!">
                            <img src="{{ URL::asset('build/images/clients/shopify.svg') }}" alt="client-img"
                                class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-images">
                        <a href="#!">
                            <img src="{{ URL::asset('build/images/clients/lenovo.svg') }}" alt="client-img"
                                class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- START BLOG -->
    <section class="section bg-light bg-opacity-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">Shop insights & feeds</h3>
                        <p class="text-muted fs-15">Shopping Insights gives marketers a 360-degree view of a product's
                            popularity. Harnessing search volume data for more than 7,000 popular products (and counting)
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="entry-meta">
                                <a href="#!" class="text-muted">12 <i class="mdi mdi-like"></i> Like</a>
                                <span class="text-muted mx-1">|</span>
                                <a href="#!" class="text-muted">10 Comments</a>
                            </div>
                            <div class="blog-date bg-body-secondary rounded">
                                <h4 class="mb-0">15</h4>
                                <p class="text-muted mt-1">April</p>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h5 class="fs-17 lh-base">Society Pass Turns to Stripe to Simplify Checkout</h5>
                                </a>
                                <p class="text-muted fs-15 mt-2">Southeast Asian eCommerce ecosystem Society Pass (SoPa)
                                    says it has integrated Stripe’s financial infrastructure solutions onto its platform.
                                </p>
                                <a href="#!" class="link-effect link-info">Continue Reading <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        <img src="{{ URL::asset('build/images/small/img-8.jpg') }}" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="entry-meta">
                                <a href="#!" class="text-muted">24 <i class="mdi mdi-like"></i> Like</a>
                                <span class="text-muted mx-1">|</span>
                                <a href="#!" class="text-muted">32 Comments</a>
                            </div>
                            <div class="blog-date bg-body-secondary rounded">
                                <h4 class="mb-0">23</h4>
                                <p class="text-muted mt-1">April</p>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h5 class="fs-17 lh-base">Integrating Crypto Payment to Ecommerce</h5>
                                </a>
                                <p class="text-muted fs-15 mt-2"> To start accepting Bitcoin on your eCommerce site, simply
                                    integrate a BTC payment processor into your store. Many major eCommerce providers. </p>
                                <a href="#!" class="link-effect link-info">Continue Reading <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="entry-meta">
                                <a href="#!" class="text-muted">48 <i class="mdi mdi-like"></i> Like</a>
                                <span class="text-muted mx-1">|</span>
                                <a href="#!" class="text-muted">15 Comments</a>
                            </div>
                            <div class="blog-date bg-body-secondary rounded">
                                <h4 class="mb-0">31</h4>
                                <p class="text-muted mt-1">April</p>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h5 class="fs-17 lh-base">Etsy Is a High-Flier Among E-Commerce Stocks</h5>
                                </a>
                                <p class="text-muted fs-15 mt-2">E-commerce stocks soared to record-high valuations during
                                    the pandemic. However, now that economies have reopened during the pandemic.</p>
                                <a href="#!" class="link-effect link-info">Continue Reading <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="#!" class="btn btn-soft-primary btn-hover">View More Articles <i
                        class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- START INSTAGRAM -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center g-0">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-3">Follow Us In Instagram</h3>
                        <p class="text-muted fs-15">The most common approach that peoples use to say follow me on Instagram
                            is by sending a direct message.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative">
            <div class="row g-0 mt-5">
                <div class="col">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-1.jpg') }}" class="img-fluid" alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-2.jpg') }}" class="img-fluid" alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col d-none d-md-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-3.jpg') }}" class="img-fluid" alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col d-none d-md-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-4.jpg') }}" class="img-fluid" alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-5.jpg') }}" class="img-fluid" alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="insta-img">
                        <a href="#!" class="stretched-link">
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-6.jpg') }}" class="img-fluid" alt="">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="insta-lable text-center">
                <a href="#!" class="btn btn-primary btn-hover">
                    <i class="ph-instagram-logo align-middle me-1"></i> Follow In Instagram
                </a>
            </div>
        </div>
    </section>
    <!-- END INSTAGRAM -->
@endsection
@section('scripts')
    <!-- isotope-layout -->
    <script src="{{ URL::asset('build/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Countdown js -->
    <script src="{{ URL::asset('build/js/pages/coming-soon.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/landing-index.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
