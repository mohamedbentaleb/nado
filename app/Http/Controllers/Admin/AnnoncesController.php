<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdsRequest;
use App\Models\Annonces;
use App\Models\Brands;
use App\Models\Ville;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
//use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Str;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ads.index' , ['ads' => Annonces::all(), 'brands' => Brands::all(), 'city' => ville::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ads.form', ['ads' => new Annonces(), 'brands' => Brands::all(), 'city' => ville::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsRequest $request)
    {
        $ads = $request->validated();
        $ads["active"] = 1;
        if ($request->hasFile('image')) {
             $ads["image"] = $this->ImageCar($request->file('image'),  $ads['mark']."-".$ads['modele']);
         }
        if ($request->hasFile('imgrapport')) {
             $ads["imgrapport"] = $this->ImageCar($request->file('imgrapport'),  $ads['mark']."-".$ads['modele']);
         }
        if ($request->hasFile('rapport')) {
             $ads["rapport"] = $ads['mark']."-".$ads['modele']."-".rand(100000, 999999).'.'.$request->rapport->extension();  
             $request->rapport->move(storage_path('app/public/pdf/'), $ads["rapport"]);
         }
        $ads = Annonces::create($ads);
        

        if ($request->hasFile('userfile')) {
            foreach ($request->file('userfile') as $imagefile) {
                $this->resizeImage($imagefile, $ads->mark."-".$ads->modele, $ads->id);
            }
        }
        return to_route('annonces.index')->with("success" , "Success store brand");
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
    public function edit($id)
    {
        $annonces = Annonces::find($id);
        return view('admin.ads.form', [
            'ads' => $annonces,
            'brands' => Brands::all(),
            'city' => ville::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdsRequest $request, $id)
    {
        $ads = $request->validated();
        if(!$request->has('certifie')){
            $ads["certifie"] = 0;
        }
        if(!$request->has('showroom')){
            $ads["showroom"] = 0;
        }
        if(!$request->has('finance')){
            $ads["finance"] = 0;
        }
        if(!$request->has('jantesA')){
            $ads["jantesA"] = 0;
        }
        if(!$request->has('airbags')){
            $ads["airbags"] = 0;
        }
        if(!$request->has('climatisation')){
            $ads["climatisation"] = 0;
        }
        if(!$request->has('gps')){
            $ads["gps"] = 0;
        }
        if(!$request->has('toit_ouvrant')){
            $ads["toit_ouvrant"] = 0;
        }
        if(!$request->has('radar_recul')){
            $ads["radar_recul"] = 0;
        }
        if(!$request->has('camera_recul')){
            $ads["camera_recul"] = 0;
        }
        if(!$request->has('vitreselec')){
            $ads["vitreselec"] = 0;
        }
        if(!$request->has('abs')){
            $ads["abs"] = 0;
        }
        if(!$request->has('eps')){
            $ads["eps"] = 0;
        }
        if(!$request->has('rv')){
            $ads["rv"] = 0;
        }
        if(!$request->has('lv')){
            $ads["lv"] = 0;
        }
        if(!$request->has('cd')){
            $ads["cd"] = 0;
        }
        if(!$request->has('ordinateur')){
            $ads["ordinateur"] = 0;
        }
        if(!$request->has('verrouillage')){
            $ads["verrouillage"] = 0;
        }
        if(!$request->has('active')){
            $ads["active"] = 0;
        }
        if(!$request->has('double_toit_ouvrant')){
            $ads["double_toit_ouvrant"] = 0;
        }
        if ($request->hasFile('image')) {
             $ads["image"] = $this->ImageCar($request->file('image'), $ads['mark']."-".$ads['modele']);
         }
        if ($request->hasFile('imgrapport')) {
             $ads["imgrapport"] = $this->ImageCar($request->file('imgrapport'),  $ads['mark']."-".$ads['modele']);
         }
        if ($request->hasFile('rapport')) {
             $ads["rapport"] = $ads['mark']."-".$ads['modele']."-".rand(100000, 999999).'.'.$request->rapport->extension();  
             $request->rapport->move(storage_path('app/public/pdf/'), $ads["rapport"]);
         }
          
        Annonces::whereId($id)->update($ads);
        if ($request->hasFile('userfile')) {
            foreach ($request->file('userfile') as $imagefile) {
                $this->resizeImage($imagefile, $ads['mark']."-".$ads['modele'], $id);
            }
        }
        return to_route('annonces.index')->with("success" , "Success update brand");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Annonces::where('id',$id)->delete();
        return to_route("annonces.index")->with("success" , "Annonce deleted successfully");
    }
    /**
     * Remove the specified resource from storage image.
     *
     */
    public function deleteImage($id)
    {
       $media = Media::find($id);
       $media->delete();
       return "1";
    }

    public function resizeImage($imagefile, $title, $idAds){

        $media = new Media;
        $image = $imagefile;
        $name =  Str::slug($title, '-').'-'.rand(100000, 999999).'.'.$image->getClientOriginalExtension();
        $manager = new ImageManager(Driver::class);
        $img = $manager->read($image);
        $img->save(storage_path('app/public/ads/' . $name));
        $media->name = $name;
        $media->annonces_id = $idAds;
        $media->save();
    }
    public function ImageCar($photo, $title){
        $image = $photo;
        $imageName = Str::slug($title, '-').'-'.rand(100000, 999999).'.'.$image->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $img = $manager->read($image);
        $img->save(storage_path('app/public/ads/' . $imageName));
        return $imageName;
    }

}
