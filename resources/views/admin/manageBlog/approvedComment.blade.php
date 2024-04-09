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
                    <h3 class="dashboard-page-title">Commnets

                    </h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Approved Comments</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">

                            <tr>
                                <td class="media-middle text-center">
                                    No:
                                </td>
                                <th>Email:</th>
                                <th>Phone:</th>
                                <th>Date:</th>
                                <th>Action:</th>

                            </tr>
                            @foreach ($comments as $c)

                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    {{$loop->index =+ 1}}
                                </td>
                                <td>
                                    <div class="media">

                                        <div class="media-body media-middle">
                                            <h5>
                                                <a href="#">{{$c->email}}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="media-middle">
                                    {{$c->phone}}
                                </td>

                                <td class="media-middle">
                                    <time datetime="{{$c->created_at}}"
                                        class="entry-date">{{$c->created_at->diffForHumans()}}</time>
                                </td>

                                <td class="media-middle">
                                    <div style="display: flex; justify-content: space-between">
                                        <a style="color: white" class="btn btn-danger" href="{{route('admin.single.comment.view', $c->id)}}"><i
                                                class="fa fa-eye"></i></a>

                                        @if ($c->approval != 1)

                                        <form action="{{route('admin.approve.comment', $c->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-success">Approve</button>
                                            {{-- <button class="btn btn-success"><i class="fa fa-share"></i></button> --}}
                                        </form>
                                        @endif

                                        <form action="{{route('admin.delete.comment', $c->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- .container -->
    </section>
    @endsection
</x-app-layout>
