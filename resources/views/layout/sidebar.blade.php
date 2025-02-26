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

                        {{-- <li class="submenu">
                            <a href="{{ route('product.productlist') }}" class=""></a>
                            <ul class="">

                            </ul>

                        </li> --}}



                        <li class="{{ request()->routeIs('products.*') ? 'active' : '' }}">
                            <a href="{{ route('products.index') }}">
                                <img src="{{ asset('assets/img/icons/product.svg') }}" alt="img">
                                {{-- <img src="assets/img/icons/product.svg" alt="img"> --}}
                                <span>Products</span> 
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>