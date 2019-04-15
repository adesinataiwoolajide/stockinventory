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
                                        <form action="{{route('variant.save')}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="category_id" required>
                                                        <option value=""> -- Select The Variant Category -- </option>
                                                        <option value=""> </option>
                                                        @foreach($category as $categories)
                                                            <option value="{{$categories->category_id}}">{{$categories->category_name}} </option>
                                                        @endforeach
                                                    <select>
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
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
                                                    <select class="form-control" name="variant_name" required>
                                                        <option value=""> -- Select The Variant Name -- </option>
                                                        <option value=""> </option>
                                                        <option value="Cap seal (Small and Big)">Cap seal (Small and Big) </option>
                                                        <option value="Celotapes">Celotapes </option>
                                                        <option value="Cooking Gas (kg)">Cooking Gas (kg) </option>
                                                        <option value="Diesel (litres)">Diesel (litres) </option>
                                                        <option value="Face Mask">Face Mask </option>
                                                        <option value="Gloves">Gloves </option>
                                                        <option value="GY"> GY</option>
                                                        <option value="GB"> GB</option>
                                                        <option value="GYGN"> GYGN</option>
                                                        <option value="Label">Label </option>
                                                        <option value="Nurse Cap">Nurse Cap </option>
                                                        <option value="Nylon">Nylon </option>
                                                        <option value="Unidentified"> Unidentified</option>
                                                        <option value="Water (litres)">Water (litres) </option> 
                                                    <select>
                                                    @if ($errors->has('variant_name'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('variant_name') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="variant_size" required>
                                                        <option value=""> -- Select The Variant Size -- </option>
                                                        <option value=""> </option>
                                                        <option value="20 Litres"> 20 Ltrs</option>
                                                        <option value="25 Litres"> 25 Ltrs</option>
                                                        <option value="Null">Null </option>

                                                    <select>
                                                    @if ($errors->has('variant_size'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('variant_size') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="col-md-12" align="center">
                                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" 
                                                    role="status" >ADD THE PRODUCT VARIANT 
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
                                        @if(count($variant)<1)
                                            <p style="color: red" align="center"> The List is Empty</p>
                                        @else
                                            {{-- <h4 class="card-title">List of Saved Products Categories</h4> --}}
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Category Name</th>
                                                            <th>Variant Name</th>
                                                            <th>Size</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody><?php
                                                        $y=1; ?>
                                                        @foreach($variant as $variants)
                                                            <tr>
                                                                <td>{{$y}}
                                                                    <a href="" class="btn btn-danger"><i class="far fa-trash-o"></i>
                                                                    Delete</a>
                                                                    <a href="" class="btn btn-primary"><i class="far fa-pencil"></i> 
                                                                    Edit</a>  
                                                                </td>
                                                                <td>
                                                                    @foreach(ProductCategory($variants->category_id) as $categories)
                                                                        {{$categories->category_name}}
                                                                    @endforeach
                                                                </td> 
                                                                <td>{{$variants->variant_name}}</td> 
                                                                <td>{{$variants->variant_size}}</td> 
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
