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
                <div class="col-md-4">
                    <h3 class="dashboard-page-title">Dashboard
                        <small>main page</small>
                    </h3>
                </div>
                <div class="col-md-8 text-md-right">
                    <h3 class="sparklines-title">
                        <sup>Today Earnings:</sup>

                        $3,000

                        <span class="sparklines"
                            data-values="670,350,135,-170,-324,-386,-468,-200,55,375,520,270,790,-670,-350,135,170,324,386,468,10,55,375,520,270,790"
                            data-type="bar" data-line-color="#eeb269" data-neg-color="#dc5753" data-height="30"
                            data-bar-width="2">
                        </span>

                    </h3>

                    <h3 class="sparklines-title">
                        <sup>Yesterday Earn: </sup>
                        $4,000

                        <span class="sparklines"
                            data-values="670,350,135,-170,-324,386,-468,-10,55,375,520,-270,790,670,-350,135,170,324,386,468,10,-55,-375,-520,270,790"
                            data-type="bar" data-line-color="#4db19e" data-neg-color="#007ebd" data-height="30"
                            data-bar-width="2">
                        </span>
                    </h3>

                </div>

            </div>
            <!-- .row -->

            <div class="row">

                <div class="col-xs-12 col-md-6">

                    <!-- Basic form -->
                    <h4>Add Category</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.add.category')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    placeholder="Enter Category">
                            </div>

                            <button type="submit" class="theme_button">Add</button>
                        </form>
                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->

                <div class="col-sm-6">

                    <h4>All Categories</h4>
                    <div class="with_border with_padding">
                        <h3 class="divider_40">Categories</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cats as $cat)

                                <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="fa fa-eye"></i>
                                        <i class="fa fa-pencil"></i>
                                        <i class="fa fa-trash"></i>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
