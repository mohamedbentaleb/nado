@extends('layouts.app')

@section('Vente', 'Home | Nado.ma')

@section('content')
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/banner/sell.jpg')}});">
        <div class="container">
        <div class="dlab-bnr-inr-entry">
			<div class="text-center text-white m-b30">
				<h1 class="text-white m-b10 font-40">la révolution de la vente de voiture occasion au maroc</h1>
				<span class="m-r10 font-14">Nous proposons un service nouveau et unique au Maroc qui nous permet de vendre des voitures aux clients plus rapidement et à des prix précis.</span>
			</div>
    			<div class="used-car sale-car ">
    				<div class="dlab-tabs">
    					<div class="tab-content">
    						<div id="by-budget" class="tab-pane clearfix active in" >
    							<form action="{{ route('services.store') }}" method="POST">
    							    @csrf
    								<div class="row">
    									<div class="col-md-4 col-sm-4">
    										<div class="input-group">
    											<label>Marque</label>
    											<select class="form-control nado-marks" name="mark" id="mark" required >
    											    <option value="">Marque</option>
    											    @foreach($brands as $brand)
    											    <option value="{{$brand->name}}" data-id="{{$brand->id}}">{{$brand->name}}</option>
    											    @endforeach
    											</select>
    										</div>
    									</div>
    									<div class="col-md-4 col-sm-4">
    										<div class="input-group">
    											<label>Modele</label>
    											<select class="form-control nado-models" name="modele" id="modele" required>
    											    <option value="">Modele</option>
    											</select>
    										</div>
    									</div>
    									<div class="col-md-4 col-sm-4">
    										<div class="input-group">
    											<label>Année</label>
    											<select class="form-control" name="year" id="year" required>
    											    <option value="">Année</option>
    											    @for ($i = date("Y"); $i >= 1992; $i--)
                            			                <option title="{{$i}}" value="{{$i}}">
                            			                  {{$i}}
                            			                </option>
                        			                @endfor
    											</select>
    										</div>
    									</div>
    									<div class="col-md-12 col-sm-12">
    										<div class="max-w300 m-auto">
    											<button class="site-button btn-block" type="button">CONTINUE</button>
    										</div>
    									</div>
    								</div>
    							</form>
    						</div>
    					</div>
    				</div>
    			</div>
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

	<!-- about -->
	<div class="section-full about-sc content-inner-1 overlay-black-dark " style="background-image: url({{ asset('assets/images/background/about.jpg') }});background-position: center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="section-head style-1 left light-gray opacity" >
						<div class="title-sm text-uppercase text-white">En savoir plus sur le service</div>
						<h2 class="h2 text-primary">Le moyen le plus rapide de vendre des voitures d'occasion au Maroc</h2>
						<div class="sep"></div>
					</div>
					<div class="row">
						<div class="col-md-6 m-b60">
							<p class="text-gray-dark">Le propriétaire de la voiture est confronté à de nombreux problèmes lors de la vente, notamment le grand nombre d'avis, la mauvaise évaluation de la valeur de la voiture et le grand nombre d'intermédiaires. C'est ce qui rend la vente au Maroc peu fiable. Par conséquent, Hada Nado vous propose une opportunité en or et une solution qui élimine tous ces problèmes.</p>
						</div>
						<div class="col-md-6 m-b60">
							<blockquote>
								Nous savons que la différence réside dans les détails, et c'est pourquoi nos services de vente de voitures, sur le marché des voitures d'occasion, se distinguent par leur qualité qui permet de réaliser la vente dans les plus brefs délais.
