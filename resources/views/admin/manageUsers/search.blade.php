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
                    <h3>Searched Users.</h3>
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

                                    <form method="POST" class=" form-inline"
                                        action="{{route('admin.search.users')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="screen-reader-text" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" name="search"
                                                class="form-control" placeholder="Search Users">
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
                                    <th>User:</th>
                                    <th>Email:</th>
                                    <th>Role:</th>
                                    <th>Action:</th>
                                    <th>Date:</th>
                                </tr>

                                @foreach ($users as $user)


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
                                                    {{$user->name}}
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <strong>
                                           {{$user->email}}
                                        </strong>
                                    </td>
                                    @if ($user->role == 1)

                                    <td class="media-middle">
                                        <strong>
                                           Super Admin
                                        </strong>
                                    </td>
                                    @endif
                                    @if ($user->role == 0)

                                    <td class="media-middle">
                                        <strong>
                                           Manager
                                        </strong>
                                    </td>
                                    @endif

                                    <td class="media-middle">
                                        <strong>
                                           <a href="{{route('users.profile', $user->id)}}">Profile</a>
                                        </strong>
                                    </td>

                                    <td class="media-middle">
                                        <time datetime="{{$user->created_at->diffForHumans()}}" class="entry-date">{{$user->created_at->diffForHumans()}}</time>
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
