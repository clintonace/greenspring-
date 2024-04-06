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
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Add Blog</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.add.blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                                    placeholder="Enter Name of blog">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />


                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tag:</label>
                                <select class="form-control" multiple name="tags[]">
                                    <option selected disabled>Select Tags</option>
                                    @foreach ($tags as $tag)

                                    <option value="{{$tag->name}}">{{$tag->name}}</option>

                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Category:</label>
                                <select class="form-control" name="category_id">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($cats as $cat)

                                    <option value="{{$cat->id}}">{{$cat->name}}</option>

                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Related Product (The product will be displayed as
                                    reference to the blog when it is displayed if your blog content does not relate to
                                    any product you can leave this blank):</label>
                                <select class="form-control" name="product_id">
                                    <option selected disabled>Select Product</option>
                                    @foreach ($products as $p)

                                    <option value="{{$p->id}}">{{$p->name}}</option>

                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('product_id')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Content:</label>
                                <textarea name="blog" id="editor" class="form-control" cols="30" rows="10"></textarea>
                                {{-- <input type="text" class="form-control" id="editor" name="description"> --}}

                                <x-input-error :messages="$errors->get('blog')" class="mt-2" />

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Images(Choose 1, 2 or 3 images ):</label>
                                {{-- <input name="image" accept="image*/" class="form-control" type="file" /> --}}
                                <input name="image" accept="image*/" class="form-control" type="file" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            </div>

                            <button type="submit" class="theme_button">Add Blog</button>
                        </form>
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