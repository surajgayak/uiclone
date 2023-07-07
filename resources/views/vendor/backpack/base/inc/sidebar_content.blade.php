{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> Users</a>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('customer') }}"><i class="nav-icon la la-users"></i>
        Customers</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('categories') }}"><i class="nav-icon la la-folder"></i>
        Categories</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('products') }}"><i class="nav-icon la la-dollar"></i>
        Products</a></li>



<li class="nav-item"><a class="nav-link" href="{{ backpack_url('upload') }}"><i class="nav-icon la la-upload"></i>
        Upload</a></li>



<li class="nav-item"><a class="nav-link" href="{{ backpack_url('orders') }}"><i
            class="nav-icon la la-shopping-cart"></i>
        Orders</a></li>
