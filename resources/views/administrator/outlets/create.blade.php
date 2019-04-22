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
                        <a href="{{route('outlet.create')}}">Outlets</a>
                        
                     <li class="breadcrumb-item">
                         <a href="{{route('assign.outlet.create')}}">Assign An Outlet</a>
                    </li> 
                    <li class="breadcrumb-item active" aria-current="page">Saved Outlets</li>
                 </ol>
               </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add The An Outlet</div>
                    <div class="card-body">
                        @include('partials._message')
                        <form action="{{route('outlet.save')}}" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-rounded" id="input-1" 
                                    name="outlet_name" placeholder="Please Enter The Outlet Name" min="4" required>
                                   
                                    <span style="color: red">** This Field is Required **</span>
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
                                 <div class="col-sm-6">
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
                    @if(count($outlet) ==0)
                        <div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> 
                            The List is Empty</div>

                    @else
                        <div class="card-header"><i class="fa fa-table"></i> List of Saved Outlets</div>
                        <div class="card-body">
                              <div class="table-responsive">
                                  <table id="example" class="table table-bordered">
                                      <thead>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>outlet Name</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>Outlet Name</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $number =1; ?>
                                        @foreach($outlet as $categories)
                                            <tr>
                                                <td>
                                                    {{$number}}
                                                    <a href="{{route('outlet.delete', $categories->outlet_id)}}" 
                                                        class="btn btn-danger" onclick="return(confirmToDelete());">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                    <a href="{{route('outlet.edit', $categories->outlet_id)}}" 
                                                        class="btn btn-success" onclick="return(confirmToEdit());">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>

                                                </td>
                                                <td>{{$categories->outlet_name}}</td>
                                            </tr><?php
                                            $number++; ?>
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
