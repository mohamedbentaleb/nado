@extends('layouts.app')

@section('title', 'Home | Nado.ma')

@section('content')

<div class="bnr-slider">
    <div class="owl-carousel only_mobile">
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slaide-phone.png') }});">
            </div>
        </div>
    </div>
    <div class="slider-carousel owl-carousel owl-theme owl-none owl-dots only_desktop">
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
        <div class="item">
            <div class="slider-item " style="background-image: url({{ asset('assets/images/main-slider/slide-nado-5.jpg') }});">
            </div>
        </div>
    </div>
</div>
<!-- searching cars form -->
<div class="section-full bg-secondry hide">
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
            <div class="clearfix owl-carousel featured-offer owl-theme owl-nav  owl-dots col-lg-12 p-lr0">
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/208-peugeot.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Peugeot <span class="text-primary">208</span> </a></h5>
                                <p class="dlab-price"><span>157 000 DH</span> </p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2022</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Manuelle</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 39K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/Evoque.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Range Rover <span class="text-primary">Evoque</span> </a></h5>
                                <p class="dlab-price"><span>245 000 DH</span> </p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2018</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa..</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 140K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v1tucson.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Hyundai <span class="text-primary">Tucson</span> </a></h5>
                                <p class="dlab-price"><span>264 999 DH</span> </p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2022</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa..</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 69K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v1300.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Mercedes-Benz <span class="text-primary">Classe E</span> </a></h5>
                                <p class="dlab-price"><span>300 000 DH</span> </p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2016</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa..</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 65K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v2300.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Citroen <span class="text-primary">DS3 </span> </a></h5>
                                <p class="dlab-price"><span>260 000 DH</span></p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2022</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa.. </a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 15K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v3300.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Volkswagen  <span class="text-primary">Tiguan Rline</span> </a></h5>
                                <p class="dlab-price"><span>540 000 DH</span></p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i>  2021</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa..</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 100K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v4300.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">BMW <span class="text-primary">X4 </span> </a></h5>
                                <p class="dlab-price"><span>385 000 DH</span> </p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2018</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i>  Automa..</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 110K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v5300.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Volkswagen <span class="text-primary">Arteon</span> </a></h5>
                                <p class="dlab-price"><span>250 000 DH</span></p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa.</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 120K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-space">
                        <div class="dlab-feed-list style-1 relative">
                            <div class="dlab-media bg-white">
                                <a href="#"><img src="{{ asset('assets/images/featured/v6300.png')}}" alt=""></a>
                            </div>
                            <div class="dlab-info">
                                <h5 class="dlab-title h5"><a href="#">Hyundai  <span class="text-primary">Creta</span> </a></h5>
                                <p class="dlab-price"><span>177 000 DH</span></p>
                                <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                        <li><a href="javascript:;"><i class="flaticon-calendar"></i> 2019</a></li>
                                        <li><a href="javascript:"><i class="flaticon-settings"></i> Automa.. </a></li>
                                        <li><a href="javascript:;"><i class="flaticon-oil"></i> Diesel</a></li>
                                        <li><a href="javascript:;"><i class="flaticon-dashboard-1"></i> 100K km</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rent-link">
                                <a href="#" class="site-button">Acheter Cette Voiture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brands end -->
