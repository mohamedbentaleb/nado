@extends('layouts.app')

@section('title', 'Detail | Nado.ma')

@section('content')
<!-- inner page banner -->
        <div class="dlab-bnr-inrs overlay-black-middles" style="height: 100px;width:100%;text-align:center;background-image:url({{ asset('assets/images/banner/achat-voiture.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entrys">
                    <h1 class="text-secondry">Détails véhicule</h1>
				</div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="breadcrumb-row m-t10">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('index') }}">Accueil</a></li>
                    <li><a href="{{ route('achat.index') }}">Achat</a></li>
                    <li class="text-secondry">{{$detail[0]->titre}}</li>
                </ul>
            </div>
        </div>

        <div class="section-full bg-white p-t30">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-md-12">
						<div class="m-b30">
							<h3 class="h3 m-t0">{{$detail[0]->titre}} </h3>
							<ul class="used-car-dl-info">
								<li><i class="fa fa-map-marker"></i> {{$detail[0]->city}}</li>
								<li><i class="fa fa-calendar"></i> {{$formatDate($detail[0]->created_at)}}</li>
							</ul>
						</div>
                        <div class="row">
                            <div class="col-md-2 col-xs-12 block-reel-detail">
                                <lite-youtube videoid="{{$detail[0]->reel}}" ></lite-youtube>
                            </div>
                            <div class="col-md-5 col-xs-12 blockImgdetail">
                                @if($detail[0]->showroom == 1)
                                <a href="#" class="btn btn-sm bg-primary text-white" style="position: absolute;top: 4%;left: 5.3%;z-index: 111;"><span><i class="far fa-check-square"></i> In Showroom</span></a>
                                @endif
            					@if($detail[0]->certifie == 1)
                                <a href="#" class="btn btn-sm btn-success text-white" style="position: absolute;top: 4%;right: 5.3%;z-index: 111;"><span><i class="far fa-check-square"></i> Certifié</span></a>
                                @endif
                                <div class="owl-fade-one owl-carousel owl-btn-center-lr">
                                    @foreach ($detail[0]->media as $med)
                                    <div class="item">
                                        <div class="dlab-thum-bx"> <img src="{{ asset('storage/ads/'.$med->name) }}" alt=""> </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
    				        <div class="col-md-4 col-xs-12">
    						<div class="car-dl-info m-b30">
    							<div class="price">
    								<h2 class="m-t0 m-b5" style="color: blue !important"><b>{{$detail[0]->prix}} Dh</b></h2>
    								<span>{{ number_format(($detail[0]->prix) / 72, 2, '.', '') }} Dhs/ 72 mois </span>
    							</div>
                                @if (session('success'))
                                    <div class="alert alert-success no-bg"> {{ session('success') }} </div>
                                @endif
    							<form action="{{ route('achat.store') }}" method="POST">
                                    @csrf
    								<div class="form-group m-b5">
    									<input type="text" value="" class="form-control" name="offre" placeholder="Mon Offre">
    									<input type="hidden" value="{{$detail[0]->mark}} {{$detail[0]->modele}} {{$detail[0]->year}}" class="form-control" name="car">
    									<input type="hidden" value="{{$detail[0]->id}}" class="form-control" name="idads">
    									<input type="hidden" value="{{$detail[0]->prix}}" class="form-control" name="prix">
    								</div>
    								<div class="form-group m-b5">
    									<input value="" class="form-control" name="phone" placeholder="Téléphone">
    								</div>
    								<div class="clearfix p-tb5">
    									<button type="submit" class="btn-primary site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details"><i class="fa fa-hand-paper"></i> Envoyer </button>
    								</div>
    							</form>
                                <div class="clearfix p-tb5">
                                    <a href="https://wa.me/c/212770080009" class="btn-success site-button btn-block" title="Téléphone" style="color: #ffffff !important;"><i class="fab fa-whatsapp"></i> {{$detail[0]->phone}} </a>
                                </div>
                                @if($detail[0]->finance == 1)
                                <div class="clearfix p-tb5">
                                    <button type="button" class="btn-finance site-button btn-block" title="Finance"   style="color: #ffffff !important;"><i class="fas fa-file-signature"></i> Finance </button>
                                </div>
                                @endif
    						</div>
    					</div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
						<div class="col-md-8 clearfix m-t30">
							<ul class="nav theme-tabs m-b10">
								<li class="active">
									<a data-toggle="tab" aria-controls="economy"  href="#economy">
										<i class="fa fa-usd"></i>
										Caractéristiques techniques
									</a>
								</li>
								<li>
									<a data-toggle="tab" aria-controls="presentation" href="#presentation">
										<i class="fa fa-tachometer"></i>
										Équipement et options
									</a>
								</li>
								<li>
									<a data-toggle="tab" aria-controls="features" href="#features">
										<i class="fa fa-star"></i>
										État du véhicule
									</a>
								</li>
								<li>
									<a data-toggle="tab" aria-controls="safety" href="#safety">
										<i class="fa fa-automobile"></i>
										Rapport Expert
									</a>
								</li>
							</ul>
							<div class="dlab-tabs">
								<div class="tab-content">
									<div id="economy"  class="tab-pane active clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
													<div class="leftview">Marque</div>
													<div class="rightview">{{$detail[0]->mark}}</div>
												</li>
												<li>
													<div class="leftview">Modele</div>
													<div class="rightview">{{$detail[0]->modele}}</div>
												</li>
												<li>
													<div class="leftview">Année</div>
													<div class="rightview">{{$detail[0]->year}}</div>
												</li>
												<li>
													<div class="leftview">Carburant</div>
													<div class="rightview">{{ucfirst($detail[0]->carburant)}}</div>
												</li>
												<li>
													<div class="leftview">Boite de vitesses</div>
													<div class="rightview">{{ ucfirst($detail[0]->box) }}</div>
												</li>

												<li>
													<div class="leftview">kilométrage</div>
													<div class="rightview">{{ $detail[0]->km }} km</div>
												</li>
												<li>
													<div class="leftview">Puissance fiscale</div>
													<div class="rightview">{{ $detail[0]->cv }}</div>
												</li>
												<li>
													<div class="leftview">Nombre de portes</div>
													<div class="rightview">{{ $detail[0]->nb_Door }}</div>
												</li>
												<li>
													<div class="leftview">Carrosserie</div>
													<div class="rightview">{{ ucfirst($detail[0]->bodywork) }}</div>
												</li>
												<li>
													<div class="leftview">Origine</div>
													<div class="rightview">{{ $detail[0]->origine }}</div>
												</li>
												<li>
													<div class="leftview">Etat</div>
													<div class="rightview">{{ ucfirst($detail[0]->etat) }}</div>
												</li>
											  </ul>
										</div>
									</div>
									<div id="presentation"  class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
                                            <div class="row">
                                                @if($detail[0]->jantesA)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/jantes_aluminium.png')}}" width="30"> Jantes aluminium
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->airbags)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/Airbags.png')}}" width="30"> Airbags
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->climatisation)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/Climatisation.png')}}" width="30"> Climatisation
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->gps)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/gps.png')}}" width="30"> Système de navigation
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->toit_ouvrant)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/toit_ouvrant.png')}}" width="30"> Toit ouvrant
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->siege_cuir)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/toit_ouvrant.png')}}" width="30"> Siège cuir
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->radar_recul)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/radar_recul.png')}}" width="30"> Radar de recul
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->camera_recul)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/camera_reul.png')}}" width="30"> Caméra de recul
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->vitreselec)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/vitres_electriques.png')}}" width="30"> Vitres éléctriques
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->abs)
                                            	<div class="col-md-6 col-xs-6 m-tb5 ">
                                            		<img src="{{ asset('assets/images/icons/abs.png')}}" width="30"> ABS
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->eps)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/eps.png')}}" width="30"> EPS
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->rv)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/regulateur_de_vitesse.png')}}" width="30"> Régulateur de vitesse
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->lv)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/limiteur_de_vitesse.png')}}" width="30"> Limiteur de vitesse
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->cd)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/CDMP3BL.png')}}" width="30"> Cd/mp3/bluetooth
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->ordinateur)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/gps.png')}}" width="30"> Ordinateur de bord
                                            	</div>
                                            	@endif
                                            	@if($detail[0]->verrouillage)
                                            	<div class="col-md-6 col-xs-6 m-tb5">
                                            		<img src="{{ asset('assets/images/icons/Verrouillage _Distance.png')}}" width="30"> Verrouillage centralisé à distance
                                            	</div>
                                            	@endif
                                            </div>
										</div>
									</div>
									<div id="features"  class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">
											<ul class="table-dl clearfix">
												<li>
												    <b>Section Châssis</b>
                                                </li>
                                                <li>
                                                  <div>Etat des longerons</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Etat des traverses</div>
                                                  <div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                  <div>Traces de corrosion</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Fixations des renforts</div>
                                                  <div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
												<li>
                                                    <b>Etat extérieur</b>
                                                </li>
                                                <li>
                                                	<div>Voile de peinture</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Teinte de la voiture</div>
                                                	<div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                	<div>Etat capot</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Pare-brise avant</div>
                                                	<div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                	<div>Ouverture portes</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Alignement des éléments</div>
                                                	<div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                	<div>Etat male arrière</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Etat pare-brise arrière</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Conformité Serie vitres</div>
                                                	<div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                	<div>Centrage des roues</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Rétroviseurs</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Etat des feux</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Présence de rouille</div>
                                                	<div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                	<div>Etat des jantes</div>
                                                	<div class="rightview text-red"><i class="fa fa-close font-18"></i> No</div>
                                                </li>
                                                <li>
                                                	<div>Présence du pneu de secours</div>
                                                	<div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>

												<li>
                                                    <b>Intérieur du véhicule</b>
                                                </li>

                                                <li>
                                                  <div>Sièges Avants</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Sièges Arrières</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Planches de bord</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>État rétroviseur intérieur</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Panneaux de portes</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Garniture du ciel de toit/pavillon</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Plage arrière</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Ceintures de sécurité</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Usure des commandes</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Frein à main</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                    <b>Moteur</b>
                                                </li>

                                                <li>
                                                  <div>Souffle au bouchon d'huile</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Qualité de l'huile</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Qualité liquide de refroidissement</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Présence de fumée à l'échappement</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Sonorité du moteur</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Bloc compteur (jauges,cadrans...)</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Vibrations moteurs</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <b>Essai Routier</b>
                                                </li>
                                                <li>
                                                  <div>Conditions de l'essai</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Démarrage véhicule</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Pédale d'embrayage</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Passage de vitesses</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Accélération</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Vibrations mécaniques</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Tenue de route</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Présence de bruits</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Présence d'odeurs</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Freinage / Ralenti</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Passage marche arrière</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>




                                                <li>
                                                  <b>Fonctionnement des options</b>
                                                </li>

                                                <li>
                                                  <div>Climatisation</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Vitres latérales</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Radar de recul</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Commandes au volant</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Ecran</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>

                                                <li>
                                                  <b>Conformité administrative</b>
                                                </li>

                                                <li>
                                                  <div>Conformité plaque immatriculation</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Conformité plaque constructeur</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Main levée ou carte grise non barrée</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Carte grise au nom du vendeur</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>
                                                <li>
                                                  <div>Présence 2e clé</div>
                                                  <div class="rightview text-green"><i class="fa fa-check font-18"></i> Yes</div>
                                                </li>

											  </ul>
										</div>
									</div>
									<div id="safety"  class="tab-pane clearfix city-list">
										<div class="icon-bx-wraper bx-style-1 p-a30">

										    <img src="{{ asset('assets/images/rapport/rapport.jpeg')}}" style="width:100%" class="m-b10">
										    	<ul class="table-dl clearfix">
												<li>
													<b>Emissions de CO2</b>
												</li>
												<li>
												    Les émissions de dioxyde de carbone mesurer pour ce véhicule sont de <span class="text-blue">119 g/Km</span> (ces valeurs sont mesurer par grammes de CO2 par kilomètre parcouru)
												</li>
											  </ul>
										    <img src="{{ asset('assets/images/rapport/ligne.jpeg')}}" style="width:100%" class="m-b10">

										</div>
									</div>
								</div>
							</div>
						<div class="clearfix">
						    <style>.block-description b{color: blue;}</style>
    						<div class="icon-bx-wraper bx-style-1 block-description p-a20">
    							<h4>A propos de ce véhicule</h4>
                                <p> Mis en circulation pour la première fois le Année, ce véhicule <b>{{ ucfirst($detail[0]->mark) }} {{ ucfirst($detail[0]->modele) }}</b> est disponible à
                                <b>{{ ucfirst($detail[0]->city) }}</b> vous est proposé au prix de <b>{{ $detail[0]->prix }} dh</b>. Finitin de couleur «NON DISPONIBLE» avec <b>{{ $detail[0]->km }} km</b>
                                à son compteur, cette automobile carburant possède une boîte de vitesse <b>{{ ucfirst($detail[0]->box) }}</b> et une puissance de
                                <b>{{ $detail[0]->cv }} CV</b> chevaux fiscaux. Ce véhicule d'occasion <b>{{ $detail[0]->nb_Door }}</b> portes est certifié par Nado, accompagné d'une garantie
                                «Approuvé».</p>
    						</div>
    						<div class="text-center">
						    	<a href="#" class="site-button gray text-uppercase m-t10" style="background: #1f519b !important; color: #fdd64d !important;">Telecharger fiche technique <i class="fas fa-download"></i></a>
    						</div>

					    </div>
						</div>

                        <div class="col-md-4">
                            <div class="m-b10">
								<button class="site-button-secondry text-uppercase " style="background:#f00;">Vidéo en détail</button>
							</div>
                            <div class="m-b10 block-vd-detail">
                                <lite-youtube videoid="{{$detail[0]->video}}" ></lite-youtube>
                            </div>
                        </div>
						</div>
					</div>
                    <!-- Side bar END -->

                </div>
            </div>
        </div>
		<div class="section-full bg-white  p-t40 p-b70 ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-head">
							<h3 class="h4 text-uppercase">Annonces similaires</h3>

						</div>
						<div class="clearfix owl-carousel owl-btn-style-2 quick-look">
						    @foreach($similar_ads as $ad)
							<div class="item">

                                <div class="dlab-feed-list style-list m-b30 text-left box-s border-blr">
                                        <div class="dlab-media border-tlr">
                                            <a href="{{ route('achat.detail', [ 'marque' => str_replace(' ', '', $ad->mark),  'modele' =>  str_replace(' ', '', $ad->modele),  'id' => $ad['id'] ]) }}">
                                                <div class="block-status-listAds {{$ad['status']}}"><i class="far fa-check-square"></i> {{ucfirst($ad['status'])}}</div>
                                                <img src="{{ asset('storage/ads/'.$ad->pathImageAds()) }}" alt="">
                                                <div class="bg-primary block-price-list">
                                                    <div class="p-a5 text-center text-secondry" style="font-size: 18px;">
                                                        <b>{{$ad['prix']}} Dh</b>
                                                    </div>
                                                    <div class="bg-secondry text-center text-primary p-a5" style="font-size: 8px;">
                                                         {{ number_format(($ad['prix']) / 72, 2, '.', '') }} Dhs/ 72 mois
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dlab-info block-detail-list text-left border-blr" style="text-align: left !important;">
                                            <h4 class="dlab-title m-b0" ><a href="{{ route('achat.detail', [ 'marque' => str_replace(' ', '', $ad->mark),  'modele' =>  str_replace(' ', '', $ad->modele),  'id' => $ad['id'] ]) }}" style="color:#333 !important;font-weight: normal;">{{$ad['mark']}} {{$ad['modele']}} - {{$ad['year']}}</a></h4>
                                            <span class="text-muted font-14">Voitures d'occasion NADO.MA</span>
                                            <img src="{{ asset('assets/images/icons/icon-car.png')}}" class="icon-image-list" style="width: 60px;display: inline-block;">
                                            <ul class="used-car-dl-info" style="font-size: 10px;">
                								<li><i class="fa fa-map-marker"></i> {{$ad->city}}</li>
                								<li><i class="fa fa-calendar"></i> {{$formatDate($ad->created_at)}}</li>
                							</ul>
                						    <div class="site-filters btn-list m-t10">
                                				<ul class="filters clearfix" data-toggle="buttons">
                                				    @if($ad['showroom'] == 1)
                                					<li data-filter="" class="btn active">
                                						<a href="#" class="btn btn-sm bg-primary text-white"><span><i class="far fa-check-square"></i> In Showroom</span></a>
                                					</li>
                                					@endif
                                					@if($ad['finance'] == 1)
                                					<li data-filter="interior" class="btn">
                                						<a href="#" class="btn btn-sm btn-finance text-white"><span><i class="far fa-check-square"></i> Finance</span></a>
                                					</li>
                                					@endif
                                					@if($ad['certifie'] == 1)
                                					<li data-filter="exterior" class="btn">
                                						<a href="#" class="btn btn-sm btn-success text-white"><span><i class="far fa-check-square"></i> Certifié</span></a>
                                					</li>
                                					@endif
                                				</ul>
                                			</div>
                                            <div class="icon-box-btn text-center m-tb10">
                                                <ul class="clearfix">
                                                    <li><a class="box-list" href="javascript:;"><i class="flaticon-calendar"></i> {{$ad['year']}}</a></li>
                                                    <li><a class="box-list" href="javascript:"><i class="flaticon-settings"></i> {{$ad['box']}}</a></li>
                                                    <li><a class="box-list" href="javascript:;"><i class="flaticon-oil"></i> {{$ad['carburant']}}</a></li>
                                                    <li><a class="box-list" href="javascript:;"><i class="flaticon-dashboard-1"></i> {{$ad['km']}} km</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
							</div>
						@endforeach
						</div>
					</div>
				</div>

			</div>
		</div>
        @endsection
