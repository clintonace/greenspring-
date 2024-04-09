<x-guest-layout>

    @section('content')

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $b)

                @php
                $image = explode('|',$b->image);
                @endphp

                <!--Blog One Single Start-->

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <a href="{{route('user.single.blog.view', $b->slug)}}">
                            <div class="blog-one__img">
                                <img style="height: 400px; width:400px;" src="/assets/BlogImages/{{$b->image}}" alt="">
                                <div class="blog-one__date">
                                    <span>{{$b->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i>{{$b->comments->count()}}</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a
                                        href="{{route('user.single.blog.view', $b->slug)}}">{{$b->title}}</a></h3>
                            </div>
                        </a>
                    </div>
                </div>

                <!--Blog One Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Blog Page End-->


    <div>
        <ul>
            {{ $blogs->links() }}
        </ul>
    </div>

    @endsection

</x-guest-layout>
