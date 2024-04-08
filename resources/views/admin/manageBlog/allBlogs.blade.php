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
                <!-- .col-* -->
                <div class="col-md-6 text-md-right">
                    <span class="dashboard-daterangepicker">
                        <i class="fa fa-calendar"></i>
                        <span></span>
                        <i class="caret"></i>
                    </span>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>


    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <h3>All Orders</h3>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">

                        <div class="row admin-table-filters">
                            <div class="col-lg-9">

                                <form action="https://html.modernwebtemplates.com/greenscape/"
                                    class="form-inline filters-form">
                                    <span>
                                        <label class="grey" for="with-selected">With Selected:</label>
                                        <select class="form-control with-selected" name="with-selected"
                                            id="with-selected">
                                            <option value="">-</option>
                                            <option value="publish">Publish</option>
                                            <option value="delete">Delete</option>
                                        </select>
                                    </span>
                                    <span>
                                        <label class="grey" for="orderby">Sort By:</label>
                                        <select class="form-control orderby" name="orderby" id="orderby">
                                            <option value="date" selected>Date</option>
                                            <option value="price">Price</option>
                                            <option value="title">Title</option>
                                            <option value="status">Status</option>
                                        </select>
                                    </span>

                                    <span>
                                        <label class="grey" for="showcount">Show:</label>
                                        <select class="form-control showcount" name="showcount" id="showcount">
                                            <option value="10" selected>10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </span>
                                </form>

                            </div>
                            <!-- .col-* -->
                            <div class="col-lg-3 text-lg-right">
                                <div class="widget widget_search">

                                    <form method="get" class="searchform form-inline"
                                        action="https://html.modernwebtemplates.com/greenscape/">
                                        <div class="form-group">
                                            <label class="screen-reader-text" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" value="" name="search"
                                                class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="theme_button">Search</button>
                                    </form>
                                </div>

                            </div>
                            <!-- .col-* -->
                        </div>
                        <!-- .row -->

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">

                                <tr>
                                    <td class="media-middle text-center">
                                        No:
                                    </td>
                                    <th>Title:</th>
                                    <th>Blog:</th>
                                    <th>Category:</th>
                                    <th>Comments:</th>
                                    <th>Action:</th>
                                    <th>Date:</th>

                                </tr>
                                @foreach ($blogs as $b)

                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        {{$loop->index =+ 1}}
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <img src="images/shop/01.png" alt="...">
                                            </div>
                                            <div class="media-body media-middle">
                                                <h5>
                                                    <a href="admin_product.html">{{$b->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>


                                    <td class="media-middle">
                                        {!!\Str::words($b->blog,2,'...')!!}
                                    </td>
                                    <td class="media-middle">
                                        {{$b->category->name}}
                                    </td>
                                    <td class="media-middle">
                                        {{$b->comments->count()}}
                                    </td>

                                    <td class="media-middle">
                                        <div>
                                            <a  class="btn btn-danger" href="{{route('admin.single.blog', $b->slug)}}"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('admin.delete.blog', $b->id)}}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a class="btn btn-danger" href="{{route('admin.edit.blog.view', $b->slug)}}"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="{{$b->created_at}}" class="entry-date">{{$b->created_at->diffForHumans()}}</time>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                        <!-- .table-responsive -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination">
                                <li class="disabled">
                                    <span>Prev</span>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-md-right">
                            Showing 1 to 6 of 12 items
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>

    @endsection


</x-app-layout>
