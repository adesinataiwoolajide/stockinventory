@extends('layouts.app')

@section('content')
    
<div class="clearfix"></div>
<div class="content-wrapper">
       <div class="container-fluid">
           <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('administrator.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('category.create')}}">View Products Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Saved Categories</li>
                 </ol>
               </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add The Product Category</div>
                    <div class="card-body">
                        @include('partials._message')
                        <form action="{{route('category.save')}}" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="form-group row ">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-rounded" id="input-1" name="category_name" placeholder="Please Enter The Course Category Here" min="4" required>
                                   
                                    <span style="color: red">** This Field is Required **</span>
                                     @if ($errors->has('category_name'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <div class="alert-icon contrast-alert">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="alert-message">
                                                <span><strong>Error!</strong> {{ $errors->first('category_name') }} !</span>
                                            </div>
                                        </div>
                                    @endif  

                                 </div>
                                 <div class="col-sm-6">
                                      <button type="submit" class="btn btn-success btn-lg btn-block">ADD THE CATEGORY</button>
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
                    @if(count($category) ==0)
                        <div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> The List is Empty</div>

                    @else
                        <div class="card-header"><i class="fa fa-table"></i> 
                            List of Saved Products Categories
                        </div>
                        <div class="card-body">
                              <div class="table-responsive">
                                  <table id="example" class="table table-bordered">
                                      <thead>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>Category Name</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>Category Name</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $number =1; ?>
                                        @foreach($category as $categories)
                                            <tr>
                                                <td>
                                                    {{$number}}
                                                    <a href="{{route('category.delete', $categories->category_id)}}" 
                                                        class="btn btn-danger" onclick="return(confirmToDelete());">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                    <a href="{{route('category.edit', $categories->category_id)}}" 
                                                        class="btn btn-success" onclick="return(confirmToEdit());">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>

                                                </td>
                                                <td>{{$categories->category_name}}</td>
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
