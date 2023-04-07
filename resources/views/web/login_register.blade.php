@extends('layouts.web')

@section('meta_description', '')

@section('title', 'Login-Register')

@section('styles')
@endsection

@section('content')
    <div class="wrapper box-layout">
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login-register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap  pr-lg-50">
                                <h2>Sign In</h2>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                               required autofocus/>
                                    </div>
                                    @error('email')
                                    <div class="single-input-item">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="single-input-item">
                                        <input type="password" name="password" placeholder="Enter your Password"
                                               required/>
                                    </div>
                                    @error('password')
                                    <div class="single-input-item">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @error('validation')
                                    <div class="single-input-item">
                                        <p style="color: red">{{ $message }}</p>
                                    </div>
                                    @enderror
                                    <div class="single-input-item">
                                        <div
                                            class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           value="{{old('rememberMe')}}" name="remember"
                                                           id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button type="submit" class="sqr-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap mt-md-34 mt-sm-34">
                                <h2>Sing up</h2>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="text" name="name" placeholder="Full Name" required/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" name="email" placeholder="Enter your Email" required/>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" name="password" placeholder="Enter your Password"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" name="password_confirmation"
                                                       placeholder="Repeat your Password" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button type="submit" class="sqr-btn">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
@endsection

@section('scripts')
@endsection