<!-- blog -->
<div class="section-full p-t10" style="background: black;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-carousel owl-carousel owl-btn-center-lr">
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="Yot-JB9tw30"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        208 peugeot 2022
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="bxTKQ6gVW-8"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Range Rover Evoque 2018
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="bQnDT1ZRSgU"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Hyundai Tucson 2022
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="OQv0p9XJsSk"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Citroen ds3 crossback 2022
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="jqWRDYpOt50"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Volkswagen gtd GOLF 7 plus 2019
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="82OkIW8g1AA"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Mercedes-Benz Classe C 2022
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="mtPz6wOyaqE"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Volkswagen Tiguan R-line 2021
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="X6g97ZcQOPg"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        Skoda Octavia Diesel Manuelle 2019
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-blog-post date-style-2 dlab-latest-blog style-2">
                            <div class="ow-post-media dlab-img-effect">
                                <lite-youtube videoid="w6NfgiRKTlk"></lite-youtube>
                            </div>
                            <div class="ow-post-info ">
                                <div class="ow-post-title">
                                    <h4 class="post-title">
                                        dacia sandero stepway gris 2021
                                    </h4>
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
<div class="section-full p-t20 " style="background:#fdd64d">
    <div class="container">
        <div class="row">
            <div class="style-1 text-center light-gray opacity">
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
                            <p>
                                 Un échange d'automobiles est un processus qui rend la vente de votre voiture rapide et facile. Si vous possédez une voiture dont vous souhaitez vous débarrasser, un concessionnaire automobile pourrait être une excellente option pour vous.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-box bg-white">
                    <img src="{{ asset('assets/images/services/intermediation.png') }}" alt="">
                    <div class="team-about" style="margin-bottom:24px !important;">
                        <div>
                            <h4><a href="javascript:;">Intermédiation</a></h4>
                            <p>
                                Financez votre véhicule d'occasion jusqu'à 100%
                                Le concessionnaire automobile NADO vous permet de financer votre voiture d'occasion
                                pour une durée jusqu'à 5 ans, avec des conditions de crédit flexible
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="team-box bg-white" >
                    <img src="{{ asset('assets/images/services/vente.png') }}" alt="">
                    <div class="team-about" >
                        <div>
                            <h4><a href="javascript:;">Service Après-Vente</a></h4>
                            <p>
                                Vous pouvez recevoir tous les documents dont vous avez besoin dans les meilleurs délais et sans délai Respecter vos demandes, être à l'écoute de vos attentes.
                                Assurez-vous que votre voiture sera prête dès le premier jour lorsque à l'heure
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team end -->
<!-- about -->
<div class="section-full bg-white about-sect content-inner p-b20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-1 text-center">
                    <h2 class="h2">Comment ça marche</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 m-b30">
                <figure>
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/MmkOISJpsqs" title="YouTube video player" frameborder="0" ></iframe>
                </figure>
            </div>
            <div class="col-lg-5 col-md-6 m-b30">
                <div class="row">
                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a5 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-speech-bubble"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La consultation</h5>
                                <p>Nous vous présentons l’ensemble des véhicules en vente sur notre plateforme avec l’ensemble des détails technique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-mechanic"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La visite</h5>
                                <p>Nous vous organisons un RDV avec le vendeur du véhicule en présence de l’un de nos agents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b10">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-users"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte text-uppercase">La négociation</h5>
                                <p>Nous gérons la négociation du prix entre vous et le vendeur du véhicule.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b10">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center">
                            <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="flaticon-list"></i></a> </div>
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
<div class="section-full bg-white content-inner-2" style="background-image: url(images/background/about-us.jpg); background-position:bottom; background-repeat:no-repeat; background-size:100%;">
    <div class="container">
        <div class="section-head text-center head-1">
            <h3 class="h3 text-uppercase">Financement Auto</h3>
            <div class="dlab-separator bg-gray-dark"></div>
            <p>comment financer son véhicule d'occasion avec umnia bank</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6  col-xs-6">
                <div class="dlab-box-bg m-b30 box-hover" style="background-image: url({{ asset('assets/images/our-work/work/pic1.jpg') }})">
                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                        <div class="text-primary m-b20">
                            <span class="icon-cell"><i class="glyph-icon flaticon-steering-wheel"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-tilte text-uppercase">Choisissez votre voiture</h4>
                            <p>Choisissez votre voiture d'occasion chez NADO.MA et faites une simulation de crédit.</p>
                        </div>
                    </div>
                    <div class="icon-box-btn text-center">
                        <span class="site-button btn-block">Étape 1</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="dlab-box-bg m-b30 box-hover" style="background-image: url({{ asset('assets/images/our-work/work/pic2.jpg') }})">
                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                        <div class="text-primary m-b20">
                            <span class="icon-cell"><i class="glyph-icon fa fa-money-bill-wave"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-tilte text-uppercase">Simulation de crédit</h4>
                            <p>Un télé-opérateur prendra contact avec vous pour vous guider à travers les étapes à suivre et les documents à fournir.</p>
                        </div>
                    </div>
                    <div class="icon-box-btn text-center">
                        <span class="site-button btn-block">Étape 2</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="dlab-box-bg m-b30 box-hover active" style="background-image: url({{ asset('assets/images/our-work/work/pic3.jpg') }})">
                    <div class="icon-bx-wraper center p-lr20 p-t40 p-b50">
                        <div class="text-primary m-b20">
                            <span class="icon-cell"><i class="glyph-icon fa fa-calculator"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-tilte text-uppercase">Envoyez les pièces justificatives à umnia bank</h4>
                            <p>Envoyez les pièces justificatives pour compléter votre dossier de crédit.</p>
                        </div>
                    </div>
                    <div class="icon-box-btn text-center">
                        <span class="site-button btn-block">Étape 3</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="dlab-box-bg m-b30 box-hover" style="background-image: url({{ asset('assets/images/our-work/work/pic4.jpg') }})">
                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                        <div class="text-primary m-b20">
                            <span class="icon-cell"><i class="glyph-icon fa fa-hands-helping"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-tilte text-uppercase">Achat du Véhicule</h4>
                            <p>Une fois que votre dossier aura été accepté, vous recevrez un virement de la Umniabank , ce qui vous permettra d'acheter votre véhicule.</p>
                        </div>
                    </div>
                    <div class="icon-box-btn text-center">
                        <span class="site-button btn-block">Étape 4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-full p-t50 bg-white content-inner compare-car p-b20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-head text-center head-1">
                    <h3 class="h3 text-uppercase">Pack Nado</h3>
                    <div class="dlab-separator bg-gray-dark"></div>
                </div>
                <div class="clearfix">
                    <div class="col-md-4 col-sm-12">
                        <div class="dlab-feed-list text-left ">
                            <div class="dlab-info text-left bg-secondry">
                                <h4 class="dlab-title m-b10 text-left text-white">Avantage <span class="text-primary">Service nado</span> </h4>
                                <p class="text-white text-left" style="font-size: 9px !important;line-height: 16px;">Nado offre des fonctionnalités exceptionnelles qui rendent le processus de vente de voitures plus facile et accessible à toutes les catégories, en plus de services qui vous enthousiasment et vous procurent une tranquillité d'esprit.</p>
                                <div class="car-review m-tb20">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <div class="row counter-box dis-block b-none text-white m-b5 p-l15">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 icon-md p-lr0 m-b5">
                                                    <img src="{{ asset('assets/images/icons/place.png') }}" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
                                                    <span class="font-weight-800 font-26">1 Place</span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <p class="text-white text-left blockPacktext">Tous les achats au même endroit, pas besoin de se déplacer Vers des endroits lointains
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row counter-box dis-block b-none text-white m-b5 p-l15">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 icon-md  p-lr0 m-b5">
                                                    <img src="{{ asset('assets/images/icons/car.png') }}" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
                                                    <span class="counter font-weight-800">50</span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <p class="text-white text-left blockPacktext">La possibilité de choisir entre plus de 50 types de voitures
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row counter-box dis-block b-none text-white m-b5 p-l15">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 icon-md  p-lr0 m-b5">
                                                    <img src="{{ asset('assets/images/icons/2place.png') }}" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
                                                    <span class="counter font-weight-800">150</span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <p class="text-white text-left blockPacktext">
                                                       Toutes les voitures ont un kilométrage ne dépassant pas 150 km.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p-a0">
                                            <img src="{{ asset('assets/images/services/pack1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ">
                        <div class="dlab-feed-list text-left ">
                            <div class="dlab-info text-left bg-primary">
                                <h4 class="dlab-title m-b10 text-left text-white">Pack Nado <span class="text-secondry">Garages & Automobiles</span> </h4>
                                <p class="text-white text-left" style="font-size: 9px !important;line-height: 16px;">Nous proposons un service nouveau et unique au Maroc qui nous permet de vendre des voitures aux clients plus rapidement et à des prix précis. </p>
                                <div class="car-review m-tb20">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="p-b10 zoom-slow">
                                                <img src="{{ asset('assets/images/services/showroom.png') }}" alt="">
                                            </div>
                                            <div class="p-b10 zoom-slow">
                                                <img src="{{ asset('assets/images/services/showout.png') }}" alt="">
                                            </div>
                                            <div class="p-b10 zoom-slow">
                                                <img src="{{ asset('assets/images/services/ads.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ">
                        <div class="dlab-feed-list text-left ">
                            <div class="dlab-info text-left bg-secondry p-tb60">
                                <h4 class="dlab-title m-b10 text-left text-white">Premiers platforme <span class="text-primary">Services de Qualité</span> </h4>
                                <p class="text-white text-left" style="font-size: 9px !important;line-height: 16px;">Nos clients passent avant tout ! Nous fournissons un service de première classe à tous nos précieux clients qui recherchent les meilleures offres et nos voitures.</p>
                                <div class="car-review m-tb20">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row dis-block b-none text-white m-b5 p-l15">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 icon-md p-lr0 m-b5">
                                                    <img src="{{ asset('assets/images/icons/protected.png') }}" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
                                                    <p class="text-primary text-left blockPacktext m-b0">PROTECTION AVEC GARANTIE</p>
                                                    <p class="text-white text-left blockPacktext">Nado vous propose un service avec une protection et des garanties jusqu'à 6 mois
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row dis-block b-none text-white m-b5 p-l15">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 icon-md  p-lr0 m-b5">
                                                    <img src="{{ asset('assets/images/icons/speed.png') }}" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
                                                    <p class="text-primary text-left blockPacktext m-b0">PLUS RAPIDE QUE LA VITESSE</p>
                                                    <p class="text-white text-left blockPacktext">Nado suit le monde de la vitesse pour répondre à vos besoins le plus rapidement possible
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row dis-block b-none text-white m-b5 p-l15">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 icon-md  p-lr0 m-b5">
                                                    <img src="{{ asset('assets/images/icons/lock.png') }}" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
                                                    <p class="text-primary text-left blockPacktext">EN TOUTE SÛRETÉ ET SÉCURITÉ</p>
                                                    <p class="text-white text-left blockPacktext m-b0">Avec Naddo, tous nos droits sont protégés dans des services au-delà de votre imagination
                                                    </p>
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

    </div>
