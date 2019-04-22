@extends('layouts.app')

@section('content')
    
<div class="clearfix"></div>
<div class="content-wrapper">
       <div class="container-fluid">
           <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('administrator.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{route('assign.outlet.create')}}">Assign An Outlets</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('outlet.create')}}">Outlets</a>
                    </li>   
                     
                    <li class="breadcrumb-item active" aria-current="page">Saved Assigned Outlets</li>
                 </ol>
               </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add The An Outlet</div>
                    <div class="card-body">
                        @include('partials._message')
                        <form action="{{route('assign.outlet.save')}}" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="form-group row ">
                                <div class="col-sm-4">
                                    <select class="form-control" name="outlet_id" required>
                                        <option value=""> -- Select The Outlet -- </option>
                                        <option value=""> </option>
                                        @foreach($outlet as $outDetails)
                                            <option value="{{$outDetails->outlet_id}}">
                                                {{$outDetails->outlet_name}} 
                                            </option>
                                        @endforeach
                                    <select>
                                    <span style="color: red">** This Field is Required **</span>
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
                                 <div class="col-sm-4">
                                    <select class="form-control" name="distributor_id" required>
                                        <option value=""> -- Select The Distributor -- </option>
                                        <option value=""> </option>
                                        @foreach($distributor as $disDetails)
                                            <option value="{{$disDetails->distributor_id}}">{{$disDetails->name}} </option>
                                        @endforeach
                                    <select>
                                    <span style="color: red">** This Field is Required **</span>
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
                                 <div class="col-sm-4">
                                      <button type="submit" class="btn btn-success btn-lg btn-block" style="border:none">ADD THE OUTLET</button>
                                 </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if(count($assign_outlet) ==0)
                        <div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> The List is Empty</div>

                    @else
                        <div class="card-header"><i class="fa fa-table"></i> List of Saved Assigned Outlet</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Outlet Name</th>
                                        <th> Distributor Name </th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Outlet Name</th>
                                        <th> Distributor Name </th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $y=1; ?>
                                    @foreach($assign_outlet as $assign_outleta)
                                        <tr>
                                        
                                            <td>{{$y}}
                                                <a href="{{route('assign.outlet.delete', $assign_outleta->assign_id)}}" 
                                                    class="btn btn-danger" onclick="return(confirmToDelete());"><i class="far fa-trash-o"></i>
                                                Delete</a>
                                                <a href="" class="btn btn-primary" onclick="return(confirmToEdit());"><i class="far fa-pencil"></i> 
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
                        </div>
                    @endif
                 
                  </div>
            </div>
        </div>
     </div>
</div>


<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
@endsection
