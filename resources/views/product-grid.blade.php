@extends('layouts.master')
@section('title')
    Product Grid No Sidebar
@endsection
@section('css')
    <!-- extra css -->
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{ URL::asset('libs/nouislider/nouislider.min.css') }}">
@endsection
@section('content')
    <section class="ecommerce-about"
        style="background-image: url('images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">Product Grid No Sidebar</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                <li class="breadcrumb-item"><a href="#">Grid View</a></li>
                                <li class="breadcrumb-item active" aria-current="page">No Sidebar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <div class="position-relative section">
        <div class="container">
            <div id="col-3-layout">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row gy-4">
                                    <div class="col-xl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Category</label>
                                            <select class="form-control" name="select-category" id="select-category">
                                                <option value="">Select Category</option>
                                                <option value="Grocery">Grocery</option>
                                                <option value="Fashion">Fashion</option>
                                                <option value="Watches">Watches</option>
                                                <option value="Electronics">Electronics</option>
                                                <option value="Furniture">Furniture</option>
                                                <option value="Automotive Accessories">Automotive Accessories</option>
                                                <option value="Appliances">Appliances</option>
                                                <option value="Kids">Kids</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Price</label>
                                            <div class="pb-3">
                                                <div id="slider-hide" data-slider-color="info" class="mb-4"></div>
                                                <div class="formCost d-none gap-2 align-items-center">
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="minCost" value="0"> <span
                                                        class="fw-semibold text-muted">to</span> <input
                                                        class="form-control form-control-sm" type="text" id="maxCost"
                                                        value="1000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Rating</label>
                                            <select class="form-control" multiple name="select-rating" id="select-rating">
                                                <option value="">Select rating</option>
                                                <option value="4">4 & Above</option>
                                                <option value="3">3 & Above</option>
                                                <option value="2">2 & Above</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Discount</label>
                                            <select class="form-control" multiple name="select-discount"
                                                id="select-discount">
                                                <option value="">Select discount</option>
                                                <option value="50">50% or more</option>
                                                <option value="40">40% or more</option>
                                                <option value="30">30% or more</option>
                                                <option value="20">20% or more</option>
                                                <option value="10">10% or more</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center mb-4">
                            <div class="col-md-auto">
                                <div class="search-box">
                                    <input type="text" class="form-control" id="searchProductList" autocomplete="off"
                                        placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="d-flex gap-2 justify-content-md-end">
                                    <div class="flex-shrink-0">
                                        <label for="sort-elem" class="col-form-label">Sort By:</label>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <select class="form-select w-md" id="sort-elem">
                                            <option value="">All</option>
                                            <option value="low_to_high">Low to High</option>
                                            <option value="high_to_low">High to Low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="product-grid-right"></div>
                <div class="row" id="pagination-element">
                    <div class="col-lg-12">
                        <div
                            class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                            <div class="page-item">
                                <a href="javascript:void(0);" class="page-link" id="page-prev">Previous</a>
                            </div>
                            <span id="page-num" class="pagination"></span>
                            <div class="page-item">
                                <a href="javascript:void(0);" class="page-link" id="page-next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="search-result-elem">
                    <div class="col-lg-12">
                        <div class="text-center py-5">
                            <div class="avatar-lg mx-auto mb-4">
                                <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>

                            <h5>No matching records found</h5>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->
    </div>

    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h2 class="flex-grow-1 mb-0">Deals Of The Day</h2>
                        <div class="flex-shrink-0">
                            <a href="#!" class="link-effect link-success">All Deals <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="row">
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0 border-0">
                            <div class="gallery-product">
                                <img src="{{ URL::asset('images/ecommerce/img-5.jpg') }}" alt=""
                                    class="mx-auto d-block object-fit-cover">
                            </div>
                        </div>
                        <div class="content mx-4">
                            <div class="countdown-deals mb-3">
                                <div data-countdown="Oct 30, 2023" class="countdownlist"></div>
                            </div>
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">World's most expensive t-shirt
                                    </h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.9)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="text-secondary flex-grow-1 mb-0">$124.99 <span
                                            class="text-muted fs-12"><del>$354.99</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0 border-0">
                            <div class="gallery-product">
                                <img src="{{ URL::asset('images/ecommerce/instagram/img-2.jpg') }}" alt=""
                                    class="mx-auto d-block object-fit-cover">
                            </div>
                        </div>
                        <div class="content mx-4">
                            <div class="countdown-deals mb-3">
                                <div data-countdown="Oct 20, 2023" class="countdownlist"></div>
                            </div>
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Branded Perfumes For Men</h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.8)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="text-secondary flex-grow-1 mb-0">$56.00 <span
                                            class="text-muted fs-12"><del>$180.00</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0 border-0">
                            <div class="gallery-product">
                                <img src="{{ URL::asset('images/ecommerce/img-3.jpg') }}" alt=""
                                    class="mx-auto d-block object-fit-cover">
                            </div>
                        </div>
                        <div class="content mx-4">
                            <div class="countdown-deals mb-3">
                                <div data-countdown="Oct 15, 2023" class="countdownlist"></div>
                            </div>
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Dressive Women Beige Heels</h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.9)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="text-secondary flex-grow-1 mb-0">$124.99 <span
                                            class="text-muted fs-12"><del>$354.99</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
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

    <section class="section bg-light bg-opacity-25"
        style="background-image: url('images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span>
                            off all Products</p>
                        <h1 class="lh-base text-capitalize mb-3">Stay home &amp; get your daily needs from our shop</h1>
                        <p class="fs-15 mb-4 pb-2">Start You'r Daily Shopping with <a href="#!"
                                class="link-info fw-medium">Toner</a></p>
                        <form action="#!">
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" class="form-control rounded-pill" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary btn-hover rounded-pill">Subscript
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="mt-4 mt-lg-0">
                        <img src="{{ URL::asset('images/ecommerce/subscribe.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="position-relative py-5">
        <div class="container">
            <div class="row gy-3 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('images/ecommerce/fast-delivery.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                            <p class="text-muted mb-0">Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('images/ecommerce/returns.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">2 Days Return Policy</h5>
                            <p class="text-muted mb-0">No question ask.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('images/ecommerce/guarantee-certificate.png') }}" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Money Back Guarantee</h5>
                            <p class="text-muted mb-0">Within 5 business days</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('images/ecommerce/24-hours-support.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">24 X 7 Service</h5>
                            <p class="text-muted mb-0">Online service for customer</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>
@endsection
@section('scripts')
    <!-- nouisliderribute js -->
    <script src="{{ URL::asset('libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('libs/wnumb/wNumb.min.js') }}"></script>

    <!-- Product-grid init js -->
    <script src="{{ URL::asset('js/frontend/product-grid.init.js') }}"></script>

    <!-- Countdown js -->
    <script src="{{ URL::asset('js/pages/coming-soon.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('js/frontend/menu.init.js') }}"></script>
@endsection
