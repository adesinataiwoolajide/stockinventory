@extends('layouts.login')

@section('content')
 <div id="wrapper">

    <div class="card card-authentication1 mx-auto my-5">
        
        <div class="card-body">
            <div class="card-content p-2">
                
                <div class="text-center">
                   
                    <img src="{{asset('styling/assets/images/inventory.jpg')}}" 
                    style="height: 100px;" alt="logo icon">
                    
                </div>

                <div class="card-title text-uppercase text-center py-3">
                     LOGIN WITH YOUR DETAILS
                </div>
                @include('partials._message');
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <input type="email" id="exampleInputUsername" 
                            class="form-control form-control-rounded" 
                            name="email" value="{{ old('email') }}" 
                            required autofocus placeholder="Enter User Name">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <input  id="exampleInputPassword" type="password"
                             class="form-control form-control-rounded" 
                             name="password" required placeholder="Enter Your Password">

                            <div class="form-control-position">
                                  <i class="icon-lock"></i>
                            </div>
                            
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row mr-0 ml-0">
                        <div class="form-group col-6">
                            <div class="icheck-material-primary">
                               <input type="checkbox" id="user-checkbox" checked="" />
                               <label for="user-checkbox">Remember me</label>
                            </div>
                        </div>
                        {{-- <div class="form-group col-6 text-right">
                            <a href="{{route('guest.reset')}}">Reset Password</a>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign In</button><hr>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
@endsection
