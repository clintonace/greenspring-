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
                    <h3 class="dashboard-page-title">Add Product

                    </h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Add Product</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('admin.add.product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price:</label>
                                <input type="number" name="price" placeholder="Enter Price" class="form-control" id="exampleInputEmail1">
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Enter Quantity">
                                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Status:</label>
                                <select name="status" class="form-control" id="">
                                    <option selected disabled>Select Status</option>
                                    <option value="in-stock">In Stock</option>
                                    <option value="out-of-stock">Out of Stock</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />

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
                                <label for="exampleInputEmail1">Description:</label>
                                <textarea name="description" id="editor" class="form-control" cols="30" rows="10"></textarea>
                                {{-- <input type="text" class="form-control" id="editor" name="description"> --}}

                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Images(Choose 1, 2 or 3 images ):</label>
                                {{-- <input name="image" accept="image*/" class="form-control" type="file" /> --}}
                                <input name="image[]" accept="image*/" class="form-control" type="file" multiple />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            </div>

                            <button type="submit" class="theme_button">Submit</button>
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

