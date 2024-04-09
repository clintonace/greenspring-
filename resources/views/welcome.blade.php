
<x-guest-layout>


@section('content')



<!--Main Slider Start-->
<section class="main-slider-three clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer-three"
                    style="background-image: url(/assets/guest/assets/images/backgrounds/main-slider-3-1.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-three__content">
                                <div class="main-slider-three__sub-title-box">
                                    <div class="main-slider-three__shape-1">
                                        <img src="/assets/guest/assets/vendors/images/shapes/main-slider-three-shape-1.png" alt="">
                                    </div>
                                    <div class="main-slider-three__shape-2">
                                        <img src="/assets/guest/assets/vendors/images/shapes/main-slider-three-shape-2.png" alt="">
                                    </div>
                                    <p class="main-slider-three__sub-title">Welcome to GreenSprings Online Strore</p>
                                </div>
                                <h2 class="main-slider-three__title">GreenSpring</h2>
                                <div class="main-slider-three__btn-box">
                                    <a href="{{route('user.all.products.view')}}" class="thm-btn main-slider-three__btn">Start
                                        Shopping
                                        <i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="swiper-slide">
                <div class="image-layer-three"
                    style="background-image: url(/assets/guest/assets/images/backgrounds/main-slider-3-2.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-three__content">
                                <div class="main-slider-three__sub-title-box">
                                    <div class="main-slider-three__shape-1">
                                        <img src="/assets/guest/assets/images/shapes/main-slider-three-shape-1.png" alt="">
                                    </div>
                                    <div class="main-slider-three__shape-2">
                                        <img src="/assets/guest/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                    </div>
                                    <p class="main-slider-three__sub-title">Welcome to Organic Online Strore</p>
                                </div>
                                <h2 class="main-slider-three__title">Organic Market</h2>
                                <div class="main-slider-three__btn-box">
                                    <a href="products.html" class="thm-btn main-slider-three__btn">Start
                                        Shopping
                                        <i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="swiper-slide">
                <div class="image-layer-three"
                    style="background-image: url(/assets/guest/assets/images/backgrounds/main-slider-3-3.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-three__content">
                                <div class="main-slider-three__sub-title-box">
                                    <div class="main-slider-three__shape-1">
                                        <img src="/assets/guest/assets/images/shapes/main-slider-three-shape-1.png" alt="">
                                    </div>
                                    <div class="main-slider-three__shape-2">
                                        <img src="/assets/guest/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                    </div>
                                    <p class="main-slider-three__sub-title">Welcome to Organic Online Strore</p>
                                </div>
                                <h2 class="main-slider-three__title">Organic Market</h2>
                                <div class="main-slider-three__btn-box">
                                    <a href="products.html" class="thm-btn main-slider-three__btn">Start
                                        Shopping
                                        <i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}



        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->

<!--Feature Three Start-->
<section class="feature-three">
    <div class="container">
        <div class="row">
            <!--feature three Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="feature-three__single feature-three__single--first">
                    <div class="feature-three__icon">
                        <span class="icon-global-shipping"></span>
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">Return Policy</h3>
                        <p class="feature-three__subtitle">Money back guarantee</p>
                    </div>
                </div>
            </div>
            <!--feature three Single End-->
            <!--feature three Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="feature-three__single">
                    <div class="feature-three__icon">
                        <span class="icon-free-delivery"></span>
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">Free Shipping</h3>
                        <p class="feature-three__subtitle">On all orders over ₦60,000</p>
                    </div>
                </div>
            </div>
            <!--feature three Single End-->
            <!--feature three Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="feature-three__single feature-three__single--three">
                    <div class="feature-three__icon">
                        <span class="icon-store"></span>
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">Store Locator</h3>
                        <p class="feature-three__subtitle">Find your nearest store</p>
                    </div>
                </div>
            </div>
            <!--feature three Single End-->
            <!--feature three Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="feature-three__single">
                    <div class="feature-three__icon">
                        <span class="icon-payment-security"></span>
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">Secure Payments</h3>
                        <p class="feature-three__subtitle">You’re on safe and secure</p>
                    </div>
                </div>
            </div>
            <!--feature three Single End-->
        </div>
    </div>
</section>
<!--Feature Three End-->

