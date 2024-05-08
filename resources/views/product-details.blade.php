@extends('layouts.master')
@section('title')
    Product Details
@endsection
@section('css')
    <!-- extra css -->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="ecommerce-about"
        style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">Product Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
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

    <section class="section">
        <div class="container">
            <div class="row gx-2">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div thumbsSlider="" class="swiper productSwiper mb-3 mb-lg-0">
                                <div class="swiper-wrapper">
                                    @foreach($product->images as $image)
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ URL::asset($image->image_url) }}" alt="{{ $product->name }}"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-10">
                            <div class="bg-light rounded-2 position-relative ribbon-box overflow-hidden">
                                <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                                    <span class="trending-ribbon-text">Trending</span> <i
                                        class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                                </div>
                                <div class="swiper productSwiper2">
                                    <div class="swiper-wrapper">
                                        @foreach($product->images as $image)
                                        <div class="swiper-slide ">
                                            <img src="{{ URL::asset($image->image_url) }}" alt="{{ $product->name }}"
                                                class="img-fluid" />
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next bg-transparent"></div>
                                    <div class="swiper-button-prev bg-transparent"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="col-lg-12">
                            <div class="mt-3">
                                <div class="hstack gap-2">
                                    <button type="submit" class="btn btn-success btn-hover w-100">
                                        <i class="bi bi-basket2 me-2"></i> Add To Cart
                                    </button>
                                    <button type="button" class="btn btn-primary btn-hover w-100">
                                        <i class="bi bi-cart2 me-2"></i> Buy Now
                                    </button>
                                    <button class="btn btn-soft-danger custom-toggle btn-hover" data-bs-toggle="button"
                                        aria-pressed="true"> <span class="icon-on"><i class="ri-heart-line"></i></span>
                                        <span class="icon-off"><i class="ri-heart-fill"></i></span> </button>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
                <div class="col-lg-5 ms-auto">
                    <div class="ecommerce-product-widgets mt-4 mt-lg-0">
                        <div class="mb-4">
                            <div class="d-flex gap-3 mb-2">
                                <div class="fs-15 text-warning">
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-fill align-bottom"></i>
                                    <i class="ri-star-half-fill align-bottom"></i>
                                </div>
                                <span class="fw-medium"> (50 Review)</span>
                            </div>
                            <h4 class="lh-base mb-1">{{ $product->name }}</h4>
                            <p class="text-muted mb-4">{{ $product->description }} <a href="javascript:void(0);"
                                    class="link-info">Read More</a></p>
                            <h5 class="fs-24 mb-4">KD {{ $product->price_per_day }}<span class="fs-14 ms-2 text-danger">Per day</span></h5>
                            
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="fs-15 mb-0">Quantity:</h5>
                                <div class="input-step ms-2">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity1" value="1" min="0"
                                        max="100" readonly="" name="quantity">
                                    <button type="button" class="plus">+</button>
                                </div>
                                <input type="date" name="start_date" required>
                                <input type="date" name="end_date" required>
                            </div>
                            </form>
                            <h6 class="fs-14 text-muted mb-3">What's included</h6>
                            <ul class="list-unstyled vstack gap-2">
                            @foreach($product->included_items as $item)
                                <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>{{ $item }}</li>
                            @endforeach
                            </ul>
                            <h6 class="fs-14 text-muted mb-3">Not included</h6>
                            <ul class="list-unstyled vstack gap-2">
                            @foreach($product->not_included_items as $item)
                                <li class=""><i class="bi bi-dash-circle-dotted me-2 align-middle text-danger"></i>{{ $item }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                Additional information
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                Ratings & Reviews
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                            <ul class="list-unstyled vstack gap-2">
                            @foreach($product->additional_information as $item)
                                <li class=""><i class="bi bi-circle me-2 align-middle text-danger"></i>{{ $item }}</li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane" id="profile1" role="tabpanel">

                            <div>
                                <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center mt-4">
                                    <div class="flex-shrink-0">
                                        <h5 class="fs-15 mb-3 fw-medium">Total Rating's</h5>
                                        <h2 class="fw-bold mb-3">10.14k</h2>
                                        <p class="text-muted mb-0">Growth in reviews on this year</p>
                                    </div>
                                    <hr class="vr">
                                    <div class="flex-shrink-0">
                                        <h5 class="fs-15 mb-3 fw-medium">Average Rating</h5>
                                        <h2 class="fw-bold mb-3">5.6 <span class="fs-16 align-middle text-warning ms-2">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-fill"></i>
                                            </span></h2>
                                        <p class="text-muted mb-0">Average rating on this year</p>
                                    </div>
                                    <hr class="vr">
                                    <div class="flex-shrink-0 w-xl">
                                        <div class="row align-items-center g-3 align-items-center mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>5</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">2758</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>4</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">1063</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>3</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">997</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-2">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>2</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-secondary" role="progressbar"
                                                            style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">227</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3">
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13"><i
                                                            class="ri-star-fill text-warning me-1 align-bottom"></i>2</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div>
                                                    <h6 class="mb-0 text-muted fs-13">408</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4" data-simplebar style="max-height: 350px">
                                    <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <div class="mb-2 fs-12">
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-line text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-line text-warning align-bottom"></i></span>
                                                        </div>
                                                        <h6 class="mb-0">Donald Risher</h6>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted"><i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16,
                                                        2022</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="lh-base fs-15">Design Quality</h5>
                                                <p class="mb-0">
                                                    " This is an incredible framework worth so much in the right hands!
                                                    Nowhere else are you going to get so much flexibility and great code for
                                                    a few dollars. Highly recommend purchasing today! Like right now! "
                                                </p>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h6 class="mb-2">Jansh Brown</h6>
                                                                <p class="mb-0 text-muted fs-13">Admin</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="mb-0 text-muted"><i
                                                                    class="ri-calendar-event-fill me-2 align-middle"></i>Aug
                                                                16, 2022</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        Thank You
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <div class="mb-2 fs-12">
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                        </div>
                                                        <h6 class="mb-0">Richard Smith</h6>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted"><i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Dec 10,
                                                        2022</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="lh-base fs-15">Feature Availability</h5>
                                                <p class="mb-0">
                                                    " Hello everyone, I would like to suggest here two contents that you
                                                    could create. Course pages and blog pages. In them you could insert the
                                                    listing and management of courses and listing and management of blog.
                                                    The theme is perfect, one of the best purchases I've ever made. "
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border-bottom border-bottom-dashed mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <div class="mb-2 fs-12">
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <span> <i
                                                                    class="ri-star-line text-warning align-bottom"></i></span>
                                                        </div>
                                                        <h6 class="mb-0">Pauline Moll</h6>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted"><i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16,
                                                        2022</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="lh-base fs-15">Design Quality</h5>
                                                <p class="mb-0">
                                                    "We have used your other templates as well and seems it's amazing with
                                                    the design and code quality. Wish you best for the future updates. Keep
                                                    updated you will be #1 in near future. "
                                                </p>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h6 class="mb-2">Jansh Brown</h6>
                                                                <p class="mb-0 text-muted fs-13">Admin</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="mb-0 text-muted"><i
                                                                    class="ri-calendar-event-fill me-2 align-middle"></i>Aug
                                                                16, 2022</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        Thank You
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h5 class="fs-18">Add a Review</h5>
                                    <div>
                                        <form action="#" class="form">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="fs-14">Your rating:</span>
                                                <div class="ms-3">
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span class="fs-14"> <i
                                                            class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" name="your-name" placeholder="Title"
                                                    type="text">
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" name="your-comment" placeholder="Enter your comments & reviews" rows="4"></textarea>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-primary btn-hover" type="submit"
                                                    value="Submit">Send Review <i
                                                        class="ri-send-plane-2-line align-bottom ms-1"></i></button>
                                            </div>
                                        </form>
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
    </section>

    <div class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb-4">You might be interested in</h4>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row gy-3">
                <div class="col-lg-4">
                    <a href="product-grid-right" class="card mb-3 card-animate stretched-link">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <img src="{{ URL::asset('build/images/ecommerce/img-5.jpg') }}"
                                    class="img-fluid rounded-start h-100 object-fit-cover" alt="...">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body h-100 d-flex flex-column">
                                    <h6 class="fs-16">Women's T-shirts</h6>
                                    <p class="card-text text-muted">Min. 50% off</p>

                                    <div class="mt-auto">
                                        <div class="btn btn-soft-secondary btn-sm">Shop Now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <a href="product-grid-right" class="card mb-3 card-animate stretched-link">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <img src="{{ URL::asset('build/images/ecommerce/img-2.jpg') }}"
                                    class="img-fluid rounded-start h-100 object-fit-cover" alt="...">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body h-100 d-flex flex-column">
                                    <h4 class="fs-16">Men's Fashion</h4>
                                    <p class="card-text text-muted">Min. 20% off</p>

                                    <div class="mt-auto">
                                        <div class="btn btn-soft-primary btn-sm">Shop Now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="product-grid-right" class="card mb-3 card-animate stretched-link">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <img src="{{ URL::asset('build/images/ecommerce/img-3.jpg') }}"
                                    class="img-fluid rounded-start h-100 object-fit-cover" alt="...">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body h-100 d-flex flex-column">
                                    <h4 class="card-title">Women Footwear</h4>
                                    <p class="card-text text-muted">Up to 40-50% off</p>

                                    <div class="mt-auto">
                                        <div class="btn btn-soft-info btn-sm">Shop Now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h4 class="flex-grow-1 mb-0">Similar Products</h4>
                        <div class="flex-shrink-0">
                            <a href="product-grid-defualt" class="link-effect link-secondary">All Products <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-12.png') }}" alt=""
                                style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                    data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes10" id="product-color-102"><label
                                        class="avatar-xxs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-102"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-103"><label
                                        class="avatar-xxs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-103"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-104"><label
                                        class="avatar-xxs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-104"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-105"><label
                                        class="avatar-xxs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-105"></label></li>
                            </ul>
                            <a href="product-details">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Carven Lounge Chair Red</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$209.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="shop-cart" class="btn btn-primary w-100 add-btn"><i
                                        class="mdi mdi-cart me-1"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-7.png') }}" alt=""
                                style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                    data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <div class="avatar-xxs mb-4">
                                    <div class="avatar-title bg-light text-muted rounded cursor-pointer"><i
                                            class="ri-error-warning-line"></i></div>
                                </div>
                                <a href="#!">
                                    <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Innovative education book
                                    </h6>
                                </a>
                                <div class="mt-2">
                                    <span class="float-end">4.7 <i
                                            class="ri-star-half-fill text-warning align-bottom"></i></span>
                                    <h5 class="mb-0">$96.26</h5>
                                </div>
                                <div class="mt-3">
                                    <a href="shop-cart" class="btn btn-primary w-100 add-btn"><i
                                            class="mdi mdi-cart me-1"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-3.png') }}" alt=""
                                style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                    data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                            <div class="avatar-xs label">
                                <div class="avatar-title bg-danger rounded-circle fs-11">20%</div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes11" id="product-color-112"><label
                                        class="avatar-xxs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-112"></label></li>
                                <li><input type="radio" name="sizes11" id="product-color-113"><label
                                        class="avatar-xxs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-113"></label></li>
                            </ul>
                            <a href="product-details">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Ninja Pro Max Smartwatch</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">3.5 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$247.27 <span class="text-muted fs-12"><del>$309.09</del></span></h5>
                            </div>
                            <div class="mt-3">
                                <a href="shop-cart" class="btn btn-primary w-100 add-btn"><i
                                        class="mdi mdi-cart me-1"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-2.png') }}" alt=""
                                style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                    data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes12" id="product-color-122"><label
                                        class="avatar-xxs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-122"></label></li>
                            </ul>
                            <a href="product-details">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Opinion Striped Round Neck
                                    Green T-shirt</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$126.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="shop-cart" class="btn btn-primary w-100 add-btn"><i
                                        class="mdi mdi-cart me-1"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end section-->
    </section>

    <section class="section bg-light bg-opacity-25"
        style="background-image: url('build/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span>
                            off all Products</p>
                        <h1 class="lh-base text-capitalize mb-3">Stay home & get your daily needs from our shop</h1>
                        <p class="fs-15 mb-4 pb-2">Start you'r daily shopping with <a href="#!"
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
                    <div>
                        <img src="{{ URL::asset('build/images/ecommerce/subscribe.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="position-relative py-5">
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
                <!--end col-->
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
                <!--end col-->
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
                <!--end col-->
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
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
@section('scripts')
    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/product-details.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
