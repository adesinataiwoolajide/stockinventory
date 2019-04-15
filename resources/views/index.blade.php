@extends("layouts.app")
    @section("content")

        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                @include('partials._message');
                <div class="bg-image" style="background-image: url('assets/media/photos/photo6@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Sign In Block -->
                                    <div class="block block-themed block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <h3 class="block-title">Sign In</h3>
                                            {{-- <div class="block-options">
                                                <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">
                                                    Forgot Password?
                                                </a>
                                                <a class="btn-block-option" href="op_auth_signup.html" data-toggle="tooltip" data-placement="left" title="New Account">
                                                    <i class="fa fa-user-plus"></i>
                                                </a>
                                            </div> --}}
                                        </div>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                                <h1 class="mb-2">Inventory</h1>
                                                <p>Welcome, please login with your details.</p>

                                                <!-- Sign In Form -->
                                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js 
                                                    which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                                <form class="js-validation-signin" action="{{route('admin.login')}}" method="POST">
                                                    @csrf
                                                    <div class="py-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="login-username" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-alt form-control-lg" id="login-password" name="login-password" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                                <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 col-xl-5">
                                                            <button type="submit" class="btn btn-block btn-primary">
                                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END Sign In Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Sign In Block -->
                                </div>
                            </div>
                        </div>
                        {{-- <div class="content content-full font-size-sm text-muted text-center">
                            <strong></strong> &copy; <span data-toggle="year-copy">2018</span>
                        </div> --}}
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
    @endsection