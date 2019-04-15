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
                                                <li class="breadcrumb-item"><a href="{{route('outlet.create')}}">Add Outlets</a></li>
                                                <li class="breadcrumb-item"><a href="{{route('assign.outlet.create')}}">Assign Outlets</a></li>
                                                <li class="breadcrumb-item active" aria-current="page"><span>List of Saved Outlets</span></li>
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
                                        <form action="{{route('outlet.save')}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" required
                                                     placeholder="Please Enter The Outlet Name" required name="outlet_name">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                    @if ($errors->has('outlet_name'))
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <div class="alert-icon contrast-alert">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="alert-message">
                                                                <span><strong>Error!</strong> {{ $errors->first('outlet_name') }} !</span>
                                                            </div>
                                                        </div>
                                                    @endif  
                                                </div>
                                                <div class="col-md-4" align="center">
                                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" 
                                                    role="status" name="add-category">ADD THE OUTLET 
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
                                        @if(count($outlet)<1)
                                            <p style="color: red" align="center"> The List is Empty</p>
                                        @else
                                            {{-- <h4 class="card-title">List of Saved Products Categories</h4> --}}
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Outlet Name</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody><?php
                                                        $y=1; ?>
                                                        @foreach($outlet as $outlets)
                                                            <tr>
                                                            
                                                                <td>{{$y}}
                                                                    <a href="" class="btn btn-danger"><i class="far fa-trash-o"></i>
                                                                    Delete</a>
                                                                    <a href="" class="btn btn-primary"><i class="far fa-pencil"></i> 
                                                                    Edit</a>  
                                                                </td>
                                                                <td>{{$outlets->outlet_name}}</td> 
                                                                
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
