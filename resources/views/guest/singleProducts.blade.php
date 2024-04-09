<x-guest-layout>

    @section('content')


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Product Details</li>
                </ul>
                <h2>Product Details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            @if ($product->image != null)

            @php
            $images = explode('|', $product->image);
            @endphp

            <div class="row">
                @foreach ($images as $img)

                <img style="height: 300px; width: 300px;" src="/assets/ProductImage/{{$img}}" alt="">

                {{-- <div class="col-xl-2">
                    <div class="project-details__top">
                        <div class="project-details__img">
                        </div>
                    </div>
                </div> --}}
                @endforeach

            </div>

            @endif

            <div class="project-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__content-left">

                            {!! $product->description !!}

                        </div>
                        <div>
                            <button class="btn btn-success">
                                <a href="">Buy Now</a>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="project-details__content-left">


                            <div class="project-details__details-box">
                                {{-- <div class="project-details__bg-shape"
                                    style="background-image: url(/assets/guest/images/shapes/project-details-shape-1.png);">
                                </div> --}}
                                <ul class="list-unstyled project-details__details-list">
                                    <li>
                                        <p class="project-details__client">Date</p>
                                        <h4 class="project-details__name">{{$product->created_at->diffForHumans()}}</h4>
                                    </li>
                                    <li>
                                        <p class="project-details__client">Category</p>
                                        <h4 class="project-details__name">{{$product->category->name}}</h4>
                                    </li>
                                    <li>
                                        <p class="project-details__client">Price</p>
                                        <h4 class="project-details__name">₦ {{number_format($product->price)}}</h4>
                                    </li>
                                    <li>
                                        <p class="project-details__client">Location</p>
                                        <h4 class="project-details__name">New York, USA</h4>
                                    </li>
                                    <li>
                                        <p class="project-details__client">Value</p>
                                        <h4 class="project-details__name">$25,60000</h4>
                                    </li>
                                    <li>
                                        <div class="project-details__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Project Details End-->

    <!--Smilar Project Start-->
    {{-- <section class="Smilar-project">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Latest Projects</span>
                <h2 class="section-title__title">Our Similar Projects</h2>
                <div class="section-title__icon">
                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                </div>
            </div>
            <div class="row">
                <!--Project One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="project-one__single">
                        <div class="project-one__inner">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-one-3.jpg" alt="">
                            </div>
                            <div class="project-one__arrow">
                                <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__tagline">organic</span>
                                <h3 class="project-one__title"><a href="project-details.html">Agriculture
                                        <br> farming</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single Start-->
                <!--Project One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="project-one__single">
                        <div class="project-one__inner">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-one-4.jpg" alt="">
                            </div>
                            <div class="project-one__arrow">
                                <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__tagline">solution</span>
                                <h3 class="project-one__title"><a href="project-details.html">the Farming
                                        <br> season</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single Start-->
                <!--Project One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="project-one__single">
                        <div class="project-one__inner">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-one-5.jpg" alt="">
                            </div>
                            <div class="project-one__arrow">
                                <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__tagline">harvest</span>
                                <h3 class="project-one__title"><a href="project-details.html">ecological
                                        <br> farming</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single Start-->
                <!--Project One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="project-one__single">
                        <div class="project-one__inner">
                            <div class="project-one__img">
                                <img src="assets/images/project/project-one-6.jpg" alt="">
                            </div>
                            <div class="project-one__arrow">
                                <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__tagline">farming</span>
                                <h3 class="project-one__title"><a href="project-details.html">Natural way
                                        <br> of agriculture</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single Start-->
            </div>
        </div>
    </section> --}}
    <!--Smilar Project End-->


    @endsection

</x-guest-layout>
