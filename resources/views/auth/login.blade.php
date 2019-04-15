@extends("layouts.app")
    @section("content")
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{asset('design/images/inventory.jpg')}}" align="center" alt="logo">
                            </div>
                            @include('partials._message');
                            <h6 class="font-weight-light">Please Sign in to continue.</h6>
                            <form class="js-validation-signin" action="{{route('admin.login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" 
                                    id="exampleInputEmail1" placeholder="Username" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" 
                                    name="password" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" 
                                    ">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection