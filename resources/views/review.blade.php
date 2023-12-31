@extends('layouts.master')
@section('title')
    Customer Review
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
                        <h4 class="text-white mb-0">Product Reviews</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Review</li>
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
            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-10.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Scott Barber</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">Really don't regret buying it. great job done the design is
                                simply fabulous love your job.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-8.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Daniel Owen</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">High theme quality. Very good support, they spent almost an
                                hour remotely to fix a problem. I hope this theme will have a long term support.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Patrick Kelly</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">Very good support and also code works brilliantly and well
                                documented</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-1.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Victoria Le</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">Thank you for supporting CakePHP 4, we have purchased the
                                template because of this support, please push forward more integration</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Daniel Mejia</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">Gracias por las correciones que hiceron para esta version 1.4.
                                Ahora definitivamente la calificacion debe ser de 5 estrellas. Excelente trabajo muchachos!
                            </p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Nicole Davis</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">We have used your other templates as well and seems it's
                                amazing with the design and code quality. Wish you best for the future updates. Keep updated
                                you will be #1 in near future.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-5.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Jessica Thomas</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">This is an incredible framework worth so much in the right
                                hands! Nowhere else are you going to get so much flexibility and great code for a few
                                dollars. Highly recommend purchasing today! Like right now!</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Elizabeth Padilla</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">Good design & good support. Go for it.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ URL::asset('images/users/avatar-7.jpg') }}" alt="" class="avatar-sm rounded">
                            <h5 class="mb-2 mt-3">Alexis Davidson</h5>
                            <div class="text-warning mb-3">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                            <p class="mb-0 text-muted fs-15">great product. look forward to the vue and react versions</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section"
        style="background-image: url('images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-secondary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h2 class="text-white text-capitalize mb-0 flex-grow-1">Let us know how we can help you</h2>
                        <div class="flex-shrink-0">
                            <a href="contact-us" class="btn btn-darken-secondary btn-hover"><i
                                    class="ph-phone align-middle me-1"></i> Contact Us</a>
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
    <!-- Masonry plugin -->
    <script src="{{ URL::asset('libs/masonry-layout/masonry.pkgd.min.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('js/frontend/menu.init.js') }}"></script>
@endsection