<!--New Product Start-->
<section class="new-product">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Checkout Our Products</span>
            <h2 class="section-title__title">New Featured Products</h2>
            <div class="section-title__icon">
                <img src="/assets/guest/assets/images/icon/section-title-icon-1.png" alt="">
            </div>
        </div>
        <div class="row">
            <div style="display: flex; justify-content: right">
                <a href="{{route('user.all.products.view')}}" style="border-radius: 20px" class="btn btn-success">View all</a>
            </div>
        </div>
        <div class="row">

            @foreach ($products as $p)

             <!--New Product Single Start-->
             <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="new-product__single">
                    <div class="new-product__img-box">
                        <div class="new-product__img">
                            @php
                                $image = explode('|', $p->image);
                            @endphp
                            <img style="height: 300px; width: 300px" src="/assets/ProductImage/{{$image[0]}}" alt="">
                            <span class="new-product__sale">On Sale</span>
                            <div class="new-product__img-icon">
                                <a href="{{route('user.single.product.view', $p->slug)}}"><i class="icon-shopping-cart p-1"></i>Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="new-product__content">
                        {{-- <div class="new-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> --}}
                        <h3 class="new-product__title"><a href="{{route('user.single.product.view', $p->slug)}}">{{$p->name}}</a></h3>
                        <p class="new-product__price">₦{{number_format($p->price)}}</p>
                    </div>
                </div>
            </div>
            <!--New Product Single End-->

            @endforeach

        </div>
    </div>
</section>
<!--New Product End-->

<!--Banners Start-->
<section class="banners">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="banners__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="banners__left-img">
                        <img src="/assets/guest/assets/images/resources/banners-img-1.png" alt="">
                    </div>
                    <div class="banners__left-shape-one"
                        style="background-image: url(assets/images/shapes/banner-shape-1.png);"></div>
                    <div class="banners__content">
                        <h3 class="banners__left-title">100% <br> Natural</h3>
                        <p class="banners__left-sub-title">Quality Natures Food Store</p>
                        <a href="{{route('user.all.products.view')}}" class="thm-btn banners__left-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="banners__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="banners__right-img">
                        <img src="/assets/guest/assets/images/resources/banners-img-2.png" alt="">
                    </div>
                    <div class="banners__right-shape-two"
                        style="background-image: url(assets/images/shapes/banner-shape-2.png);"></div>
                    <div class="banners__content">
                        <h3 class="banners__right-title">Pure Healthy <br> Plants</h3>
                        <p class="banners__right-sub-title">Quality Natural Food Store</p>
                        <a href="{{route('user.all.products.view')}}" class="thm-btn banners__right-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banners End-->

<!--Video Two Start-->
<section class="video-one video-two">
    <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/video-two-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="#" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <div class="video-one__shape">
                        <img src="/assets/guest/assets/images/resources/video-one-1.png" alt="">
                    </div>
                    <h2 class="video-one__video-title">Be Healthy & Eat Only
                        <br>Fresh Home Grown Vagetables</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video Two End-->

<!--Healthy Food Two Start-->
<section class="health-food-two">
    <div class="health-food-two__shape-2 zoom-fade">
        <img src="/assets/guest/assets/images/shapes/healthy-food-two-shape-2.png" alt="">
    </div>
    <div class="health-food-two__inner">
        <div class="healthy-food-two__bg-color"></div>
        <div class="health-food-two__shape-1 zoom-fade">
            <img src="/assets/guest/assets/images/shapes/healthy-food-two-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="healthy-food-two__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Healthy Products</span>
                            <h2 class="section-title__title">Everyday eat fresh food</h2>
                            <div class="section-title__icon">
                                <img src="/assets/guest/assets/images/icon/section-title-icon-1.png" alt="">
                            </div>
                        </div>
                        <p class="healthy-food-two__left-text">We provide you with your garden bagged and on the go.
                            </p>
                        <ul class="healthy-food-two__points list-unstyled">
                            <li class="healthy-food-two__points-list">
                                <div class="healthy-food-two__points-icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="healthy-food-two__points-text">
                                    <p>100% Home grown</p>
                                </div>
                            </li>
                            <li class="healthy-food-two__points-list">
                                <div class="healthy-food-two__points-icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="healthy-food-two__points-text">
                                    <p>Natural soil and bagged.</p>
                                </div>
                            </li>
                            <li class="healthy-food-two__points-list">
                                <div class="healthy-food-two__points-icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="healthy-food-two__points-text">
                                    <p>Easy purchase and delivery service.</p>
                                </div>
                            </li>
                            <li class="healthy-food-two__points-list">
                                <div class="healthy-food-two__points-icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="healthy-food-two__points-text">
                                    <p>Read and comment about our products.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{route('user.all.products.view')}}" class="thm-btn healthy-food-two__btn">Shop Now <i
                                class="icon-right-arrow"></i> </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="healthy-food-two__right wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="health-food-two__shape-3 zoom-fade">
                            <img src="/assets/guest/assets/images/shapes/healthy-food-two-shape-3.png" alt="">
                        </div>
                        <div class="health-food-two__shape-4 float-bob-x">
                            <img src="/assets/guest/assets/images/shapes/healthy-food-two-shape-4.png" alt="">
                        </div>
                        <div class="healthy-food-two__img-box">
                            <div class="healthy-food-two__shape-one"></div>
                            <div class="healthy-food-two__organic-img">
                                <img src="/assets/guest/assets/images/shapes/healthy-food-two-shape-6.png" alt="">
                            </div>
                            <div class="healthy-food-two__img">
                                <img src="/assets/guest/assets/images/resources/healthy-food-two-img-1.png" alt="">
                            </div>
                            <div class="healthy-food-two__content">
                                <div class="healthy-food-two__content-img">
                                    <img src="/assets/guest/assets/images/shapes/healthy-food-two-shape-5.png" alt="">
                                </div>
                                <h3 class="healthy-food-two__title">Healthy</h3>
                                <p class="healthy-food-two__subtitle">Fresh Food</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Healthy Food Two End-->

<!--Brand One Start-->
{{-- <section class="brand-one">
    <div class="brand-one__inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "margin": 0,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "600":{
                                "items":2
                            },
                            "800":{
                                "items":3
                            },
                            "1024":{
                                "items": 4
                            },
                            "1200":{
                                "items": 5
                            }
                        }
                    }'>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="/assets/guest/assets/images/brand/brand-1-1.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="/assets/guest/assets/images/brand/brand-1-2.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="/assets/guest/assets/images/brand/brand-1-3.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="/assets/guest/assets/images/brand/brand-1-4.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="/assets/guest/assets/images/brand/brand-1-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--Brand One End-->

