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
                    <a href="{{route('employee.create')}}">Add Employee</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List of Saved Employee </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add An Employee</div>
                <div class="card-body">
                    @include('partials._message')
                    <form action="{{route('employee.save')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group row ">
                            <div class="col-sm-3">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control form-control-rounded" required 
                                placeholder="Enter The Full Name">
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('full_name'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('full_name') }} !</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-3">
                                <label>Phone Number</label>
                                <input type="number" name="phone_number" max="11" class="form-control form-control-rounded" required 
                                placeholder="Enter The Phone Number">
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('phone_number'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('phone_number') }} !</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-3">
                                <label>Staff Type</label>
                                <select class="form-control form-control-rounded" name="contract_type" required>
                                    <option value=""> -- Select The Category -- </option>
                                    <option value=""> </option>
                                    <option value="Temporary Staff"> Temporary Staff </option> 
                                    <option value="Contract Staff"> Contract Staff </option> 
                                <select>
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('contract_type'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('contract_type') }} !</span>
                                        </div>
                                    </div>
                                
                                @endif  

                            </div>
                            
                            <div class="col-sm-3">
                                <label>Address</label>
                                <textarea name="address" class="form-control form-control-rounded"
                                 required placeholder="Enter The Address">
                                </textarea>
                                <span style="color: red">** This Field is Required **</span>
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
                            
                            
                            
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-lg btn-block" style="border:none">
                                    ADD THE EMPLOYEE</button>
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
                    @if(count($employee) ==0)
                        <div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> 
                            The List is Empty
                        </div>

                    @else
                        <div class="card-header"><i class="fa fa-table"></i> List of Saved Ware House</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Phone number</th>
                                            <th>Staff Type</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Phone number</th>
                                            <th>Staff Type</th>
                                            <th>Address</th>
                                        </tr>
                                    </ttfoothead>
                                    <tbody><?php
                                        $y=1; ?>
                                        @foreach($employee as $employees)
                                            <tr>
                                                <td>{{$y}}
                                                    <a href="{{route('employee.delete', $employees->employee_id)}}"
                                                         class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i>
                                                    Delete</a>
                                                    <a href="" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i> 
                                                    Edit</a>  
                                                </td>
                                                <td>{{$employees->full_name}}</td> 
                                                <td>{{$employees->phone_number}}</td> 
                                                <td>{{$employees->contract_type}}</td> 
                                                <td>{{$employees->address}}</td> 
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
