<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anonnces extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'phone', 'titre', 'prix', 'mark', 'modele', 'year', 'km', 'carburant', 'box', 'etat', 'origine', 'nb_Door', 'premiere_main', 'video', 'reel', 'bodywork', 'certifie', 'showroom', 'finance', 'jantesA', 'airbags', 'climatisation', 'gps', 'toit_ouvrant', 'siege_cuir', 'radar_recul', 'camera_recul', 'vitreselec', 'abs', 'eps', 'rv', 'lv', 'cd', 'ordinateur', 'verrouillage' ];

    public function media(){
        return $this->hasMany('App\Models\Media');
    }
}
