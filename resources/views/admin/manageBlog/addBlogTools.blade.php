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
                    <h3 class="dashboard-page-title">Add Tools
                    </h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row">

                <div class="col-xs-12 col-md-6">

                    <!-- Basic form -->
                    <h4>Add Category</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.add.blog.category')}}" method="POST">
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

                <div class="col-xs-12 col-md-6">

                    <!-- Basic form -->
                    <h4>Add Tag</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.add.blog.tag')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tag:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    placeholder="Enter Tag">
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

                                        <i class="openModalBtn fa fa-pencil" data-modal-id="modal{{$loop->index}}"></i>

                                    </td>
                                </tr>
                                <div id="modal{{$loop->index}}" class="modal">
                                    <div class="modal-content">
                                        {{-- <span class="close">&times;</span> --}}
                                        <p>Click any where outside to close.</p>
                                        <form action="{{route('admin.edit.blog.category', $cat->id)}}" method="post">
                                            @csrf
                                            <input type="text" name="name" value="{{$cat->name}}" class="form-control">
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
                {{-- <button id="openModalBtn">Open Modal</button> --}}



                <div class="col-sm-6">

                    <h4>All Tags</h4>
                    <div class="with_border with_padding">
                        <h3 class="divider_40">Tags</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tag</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="openModalBtn fa fa-pencil" data-modal-id="modal{{$loop->index}}"></i>
                                    </td>
                                </tr>

                                <div id="modal{{$loop->index}}" class="modal">
                                    <div class="modal-content">
                                        {{-- <span class="close">&times;</span> --}}
                                        <p>Click anywhere outside to close.</p>
                                        <form action="{{route('admin.edit.blog.tag', $tag->id)}}" method="post">
                                            @csrf
                                            <input type="text" name="name" value="{{$tag->name}}" class="form-control">
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </form>
                                    </div>
                                </div>
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
