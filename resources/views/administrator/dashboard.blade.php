@extends('layouts.app')

@section('content')
    
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('partials._message')
            <div class="card mt-3 gradient-forest">
                <div class="card-content">
                    <div class="row row-group m-0"  style="cursor: pointer">
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2" 
                            onclick="location.href=' '">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">&#8358;</h4>
                                        <span class="text-white">Product <br>Categories</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-basket-loaded text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2" 
                        onclick="location.href=' '">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white"></h4>
                                        <span class="text-white">Un Shipped<br> Orders</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-wallet text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2" onclick="location.href=' '">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white"></h4>
                                        <span class="text-white">Shipped  <br>Orders</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-pie-chart text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2" onclick="location.href=''">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white"></h4>
                                        <span class="text-white">New <br> Orders</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-user text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-3" onclick="location.href=''" style="cursor: pointer">
                    <div class="card gradient-army">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body">
                                    <span class="text-white">Total Supplier</span>
                                    <h3 class="text-white">{{count($supplier)}}</h3>
                                </div>
                                <div class="w-icon">
                                    <i class="ti-marker text-white"></i>
                                </div>
                            </div>
                            <div id="widget-chart-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3" onclick="location.href=''" style="cursor: pointer">
                    <div class="card gradient-dusk">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body">
                                    <span class="text-white">Product <br> Distributor</span>
                                    <h3 class="text-white">{{count($distributor)}}</h3>
                                </div>
                                <div class="w-icon">
                                    <i class="icon-user text-white"></i>
                                </div>
                            </div>
                            <div id="widget-chart-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3" onclick="location.href=''" style="cursor: pointer">
                    <div class="card gradient-orange">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body">
                                    <span class="text-white">Product <br> Variants</span>
                                    <h3 class="text-white">{{count($variant)}}</h3>
                                </div>
                                <div class="w-icon">
                                    <i class="fa fa-cogs text-white"></i>
                                </div>
                            </div>
                            <div id="widget-chart-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3" onclick="location.href=''" style="cursor: pointer">
                    <div class="card gradient-forest">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body">
                                    <span class="text-white">Product <br>Sub Types</span>
                                    <h3 class="text-white">{{count($supplier)}}</h3>
                                </div>
                                <div class="w-icon">
                                    <i class="ti-stats-up text-white"></i>
                                </div>
                            </div>
                            <div id="widget-chart-4"></div>
                        </div>
                    </div>
                </div>
    
                
            </div><!--End Row-->
            <div class="card mt-3 gradient-orange">
                <div class="card-content">
                    <div class="row row-group m-0" style="cursor: pointer">
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2"  onclick="location.href=''">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($outlet)}}</h4>
                                        <span class="text-white">Total  <br>Outlets</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="fa fa-cogs text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2"  onclick="location.href=''">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">Confirmed <br> Payment</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-wallet text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2"  onclick="location.href=''">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">Un Confirmed <br> Payment</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-pie-chart text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2"  onclick="location.href=''">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">All <br> Payments</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-user text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4" onclick="location.href=''" style="cursor: pointer">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white mb-0">{{count($supplier)}}</h4>
                                    <span class="text-white">Product Categories</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded border border-white">
                                    <i class="fa fa-sitemap text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4" onclick="location.href=''" style="cursor: pointer">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white mb-0">{{count($warehouse)}}</h4>
                                    <span class="text-white">Our Total Ware House</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded border border-white">
                                    <i class="fa fa-users text-white"></i
                                    ></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-4 col-xl-4" onclick="location.href=''" style="cursor: pointer">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white mb-0">{{count($supplier)}}</h4>
                                    <span class="text-white">Shipping Location</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded border border-white">
                                    <i class="fa fa-map-marker text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
    
            <div class="card mt-3 gradient-dusk">
                <div class="card-content">
                    <div class="row row-group m-0" style="cursor: pointer">
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">Product <br>Weight</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="fa fa-cogs text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">Product <br> Sub Categories</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-wallet text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">UnPublished <br> Products</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-pie-chart text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-white-2">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="mb-0 text-white">{{count($supplier)}}</h4>
                                        <span class="text-white">New <br> Orders</span>
                                    </div>
                                    <div class="align-self-center w-icon">
                                        <i class="icon-user text-white"></i></div>
                                </div>
                                <div class="progress-wrapper mt-3">
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
        
    </div>
@endsection
