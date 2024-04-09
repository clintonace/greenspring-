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
                    <h4>Edit Product</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.edit.product', $product->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{$product->name}}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="quantity"
                                    value="{{$product->quantity}}">
                                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="price"
                                    value="{{$product->price}}">
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />


                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Status:</label>
                                <select name="status" class="form-control" id="">
                                    <option value="{{$product->status}}">{{$product->status}}</option>
                                    <option value="in-stock">In Stock</option>
                                    <option value="out-of-stock">Out of Stock</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Category:</label>
                                <select class="form-control" name="category_id">
                                    <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                                    @foreach ($cats as $cat)

                                        <option value="{{$cat->id}}">{{$cat->name}}</option>

                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description:</label>
                                <textarea name="description" id="editor" class="form-control" cols="30" rows="10">
                                    {{$product->description}}
                                </textarea>
                                {{-- <input type="text" class="form-control" id="editor" name="description"> --}}

                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>

                            <button type="submit" class="theme_button">Edit</button>
                        </form>
                    </div>
                    <!-- .with_border -->
                </div>
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Edit Product Images</h4>

                    @php
                    $image=explode('|', $product->image);
                    // dd($image);
                    @endphp
                    <div class="with_border with_padding">

                        <div style="display: flex;">

                            <div class="row">
                                @foreach ($image as $img)

                                <div class="col-lg-6 ">

                                    <img style="height: 500px; width: 500px" src="/assets/ProductImage/{{$img}}"
                                        alt="nil">


                                    <form action="{{route('admin.edit.product.image', [$img ? $img : 'empty',$product->id])}}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="file" accept="image*/" class="form-control" id="exampleInputEmail1"
                                                name="image">
                                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                                        </div>

                                        <button type="submit" class="theme_button">Edit</button>
                                    </form>
                                    <form
                                        action="{{route('admin.delete.product.image', [$img ? $img : 'empty',$product->id])}}"
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
        </div>
        <!-- .container -->
    </section>
    @endsection
</x-app-layout>
