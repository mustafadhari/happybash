@extends('layouts.master')
@section('title')
    Purchase Guide
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="term-condition bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-2">Purchase Guide</h1>
                        <p class="text-white-75 mb-0">Last Updated 24 Nov, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative">
        <div class="svg-shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440"
                height="120" preserveAspectRatio="none" viewBox="0 0 1440 120">
                <g mask="url(&quot;#SvgjsMask1039&quot;)" fill="none">
                    <rect width="1440" height="120" x="0" y="0" fill="var(--tb-primary)"></rect>
                    <path d="M 0,85 C 288,68.8 1152,20.2 1440,4L1440 120L0 120z" fill="var(--tb-body-bg)"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1039">
                        <rect width="1440" height="120" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>
    </div>

    <section class="section pt-0">
        <div class="container">
            <div class="card term-card mb-0">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="fs-18 mb-3">Account Registering</h5>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">In some instances, use of the Clients on Demand
                                    Website and Services may require that you disclose certain personal information for
                                    identification, including a unique email address and demographic information to
                                    register.</p>
                            </div>
                            <ul class="text-muted vstack gap-2 fs-15 ps-5" style="list-style-type: circle;">
                                <li>
                                    Name
                                </li>
                                <li>
                                    Age
                                </li>
                                <li>
                                    Date of birth
                                </li>
                                <li>
                                    Current career
                                </li>
                                <li>
                                    Mobile phone numbers
                                </li>
                                <li>
                                    Email address
                                </li>
                                <li>
                                    Hobbies & interests
                                </li>
                                <li>
                                    Social profiles
                                </li>
                            </ul>



                            <h5 class="fs-18 my-3">Select Product</h5>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">Products can be selected using through five
                                    modes of selection you choose from the product selection area titled Select product by:
                                </p>
                            </div>
                            <ul class="text-muted vstack gap-2 fs-15 ps-5" style="list-style-type: circle;">
                                <li>
                                    Search
                                </li>
                                <li>
                                    Items
                                </li>
                                <li>
                                    Product Selection Tree
                                </li>
                                <li>
                                    Clusters
                                </li>
                                <li>
                                    Aggregates
                                </li>
                            </ul>

                            <h5 class="fs-18 my-3">Confirm Order Content</h5>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">You’ve done the legwork to define your audience
                                    and their challenges. Now you want to put that information to use. Build the outline of
                                    your buyer’s guide based on pain points and lead with the solution.</p>
                            </div>

                            <h5 class="fs-18 my-3">Transaction Completed</h5>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">All transactions eventually end, either in a
                                    commit or a rollback. If a transaction commits, all work done through the resources
                                    enlisted over the course of that transaction is made permanent and visible to other
                                    transactions. If a transaction rolls back, none of the work done through any enlisted
                                    resources is made permanent.</p>
                            </div>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">prepare: The transaction instructs each
                                    resource to prepare itself for a commit. Each resource prepares by evaluating whether a
                                    commit succeeds or not, and responds with a vote to commit or roll back. If any resource
                                    responds with a rollback during the prepare phase, all resources are immediately rolled
                                    back and the transaction ends with a rollback. If a resource votes to commit, that
                                    resource must ensure that it can commit its work, even if a system failure occurs before
                                    the commit occurs.</p>
                            </div>

                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">commit : If all resources vote to commit, the
                                    transaction instructs each resource to commit. Resources cannot roll back at this point.
                                </p>
                            </div>
                            <div class="d-flex gap-2 mb-4">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">After a transaction commits or rolls back, it
                                    ends and is dissociated from its thread, leaving the thread without a transaction.</p>
                            </div>



                            <h5 class="fs-18 my-3">Accepted Credit Cards</h5>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">Taxes are calculated by your local bank and
                                    location.</p>
                            </div>
                            <ul class="text-muted vstack gap-2 fs-15 ps-5" style="list-style-type: circle;">
                                <li>
                                    Visa
                                </li>
                                <li>
                                    Mastercard
                                </li>
                                <li>
                                    American Express
                                </li>
                                <li>
                                    Discover
                                </li>
                            </ul>

                            <h5 class="fs-18 my-3">Download and Setup</h5>
                            <div class="d-flex gap-2 mb-2">
                                <div class="flex-shrink-0">
                                    <i class="ri-flashlight-fill text-primary fs-15"></i>
                                </div>
                                <p class="text-muted fs-15 flex-grow-1 mb-0">You can use the Content Installer application
                                    to locate, download, and install extra content from Library.</p>
                            </div>
                            <ul class="text-muted vstack gap-2 fs-15 ps-5 mb-0" style="list-style-type: circle;">
                                <li>
                                    Updated content on a regular basis
                                </li>
                                <li>
                                    Secure & hassle-free payment
                                </li>
                                <li>
                                    1-click checkout
                                </li>
                                <li>
                                    Easy access & smart user dashboard
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light bg-opacity-25"
        style="background-image: url('images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span> off
                            all Products</p>
                        <h1 class="lh-base text-capitalize mb-3">Stay home & get your daily needs from our shop</h1>
                        <p class="fs-15 mb-4 pb-2">Start You'r Daily Shopping with <a href="#!"
                                class="link-secondary fw-medium text-decoration-underline">Toner</a></p>
                        <form action="#!">
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" class="form-control rounded-pill" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary btn-hover rounded-pill">Subscript
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-4 mt-lg-0">
                        <img src="{{ URL::asset('images/ecommerce/subscribe.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative py-5">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
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
        <!--end container-->
    </section>
@endsection
@section('scripts')
    <!-- landing-index js -->
    <script src="{{ URL::asset('js/frontend/menu.init.js') }}"></script>
@endsection
