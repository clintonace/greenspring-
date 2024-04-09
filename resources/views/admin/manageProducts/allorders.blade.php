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
                    <h3>All Orders</h3>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">


                        <!-- .row -->

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">

                                <tr>
                                    <td class="media-middle text-center">
                                        No:
                                    </td>
                                    <th>Title:</th>
                                    <th>Price:</th>
                                    <th>Email:</th>
                                    <th>Transaction_id:</th>
                                    <th>Reference:</th>
                                    <th>Delivered:</th>
                                    <th>Action:</th>
                                    <th>Date:</th>

                                </tr>
                                @foreach ($paid as $p)

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
                                                    <a href="admin_product.html">{{$p->product->name}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <strong>
                                            ₦{{number_format($p->price)}}
                                        </strong>
                                    </td>

                                    <td class="media-middle">
                                        {{$p->email}}
                                    </td>
                                    <td class="media-middle">
                                        {{$p->transaction_id}}
                                    </td>
                                    <td class="media-middle">
                                        {{$p->reference}}
                                    </td>
                                    <td class="media-middle">
                                        {{$p->delivered}}
                                    </td>
                                    <td class="media-middle">
                                        <div>
                                            <a href="{{route('admin.single.order', $p->id)}}"><i class="fa fa-eye"></i></a>
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
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination">
                                {{ $paid->links() }}
                            </ul>
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
