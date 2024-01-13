@extends('layouts.app')

@section('title', 'Home | Nado.ma')

@section('content')

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
<div class="section-full bg-white about-sect  content-inner">
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
<!-- about end -->
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
                    <div class="car-box">
                        <h2 class="text-uppercase text-primary">Pourquoi Vendre Chez NADO ?</h2>
                        <p>Nous connaissons tous que la vente d'une automobile prend toujours du temps pour les gens n'ayant pas d'expérience dans ce domaine. De ce fait, NADO propose aux marocains de bons plans pour vendre leurs automobiles facilement à un prix très satisfaisant en comparaison avec le marché.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial -->
<div class="section-full bg-white">
    <div class="container">
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
                                    <p>“لم أكن أعرف ماذا أتوقع عند شرائي لأول مرة سيارة، لكن مستوى الخدمة الذي حصلت عليه تجاوز توقعاتي بكثير. فريق احترافي ومتعاون، والسيارة التي اشتريتها تجعلني سعيدة جدًا. شكرًا جزيلا لكم.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mfp-gallery">
                                <div class="dlab-box">
                                    <p>“Grâce à Every Sunday, j'ai réussi à vendre ma voiture dès le lendemain. Merci Nado pour cette plateforme efficace et rapide.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mfp-gallery">
                                <div class="dlab-box">
                                    <p>“Je tiens à vous remercier pour votre professionnalisme et votre enthousiasme, Nado. Votre plateforme a véritablement transformé l'expérience d'achat de voitures d'occasion. Je vous souhaite bon courage pour la suite”</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mfp-gallery">
                                <div class="dlab-box">
                                    <p>“لم أكن أعرف ماذا أتوقع عند شرائي لأول مرة سيارة، لكن مستوى الخدمة الذي حصلت عليه تجاوز توقعاتي بكثير. فريق احترافي ومتعاون، والسيارة التي اشتريتها تجعلني سعيدة جدًا. شكرًا جزيلا لكم”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-person">
                        <div id="sync2" class="team-carousel owl-carousel owl-theme owl-btn-center-lr owl-btn-1">
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/person1.webp') }}" alt="">
                                            <div class=""></div>
                                        </div>
                                        <div class="dlab-title-bx p-t30">
                                            <h5 class="text-black m-a0"><a href="#">HASSAN KABIR</a></h5>
                                            <span class="clearfix font-12">Blogger</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/person2.webp') }}" alt="">
                                        </div>
                                        <div class="dlab-title-bx p-t30">
                                            <h5 class="text-black m-a0"><a href="#">HANAN YASSMIN</a></h5>
                                            <span class="clearfix font-12">HR Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/person3.webp') }}" alt=""></div>
                                        <div class="dlab-title-bx p-t30">
                                            <h5 class="text-black m-a0"><a href="#">KAMAL DARI</a></h5>
                                            <span class="clearfix font-12">English Teacher</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <div class="dlab-media quote-left"><img src="{{ asset('assets/images/testimonials/person4.webp') }}" alt=""></div>
                                        <div class="dlab-title-bx p-t30">
                                            <h5 class="text-black m-a0"><a href="#">HASSNA KAMAL</a></h5>
                                            <span class="clearfix font-12">Student</span>
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
                        <span class="font-weight-800">100%</span>
                        <p class="font-14 text-uppercase font-weight-600 m-b0">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box">
                    <div class="icon-lg"><i class="flaticon-steering-wheel"></i></div>
                    <div class="">
                        <span class="counter font-weight-800">2,800</span>
                        <p class="font-14 text-uppercase font-weight-600 m-b0">Véhicules Vendus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box">
                    <div class="icon-lg"><i class="fa fa-flag-checkered"></i></div>
                    <div class="">
                        <span class="counter font-weight-800">20</span>
                        <p class="font-14 text-uppercase font-weight-600 m-b0">Réseau Pro</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box no-bdr">
                    <div class="icon-lg"><i class="flaticon-customer-service"></i></div>
                    <div class="">
                        <span class="font-weight-800">24/24</span>
                        <p class="font-14 text-uppercase font-weight-600 m-b0">Centre Automobiles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->
@endsection
