<x-guest-layout>

    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="slider--area" data-background="/assets/img/bg/slider_area_bg.jpg">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-3 d-none d-lg-block">
                        <div class="header-category">
                            <a href="" class="cat-toggle"><i class="fas fa-bars"></i>ALL Categories<i
                                    class="fas fa-angle-down"></i></a>
                            <ul class="category-menu">
                                @foreach ($categories as $category)
                                <li><a href="{{route('category-product', $category->id)}}"><i class="flaticon-cherry"></i>{{$category->name}} {{ $category->products->count() }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="slider-active">
                            <div class="single-slider slider-bg content-right"
                                data-background="/assets/img/slider/slider__bg01.jpg">
                                <div class="slider-content">
                                    <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">top deal !</h5>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">organic food</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp"
                                        data-delay=".8s">Shop Now</a>
                                </div>
                            </div>
                            <div class="single-slider slider-bg"
                                data-background="/assets/img/slider/slider__bg02.jpg">
                                <div class="slider-content">
                                    <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Top sale !</h5>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">fresh healthy</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp"
                                        data-delay=".8s">Shop Now</a>
                                </div>
                            </div>
                            <div class="single-slider slider-bg"
                                data-background="/assets/img/slider/slider__bg03.jpg">
                                <div class="slider-content">
                                    <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">best service
                                    </h5>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">nutrition food</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp"
                                        data-delay=".8s">Shop Now</a>
                                </div>
                            </div>
                            <div class="single-slider slider-bg"
                                data-background="/assets/img/slider/slider__bg04.jpg">
                                <div class="slider-content">
                                    <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">top deal !</h5>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Smart cream</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp"
                                        data-delay=".8s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- category-area -->
            <div class="container custom-container">
                <div class="container custom-container">
                    <div class="slider-category-wrap">
                        <div class="row category-active">
                            <div class="col-lg-2">
                                <div class="category-item active">
                                    <a href="shop.html" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="assets/img/product/category_img01.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title">Juice & Drinks</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="category-item">
                                    <a href="shop.html" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="assets/img/product/category_img02.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title">Vegetables</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="category-item">
                                    <a href="shop.html" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="assets/img/product/category_img03.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title">Fresh Nuts</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="category-item">
                                    <a href="shop.html" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="assets/img/product/category_img04.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title">Cleaning</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="category-item">
                                    <a href="shop.html" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="assets/img/product/category_img05.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title">fresh meat</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="category-item">
                                    <a href="shop.html" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="assets/img/product/category_img06.png" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title">Powders</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- category-area-end -->

        </section>
        <!-- slider-area-end -->

        <!-- special-products-area -->
        <section class="special--products-area pt-70 pb-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-title section-title-two text-center mb-30">
                            <span class="sub-title">Awesome Shop</span>
                            <h2 class="title">Our Special Products</h2>
                        </div>
                        <div class="special--product-nav">
                            <button class="active" data-filter="*">Featured</button>
                            <button class="" data-filter=".cat-one">Best Seller</button>
                            <button class="" data-filter=".cat-two">Top Rated</button>
                        </div>
                    </div>
                </div>
                <div class="row special--product-active">
                    @foreach ($products as $product)
                    <x-product-component :product="$product"></x-product-component>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- special-products-area-end -->

        <!-- discount-time-area -->
        <section class="discount-time-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="discount-time-bg">
                            <div class="discount-time-img left"><img
                                    src="/assets/img/images/discount_count_shape01.png" class="wow rollIn"
                                    data-wow-delay=".3s" alt=""></div>
                            <div class="discount-time-img right"><img
                                    src="/assets/img/images/discount_count_shape02.png" alt=""></div>
                            <div class="discount-time-content">
                                <div class="section-title section-title-two text-center mb-25">
                                    <span class="sub-title">Get a Discount</span>
                                    <h2 class="title">Best Deals of this Week!</h2>
                                </div>
                                <div class="coming-time" data-countdown="2021/10/20"></div>
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- discount-time-area-end -->

        <!-- bd-week-area -->
        <section class="bd-week-area pt-70 pb-30">
            <div class="container">
                <div class="row align-items-end mb-50">
                    <div class="col-md-8 col-sm-9">
                        <div class="section-title section-title-two">
                            <span class="sub-title">Season Discount</span>
                            <h2 class="title">Best Deals of this Week!</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3">
                        <div class="section-btn-link text-left text-md-right">
                            <a href="shop.html">Shop All <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="sp--product--item mb-50">
                            <div class="sp--product--thumb">
                                <a href="cart.html" class="wishlist"><i class="flaticon-heart-shape-outline"></i></a>
                                <a href="shop-details.html"><img src="/assets/img/product/bdw_products01.png"
                                        alt=""></a>
                            </div>
                            <div class="sp--product--content">
                                <h6 class="title"><a href="shop-details.html">Organic Broccoli</a></h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="price">$12.00/kg</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="sp--product--item mb-50">
                            <div class="sp--product--thumb">
                                <a href="cart.html" class="wishlist"><i class="flaticon-heart-shape-outline"></i></a>
                                <a href="shop-details.html"><img src="/assets/img/product/bdw_products02.png"
                                        alt=""></a>
                            </div>
                            <div class="sp--product--content">
                                <h6 class="title"><a href="shop-details.html">Organic Butter</a></h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="price">$9.99/kg</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="sp--product--item mb-50">
                            <div class="sp--product--thumb">
                                <span class="batch new">New</span>
                                <a href="cart.html" class="wishlist"><i class="flaticon-heart-shape-outline"></i></a>
                                <a href="shop-details.html"><img src="/assets/img/product/bdw_products03.png"
                                        alt=""></a>
                            </div>
                            <div class="sp--product--content">
                                <h6 class="title"><a href="shop-details.html">Mat Orange</a></h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="price">$9.99/kg</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="sp--product--item mb-50">
                            <div class="sp--product--thumb">
                                <a href="cart.html" class="wishlist"><i class="flaticon-heart-shape-outline"></i></a>
                                <a href="shop-details.html"><img src="/assets/img/product/bdw_products04.png"
                                        alt=""></a>
                            </div>
                            <div class="sp--product--content">
                                <h6 class="title"><a href="shop-details.html">France Potato</a></h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="price">$9.99/kg</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bd-week-area-end -->

        <!-- ganic-app-area -->
        <section class="ganic-app-area">
            <div class="container">
                <div class="ganic-app-wrap">
                    <div class="ganic-app-img">
                        <img src="/assets/img/images/download_img.png" alt="">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-6">
                            <div class="ganic-app-content">
                                <div class="shape"><img src="/assets/img/images/app_download_shape.png"
                                        alt=""></div>
                                <span class="sub-title">Online Platform</span>
                                <h2 class="title"><span>download</span> ganic APP 2021</h2>
                                <div class="ganic-app-btn">
                                    <a href="index-2.html"><img src="/assets/img/icon/app_btn01.png"
                                            alt=""></a>
                                    <a href="index-2.html"><img src="/assets/img/icon/app_btn02.png"
                                            alt=""></a>
                                </div>
                                <p>gets you 5% off every purchase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ganic-app-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-70 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title section-title-two text-center mb-50">
                            <span class="sub-title">Our Articles</span>
                            <h2 class="title">Our Latest News</h2>
                            <p>Organic food is food produced by methods complying with the standards of organic farming
                                vary worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="/assets/img/blog/blog_post_thumb01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-date">03 <span>AUG</span></div>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><a href="blog-details.html">Admin</a></li>
                                        <li><a href="blog-details.html">03 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Best ways to support healthy immune
                                        system</a></h4>
                                <div class="blog-post-bottom">
                                    <ul>
                                        <li class="read-more"><a href="blog-details.html">Read More <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li class="share-btn"><a href="blog-details.html"><i
                                                    class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="/assets/img/blog/blog_post_thumb02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-date">04 <span>AUG</span></div>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><a href="blog-details.html">Admin</a></li>
                                        <li><a href="blog-details.html">04 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Organic food is food produced methods
                                        complying</a></h4>
                                <div class="blog-post-bottom">
                                    <ul>
                                        <li class="read-more"><a href="blog-details.html">Read More <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li class="share-btn"><a href="blog-details.html"><i
                                                    class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="/assets/img/blog/blog_post_thumb03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-date">05 <span>AUG</span></div>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><a href="blog-details.html">Admin</a></li>
                                        <li><a href="blog-details.html">03 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Best ways to support healthy immune
                                        system</a></h4>
                                <div class="blog-post-bottom">
                                    <ul>
                                        <li class="read-more"><a href="blog-details.html">Read More <i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                        <li class="share-btn"><a href="blog-details.html"><i
                                                    class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->

</x-guest-layout>
{{--  --}}
