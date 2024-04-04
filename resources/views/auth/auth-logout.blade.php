@extends("auth.layouts.master")

@section('title')
    logout
@endsection

@section('content')

    <div class="row g-0">
        <div class="col-xxl-3 col-lg-4 col-md-5">
            <div class="auth-full-page-content d-flex p-sm-5 p-4">
                <div class="w-100">
                    <div class="d-flex flex-column h-100">
                        <div class="mb-4 mb-md-5 text-center">
                            <a href="index.html" class="d-block auth-logo">
                                <img src="images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">Minia</span>
                            </a>
                        </div>
                        <div class="auth-content my-auto">
                            <div class="text-center">
                                <div class="avatar-xl mx-auto">
                                    <div class="avatar-title bg-soft-light text-primary h1 rounded-circle">
                                        <i class="bx bxs-user"></i>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <h5>You are Logged Out</h5>
                                    <p class="text-muted font-size-15">Thank you for using <span class="fw-semibold text-dark">Minia</span></p>
                                    <div class="mt-4">
                                        <a href="{{ route('auth.auth-login') }}" class="btn btn-primary w-100 waves-effect waves-light">Sign In</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="mt-5 text-center">
                                <p class="text-muted mb-0">Don't have an account ? <a href="{{ route('auth.auth-register') }}"
                                        class="text-primary fw-semibold"> Signup</a> </p>
                            </div>
                        </div>
                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Minia   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end auth full page content -->
        </div>

        @include('auth.layouts.carousel')
   </div>
   
@endsection
                    