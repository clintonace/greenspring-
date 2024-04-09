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
                <div class="col-sm-12">
                    <h3>{{$user->name}} Profile</h3>
                </div>
                <div class="col-sm-6">
                    <img style="height: 150px; border-radius: 15px" src="/assets/userImages/{{$user->image}}" alt="">
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
                                        {{$user->name}}
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
                                        {{$user->email}}
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

                        <form action="{{route('edit.profile', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{$user->name}}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{$user->email}}">
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

                        <div style="margin-top: 50px;">
                            @if (Auth::user()->role == 1 )
                            <form action="{{route('give.role', $user->id)}}" method="POST">
                                @csrf
                                <label for="">Give This user an admin role</label>
                                <select name="role" class="form-control" id="">
                                    <option selected disabled>Select a Role</option>
                                    <option value="{{'1'}}">Manager</option>
                                    <option value="{{'007'}}">Super Admin</option>
                                </select>
                                <button type="submit" class="btn btn-success"> Give Role</button>
                            </form>
                            @endif
                        </div>


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
