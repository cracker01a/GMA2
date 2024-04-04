@extends("auth.layouts.master")

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
                                <h5 class="mb-0">Reset Password</h5>
                                <p class="text-muted mt-2">Reset Password with Minia.</p>
                            </div>
                            <div class="alert alert-success text-center my-4" role="alert">
                                Enter your Email and instructions will be sent to you!
                            </div>
                            <form class="mt-4" action="index.html">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="mb-3 mt-4">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </form>

                            <div class="mt-5 text-center">
                                <p class="text-muted mb-0">Remember It ?  <a href="{{ route('auth.auth-login') }}"
                                        class="text-primary fw-semibold"> Sign In </a> </p>
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