<!--Testimonial Three Start-->
{{-- <section class="testimonial-three">
    <div class="testimonial-three__shape-1"
        style="background-image: url(assets/images/shapes/testimonial-three-shape-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonial-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our Testimonials</span>
                        <h2 class="section-title__title">What They’re taking about agrion</h2>
                        <div class="section-title__icon">
                            <img src="/assets/guest/assets/images/icon/section-title-icon-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-three__right">
                    <div class="testimonial-three__carousel thm-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":true,
                        "dots":false,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 2
                            }
                        }
                    }'>
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                        amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="/assets/guest/assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                            <div class="testimonial-one__quote">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details-box">
                                    <div class="testimonial-one__client-details">
                                        <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                        amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="/assets/guest/assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                            <div class="testimonial-one__quote">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details-box">
                                    <div class="testimonial-one__client-details">
                                        <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                        amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="/assets/guest/assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                            <div class="testimonial-one__quote">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details-box">
                                    <div class="testimonial-one__client-details">
                                        <h4 class="testimonial-one__client-name">Aleesha Brown</h4>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                        amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="/assets/guest/assets/images/testimonial/testimonial-1-4.jpg" alt="">
                                            <div class="testimonial-one__quote">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details-box">
                                    <div class="testimonial-one__client-details">
                                        <h4 class="testimonial-one__client-name">Mike Hardson</h4>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                        amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="/assets/guest/assets/images/testimonial/testimonial-1-5.jpg" alt="">
                                            <div class="testimonial-one__quote">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details-box">
                                    <div class="testimonial-one__client-details">
                                        <h4 class="testimonial-one__client-name">Jolie Michale</h4>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                        amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="/assets/guest/assets/images/testimonial/testimonial-1-6.jpg" alt="">
                                            <div class="testimonial-one__quote">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details-box">
                                    <div class="testimonial-one__client-details">
                                        <h4 class="testimonial-one__client-name">David Smith</h4>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--Testimonial Three End-->

