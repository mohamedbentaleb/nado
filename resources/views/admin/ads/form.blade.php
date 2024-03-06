@extends('admin.layouts.app')

@section('title' , $ads->exists ? 'Edit User' : 'New User')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/back/assets/css/uploader/image-uploader.min.css') }}">
@endsection
@section('content')
<div id="main-content">
<div class="page-heading">
    <h3>Annonces</h3>
</div>
<div class="page-content">
    <section class="row">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Annonce</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route($ads->exists ? 'annonces.update' : 'annonces.store' , $ads) }}"  method="post" class="form form-vertical" enctype="multipart/form-data">
                            @csrf
                            @method($ads->exists ? 'PUT' : 'POST')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.input', ["class" => 'col', "label" => "Téléphone" , "type" => "text",  "value" => $ads->phone, "name" => 'phone', ])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.input', ["class" => 'col', "label" => "Prix" , "type" => "text",  "value" => $ads->prix, "name" => 'prix', ])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group col">
                                            <label for="brand_id">Mark</label>
                                            <select name="mark" id="brand_id" class="form-select form-control nado-marks @error('brand_id') is-invalid  @enderror" >
                                                <option value="">Mark</option>
                                                @foreach($brands as $b)
                                                    <option value="{{ $b->name }}" data-id="{{$b->id}}" @selected($ads->model == $b->name )>{{ $b->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('brand_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group col">
                                            <label for="modele">Modele</label>
                                            <select class="form-control nado-models" name="modele" id="modele" required>
                                                <option value="">Modele</option>
                                            </select>

                                            @error('modele')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group col">
                                            <label for="year">Année</label>
                                            <select class="form-control" name="year" id="year" required>
                                                <option value="">Sélectionner</option>
                                                @for ($i = date("Y"); $i >= 1992; $i--)
                                                    <option title="{{$i}}" value="{{$i}}">
                                                        {{$i}}
                                                    </option>
                                                @endfor
                                            </select>

                                            @error('year')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.input', ["class" => 'col', "label" => "Km" , "type" => "text", "name" => 'km', ])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group col">
                                            <label for="cv">Puissance fiscale</label>
                                            <select class="form-control" name="cv" id="cv" required>
                                                <option value="">Sélectionner</option>
                                                @for ($i = 2; $i <= 60; $i++)
                                                    <option title="{{$i}}" value="{{$i}}">
                                                        {{$i}}
                                                    </option>
                                                @endfor
                                            </select>

                                            @error('cv')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.select', ["class" => 'col', "label" => "Carburant" ,"name" => 'carburant', "value" => $ads->carburant, "data" => ["" => "Sélectionner", "essence" => "Essence", "diesel" => "Diesel", "electrique" => "Electrique", "hybride" => "Hybride"]])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.select', ["class" => 'col', "label" => "Boite de vitesses" ,"name" => 'box', "value" => $ads->box, "data" => ["" => "Sélectionner", "manuelle" => "Manuelle", "automatique" => "Automatique"]])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.select', ["class" => 'col', "label" => "etat" ,"name" => 'etat', "value" => $ads->etat, "data" => ["" => "Sélectionner", "excellent" => "Excellent", "très bon" => "Trés bon", "bon" => "Bon", "correct" => "Correct", "endommagé" => "Endommagé", "neuf" => "Neuf"]])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.select', ["class" => 'col', "label" => "Origine" ,"name" => 'origine', "value" => $ads->origine, "data" => ["" => "Sélectionner", "dédouané" => "Dédouané", "WWW au Maroc" => "WWW au Maroc", "importé neuf" => "Importé neuf", "pas encore dédouané" => "Pas encore dédouané"]])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group col">
                                            <label for="nb_Door">Nombre de portes</label>
                                            <select class="form-control" name="nb_Door" id="nb_Door" required>
                                                <option value="">Sélectionner</option>
                                                @for ($i = 2; $i <= 10; $i++)
                                                    <option title="{{$i}}" value="{{$i}}">
                                                        {{$i}}
                                                    </option>
                                                @endfor
                                            </select>

                                            @error('nb_Door')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group col">
                                            <label for="bodywork">Carrosserie</label>
                                            <select class="form-control" id="bodywork" name="bodywork" required>
                                                <option value="">Sélectionner</option>
                                                <option title="Cabriolet" value="coupe cabriolet">COUPé CABRIOLET</option>
                                                <option title="Suv et 4x4" value="suv et 4x4">SUV ET 4X4</option>
                                                <option title="Citadine" value="citadine">CITADINE</option>
                                                <option title="Berline" value="berline">BERLINE</option>
                                                <option title="Compact" value="compact">COMPACT</option>
                                                <option title="Crossover" value="Crossover">CROSSOVER</option>
                                                <option title="Pick up" value="pick up">PICK UP</option>
                                            </select>

                                            @error('bodywork')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.select', ["class" => 'col', "label" => "Première main" ,"name" => 'premiere_main', "value" => $ads->premiere_main, "data" => ["" => "Sélectionner", "non" => "Non", "oui" => "Oui"]])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.input', ["class" => 'col', "label" => "Video" , "type" => "text",  "value" => $ads->video, "name" => 'video', ])
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        @include('admin.partials.input', ["class" => 'col', "label" => "Reel" , "type" => "text",  "value" => $ads->reel, "name" => 'reel', ])
                                    </div>
                                    <div class="col-6 col-md-4 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="showroom" name="showroom"  value="1">
                                            <label class="form-check-label" for="showroom">Showroom</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="finance" name="finance"  value="1">
                                            <label class="form-check-label" for="finance">Finance</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="certifie" name="certifie"  value="1">
                                            <label class="form-check-label" for="certifie">certifié</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 my-2">
                                        @include('admin.partials.input', ["class" => 'col', "label" => "Titre" , "type" => "text",  "value" => $ads->titre, "name" => 'titre', ])
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="jantesA" name="jantesA"  value="1">
                                            <label class="form-check-label" for="jantesA">Jantes aluminium</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="airbags" name="airbags"  value="1">
                                            <label class="form-check-label" for="airbags">Airbags</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="climatisation" name="climatisation"  value="1">
                                            <label class="form-check-label" for="climatisation">Climatisation</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="gps" name="gps"  value="1">
                                            <label class="form-check-label" for="gps">Système de navigation</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="toit_ouvrant" name="toit_ouvrant"  value="1">
                                            <label class="form-check-label" for="toit_ouvrant">Toit ouvrant</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="siege_cuir" name="siege_cuir"  value="1">
                                            <label class="form-check-label" for="siege_cuir">Siège cuir</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="radar_recul" name="radar_recul"  value="1">
                                            <label class="form-check-label" for="radar_recul">Radar de recul</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="camera_recul" name="camera_recul"  value="1">
                                            <label class="form-check-label" for="camera_recul">Caméra de recul</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="vitreselec" name="vitreselec"  value="1">
                                            <label class="form-check-label" for="vitreselec">Vitres éléctriques</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="abs" name="abs"  value="1">
                                            <label class="form-check-label" for="abs">ABS</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="eps" name="eps"  value="1">
                                            <label class="form-check-label" for="eps">EPS</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rv" name="rv"  value="1">
                                            <label class="form-check-label" for="rv">Régulateur de vitesse</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="lv" name="lv"  value="1">
                                            <label class="form-check-label" for="lv">Limiteur de vitesse</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="cd" name="cd"  value="1">
                                            <label class="form-check-label" for="cd">Cd/mp3/bluetooth</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="ordinateur" name="ordinateur"  value="1">
                                            <label class="form-check-label" for="ordinateur">Ordinateur de bord</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 my-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="verrouillage" name="verrouillage"  value="1">
                                            <label class="form-check-label" for="verrouillage">Verrouillage centralisé à distance</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 my-2">
                                        <div class="form-group col">
                                        <label for="userfile">Photos</label>
                                            <div class="choose-file text-center py-2 rounded bg-white">
                                                <div class="msgImage">
                                                </div>
                                                <div class="input-images">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            @if ($ads->exists)
                                                Update
                                            @else
                                                Add new Annonce
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
@endsection
@section('script')
<script  src="{{ asset('assets/back/assets/js/uploader/image-uploader.min.js') }}"></script>
<script>
$(document).ready(function(){
    $("select.nado-marks").change(function () {
        $('select.nado-models').html("<option> Chargement en cours ... </option>").prop('disabled', 'disabled');
        var mark = $('select.nado-marks option:selected').attr('data-id');
        var formData = {
            'mark': mark,
            '_token' : $('input[name="_token"]').val()
        };
        var ajaxurl = "/admin/models/"+mark+"/getmodels";
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
    $(function () {
            $('.input-images').imageUploader();
        });
</script>
@endsection
