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
                                                <li class="breadcrumb-item"><a href="{{route('assign.outlet.create')}}">Assign Outlets</a></li>
                                                <li class="breadcrumb-item"><a href="{{route('outlet.create')}}">Add Outlets</a></li>
                                                
                                                <li class="breadcrumb-item active" aria-current="page"><span>List of Saved Assigned Outlets</span></li>
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
                                        @include('partials._message')
                                        <form action="{{route('assign.outlet.save')}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="outlet_id" required>
                                                        <option value=""> -- Select The Outlet -- </option>
                                                        <option value=""> </option>
                                                        @foreach($outlet as $outDetails)
                                                            <option value="{{$outDetails->outlet_id}}">
                                                                {{$outDetails->outlet_name}} 
                                                            </option>
                                                        @endforeach
                                                    <select>
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                    @if ($errors->has('outlet_id'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('outlet_id') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <select class="form-control" name="distributor_id" required>
                                                            <option value=""> -- Select The Distributor -- </option>
                                                            <option value=""> </option>
                                                            @foreach($distributor as $disDetails)
                                                                <option value="{{$disDetails->distributor_id}}">{{$disDetails->name}} </option>
                                                            @endforeach
                                                        <select>
                                                        {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                        @if ($errors->has('distributor_id'))
                                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                                <div class="alert-icon contrast-alert">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                                <div class="alert-message">
                                                                    <span><strong>Error!</strong> {{ $errors->first('distributor_id') }} !</span>
                                                                </div>
                                                            </div>
                                                        @endif  
                                                    </div>
                                                <div class="col-md-4" align="center">
                                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" 
                                                    role="status" name="add-category">ASSIGN THE OUTLET 
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
                                        @if(count($assign_outlet)<1)
                                            <p style="color: red" align="center"> The List is Empty</p>
                                        @else
                                            {{-- <h4 class="card-title">List of Saved Products Categories</h4> --}}
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Outlet Name</th>
                                                            <th> Distributor Name </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody><?php
                                                        $y=1; ?>
                                                        @foreach($assign_outlet as $assign_outleta)
                                                            <tr>
                                                            
                                                                <td>{{$y}}
                                                                    <a href="" class="btn btn-danger"><i class="far fa-trash-o"></i>
                                                                    Delete</a>
                                                                    <a href="" class="btn btn-primary"><i class="far fa-pencil"></i> 
                                                                    Edit</a>  
                                                                </td>
                                                                <td>
                                                                    @foreach(OutletDetails($assign_outleta->outlet_id) as $outlet_details)
                                                                        {{$outlet_details->outlet_name}}
                                                                    @endforeach
                                                                    </td> 
                                                                <td>
                                                                    @foreach(ProductDistributor($assign_outleta->distributor_id) as $distributor_details)
                                                                        {{$distributor_details->name}}
                                                                    @endforeach
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