<!--New Product Two Start-->
{{-- <section class="new-product-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Checkout Our Products</span>
            <h2 class="section-title__title">Our Latest Products</h2>
            <div class="section-title__icon">
                <img src="/assets/guest/assets/images/icon/section-title-icon-1.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="new-product-two__top">
                    <ul class="new-product-two__filter style1 post-filter list-unstyled clearfix">
                        <li data-filter=".filter-item" class="active"><span class="filter-text">All</span>
                        </li>
                        <li data-filter=".dairy"><span class="filter-text">Dairy</span></li>
                        <li data-filter=".pantry"><span class="filter-text">Pantry</span></li>
                        <li data-filter=".meat"><span class="filter-text">Meat</span></li>
                        <li data-filter=".fruits"><span class="filter-text">Fruits</span></li>
                        <li data-filter=".vage"><span class="filter-text">Vagetables</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            <!--New Product Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 filter-item vage fruits">
                <div class="new-product__single">
                    <div class="new-product__img-box">
                        <div class="new-product__img">
                            <img src="/assets/guest/assets/images/resources/new-product-2-1.jpg" alt="">
                            <div class="new-product__img-icon">
                                <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="new-product__content">
                        <div class="new-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="new-product__title"><a href="products.html">Fresh Potato</a></h3>
                        <p class="new-product__price">$16.00</p>
                    </div>
                </div>
            </div>
            <!--New Product Single End-->
            <!--New Product Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 filter-item dairy pantry">
                <div class="new-product__single">
                    <div class="new-product__img-box">
                        <div class="new-product__img">
                            <img src="/assets/guest/assets/images/resources/new-product-2-2.jpg" alt="">
                            <div class="new-product__img-icon">
                                <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="new-product__content">
                        <div class="new-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="new-product__title"><a href="products.html">Tomatos</a></h3>
                        <p class="new-product__price">$13.00</p>
                    </div>
                </div>
            </div>
            <!--New Product Single End-->
            <!--New Product Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 filter-item pantry meat">
                <div class="new-product__single">
                    <div class="new-product__img-box">
                        <div class="new-product__img">
                            <img src="/assets/guest/assets/images/resources/new-product-2-3.jpg" alt="">
                            <div class="new-product__img-icon">
                                <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="new-product__content">
                        <div class="new-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="new-product__title"><a href="products.html">Red Chilli</a></h3>
                        <p class="new-product__price">$18.00</p>
                    </div>
                </div>
            </div>
            <!--New Product Single End-->
            <!--New Product Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 filter-item meat fruits vage dairy">
                <div class="new-product__single">
                    <div class="new-product__img-box">
                        <div class="new-product__img">
                            <img src="/assets/guest/assets/images/resources/new-product-2-4.jpg" alt="">
                            <span class="new-product__sale">Sale</span>
                            <div class="new-product__img-icon">
                                <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="new-product__content">
                        <div class="new-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="new-product__title"><a href="products.html">Carrots</a></h3>
                        <p class="new-product__price">$8.00</p>
                    </div>
                </div>
            </div>
            <!--New Product Single End-->
        </div>
    </div>
</section> --}}
<!--New Product Two End-->

<!--Provide One End-->

<!--Blog One Start-->
<section class="blog-one blog-three">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">From the Blog Post</span>
            <h2 class="section-title__title">Latest News & Articles</h2>
            <div class="section-title__icon">
                <img src="/assets/guest/assets/images/icon/section-title-icon-1.png" alt="">
            </div>
        </div>
        <div class="row">

            @foreach ($blogs as $b)

            @php
                $images = explode('|', $b->image)

            @endphp

            <!--Blog One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img style="height: 300px; width: 300px;" src="/assets/BlogImages/{{$images[0]}}" alt="">
                        <div class="blog-one__date">
                            <span>{{$b->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="blog-one__meta list-unstyled">
                            <li>
                                <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                            </li>
                            <li>
                                <a href="blog-details.html"><i class="fas fa-comments"></i>{{$b->comments->count()}}</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title"><a href="blog-details.html">{{$b->title}}</a></h3>
                    </div>
                </div>
            </div>
            <!--Blog One Single End-->
            @endforeach

        </div>
    </div>
</section>
<!--Blog One End-->

<!--Instagram Start-->
<section class="instagram">
    <div class="container">
        <div class="instagram__title">
            <h3>Follow GreenSpring on Socials</h3>
        </div>
        <div class="row">
            <!--Instagram Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="instagram__single">
                    <div class="instagram__img">
                        <img src="/assets/guest/assets/images/resources/instagram-1.jpg" alt="">
                        <i class="fa  fa-4x fa-facebook"></i>
                        <div class="instagram__img-icon">
                            <a href="#"><span class="fab fa-facebook"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Instagram Single End-->
            <!--Instagram Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="instagram__single">
                    <div class="instagram__img">
                        <img src="/assets/guest/assets/images/resources/instagram-2.jpg" alt="">

                        <i class="fa  fa-4x fa-instagram"></i>
                        <div class="instagram__img-icon">
                            <a href="#"><span class="fab fa-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Instagram Single End-->
            <!--Instagram Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="instagram__single">
                    <div class="instagram__img">
                        <img src="/assets/guest/assets/images/resources/instagram-3.jpg" alt="">
                        <i class="fa  fa-4x fa-twitter"></i>

                        <div class="instagram__img-icon">
                            <a href="#"><span class="fab fa-twitter"></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Instagram End-->

@endsection

</x-guest-layout>


{{-- <x-guest-layout>


@section('content')


@endsection

</x-guest-layout> --}}


