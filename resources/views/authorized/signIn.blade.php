@extends('layout.secMaster')
@section('content')
    <div class="row">

        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
            <div class="card mt-3 mb-3">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 mb-3">

                            <h2>Sign In</h2>
                            <p>Enter your email and password to login</p>
                            @if (session()->has('errorMsg'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('errorMsg') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif
                        </div>
                        <form class="forms-sample" action="{{ route('admin-signin') }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    @error('email')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>
                                    @enderror
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    @error('password')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>
                                    @enderror
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                        <label class="form-check-label" for="form-check-default">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-4">
                                    <button class="btn btn-secondary w-100" type="submit" name="submit">SIGN
                                        IN</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-12 mb-4">
                            <div class="">
                                <div class="seperator">
                                    <hr>
                                    <div class="seperator-text"> <span>Or continue with</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <button class="btn  btn-social-login w-100 ">
                                    <img src="{{ url('public/src/assets/img/google-gmail.svg') }}" alt=""
                                        class="img-fluid">
                                    <span class="btn-text-inner">Google</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <button class="btn  btn-social-login w-100">
                                    <img src="{{ url('public/src/assets/img/github-icon.svg') }}" alt=""
                                        class="img-fluid">
                                    <span class="btn-text-inner">Github</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <button class="btn  btn-social-login w-100">
                                    <img src="{{ url('public/src/assets/img/twitter.svg') }}" alt=""
                                        class="img-fluid">
                                    <span class="btn-text-inner">Twitter</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="text-center">
                                <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);"
                                        class="text-warning">Sign Up</a></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
