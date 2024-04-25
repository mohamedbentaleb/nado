<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonces;
use App\Models\Brands;
use App\Models\Models;
use App\Models\Ville;
use App\Models\Offre;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data =  Annonces::where('active', 1)->orderBy('id', 'desc')->get();
        $models =  "";
        if($request){
            if ( $marque =  strtoupper($request->marque) ?? ""){
                $marque = str_replace("-", " ", $marque);
                $data = $data->where('mark',  $marque);
                $mark_id = Brands::select('id')->where('name', $marque)->get();
                $models = Models::orderby("name","asc")->select('id','name')->where('brand_id', $mark_id[0]->id)->get();
            }
            if ( $modele =  $request->modele ?? ""){
                $modele = str_replace("_", " ", $modele);
                $modele = ucwords($modele);
                $data = $data->where('modele',  $modele);
            }
            if ( $carburant =  $request->carburant ?? ""){
                $data = $data->where('carburant',  $carburant);
            }
            if ( $box =  $request->box ?? ""){
                $data = $data->where('box',  $box);
            }
            if ( $ville =  $request->ville ?? ""){
                $ville = str_replace("_", " ", $ville);
                $data = $data->where('city',  $ville);
            }
            if ( $annee =  $request->annee ?? ""){
                $data = $data->where('year',  $annee);
            }
            if ( $bodywork =  $request->bodywork ?? ""){
                $bodywork = str_replace("-", " ", $bodywork);
                $data = $data->where('bodywork',  $bodywork);
            }

            if ( $prix =  $request->prix ?? ""){
                $data = $data->where('prix' , '>=' ,  $prix);
            }
            if( $km =  $request->km ?? ""){
                $data = $data->where('km' , '>=' , $km);
            }
        }

        if($data->count() > 0){
            return view('annonces.list', ["ads" => $data, "brands" => Brands::all(), "ville" => Ville::all(), "searchKeys" => $request->all(), "models" => $models, "formatDate" => function($date){
                    return $this->formatDateLabel($date );
                } ]);
        }else{

            return to_route('achat.index')->with("danger" , "aucune voiture trouvée dans cette recherche");
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $offre = $request->validate([
            'car' => ['required', 'string'],
            'prix' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'idads' => ['required', 'numeric'],
            'offre' => ['required', 'string']

        ]);

        Offre::create($offre);
        return back()->with("success" , "Votre demande a ete envoyer");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($marque , $modele , $id)
    {

        $data = Annonces::where('active', 1)->where('id', $id)->limit(1)->get();
        //dump($id);die();
        return view('annonces.detail', ["detail" => $data,
                "similar_ads" => Annonces::where('id', '!=',  $id)->where('status', 'disponible')->limit(6)->get(),
                "formatDate" => function($date){
                    return $this->formatDateLabel($date );
                }]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public static function formatDateLabel($date){


			$datediff = time() - strtotime($date);
			$tm = 60;
			$res =  round( $datediff / $tm );
			$tt =  "minutes";

			if($res == 0 ){
				$res = 1 ;
			}

			if($res > 50 ){
				$res =  round( $datediff / ($tm * 60 )  );
				$tt = "heures";
				if($res > 23 ){
						$res =  round( $datediff / ($tm * 60 * 24 )  );
						$tt =  "jours";
					if($res > 30 ){
						$res =  round( $datediff / ($tm * 60 * 24 * 30)  );
						$tt =  "mois";
						if($res >= 12 ){
							$res =  round( $datediff / ($tm * 60 * 24 * 30 * 12)  );
							$tt =  "ans";
						}
					}
				}
			}
			return "Il y a ".$res." ".$tt;

	}
}
