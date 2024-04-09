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
                    <h3>Single Comment</h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h5>
                            Comment content:
                        </h5>
                        <ul class="list1 no-bullets">
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-comment"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Comment:
                                        </strong>
                                        {{$comment->comment}}
                                    </div>


                                    <div style="margin-top: 20px">

                                        @if ($comment->approval != 1)

                                        <form action="{{route('admin.approve.comment', $comment->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-success">Approve</button>
                                        </form>

                                        @else
                                        <form action="{{route('admin.delete.comment', $comment->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-success">Delete/Dissapprove</button>
                                        </form>
                                        @endif

                                    </div>
                                </div>
                            </li>
                        </ul>
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
