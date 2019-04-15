@extends('layouts.app')

@section('content')

    <div class="container-scroller">
        @include('layouts.top_nav')
        <div class="container-fluid page-body-wrapper">
            @include('partials._navigations')
    
            <div class="main-panel">
                <div class="content-wrapper"> 
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="template-demo">
                                            
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb breadcrumb-custom">
                                                <li class="breadcrumb-item"><a href="{{route('administrator.dashboard')}}">Home</a></li>
                                                <li class="breadcrumb-item"><a href="{{route('supplier.create')}}">Add Supplier</a></li>
                                                <li class="breadcrumb-item active" aria-current="page"><span>List of Saved Suppliers</span></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                          <!--x-editable starts-->
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-description"></p>
                                    <div class="template-demo">
                                        @include('partials._message');
                                        <form action="{{route('supplier.save')}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <div class="form-group col-md-4">
                                                    <input type="text" name="name" class="form-control" required placeholder="Enter The Supplier Name">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                    @if ($errors->has('name'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('name') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" name="phone_one" class="form-control" required placeholder="Enter The Phone One">
                                                    @if ($errors->has('phone_one'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('phone_one') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" name="phone_two" class="form-control" required placeholder="Enter The Phone Two">
                                                    @if ($errors->has('phone_two'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('phone_two') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="email" name="email" class="form-control" required placeholder="Enter The E-Mail">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                    @if ($errors->has('email'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('email') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" name="city" class="form-control" required placeholder="Enter The City">
                                                    @if ($errors->has('city'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('city') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="state" required>
                                                        <option value=""> -- Select The State -- </option>
                                                        
                                                        <option value=""> </option>
                                                        <option value="Abuja FCT">Abuja FCT</option>
                                                        <option value="Abia">Abia</option>
                                                        <option value="Adamawa">Adamawa</option>
                                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                                        <option value="Anambra">Anambra</option>
                                                        <option value="Bauchi">Bauchi</option>
                                                        <option value="Bayelsa">Bayelsa</option>
                                                        <option value="Benue">Benue</option>
                                                        <option value="Borno">Borno</option>
                                                        <option value="Cross River">Cross River</option>
                                                        <option value="Delta">Delta</option>
                                                        <option value="Ebonyi">Ebonyi</option>
                                                        <option value="Edo">Edo</option>
                                                        <option value="Ekiti">Ekiti</option>
                                                        <option value="Enugu">Enugu</option>
                                                        <option value="Gombe">Gombe</option>
                                                        <option value="Imo">Imo</option>
                                                        <option value="Jigawa">Jigawa</option>
                                                        <option value="Kaduna">Kaduna</option>
                                                        <option value="Kano">Kano</option>
                                                        <option value="Katsina">Katsina</option>
                                                        <option value="Kebbi">Kebbi</option>
                                                        <option value="Kogi">Kogi</option>
                                                        <option value="Kwara">Kwara</option>
                                                        <option value="Lagos">Lagos</option>
                                                        <option value="Nassarawa">Nassarawa</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Ogun">Ogun</option>
                                                        <option value="Ondo">Ondo</option>
                                                        <option value="Osun">Osun</option>
                                                        <option value="Oyo">Oyo</option>
                                                        <option value="Plateau">Plateau</option>
                                                        <option value="Rivers">Rivers</option>
                                                        <option value="Sokoto">Sokoto</option>
                                                        <option value="Taraba">Taraba</option>
                                                        <option value="Yobe">Yobe</option>
                                                        <option value="Zamfara">Zamfara</option>
                                                            
                                                    <select>
                                                    @if ($errors->has('state'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('state') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="country" required>
                                                        <option value=""> -- Select The Country -- </option>
                                                        <option value=""> </option>
                                                        <option value="20 Litres"> Nigeria</option>
                                                        <option value="25 Litres"> Others</option>
                                                    <select>
                                                    @if ($errors->has('country'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('country') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <textarea class="form-control" required name="address" placeholder="Enter The Supplier Address"></textarea>
                                                    @if ($errors->has('address'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('address') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="col-md-4" align="center">
                                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" 
                                                    role="status" name="add-category">ADD THE SUPPLIER 
                                                    </button>
                                                </div> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--x-editable ends-->
                        </div>
                    </div>  
                    
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <!--x-editable starts-->
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-description"></p>
                                    <div class="template-demo">
                                        @if(count($supplier)<1)
                                            <p style="color: red" align="center"> The List is Empty</p>
                                        @else
                                            {{-- <h4 class="card-title">List of Saved Products Categories</h4> --}}
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Supplier Name</th>
                                                            <th>Phone Number</th>
                                                            <th> Email </th>
                                                            
                                                            <th>Options </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody><?php
                                                        $y=1; ?>
                                                        @foreach($supplier as $suppliers)
                                                            <tr>
                                                            
                                                                <td>{{$y}}
                                                                    <a href="" class="btn btn-danger"><i class="far fa-trash-o"></i>
                                                                    Delete</a>
                                                                    <a href="" class="btn btn-primary"><i class="far fa-pencil"></i> 
                                                                    Edit</a>  
                                                                </td>
                                                                <td>{{$suppliers->supplier_name}}</td> 
                                                                <td>{{$suppliers->phone_one}}</td> 
                                                                <td>{{$suppliers->email}}</td> 
                                                                
                                                                <td>
                                                                        <a href="" class="btn btn-danger"><i class="far fa-trash-o"></i>
                                                                        Supplied Products</a>
                                                                        
                                                                </td> 
                                                            </tr><?php $y++; ?>
                                                        @endforeach
                                                        
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--x-editable ends-->
                        </div>
                    </div>  
                     
                </div>
                @include('partials._footer');
                
            </div>
        </div>
    </div>
</div>
@endsection
