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
                    <li>Projects</li>
                </ul>
                <h2>Project Details</h2>
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
                <div class="col-xl-3">
                    <div class="project-details__top">
                        <div class="project-details__img">
                            <img style="height: 300px; width: 300px;" src="/assets/ProductImage/{{$img}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            @endif

            <div class="project-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__content-left">

                            {!! $product->description !!}

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__content-right">
                            <div class="project-details__quote">
                                <h3 class="project-details__quote-title text-center">Checkout</h3>
                                <form action={{route('pay', $product->id)}} method="POST">
                                    @csrf
                                    <div class="project-details__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                    <div class="project-details__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                    <div class="project-details__input-box">
                                        <input type="number" placeholder="1" name="quantity">
                                    </div>
                                    <div class="project-details__input-box">
                                        <input type="text" placeholder="09031876166" name="phone">
                                    </div>
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="amount" value="{{$product->price}}">
                                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                    <input type="hidden" name="callbackurl" value="{{route('callbackurl')}}">
                                    <div class="project-details__input-box text-message-box">
                                        <textarea name="location" placeholder="Enter Detailed Location"></textarea>
                                    </div>


                                    <em style="font-size: 15px; line-height: 1rem" class="text-danger text-center">(You can make payment online, with the buy button below.
                                        )</em>
                                    <div style="display: flex; justify-content: center; margin-top:5px; margin-bottom: 5px">
                                        <button name="paystack" value="paystack" type="submit"
                                            class="btn btn-success">Buy</button>or
                                    </div>


                                    <em style="font-size: 15px; line-height: 1rem" class="text-danger">(You can place an order via mail, we will reach out to you to confirm the order
                                        within an hour.)</em>

                                    <div style="display: flex; justify-content: center">

                                        <button name="mail" value="mail" type="submit"
                                            class="btn btn-success">Order</button>

                                    </div>
                                </form>
                            </div>

                            <div class="project-details__details-box">
                                {{-- <div class="project-details__bg-shape"
                                    style="background-image: url(/assets/guest/images/shapes/project-details-shape-1.png);">
                                </div> --}}
                                <ul class="list-unstyled project-details__details-list">
                                    <li>
                                        <p class="project-details__client">Date</p>
                                        <h4 class="project-details__name">30 July, 2022</h4>
                                    </li>
                                    <li>
                                        <p class="project-details__client">Client</p>
                                        <h4 class="project-details__name">Themeforest, Envato</h4>
                                    </li>
                                    <li>
                                        <p class="project-details__client">Website</p>
                                        <h4 class="project-details__name">agrion.com</h4>
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
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__pagination-box">
                        <ul class="project-details__pagination list-unstyled clearfix">
                            <li class="next">
                                <div class="icon">
                                    <a href="#" aria-label="Previous"><i class="icon-left-arrow"></i></a>
                                </div>
                                <div class="content">
                                    <p>Previous</p>
                                </div>
                            </li>
                            <li class="count"><a href="#"></a></li>
                            <li class="count"><a href="#"></a></li>
                            <li class="count"><a href="#"></a></li>
                            <li class="count"><a href="#"></a></li>
                            <li class="previous">
                                <div class="content">
                                    <p>Next</p>
                                </div>
                                <div class="icon">
                                    <a href="#" aria-label="Previous"><i class="icon-right-arrow"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Details End-->

    <!--Smilar Project Start-->
    <section class="Smilar-project">
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
    </section>
    <!--Smilar Project End-->


    @endsection

</x-guest-layout>
