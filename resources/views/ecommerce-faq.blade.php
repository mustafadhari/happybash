@extends('layouts.master')
@section('title')
    Faqs
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="ecommerce-about bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">Frequently Asked Questions</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mt-4 fs-15">
                                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Faq's</li>
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
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Have any Questions ?</h3>
                        <p class="text-muted mb-4">You can ask anything you want to know about Feedback.</p>
                        <div class="hstack flex-wrap gap-2 justify-content-center">
                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                    class="ri-mail-line label-icon align-middle rounded-pill fs-16"></i> Email Us</button>
                            <button type="button" class="btn btn-info btn-label rounded-pill"><i
                                    class="ri-twitter-line label-icon align-middle rounded-pill fs-16"></i> Send Us
                                Tweet</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4 position-relative">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Order</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Payments</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Delivery</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-bag-dash"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Returns</a></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 justify-content-center mt-2">
                <div class="col-xxl-8 col-lg-8">
                    <div>
                        <div class="mb-4">
                            <h5 class="fs-16 mb-0 fw-semibold">General Questions</h5>
                        </div>

                        <div class="accordion accordion-border-box" id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseOne" aria-expanded="true"
                                        aria-controls="genques-collapseOne">
                                        What are FAQ questions?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        An FAQ page <b>(short for Frequently Asked Question page)</b> is a part of your
                                        website that provides answers to common questions, assuages concerns, and overcomes
                                        objections. It's a space where customers away from your sales-focused landing pages
                                        and homepage.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                        aria-controls="genques-collapseTwo">
                                        What is FAQ process?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        FAQ stands for Frequently Asked Questions. It's <b>your opportunity to communicate
                                            with the most important visitors to your website</b> – those who have begun the
                                        decision-making process about whether to do business with you can't fit elsewhere on
                                        their website.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseThree" aria-expanded="false"
                                        aria-controls="genques-collapseThree">
                                        What is the purpose of FAQ?
                                    </button>
                                </h2>
                                <div id="genques-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        The purpose of a FAQ is generally to provide information on frequent questions or
                                        concerns; however, the format is a useful means of organizing information, and text
                                        consisting of questions and their answers may thus be called a FAQ regardless.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseFour" aria-expanded="false"
                                        aria-controls="genques-collapseFour">
                                        What is an online FAQ?
                                    </button>
                                </h2>
                                <div id="genques-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        FAQs stand for frequently asked questions. It is one of the many crucial pages of
                                        your website. It gives your customers answers to recurring and common questions and
                                        addresses their concerns public product documentation that is released at the same
                                        time.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                </div>
                <!--end col-->
            </div>


        </div>
        <!--end container-->
    </section>

    <section class="section"
        style="background-image: url('images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-secondary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-sm-flex align-items-center">
                        <h2 class="text-white text-capitalize mb-0 flex-grow-1">Let us know how we can help you</h2>
                        <div class="flex-shrink-0 mt-3 mt-sm-0">
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
