@extends('layouts.app')

@section('services', 'Home | Nado.ma')

@section('content')
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/banner/apropos.jpg')}});">
        <div class="container">
        <div class="dlab-bnr-inr-entry">
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
