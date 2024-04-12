@extends('layouts.app')

@section('Financement', 'Home | Nado.ma')

@section('content')
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/banner/financement-auto.jpg')}});">
        <div class="container">
        <div class="dlab-bnr-inr-entry">
			<div class="text-center text-white m-b30">
				<h1 class="text-white m-b10 font-45">Financer ma voiture - Crédit auto</h1>
				<span class="m-r10">Acheter votre voiture à crédit en toute sécurité avec notre partenaire</span>
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
    											<button class="site-button btn-block" type="button" style="background: #1f519b !important; color: #fdd64d !important;">CONTINUE</button>
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
<div class="section-full bg-white content-inner-2" style="background-image: url(images/background/about-us.jpg); background-position:bottom; background-repeat:no-repeat; background-size:100%;" id="intermediation">
    <div class="container">
        <div class="section-head text-center head-1">
            <h3 class="h3 text-uppercase">Financement Auto</h3>
            <div class="dlab-separator bg-gray-dark"></div>
            <p>comment financer son véhicule d'occasion</p>
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
                            <h4 class="dlab-tilte text-uppercase">Envoyez les pièces justificatives</h4>
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
                            <p>Une fois que votre dossier aura été accepté, vous recevrez un virement , ce qui vous permettra d'acheter votre véhicule.</p>
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
                    <h1 class="m-b20 m-t0">Les documents à soumettre pour ouvrir le dossier de demande de prêt auprès de la banque</h1>
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
                        NADO.MA vous promet un accompagnement et des délais de réponse rapides. Ne manquez pas les formules de financement les plus avantageuses Meilleurs tarifs Sans frais de dossier Remises importantes Accord à distance Gestion du process achat.
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
