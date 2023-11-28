@extends('layouts.modern-fashion')
@section('title')
    Trend Fashion
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="trend-fashion-home">
        <div class="container-fluid container-custom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="home-widgets card card-height-100 border-0 rounded-end-0"
                        style="background-image: url('images/fashion/img-3.png');background-size: cover;">
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-height-100 border-0 rounded-0 bg-info-subtle">
                        <div class="card-body px-4 px-lg-5 text-center d-flex align-items-center">
                            <div>
                                <h3 class="text-capitalize lh-base mb-2">The World Most suitable <span
                                        class="ff-secondary">Fashion</span> Collection</h3>
                                <p class="fs-16 mb-4">Fashion Academy recommends 10 to 12 styles for your first collection.
                                    As for how many items to produce within each style frame, test out the waters first.</p>
                                <button type="button" class="btn btn-info btn-hover rounded-0">Shop Now <i
                                        class="bi bi-bag align-baseline ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card home-widgets card-height-100 border-0 rounded-start-0"
                        style="background-image: url('images/fashion/img-5.png');background-size: cover;">
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end home-->

    <!--start collection-->
    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <p class="fs-20">Popular Collection</p>
                        <h2 class="title fw-normal text-capitalize"><span
                                class="section-title d-inline-block section-title-primary">Premium <span
                                    class="fw-semibold">Categories</span> for Fashion</h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-5">
                    <div class="category-widgets-main card card-height-100 border-0 shadow-none bg-light btn-6">
                        <div class="effect h-100">
                            <img src="{{ URL::asset('images/fashion/img-02.png') }}" alt=""
                                class="img-fluid h-100 object-fit-cover">
                            <div class="widgets-wrapper position-absolute text-center">
                                <a href="#!" class="btn btn-dark w-md rounded-0 stretched-link">Woman Fashion</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="{{ URL::asset('images/fashion/product/img-02.png') }}" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="#!" class="btn btn-dark w-md rounded-0 stretched-link">Man's</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="{{ URL::asset('images/fashion/product/img-03.png') }}" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="#!" class="btn btn-dark w-md rounded-0 stretched-link">Accessories</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="{{ URL::asset('images/fashion/product/img-12.png') }}" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="#!" class="btn btn-dark w-md rounded-0 stretched-link">Jacket &
                                            Sweater</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="{{ URL::asset('images/fashion/product/img-01.png') }}" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="#!" class="btn btn-dark w-md rounded-0 stretched-link">Tops</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end collection-->

    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="title fw-normal"><span>Top Picks On <span class="fw-semibold">Fashion</span></h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper top-Product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card product-widget border-0 card-animate">
                                    <div class="card-body p-2">
                                        <div class="position-relative p-4 bg-light">
                                            <img src="{{ URL::asset('images/fashion/product/img-15.png') }}" alt=""
                                                class="img-fluid product-img-main">
                                            <img src="{{ URL::asset('images/fashion/product/img-14.png') }}" alt=""
                                                class="img-fluid product-img-2">
                                            <ul class="product-menu list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="rounded-circle bookmark"
                                                        data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-details" class="rounded-circle"><i
                                                            class="bi bi-eye"></i></a>
                                                </li>
                                            </ul>
                                            <div class="product-btn mx-auto">
                                                <div class="bg-body p-2">
                                                    <div class="d-flex flex-wrap justify-content-center gap-1">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Blue"
                                                            data-bs-original-title="Blue">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Yellow"
                                                            data-bs-original-title="Yellow">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Success"
                                                            data-bs-original-title="Success">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-content-center gap-1 mt-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="S"
                                                            data-bs-original-title="S">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                S
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="M"
                                                            data-bs-original-title="M">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                M
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="L"
                                                            data-bs-original-title="L">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                L
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="XL"
                                                            data-bs-original-title="XL">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                XL
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#!">
                                                <h6 class="text-capitalize fs-16 text-truncate">Urbanic Women Fit And Flare
                                                    Black Dress</h6>
                                            </a>
                                            <h6 class="fw-normal mb-3 fs-16">$97.49 <small
                                                    class="text-decoration-line-through fs-14 text-muted">$265.37</small>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card product-widget border-0 card-animate">
                                    <div class="card-body p-2">
                                        <div class="position-relative p-4 bg-light">
                                            <img src="{{ URL::asset('images/fashion/product/img-13.png') }}" alt=""
                                                class="img-fluid product-img-main">
                                            <img src="{{ URL::asset('images/fashion/product/img-11.png') }}" alt=""
                                                class="img-fluid product-img-2">
                                            <ul class="product-menu list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="rounded-circle bookmark"
                                                        data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-details" class="rounded-circle"><i
                                                            class="bi bi-eye"></i></a>
                                                </li>
                                            </ul>
                                            <div class="product-btn mx-auto">
                                                <div class="bg-body p-2">
                                                    <div class="d-flex flex-wrap justify-content-center gap-1">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Blue"
                                                            data-bs-original-title="Blue">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Success"
                                                            data-bs-original-title="Success">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-content-center gap-1 mt-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="S"
                                                            data-bs-original-title="S">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                S
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="L"
                                                            data-bs-original-title="L">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                L
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="XL"
                                                            data-bs-original-title="XL">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                XL
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#!">
                                                <h6 class="text-capitalize fs-16 text-truncate">Imported Fabulous Women Top
                                                    And Bottom Set</h6>
                                            </a>
                                            <h6 class="fw-normal mb-3 fs-16">$59.99 <small
                                                    class="text-decoration-line-through fs-14 text-muted">$249.99</small>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card product-widget border-0 card-animate">
                                    <div class="card-body p-2">
                                        <div class="position-relative p-4 bg-light">
                                            <img src="{{ URL::asset('images/fashion/product/img-02.png') }}" alt=""
                                                class="img-fluid product-img-main">
                                            <img src="{{ URL::asset('images/fashion/product/img-09.png') }}" alt=""
                                                class="img-fluid product-img-2">
                                            <ul class="product-menu list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="rounded-circle bookmark"
                                                        data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-details" class="rounded-circle"><i
                                                            class="bi bi-eye"></i></a>
                                                </li>
                                            </ul>
                                            <div class="product-btn mx-auto">
                                                <div class="bg-body p-2">
                                                    <div class="d-flex flex-wrap justify-content-center gap-1">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Blue"
                                                            data-bs-original-title="Blue">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Yellow"
                                                            data-bs-original-title="Yellow">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Success"
                                                            data-bs-original-title="Success">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#!">
                                                <h6 class="text-capitalize fs-16 text-truncate">Like Style Women pink
                                                    Shoulder Bag</h6>
                                            </a>
                                            <h6 class="fw-normal mb-3 fs-16">$249.99</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card product-widget border-0 card-animate">
                                    <div class="card-body p-2">
                                        <div class="position-relative p-4 bg-light">
                                            <img src="{{ URL::asset('images/fashion/product/img-09.png') }}" alt=""
                                                class="img-fluid product-img-main">
                                            <img src="{{ URL::asset('images/fashion/product/img-02.png') }}" alt=""
                                                class="img-fluid product-img-2">
                                            <ul class="product-menu list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="rounded-circle bookmark"
                                                        data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-details" class="rounded-circle"><i
                                                            class="bi bi-eye"></i></a>
                                                </li>
                                            </ul>
                                            <div class="product-btn mx-auto">
                                                <div class="bg-body p-2">
                                                    <div class="d-flex flex-wrap justify-content-center gap-1">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Blue"
                                                            data-bs-original-title="Blue">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Yellow"
                                                            data-bs-original-title="Yellow">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Success"
                                                            data-bs-original-title="Success">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-content-center gap-1 mt-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="S"
                                                            data-bs-original-title="S">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                S
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="M"
                                                            data-bs-original-title="M">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                M
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="L"
                                                            data-bs-original-title="L">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                L
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="XL"
                                                            data-bs-original-title="XL">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                XL
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#!">
                                                <h6 class="text-capitalize fs-16 text-truncate">Elanhood Full Sleeve Solid
                                                    Women Jacket</h6>
                                            </a>
                                            <h6 class="fw-normal mb-3 fs-16">$120.32 <small
                                                    class="text-decoration-line-through fs-14 text-muted">$348.24</small>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card product-widget border-0 card-animate">
                                    <div class="card-body p-2">
                                        <div class="position-relative p-4 bg-light">
                                            <img src="{{ URL::asset('images/fashion/product/img-11.png') }}" alt=""
                                                class="img-fluid product-img-main">
                                            <img src="{{ URL::asset('images/fashion/product/img-04.png') }}" alt=""
                                                class="img-fluid product-img-2">
                                            <ul class="product-menu list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="rounded-circle bookmark"
                                                        data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-details" class="rounded-circle"><i
                                                            class="bi bi-eye"></i></a>
                                                </li>
                                            </ul>
                                            <div class="product-btn mx-auto">
                                                <div class="bg-body p-2">
                                                    <div class="d-flex flex-wrap justify-content-center gap-1">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Blue"
                                                            data-bs-original-title="Blue">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Yellow"
                                                            data-bs-original-title="Yellow">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Success"
                                                            data-bs-original-title="Success">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-content-center gap-1 mt-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="S"
                                                            data-bs-original-title="S">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                S
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="M"
                                                            data-bs-original-title="M">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                M
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="L"
                                                            data-bs-original-title="L">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                L
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="XL"
                                                            data-bs-original-title="XL">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                XL
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#!">
                                                <h6 class="text-capitalize fs-16 text-truncate">Nike MAG Back To The Future
                                                </h6>
                                            </a>
                                            <h6 class="fw-normal mb-3 fs-16">$149.57</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card product-widget border-0 card-animate">
                                    <div class="card-body p-2">
                                        <div class="position-relative p-4 bg-light">
                                            <img src="{{ URL::asset('images/fashion/product/img-08.png') }}" alt=""
                                                class="img-fluid product-img-main">
                                            <img src="{{ URL::asset('images/fashion/product/img-10.png') }}" alt=""
                                                class="img-fluid product-img-2">
                                            <ul class="product-menu list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="rounded-circle bookmark"
                                                        data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-details" class="rounded-circle"><i
                                                            class="bi bi-eye"></i></a>
                                                </li>
                                            </ul>
                                            <div class="product-btn mx-auto">
                                                <div class="bg-body p-2">
                                                    <div class="d-flex flex-wrap justify-content-center gap-1">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Blue"
                                                            data-bs-original-title="Blue">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Yellow"
                                                            data-bs-original-title="Yellow">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="Success"
                                                            data-bs-original-title="Success">
                                                            <button type="button"
                                                                class="btn avatar-xxs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-content-center gap-1 mt-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="S"
                                                            data-bs-original-title="S">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                S
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="M"
                                                            data-bs-original-title="M">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                M
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="L"
                                                            data-bs-original-title="L">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                L
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" aria-label="XL"
                                                            data-bs-original-title="XL">
                                                            <button type="button"
                                                                class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-14">
                                                                XL
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#!">
                                                <h6 class="text-capitalize fs-16 text-truncate">Girls Printed Shorts</h6>
                                            </a>
                                            <h6 class="fw-normal mb-3 fs-16">$124.64</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>

    <!--start CTA-->
    <section class="section bg-light py-5">
        <div class="container-fluid container-custom">
            <div class="row align-items-center gy-3">
                <div class="col-lg-6 text-center">
                    <p class="fs-18 mb-4">Deal of the day</p>
                    <h1 class="display-6 text-capitalize mb-4">New Collection in this <span class="fw-medium">Winter
                            Season</span> Sales</h1>
                    <p id="done"></p>
                    <ul
                        class="countdown d-flex justify-content-center gap-3 flex-wrap gap-lg-5 list-unstyled text-center fs-17">
                        <li><span class="fs-36 fw-medium" id="days">0</span> Days</li>
                        <li><span class="fs-36 fw-medium" id="hours">0</span> Hours</li>
                        <li><span class="fs-36 fw-medium" id="minutes">0</span> Minutes</li>
                        <li><span class="fs-36 fw-medium" id="seconds">0</span> Seconds</li>
                    </ul>
                    <div class="mt-4 pt-3">
                        <button type="button" class="btn btn-info rounded-0 w-lg btn-hover">Get 15% Off <i
                                class="bi bi-arrow-right align-baseline ms-1"></i></button>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-5 ms-auto">
                    <img src="{{ URL::asset('images/fashion/img-4.png') }}" alt="" class="img-fluid">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end CTA-->

    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <p class="fs-20">Top sale in this week</p>
                        <h2 class="title fw-normal text-capitalize">You are in <span class="fw-semibold">new
                                arrivals</span></h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1" id="productList">
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-02.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-17.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">URBAN Men Winter Stylish Jacket</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$87.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Success" data-bs-original-title="Success">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-05.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-01.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Elanhood Full Sleeve Solid Women Jacket
                                    </h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$120.32 <small
                                        class="text-decoration-line-through fs-14 text-muted">$348.24</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-dark opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/products/img-6.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-03.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">American Tourister Blue Polyester
                                        Backpack</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$64.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Red" data-bs-original-title="Red">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/products/img-19.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-11.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Nike MAG Back to the Future</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$149.57</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-08.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-18.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Girls Printed Shorts</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$124.64</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Green" data-bs-original-title="Green">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Purple" data-bs-original-title="Purple">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-12.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-09.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Stylish Collar Full Sleeve T-shirt</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$241.99 <small
                                        class="text-decoration-line-through fs-14 text-muted">119.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Success" data-bs-original-title="Success">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-11.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-13.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Style Women A-line dark Blue Dress</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$120.32</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-dark opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-13.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-11.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Imported Fabulous Women Top And Bottom
                                        Set</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$59.99 <small
                                        class="text-decoration-line-through fs-14 text-muted">$249.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Red" data-bs-original-title="Red">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-15.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-14.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Urbanic Women Fit And Flare Black Dress
                                    </h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$97.49 <small
                                        class="text-decoration-line-through fs-14 text-muted">265.37</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Green" data-bs-original-title="Green">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-01.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-09.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Like Style Women pink Shoulder Bag</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$249.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Pink" data-bs-original-title="Pink">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-05.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-01.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Elanhood Full Sleeve Solid Women
                                        Jacket</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$120.32</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-dark opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-06.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-03.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">American Tourister Blue Polyester
                                        Backpack</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$64.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Red" data-bs-original-title="Red">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-07.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-04.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Nike MAG Back to the Future</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$149.57</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-01.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-03.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Fancy Clothing Casual Solid Women Pink
                                        Top</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$64.80</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Pink" data-bs-original-title="Pink">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('images/fashion/product/img-02.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('images/fashion/product/img-01.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">URBAN Men Winter Stylish Jacket</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">$87.99 <small
                                        class="text-decoration-line-through fs-14 text-muted">119.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Success" data-bs-original-title="Success">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="text-center mt-4">
                <button type="button" class="btn btn-info rounded-0 btn-load" id="productLoadMore">
                    <span class="d-flex align-items-center">
                        <span class="flex-grow-1 me-2">
                            Load More
                        </span>
                        <span class="spinner-border flex-shrink-0" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                    </span>
                </button>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end product-->

    <!--start why Choose-->
    <section class="section py-0">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5 pb-3">
                        <h2 class="title fw-normal"><span>Why <span class="fw-semibold">Shop</span> with us?</h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>
                            <h5>Products Quality</h5>
                            <p class="text-muted mb-0">Product quality refers to how well a product satisfies customer
                                needs, serves its purpose and meets industry standards. </p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <h5>Fast & Free Shipping</h5>
                            <p class="text-muted mb-0">The cheapest way to ship a package will depend on factors such as
                                package size and weight, as well as distance and delivery speed.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <h5>Payment Security</h5>
                            <p class="text-muted mb-0">Payment security refers to providing rules, regulations, and
                                security measures to protect a customer or partner's privacy.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            </div>
                            <h5>Global Warehouse</h5>
                            <p class="text-muted mb-0">An international warehouse is a warehouse that's set up
                                internationally, typically located in a global trade Houston, or Hong Kong.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end why Choose-->

    <!--end newsletter-->
    <section class="section">
        <div class="container-fluid container-custom">
            <div class="card border-0 overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <img src="{{ URL::asset('images/fashion/cta.png') }}" alt=""
                            class="img-fluid h-100 object-fit-cover">
                    </div>
                    <!--end col-->
                    <div class="col-lg-7">
                        <div class="card-body bg-dark h-100 p-xxl-5">
                            <div class="p-4">
                                <p class="text-white opacity-75 text-uppercase fs-15">Limited Offers</p>
                                <h1 class="lh-base text-capitalize text-white mb-3">Subscribe to our newsletter to get
                                    updates to our latest Collection</h1>
                                <p class="text-white-50 mb-4 fs-15 pb-2">A newsletter introduction should tell the reader
                                    what they'll get out of reading the rest of the email or linked article.</p>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form action="#!">
                                            <div class="subscribe-input position-relative">
                                                <input type="email" class="form-control"
                                                    id="exampleFormControlInput1" placeholder="Enter your email">
                                                <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end newsletter-->

    <section class="section pt-0">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="fw-normal mb-3"><span>Instagram Shop by <span class="fw-semibold">@toner</span></h2>
                        <p class="text-muted fs-16 mb-0">Shop your favorites styles from Instagram.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row g-3">
                <div class="col-xxl-2 col-lg-3 col-md-6 d-none d-xxl-block">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Women Fashion"
                            data-bs-content="One or two brand names can look classy, but too many can detract from the sophistication you're going for.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('images/instgram/img-01.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Unique Fashion"
                            data-bs-content="A capsule collection is essentially a condensed version of a designer's vision">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('images/instgram/img-02.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Men's wear"
                            data-bs-content="Yours may consist of traditional pieces, such as tops, bottoms, and outerwear, or focus on a single product">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('images/instgram/img-03.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6 d-none d-xxl-block">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Sport wear"
                            data-bs-content="Typical sport-specific garments include tracksuits, shorts, T-shirts and polo shirts.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('images/instgram/img-04.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Women Fashion"
                            data-bs-content="One or two brand names can look classy, but too many can detract from the sophistication you're going for.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('images/instgram/img-05.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Footwear"
                            data-bs-content="Footwear refers to garments worn on the feet, which typically serves the purpose of protection against adversities.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('images/instgram/img-06.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
@endsection
@section('scripts')
    <!-- Swiper Js-->
    <script src="{{ URL::asset('libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main Dem init js-->
    <script src="{{ URL::asset('js/frontend/trend-fashion.init.js') }}"></script>

    <!-- menu init js -->
    <script src="{{ URL::asset('js/frontend/menu.init.js') }}"></script>
@endsection
