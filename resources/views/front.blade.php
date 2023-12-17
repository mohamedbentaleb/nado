@extends('layouts.app')

@section('title', 'Nado.ma')

@section('content')
  <!-- Content -->
  <div class="page-content">
    <!-- Slider -->
    <div class="bnr-slider">
        <div class="slider-carousel owl-carousel owl-theme owl-none owl-dots">
            <div class="item">
                <div class="slider-item overlay-black-middle" style="background-image: url({{ asset('assets/images/main-slider/slide3.jpg') }});">
                    <div class="dlab-content container">
                        <h1 class="title">Koi Rio <span class="text-primary">z</span></h1>
                        <h5 class="sub-title">For Rent $50 Per Day</h5>
                        <a href="#" class="site-button button-md outline outline-2 white text-uppercase">reserve Now</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-item overlay-black-middle" style="background-image: url({{ asset('assets/images/main-slider/slide4.jpg') }});">
                    <div class="dlab-content container">
                        <h1 class="title">Koi Rio <span class="text-primary">z</span></h1>
                        <h5 class="sub-title">For Rent $50 Per Day</h5>
                        <a href="#" class="site-button button-md outline outline-2 white text-uppercase">reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- searching cars form -->
        <div class="car-searching text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-head style-1">
                            <div class="title-sm text-uppercase">120+ cars type and brands</div>
                            <h3 class="h3 m-t10">Search Your <span class="text-primary font-weight-900">Best Cars</span></h3>
                            <div class="sep-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="searching-form">
                <div class="container">
                    <div class="row search-row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label>Car brands</label>
                                <select class="form-control">
                                    <option>Any Brands</option>
                                    <option>Brand 1</option>
                                    <option>Brand 2</option>
                                    <option>Brand 3</option>
                                    <option>Brand 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label>Car Type</label>
                                <select class="form-control">
                                    <option>Any Type</option>
                                    <option>Type 1</option>
                                    <option>Type 2</option>
                                    <option>Type 3</option>
                                    <option>Type 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label>Car Price</label>
                                <select class="form-control">
                                    <option>Price low to high</option>
                                    <option>Price high to low</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <button type="submit" class="site-button">Search car now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- searching cars form end -->
    </div>
    <!-- Slider END -->

    <!-- advantages -->
    <div class ="section-full content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center" data-name="A">
                        <div class="title-sm text-uppercase">120+ cars type and brands</div>
                        <h2 class="h2">Car Dealers <span class="font-weight-800">Advantages</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="icon-bx-wraper m-b30 center adv-box bg-white">
                        <div class="icon-lg m-b10 text-primary"> <a href="#" class="icon-cell"><i class="flaticon-customer-service"></i></a> </div>
                        <div class="icon-content">
                            <h3 class="dlab-tilte m-b10 text-capitalize">24/7 Customer Online Support</h3>
                            <p>Call us Anywhere Anytime</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="icon-bx-wraper m-b30 center adv-box bg-white">
                        <div class="icon-lg m-b10 text-primary"> <a href="#" class="icon-cell"><i class="flaticon-calendar"></i></a> </div>
                        <div class="icon-content">
                            <h3 class="dlab-tilte m-b10 text-capitalize">Reservation any time you wants</h3>
                            <p>24/7 Customer Online Reservation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon-bx-wraper m-b30 center adv-box bg-white">
                        <div class="icon-lg m-b10 text-primary"> <a href="#" class="icon-cell"><i class="flaticon-placeholder"></i></a> </div>
                        <div class="icon-content">
                            <h3 class="dlab-tilte m-b10 text-capitalize">Lots of picking location</h3>
                            <p>250+ locations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advantages end -->
    <!-- about -->
    <div class="section-full content-inner bg-white about-sect">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 m-b30">
                    <figure>
                        <img src="{{ asset('assets/images/about/pic4.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="col-lg-5 col-md-6 m-t30">
                    <div class="section-head style-1 m-b30 left gray" data-name="W">
                        <div class="title-sm text-uppercase">Know more about us</div>
                        <h2 class="h2">Who<span class="font-weight-800">Cars Dealers</span> are</h2>
                        <div class="sep"></div>
                    </div>
                    <div class="">
                        <p class="text-gray-dark">We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality and good taste.</p>
                        <ul class="list-about">
                            <li>We working since 1980 with 4.000 customers</li>
                            <li>All brand & type cars in our garage</li>
                            <li>1.000+ picking locations around the world</li>
                        </ul>
                    </div>
                    <figure class="sign relative">
                        <div class="sign-img relative">
                            <img src="{{ asset('assets/images/signature.png') }}">
                        </div>
                        <div class="owner-sign font-14">CARS DEALERS OWNER</div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->
    <!-- discount-offers -->
    <div class="section-full content-inner-1 bg-dis-offers overlay-black-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 left light-gray opacity" data-name="R">
                        <div class="row display-align">
                            <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                <div class="title-sm text-uppercase text-white">New Member discount</div>
                                <h2 class="h2 text-primary">Reserved Now & Get <span class="font-weight-800">50%</span> Off for Audi & Mercedes Only. Cars Dealers</h2>
                                <div class="sep"></div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                                <button class="site-button text-uppercase pull-right" type="button"><span class="m-r5"><i class="fa fa-user"></i></span> Sign up now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel clearfix offers owl-none">
                        <div class="item">
                            <div class="discount-box text-white">
                                <div>
                                    <figure>
                                        <img src="{{ asset('assets/images/offers/pic1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="right-part">
                                    <ul class="star m-b0">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="font-22 m-tb5"><a href="car-details-overview.html"><span class="font-weight-700">Audi Cabriolet</span> R8</a></h4>
                                    <p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
                                    <ul class="discount-link list-inline m-b0">
                                        <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="discount-box text-white">
                                <div>
                                    <figure>
                                        <img src="{{ asset('assets/images/offers/pic2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="right-part">
                                    <ul class="star m-b0">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="font-22 m-tb5"><a href="car-detail-pictures.html"><span class="font-weight-700">Mercedes Benz</span> I7</a></h4>
                                    <p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
                                    <ul class="discount-link list-inline m-b0">
                                        <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="discount-box text-white">
                                <div>
                                    <figure>
                                        <img src="{{ asset('assets/images/offers/pic3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="right-part">
                                    <ul class="star m-b0">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="font-22 m-tb5"><a href="car-detail-specifications.html"><span class="font-weight-700">Audi Cabriolet</span> R8</a></h4>
                                    <p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
                                    <ul class="discount-link list-inline m-b0">
                                        <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="discount-box text-white">
                                <div>
                                    <figure>
                                        <img src="{{ asset('assets/images/offers/pic1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="right-part">
                                    <ul class="star m-b0">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="font-22 m-tb5"><a href="new-car-upcoming.html"><span class="font-weight-700">Mercedes Benz</span> I7</a></h4>
                                    <p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
                                    <ul class="discount-link list-inline m-b0">
                                        <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="discount-box text-white">
                                <div>
                                    <figure>
                                        <img src="{{ asset('assets/images/offers/pic3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="right-part">
                                    <ul class="star m-b0">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="font-22 m-tb5"><a href="new-car-popular.html"><span class="font-weight-700">Audi Cabriolet</span> R8</a></h4>
                                    <p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
                                    <ul class="discount-link list-inline m-b0">
                                        <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="discount-box text-white">
                                <div>
                                    <figure>
                                        <img src="{{ asset('assets/images/offers/pic1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="right-part">
                                    <ul class="star m-b0">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="font-22 m-tb5"><a href="new-car-latest.html"><span class="font-weight-700">Mercedes Benz</span> I7</a></h4>
                                    <p class="discount-price m-b10 font-14"><del>$40,152</del> <span class="font-weight-800">25.00 USD</span> per day</p>
                                    <ul class="discount-link list-inline m-b0">
                                        <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- discount-offers end -->
    <!-- featured-offers -->
    <div class ="section-full content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center" data-name="B">
                        <div class="title-sm text-uppercase">featured cars</div>
                        <h2 class="h2">Our <span class="font-weight-800">Best Offers</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clearfix owl-carousel featured-offer owl-theme owl-nav  owl-dots col-lg-12 p-lr0">
                    <div class="item">
                        <div class="dlab-space">
                            <div class="dlab-feed-list style-1 relative">
                                <div class="dlab-media">
                                    <a href="new-car-latest.html"><img src="{{ asset('assets/images/featured/pic1.jpg') }}" alt=""></a>
                                </div>
                                <div class="dlab-info">
                                    <h5 class="dlab-title h5"><a href="new-car-latest.html">Volk <span class="text-primary">GTR</span> </a></h5>
                                    <p class="dlab-price">Start at <span>45.00 USD</span> per day</p>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                            <li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rent-link">
                                    <a href="#" class="site-button">RENT THIS CAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-space">
                            <div class="dlab-feed-list style-1 relative">
                                <div class="dlab-media">
                                    <a href="new-car-latest.html"><img src="{{ asset('assets/images/featured/pic2.jpg') }}" alt=""></a>
                                </div>
                                <div class="dlab-info">
                                    <h5 class="dlab-title h5"><a href="new-car-latest.html">Audi <span class="text-primary">R8</span> </a></h5>
                                    <p class="dlab-price">Start at <span>45.00 USD</span> per day</p>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                            <li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rent-link">
                                    <a href="#" class="site-button">RENT THIS CAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-space">
                            <div class="dlab-feed-list style-1 relative">
                                <div class="dlab-media">
                                    <a href="new-car-latest.html"><img src="{{ asset('assets/images/featured/pic3.jpg') }}" alt=""></a>
                                </div>
                                <div class="dlab-info">
                                    <h5 class="dlab-title h5"><a href="new-car-latest.html">Hyundai <span class="text-primary">ZE</span> </a></h5>
                                    <p class="dlab-price">Start at <span>45.00 USD</span> per day</p>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                            <li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rent-link">
                                    <a href="#" class="site-button">RENT THIS CAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-space">
                            <div class="dlab-feed-list style-1 relative">
                                <div class="dlab-media">
                                    <a href="new-car-latest.html"><img src="{{ asset('assets/images/featured/pic1.jpg') }}" alt=""></a>
                                </div>
                                <div class="dlab-info">
                                    <h5 class="dlab-title h5"><a href="new-car-latest.html">Volk <span class="text-primary">GTR</span> </a></h5>
                                    <p class="dlab-price">Start at <span>45.00 USD</span> per day</p>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                            <li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rent-link">
                                    <a href="#" class="site-button">RENT THIS CAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-space">
                            <div class="dlab-feed-list style-1 relative">
                                <div class="dlab-media">
                                    <a href="new-car-latest.html"><img src="{{ asset('assets/images/featured/pic2.jpg') }}" alt=""></a>
                                </div>
                                <div class="dlab-info">
                                    <h5 class="dlab-title h5"><a href="new-car-latest.html">Audi <span class="text-primary">R8</span> </a></h5>
                                    <p class="dlab-price">Start at <span>45.00 USD</span> per day</p>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                            <li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rent-link">
                                    <a href="#" class="site-button">RENT THIS CAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-space">
                            <div class="dlab-feed-list style-1 relative">
                                <div class="dlab-media">
                                    <a href="new-car-latest.html"><img src="{{ asset('assets/images/featured/pic3.jpg') }}" alt=""></a>
                                </div>
                                <div class="dlab-info">
                                    <h5 class="dlab-title h5"><a href="new-car-latest.html">Hyundai <span class="text-primary">ZE</span> </a></h5>
                                    <p class="dlab-price">Start at <span>45.00 USD</span> per day</p>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                            <li><a href="javascript:"><i class="flaticon-settings"></i> Manual</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                            <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3k cc</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rent-link">
                                    <a href="#" class="site-button">RENT THIS CAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-offers end -->
    <!-- testimonial -->
    <div class="section-full content-inner-1 bg-white testimonial-sc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 gray text-center" data-name="T">
                        <div class="title-sm text-uppercase">Latest testimonial</div>
                        <h2 class="h2">What <span class="font-weight-800">They Say</span>about us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-part">
                        <div id="sync1" class="team-carousel-info owl-carousel owl-theme owl-btn-center-lr">
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <p>“Tes This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies. Our rental experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <p>“Your price was lower than other companies. Our rental experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet. Test 2 This was our first time renting from Royal Cars and we were very pleased with the whole experience.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <p>“Our rental experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet. Test 3 This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-person">
                            <div id="sync2" class="team-carousel owl-carousel owl-theme owl-btn-center-lr owl-btn-1">
                                <div class="item">
                                    <div class="mfp-gallery">
                                        <div class="dlab-box">
                                            <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/pic1.jpg') }}" alt="">
                                                <div class=""></div>
                                            </div>
                                            <div class="dlab-title-bx p-t30">
                                                <h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
                                                <span class="clearfix font-12">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="mfp-gallery">
                                        <div class="dlab-box">
                                            <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/pic2.jpg') }}" alt="">
                                            </div>
                                            <div class="dlab-title-bx p-t30">
                                                <h5 class="text-black m-a0"><a href="#">David Matin</a></h5>
                                                <span class="clearfix font-12">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="mfp-gallery">
                                        <div class="dlab-box">
                                            <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/pic3.jpg') }}" alt=""></div>
                                            <div class="dlab-title-bx p-t30">
                                                <h5 class="text-black m-a0"><a href="#">Mary Lucas</a></h5>
                                                <span class="clearfix font-12">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial end -->
    <!-- team -->
    <div class="section-full content-inner-1 bg-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="advertise">
                        <img src="{{ asset('assets/images/add.jpg') }}" alt=""/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="section-head style-1 text-center light-gray opacity" data-name="S">
                    <div class="title-sm text-uppercase text-white">Our Professional Staff</div>
                    <h2 class="h2 text-white">Cars Dealer <span class="font-weight-800">Drives</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="team-box bg-white" style="background-image: url(images/team/pic1.jpg);">
                        <div class="team-about">
                            <div>
                                <h4><a href="javascript:;">Luis <br>Henrique</a></h4>
                                <p>5 Years Experience</p>
                            </div>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-box bg-white" style="background-image: url(images/team/pic2.jpg);">
                        <div class="team-about">
                            <div>
                                <h4><a href="javascript:;">Robertho <br>Garcia</a></h4>
                                <p>5 Years Experience</p>
                            </div>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="team-box bg-white" style="background-image: url(images/team/pic3.jpg);">
                        <div class="team-about">
                            <div>
                                <h4><a href="javascript:;">Daniel <br>Quaresma</a></h4>
                                <p>5 Years Experience</p>
                            </div>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <a href="javascript:;" class="site-button text-uppercase" style="width: 100%;">View All Drivers</a>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- brands -->
    <div class ="section-full content-inner brand">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center" data-name="V">
                        <div class="title-sm text-uppercase">120+ cars type and brands</div>
                        <h2 class="h2">Car Dealers <span class="font-weight-800">Advantages</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="site-filters brand-tab clearfix  m-b40">
                        <ul class="filters" data-toggle="buttons">
                            <li data-filter="" class="btn">
                                <input type="radio">
                                <a href="#" class=""><span>All Manufacturer</span></a> </li>
                            <li data-filter="honda" class="btn">
                                <input type="radio" >
                                <a href="#" class=""><span> Honda </span></a> </li>
                            <li data-filter="mercedes" class="btn active">
                                <input type="radio">
                                <a href="#" class="active"><span> Mercedes Benz</span></a> </li>
                            <li data-filter="toyota" class="btn">
                                <input type="radio">
                                <a href="#" class=""><span> Toyota </span></a> </li>
                            <li data-filter="volkswagen" class="btn">
                                <input type="radio">
                                <a href="#" class=""><span> Volkswagen</span></a>
                            </li>
                            <li data-filter="audi" class="btn">
                                <input type="radio">
                                <a href="#" class=""><span> Audi</span></a>
                            </li>
                            <li data-filter="ferrari" class="btn">
                                <input type="radio">
                                <a href="#" class=""><span> Ferrari</span></a>
                            </li>
                            <li data-filter="chevrolet" class="btn">
                                <input type="radio">
                                <a href="#" class=""><span> Chevrolet</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8">
                    <ul id="" class="row dlab-gallery-listing gallery mfp-gallery masonry brand-variety">
                        <li class="card-container mercedes all honda toyota col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="car-brand bg-white">
                                <figure class="text-center">
                                    <img src="{{ asset('assets/images/brands/pic1.png') }}" alt="">
                                </figure>
                                <div class="p-a20">
                                    <p class="font-14 m-b5">Registered 2016</p>
                                    <h3 class="m-t5 font-weight-700">Volkswagen <span class="text-primary font-weight-400">GTR</span> </h3>
                                    <ul class="list-inline car-brand-value m-b0">
                                        <li>$50/Day</li>
                                        <li><i class="flaticon-dashboard-1"></i>  2.3K CC</li>
                                    </ul>
                                </div>
                                <ul class="link-car-brand m-b0">
                                    <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="card-container mercedes all volkswagen audi col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="car-brand bg-white">
                                <figure class="text-center">
                                    <img src="{{ asset('assets/images/brands/pic2.png') }}" alt="">
                                </figure>
                                <div class="p-a20">
                                    <p class="font-14 m-b5">Registered 2016</p>
                                    <h3 class="m-t5 font-weight-700">Audi Sports <span class="text-primary font-weight-400">S8</span> </h3>
                                    <ul class="list-inline car-brand-value m-b0">
                                        <li>$50/Day</li>
                                        <li><i class="flaticon-dashboard-1"></i>  2.3K CC</li>
                                    </ul>
                                </div>
                                <ul class="link-car-brand m-b0">
                                    <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="card-container mercedes all honda ferrari col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="car-brand bg-white">
                                <figure class="text-center">
                                    <img src="{{ asset('assets/images/brands/pic3.png') }}" alt="">
                                </figure>
                                <div class="p-a20">
                                    <p class="font-14 m-b5">Registered 2016</p>
                                    <h3 class="m-t5 font-weight-700">Bugatti Feyron <span class="text-primary font-weight-400">F2</span> </h3>
                                    <ul class="list-inline car-brand-value m-b0">
                                        <li>$50/Day</li>
                                        <li><i class="flaticon-dashboard-1"></i>  2.3K CC</li>
                                    </ul>
                                </div>
                                <ul class="link-car-brand m-b0">
                                    <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="card-container mercedes all volkswagen chevrolet col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="car-brand bg-white">
                                <figure class="text-center">
                                    <img src="{{ asset('assets/images/brands/pic4.png') }}" alt="">
                                </figure>
                                <div class="p-a20">
                                    <p class="font-14 m-b5">Registered 2016</p>
                                    <h3 class="m-t5 font-weight-700">Mercedes Benz<span class="text-primary font-weight-400">R3</span> </h3>
                                    <ul class="list-inline car-brand-value m-b0">
                                        <li>$50/Day</li>
                                        <li><i class="flaticon-dashboard-1"></i>  2.3K CC</li>
                                    </ul>
                                </div>
                                <ul class="link-car-brand m-b0">
                                    <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="card-container mercedes all toyota chevrolet col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="car-brand bg-white">
                                <figure class="text-center">
                                    <img src="{{ asset('assets/images/brands/pic5.png') }}" alt="">
                                </figure>
                                <div class="p-a20">
                                    <p class="font-14 m-b5">Registered 2016</p>
                                    <h3 class="m-t5 font-weight-700">Toyota Avanza  <span class="text-primary font-weight-400">RX</span> </h3>
                                    <ul class="list-inline car-brand-value m-b0">
                                        <li>$50/Day</li>
                                        <li><i class="flaticon-dashboard-1"></i>  2.3K CC</li>
                                    </ul>
                                </div>
                                <ul class="link-car-brand m-b0">
                                    <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="card-container mercedes all audi ferrari col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="car-brand bg-white">
                                <figure class="text-center">
                                    <img src="{{ asset('assets/images/brands/pic6.png') }}" alt="">
                                </figure>
                                <div class="p-a20">
                                    <p class="font-14 m-b5">Registered 2016</p>
                                    <h3 class="m-t5 font-weight-700">Chevrolet <span class="text-primary font-weight-400">GTR</span> </h3>
                                    <ul class="list-inline car-brand-value m-b0">
                                        <li>$50/Day</li>
                                        <li><i class="flaticon-dashboard-1"></i>  2.3K CC</li>
                                    </ul>
                                </div>
                                <ul class="link-car-brand m-b0">
                                    <li><a href="javascript:;"><i class="flaticon-settings"></i> Mannual</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-oil"></i> Petrol</a></li>
                                    <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 2.3K CC</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- brands end -->
    <!-- faq -->
    <div class="section-full content-inner-1 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 left gray opacity" data-name="Q">
                        <div class="row display-align">
                            <div class="col-lg-6 col-md-5 col-sm-5">
                                <div class="title-sm text-uppercase">Find your answer here</div>
                                <h2 class="h2">Frequently <span class="font-weight-800">Asked Questions.</span></h2>
                                <div class="sep"></div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-7">
                                <ul class="nav nav-tabs faq-tab">
                                    <li class="active"><a data-toggle="tab" href="#about"><i class="fa fa-user"></i><span>About Account</span></a></li>
                                    <li><a data-toggle="tab" href="#technical"><i class="fa fa-question-circle"></i><span>Technical Support</span></a></li>
                                    <li><a data-toggle="tab" href="#feature"><i class="fa fa-car"></i><span>Cars Feature</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content faq-cont">
                <div id="about" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="dlab-accordion bg-title" id="accordion1">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne1" class="collapsed" data-parent="#accordion1"> How to reserved a car here?</a> </h5>
                                    </div>
                                    <div id="collapseOne1" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo1" data-parent="#accordion1"> How can i select a car?</a> </h5>
                                    </div>
                                    <div id="collapseTwo1" class="acod-body collapse in">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree1" class="collapsed" data-parent="#accordion1"> Consectuerer delgado?</a> </h5>
                                    </div>
                                    <div id="collapseThree1" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="dlab-accordion bg-title" id="accordion2">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne2" class="collapsed" data-parent="#accordion2"> How to sign up?</a> </h5>
                                    </div>
                                    <div id="collapseOne2" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo2" class="collapsed" data-parent="#accordion2"> How to sign up?</a> </h5>
                                    </div>
                                    <div id="collapseTwo2" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree3" data-parent="#accordion2"> Set diam?</a> </h5>
                                    </div>
                                    <div id="collapseThree3" class="acod-body collapse in">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="technical" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="dlab-accordion bg-title" id="accordion3">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne3" class="collapsed" data-parent="#accordion3"> How to reserved a car here?</a> </h5>
                                    </div>
                                    <div id="collapseOne3" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo3" data-parent="#accordion3"> How can i select a car?</a> </h5>
                                    </div>
                                    <div id="collapseTwo3" class="acod-body collapse in">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree3" class="collapsed" data-parent="#accordion3"> Consectuerer delgado?</a> </h5>
                                    </div>
                                    <div id="collapseThree3" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="dlab-accordion bg-title" id="accordion4">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne4" class="collapsed" data-parent="#accordion4"> How to sign up?</a> </h5>
                                    </div>
                                    <div id="collapseOne4" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo4" class="collapsed" data-parent="#accordion4">How to sign up?</a> </h5>
                                    </div>
                                    <div id="collapseTwo4" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree4" data-parent="#accordion4"> Set diam?</a> </h5>
                                    </div>
                                    <div id="collapseThree4" class="acod-body collapse in">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="feature" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="dlab-accordion bg-title" id="accordion5">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne3" class="collapsed" data-parent="#accordion5"> How to reserved a car here?</a> </h5>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo3" data-parent="#accordion5"> How can i select a car?</a> </h5>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body collapse in">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree3" class="collapsed" data-parent="#accordion5"> Consectuerer delgado?</a> </h5>
                                    </div>
                                    <div id="collapseThree5" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="dlab-accordion bg-title" id="accordion6">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseOne6" class="collapsed" data-parent="#accordion6"> How to sign up?</a> </h5>
                                    </div>
                                    <div id="collapseOne6" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseTwo6" class="collapsed" data-parent="#accordion6"> How to sign up?</a> </h5>
                                    </div>
                                    <div id="collapseTwo6" class="acod-body collapse">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title"> <a data-toggle="collapse" href="#collapseThree6" data-parent="#accordion6"> Set diam?</a> </h5>
                                    </div>
                                    <div id="collapseThree6" class="acod-body collapse in">
                                        <div class="acod-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <a href="#" class="site-button text-uppercase"><span class="icon-sm m-r10"><i class="fa fa-question-circle"></i></span> make a question</a>
                </div>
            </div>
        </div>
    </div>
    <!-- faq end -->
    <!-- counter -->
    <div class="section-full bg-primary text-white counter-sc">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <div class="icon-lg"><i class="fa fa-user-o"></i></div>
                        <div class="">
                            <span class="counter font-weight-800">1,172,700</span>
                            <p class="font-14 text-uppercase font-weight-600 m-b0">Happy customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <div class="icon-lg"><i class="flaticon-steering-wheel"></i></div>
                        <div class="">
                            <span class="counter font-weight-800">2,450</span>
                            <p class="font-14 text-uppercase font-weight-600 m-b0">Cars in garage</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <div class="icon-lg"><i class="fa fa-flag-checkered"></i></div>
                        <div class="">
                            <span class="counter font-weight-800">1,211,100</span>
                            <p class="font-14 text-uppercase font-weight-600 m-b0">Total kilometer/Mil</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-box no-bdr">
                        <div class="icon-lg"><i class="flaticon-customer-service"></i></div>
                        <div class="">
                            <span class="counter font-weight-800">47,250</span>
                            <p class="font-14 text-uppercase font-weight-600 m-b0">Car center solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->
    <!-- blog -->
    <div class="section-full content-inner-2 bg-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center light-gray opacity" data-name="B">
                        <div class="title-sm text-uppercase text-white">Article from blog</div>
                        <h2 class="h2 text-white">Our<span class="font-weight-800"> Latest News</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-carousel news owl-carousel owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                                <div class="ow-post-media dlab-img-effect"> <img src="{{ asset('assets/images/blog/latest-blog/pic4.jpg') }}" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li>27 JUNE 2018</li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">What To Do if Your Rental Car Has Met With An Accident</a> </h4>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="javascript:;" rel="bookmark" class="site-button-link"> Read Article </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                                <div class="ow-post-media dlab-img-effect"> <img src="{{ asset('assets/images/blog/latest-blog/pic5.jpg') }}" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li>27 JUNE 2018</li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">What To Do if Your Rental Car Has Met With An Accident</a> </h4>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="javascript:;" rel="bookmark" class="site-button-link"> Read Article </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                                <div class="ow-post-media dlab-img-effect"> <img src="{{ asset('assets/images/blog/latest-blog/pic6.jpg') }}" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li>27 JUNE 2018</li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">What To Do if Your Rental Car Has Met With An Accident</a> </h4>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="javascript:;" rel="bookmark" class="site-button-link"> Read Article </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                                <div class="ow-post-media dlab-img-effect"> <img src="{{ asset('assets/images/blog/latest-blog/pic4.jpg') }}" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li>27 JUNE 2018</li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">What To Do if Your Rental Car Has Met With An Accident</a> </h4>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="javascript:;" rel="bookmark" class="site-button-link"> Read Article </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                                <div class="ow-post-media dlab-img-effect"> <img src="{{ asset('assets/images/blog/latest-blog/pic5.jpg') }}" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li>27 JUNE 2018</li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">What To Do if Your Rental Car Has Met With An Accident</a> </h4>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="javascript:;" rel="bookmark" class="site-button-link"> Read Article </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                                <div class="ow-post-media dlab-img-effect"> <img src="{{ asset('assets/images/blog/latest-blog/pic6.jpg') }}" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li>27 JUNE 2018</li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">What To Do if Your Rental Car Has Met With An Accident</a> </h4>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="javascript:;" rel="bookmark" class="site-button-link"> Read Article </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram-link text-center">
                        <img src="{{ asset('assets/images/instagram.png') }}" alt="">
                        <div class="text-white m-t15 font-13 font-weight-700">Follow Our Instagram <a href="#">#Cars_dealers</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
    <!-- car-gallery -->
    <div class="section-full">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-a0">
                    <div class="owl-carousel carousel-gallery mfp-gallery">
                        <div class="item">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay3 gallery-btm dlab-img-effect">
                                <img src="{{ asset('assets/images/gallery/pic26.jpg') }}" alt="">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="images/gallery/pic26.jpg') }}" class="mfp-link dlab-media " title="Title Come Here"> <i class="fa fa-search icon-bx-xs radius"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay3 gallery-btm dlab-img-effect">
                                <img src="{{ asset('assets/images/gallery/pic27.jpg') }}" alt="">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="images/gallery/pic27.jpg') }}" class="mfp-link dlab-media " title="Title Come Here"> <i class="fa fa-search icon-bx-xs radius"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay3 gallery-btm dlab-img-effect">
                                <img src="{{ asset('assets/images/gallery/pic28.jpg') }}" alt="">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="images/gallery/pic28.jpg') }}" class="mfp-link dlab-media " title="Title Come Here"> <i class="fa fa-search icon-bx-xs radius"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay3 gallery-btm dlab-img-effect">
                                <img src="{{ asset('assets/images/gallery/pic29.jpg') }}" alt="">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="images/gallery/pic29.jpg') }}" class="mfp-link dlab-media " title="Title Come Here"> <i class="fa fa-search icon-bx-xs radius"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay3 gallery-btm dlab-img-effect">
                                <img src="{{ asset('assets/images/gallery/pic30.jpg') }}" alt="">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="images/gallery/pic30.jpg') }}" class="mfp-link dlab-media " title="Title Come Here"> <i class="fa fa-search icon-bx-xs radius"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- car-gallery end -->
    <!-- Content END-->
</div>
<!-- Modal Box -->
<div class="modal fade lead-form-modal login-modal" id="car-details" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body row m-a0 clearfix">
                <div class="col-lg-12 col-md-12 p-a0">
                    <div class="lead-form browse-job text-left">
                        <form>
                            <h3 class="m-t0">Personal Details</h3>
                            <div class="form-group">
                                <input value="" class="form-control" placeholder="Name"/>
                            </div>
                            <div class="form-group">
                                <input value="" class="form-control" placeholder="Mobile Number"/>
                            </div>
                            <div class="clearfix">
                                <button type="button" class="btn-primary site-button btn-block">Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Box End -->
@endsection
