@extends('layouts.app')

@section('title', 'Acheter Voiture d\'occassion | Nado.ma')

@section('content')
    <div class="dlab-bnr-inrs overlay-black-middles" style="height: 100px;width:100%;text-align:center;background-image:url({{ asset('assets/images/banner/achat-voiture.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entrys">
                <h1 class="text-secondry">Voitures d'occasion</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row m-t10">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('index') }}">Accueil</a></li>
                <li class="text-secondry">Achat</li>
            </ul>
        </div>
    </div>
    <div class="section-full content-inner bg-white">
        <div class="container">
            <div class="row">
                <!-- Side bar start -->
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <aside  class="side-bar">
                        <div class="widget recent-posts-entry">
                            <div class="dlab-accordion advanced-search toggle" id="accordion1">
                                <style>
                                    .acod-head a, .acod-head a:after, .acod-head a.collapsed:after, .acod-head a.collapsed, .acod-head a:hover, .acod-head a.collapsed:hover{
                                        color:#1f519b !important;
                                    }
                                </style>
                                <div class="panel bg-primary text-secondry">
                                    <div class="acod-head text-secondry" >
                                        <h5 class="acod-title bg-primary">
                                            <a data-toggle="collapse" href="#search" class="collapsed" style="border-bottom-color: #ffd802;">
                                                Recherche avancée
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="search" class="acod-body collapse in">
                                        <div class="acod-content">
                                            @csrf
                                            <div class="input-group m-b10">
                                                <label>Marque</label>
                                                <select class="form-control nado-marks" name="marque" id="marque">
                                                    <option value="">Sélectionner</option>
    											    @foreach($brands as $brand)
    											    <option value="{{str_replace(" ", "-", $brand->name)}}" data-id="{{$brand->id}}" {{ isset($searchKeys['marque']) ? (str_replace("-", " ", strtoupper($searchKeys['marque'])) ==  $brand->name ? 'selected' : '' ) : '' }}> {{$brand->name}} </option>
    											    @endforeach
                                                </select>
                                            </div>
                                            <div class="input-group m-b10">
    											<label>Modele</label>
    											<select class="form-control nado-models" name="modele" id="modele" >
    											    <option value="">Sélectionner</option>
    											    @if($models)
    											    @foreach($models as $m)
    											    <option value="{{str_replace(" ", "_", $m->name)}}" {{ isset($searchKeys['modele']) ? (str_replace("_", " ", $searchKeys['modele']) ==  $m->name ? 'selected' : '' ) : '' }}>{{$m->name}}</option>
    											    @endforeach
    											    @endif
    											</select>
    										</div>
    										<div class="input-group m-b10">
    											<label>Année</label>
    											<select class="form-control nado-marks" name="annee" id="annee">
                                                    <option value="">Sélectionner</option>
                                                    @for ($i = date("Y"); $i >= 1992; $i--)
                            			                <option title="{{$i}}" value="{{$i}}" {{ isset($searchKeys['annee']) ? ($searchKeys['annee'] ==  $i ? 'selected' : '' ) : '' }}>
                            			                  {{$i}}
                            			                </option>
                        			                @endfor
                                                </select>
    										</div>
    										<div class="input-group mb10">
    											<label>Energie</label>
    											<div class="search-content">
                                                    <input id="diesel" type="radio" name="carburant" value="diesel" {{ isset($searchKeys['carburant']) ? ($searchKeys['carburant'] ==  "diesel" ? 'checked' : '' ) : '' }}>
                                                    <label for="diesel" class="search-content-area text-muted">Diesel  </label>
                                                </div>
    											<div class="search-content">
                                                    <input id="essence" type="radio" name="carburant" value="essence" {{ isset($searchKeys['carburant']) ? ($searchKeys['carburant'] ==  "essence" ? 'checked' : '' ) : '' }}>
                                                    <label for="essence" class="search-content-area text-muted">Essence  </label>
                                                </div>
    											<div class="search-content">
                                                    <input id="electrique" type="radio" name="carburant" value="electrique" {{ isset($searchKeys['carburant']) ? ($searchKeys['carburant'] ==  "electrique" ? 'checked' : '' ) : '' }}>
                                                    <label for="electrique" class="search-content-area text-muted">Electrique  </label>
                                                </div>
    											<div class="search-content">
                                                    <input id="hybride" type="radio" name="carburant" value="hybride" {{ isset($searchKeys['carburant']) ? ($searchKeys['carburant'] ==  "hybride" ? 'checked' : '' ) : '' }}>
                                                    <label for="hybride" class="search-content-area text-muted">Hybride  </label>
                                                </div>
    										</div>
    										<div class="input-group mb10">
    											<label>Transmission</label>
    											<div class="search-content">
                                                    <input id="manuelle" type="radio" name="box" value="manuelle" {{ isset($searchKeys['box']) ? ($searchKeys['box'] ==  "manuelle" ? 'checked' : '' ) : '' }}>
                                                    <label for="manuelle" class="search-content-area text-muted">Manuelle  </label>
                                                </div>
                                                <div class="search-content">
                                                    <input id="automatique" type="radio" name="box" value="automatique" {{ isset($searchKeys['box']) ? ($searchKeys['box'] ==  "automatique" ? 'checked' : '' ) : '' }}>
                                                    <label for="automatique" class="search-content-area text-muted">Automatique  </label>
                                                </div>
    										</div>
    										<div class="input-group m-b10">
    											<label>Ville</label>
    											<select class="form-control nado-marks" name="ville" id="ville">
                                                    <option value="">Sélectionner</option>
    											    @foreach($ville as $v)
    											    <option value="{{str_replace(" ", "_", $v->name)}}" {{ isset($searchKeys['ville']) ? (str_replace("_", " ", ($searchKeys['ville'])) ==  $v->name ? 'selected' : '' ) : '' }}>{{$v->name}}</option>
    											    @endforeach
                                                </select>
    										</div>
    										<div class="input-group m-b30">
                                                <div class="km">
                                                    <label for="km" class="text-muted">Kilométrage</label>
                                                    <div class="pull-right"><span class="slider-range">{{ isset($searchKeys['km']) ? (($searchKeys['km']) >=  '5000' ? $searchKeys['km'] : '' ) : '5000' }}</span> km</div>
                                                    <input type="range" min="5000" max="300000" value="{{ isset($searchKeys['km']) ? (($searchKeys['km']) >=  '5000' ? $searchKeys['km'] : '' ) : '5000' }}"  step="1000" class="custom-range custom-range-teal km-range" id="km" name="km" onInput="$('.slider-range').html($(this).val())">
                                                </div>
                                             </div>
                                             <div class="input-group m-b30">
                                                <div class="prix">
                                                    <label for="prix" class="text-muted">Prix</label>
                                                    <div class="pull-right"><span class="range-price">{{ isset($searchKeys['prix']) ? (($searchKeys['prix']) >=  '40000' ? $searchKeys['prix'] : '' ) : '40000' }}</span> Dh</div>
                                                    <input type="range" min="40000" max="900000" value="{{ isset($searchKeys['prix']) ? (($searchKeys['prix']) >=  '40000' ? $searchKeys['prix'] : '' ) : '40000' }}"  step="5000" class="custom-range custom-range-teal prix-range" id="prix" name="prix" onInput="$('.range-price').html($(this).val())">
                                                </div>
                                             </div>
                                             
    										<div class="input-group mb10">
    											<label>Carrosserie</label>
    											<select class="form-control nado-marks" name="bodywork" id="bodywork">
                                                    <option value="">Sélectionner</option>
                                                    <option value="coupé-cabriole" {{ isset($searchKeys['bodywork']) ? ($searchKeys['bodywork'] ==  "coupé-cabriole" ? 'selected' : '' ) : '' }}>Coupé / Cabriole</option>
                                                    <option value="citadine" {{ isset($searchKeys['bodywork']) ? ($searchKeys['bodywork'] ==  "citadine" ? 'selected' : '' ) : '' }}>Citadine</option>
                                                    <option value="berline" {{ isset($searchKeys['bodywork']) ? ($searchKeys['bodywork'] ==  "berline" ? 'selected' : '' ) : '' }}>Berline</option>
                                                    <option value="pick-up" {{ isset($searchKeys['bodywork']) ? ($searchKeys['bodywork'] ==  "pick-up" ? 'selected' : '' ) : '' }} >Pick up</option>
                                                    <option value="compact" {{ isset($searchKeys['bodywork']) ? ($searchKeys['bodywork'] ==  "compact" ? 'selected' : '' ) : '' }}>Compact</option>
                                                    <option value="suv-et-4x4" {{ isset($searchKeys['bodywork']) ? ($searchKeys['bodywork'] ==  "suv-et-4x4" ? 'selected' : '' ) : '' }}>SUV / 4x4 </option>
                                                </select>
    										</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </aside>
                </div>
                <!-- Side bar END -->
                <!-- left part start -->
                <div class="col-sm-8 col-md-8 col-lg-9">
                    <div class="row">
						<div class="p-lr15 clearfix ">
							<div class="filter-bar clearfix m-b30 p-lr15">
								<div class="nav theme-tabs pull-left">
								    <li>
										<a href="#">Voiture d'occassion: (<i class="fa fa-car"></i>{{$ads->count()}})</a>
									</li>
									<li >
										<a href="#">Comparer  <i class="fas fa-exchange-alt"></i></a>
									</li>
								</div>
								<ul class="nav theme-tabs pull-right">
									<li>
										<a href="#"><i class="fa fa-list"></i></a>
									</li>
									<li >
										<a href="#"><i class="fa fa-th"></i></a>
									</li>
								</ul>
							</div>
						</div>
                        <!-- blog grid  -->
                        <div id="masonry" class="dlab-blog-grid-3 used-car-info">
                            @if (session('danger'))
                            <div class="alert alert-danger no-bg"> {{ session('danger') }} </div>
                            @endif
                            
                            @foreach ($ads as $ad)
                                <div class="post card-container col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                                        <div class="dlab-info block-detail-list text-left border-blr">
                                            <h4 class="dlab-title m-b0" ><a href="{{ route('achat.detail', [ 'marque' => str_replace(' ', '', $ad->mark),  'modele' =>  str_replace(' ', '', $ad->modele),  'id' => $ad['id'] ]) }}" style="color:#333 !important;">{{$ad['mark']}} {{$ad['modele']}} - {{$ad['year']}}</a></h4>
                                            <span class="text-muted font-14">Voitures d'occasion NADO.MA</span>
                                            <img src="{{ asset('assets/images/icons/icon-car.png')}}" width="70">
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
                        <!-- blog grid END -->
                        <!-- Pagination  -->
                        <div class="pagination-bx col-lg-12 clearfix hide">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body clearfix">
                                    <div class="pull-letf max-width-300"></div>
                                    <div class="lead-form">
                                        <form>
                                            <h3 class="m-t0">Where should we send seller details?</h3>
                                            <div class="form-group">
                                                <input  value="" class="form-control" placeholder="Name"/>
                                            </div>
                                            <div class="form-group">
                                                <input  value="" class="form-control" placeholder="Mobile Number"/>
                                            </div>
                                            <div class="text-left">
                                                <div class="search-content">
                                                    <input id="send-details" type="checkbox">
                                                    <label for="send-details"  class="search-content-area text-muted">Send details on email </label>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <button type="button" class="btn-primary site-button btn-block">See Seller Details Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left part END -->
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
$(document).ready(function(){ 

    
        // Function to update the URL
    function updateUrl() {
        var params = {};
        if ($('#marque').val()) params.marque = $('#marque').val();
        if ($('#modele').val()) params.modele = $('#modele').val();
        if ($('#ville').val()) params.ville = $('#ville').val();
        if ($('#annee').val()) params.annee = $('#annee').val();
        if ($('#bodywork').val()) params.bodywork = $('#bodywork').val();
        if ($('input[name=carburant]:checked').val()) params.carburant = $('input[name=carburant]:checked').val();
        if ($('input[name=box]:checked').val()) params.box = $('input[name=box]:checked').val();
        if ($('.km-range').val() > 5000) params.km = $('.km-range').val();
        if ($('.prix-range').val() > 40000) params.prix = $('.prix-range').val();
        var queryString = $.param(params);
        window.history.replaceState({}, '', window.location.pathname + '?' + queryString);
    }

    // Event handlers for select, radio, and range inputs
    $('#marque, #modele, #ville, #annee, input[name=carburant], input[name=box], #bodywork, .km-range, .prix-range').change(function(){
        
        if($(this).attr('id') == "marque"){
            $('#modele').html("");
        }
        updateUrl();
        location.reload();
    });
    
    
    });
    
    
</script>
@endsection