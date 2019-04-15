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
                                        <form class="editable-form">
                                            <div class="form-group row">
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" required placeholder="Please Enter The Category Name ">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" required placeholder="Please Enter The Category Name ">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" required placeholder="Please Enter The Category Name ">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" required placeholder="Please Enter The Category Name ">
                                                    {{-- <span style="color: red">** This Field is Required **</span>      --}}
                                                </div>
                                                <div class="col-md-12" align="center">
                                                    <button type="submit" id="" class="btn btn-success btn-lg btn-block" 
                                                    role="status" name="add-category">ADD THE USER 
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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Users</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Category Name</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                            <a href="" class="btn btn-primary"><i class="fa fa-pencil"></i> </a>  
                                                        </td>
                                                        <td>2012/08/03</td> 
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                @include('partials._footer');
                
            </div>
        </div>
    </div>
</div>
@endsection
