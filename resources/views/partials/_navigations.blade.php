    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-profile">
            <div class="d-flex align-items-center justify-content-between">
                <img src="{{asset('design/images/faces/face5.jpg')}}" alt="profile">
                <div class="profile-desc">
                    <p class="name mb-0">{{auth()->user()->name}}</p>
                    <p class="designation mb-0">{{auth()->user()->role}}</p>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('administrator.dashboard')}}">
                <i class="mdi mdi-shield-half-full menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item active">
                @can('role-create')
                    <a class="nav-link" href="{{route('role.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">User Roles</span>
                    </a>
                @endcan
            </li>
            @role('Administrator')
                
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">User</span>
                    </a>
                </li>

                
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('supplier.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Suppliers</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('distributor.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Distributors</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('outlet.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Outlets</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('category.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Categories</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('variant.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Product Variants</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('warehouse.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Ware House</span>
                    </a>
                </li>

                <li class="nav-item active">
                    
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-checkbox-blank-circle-outline menu-icon"></i>
                        <span class="menu-title">Products</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">Add Products</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">View Products</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">Product Stock</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">Warehouse Product</a></li>
                        </ul>
                    </div>
                </li>

               
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('roles.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Employee Type</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('employee.create')}}">
                    <i class="mdi mdi-puzzle menu-icon"></i>
                    <span class="menu-title">Employee</span>
                    </a>
                </li>
                
                
                
            
            @endrole
            {{-- <li class="nav-item active">
                <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="mdi mdi-basket menu-icon"></i>
                <span class="menu-title">Sales</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="e-commerce">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Outlets </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> All Sales </a></li>
                        
                    </ul>
                </div>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="mdi mdi-basket menu-icon"></i>
                <span class="menu-title">Inventory</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="e-commerce">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Outlets </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> All Sales </a></li>
                        
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.logout')}}">
                <i class="fa fa-key"></i>
                <span class="menu-title">Sign Out</span>
                </a>
            </li>
        
        </ul>
    </nav>