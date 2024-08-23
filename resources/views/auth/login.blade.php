@extends('layouts.auth')
@section('title')
    {{ __('messages.login.login') }}
@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="{{ url('/') }}" class="image mb-7 mb-sm-10 image-medium">
                <img alt="Logo" src="http://127.0.0.1:8000/uploads/11/WhatsApp_Image_2024-07-08_at_13.24.10_e35029b9-removebg-preview.png" class="img-fluid object-contain">
            </a>
        </div>
        <div class="width-540">
            @include('flash::message')
            @include('layouts.errors')
        </div>
        <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7">{{ __('messages.login.sign_in') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-sm-7 mb-4">
                    <label for="email" class="form-label">
                        {{ __('messages.login.email').':' }}<span class="required"></span>
                    </label>
                    <input name="email" type="email" class="form-control" autofocus id="email" aria-describedby="emailHelp" required placeholder=" {{ __('messages.login.email') }}">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">{{ __('messages.login.password').':' }}<span
                                    class="required"></span></label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="link-info fs-6 text-decoration-none">
                                {{ __('messages.login.forget_your_password') }}
                            </a>
                        @endif
                    </div>
                    <div class="mb-3 position-relative">
                        <input name="password" type="password" class="form-control" id="password" required placeholder="{{ __('messages.login.password')}}" aria-label="Password" data-toggle="password">
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                                <i class="bi bi-eye-slash-fill"></i>
                            </span>
                    </div>
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" >
                    <label class="form-check-label" for="remember_me">{{ __('messages.login.remember_me') }}</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{ __('messages.login.login') }}</button>
                </div>
{{--                <div class="d-flex align-items-center mb-10 mt-4">--}}
{{--                    <span class="text-gray-700 me-2">{{ __('New Here?') }}</span>--}}
{{--                    <a href="{{ route('register') }}" class="link-info fs-6 text-decoration-none">--}}
{{--                        {{ __('Create an Account') }}--}}
{{--                    </a>--}}
{{--                </div>--}}
            </form>
        </div>
    </div>
@endsection

