<div id="wrapper">
    <div id="sidebar-wrapper" class="bg-theme bg-theme4" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="{{route('administrator.dashboard')}}">
                <h5 class="logo-text">Inventory Applications</h5>
            </a>
        </div>
        <div class="user-details">
            <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
                <div class="avatar">
                    <img class="mr-3 side-user-img" src="{{asset('styling/assets/images/inventory.jpg')}}" alt="user avatar">
                </div>
                <div class="media-body">
                    <h6 class="side-user-name"><?php $name = Auth::user()->name; ?> {{ $name }}</h6>
                </div>
            </div>
            <div id="user-dropdown" class="collapse">
                <ul class="user-setting-menu">
                    <li><a href=""><i class="icon-user"></i>  My Profile</a></li>
                    <li><a href="{{ route('admin.logout') }}"><i class="icon-power"></i> Logout</a></li>
                </ul>
                </div>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            @if(( Auth::user()->email_verified_at) == ""))
                <li>
                    <a href="{{ route('verification.resend') }}" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Resend Link </span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{route('administrator.dashboard')}}" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.create')}}" class="waves-effect">
                        <i class="fa fa-users"></i> <span>Categories</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.create')}}" class="waves-effect">
                        <i class="fa fa-users"></i> <span>Users</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('supplier.create')}}" class="waves-effect">
                        <i class="fa fa-cog"></i> <span>Supplier</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('distributor.create')}}" class="waves-effect">
                        <i class="fa fa-sitemap"></i> <span>Distributors</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('warehouse.create')}}" class="waves-effect">
                        <i class="fa fa-building"></i> <span>Ware House</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('outlet.create')}}" class="waves-effect">
                        <i class="fa fa-shopping-cart"></i> <span>Outlets</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('employee.create')}}" class="waves-effect">
                        <i class="fa fa-group"></i> <span>Employee</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.create')}}" class="waves-effect">
                        <i class="fa fa-cogs"></i> <span>Product Categories</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                <li>
                    <a href="{{route('variant.create')}}" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Product Variants</span>
                        <small class="badge float-right badge-light">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </small>
                    </a>
                </li>
                
                <li>
                    <a href="" class="waves-effect">
                        <i class="zmdi zmdi-card-travel"></i>
                        <span>Products</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('category.create')}}"><i class="zmdi zmdi-long-arrow-right"></i> Categories</a></li>
                        
                    </ul>
                </li>
    
                <li>
                    <a href="{{ route('admin.logout') }}" class="waves-effect">
                        <i class="zmdi zmdi-lock"></i> <span>Log Out</span>
                        <small class="badge float-right badge-light"><i class="zmdi zmdi-long-arrow-right"></i></small>
                    </a>
                </li>	
            @endif
            
               
        </ul>
       
    </div>
    
    <header class="topbar-nav">
         <nav class="navbar navbar-expand fixed-top">
              <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                      <a class="nav-link toggle-menu" href="">
                       <i class="icon-menu menu-icon"></i>
                     </a>
                </li>
                
                <h4 align="center"><p >INVENTORY APPLICATIONS</p></h4>
              </ul>
         
              <ul class="navbar-nav align-items-center right-nav-link">
       
                <li class="nav-item">
                    
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="">
                        <span class="user-profile"><img src="{{asset('styling/assets/images/inventory.jpg')}}" class="img-circle" alt="user avatar"></span>
                    </a>
                    
                </li>
              </ul>
        </nav>
    </header>
    <div class="clearfix"></div>