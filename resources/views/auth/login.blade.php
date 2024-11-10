@extends('layouts.auth')
@section('title')
    Đăng Nhập
@endsection
@section('content')
    <div class="col-lg-6">
        <div class="p-lg-5 p-4 auth-one-bg h-100">
            <div class="bg-overlay"></div>
            <div class="position-relative h-100 d-flex flex-column">
                <div class="mb-4">
                    <a href="index.html" class="d-block">
                        <img src="{{ asset('assets/auth/images/logo-light.png') }}" alt="" height="18">
                    </a>
                </div>
                <div class="mt-auto">
                    <div class="mb-3">
                        <i class="ri-double-quotes-l display-4 text-success"></i>
                    </div>

                    <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner text-center text-white-50 pb-5">
                            <div class="carousel-item active">
                                <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization.
                                    Thanks very much! "</p>
                            </div>
                            <div class="carousel-item">
                                <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."
                                </p>
                            </div>
                            <div class="carousel-item">
                                <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization.
                                    Thanks very much! "</p>
                            </div>
                        </div>
                    </div>
                    <!-- end carousel -->
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-6">
        <div class="p-lg-5 p-4">
            <div>
                <h5 class="text-primary">Welcome Back !</h5>
            </div>

            <div class="mt-4">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên Đăng Nhập</label>
                        <input name="name" required="required" value="{{ old('name') }}" type="text"
                            class="form-control" id="username" placeholder="Enter username">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="float-end">
                            <a href="#" class="text-muted">Forgot password?</a>
                        </div>
                        <label class="form-label" for="password-input">Mật Khẩu</label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                            <input name="mat_khau" type="password" class="form-control pe-5 password-input"
                                placeholder="Enter password" id="password-input" value="{{ old('mat_khau') }}">
                            @error('mat_khau')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-success w-100" type="submit">Sign In</button>
                    </div>

                </form>
            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Don't have an account ? <a href="{{route('register')}}"
                        class="fw-semibold text-primary text-decoration-underline">Register</a> </p>
            </div>
        </div>
    </div>
    <!-- end col -->
@endsection
