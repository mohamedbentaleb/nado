@extends('layouts.app')

@section('services', 'Home | Nado.ma')

@section('content')
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/banner/bnr2.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Services</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('index') }}">Accueil</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <div class="section-full p-t50 bg-white content-inner" >
        <div class="container">
            <div class="section-head text-center head-1">
                <span class="text-primary">Services</span>
                <h3 class="h3 text-uppercase">Services de Qualité</h3>
                <div class="dlab-separator bg-gray-dark"></div>
                <p>Nos clients passent avant tout ! Nous fournissons un service de première classe à tous nos précieux clients qui recherchent les meilleures offres et nos voitures. Nous veillons à sélectionner les meilleures voitures, de haute qualité et à passer tous les contrôles de sécurité sanitaire nécessaires pour l'ensemble du véhicule. L'équipe est là pour vous aider à maintenir votre confiance et votre confort lors de l'achat de votre voiture en toute sécurité, en toute sécurité et avec une garantie.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-bx-sm radius bg-primary m-b20">
                            <img src="{{ asset('assets/images/icons/protection-avec-garantie.png') }}" />
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Protection avec garantie</h5>
                            <p>Nado vous propose un service avec une protection et des garanties jusqu'à 6 mois</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-bx-sm radius bg-primary m-b20">
                            <img src="{{ asset('assets/images/icons/plus-rapide-vitesse.png') }}" />
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Plus rapide que la vitesse</h5>
                            <p>Nado suit le monde de la vitesse pour répondre à vos besoins le plus rapidement possible</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-bx-sm radius bg-primary m-b20">
                            <img src="{{ asset('assets/images/icons/securite.png') }}" />
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">En toute sûreté et sécurité</h5>
                            <p>Avec Naddo, tous nos droits sont protégés dans des services au-delà de votre imagination</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="section-full bg-white content-inner-2" style="background-image: url(images/background/about-us.jpg); background-position:bottom; background-repeat:no-repeat; background-size:100%;" id="intermediation">
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
    <div class="content-area">
        <!-- Career -->
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-sm-8 col-md-8 col-lg-9 m-b30">
                    <h1 class="m-b20 m-t0">Les documents à soumettre pour ouvrir le dossier de demande de prêt à la Umnia Bank</h1>
                    <div class="dlab-separator bg-primary"></div>
                    <h2 class="m-t30 m-b10 ">Les pièces justificatives à fournir sont :</h2>
                    <ul class="list-check-circle primary">
                        <li>Carte d’identité nationale</li>
                        <li>Spécimen de chèques</li>
                        <li>3 derniers relevés bancaires</li>
                        <li>Quittance récente de téléphone ou d’électricité Et en fonction de votre activité</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-t10 p-b0 left m-b10">
                                <div class="bg-primary icon-bx-xs m-b20 "> <span class="icon-cell"> <i class="fa fa-shopping-basket"></i> </span> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte ">Pour êtes salarié(e)</h5>
                                    <ul class="list-check-circle primary m-b5 font-14">
                                        <li>Les 3 derniers bulletins de salaire</li>
                                        <li>Une attestation de travail récente</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb10  left m-b15">
                                <div class="bg-primary icon-bx-xs m-b20"> <span class="icon-cell"> <i class="fa fa-truck"></i> </span> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte ">Pour êtes fonctionnaire</h5>
                                    <ul class="list-check-circle primary m-b10">
                                        <li>Un état d’engagement récent</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb10  left m-b10">
                                <div class="bg-primary icon-bx-xs m-b20"> <span class="icon-cell"><i class="fa fa-map-marker"></i> </span> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte ">êtes retraité(e)</h5>
                                    <ul class="list-check-circle primary m-b5">
                                        <li>Les 2 derniers avis de paiement de pension</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb10 left m-b10">
                                <div class="bg-primary icon-bx-xs m-b20 "> <span class="icon-cell"> <i class="fa fa-user"></i> </span> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte ">Pour êtes Artisan, commerçant ou indépendant</h5>
                                    <ul class="list-check-circle primary m-b5 font-14">
                                        <li>Modèle « j » du registre de commerce ou une copie de la carte professionnelle</li>
                                        <li> Le dernier avis d’imposition de la patente.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Conformité </h3>
                    <p>
                        NADO.MA vous promet un accompagnement et des délais de réponse rapides. Ne manquez pas les formules de financement les plus avantageuses. Meilleurs tarifs. Sans frais de dossier. Remises importantes. Accord à distance. Gestion du process achat.
                    </p>
                    <p>
                        Vous cherchez un financement pour votre véhicule d’occasion ?
                        La plateforme NADO.ma a la solution.
                        Adossée à une société AUTO ENCHERE de financement , cette plateforme vous permet d’accéder à un financement adapté avec des conditions souples et avantageuses et des délais d’acceptation très courts.
                    </p>
                    <p>
                        Vous pouvez faire le choix d’un financement clair et transparent, adapté à votre capacité d’achat. Les véhicules disponibles sur NADO.ma sont expertisés et issus d’un choix sélectif : âge récent, kilométrage réduit expertisés NADO et garantis 3 mois
                    </p>
                    <h3>Un parcours de financement attractif et sécurisé, avec des avantages majeurs : </h3>
                    <ul class="list-check-circle primary">
                        <li>1. Des voitures certifier </li>
                        <li>2. Une transaction sécurisée</li>
                        <li>3. Une garantie moteur, boite et pont</li>
                        <li>4. Expertisées gratuites</li>
                        <li>5. Possibilité de paiement à l'avance</li>
                    </ul>
                </div>
                <!-- Left part start END -->
                <!-- Right part start -->
                <div class="col-sm-4 col-md-4 col-lg-3 blog-sticky-right">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                        <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Sécurité totale</h5>
                            <p>Les prix sont conçus en fonction de vos besoins, des évolutions et de la réponse au marché automobile au Maroc.</p>
                        </div>
                    </div>
                    <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                        <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-building"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Personnalisation</h5>
                            <p>Saisissez vos informations pertinentes sur la fonction de l'appareil que vous pouvez utiliser.</p>
                        </div>
                    </div>
                    <div class="icon-bx-wraper bx-style-1 p-a20 left">
                        <div class="icon-bx-xs text-primary bg-white radius border-2 "> <a href="#" class="icon-cell"><i class="fa fa-code"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Dossier gratuit</h5>
                            <p>Excellent contenu et sans engagement</p>
                        </div>
                    </div>
                </div>
                <!-- Right part start END -->
            </div>
        </div>
        <!-- Career END -->
    </div>
    <div class="section-full p-t50 bg-white content-inner-1 compare-car" id="nadopro">
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
    <div class="section-full p-t50 bg-white content-inner-1 compare-car" id="reprise">
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
                                    <h3 class="post-title">Comment bien préparer l’achat de sa voiture d’occasion au Maroc</h3>
                                </div>
                                <div class="dlab-post-text">
                                    <p>
                                        Acheter une voiture d’occasion peut être une excellente option si vous cherchez à économiser de l’argent tout en ayant un véhicule fiable. Cependant, il est important de prendre certaines précautions pour éviter les mauvaises surprises. Voici quelques conseils pour bien préparer l’achat de votre voiture d’occasion au Maroc
                                    </p>
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
                                <div class="dlab-post-text">
                                    <p>
                                        Préparer votre voiture pour un long trajet peut sembler une tâche fastidieuse, mais cela en vaut la peine pour assurer la sécurité et le confort de vous et de vos passagers. Voici quelques conseils pour vous aider à préparer votre voiture pour un long voyage
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
@endsection
