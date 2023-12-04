@extends('layouts.master-auth')
@section('title')
    Register
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                <form action="{{ route('send-otp') }}" method="POST">
                        @csrf
                        @php
                        $countries = [
                            '+965' => 'Kuwait',
                            '+91' => 'India',
                        ];
                        @endphp
                        <div class="row mb-3">
                            <label for="country_code" class="col-md-4 col-form-label text-md-end">{{ __('Country:') }}</label>
                            <div class="col-md-6">
                                <select name="country_code" id="country_code">
                                    @foreach ($countries as $code => $country)
                                        <option value="{{ $code }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                                @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Enter your phone number') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send OTP
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script src="{{ URL::asset('build/js/pages/password-match.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
