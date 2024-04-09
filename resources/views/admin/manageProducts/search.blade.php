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
                <div class="col-md-12">
                    <h3>All Products</h3>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">

                        <div class="row admin-table-filters">

                            <!-- .col-* -->
                            <div class="col-lg-3 text-lg-right">
                                <div class="widget widget_search">

                                    <form method="POST" class="form-inline"
                                        action="{{route('admin.search.product')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="screen-reader-text" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" name="search"
                                                class="form-control" placeholder="Search for Product">
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
                                    <th>Name:</th>
                                    <th>Quantity:</th>
                                    <th>Price:</th>
                                    <th>Status:</th>
                                    <th>Date:</th>
                                    <th>Action:</th>

                                </tr>
                                @foreach ($products as $p)

                                @php
                                $img = explode('|', $p->image);
                                if ($img == null) {

                                    $img = 'alt';
                                };
                                @endphp

                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        {{$loop->index =+ 1}}
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <img src="/assets/ProductImage/{{$img[0]}}" alt="...">
                                            </div>
                                            <div class="media-body media-middle">
                                                <h5>
                                                    <a href="{{route('admin.single.product.view', $p->slug)}}">{{$p->name}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="media-middle">
                                        {{$p->quantity}}
                                    </td>
                                    <td class="media-middle">
                                        ₦{{number_format($p->price)}}
                                    </td>
                                    <td class="media-middle">
                                        {{$p->status}}
                                    </td>
                                    <td class="media-middle">
                                        {{$p->created_at->diffForHumans()}}
                                    </td>

                                    <td class="media-middle">
                                        <div style="display: flex; justify-content: space-between">
                                            <a  style="color: white"  class="btn btn-danger" href="{{route('admin.single.product.view', $p->slug)}}"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('admin.delete.product', $p->id)}}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a style="color: white" class="btn btn-danger" href="{{route('admin.edit.product.view', $p->slug)}}"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="{{$p->created_at}}" class="entry-date">{{$p->created_at->diffForHumans()}}</time>
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

        </div>
        <!-- .container -->
    </section>

    @endsection


</x-app-layout>
