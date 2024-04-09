<x-app-layout>
    @section('content')

    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="{{route('/')}}">Homepage</a>
                        </li>

                    </ol>
                </div>

            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <h3 class="dashboard-page-title">Dashboard

                    </h3>
                </div>
            </div>
            <!-- .row -->


            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="teaser warning_bg_color counter-background-teaser text-center">
                        <span class="counter counter-background" data-from="0" data-to="{{$blogs->count()}}"
                            data-speed="2100">{{$blogs->count()}}</span>
                        <h3 class="counter highlight" data-from="0" data-to="{{$blogs->count()}}" data-speed="2100">{{$blogs->count()}}</h3>
                        <p>Blogs</p>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="teaser danger_bg_color counter-background-teaser text-center">
                        <span class="counter counter-background" data-from="0" data-to="{{$products->count()}}"
                            data-speed="1500">{{$products->count()}}</span>
                        <h3 class="counter highlight" data-from="0" data-to="{{$products->count()}}" data-speed="1500">{{$products->count()}}</h3>
                        <p>Products</p>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="teaser success_bg_color counter-background-teaser text-center">
                        <span class="counter counter-background" data-from="0" data-to="{{$comments->count()}}"
                            data-speed="1900">{{$comments->count()}}</span>
                        <h3 class="counter highlight" data-from="0" data-to="{{$comments->count()}}" data-speed="1900">{{$comments->count()}}</h3>
                        <p>Orders/Recieved</p>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center">
                        <span class="counter counter-background" data-from="0" data-to="15"
                            data-speed="1800">{{number_format($orders)}}</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{$orders}}" data-speed="1800">
                            <small>₦</small>
                            <span class="counter" data-from="0" data-to="{{$orders}}" data-speed="1500">{{number_format($orders)}}</span>
                            
                        </h3>
                        <p>Total Profit</p>
                    </div>

                </div>
            </div>



            {{-- <div class="row">
                <div class="col-xs-12 col-md-6">

                    <div class="with_border with_padding">
                        <h4>
                            Latest Comments
                        </h4>
                        <div class="admin-scroll-panel scrollbar-macosx">
                            <ul class="list1 no-bullets">
                                <li class="item-editable">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Alex Walker
                                                <small>2 hours ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
                                                corporis. Voluptatibus odio perspiciatis non quisquam provident,
                                                quasi eaque officia.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/02.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Janet C. Donnalds
                                                <small>5 hours ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero
                                                itaque dolor laboriosam dolores magnam mollitia, voluptatibus
                                                inventore accusamus illo.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Victoria Grow
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Alex Walker
                                                <small>2 hours ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
                                                corporis. Voluptatibus odio perspiciatis non quisquam provident,
                                                quasi eaque officia.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/02.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Janet C. Donnalds
                                                <small>5 hours ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero
                                                itaque dolor laboriosam dolores magnam mollitia, voluptatibus
                                                inventore accusamus illo.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Victoria Grow
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- .admin-scroll-panel -->
                        <div class="text-right greylinks panel-view-all">
                            <a href="admin_comments.html">View All</a>
                        </div>
                    </div>
                    <!-- .with_border -->
                </div>
                <div class="col-xs-12 col-md-6">

                    <div class="with_border with_padding">
                        <h4>
                            Latest Orders
                        </h4>
                        <div class="admin-scroll-panel scrollbar-macosx">
                            <ul class="list1 no-bullets">
                                <li class="item-editable small-teaser">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <div class="teaser_icon label-success fontsize_16">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Product Name
                                                <small>365$</small>
                                            </h5>
                                            <div>
                                                <h6>Order Comment:</h6>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
                                                corporis. Voluptatibus odio perspiciatis non quisquam provident,
                                                quasi eaque officia.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable small-teaser">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <div class="teaser_icon label-success fontsize_16">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                6 Products
                                                <small>129$</small>
                                            </h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable small-teaser">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <div class="teaser_icon label-success fontsize_16">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Product Name Secont
                                                <small>199$</small>
                                            </h5>
                                            <div>
                                                <h6>Order Comment:</h6>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable small-teaser">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <div class="teaser_icon label-success fontsize_16">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Product Name
                                                <small>365$</small>
                                            </h5>
                                            <div>
                                                <h6>Order Comment:</h6>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
                                                corporis. Voluptatibus odio perspiciatis non quisquam provident,
                                                quasi eaque officia.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable small-teaser">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <div class="teaser_icon label-success fontsize_16">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                6 Products
                                                <small>129$</small>
                                            </h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-editable small-teaser">
                                    <div class="media">
                                        <div class="item-edit-controls darklinks">
                                            <a href="#">
                                                <i class="fa fa-share-square-o"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="media-left">
                                            <div class="teaser_icon label-success fontsize_16">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                Product Name Secont
                                                <small>199$</small>
                                            </h5>
                                            <div>
                                                <h6>Order Comment:</h6>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- .admin-scroll-panel -->
                        <div class="text-right greylinks panel-view-all">
                            <a href="admin_orders.html">View All</a>
                        </div>
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->

                <div class="col-xs-12 col-md-6">
                    <div class="with_border with_padding">
                        <h4>
                            DataBase Statistics
                        </h4>
                        <div class="admin-scroll-panel scrollbar-macosx">

                            <ul class="list1 no-bullets">
                                <li>
                                    <div class="media small-teaser">
                                        <div class="media-left">
                                            <i class="fa fa-users highlight"></i>
                                        </div>
                                        <div class="media-body">
                                            <strong class="grey">
                                                25364
                                            </strong>
                                            Total Users
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-teaser">
                                        <div class="media-left">
                                            <i class="fa fa-comment highlight"></i>
                                        </div>
                                        <div class="media-body">
                                            <strong class="grey">
                                                12520
                                            </strong>
                                            Reviews
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-teaser">
                                        <div class="media-left">
                                            <i class="fa fa-shopping-cart highlight"></i>
                                        </div>
                                        <div class="media-body">
                                            <strong class="grey">
                                                5674
                                            </strong>
                                            Total Products
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-teaser">
                                        <div class="media-left">
                                            <i class="fa fa-money highlight"></i>
                                        </div>
                                        <div class="media-body">
                                            <strong class="grey">
                                                $132200
                                            </strong>
                                            Total Sales
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <!-- .admin-scroll-panel -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->

            </div>
            <!-- .row -->

            <div class="row">

                <div class="col-xs-12 col-lg-6">

                    <div class="with_border with_padding">


                        <h4 class="unstyled-tabs-title">Comments</h4>


                        <!-- Nav tabs -->
                        <ul class="nav-unstyled darklinks" role="tablist">
                            <li class="active"><a href="#tab-comments-1" role="tab"
                                    data-toggle="tab">Pending</a></li>
                            <li><a href="#tab-comments-2" role="tab" data-toggle="tab">Approved</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content tab-unstyled tab-comments admin-scroll-panel scrollbar-macosx">
                            <div class="tab-pane fade in active" id="tab-comments-1">
                                <ul class="list-unstyled">


                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Alex Walker
                                                    <small>2 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Cum, corporis. Voluptatibus odio perspiciatis non
                                                        quisquam provident, quasi eaque officia.
                                                    </p>
                                                    <p class="warning_color">
                                                        Pending
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Janet C. Donnalds
                                                    <small>5 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Libero itaque dolor laboriosam dolores magnam
                                                        mollitia, voluptatibus inventore accusamus illo.
                                                    </p>
                                                    <p class="danger_color">
                                                        Rejected
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Labore, esse, magni aliquam quisquam modi delectus
                                                        veritatis est ut culpa minus repellendus.
                                                    </p>
                                                    <p class="warning_color">
                                                        Pending
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Alex Walker
                                                    <small>2 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Cum, corporis. Voluptatibus odio perspiciatis non
                                                        quisquam provident, quasi eaque officia.
                                                    </p>
                                                    <p class="danger_color">
                                                        Rejected
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Janet C. Donnalds
                                                    <small>5 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Libero itaque dolor laboriosam dolores magnam
                                                        mollitia, voluptatibus inventore accusamus illo.
                                                    </p>
                                                    <p class="warning_color">
                                                        Pending
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Labore, esse, magni aliquam quisquam modi delectus
                                                        veritatis est ut culpa minus repellendus.
                                                    </p>
                                                    <p class="warning_color">
                                                        Pending
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>

                            <div class="tab-pane fade" id="tab-comments-2">

                                <ul class="list-unstyled">

                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Janet C. Donnalds
                                                    <small>5 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Libero itaque dolor laboriosam dolores magnam
                                                        mollitia, voluptatibus inventore accusamus illo.
                                                    </p>
                                                    <p class="info_color">
                                                        Approved
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Alex Walker
                                                    <small>2 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Cum, corporis. Voluptatibus odio perspiciatis non
                                                        quisquam provident, quasi eaque officia.
                                                    </p>
                                                    <p class="success_color">
                                                        Replied
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Labore, esse, magni aliquam quisquam modi delectus
                                                        veritatis est ut culpa minus repellendus.
                                                    </p>
                                                    <p class="info_color">
                                                        Pending
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Alex Walker
                                                    <small>2 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Cum, corporis. Voluptatibus odio perspiciatis non
                                                        quisquam provident, quasi eaque officia.
                                                    </p>
                                                    <p class="success_color">
                                                        Approved
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Janet C. Donnalds
                                                    <small>5 hours ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Libero itaque dolor laboriosam dolores magnam
                                                        mollitia, voluptatibus inventore accusamus illo.
                                                    </p>
                                                    <p class="info_color">
                                                        Approved
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Labore, esse, magni aliquam quisquam modi delectus
                                                        veritatis est ut culpa minus repellendus.
                                                    </p>
                                                    <p class="info_color">
                                                        Replied
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>


                    </div>

                </div>
                <!-- .col-* -->

                <div class="col-xs-12 col-lg-6">
                    <div class="with_border with_padding">
                        <h4>
                            Chats
                        </h4>
                        <hr>
                        <div class="admin-scroll-panel scrollbar-macosx">

                            <ul class="list-unstyled">
                                <li class="chat-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                        </div>
                                        <div class="media-body with_background">
                                            <h5>
                                                Ann Andersen
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-item">
                                    <div class="media">
                                        <div class="media-body with_background">
                                            <h5>
                                                Victoria Grow
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                        </div>
                                        <div class="media-body with_background">
                                            <h5>
                                                Ann Andersen
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-item">
                                    <div class="media">
                                        <div class="media-body with_background">
                                            <h5>
                                                Victoria Grow
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="/assets/admin/assets/images/team/03.jpg" alt="...">
                                        </div>
                                        <div class="media-body with_background">
                                            <h5>
                                                Ann Andersen
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-item">
                                    <div class="media">
                                        <div class="media-body with_background">
                                            <h5>
                                                Victoria Grow
                                                <small>1 day ago</small>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Labore, esse, magni aliquam quisquam modi delectus veritatis est
                                                ut culpa minus repellendus.
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <img src="/assets/admin/assets/images/team/01.jpg" alt="...">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- .admin-scroll-panel -->
                    </div>
                    <!-- .with_border -->
                </div>
            </div> --}}
        </div>
        <!-- .container -->
    </section>

    @endsection
</x-app-layout>

