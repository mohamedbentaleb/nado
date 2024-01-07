@extends('layouts.app')

@section('title', 'Nado.ma')

@section('content')

<!-- Slider -->
<div class="bnr-slider">
    <div class="slider-carousel owl-carousel owl-theme owl-none owl-dots">
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slide-nado.jpg') }});">
            </div>
        </div>
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slide-nado-1.jpg') }});">
            </div>
        </div>
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slide-nado-2.jpg') }});">
            </div>
        </div>
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slide-nado-3.jpg') }});">
            </div>
        </div>
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slide-nado-4.jpg') }});">
            </div>
        </div>
    </div>
</div>
<!-- Slider END -->
<!-- searching cars form -->
<div class="section-full bg-secondry">
    <div class="car-searchings text-white">
        <form class="searching-form">
            <div class="container">
                <h3 class="text-center">Achetez et vendez votre voiture Facilement et rapidement.</h3>
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

</div>
<!-- searching cars form end -->
<!-- brands -->
<div class ="section-full content-inner brand">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-1 text-center">
                    <h2 class="h2">Nos dernières voitures d’occasions</h2>
                    <div class="title-sm text-uppercase">Choisissez votre type de voiture préférée</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-8 col-sm-8">
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
<!-- blog -->
<div class="section-full content-inner-2 " style="background: black;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-1 text-center light-gray opacity" data-name="Nado">
                    <h2 class="h2 text-white">Auto</h2>
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
    </div>
</div>
<!-- blog end -->
<!-- team -->
<div class="section-full content-inner-1 " style="background:#fdd64d">
    <div class="container">
        <div class="row">
            <div class="section-head style-1 text-center light-gray opacity">
                <h2 class="h2 text-white">Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="team-box bg-white">
                    <img src="{{ asset('assets/images/services/repris.png') }}" alt="">
                    <div class="team-about">
                        <div>
                            <h4><a href="javascript:;">Reprise De Voiture</a></h4>
                            <p>Affordable brake repair service ensures safe and effective braking for a smooth driving experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-box bg-white">
                    <img src="{{ asset('assets/images/services/intermediation.png') }}" alt="">
                    <div class="team-about">
                        <div>
                            <h4><a href="javascript:;">Intermédiation</a></h4>
                            <p>Get your car's oil changed quickly and easily with our professional oil change service.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="team-box bg-white" >
                    <img src="{{ asset('assets/images/services/vente.png') }}" alt="">
                    <div class="team-about">
                        <div>
                            <h4><a href="javascript:;">Service Après-Vente</a></h4>
                            <p>Experience and expertise in quickly and efficiently rotating tires for improved performance and safety.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team end -->
<!-- about -->
<div class="section-full content-inner-1 bg-white about-sect">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-1 text-center">
                    <h2 class="h2">Comment ça marche</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 m-b30">
                <figure>
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/MmkOISJpsqs?si=AiZ6nV6YitH9C-T0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 m-b30">
                <div class="row">
                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a5 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-dashboard"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La consultation</h5>
                                <p>Nous vous présentons l’ensemble des véhicules en vente sur notre plateforme avec l’ensemble des détails technique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-piston"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La visite</h5>
                                <p>Nous vous organisons un RDV avec le vendeur du véhicule en présence de l’un de nos agents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b10">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-oil"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La négociation</h5>
                                <p>Nous gérons la négociation du prix entre vous et le vendeur du véhicule.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b10">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-mechanic"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La mutation</h5>
                                <p>Nous préparons les documents administratifs pour l’achat du véhicule.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->
<!-- testimonial -->
<div class="section-full content-inner-2 bg-white testimonial-sc">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="advertise">
                    <img src="{{ asset('assets/images/Pourquoi-Vendre-Chez-NADO.png') }}" alt=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-1 gray text-center">
                    <h2 class="h2">Les avis de nos clients</h2>
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

<!-- counter -->
<div class="section-full bg-primary text-white counter-sc">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box">
                    <div class="icon-lg"><i class="fa-regular fa-user"></i></div>
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
