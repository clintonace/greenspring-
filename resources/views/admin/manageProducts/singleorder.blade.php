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
                <div class="col-sm-12">
                    <h3>Order Summary</h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h5>
                            Order Info:
                        </h5>

                        <ul class="list1 no-bullets">
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Order date:
                                        </strong>
                                        <time datetime="{{$order->created_at}}"
                                            class="entry-date">{{$order->created_at}}</time>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-info fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Reference no.
                                        </strong>
                                        {{$order->reference}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16 round">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Delivery Address:
                                        </strong>
                                        {{$order->trnx->location}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-danger fontsize_16 round">
                                            <i class="fa fa-dollar"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Order Total:
                                        </strong>
                                        ₦{{number_format($order->price)}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->

                <div class="col-md-6">
                    <div class="with_border with_padding">
                        <h5>
                            Customer Info:
                        </h5>
                        <ul class="list1 no-bullets">

                            <li>
                                {{-- <div class="media">

                                    <div class="media-left">
                                        <img src="images/team/01.jpg" alt="...">
                                    </div>
                                    <div class="media-body media-middle">
                                        <h5 class="bottommargin_0">
                                            <a href="admin_profile.html">Customer</a>
                                        </h5>
                                        &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="cfaaa2aea6a38faab7aea2bfa3aae1aca0a2">[email&#160;protected]</a>&gt;

                                    </div>
                                </div> --}}
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                    </div>
                                    {{-- <div class="media-body media-middle">
                                        <strong class="grey">
                                            Comments:
                                        </strong>
                                        146
                                    </div> --}}
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">

                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Time Ordered:
                                        </strong>
                                        {{$order->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Order Quantity:
                                        </strong>
                                        {{$order->quantity}}
                                    </div>

                                </div>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Delivery Status:
                                        </strong>
                                        {{$order->delivered}}
                                    </div>

                                </div>
                            </li>
                        </ul>

                        <div>
                            <p>If you have deleivered this product click <em>delivered </em> to update the delivery
                                status.
                            <form action="{{route('admin.deliver.order', $order->id)}}" method="POST">

                                @csrf

                                <button type="submit" class="btn btn-success">Delivered</button>

                            </form>
                            </p>

                            <p>If you returned this product click <em>returned </em> to update the delivery status.

                            <form action="{{route('admin.return.order', $order->id)}}" method="POST">
                                @csrf


                                <button class="btn btn-danger">Returned</button>


                            </form>
                            </p>
                        </div>
                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    @endsection


</x-app-layout>
