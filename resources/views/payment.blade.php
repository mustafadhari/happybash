@extends('layouts.master')
@section('title')
    Payment
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="page-wrapper bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center d-flex align-items-center justify-content-between">
                        <h4 class="text-white mb-0">Payment</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
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

    <section class="section pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger text-center text-capitalize mb-4 fs-14">
                        save up to <b>30%</b> to <b>40%</b> off omg! just look at the <b>great deals</b>!
                    </div>
                </div>
            </div>
            <div class="row product-list">
                <div class="col-xl-8">
                    <h5 class="mb-0 flex-grow-1">Payment Selection</h5>

                    <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3 mt-4 nav-justified custom-nav"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active py-3" data-bs-toggle="tab" href="#paypal" role="tab">
                                <span class="d-block d-sm-none"><i class="ri-paypal-fill align-bottom"></i></span>
                                <span class="d-none d-sm-block"><i class="ri-paypal-fill align-bottom pe-2"></i>
                                    Paypal</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" href="#credit" role="tab">
                                <span class="d-block d-sm-none"><i class="ri-bank-card-fill align-bottom"></i></span>
                                <span class="d-none d-sm-block"> <i class="ri-bank-card-fill align-bottom pe-2"></i> Credit
                                    / Debit Card</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" href="#cash" role="tab">
                                <span class="d-block d-sm-none"><i class="ri-money-dollar-box-fill align-bottom"></i></span>
                                <span class="d-none d-sm-block"> <i class="ri-money-dollar-box-fill align-bottom pe-2"></i>
                                    Cash on Delivery</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="paypal" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-md-12">
                                            <label for="buyers-name" class="form-label">Buyers First Name</label>
                                            <input type="text" class="form-control" id="buyers-name"
                                                placeholder="Enter Name">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="buyers-last" class="form-label">Buyers Last Name</label>
                                            <input type="text" class="form-control" id="buyers-last"
                                                placeholder="Enter Last Name">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="buyers-address" class="form-label">Email Address</label>
                                            <input type="text" class="form-control" id="buyers-address"
                                                placeholder="Enter Email Address">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Select your paypal account type</label>
                                            <div class="d-flex gap-4 mt-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="formRadios"
                                                        id="formRadios1" checked>
                                                    <label class="form-check-label" for="formRadios1">
                                                        Domestic
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="formRadios"
                                                        id="formRadios2">
                                                    <label class="form-check-label" for="formRadios2">
                                                        International
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hstack gap-2 justify-content-end pt-4">
                                        <button type="button" class="btn btn-hover btn-primary"><i
                                                class="ri-paypal-fill align-bottom align-bottom pe-2"></i> Log into my
                                            Paypal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="credit" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-md-12">
                                            <label for="cc-name" class="form-label">Name on card</label>
                                            <input type="text" class="form-control" id="cc-name"
                                                placeholder="Enter name">
                                            <small class="text-muted">Full name as displayed on card</small>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="cc-number" class="form-label">Credit card number</label>
                                            <input type="text" class="form-control" id="cc-number"
                                                placeholder="xxxx xxxx xxxx xxxx">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="cc-expiration" class="form-label">Expiration</label>
                                            <input type="text" class="form-control" id="cc-expiration"
                                                placeholder="MM/YY">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="cc-cvv" class="form-label">CVV</label>
                                            <input type="text" class="form-control" id="cc-cvv" placeholder="xxx">
                                        </div>
                                    </div>

                                    <div class="hstack gap-2 justify-content-end pt-4">
                                        <button type="button" class="btn btn-hover w-md btn-primary">Pay<i
                                                class="ri-logout-box-r-line align-bottom ms-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="cash" role="tabpanel">

                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center py-3">
                                        <div class="avatar-md mx-auto mb-4">
                                            <div
                                                class="avatar-title bg-primary-subtle text-primary rounded-circle display-6">
                                                <i class="bi bi-cash"></i>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 mb-3">Cash on Delivery</h5>
                                        <p class="text-muted mt-3 mb-0 w-75 mx-auto">Integer vulputate metus eget purus
                                            maximus porttitor. Maecenas ut porta justo.
                                            Donec finibus nec nibh ut urna viverra semper.</p>
                                    </div>
                                    <div class="hstack gap-2 justify-content-end pt-3">
                                        <button type="button" class="btn btn-hover w-md btn-primary">Continue<i
                                                class="ri-logout-box-r-line align-bottom ms-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end col-->
                <div class="col-xl-4">
                    <div class="sticky-side-div">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3 fs-15">Have a <span class="fw-semibold">promo</span> code ?</h6>
                                </div>
                                <div class="hstack gap-3 px-3 mx-n3">
                                    <input class="form-control me-auto" type="text" placeholder="Enter coupon code"
                                        value="Toner15" aria-label="Add Promo Code here...">
                                    <button type="button" class="btn btn-primary w-xs">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0 fs-15">Order Summary</h5>
                            </div>
                            <div class="card-body pt-4">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless mb-0 fs-15">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total :</td>
                                                <td class="text-end cart-subtotal">$1361.97</td>
                                            </tr>
                                            <tr>
                                                <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                                <td class="text-end cart-discount">-$204.30</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge :</td>
                                                <td class="text-end cart-shipping">$65.00</td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Tax (12.5%) : </td>
                                                <td class="text-end cart-tax">$170.25</td>
                                            </tr>
                                            <tr class="table-active">
                                                <th>Total (USD) :</th>
                                                <td class="text-end">
                                                    <span class="fw-semibold cart-total">$1392.92</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                    <!-- end stickey -->
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h4 class="flex-grow-1 mb-0">Recently Viewed</h4>
                        <div class="flex-shrink-0">
                            <a href="#!" class="link-effect link-primary">All Products <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-xxl-3 col-lg-4 col-md-6">
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
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Carven Lounge Chair Red</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$209.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
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
                                    <a href="#!" class="btn btn-primary w-100 add-btn"><i
                                            class="mdi mdi-cart me-1"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
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
                                        class="avatar-xxs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-113"></label></li>
                            </ul>
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Ninja Pro Max Smartwatch</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">3.5 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$247.27 <span class="text-muted fs-12"><del>$309.09</del></span></h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
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
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Opinion Striped Round Neck
                                    Green T-shirt</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$126.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary btn-hover w-100 add-btn"><i
                                        class="mdi mdi-cart me-1"></i> Add To Cart</a>
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
        style="background-image: url('build/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span>
                            off all Products</p>
                        <h1 class="lh-base text-capitalize mb-3">Stay home & get your daily needs from our shop</h1>
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
                        <img src="{{ URL::asset('build/images/ecommerce/subscribe.png') }}" alt="" class="img-fluid">
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
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
