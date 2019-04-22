@extends('layouts.app')

@section('content')

    <div class="container-scroller">
        @include('layouts.top_nav')
        <div class="container-fluid page-body-wrapper">
            @include('partials._navigations')
    
            <div class="main-panel">
                <div class="content-wrapper"> 
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                          <!--x-editable starts-->
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-description"></p>
                                    <div class="template-demo">
                                        @include('partials._message')
                                        <form action="{{route('product.save')}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <div class="form-group col-md-4">
                                                    <input type="text" name="product_name" class="form-control" required 
                                                    placeholder="Enter The Product Name">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                    @if ($errors->has('product_name'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('product_name') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="supplier_id" required>
                                                        <option value=""> -- Select The Supplier --</option>\
                                                        <option value=""> </option>
                                                        @foreach($supplier as $supliers)
                                                            <option value="{{$suppliers->supplier_id}}">{{$suppliers->supplier_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('supplier_id'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('supplier_id') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="category_id" required>
                                                        <option value=""> -- Select The Category --</option>\
                                                        <option value=""> </option>
                                                        @foreach($category as $categories)
                                                            <option value="{{$categories->category_id}}">{{$categories->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('category_id'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('category_id') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="category_id" required>
                                                        <option value=""> -- Select The Variant --</option>\
                                                        <option value=""> </option>
                                                        @foreach($variant as $variants)
                                                            <option value="{{$variants->variant_id}}">{{$variants->variant_name}}</option>
                                                        @endforeach
                                                    </select>
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
                                                    <input type="number" name="quantity" class="form-control" required 
                                                    placeholder="Enter The Quantity">
                                                    @if ($errors->has('quantity'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('quantity') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" name="amount" class="form-control" required 
                                                    placeholder="Enter The Amount">
                                                    @if ($errors->has('amount'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('amount') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="ware_house_id" required>
                                                        <option value=""> -- Select The Ware House --</option>\
                                                        <option value=""> </option>
                                                        @foreach($warehouse as $warehouses)
                                                            <option value="{{$warehouses->ware_house_id}}">{{$warehouses->ware_house_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('ware_house_id'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('ware_house_id') }} !</span>
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
                                                
                                                <div class="col-md-12" align="center">
                                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" 
                                                    role="status" name="add-category">ADD THE PRODUCT 
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
                    
                </div>
                @include('partials._footer');
                
            </div>
        </div>
    </div>
</div>
@endsection
