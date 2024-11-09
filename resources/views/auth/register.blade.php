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

    <div class="col-lg-6">
        <div class="p-lg-5 p-4">
            <div>
                <h5 class="text-primary">Register Account</h5>
                <p class="text-muted">Get your Free Velzon account now.</p>
            </div>

            <div class="mt-4">
                <form class="needs-validation" novalidate action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="useremail" value="{{ old('email') }}"
                            placeholder="Enter email address" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Please enter email
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="username" value="{{ old('name') }}"
                            placeholder="Enter username" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Please enter username
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password-input">Password</label>
                        <div class="position-relative auth-pass-inputgroup">
                            <input type="password" name="mat_khau" class="form-control pe-5 password-input" value="{{ old('mat_khau') }}"
                                onpaste="return false" placeholder="Enter password" id="password-input"
                                aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            @error('mat_khau')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            <div class="invalid-feedback">
                                Please enter password
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#"
                                class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                    </div>

                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                        <h5 class="fs-13">Password must contain:</h5>
                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-success w-100" type="submit">Sign Up</button>
                    </div>

                    <div class="mt-4 text-center">
                        <div class="signin-other-title">
                            <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i
                                    class="ri-facebook-fill fs-16"></i></button>
                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i
                                    class="ri-google-fill fs-16"></i></button>
                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i
                                    class="ri-github-fill fs-16"></i></button>
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i
                                    class="ri-twitter-fill fs-16"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Already have an account ? <a href="auth-signin-cover.html"
                        class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
            </div>
        </div>
    </div>
@endsection