À des prix qui satisfont votre objectif pour atteindre votre satisfaction avec le prix que vous souhaitez obtenir
							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<div class="row about-des">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover">
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-users"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary">Expérience d'équipe</h5>
								<p>Nous traitons toutes les transactions de manière professionnelle.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover active">
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-signs"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary">Opération facile</h5>
								<p>Un processus transparent simplifie les procédures de vente</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover">					
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-vehicle"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary">Sécurité et garantie</h5>
								<p>Une garantie sûre tant pour le vendeur que pour l'acheteur>We working since 1980 with 4.000 customers</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover">
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-break-1"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary">Prix acceptables</h5>
								<p>Le seul prix compétitif sur le marché de voiture occasion au Maroc</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="about-des-link">
						<a href="" class="site-button m-r15">Je veux vendre ma voiture</a>
						<a href="" class="site-button gray text-uppercase" style="background: #1f519b !important; color: #fdd64d !important;">Estimer la valeur de ma voiture</a>
					</div>
				</div>
			</div>
		</div>
	</div>

 

    <div class="section-full p-t50 bg-white content-inner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center">
                        <h2 class="h2">Estimer la valeur de ma voiture</h2>
                        <div class="title-sm text-uppercase">Faites estimer votre voiture par un expert spécialisé</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Side bar start -->
                <div class="col-md-12 col-lg-12 col-sm-12">
					<div class="clearfix">
						<div class="icon-bx-wraper bx-style-1 p-a20">
							<h4>Demandez de l'expérience</h4>
							<p>Pour un particulier qui souhaite vendre sa voiture d’occasion aux meilleurs prix, il s’adresse à un expert automobile pour déterminer le prix de vente de la voiture d’occasion en fonction de données objectives sur la classification de la voiture. Vous pouvez également faire appel à un professionnel certifié pour effectuer une inspection complète de la voiture. Il s'appuiera sur différents indicateurs, à commencer par la notation, pour déterminer le prix de vente.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="icon-bx-wraper bx-style-1 p-a20 p-b10 m-b30">
								<h3 class="h3 m-t0">199 DH</h3>
								<h5 class="">Prix d'une consultation avec un expert</h5>
								<ul class="used-car-dl-info">
									<li>
										<a href="#" class="site-button" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details" style="background: #1f519b !important; color: #fdd64d !important;"> Rendez-vous
										</a>
									</li>
								</ul>
								<p class="m-t15 m-b5">Type de consultation</p>
								<div class="m-b10">
									<select>
										<option>Expert</option>
										<option>Robot </option>
									</select>
								</div>	
							</div>
						</div>
						<div class="col-md-4 m-b30">
							<div class="owl-fade-one owl-carousel owl-btn-center-lr">
								<div class="item">
									<div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/1300.jpg')}}" alt=""> </div>
								</div>
								<div class="item">
									<div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/2300.jpg')}}" alt=""> </div>
								</div>
								<div class="item">
									<div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/3300.jpg')}}" alt=""> </div>
								</div>
								<div class="item">
									<div class="dlab-thum-bx"> <img src="{{ asset('assets/images/blog/default/4300.jpg')}}" alt=""> </div>
								</div>
							</div>
						</div>
					</div>
					
					

				</div>
            </div>
        </div>
    </div>
    <div class="section-full bg-white content-inner">
		<div class="container">
		    <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-1 text-center">
                        <h2 class="h2">PACK NADO</h2>
                        <div class="title-sm text-uppercase">Choisissez la meilleure méthode pour vous !</div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pricing table-1 Columns 3 with gap -->
					<div class="section-content box-sort-in button-example p-tb50">
						<div class="pricingtable-row">
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div class="pricingtable-wrapper">
										<div class="pricingtable-inner">
											<div class="pricingtable-price"> <span class="pricingtable-bx">199 Dh</span></div>
											<div class="pricingtable-title bg-primary">
												<h2>Annonce</h2>
											</div>
											<ul class="pricingtable-features">
												<li><i class="fa fa-check"></i> Service à distance </li>
												<li><i class="fa fa-check"></i> Nado à déposé votre annonce sur les principaux sites de vente</li>
												<li><i class="fa fa-check"></i> 1 fois/J renouvellement pondent 7J sur (nado.ma-avito.ma-moteur.ma)</li>
												<li><i class="fa fa-check"></i> Annonce normale</li>
												<li><i class="fa fa-check"></i> Appel direct</li>
												<li><i class="fa fa-check"></i> Votre coordonnées</li>
												<li><i class="fa fa-check"></i> Assistance</li>

											</ul>
											<div class="pricingtable-footer"> <a href="#" class="site-button ">Sign Up</a> </div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div class="pricingtable-wrapper">
										<div class="pricingtable-inner pricingtable-highlight">
											<div class="pricingtable-price"> <span class="pricingtable-bx">499 Dh</span> </div>
											<div class="pricingtable-title bg-primary">
												<h2>Pack Showroom</h2>
											</div>
											<ul class="pricingtable-features">
												<li><i class="fa fa-check"></i> Service local Personnalisée </li>
												<li><i class="fa fa-check"></i> Nado à déposé votre annonce sur les principaux sites de vente</li>
												<li><i class="fa fa-check"></i> Signature Nado.ma</li>
												<li><i class="fa fa-check"></i> 3 fois/J renouvellement pondent 15J sur (nado.ma-avito.ma-moteur.ma)</li>
												<li><i class="fa fa-check"></i> Bage de gratuit sur la voiture</li>
												<li><i class="fa fa-check"></i> Reels professionnel</li>
												<li><i class="fa fa-check"></i> Video Youtube professionnel</li>
												<li><i class="fa fa-check"></i> Le contrôle général</li>
												<li><i class="fa fa-check"></i> Teste drive</li>
												<li><i class="fa fa-check"></i> l’entretien esthétique automobile</li>
												<li><i class="fa fa-check"></i> Annonce Personnalisée (Publiez l'annonce sur tous les canaux de médias sociaux de nado.ma)</li>
												<li><i class="fa fa-check"></i> Possibilité d'exposer la voiture au showroom pendant une semaine</li>
												<li><i class="fa fa-check"></i> Rendez-vous</li>
												<li><i class="fa fa-check"></i> Assistance</li>

											</ul>
											<div class="pricingtable-footer"> <a href="#" class="site-button ">Sign Up</a> </div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div class="pricingtable-wrapper">
										<div class="pricingtable-inner">
											<div class="pricingtable-price"> <span class="pricingtable-bx">299 Dh</span> </div>
											<div class="pricingtable-title bg-primary">
												<h2>KHIDMA DISTANCE</h2>
											</div>
											<ul class="pricingtable-features">
												<li><i class="fa fa-check"></i> Service de mobilité </li>
												<li><i class="fa fa-check"></i> Nado à déposé votre annonce sur les principaux sites de vente</li>
												<li><i class="fa fa-check"></i> 2 fois/J renouvellement pondent 10J sur (nado.ma-avito.ma-moteur.ma)</li>
												<li><i class="fa fa-check"></i> Video Youtube présentation de voiture</li>
												<li><i class="fa fa-check"></i> Le contrôle général</li>
												<li><i class="fa fa-check"></i> Teste drive</li>
												<li><i class="fa fa-check"></i> Rendez-vous</li>
												<li><i class="fa fa-check"></i> Assistance</li>

											</ul>
											<div class="pricingtable-footer"> <a href="#" class="site-button">Sign Up</a> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Pricing table-1 Columns 3 with gap END -->
	</div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function(){ 
    $("select.nado-marks").change(function () {  
        $('select.nado-models').html("<option> Chargement en cours ... </option>").prop('disabled', 'disabled');
        var mark = $('select.nado-marks option:selected').attr('data-id');
        var formData = {
            'mark': mark,
            '_token' : $('input[name="_token"]').val()
        };
        var ajaxurl = "/achat/"+mark+"/getmodels";
        var models = '<option value="">Selectionner un modele</option>';
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) { 
                for(var i =0;i < data.length;i++){
                    models += '<option value="' + data[i].name + '">' + data[i].name + '</option>';
                 }
                 
                console.log(models);
            },
            complete:function(){
                $('select.nado-models').html("").append(models).prop('disabled', false);
            }
        });
    });
    setTimeout(function() {
        $(".bootstrap-select").remove();
    }, 2000);
    });
</script>
@endsection
