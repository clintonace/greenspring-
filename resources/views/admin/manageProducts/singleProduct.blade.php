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
                    <h3>Single Product</h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h5>
                            Product content:
                        </h5>

                        <ul class="list1 no-bullets">
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Product name:
                                        </strong>
                                        {{$product->name}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Product quantity:
                                        </strong>
                                        {{$product->quantity}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Product status:
                                        </strong>
                                        {{$product->status}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Product Description:
                                        </strong>
                                        {{$product->description}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Product price:
                                        </strong>
                                        ₦{{number_format($product->price)}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- .muted_background -->
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    @endsection
</x-app-layout>
