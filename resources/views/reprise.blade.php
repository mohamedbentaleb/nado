@extends('layouts.app')

@section('Reprise', 'Reprise | Nado.ma')

@section('link')
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.4.5/jquery.datetimepicker.min.css" rel="stylesheet">
@endsection

@section('content')
   <div class="dlab-bnr-inr overlay-black-middle hide" style="background-image:url({{ asset('assets/images/banner/reprise.jpg')}});background-position-y: 37%;">
        <div class="container">
            <div class="dlab-bnr-inr-entry text-center">
				<h1 class="text-white m-b10 font-40">REPRISE VÉHICULE</h1>
				<span class="text-white m-r10 font-14">Effectuez le meilleur changement pour votre voiture dans les plus brefs délais.</span>
			</div>
        </div>
    </div>
    <!-- inner page banner END -->
    <div class="section-full bg-white" style="background-image:url({{ asset('assets/images/banner/reprise.jpg')}}); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
        	    <div class=" col-10 offset-1 col-lg-6 offset-lg-0 m-tb20" style="background-color: rgb(255,255,255,.7);">
                    <div class="row p-a20">
                        <div class="col-12">

                            <h1>Nado Connect</h1>
                            <h4 class="font-weight-light">Votre Conseiller Commercial Nado sans vous déplacer</h4>
                            <hr>
                            <p>Avec Nado Connect, plus besoin de vous déplacer dans un Showroom pour acheter une voiture !<br>
                                Votre Conseiller Commercial Nado est à votre disposition en Live pour répondre à vos questions, vous présenter les modèles Nado, les formules de financement et vous assister dans toutes les démarches d'achat de votre nouvelle voiture jusqu'à sa livraison à votre domicile !</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-a20">
                        <div class="col-12">
                            <h4 class="font-weight-light">Comment ça marche ?</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <svg style="max-width:60px;max-height: 60px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h48v48h-48z" fill="none"></path>
                                <path d="M6 10h-4v32c0 2.21 1.79 4 4 4h32v-4h-32v-32zm22 20h4v-20h-8v4h4v16zm14-28h-28c-2.21 0-4 1.79-4 4v28c0 2.21 1.79 4 4 4h28c2.21 0 4-1.79 4-4v-28c0-2.21-1.79-4-4-4zm0 32h-28v-28h28v28z"></path>
                            </svg>
                        </div>
                        <div class="col-8 col-sm-10">
                            <p>A partir de ce site, vous planifiez un rendez-vous à la date et l'heure qui vous convient.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <svg width="60" height="60" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h48v48h-48z" fill="none"></path>
                                <path d="M6 10h-4v32c0 2.21 1.79 4 4 4h32v-4h-32v-32zm36-8h-28c-2.21 0-4 1.79-4 4v28c0 2.21 1.79 4 4 4h28c2.21 0 4-1.79 4-4v-28c0-2.21-1.79-4-4-4zm0 32h-28v-28h28v28zm-8-8h-8v-4h4c2.21 0 4-1.79 4-4v-4c0-2.21-1.79-4-4-4h-8v4h8v4h-4c-2.21 0-4 1.79-4 4v8h12v-4z"></path>
                            </svg>
                        </div>
                        <div class="col-8 col-sm-10">
                            <p>Le jour de votre rendez-vous, votre Conseiller prend contact avec vous par le moyen de
                                communication que vous avez indiqué.</p>
                        </div>
                    </div>
                </div>
        	    <div class="col-10 offset-1 col-lg-6 offset-lg-0 m-tb20 " >
                    <div class="row m-lr10 p-tb20" style="background-color: rgb(255,255,255,.7);">
                        <div class="col-12 p-lr20">
                            @if (session('success'))
                                <div class="alert alert-success no-bg"> {{ session('success') }} </div>
                            @endif
							<form action="{{ route('reprise.store') }}" method="POST" enctype="multipart/form-data">
							    @csrf
								<div class="row">
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Nom & Prénom</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nom & Prénom" required>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Ville</label>
											<select class="form-control" name="city" id="city" required>
											    <option value="">Ville</option>
											    @foreach($city as $c)
											    <option value="{{$c->name}}">{{$c->name}}</option>
											    @endforeach
											</select>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Marque</label>
											<select class="form-control nado-marks" name="mark" id="mark" required>
											    <option value="">Marque</option>
											    @foreach($brands as $brand)
											    <option value="{{$brand->name}}" data-id="{{$brand->id}}">{{$brand->name}}</option>
											    @endforeach
											</select>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Modele</label>
											<select class="form-control nado-models" name="modele" id="modele" required>
											    <option value="">Modele</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Téléphone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone" required>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Comment voulez vous être contacté</label>
											<select class="form-control " name="contacte" id="contacte" required >
											    <option value="">Selectionner</option>
											    <option value="WhatsApp">WhatsApp</option>
											    <option value="Telephone">Téléphone</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 m-b10">
										<div class="input-group">
											<label>Rendez-vous</label><br/>
											<input type="text" class="form-control rendezvous" name="rendezvous" id="rendezvous" placeholder="Rendez-vous" required>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 ">
										<div class="text-center">
											<button class="site-button" type="submit">CONTINUE</button>
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
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.4.5/jquery.datetimepicker.min.js"></script>
<script>
$(document).ready(function(){
    $(".rendezvous").datetimepicker({
	  timepicker: true,
	  datepicker: true,
	  format: 'Y-m-d H:m:s',
	  autoclose: true,
	});
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
    });
</script>
@endsection
