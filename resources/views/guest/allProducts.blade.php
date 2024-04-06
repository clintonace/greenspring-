

<x-guest-layout>

    @section('content')


    <div class="page-wrapper">

            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>Shop</li>
                        </ul>
                        <h2>Our Products</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--Product Start-->
            <section class="product">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="product__sidebar">
                                <div class="shop-search product__sidebar-single">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </div>
                                <div class="product__price-ranger product__sidebar-single">
                                    <h3 class="product__sidebar-title">Price</h3>
                                    <div class="price-ranger">
                                        <div id="slider-range"></div>
                                        <div class="ranger-min-max-block">
                                            <input type="text" readonly class="min">
                                            <span>-</span>
                                            <input type="text" readonly class="max">
                                            <input type="submit" value="Filter">
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-category product__sidebar-single">
                                    <h3 class="product__sidebar-title">Categories</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Agriculture</a></li>
                                        <li class="active"><a href="#">Dairy Farm</a></li>
                                        <li><a href="#">Economy Solution</a></li>
                                        <li><a href="#">Harvests Innovations</a></li>
                                        <li><a href="#">Organic Food</a></li>
                                        <li><a href="#">Fresh Vegetables</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="product__items">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="product__showing-result">
                                            <div class="product__showing-text-box">
                                                <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                                            </div>
                                            <div class="product__showing-sort">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Sort by popular">Sort by popular</option>
                                                        <option value="1">Sort by popular</option>
                                                        <option value="2">Sort by Price</option>
                                                        <option value="3">Sort by Ratings</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__all">
                                    <div class="row">
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-1.jpg" alt="">
                                                        <span class="product__all-sale">Sale</span>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Brown
                                                            Bread</a></h4>
                                                    <p class="product__all-price">$23.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-2.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Red
                                                            Onion</a></h4>
                                                    <p class="product__all-price">$10.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-3.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a
                                                            href="product-details.html">Broccoli</a></h4>
                                                    <p class="product__all-price">$12.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-4.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Fresh
                                                            Potato</a></h4>
                                                    <p class="product__all-price">$16.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-5.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a
                                                            href="product-details.html">Tomatos</a></h4>
                                                    <p class="product__all-price">$13.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-6.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Lemons</a>
                                                    </h4>
                                                    <p class="product__all-price">$10.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-7.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Red
                                                            Chilli</a></h4>
                                                    <p class="product__all-price">$18.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-8.jpg" alt="">
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a
                                                            href="product-details.html">Carrots</a></h4>
                                                    <p class="product__all-price">$8.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                        <!--Product All Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img">
                                                        <img src="assets/images/shop/shop-product-1-2.jpg" alt="">
                                                        <span class="product__all-sale">Sale</span>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Brown
                                                            Bread</a></h4>
                                                    <p class="product__all-price">$23.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product All Single End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Product End-->

    </div><!-- /.page-wrapper -->

    @endsection

    </x-guest-layout>


