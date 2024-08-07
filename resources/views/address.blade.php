@extends('layouts.master')
@section('title')
    Address
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
                        <h4 class="text-white mb-0">Shipping Address</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Address</li>
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
    <!-- end page title -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div>
                        <h4 class="fs-18 mb-4">Select or add an address</h4>
                        <div class="row g-4" id="address-list">
                            <div class="col-lg-6">
                                <div>
                                    <div class="form-check card-radio">
                                        <input id="shippingAddress01" name="shippingAddress" type="radio"
                                            class="form-check-input" checked>
                                        <label class="form-check-label" for="shippingAddress01">
                                            <span class="mb-3 fw-semibold fs-14 d-block text-muted text-uppercase">Home
                                                Address</span>

                                            <span class="fs-16 mb-2 fw-semibold  d-block">Witney Blessington</span>
                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">144 Cavendish Avenue,
                                                Indianapolis, IN 46251</span>
                                            <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                        </label>
                                    </div>
                                    <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1 fs-13">
                                        <div>
                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                                data-bs-target="#addAddressModal"><i
                                                    class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                        </div>
                                        <div>
                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                                data-bs-target="#removeItemModal"><i
                                                    class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="form-check card-radio">
                                        <input id="shippingAddress02" name="shippingAddress" type="radio"
                                            class="form-check-input">
                                        <label class="form-check-label" for="shippingAddress02">
                                            <span class="mb-3 fw-semibold fs-12 d-block text-muted text-uppercase">Office
                                                Address</span>

                                            <span class="fs-14 mb-2 fw-semibold d-block">Edwin Adenike</span>
                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">2971 Westheimer Road,
                                                Santa Ana, IL 80214</span>
                                            <span class="text-muted fw-normal d-block">Mo. 123-456-7890</span>
                                        </label>
                                    </div>
                                    <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1 fs-13">
                                        <div>
                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                                data-bs-target="#addAddressModal"><i
                                                    class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                        </div>
                                        <div>
                                            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                                data-bs-target="#removeAddressModal"><i
                                                    class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="text-center p-4 rounded-3 border border-2 border-dashed">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-success-subtle text-success rounded-circle display-6">
                                            <i class="bi bi-house-add"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-16 mb-3">Add New Address</h5>
                                    <button type="button"
                                        class="btn btn-success btn-sm w-xs stretched-link addAddress-modal"
                                        data-bs-toggle="modal" data-bs-target="#addAddressModal">Add</button>
                                </div>
                            </div>
                        </div>




                        <div class="hstack gap-2 justify-content-start mt-3">
                            <button type="button" class="btn btn-hover btn-danger">Continue Shopping</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sticky-side-div mt-4 mt-xl-0">
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
                                                <td>Sub total :</td>
                                                <td class="text-end cart-subtotal">$0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                                <td class="text-end cart-discount">-$0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping charge :</td>
                                                <td class="text-end cart-shipping">$0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Tax (12.5%) : </td>
                                                <td class="text-end cart-tax">$0.00</td>
                                            </tr>
                                            <tr class="table-active">
                                                <th>Total (USD) :</th>
                                                <td class="text-end">
                                                    <span class="fw-semibold cart-total">$0.00</span>
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
                <!-- end col -->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <!-- Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addAddressModalLabel">Add New Address</h1>
                    <button type="button" id="addAddress-close" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createAddress-form" id="createAddress-form"
                        novalidate>
                        <input type="hidden" id="addressid-input" class="form-control" value="">
                        <div>
                            <div class="mb-3">
                                <label for="addaddress-Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="addaddress-Name" placeholder="Enter name"
                                    required>
                                <div class="invalid-feedback">Please enter a name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="addaddress-textarea" class="form-label">Address</label>
                                <textarea class="form-control" id="addaddress-textarea" placeholder="Enter address" rows="2" required></textarea>
                                <div class="invalid-feedback">Please enter address.</div>
                            </div>

                            <div class="mb-3">
                                <label for="addaddress-phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="addaddress-phone"
                                    placeholder="Enter phone no." required>
                                <div class="invalid-feedback">Please enter a phone no.</div>
                            </div>

                            <div class="mb-3">
                                <label for="state" class="form-label">Address Type</label>
                                <select class="form-select" id="state" required>
                                    <option value="Home">Home (7am to 10pm)</option>
                                    <option value="Office">Office (11am to 7pm)</option>
                                </select>
                                <div class="invalid-feedback">Please select address type.</div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="addNewAddress" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- remove address Modal -->
    <div id="removeAddressModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="close-removeAddressModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure You want to remove this address ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="remove-address" class="btn w-sm btn-danger">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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
                                <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript Now</button>
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
            <div class="row gy-4">
                <div class="col-xxl-3 col-md-6">
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
                <div class="col-xxl-3 col-md-6">
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
                <div class="col-xxl-3 col-md-6">
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
                <div class="col-xxl-3 col-md-6">
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
    <script src="{{ URL::asset('build/js/frontend/address.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
