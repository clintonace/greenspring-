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
                <div class="col-sm-6">
                    <h3>My Profile</h3>
                </div>
                <div class="col-sm-6">
                    <img style="height: 150px; border-radius: 15px" src="/assets/userImages/{{Auth::user()->image}}" alt="">
                </div>
            </div>
            <!-- .row -->

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h5>
                            Profile details:

                        </h5>
                        <ul class="list1 no-bullets">
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Name:
                                        </strong>
                                        {{Auth::user()->name}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Email:
                                        </strong>
                                        {{Auth::user()->email}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-12">

                    <!-- Basic form -->
                    <h4>Edit Profile</h4>
                    <div class="with_border with_padding">

                        <form action="{{route('edit.profile', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{Auth::user()->name}}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{Auth::user()->email}}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image:</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" accept="image*/" name="image"
                                   >
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <button type="submit" class="theme_button">Edit</button>
                        </form>

                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    @endsection


</x-app-layout>
