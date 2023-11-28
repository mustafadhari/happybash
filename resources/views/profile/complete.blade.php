@extends('layouts.master')
@section('title')
    Complete profile
@endsection
@section('content')
<div class="w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="auth-card mx-lg-3">
                        <div class="card border-0 mb-0">
                            <div class="card-header bg-primary border-0">
                                <div class="row">
                                    <div class="col-lg-4 col-3">
                                        <img src="{{ URL::asset('images/auth/img-1.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-8 col-9">
                                        <h1 class="text-white text-capitalize lh-base fw-lighter">Let's get started with
                                            Toner Store</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted fs-15">Get your free Toner account now</p>
                                <div class="p-2">
                                    <form class="needs-validation" id="complete-profile-form" novalidate enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label for="street" class="form-label">Street <span
                                                        class="text-danger">*</span></label>
                                                <input id="street" type="text"
                                                    class="form-control @error('street') is-invalid @enderror"
                                                    name="street" value="{{ old('street') }}" required
                                                    autocomplete="street" placeholder="Enter your street">
                                                @error('street')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="city" class="form-label">City <span
                                                        class="text-danger">*</span></label>
                                                <input id="city" type="text"
                                                    class="form-control @error('city') is-invalid @enderror"
                                                    name="city" value="{{ old('city') }}" required
                                                    autocomplete="city" placeholder="Enter your city">
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="state" class="form-label">City <span
                                                        class="text-danger">*</span></label>
                                                <input id="state" type="text"
                                                    class="form-control @error('state') is-invalid @enderror"
                                                    name="state" value="{{ old('state') }}" required
                                                    autocomplete="state" placeholder="Enter your state">
                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="postal_code" class="form-label">City <span
                                                        class="text-danger">*</span></label>
                                                <input id="postal_code" type="text"
                                                    class="form-control @error('postal_code') is-invalid @enderror"
                                                    name="postal_code" value="{{ old('postal_code') }}" required
                                                    autocomplete="postal_code" placeholder="Enter your postal_code">
                                                @error('postal_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="avatar" class="form-label">Avatar <span
                                                        class="text-danger">*</span></label>
                                                <input id="avatar" type="file"
                                                    class="form-control @error('avatar') is-invalid @enderror"
                                                    name="avatar" value="{{ old('avatar') }}" required
                                                    autocomplete="avatar" placeholder="Enter your avatar">
                                                @error('avatar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-4 col-md-12">
                                            <button class="btn btn-primary w-100" type="submit">Complete Profile</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Already have an account ? <a href="{{ route('login') }}"
                                            class="fw-semibold text-primary text-decoration-underline"> Sign in </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                </div>
            <!--end row-->
        </div>
        <!--end container -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Toner. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            Themesbrand
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script>
    // Get the form element
    var form = document.getElementById('complete-profile-form');

    // Listen for the form submission event
    form.addEventListener('submit', function(event) {
        // Prevent the form from being submitted normally
        event.preventDefault();

        // Create a new FormData object from the form
        var formData = new FormData(form);

        // Make an AJAX request to the profile completion API endpoint
        fetch('/api/profile/complete', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.redirected) {
            // If the response is a redirect, navigate to the new URL
            window.location.href = response.url;
        } else {
            // Otherwise, parse the response as JSON and handle it as before
            return response.json();
        }
    })
    .then(data => {
        // Handle the response data here
        console.log(data);
    })
    .catch(error => {
        // Handle any errors here
        console.error(error);
    });
    });
</script>
@endsection