</div>
    <div class="section-full p-t50 bg-white content-inner p-b20 compare-car">
        <div class="container">
            <div class="section-head text-center head-1">
                <h3 class="h3 text-uppercase">Nado expertise & conseils</h3>
                <div class="dlab-separator bg-gray-dark"></div>
                <p>Pour acheter votre voiture d'occasion en toute sécurité</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-post blog-grid date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"><img src="{{ asset('assets/images/blog/grid/couple-heureux-chez-concessionnaire-automobile.jpg') }}" alt=""> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title font-18">Comment bien préparer l’achat de sa voiture d’occasion au Maroc</h3>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="#" class="site-button">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-post blog-grid date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"><img src="{{ asset('assets/images/blog/grid/gai-homme-assis-dans-voiture-sa-femme-sa-fille.jpg') }}" alt=""></div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title">Les 10 conseils pour se préparer à un trajet long</h3>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="#" class="site-button">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<div class="section-full bg-white p-t50 car-listing content-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="find-car box-hover" style="background-image: url({{ asset('assets/images/blog/default/thum1.jpg') }})">
                    <div class="car-box">
                        <h2 class="text-uppercase text-primary">Pourquoi Acheter De Chez Nado ?</h2>
                        <p>NADO est une entreprise ayant une réputation très importante qui la garde toujours par la transparence et l'honnêteté. Notre rôle est de donner à nos clients des automobiles de haute qualité à moyen prix. NADO est présente aujourd'hui pour faciliter l'opération d'achat chez les marocains.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="find-car box-hover" style="background-image: url({{ asset('assets/images/blog/default/thum2.jpg') }})">
                    <div class="car-box car-box-1">
                        <h2 class="text-uppercase text-secondry">Pourquoi Vendre Chez NADO ?</h2>
                        <p>Nous connaissons tous que la vente d'une automobile prend toujours du temps pour les gens n'ayant pas d'expérience dans ce domaine. De ce fait, NADO propose aux marocains de bons plans pour vendre leurs automobiles facilement à un prix très satisfaisant en comparaison avec le marché.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-full content-inner bg-img-fix overlay-primary-dark" style="background-image: url({{ asset('assets/images/background/bg3.jpg') }});">
    <div class="container">
        <div class="section-head text-center head-1">
            <h2 class="h2 text-white">Les avis de nos clients</h2>
        </div>
        <div class="section-content ">

            <div class="testimonial-center owl-carousel owl-btn-center-lr">
                <div class="item">
                    <div class="testimonial-2 testimonial-bg style-1">
                        <div class="testimonial-text">
                            <p>“لم أكن أعرف ماذا أتوقع عند شرائي لأول مرة سيارة، لكن مستوى الخدمة الذي حصلت عليه تجاوز توقعاتي بكثير. فريق احترافي ومتعاون، والسيارة التي اشتريتها تجعلني سعيدة جدًا. شكرًا جزيلا لكم.”</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-box">
                                <div class="testimonial-pic radius shadow">
                                    <img src="{{ asset('assets/images/testimonials/person1.webp') }}" alt="" width="100" height="100"></div>
                                    <strong class="testimonial-name font-14">HASSAN KABIR</strong>
                                    <span class="text-white">Blogger</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-2 testimonial-bg style-1">
                        <div class="testimonial-text">
                            <p>“Grâce à Every Sunday, j'ai réussi à vendre ma voiture dès le lendemain. Merci Nado pour cette plateforme efficace et rapide.”</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-box">
                                <div class="testimonial-pic radius shadow">
                                    <img src="{{ asset('assets/images/testimonials/person2.webp') }}" alt="" width="100" height="100"></div>
                                    <strong class="testimonial-name font-14">HANAN YASSMIN</strong>
                                    <span class="text-white">HR Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-2 testimonial-bg style-1">
                        <div class="testimonial-text">
                            <p>“Je tiens à vous remercier pour votre professionnalisme et votre enthousiasme, Nado. Votre plateforme a véritablement transformé l'expérience d'achat de voitures d'occasion. Je vous souhaite bon courage pour la suite”</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-box">
                                <div class="testimonial-pic radius shadow">
                                    <img src="{{ asset('assets/images/testimonials/person3.webp') }}" alt="" width="100" height="100"></div>
                                    <strong class="testimonial-name font-14">KAMAL DARI</strong>
                                    <span class="text-white">English Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-2 testimonial-bg style-1">
                        <div class="testimonial-text">
                            <p>“لم أكن أعرف ماذا أتوقع عند شرائي لأول مرة سيارة، لكن مستوى الخدمة الذي حصلت عليه تجاوز توقعاتي بكثير. فريق احترافي ومتعاون، والسيارة التي اشتريتها تجعلني سعيدة جدًا. شكرًا جزيلا لكم”</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-box">
                                <div class="testimonial-pic radius shadow">
                                    <img src="{{ asset('assets/images/testimonials/person4.webp') }}" alt="" width="100" height="100"></div>
                                    <strong class="testimonial-name font-14">HASSNA KAMA</strong>
                                    <span class="text-white">Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->
@endsection
