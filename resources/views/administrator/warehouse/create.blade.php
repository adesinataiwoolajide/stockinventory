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
                    <a href="{{route('warehouse.create')}}">Add Ware House</a>
                </li>
                
                <li class="breadcrumb-item active" aria-current="page">Saved Ware House</li>
                </ol>
            </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add A Ware House</div>
                <div class="card-body">
                    @include('partials._message')
                    <form action="{{route('warehouse.save')}}" method="POST">
                        {{ csrf_field() }}
                        
                        <div class="form-group row ">
                            <div class="col-sm-3">
                                <label>Ware House Name</label>
                                <input type="text" name="name" class="form-control form-control-rounded" required 
                                placeholder="Enter The Ware House Name">
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
                            <div class="col-sm-3">
                                <label>Ware House Manager</label>
                                <select class="form-control form-control-rounded" name="user_id" required>
                                    <option value=""> -- Select The Manager -- </option>
                                    <option value=""> </option>
                                    @foreach($user as $users)
                                        <option value="{{ $users->name}}"> {{ $users->name}}</option>
                                    @endforeach
                                <select>
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('user_id'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('user_id') }} !</span>
                                        </div>
                                    </div>
                                
                                @endif  

                            </div>
                            <div class="col-sm-3">
                                <label>City</label>
                                <input type="text" name="city" class="form-control form-control-rounded" min="" maxlength="" 
                                required placeholder="Enter The City">
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-3">
                                <label>State</label>
                                <select name="state" class="form-control form-control-rounded"
                                required>
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
                                </select>
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-3">
                                <label>Country</label>
                                <select class="form-control form-control-rounded" name="country" required>
                                    <option value=""> -- Select The Country -- </option>
                                    <option value=""> </option>
                                    <option value="Nigeria"> Nigeria</option>
                                    <option value="Others"> Others</option>
                                <select>
                                <span style="color: red">** This Field is Required **</span>
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
                            <div class="col-sm-3">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control form-control-rounded" min="" maxlength="11" required placeholder="Enter Phone Two">
                                <span style="color: red">** This Field is Required **</span>
                                @if ($errors->has('start_date'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon contrast-alert">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                            <span><strong>Error!</strong> {{ $errors->first('start_date') }} !</span>
                                        </div>
                                    </div>
                                @endif  
                            </div>
                            <div class="col-sm-6">
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
                                    ADD THE WARE HOUSE</button>
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
                    @if(count($warehouse) ==0)
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
                                            <th>Ware House</th>
                                            <th>State</th>
                                            <th>Country </th>
                                            <th>Manager </th>
                                            <th>Start Date </th>
                                            <th>Address </th>
                                            <th>Opt </th>
                                        </tr>
                                    </thead>
                                    <tbody><?php
                                        $y=1; ?>
                                        @foreach($warehouse as $warehouses)
                                            <tr>
                                            
                                                <td>{{$y}}
                                                    <a href="{{route('warehouse.delete',$warehouses->ware_house_id)}}" 
                                                        class="btn btn-danger" onclick="return(confirmToDelete());"><i class="fa fa-trash-o"></i>
                                                        Delete
                                                    </a>
                                                    <a href="" class="btn btn-success" onclick="return(confirmToEdit());"><i class="fa fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>{{$warehouses->name}}</td> 
                                                <td>{{$warehouses->state}}</td> 
                                                <td>{{$warehouses->country}}</td> 
                                                <td>{{$warehouses->user_id}}</td> 
                                                <td>{{$warehouses->start_date}}</td> 
                                                <td>{{$warehouses->address}}</td> 
                                                
                                                <td>
                                                    <a href="" class="btn btn-danger"><i class="far fa-trash-o"></i>
                                                    Products
                                                    </a>
                                                        
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
