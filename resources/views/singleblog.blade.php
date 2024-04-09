<x-guest-layout>


    @section('content')


    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">

                            @php
                            $image = explode('|',$blog->image);
                            @endphp

                            <div class="row">


                                @foreach ($image as $img)
                                <div class="col-lg-6">

                                    <img style="height: 400px; width:400px;" src="/assets/BlogImages/{{$img}}" alt="">

                                </div>
                                @endforeach

                            </div>
                            <div class="blog-details__date">
                                <p>{{$blog->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><a href="blog-details.html"><i class="fas fa-user-circle"></i> Admin</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-comments"></i>
                                        {{$blog->comments->count()}}
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-details__title">{{$blog->title}}</h3>
                            <p class="blog-details__text-1">{!! $blog->blog !!}</p>

                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Tags</span>
                                <a href="#">{{$blog->tag}}</a>

                            </p>
                            <div class="blog-details__social-list">
                                <a href="blog-details.html"><i class="fab fa-twitter"></i></a>
                                <a href="blog-details.html"><i class="fab fa-facebook"></i></a>
                                <a href="blog-details.html"><i class="fab fa-pinterest-p"></i></a>
                                <a href="blog-details.html"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="comment-one">
                            <h3 class="comment-one__title">{{$blog->comments->count()}} Comments</h3>
                            @foreach ($blog->comments as $c)
                            <div class="comment-one__single">

                                <i class="fas fa-10x fa-user-circle"></i>

                                @if ($c->approval ==1)

                                <div class="comment-one__content">
                                    <h3>{{$c->email}}</h3>
                                    <p>{{$c->comment}}</p>
                                </div>
                                @else

                                <div class="comment-one__content">
                                    <h6>not Approved yet</h6>

                                </div>
                                @endif

                            </div>
                            @endforeach

                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="{{route('admin.add.comment', $blog->id)}}" method="POST"
                                    class="comment-one__form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="comment" placeholder="Write a Comment"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="sumbit" class="thm-btn">Submit Comment <i
                                                        class="icon-right-arrow"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($blogs as $b)

                                @php
                                $image = explode('|',$b->image)
                                @endphp
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="/assets/BlogImage/{{$image[0]}}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i>Admin</span>
                                            <a href="{{route('user.single.blog.view', $blog->slug)}}">{{$b->title}}</a>
                                        </h3>
                                    </div>
                                </li>

                                @endforeach


                            </ul>
                        </div>
                        {{-- <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="blog-details.html">Agriculture<span class="icon-right-arrow"></span></a>
                                </li>
                                <li class="active"><a href="blog-details.html">Dairy Farm<span
                                            class="icon-right-arrow"></span></a></li>
                                <li><a href="blog-details.html">Economy Solution<span
                                            class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="blog-details.html">Harvests Innovations<span
                                            class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="blog-details.html">Organic Food<span class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="blog-details.html">Fresh Vegetables<span
                                            class="icon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Tags</h3>
                            <div class="sidebar__tags-list">
                                <a href="#">Agriculture</a>
                                <a href="#">Farm</a>
                                <a href="#">Eco</a>
                                <a href="#">Milk</a>
                                <a href="#">Dairy</a>
                                <a href="#">Organic</a>
                            </div>
                        </div>
                        <div class="sidebar__single sidebar__comments">
                            <h3 class="sidebar__title">Recent Comments</h3>
                            <ul class="sidebar__comments-list list-unstyled">
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A wordpress commenter on <br> launch new mobile app</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p> <span>John Doe</span> on template:</p>
                                        <h5>comments</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A wordpress commenter on <br> launch new mobile app</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p> <span>John Doe</span> on template:</p>
                                        <h5>comments</h5>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->

    @endsection

</x-guest-layout>
