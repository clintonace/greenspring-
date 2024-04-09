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
                    <h3 class="dashboard-page-title">Edit

                    </h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Edit Blog</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.edit.blog', $blog->slug)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                                    value="{{$blog->title}}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />


                            </div>



                            @if ($blog->product = null)

                            <div class="form-group">
                                <label for="exampleInputPassword1">Associated Product:</label>
                                <strong>{{$blog->product->name}}</strong>
                                <em>You can choose a new set of Product.</em>
                                <select name="product_id" class="form-control" id="">
                                    <option selected disabled>Select Product</option>

                                    @foreach ($products as $p)

                                    <option value="{{$p->id}}">{{$p->name}}</option>

                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('product_id')" class="mt-2" />

                            </div>

                            @endif

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tag:</label>
                                <strong>{{$blog->tag}}</strong>
                                <em>You can choose a new set of tags.</em>
                                <select name="tag[]" multiple class="form-control" id="">
                                    <option selected disabled>Select Tag</option>

                                    @foreach ($tags as $t)
                                    <option value="{{$t->name}}">{{$t->name}}</option>
                                    @endforeach

                                </select>
                                <x-input-error :messages="$errors->get('tag')" class="mt-2" />

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
                                <label for="exampleInputEmail1">Blog:</label>
                                <textarea name="blog" id="editor" class="form-control" cols="30" rows="10">
                                    {!! $blog->blog !!}
                                </textarea>
                                <x-input-error :messages="$errors->get('blog')" class="mt-2" />
                            </div>

                            <button type="submit" class="theme_button">Edit</button>
                        </form>
                    </div>
                    <!-- .with_border -->
                </div>
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Edit Blog Images</h4>

                    @php
                    $image=explode('|', $blog->image);
                    @endphp
                    <div class="with_border with_padding">

                        <div style="display: flex;">

                            <div class="row">
                            @foreach ($image as $img)

                                <div class="col-lg-6 ">

                                <img style="height: 500px; width: 500px" src="/assets/BlogImages/{{$img}}" alt="nil">


                                <form action="{{route('admin.edit.blog.image', [$img ? $img : 'empty',$blog->id])}}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />

                                    </div>

                                    <button type="submit" class="theme_button">Edit</button>
                                </form>
                                <form action="{{route('admin.delete.blog.image', [$img ? $img : 'empty',$blog->id])}}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="theme_button btn-danger">Delete</button>
                                </form>
                            </div>


                            @endforeach
                        </div>
                        </div>

                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>

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
                    @foreach ($blog->comments as $c)

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
                            <div>
                                <a class="btn btn-danger" href="{{route('admin.single.comment.view', $c->id)}}"><i
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
        <!-- .container -->
    </section>
    @endsection
</x-app-layout>
