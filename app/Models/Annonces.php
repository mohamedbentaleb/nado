<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Annonces extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'phone', 'titre', 'prix', 'mark', 'modele', 'year', 'image', 'imgrapport', 'rapport', 'km', 'cv', 'city', 'carburant', 'box', 'etat', 'origine', 'nb_Door', 'premiere_main', 'video', 'reel', 'bodywork', 'status', 'certifie', 'showroom', 'finance', 'jantesA', 'airbags', 'climatisation', 'gps', 'toit_ouvrant', 'siege_cuir', 'radar_recul', 'camera_recul', 'vitreselec', 'abs', 'eps', 'rv', 'lv', 'cd', 'ordinateur', 'verrouillage', 'co2', 'double_toit_ouvrant', 'active' ];

     public function media(){
        return $this->hasMany('App\Models\Media')->orderBy('id', 'desc');
     }

    public function pathImageAds()
    {
        $nameImg = "";
        $image = json_decode($this->media);
        foreach($image as $im){
            if($im->name != null){
                $nameImg = $im->name;
            }
            
        }
        $image = $nameImg ? $nameImg : "ads/phonedef.jpg";
        return $image;

    }
}
