
 <!-- main side nav start -->
 <nav class="mainmenu_side_wrapper">
    <h3 class="dark_bg_color">@yield('pageName')</h3>
    <ul class="menu-click">
        <li>
            <a href="{{route('dashboard')}}">
                <i class="fa fa-th-large"></i>
                Dashboard
            </a>

        </li>
    </ul>

    <ul class="menu-click">
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                Manage Users
            </a>
            <ul>
                <li>
                    <a href="admin_profile.html">
                        Users
                    </a>
                </li>
                <li>
                    <a href="admin_profile_edit.html">
                        My profile
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="admin_posts.html">
                <i class="fa fa-file-text"></i>
                Manage Blogs
            </a>
            <ul>
                <li>
                    <a href="admin_posts.html">
                        Blogs
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.add.blog.view')}}">
                        Add Blog
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.add.blog.tools.view')}}">
                        Add Tools
                    </a>
                </li>
                <li>
                    <a href="admin_post.html">
                        Pending comments
                    </a>
                </li>
                <li>
                    <a href="admin_post.html">
                        Approved comments
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="admin_products.html">
                <i class="fa fa-suitcase"></i>
                Manage Products
            </a>
            <ul>
                <li>
                    <a href="admin_products.html">
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.add.product.view')}}">
                        Add Product
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.add.tools.view')}}">
                        Add Tools
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="admin_orders.html">
                <i class="fa fa-shopping-cart"></i>
                Manage Orders
            </a>
            <ul>
                <li>
                    <a href="admin_orders.html">
                        Orders
                    </a>
                </li>
                <li>
                    <a href="admin_order.html">
                        Completed Orders
                    </a>
                </li>
                <li>
                    <a href="admin_order.html">
                        Failed Orders
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</nav>
<!-- eof main side nav -->

<div class=" grey text-center">

    <form action="{{route('logout')}}" method="post">
        @csrf

        <button type="submit">
            <strong><i class="fa fa-power-off"></i> Logout</strong>
        </button>
    </form>
</div>
