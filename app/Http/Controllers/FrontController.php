<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imgslider;
use App\Models\Videosads;
use App\Models\Avistext;
use App\Models\Annonces;
use App\Models\Brands;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front', ['imgslider' => Imgslider::where('active', 1)->limit(6)->get(), 'vdAds' => Videosads::orderBy('id', 'desc')->limit(6)->get(), 'avistext' => Avistext::all(), "brands" => Brands::all(), 
                "similar_ads" => Annonces::where('active', 1)->where('status','disponible')->limit(9)->get(), "formatDate" => function($date){
                    return $this->formatDateLabel($date );
                }]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
