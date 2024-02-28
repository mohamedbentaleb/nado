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
						<div class="title-sm text-uppercase text-white">Know more about us</div>
						<h2 class="h2 text-primary">Who<span class="font-weight-800">Cars Dealers</span> Are</h2>
						<div class="sep"></div>
					</div>
					<div class="row">
						<div class="col-md-6 m-b60">
							<p class="text-gray-dark">We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality and good taste Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
						</div>
						<div class="col-md-6 m-b60">
							<blockquote>
								We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality.
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
								<h5 class="dlab-tilte">Million Staffs</h5>
								<p>Our staff can picking you anywhere anytime</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover active">
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-signs"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte">Free Insurance</h5>
								<p>Rent a car 3 days & get free insurance</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover">					
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-vehicle"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte">Trusted Rent</h5>
								<p>We working since 1980 with 4.000 customers</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="box-hover">
						<div class="icon-bx-wraper bx-style-1 p-a30 ">
							<div class="icon-md text-primary m-b10"> <a href="#" class="icon-cell"><i class="flaticon-break-1"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte">All Type Cars</h5>
								<p>We have all brand & type cars in our garage</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="about-des-link">
						<a href="" class="site-button m-r15">VIEW ALL VEHICLES</a>
						<a href="" class="site-button gray text-uppercase">Reserved Car</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="section-full p-t50 bg-white content-inner-1">
        <div class="container">
            <div class="row">
                <!-- Side bar start -->
                <div class="col-md-12 col-lg-12 col-sm-12">
					<div class="row">
						<div class="col-md-8">
							<div class="icon-bx-wraper bx-style-1 p-a20 p-b10 m-b30">
								<h3 class="h3 m-t0">Price $5890 </h3>
								<h5 class="">Hyundai EON LPG Magna Plus </h5>
								<ul class="used-car-dl-info">
									<li>
										<a href="#" class="site-button" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">
										<i class="fa fa-usd"></i>
										View On Road Price 
										</a>
									</li>
								</ul>
								<p class="m-t15 m-b5">Ex-showroom Price</p>
								<div class="m-b10">
									<select>
										<option>Mumbai</option>
										<option>Chandigarh </option>
										<option>Rajasthan</option>
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
					
					
					<div class="clearfix">
						<div class="icon-bx-wraper bx-style-1 p-a20">
							<h4>DESCRIPTION Hyundai EON LPG Magna Plus</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="section-full bg-white content-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="section-head text-center head-1">
                        <h3 class="h3 text-uppercase">Pack Nado</h3>
                        <div class="dlab-separator bg-gray-dark"></div>
                    </div>
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
												<li><i class="fa fa-check"></i> 1 fois/J renouvellement pondent 7/J sur (nado.ma-avito.ma-moteur.ma)</li>
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
												<h2>Showroom</h2>
											</div>
											<ul class="pricingtable-features">
												<li><i class="fa fa-check"></i> Service local Personnalisée </li>
												<li><i class="fa fa-check"></i> Nado à déposé votre annonce sur les principaux sites de vente</li>
												<li><i class="fa fa-check"></i> Signature Nado.ma</li>
												<li><i class="fa fa-check"></i> 3 fois/J renouvellement pondent 15/J sur (nado.ma-avito.ma-moteur.ma)</li>
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
												<h2>Show out</h2>
											</div>
											<ul class="pricingtable-features">
												<li><i class="fa fa-check"></i> Service de mobilité </li>
												<li><i class="fa fa-check"></i> Nado à déposé votre annonce sur les principaux sites de vente</li>
												<li><i class="fa fa-check"></i> 2 fois/J renouvellement pondent 10/J sur (nado.ma-avito.ma-moteur.ma)</li>
												<li><i class="fa fa-check"></i> Video Youtube présentation de voiture</li>
												<li><i class="fa fa-check"></i> Le contrôle général</li>
												<li><i class="fa fa-check"></i> Teste drive</li>
												<li><i class="fa fa-check"></i> Rendez-vous</li>

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
        var ajaxurl = "/Services/"+mark+"/getmodels";
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
