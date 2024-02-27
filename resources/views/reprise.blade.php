@extends('layouts.app')

@section('Reprise', 'Home | Nado.ma')

@section('content')
   <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/banner/reprise.jpg')}});background-position-y: 37%;">
        <div class="container">
            <div class="dlab-bnr-inr-entry text-center">
				<h1 class="text-white m-b10 font-40">REPRISE VÉHICULE</h1>
				<span class="text-white m-r10 font-14">Effectuez le meilleur changement pour votre voiture dans les plus brefs délais.</span>
			</div>
        </div>
    </div>
    <!-- inner page banner END -->
    <div class="section-full bg-white" style="background-image: url({{ asset('assets/images/background/about-us1.jpg')}}); background-position: right bottom; background-repeat: no-repeat; background-size: 100% auto;">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="road-price">
						<form>
							<div class="form-head bg-primary text-white">
								<h3 class="m-a0 text-white">REPRISE VÉHICULE</h3>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text"  placeholder="Your Name" class="form-control"/>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text"  placeholder="Mobile" class="form-control"/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text"  placeholder="City" class="form-control"/>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text"  placeholder="Pin Code" class="form-control"/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<select class="form-control">
											<option>Select Brand</option>
											<option>Popular Brands</option>
											<option>Honda</option>
											<option>Toyota</option>
											<option>Mahindra</option>
											<option>Tata</option>
											<option>Ford</option>
											<option>Renault</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<select class="form-control">
											<option>Select Model</option>
											<option>Hatchback</option>
											<option>MUV</option>
											<option>SUV</option>
											<option>Luxury</option>
											<option>Minivans</option>
											<option>Coupe</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="text-center">
										<p class="m-b10">We value your privacy. Your details are secure with us.</p>
										<button class="site-button btn-block" type="button">Show On Road Price</button>
									</div>
								</div>
							</div>
							
							
						</form>
					</div>
				</div>
			</div>
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
