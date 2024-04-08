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
                <div class="col-sm-12">
                    <h3>Single blog</h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h5>
                            Blog content:
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
                                            Blog title:
                                        </strong>
                                        {{$blog->title}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-info fontsize_16 round">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Content:
                                        </strong>
                                        {!! $blog->blog !!}
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
                                            Category:
                                        </strong>
                                        {{$blog->category->name}}
                                    </div>
                                </div>
                            </li>
                            @if ($blog->product != null)

                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16 round">
                                            <i class="fa fa-product-hunt"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Associated Product:
                                        </strong>
                                        {{$blog->product->name}}
                                    </div>
                                </div>
                            </li>
                            @endif

                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16 round">
                                            <i class="fa fa-tags"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Tags:
                                        </strong>
                                        {{$blog->tag}}
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->

                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    @endsection


</x-app-layout>
