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
                    <h3>Searched blogs</h3>
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

                                    <form method="POST" class="form-inline" action="{{route('admin.search.blog')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="screen-reader-text" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" name="search" class="form-control"
                                                placeholder="Search for blogs">
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
                                    {{-- <th>Blog:</th> --}}
                                    <th>Category:</th>
                                    <th>Comments:</th>
                                    <th>Action:</th>
                                    <th>Date:</th>

                                </tr>


                                @foreach ($blogs as $b)
                                @php
                                $img = explode('|', $b->image);
                                if ($img == null) {

                                    $img = 'alt';
                                }
                                @endphp

                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        {{$loop->index =+ 1}}
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <img src="/assets/BlogImages/{{$img[0]}}" alt="...">
                                            </div>
                                            <div class="media-body media-middle">
                                                <h5>
                                                    <a href="{{route('admin.single.blog', $b->slug)}}">{{$b->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="media-middle">
                                        {{$b->category->name}}
                                    </td>
                                    <td class="media-middle">
                                        {{$b->comments->count()}}
                                    </td>

                                    <td class="media-middle">
                                        <div style="display: flex; justify-content: space-between">
                                            <a style="color: white" class="btn btn-danger"
                                                href="{{route('admin.single.blog', $b->slug)}}"><i
                                                    class="fa fa-eye"></i></a>
                                            <form action="{{route('admin.delete.blog', $b->id)}}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a style="color: white" class="btn btn-danger"
                                                href="{{route('admin.edit.blog.view', $b->slug)}}"><i
                                                    class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="{{$b->created_at}}"
                                            class="entry-date">{{$b->created_at->diffForHumans()}}</time>
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
