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

                                <div class="avatar-lg mx-auto">
                                    <div class="avatar-title rounded-circle bg-light">
                                        <i class="bx bxs-envelope h2 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <div class="p-2 mt-4">
        
                                    <h4>Verify your email</h4>
                                    <p class="mb-5">Please enter the 4 digit code sent to <span class="fw-bold">example@abc.com</span></p>
        
                                    <form>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="1"
                                                        id="digit1-input">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="2"
                                                        id="digit2-input">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="3"
                                                        id="digit3-input">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="4"
                                                        id="digit4-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Confirm</button>
                                    </div>
        
                                    
                                </div>
        
                            </div>

                            <div class="mt-5 text-center">
                                <p class="text-muted mb-0">Didn't receive an email ? <a href="#"
                                    class="text-primary fw-semibold"> Resend </a> </p>
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