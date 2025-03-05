<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        {{-- @dd(request()->path()); --}}
                        <li class="{{ request()->path() == "newsfeed"?"active":"" }}">
                            <a href="{{ route('newsfeed') }}">
                                <img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img">
                                <span>Dashboard</span> 
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('users.index') }}" class="{{ (in_array(request()->path(), ['roles', 'users', 'roles/create', 'users/create']))?"subdrop":"" }}">
                                <img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img">
                                <span>Users</span> 
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="{{ (in_array(request()->path(), ['roles', 'users', 'roles/create', 'users/create']))?"d-block":"" }}">
                                <li>
                                    <a href="{{ route('users.index') }}" class="{{ (in_array(request()->path(), ['users', 'users/create']))?"active":"" }}">Users List</a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.index') }}" class="{{ (in_array(request()->path(), ['roles', 'roles/create']))?"active":"" }}">Roles</a>
                                </li>
                                <li><a href="{{ route('permissions.index') }}" class="{{ (in_array(request()->path(), ['permissions','*']))?"active":""}}">Permissions</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="{{ route('products.index') }}" class="{{ (in_array(request()->path(), ['products', 'categories', 'brands', 'products/create', 'categories/create', 'brands/create'])) ? 'subdrop' : '' }}">
                                <img src="{{ asset('assets/img/icons/product.svg') }}" alt="img">
                                <span>Products</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="{{ (in_array(request()->path(), ['products', 'categories', 'brands', 'products/create', 'categories/create', 'brands/create'])) ? 'd-block' : '' }}">
                                <li>
                                    <a href="{{ route('products.index') }}" class="{{ (in_array(request()->path(), ['products', 'products/create'])) ? 'active' : '' }}">Product List</a>
                                </li>
                                <li>
                                    <a href="{{ route('categories.index') }}" class="{{ (in_array(request()->path(), ['categories', 'categories/create'])) ? 'active' : '' }}">Categories</a>
                                </li>
                                <li>
                                    <a href="{{ route('brands.index') }}" class="{{ (in_array(request()->path(), ['brands', 'brands/create'])) ? 'active' : '' }}">Brands</a>
                                </li>
                            </ul>
                        </li>
                        

                        


                        {{-- <li class="{{ request()->routeIs('products.*') ? 'active' : '' }}">
                            <a href="{{ route('products.index') }}">
                                <img src="{{ asset('assets/img/icons/product.svg') }}" alt="img">
                                <span>Products</span> 
                            </a>
                        </li> --}}
                        
                    </ul>
                </div>
            </div>
        </div>