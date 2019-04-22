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
                    <a href="{{route('distributor.create')}}">Add Distributor</a>
                </li>
                
                <li class="breadcrumb-item active" aria-current="page">Saved Distributors</li>
                </ol>
            </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add A Distributor</div>
                <div class="card-body">
                    @include('partials._message')
                    <form action="{{route('distributor.save')}}" method="POST">
                        {{ csrf_field() }}
                        
                        <div class="form-group row ">
                            <div class="col-sm-4">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control form-control-rounded" required placeholder="Enter The Distributor Name">
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-4">
                                <label>Phone One</label>
                                <input type="number" name="phone_one" class="form-control form-control-rounded" min="" maxlength="11" required placeholder="Enter Phone One">
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-4">
                                <label>Phone Two</label>
                                <input type="number" name="phone_two" class="form-control form-control-rounded" min="" maxlength="11" required placeholder="Enter Phone Two">
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-3">
                                <label>E-Mail</label>
                                <input type="email" name="email" class="form-control form-control-rounded" required placeholder="Enter The E-Mail">
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-3">
                                <label>Credit Unit</label>
                                <input type="number" name="credit_limit" class="form-control form-control-rounded" required placeholder="Enter The Credit Limit">
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('credit_limit'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('credit_limit') }} !</span>
                                        </div>
                                    </div>
                                @endif  
                            </div>
                            <div class="col-sm-3">
                                <label>Credit Reduction</label>
                                <input type="number" name="credit_reduction_per_month" class="form-control form-control-rounded" required placeholder="Enter The Credit Resuction Per month">
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('credit_reduction_per_month'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('credit_reduction_per_month') }} !</span>
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
                                <button type="submit" class="btn btn-success btn-lg btn-block" style="border:none">ADD THE DISTRIBUTOR</button>
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
                    @if(count($distributor) ==0)
                        <div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> 
                            The List is Empty
                        </div>

                    @else
                        <div class="card-header"><i class="fa fa-table"></i> List of Saved Distributor</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th> Name</th>
                                            <th> E-Mail</th>
                                            <th>Phone Number</th>
                                            <th> Credit Limit </th>
                                            <th> Credit Reduction </th>
                                            <th>Address </th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th> Name</th>
                                            <th> E-Mail</th>
                                            <th>Phone Number</th>
                                            <th> Credit Limit </th>
                                            <th> Credit Reduction </th>
                                            <th>Address </th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $y=1; ?>
                                        @foreach($distributor as $distributors)
                                            <tr>
                                            
                                                <td>{{$y}}
                                                    <a href="{{route('distributor.delete', $distributors->distributor_id)}}" 
                                                        class="btn btn-danger" onclick="return(confirmToDelete());">
                                                        <i class="fa fa-trash-o"></i>
                                                    Delete</a>
                                                    <a href="" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i> 
                                                    Edit</a>  
                                                </td>
                                                <td>{{$distributors->name}}</td> 
                                                <td>{{$distributors->email}}</td> 
                                                <td>{{$distributors->phone_one . ",". $distributors->phone_two}}</td> 
                                                <td>{{$distributors->credit_limit}}</td> 
                                                <td>{{$distributors->credit_reduction_per_month}}</td> 
                                                <td>{{$distributors->address}}</td> 
                                                
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
